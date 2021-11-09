<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class OauthController
{
        public function callback(Request $request)
        {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
            ])->post('https://github.com/login/oauth/access_token', [
                'client_id' => config('oauth.github.client_id'),
                'client_secret' => config('oauth.github.secret_key'),
                'code' => $request->get('code'),
                'redirect_uri' => config('oauth.github.callback_url'),
            ]);

            $token = $response->json('access_token');

            $info = Http::withHeaders([
                'Authorization' => 'token ' . $token,
                'Accept' => 'application/json',
            ])->get('https://api.github.com/user');

            $emails = Http::withHeaders([
                'Authorization' => 'token ' . $token,
                'Accept' => 'application/json',
            ])->get('https://api.github.com/user/emails');

            $user = User::updateorcreate([
                'email' => $emails->json('0.email'),
            ], [
                'email' => $emails->json('0.email'),
                'username' => $info->json('name'),
                'password' => Hash::make(Str::random(10))
            ]);

            Auth::login($user);

            return redirect(route('home'));
        }
}
