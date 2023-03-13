<?php
$scores = array(85,92,78,61,72,95,88,70,60,40);

// Function to assign a letter grade based on a score
function assignGrade($score) {
  if ($score >= 90 && $score <= 100) {
    return 'A';
  } elseif ($score >= 80 && $score <= 89) {
    return 'B';
  } elseif ($score >= 70 && $score <= 79) {
    return 'C';
  } elseif ($score >= 60 && $score <= 69) {
    return 'D';
  } else {
    return 'F';
  }
}

// Calculate average score
$totalScore = array_sum($scores);
$averageScore = $totalScore / count($scores);

// Assign letter grades and count how many students received each grade
$gradeCounts = array('A' => 0, 'B' => 0, 'C' => 0, 'D' => 0, 'F' => 0);
foreach ($scores as $score) {
  $grade = assignGrade($score);
  $gradeCounts[$grade]++;
}

// Print results
echo "Average score: " . number_format($averageScore, 1) . "\n";
echo "Grade distribution: ";
foreach ($gradeCounts as $grade => $count) {
  echo "$grade: $count ";
}
?>