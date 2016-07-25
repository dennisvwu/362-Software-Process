<?php
session_start();
?>
<html>

<body style="background-color:103D74;">

<style>
h1{
	text-align: center;
}
</style>
	
<div id="page-wrap">

        <font color="FFFFFF">
        <h1>Quiz Chapter: 5</h1>
        </font>
              
        <div style="background-color:DDDDFF;">
        <fieldset>
        	
	<?php
                  
    // <!-- Read From file for number of attempts and current average-->
            
            $user = $_SESSION['userValue'];
            $user = $user . ".txt";
            $count = 0;
            $myfile = fopen( $user, "r") or die("Unable to open file!");
            $check = -5;
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
            
            echo "<h2>Question #1: (5.3.1) The most efficient and effective way of communicating is face-to-face communication.</h2>";
            if ($answer1 == "A") { echo "CORRECT: A) True<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: A) True</div></b><p>"; }
            
            echo "<h2>Question #2: (5.4.1) Extreme Programming uses a circular object-oriented methodology as its main development process.</h2>";
            if ($answer2 == "A") { echo "CORRECT: A) True<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: A) True</div></b><p>"; }        
                     
            echo "<h2>Question #3: (5.5.1)  Incremental process deadlines using the Scrum methodology are called dashes.</h2>";
            if ($answer3 == "B") { echo "CORRECT: B) False<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: B) False; Sprints</div></b><p>"; }
            
            echo "<h2>Question #4: (5.6) Collaborative and communicative methods in an agile environment should generally be low-tech.</h2>";
            if ($answer4 == "A") { echo "CORRECT: A) True<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is A) True</div></b><p>"; }  
            
    // <!-- MULTIPLE CHOICE -->  
     
            echo "<h2>Question #5: (5) A well designed agile process _________ the cost of change curve.</h2>";
            if ($answer5 == "D") { echo "CORRECT: D) Flattens <p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is D) Flattens </div></b><p>"; }      
            
            echo "<h2>Question #6: (5) A single iteration of the scrum process pattern is called what?</h2>";
            if ($answer6 == "A") { echo "CORRECT: A) A sprint<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is A) A sprint</div></b><p>"; }      
            
            echo "<h2>Question #7: (5) The software process pattern scrum uses to keep track of features is called the?</h2>";
            if ($answer7 == "B") { echo "CORRECT: B) Backlog<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is B) Backlog</div></b><p>"; }      
            
            echo "<h2>Question #8: (5) The Agile Unified Process uses what modeling language for its Modeling task set?</h2>";
            if ($answer8 == "A") { echo "CORRECT: A) UML<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is A) UML</div></b><p>"; }      
            
    // <!-- FILL IN THE BLANK -->  

            $answer9 = strtolower($answer9);
            $answer10 = strtolower($answer10);
            $answer11 = strtolower($answer11);
            $answer12 = strtolower($answer12);
     
            echo "<h2>Question #9: (5) Today's buzzword when describing a modern software process. ______________</h2>";
            if ($answer9 == "agility") { echo "CORRECT: Agility<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Agility</div></b><p>"; }      
            
            echo "<h2>Question #10: (5) Agile processes are designed to adapt how? ______________</h2>";
            if ($answer10 == "incrementally") { echo "CORRECT: Incrementally<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Incrementally</div></b><p>"; } 
            
            echo "<h2>Question #11: (5) Jeff Sutherland was the creator of which agile methodology? _____________</h2>";
            if ($answer11 == "scrum") { echo "CORRECT: Scrum<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Scrum</div></b><p>"; } 

            echo "<h2>Question #12: (5) Delivering a software increment to the customer is called a? _____________</h2>";
            if ($answer12 == "demo") { echo "CORRECT: Demo<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Demo</div></b><p>"; } 
            
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
                  echo "<div style ='color:#ff0000'><h2>Attempt limit reached - Quiz Score NOT recorded</h2></div></h2>";
	?>
        
        </fieldset></div><br>

        <button onclick="goBack()">Go Back</button>

        <script>
        function goBack() 
        { window.history.back(); }
        </script>
        
        <p><form action="chapters.html">
            <input type="submit" value="Main Page">
        </form>
                
</div>

</body>
</html>
