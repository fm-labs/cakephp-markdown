<?php

namespace Markdown\Converter\CommonMark;

use League\CommonMark;
use Markdown\Converter\MarkdownConverterInterface;

class CommonMarkConverter implements MarkdownConverterInterface
{
    protected $_converter;

    public function __construct()
    {
        $config = [];
        $environment = new CommonMark\Environment\Environment($config);
        $environment->addExtension(new CommonMark\Extension\CommonMark\CommonMarkCoreExtension());
        $environment->addExtension(new CommonMark\Extension\GithubFlavoredMarkdownExtension());

        $this->_converter = new CommonMark\MarkdownConverter($environment);
    }

    /**
     * @inheritDoc
     */
    public function convert(string $markdown): string
    {
        return $this->_converter->convert($markdown);
    }
}
