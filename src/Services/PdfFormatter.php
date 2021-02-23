<?php

namespace App\Services;

use App\Controllers\PageController;

class PdfFormatter
{
    public function format(PageController $page)
    {
        echo "<pdf>{$page->getTitle()}</pdf>";
        echo "<pdf>{$page->getContent()}</pdf>";
    }
}