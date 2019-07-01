<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DashboardController extends Controller
{
    public function token_f()
    {
        return session()->get('token.access_token');
    }
    public function customerShip(Request $request)
    {
        try {
            $client = new Client();
            $request = $client->request('GET', env('API_URL') . '/api/customerShip/', [
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
    public function getsearchRe(Request $request)
    {
        try {
            $client = new Client;
            $request = $client->request('GET', env('API_URL') . '/api/getsearchRe/', [
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
    public function customerCount()
    {
        try {
            $client = new Client;
            $request = $client->request('GET', env('API_URL') . '/api/customerCount/', [
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
    public function customerScheduled()
    {
        try {
            $client = new Client;
            $request = $client->request('GET', env('API_URL') . '/api/customerScheduled/', [
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
    public function customerDelivered()
    {
        try {
            $client = new Client;
            $request = $client->request('GET', env('API_URL') . '/api/customerDelivered/', [
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
    public function customerCanceled()
    {
        try {
            $client = new Client;
            $request = $client->request('GET', env('API_URL') . '/api/customerCanceled/', [
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
    public function delayedCount()
    {
        try {
            $client = new Client;
            $request = $client->request('GET', env('API_URL') . '/api/delayedCount/', [
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

    // Charts
    public function getClientShip()
    {
        try {
            $client = new Client;
            $request = $client->request('GET', env('API_URL') . '/api/getClientShip/', [
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

    public function getClientScheduled()
    {
        try {
            $client = new Client;
            $request = $client->request('GET', env('API_URL') . '/api/getClientScheduled/', [
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

    public function getClientDelivered()
    {
        try {
            $client = new Client;
            $request = $client->request('GET', env('API_URL') . '/api/getClientDelivered/', [
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

    public function getClientCancled()
    {
        try {
            $client = new Client;
            $request = $client->request('GET', env('API_URL') . '/api/getClientCancled/', [
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
}
