<?php
declare(strict_types=1);

namespace Markdown;

use Cake\Console\CommandCollection;
use Cake\Core\BasePlugin;
use Cake\Core\ContainerInterface;
use Cake\Core\PluginApplicationInterface;
use Cake\Http\MiddlewareQueue;
use Cake\Routing\RouteBuilder;

/**
 * Plugin for Markdown
 */
class MarkdownPlugin extends BasePlugin
{
    /**
     * @var bool
     */
    public $routesEnabled = false;

    /**
     * @var bool
     */
    public $bootstrapEnabled = false;
}
