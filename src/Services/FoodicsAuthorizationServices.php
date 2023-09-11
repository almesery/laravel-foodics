<?php

namespace Foodics\Services;

use Illuminate\Support\Facades\Http;

class FoodicsAuthorizationServices extends BaseServices
{
    public function authorize($code): array
    {
        return Http::withHeaders([
            "accept" => "application/json",
            "Content-Type" => "application/json"
        ])->post($this->oAuthApiUrl, [
            "grant_type" => "authorization_code",
            "code" => $code,
            "client_id" => $this->clientId(),
            "client_secret" => $this->clientSecret(),
            "redirect_uri" => $this->redirectUri()
        ])->json();
    }
}
