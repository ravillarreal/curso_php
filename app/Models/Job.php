<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {

    protected $table = 'jobs';

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