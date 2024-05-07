<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Client\RequestException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;


class DevelopmentApi implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        $response = Http::withHeaders([
            'authkey' => 'YOUR_SECRET_KEY'
        ])->get('www.mis.esnaad.com/api/v1/esnaad/developments');

        $jsonData = $response->json();
        // if(count($jsonData) > 0){
        // }
        if($jsonData){
            $this->data['available'] = '1';
            $this->data['response'] = $jsonData;
        }

        // Logic to handle the API response (e.g., update your model)

        return $this->data;
    }
}
