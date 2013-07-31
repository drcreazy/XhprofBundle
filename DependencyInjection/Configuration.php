<?php

namespace Jns\Bundle\XhprofBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * This class contains the configuration information for the bundle
 *
 * This information is solely responsible for how the different configuration
 * sections are normalized, and merged.
 *
 * @author Alex Kleissner <hex337@gmail.com>
 */
class Configuration
{
    /**
     * Generates the configuration tree.
     *
     * @return \Symfony\Component\DependencyInjection\Configuration\NodeInterface
     */
    public function getConfigTree()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('jns_xhprof');

        $rootNode
            ->children()
                ->scalarNode('location_config')->defaultValue('/opt/local/www/php5-xhprof/xhprof_lib/config.php')->end()
                ->scalarNode('location_lib')->defaultValue('/opt/local/www/php5-xhprof/xhprof_lib/utils/xhprof_lib.php')->end()
                ->scalarNode('location_runs')->defaultValue('/opt/local/www/php5-xhprof/xhprof_lib/utils/xhprof_runs.php')->end()
                ->scalarNode('location_web')->defaultValue('http://xhprof')->end()
                ->scalarNode('entity_manager')->defaultValue('default')->end()
                ->scalarNode('enable_xhgui')->defaultFalse()->end()
                ->scalarNode('enable_xhprofio')->defaultFalse()->end()
                ->scalarNode('xhprofio_config_file')->defaultValue('/opt/local/www/php5-xhprof.io/xhprof_lib/config.php')->end()
                ->scalarNode('xhprofio_data_file')->defaultValue('/opt/local/www/php5-xhprof.io/classes/data.php')->end()
                ->scalarNode('xhprofio_url')->defaultValue('http://xhprofio.local')->end()
                ->scalarNode('sample_size')->defaultValue(1)->end()    
                ->scalarNode('enabled')->defaultFalse()->end()
            ->end();

        return $treeBuilder->buildTree();
    }
}
