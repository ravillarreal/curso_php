<?php

class Job {
  private $title;
  public $description;
  public $visible = true;
  public $months;

  public function __construct($title, $description) {
    $this->setTitle($title);
    $this->description = $description;
  }

  public function setTitle($title) {
    if ($title === '') {
      $this->title = 'N/A';
    } else {
      $this->title = $title;
    }
  }

  public function getTitle() {
    return $this->title;
  }

  public function getDurationAsString() {
    $years = floor($this->months / 12);
    $extraMonths = $this->months % 12;
  
    if ($years == 0) {
      return "$this->months months";  
    }
    elseif ($extraMonths == 0) {
      return "$years years"; 
    }
    else {
      return "$years years $extraMonths months";
    }
    
  }
}

$job1 = new Job('PHP Developer', 'Supermegahiperawesome PHP Job!!');
$job1->months = 16;

$job2 = new Job('Python Developer', 'Supermegahiperawesome PHP Job!!');
$job2->months = 24;

$job3 = new Job('', 'Supermegahiperawesome PHP Job!!');
$job3->months = 24;

$jobs = [
  $job1,
  $job2,
  $job3,
  // [
  //   'title' => 'PHP Developer',
  //   'description' => ,
  //   'visible' => 
  //   'months' => 
  // ],
  // [
  //   'title' => 'Python Developer',
  //   'visible' => false,
  //   'months' => 12
  // ],
  // [
  //   'title' => 'DevOps',
  //   'visible' => true,
  //   'months' => 5
  // ],
  // [
  //   'title' => 'Node Dev',
  //   'visible' => true,
  //   'months' => 24
  // ],
  // [
  //   'title' => 'Frontend Dev',
  //   'visible' => true,
  //   'months' => 3
  // ],
];


  
function printJob($job) {
  if($job->visible == false) {
    return;
  }
  echo '<li class="work-position">';
  echo '<h5>' . $job->getTitle() . '</h5>';
  echo '<p>' . $job->description . '</p>';
  echo '<p>' . $job->getDurationAsString() . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}