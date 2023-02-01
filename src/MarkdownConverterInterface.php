<?php

namespace Markdown;

interface MarkdownConverterInterface
{
    /**
     * Convert Markdown text to HTML.
     *
     * @param string $markdown
     * @return string
     */
    public function convert(string $markdown): string;
}