<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }

   
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Result | PHP Quiz</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            
            echo "
            <p>Youre Done!</p>
            <p>You've got a score of</p>
            <div id='results'>$totalCorrect Correct answer.</div>
            
            ";
            
        ?>
        <br />
       <!-- Final Project: enter your php if, elseif and else code here-->
       <?php
       if($totalCorrect == 0){
        echo "<div id='failed'>sorry You failed </div>";
       } else if($totalCorrect == 1){
        echo "<div id='failed'>Sorry you failed </div>";
       } else if($totalCorrect == 2){
        echo "<div id='failed'>Better Luck Next Time. </div>";
       } else if($totalCorrect == 3){
        echo "<div id='passed'>You Passed </div>";
       } else if($totalCorrect == 4) {
        echo "<div id='failed'>Nice Job </div>";
       } else
        echo "<div id='failed'>You've got a perfect score, Congratiolations! </div>";
       ?>


        &nbsp;
        &nbsp;
        &nbsp;

        <!-- Display the total time -->
        <p class="indent">  hr:    min:    sec:</p>
        <div class="totalTime"><span>Total Time: <?php echo isset($_POST['totalTime']) ? $_POST['totalTime'] : "N/A"; ?></span></div>

        <br>
        
        <form id='margin' action="index2.php">
        <input type="submit" value="Retake" />
        </form>
	</div>

    
       
    
<script src="script.js" defer></script>
</body>

</html>