<?php

namespace PMVC\PlugIn\html_parser;

${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\TableToArray';

class TableToArray
{
    function __invoke(
        $table, 
        $start = null,
        $endCallback = null, 
        $colCallback = null
    ) {
        $html = $this->caller;
        $arr = $html->css($table, 'tr');
        if (is_null($start)) {
            $start = 0;
        }
        $lastIndex = count($arr)-1;
        if (is_callable($endCallback)) {
            $end = $endCallback($lastIndex); 
        } else {
            $end = $lastIndex;
        }
        $rows=[];
        for ($row=$start; $row<=$end; $row++) {
            $cols = [];
            $allTD = $html->css($arr->get($row), 'td');
            if (is_callable($colCallback)) {
                foreach($allTD as $col=>$td){
                    $text = trim($td->text());
                    $content = $colCallback($cols, $text, $col, $row, $td); 
                    if (!is_null($content)) {
                        $cols[]=$content;
                    }
                }
            } else {
                foreach($allTD as $td){
                    $cols[] = trim($td->text());
                }
            }
            $rows[] = $cols;
        }
        return $rows;
    }
}
