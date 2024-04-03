<?php
// Set the exam duration in seconds (e.g., 60 minutes = 3600 seconds)
$exam_duration = 3600; // 60 minutes

// Check if the exam has started
if (!isset($_SESSION['exam_start_time'])) {
    $_SESSION['exam_start_time'] = time(); // Start the exam timer
}

// Calculate the time remaining
$current_time = time();
$time_elapsed = $current_time - $_SESSION['exam_start_time'];
$time_remaining = $exam_duration - $time_elapsed;

// return the time remaining


// Check if the exam time is up
if ($time_remaining <= 0) {
    // Time is up, automatically submit the exam
    submitExam();
}

// Function to submit the exam
function submitExam() {
    // Your code to submit the exam (e.g., save answers, calculate score, etc.)
    // Redirect to exam submission page or display a message
    unset($_SESSION['exam_start_time']); // Clear the exam start time
    header("Location: exam_submission.php");
    exit();
}
?>
    
    
<p>Time Remaining: <span id="timer"><?php echo '$time_remaining';?></span></p>
<script>
        // JavaScript function to display the countdown timer
        function countdownTimer() {
            var timeRemaining = <?php echo $time_remaining; ?>;
            if (timeRemaining < 0) {
                // If time is up, submit the exam
                window.location.href = 'exam_submission.php';
            } else {
                var hours = Math.floor(timeRemaining / 3600);
                var minutes = Math.floor((timeRemaining % 3600) / 60);
                var seconds = timeRemaining % 60;
                document.getElementById('timer').innerHTML = hours + 'h ' + minutes + 'm ' + seconds + 's';
                timeRemaining--;
                setTimeout(countdownTimer, 1000);
            }
        }
        countdownTimer(); // Start the countdown timer when the page loads
    </script>