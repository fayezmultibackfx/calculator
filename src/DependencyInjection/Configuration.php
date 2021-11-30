<?php

namespace Fayez\Calculator\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder();

        $rootNode = $builder->root('fayez_calculator');

        $rootNode->children()
            ->integerNode('a')
            ->defaultValue(0)
            ->end()
            ->integerNode('b')
            ->defaultValue(0)
            ->end()
            ->end();

        return $builder;
    }
}
