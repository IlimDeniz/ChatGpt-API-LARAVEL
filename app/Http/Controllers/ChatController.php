<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Messages;
use Throwable;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    /**
     * @param Request $request
     * @return string
     */
    public function __invoke(Request $request): string
    {
        $comeMessage = $request->input('content');
        try {
            /** @var array $response */
            $response = Http::withHeaders([
                "Content-Type" => "application/json",
                "Authorization" => "Bearer " . env('CHAT_GPT_KEY'),
            ])->post('https://api.openai.com/v1/chat/completions', [
                "model" => 'gpt-4o-mini',
                "messages" => [
                    [
                        "role" => "user",
                        "content" => $comeMessage,
                    ],
                ],
                "temperature" => 0,
                "max_tokens" => 2048,
            ])->json();

            // Cevabı alıyoruz
            $message = $response['choices'][0]['message']['content'];

            // Kod bloklarını formatlamak için Markdown'dan HTML'ye çevirme
            $formattedMessage = $this->formatMarkdown($message);

            $userId = Auth::user()->id;

            $saveMessage = new Messages();

            $saveMessage->user_id = $userId;
            $saveMessage->promt = $comeMessage;
            $saveMessage->answer = $formattedMessage;

            if($saveMessage->save()){
                return $formattedMessage;
            }
            else{
                return "Soru cevaplanamadı";
            }

        } catch (Throwable $e) {
            return $e;
        }
    }

    public function formatMarkdown($message) {
        // Markdown'daki ```php ... ``` ile başlayan kod bloklarını HTML <pre><code>...</code></pre> ile değiştiriyoruz
        $message = preg_replace('/```php(.*?)```/s', '<pre><code class="language-php">$1</code></pre>', $message);

        // Genel Markdown formatlarını (``` kod blokları) için düz dönüşüm
        $message = preg_replace('/```(.*?)```/s', '<pre><code>$1</code></pre>', $message);

        return nl2br($message); // Satır sonlarını HTML'de doğru görüntülemek için nl2br ekliyoruz
    }

    public function aiChatBot(){
        $messages = Messages::where('user_id', Auth::user()->id)->get();

        return view('ai-chat-bot')->with('messages', $messages);
    }

    public function dashboard(){
        return view('welcome');
    }
}
