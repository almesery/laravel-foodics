<?php

namespace Foodics\Actions;

use Foodics\Foodics;

class WhoIAmActions extends Foodics
{
    const PATH = "whoami";

    public function whoami()
    {
        return $this->get(self::PATH);
    }
}
