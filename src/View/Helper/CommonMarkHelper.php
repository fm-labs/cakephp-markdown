<?php
declare(strict_types=1);

namespace Markdown\View\Helper;

use Cake\View\Helper;

/**
 * CommonMark helper
 */
class CommonMarkHelper extends Helper
{
    /**
     * Default configuration.
     *
     * @var array<string, mixed>
     */
    protected $_defaultConfig = [];

    /**
     * @var \Markdown\MarkdownConverterInterface
     */
    protected $_converter;

    public function initialize(array $config): void
    {
        if (version_compare(PHP_VERSION, '7.4.0') >= 0) {
            // PHP >= 7.4
            $this->_converter = new \Markdown\Converter\CommonMark\CommonMarkConverter();
        }
        elseif (version_compare(PHP_VERSION, '7.2.0') >= 0) {
            // PHP >= 7.2
            $this->_converter = new \Markdown\Converter\CommonMark\CommonMarkConverterV1();
        } else {
            throw new \RuntimeException("CommonMarkHelper: Unsupported PHP Version");
        }
    }

    /**
     * Convert CommonMark/Markdown text to HTML
     * @param string $markdown
     * @return string
     */
    public function convert(string $markdown): string
    {
        return $this->_converter->convert($markdown);
    }
}
