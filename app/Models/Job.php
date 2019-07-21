<?php

namespace App\Models;

class Job extends BaseElement{

    public function __construct($title, $description) {
        $newTitle = 'Job: ' . $title;
        // parent::__construct($newTitle, $description);
        $this->title = $newTitle;
    }

    public function getDurationAsString() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
      
        if ($years == 0) {
          return "Job Duration: $this->months months";  
        }
        elseif ($extraMonths == 0) {
          return "Job Duration: $years years"; 
        }
        else {
          return "Job Duration: $years years $extraMonths months";
        }
        
      }
}