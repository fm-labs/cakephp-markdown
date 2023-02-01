<?php

namespace Markdown\Converter\CommonMark;

use League\CommonMark;
use Markdown\MarkdownConverterInterface;

class CommonMarkConverter implements MarkdownConverterInterface
{
    protected $_converter;

    public function __construct()
    {
        $environment = CommonMark\Environment::createCommonMarkEnvironment();
        $environment->addExtension(new CommonMark\Extension\GithubFlavoredMarkdownExtension());
        $environment->mergeConfig([]);

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
