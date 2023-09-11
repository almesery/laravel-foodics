<?php

namespace Foodics;

use Foodics\Actions\CategoriesActions;
use Foodics\Actions\OrdersActions;
use Foodics\Actions\ProductsActions;
use Foodics\Actions\WhoIAmActions;
use Foodics\Services\BaseServices;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class Foodics extends BaseServices
{
    private string $accessToken;

    public PendingRequest $http;

    public function __construct($accessToken)
    {
        parent::__construct();

        $this->accessToken = $accessToken;

        $this->http = Http::withToken($accessToken)
            ->baseUrl($this->apiBaseUrl)
            ->withHeaders([
                "Accept" => "application/json",
                "Content-Type" => "application/json"
            ]);

    }

    public function get(string $url, ?array $data = [])
    {
        return $this->http->get($url, $data)->json();
    }

    public function post(string $url, ?array $data = [])
    {
        return $this->http->post($url, $data)->json();
    }

    public function put(string $url, ?array $data = [])
    {
        return $this->http->put($url, $data)->json();
    }

    public function patch(string $url, ?array $data = [])
    {
        return $this->http->patch($url, $data)->json();
    }

    public function delete(string $url, ?array $data = [])
    {
        return $this->http->delete($url, $data)->json();
    }

    public function category(): CategoriesActions
    {
        return new CategoriesActions($this->accessToken);
    }

    public function product(): ProductsActions
    {
        return new ProductsActions($this->accessToken);
    }

    public function order(): OrdersActions
    {
        return new OrdersActions($this->accessToken);
    }

    public function settings(): WhoIAmActions
    {
        return new WhoIAmActions($this->accessToken);
    }

}
