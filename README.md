[![Latest Stable Version](https://poser.pugx.org/pmvc-plugin/html_parser/v/stable)](https://packagist.org/packages/pmvc-plugin/html_parser) 
[![Latest Unstable Version](https://poser.pugx.org/pmvc-plugin/html_parser/v/unstable)](https://packagist.org/packages/pmvc-plugin/html_parser) 
[![Build Status](https://travis-ci.org/pmvc-plugin/html_parser.svg?branch=master)](https://travis-ci.org/pmvc-plugin/html_parser)
[![License](https://poser.pugx.org/pmvc-plugin/html_parser/license)](https://packagist.org/packages/pmvc-plugin/html_parser)
[![Total Downloads](https://poser.pugx.org/pmvc-plugin/html_parser/downloads)](https://packagist.org/packages/pmvc-plugin/html_parser) 

Html Parser 
===============

## How to use?
 public function css($content,$selector)

```
$plug = \PMVC\plug('html_parser');
$object = $plug->css($html, $your_css_$selector);
var_dump($object->html());
```
## Useful tip

### text or html
* object->text()
* object->html()

### get tag attribute
* object->attr('href')

### Process a list (QueryPath)
* https://web.archive.org/web/20120504094800/http://api.querypath.org/docs/class_query_path.html
* Get one index
   * $DOMElement = QueryPath->get(int index) : start from zero
   * \PMVC\plug('html_parser')->css($DOMElement, $selector);

### Parse Engine
   * Old Api(better): https://web.archive.org/web/20130123082558/http://api.querypath.org/docs/
   * https://github.com/technosophos/querypath

## Install with Composer
### 1. Download composer
   * mkdir test_folder
   * curl -sS https://getcomposer.org/installer | php

### 2. Install Use composer.json or use command-line directly
#### 2.1 Install Use composer.json
   * vim composer.json
```
{
    "require": {
        "pmvc-plugin/hello_world": "dev-master"
    }
}
```
   * php composer.phar install

#### 2.2 Or use composer command-line
   * php composer.phar require pmvc-plugin/hello_world


