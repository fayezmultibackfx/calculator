<?php

namespace Fayez\Calculator;

use Fayez\Calculator\DependencyInjection\CalculatorExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CalculatorBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new CalculatorExtension();
        }

        return $this->extension;
    }
}
