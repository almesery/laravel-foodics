<?php

namespace Foodics\Services;

use Foodics\Enums\FoodicsEnum;

abstract class BaseServices
{
    protected string $apiBaseUrl;

    protected string $redirectUrl;

    protected string $oAuthApiUrl;

    public function __construct()
    {
        if ($this->isSandbox()) {

            $this->apiBaseUrl = FoodicsEnum::SANDBOX_API_BASE_URL->value;

            $this->redirectUrl = FoodicsEnum::SANDBOX_OAUTH_LINK->value;

            $this->oAuthApiUrl = FoodicsEnum::SANDBOX_API_OAUTH_BASE_URL->value;

        } else {

            $this->apiBaseUrl = FoodicsEnum::PRODUCTION_API_BASE_URL->value;

            $this->redirectUrl = FoodicsEnum::PRODUCTION_OAUTH_LINK->value;

            $this->oAuthApiUrl = FoodicsEnum::PRODUCTION_API_OAUTH_BASE_UR->value;
        }
    }

    public function isSandbox(): bool
    {
        return config("foodics.foodics_mode") === FoodicsEnum::SANDBOX->value;
    }

    public function isProduction(): bool
    {
        return config("foodics.foodics_mode") === FoodicsEnum::PRODUCTION->value;
    }

    public function clientId(): string
    {
        return config("foodics.client_id");
    }

    public function clientSecret(): string
    {
        return config("foodics.client_secret");
    }

    public function redirectUri(): string
    {
        return config("foodics.redirect_uri");
    }
}
