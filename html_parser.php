<?php

namespace PMVC\PlugIn\html_parser;

use Masterminds\HTML5;
use QueryPath\DOMQuery;
use PMVC\PlugIn;

${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\html_parser';

class html_parser extends PlugIn
{
    public function css($html, $selector, array $options=[])
    {
        if (isset($this['fromEncoding'])) {
            $html = mb_convert_encoding($html, 'UTF-8', $this['fromEncoding']);
        }
        $html5 = new HTML5();
        $html = $html5->loadHTML($html);
        return $this->parse($html, $selector, $options);
    }

    /**
     * @return QueryPath\DOMQuery
     * https://github.com/technosophos/querypath/blob/master/src/QueryPath/DOMQuery.php
     */
    public function parse($dom, $selector=null, array $options=[])
    {
        return new DOMQuery($dom, $selector, $options);
    }
}
