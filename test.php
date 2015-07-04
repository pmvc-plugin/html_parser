<?php
PMVC\Load::plug();
PMVC\setPlugInFolder('../');
class HtmlParserTest extends PHPUnit_Framework_TestCase
{
    function testCssParse()
    {

        $parser = PMVC\plug('html_parser');
        $text = 'hi body';
        $html = '<html><body id="bd">'.$text.'</body></html>';
        $qp = $parser->css($html,'#bd');
        $this->assertEquals($text,$qp->text());
    }
}
