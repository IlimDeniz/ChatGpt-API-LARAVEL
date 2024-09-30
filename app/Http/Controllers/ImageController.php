<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Throwable;
use App\Models\Images;

class ImageController extends Controller
{
    public function __invoke(Request $request): string
    {
        $comeMessage = $request->input('content');
        try {
            $response = Http::withHeaders([
                "Content-Type" => "application/json",
                "Authorization" => "Bearer " . env('CHAT_GPT_KEY'),
            ])->post('https://api.openai.com/v1/images/generations', [
                "model" => 'dall-e-3',
                "prompt" => $comeMessage, // Kullanıcıdan alınan prompt
                "n" => 1, // Tek bir resim oluşturulacak
                "size" => "1024x1024", // Görsel boyutu
            ])->json();

            $imageUrl = $response['data'][0]['url']; // Görsel URL'sini alıyoruz

            // Resmi indirip public dizinine kaydediyoruz
            $imageContents = file_get_contents($imageUrl);
            $imageName = 'images/' . uniqid() . '.png'; // Benzersiz bir isim oluşturuyoruz
            file_put_contents(public_path($imageName), $imageContents);

            $userId = Auth::user()->id;

            $saveImage = new Images();
            $saveImage->user_id = $userId;
            $saveImage->promt = $comeMessage;
            $saveImage->answer = $imageUrl;
            $saveImage->image_name = $imageName;

            if($saveImage->save()){
                return $imageName;
            }
            else{
                return "Fotoğraf Oluşturulamadı";
            }

            return asset($imageName); // Resmin URL'sini döndürüyoruz
        } catch (Throwable $e) {
            return $e->getMessage(); // Hata mesajını döndürüyoruz
        }
    }

    public function aiImageBot()
    {
        $images = Images::where('user_id', Auth::user()->id)->get()->reverse();
        return view('ai-image-bot')->with('images', $images);
    }
}
