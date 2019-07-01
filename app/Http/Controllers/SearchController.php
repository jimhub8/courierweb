<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        // return $request->search;
        try {
            $client = new Client;
            $request = $client->request('POST', ENV('API_URL') . '/api/apiSearch/' . $request->search, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $this->token_f(),

                ],
            ]);
            // $response = $http->get(env('API_URL').'/api/getUsers');
            return $response = $request->getBody()->getContents();
        } catch (\Exception $e) {

            \Log::error($e->getMessage() . ' ' . $e->getLine() . ' ' . $e->getFile());
            return $e->getMessage() . ' ' . $e->getLine() . ' ' . $e->getFile();
        }
    }

    public function status($id)
    {
        $client = new Client;
        $request = $client->request('GET', ENV('API_URL') . '/api/status/' . $id, [
            'headers' => [
                'Content-type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $this->token_f(),
            ],
            'form_params' => [
                'name' => 'ywqywyqwq',
                'bank_id' => 'dqdqidq',
            ]
        ]);
        // $response = $http->get(env('API_URL').'/api/getUsers');
        return $response = $request->getBody()->getContents();
    }


    public function token_f()
    {
        return session()->get('token.access_token');
    }
}
