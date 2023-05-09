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
}
