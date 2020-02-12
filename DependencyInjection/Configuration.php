<?php

namespace Danaki\DoctrineEnumTypeBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('danaki_doctrine_enum_type_bundle');
        $rootNode = $treeBuilder->getRootNode();
        
        $rootNode
            ->children()
                    ->arrayNode('types')
                        ->useAttributeAsKey('name')
                        ->prototype('scalar')->end()
                    ->end()
            ->end()
        ->end();

        return $treeBuilder;
    }
}
