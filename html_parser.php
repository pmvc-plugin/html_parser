<?php

namespace PMVC\PlugIn\html_parser;

use Masterminds\HTML5;
use QueryPath\DOMQuery;
use PMVC\PlugIn;

${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\html_parser';

class html_parser extends PlugIn
{

    private $_html5;

    public function css($html, $selector, array $options=[])
    {
        if (!is_object($html)) {
            if (isset($this['fromEncoding'])) {
                $html = mb_convert_encoding($html, 'UTF-8', $this['fromEncoding']);
            }
            $html5 = $this->_getHtml5Object();
            $html = $html5->loadHTML($html);
        }
        /**
         * @return QueryPath\DOMQuery
         * https://github.com/technosophos/querypath/blob/master/src/QueryPath/DOMQuery.php
         */
        return new DOMQuery($html, $selector, $options);
    }

    private function _getHtml5Object()
    {   
        if (empty($this->_html5)) {
            $this->_html5 = new HTML5();
        }
        return $this->_html5;
    }
}
