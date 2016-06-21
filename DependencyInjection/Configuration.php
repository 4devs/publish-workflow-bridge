<?php

namespace FDevs\Bridge\PublishWorkflow\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('f_devs_publish_workflow');

        $rootNode
            ->children()
                ->booleanNode('voter')->defaultFalse()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
