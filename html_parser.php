<?php
namespace PMVC\PlugIn\html_parser;
use html5qp;

${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\html_parser';

class html_parser extends \PMVC\PlugIn
{
    public function css($content,$selector)
    {
        if (isset($this['fromEncoding'])) {
            $content = mb_convert_encoding($content, 'UTF-8', $this['fromEncoding']);
        }
        return html5qp('<>'.$content, $selector);
    }
}
