<?php

namespace Foodics\Actions;

use Foodics\Foodics;

class CategoriesActions extends Foodics
{
    const PATH = "categories";

    public function list(?array $data = [])
    {
        return $this->get(self::PATH, $data);
    }

}
