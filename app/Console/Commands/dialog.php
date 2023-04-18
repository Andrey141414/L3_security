<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
class dialog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dialog:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }

    public function SendMessage($text)
    {
        $key = 'c6e2e479-ba11-4f09-83b8-48b1e12c3d38';
        $response = Http::withHeaders([
            'X-API-KEY' => $key,
            'accept' => '*/*',
            'content-type' => 'application/json',
        ])->withBody(json_encode([
            "enable_google_results" => "true",
            "enable_memory" => false,
            "input_text" => $text."only text",
        ]))->post('https://api.writesonic.com/v2/business/content/chatsonic?engine=premium');

        print_r($response['message']);

        return $response;
    }

    public function InputFromKeyword($prewiew)
    {
        $text  = readline($prewiew);
        return $text;
    }

    public function Beta($arr)
    {
        foreach($arr as $message)
        {
            if($message == 'end')
            {
                return true;
            }
            $this->SendMessage($message);

        }
        return false;
    }
    
}
