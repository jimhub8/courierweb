<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ReportController extends Controller
{
    public function token_f()
    {
        return session()->get('token.access_token');
    }
    public function statusReport(Request $request)
    {
            // return $request->all();
        try {
            $client = new Client();
            $request = $client->request('POST', ENV('API_URL').'/api/displayReport', [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer ' . $this->token_f(),
                ],
                'body' => json_encode([
                    'data' => $request->all(),
                ])
            ]);
            // $response = $http->get(env('API_URL').'/api/getUsers');
            return $response = $request->getBody()->getContents();
        } catch (\Exception $e) {

            \Log::error($e->getMessage() . ' ' . $e->getLine() . ' ' . $e->getFile());
            return $e->getMessage() . ' ' . $e->getLine() . ' ' . $e->getFile();
        }
        $http = new Client;

        $response = $http->post(ENV('API_URL') . '/api/displayReport', [
            'headers' => [
                'Content-type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $this->token_f(),
            ],
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => 'client-id',
                'client_secret' => 'client-secret',
                'redirect_uri' => 'http://example.com/callback',
            ],
        ]);

        return json_decode((string)$response->getBody(), true);
    }
}
