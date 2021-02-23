<?php

require __DIR__."/vendor/autoload.php";

use App\Controllers\PageController;
use App\Services\HtmlFormatter;
use App\Services\PdfFormatter;

$page = new PageController("Hello","Hello Bangladesh");
$formatter = new PdfFormatter();
echo $formatter->format($page);