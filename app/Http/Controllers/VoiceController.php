<?php

namespace App\Http\Controllers;

use App\Models\Voices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Throwable;

class VoiceController extends Controller
{
    public function __invoke(Request $request): string
    {
        $comeMessage = $request->input('content');
        $comeVoice = $request->input('voice');

        try {
            $response = Http::withHeaders([
                "Content-Type" => "application/json",
                "Authorization" => "Bearer " . env('CHAT_GPT_KEY'), // Doğru değişken ismini kullanın
            ])->post('https://api.openai.com/v1/audio/speech', [
                "model" => "tts-1",
                "input" => $comeMessage,
                "voice" => $comeVoice, // Doğru ses tipini kullanın
                "response_format" => "mp3",
                "speed" => "1",
            ]);

            // Yanıtı kontrol et
            if ($response->successful()) {
                // Ses dosyasını public/voices klasörüne kaydet
                $fileName = uniqid() . '.mp3'; // Dosya adını oluştur
                $filePath = public_path('voices/' . $fileName); // Tam yol
                file_put_contents($filePath, $response->body());

                // Sadece 'voices/dosya_adı.mp3' formatında isim kaydet
                $relativePath = 'voices/' . $fileName;

                $userId = Auth::user()->id;

                $saveVoice = new Voices();
                $saveVoice->user_id = $userId;
                $saveVoice->promt = $comeMessage;
                $saveVoice->answer = $comeVoice; // Dosyanın yolunu sakla
                $saveVoice->voice_name = $relativePath; // Dosyanın yolunu sakla

                if ($saveVoice->save()) {
                    return $relativePath; // URL'yi döndürüyoruz
                } else {
                    return "Ses oluşturulamadı";
                }
            }

            return "Ses oluşturulamadı"; // Başarısız durum için dönecek mesaj
        } catch (Throwable $e) {
            return $e->getMessage(); // Hata mesajını döndürüyoruz
        }

    }

    public function aiVoiceBot()
    {
        $voices = Voices::where('user_id', Auth::user()->id)->get()->reverse();
        return view('ai-voice-bot')->with('voices', $voices);
    }
}
