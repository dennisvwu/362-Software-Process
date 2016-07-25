<?php
session_start();
?>
<html>

<body style="background-color:103D74;">

<style>
h1{
	text-align: center;
}
h5{
	text-align: center;
}
</style>
	
<div id="page-wrap">

        <font color="FFFFFF">
        <h1>Quiz Chapter: 3</h1>
        </font>
              
        <div style="background-color:DDDDFF;">
        <fieldset>
        	
	<?php
            
    // <!-- Read From file for number of attempts and current average-->
            
            $user = $_SESSION['userValue'];
            $user = $user . ".txt";
            $count = 0;
            $myfile = fopen( $user, "r") or die("Unable to open file!");
            $check = -3;
            do{
                    $next = fgets($myfile);
                    $count++;
            } while($next != $check);
            $attempts = fgets($myfile);
            $average = fgets($myfile);
            $highest = fgets($myfile);
            fclose($myfile);
            $next = 0;
            
    // <!-- ANSWER KEY -->  
    
	    $answer1 = $_POST['question-1-answers'];           		
	    $answer2 = $_POST['question-2-answers'];
	    $answer3 = $_POST['question-3-answers'];           		
	    $answer4 = $_POST['question-4-answers'];    
                 	    
            $answer5 = $_POST['question-5-answers'];
	    $answer6 = $_POST['question-6-answers'];           		
	    $answer7 = $_POST['question-7-answers'];
	    $answer8 = $_POST['question-8-answers']; 
            
	    $answer9 = $_POST['question-9-answers'];
	    $answer10 = $_POST['question-10-answers'];           		
	    $answer11 = $_POST['question-11-answers'];
	    $answer12 = $_POST['question-12-answers'];
                           
            $totalCorrect = 0;
            
            echo "<h1>Results:</h1><p>";           
            
    // <!-- TRUE OR FALSE -->            
            
            echo "<h2>Question #1: (3.1) An evolutionary process flow executes the process framework activities in a circular manner.</h2>";
            if ($answer1 == "A") { echo "CORRECT: A) True<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: A) True</div></b><p>"; }
            
            echo "<h2>Question #2: (3.2) Each framework activity will be the same between different projects and different stakeholders.</h2>";
            if ($answer2 == "B") { echo "CORRECT: B) False<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: B) False; Every stakeholder is different.</div></b><p>"; }        
                     
            echo "<h2>Question #3: (3.1) An iterative process flow executes the process framework activities sequentially without repeating.</h2>";
            if ($answer3 == "B") { echo "CORRECT: B) False<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: B) False; Repeats sections / Some or all</div></b><p>"; }
            
            echo "<h2>Question #4: (3.1) A parallel process flow executes some process framework activities simultaneously.</h2>";
            if ($answer4 == "A") { echo "CORRECT: A) True<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is A) True</div></b><p>"; }  
            
    // <!-- MULTIPLE CHOICE -->  
     
            echo "<h2>Question #5: (3) The order of a generic process model is.</h2>";
            if ($answer5 == "C") { echo "CORRECT: C) Modeling > Planning > Communication > Deployment > Construction<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is C) Modeling > Planning > Communication > Deployment > Construction</div></b><p>"; }      
            
            echo "<h2>Question #6: (3) Which is not part of the task set required when comunicating with a remote stakeholder?</h2>";
            if ($answer6 == "B") { echo "CORRECT: B) Assume a feature is one the stakeholder would want.<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is B) Assume a feature is one the stakeholder would want.</div></b><p>"; }      
            
            echo "<h2>Question #7: (3) What is a process defined as a collection of? </h2>";
            if ($answer7 == "A") { echo "CORRECT: A) Work activites, actions and tasks.<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is A) Work activites, actions and tasks. </div></b><p>"; }      
            
            echo "<h2>Question #8: (3) Which is not a possible part of the development task set? </h2>";
            if ($answer8 == "B") { echo "CORRECT: B) Creating a test suite.<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is B) Creating a test suite.</div></b><p>"; }      
            
    // <!-- FILL IN THE BLANK -->  

            $answer9 = strtolower($answer9);
            $answer10 = strtolower($answer10);
            $answer11 = strtolower($answer11);
            $answer12 = strtolower($answer12);
     
            echo "<h2>Question #9: (3) This type of process flow executes steps in a circular manner. __________</h2>";
            if ($answer9 == "evolutionary") { echo "CORRECT: Evolutionary<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Evolutionary</div></b><p>"; }                  
            
            echo "<h2>Question #10: (3) Which process activity encompasses phone calls or emails with the stakeholder? __________</h2>";
            if ($answer10 == "communications") { echo "CORRECT: Communications<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Communications</div></b><p>"; }                  
              
            echo "<h2>Question #11: (3) These can be used to describe problems associated with framework activities. ___________</h2>";
            if ($answer11 == "pattern") { echo "CORRECT: Pattern<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Pattern</div></b><p>"; }                  
                 
            echo "<h2>Question #12: (3) This aspect describes how the framework activities, actions and tasks are organized. ______________</h2>";
            if ($answer12 == "process flow") { echo "CORRECT: Process Flow<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Process Flow</div></b><p>"; }                  
                 
              
    // <!-- UPDATE RESULTS -->             
            
            echo "<h2><div id='results'-->You answered: $totalCorrect / 12 correct</h2></div>";
  
    // <!-- Text File Input -->
    
            if($attempts < 5)
            {
                    $average = (($attempts * $average + $totalCorrect) / ($attempts + 1));
                    $filename = $user;
                    $line_i_am_looking_for = $count;
                    $lines = file( $filename , FILE_IGNORE_NEW_LINES );
                    $lines[$line_i_am_looking_for] = $attempts+1;
                    $lines[$line_i_am_looking_for+1] = $average;
                    if($totalCorrect > $highest)
                            $lines[$line_i_am_looking_for+2] = $totalCorrect;
                    file_put_contents( $filename , implode( "\n", $lines ) );
            }
            else
                  echo "<h2><div style ='color:#ff0000'>Attempt limit reached - Quiz Score NOT recorded</h2></div>";
	?>
        
        </fieldset>
</div>
<h5>        
<button type = "button" onclick="goBack()" style = "height:74px; width:80px;">
<form action="chapter3.html">
        <input type="image"  id="Chapter 3" src="back.png" height="50" width="50" alt="Chapter 3" />
        <br>Go Back
</form>
</button>    

        <script>
        function goBack() 
        { window.history.back(); }
        </script>
                
<button type = "button" style = "height:74px; width:80px;">
<form action="chapters.html">
        <input type="image"  id="Main Page" src="home.png" height="50" width="50" alt="Main Page" />
        <br>Main Page
</form>
</button>       
</h5>        
</body>
</html>
