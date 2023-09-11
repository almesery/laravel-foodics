<?php

namespace Foodics\Actions;

use Foodics\Foodics;

class ProductsActions extends Foodics
{
    const PATH = "products";

    public function list(?array $data = [])
    {
        return $this->get(self::PATH, $data);
    }


}
