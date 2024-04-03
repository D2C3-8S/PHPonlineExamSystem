<?php
session_start();

 include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	
	<title>PHP QUIZ | My Project</title>
	
  <link rel="stylesheet" href="style/style.css">

  
</head>

<body>
  	<nav>
      <h1>My System</h1>
      <a href="home.php"><h3>Home</h3></a>
    </nav>

     <div class="title-content">
        <p>Test Your Speed and Knowledge.</p>
        <p>Start Your Button Timer Before You Start Answering The Questions </p>
    </div> 


     <div id="js_timer">
               <div class="dateTime">
                    <div class="time"></div>
                    <div class="date"></div>
               </div>
            <div id="timer">
                    
                <p>Timer</p>
                <div id="setTimer">00:00:00</div>
                <div class="timerBtn">
                    <button id="startButton">Start</button>
                    <button id="stopButton">Stop</button>
                    <button id="resetButton">Reset</button>


                </div>
            </div>
           <!--  <button onclick="pause()">Pause</button>-->
        </div> 
	<div id="page-wrap">
       

		<h1>My Simple PHP Quiz</h1>
    <br><br>
		
		<form action="result.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>PHP means...</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required />
                        <label for="question-1-answers-A">A: PHP- Hypertext Processor </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B: PHP- Hyperloop Preprocessor</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C: PHP- Hypertext Preprocessor</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D: None of the above</label>
                    </div>
                
                </li>
                <br>
                
                <li>
                
                    <h3>PHP is used for...</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required />
                        <label for="question-2-answers-A">A: Video Editing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B: Graphic Designing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C: Front-End Development</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D: Back-end Development</label>
                    </div>
                
                </li>
                <br>
                
                <li>
                
                    <h3>PHP is a....</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required/>
                        <label for="question-3-answers-A">A: Server Side Script</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B: Programming Language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C: Markup Language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D: None Of Above These</label>
                    </div>
                
                </li>
                <br>
                <li>
                
                    <h3>HTML means..</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required />
                        <label for="question-4-answers-A">A: HyperText Markup Language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B: HyperLoop Markup Language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C: Hypertext Preprocessor</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D: None of above</label>
                    </div>
                
                </li>
                <br>
                
                <li>
                
                    <h3>Fullstack Web Development is...</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required />
                        <label for="question-5-answers-A">A: Web Design</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B: Back-end Development only</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C: Front-end Development only</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D: Front-end and Back-end Development</label>
                    </div>
                
                </li>
            
            </ol>
            
            <!-- this hidden input is to get and display the total time consume. -->
             <input type="hidden" name="totalTime" id="totalTimeInput" value="00:00:00">  
            <input type="submit" value="Submit" id="submit" class="submitbtn" />
		
		</form>
	
	</div>

  
       

<script src="script.js" defer></script>
</body>

</html>