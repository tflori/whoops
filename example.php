<?php
/**
 * Damnit - php errors for cool kids
 * @author Filipe Dobreira <http://github.com/filp>
 *
 * Run this example file with the PHP 5.4 web server with:
 *
 * $ cd project_dir
 * $ php -S localhost:8080
 *
 * and access localhost:8080/example.php through your browser
 *
 * Or just run it through apache/nginx/what-have-yous as usual.
 */
require __DIR__ . '/vendor/autoload.php';

use Damnit\Run;
use Damnit\Handler\PrettyPage;

$run = new Run;
$run->pushHandler(new PrettyPage);
$run->register();

function fooBar() {
    throw new RuntimeException("hello, world!");
}

function bar()
{
    fooBar();
}

bar();