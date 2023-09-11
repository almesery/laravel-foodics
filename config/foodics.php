<?php

return [

    "foodics_mode" => env("FOODICS_MODE", "sandbox"),

    "client_id" => env("FOODICS_CLIENT_ID", null),

    "client_secret" => env("FOODICS_CLIENT_SECRET", null),

    "redirect_uri" => env("FOODICS_REDIRECT_URI", null),

    "webhook_url" => env("FOODICS_WEBHOOK_URL", null)

];
