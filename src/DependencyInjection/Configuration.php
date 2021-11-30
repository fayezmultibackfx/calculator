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
                        ->isRequired()
                        ->defaultValue(0)
                    ->end()
                    ->integerNode('b')
                        ->isRequired()
                        ->defaultValue(0)
                    ->end()
                ->end();

        return $builder;
    }
}
