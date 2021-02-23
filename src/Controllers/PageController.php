<?php

namespace App\Controllers;
// SOLID
// Single Responsibility Principle  
// Open Closed Principle
// Liskov Subs. Principle
// Interface Segregation
// Depedency Inversion
class PageController
{
   protected $title,$content;

   public function __construct($title,$content)
   {
       $this->title = $title;
       $this->content = $content;
   }

   public function getTitle() :string
   {
       return $this->title;
   }

   public function getContent() :string
   {
       return $this->content;
   }

//    public function formatJson()
//    {
//       echo json_encode($this->getContent());
//    }
}

