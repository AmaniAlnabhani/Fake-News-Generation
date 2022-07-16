<?php

namespace App\Http\Controllers;
use Orhanerday\OpenAi\OpenAi;

use Illuminate\Http\Request;

class AiController extends Controller
{
    public function index(){
        return view('/ai.index');
    }
    public function result(Request $request){
        $topic=$request->topic;
        $open_ai = new OpenAi(env('OPEN_AI_API_KEY'));
         
        $prompt="Create 5 fake news topics about  ".$topic."\n";//what ai will do
        $openAiOutput = $open_ai->complete([
            'engine' => 'davinci-instruct-beta-v3',
            'prompt' => $prompt,
            'temperature' => 0.9,
            'max_tokens' => 150,
            'frequency_penalty' => 0,
            'presence_penalty' => 0.6,
         ]);
         //dd($openAiOutput);
         $output=json_decode($openAiOutput,true);
         $outputText=$output["choices"][0]["text"];
        return view('/ai.index',['result'=>$outputText]);

    }
}
