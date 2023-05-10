<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CommicsController extends Controller
{
    public function index()
    {
        $client = new Client();

        $response = $client->request('GET', 'https://gateway.marvel.com/v1/public/comics', [
            'query' => [
                'apikey' => 'df3ff708b5b0e53e8b14c4ad502f83f9',
                'ts' => time(),
                'hash' => md5(time() . 'e8c4dbf2c24e46f03c088f0ffde82ae8068582cc' . 'df3ff708b5b0e53e8b14c4ad502f83f9'),
            ]
        ]);

        $comics = json_decode($response->getBody()->getContents());

        return view('comics.index', compact('comics'));
    }

    public function show($id){

        $client = new Client();

        $response = $client->request('GET', 'https://gateway.marvel.com:443/v1/public/comics/' . $id , [
            'query' => [
                'apikey' => 'df3ff708b5b0e53e8b14c4ad502f83f9',
                'ts' => time(),
                'hash' => md5(time() . 'e8c4dbf2c24e46f03c088f0ffde82ae8068582cc' . 'df3ff708b5b0e53e8b14c4ad502f83f9'),
            ]
        ]);

        $comic = json_decode($response->getBody()->getContents());

        $objeto = 0;
        $objeto1 = [];
        
  

        foreach ($comic->data->results as $item) {
            $objeto = $item;
        }

        
        foreach ($objeto->characters->items as $element) {
            $endPoint = $element->resourceURI;

            $response2 = $client->request('GET', $endPoint , [
                'query' => [
                    'apikey' => 'df3ff708b5b0e53e8b14c4ad502f83f9',
                    'ts' => time(),
                    'hash' => md5(time() . 'e8c4dbf2c24e46f03c088f0ffde82ae8068582cc' . 'df3ff708b5b0e53e8b14c4ad502f83f9'),
                ]
            ]);
            array_push($objeto1, json_decode($response2->getBody()->getContents()));
        }

    
        // $tam = count($objeto1);

        // for ($i=0; $i < $tam ; $i++) {             
        //     foreach ($objeto1[$i]->data->results as $key) {
        //         dump($key->name);
        //         dump($key->thumbnail->path);
        //     }
        // }

        // echo gettype($objeto1); 

        return view('comics.show', compact('objeto', 'objeto1'));
    }
}
