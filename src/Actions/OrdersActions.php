<?php

namespace Foodics\Actions;

use Foodics\Foodics;

class OrdersActions extends Foodics
{
    const PATH = "orders";

    public function list(?array $data = [])
    {
        return $this->get(self::PATH, $data);
    }
}
