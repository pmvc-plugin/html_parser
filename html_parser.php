<?php
namespace PMVC\PlugIn\html_parser;
use html5qp;

${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\html_parser';

class html_parser extends \PMVC\PlugIn
{
    private $opts;
    public function init()
    {
        $this->opts = array('convert_to_encoding'=>'utf-8');
    }

    public function css($content,$selector)
    {
        return html5qp('<>'.$content, $selector, $this->opts);
    }
}
