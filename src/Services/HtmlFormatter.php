<?php

namespace App\Services;

use App\Controllers\PageController;

class HtmlFormatter
{
    public function format(PageController $page)
    {
        echo "<h1>{$page->getTitle()}</h1>";
        echo "<p>{$page->getContent()}</p>";
    }
}