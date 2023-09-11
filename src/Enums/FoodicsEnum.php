<?php

namespace Foodics\Enums;

enum FoodicsEnum: string
{
    case SANDBOX = "sandbox";

    case PRODUCTION = "production";

    case SANDBOX_API_BASE_URL = "https://api-sandbox.foodics.com/v5";

    case SANDBOX_OAUTH_LINK = "https://console-sandbox.foodics.com/authorize";

    case SANDBOX_API_OAUTH_BASE_URL = "https://api-sandbox.foodics.com/oauth/token";

    case PRODUCTION_API_BASE_URL = "https://api.foodics.com/v5";

    case PRODUCTION_OAUTH_LINK = "https://console.foodics.com/authorize";

    case PRODUCTION_API_OAUTH_BASE_UR = "https://api.foodics.com/oauth/token";

}
