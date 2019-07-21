<?php

require_once 'vendor/autoload.php';

use App\Models\{Job, Project, Printable};

$job1 = new Job('PHP Developer', 'Supermegahiperawesome PHP Job!!');
$job1->months = 16;

$job2 = new Job('Python Developer', 'Supermegahiperawesome Python Job!!');
$job2->months = 32;

$job3 = new Job('', 'Supermegahiperawesome Job!!');
$job3->months = 24;

$jobs = [
  $job1,
  $job2,
  $job3
];

$project1 = new Project('Project 1', 'Description 1');

$projects = [
  $project1,
];
  
function printElement(Printable $job) {
  if($job->visible == false) {
    return;
  }
  echo '<li class="work-position">';
  echo '<h5>' . $job->getTitle() . '</h5>';
  echo '<p>' . $job->getDescription() . '</p>';
  echo '<p>' . $job->getDurationAsString() . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}