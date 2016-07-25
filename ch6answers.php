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
        <h1>Quiz Chapter: 6</h1>
        </font>
              
        <div style="background-color:DDDDFF;">
        <fieldset>
        	
	<?php
    // <!-- Read From file for number of attempts and current average-->
            
            $user = $_SESSION['userValue'];
            $user = $user . ".txt";
            $count = 0;
            $myfile = fopen( $user, "r") or die("Unable to open file!");
            $check = -6;
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
            
            echo "<h2>Question #1: (6.1) An effective software engineer has a sense of individual responsibility.</h2>";
            if ($answer1 == "A") { echo "CORRECT: A) True<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: A) True</div></b><p>"; }
            
            echo "<h2>Question #2: (6.2) The scout controls the flow of information that stakeholders and others send to the team.</h2>";
            if ($answer2 == "B") { echo "CORRECT: B) False<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: B) False; The scout crosses the teams boundary to collect organizational information.</div></b><p>"; }        
                     
            echo "<h2>Question #3: (6.3) Highly skilled technologists are complemented by members who may have less technical background but are more empathetic to the needs of stakeholders.</h2>";
            if ($answer3 == "A") { echo "CORRECT: A) True<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: A) True</div></b><p>"; }
            
            echo "<h2>Question #4: (6.5.2) In order to achieve effective communication between the agile team and other stakeholders, XP emphasizes close, yet informal (verbal) collaboration between customers and developers.</h2>";
            if ($answer4 == "A") { echo "CORRECT: A) True<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is A) True</div></b><p>"; } 
            
            
    // <!-- MULTIPLE CHOICE -->  
     
            echo "<h2>Question #5: (6.2) At the team level, Sawyer and his colleagues suggest that teams often establish artificial boundaries that reduce what?</h2>";
            if ($answer5 == "D") { echo "CORRECT: D) Communications<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is D) Communications</div></b><p>"; }      
            
            echo "<h2>Question #6: (6.3) DeMarco and Lister contend that members of what team are significantly more productive and more motivated than average?</h2>";
            if ($answer6 == "A") { echo "CORRECT: A) Jelled Team<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is A) Jelled Team</div></b><p>"; }      
            
            echo "<h2>Question #7: (6.4) What are the four 'organizational paradigms' for software engineering teams?</h2>";
            if ($answer7 == "B") { echo "CORRECT: B) Closed, random, open, and synchronous paradigm<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is B) Closed, random, open, and synchronous paradigm</div></b><p>"; }      
            
            echo "<h2>Question #8: (6.5) What is required for agile teams to make effective use of the competencies of each team member and to foster effective collaboration through a software project?</h2>";
            if ($answer8 == "D") { echo "CORRECT: D) Self-organizing<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is D) Self-organizing</div></b><p>"; }      
            

    // <!-- FILL IN THE BLANK -->  

            $answer9 = strtolower($answer9);
            $answer10 = strtolower($answer10);
            $answer11 = strtolower($answer11);
            $answer12 = strtolower($answer12);
     
            echo "<h2>Question #9: (6.2) ______ represents the team to outside constituencies with the intent of negotiating time and resources and gaining feedback from stakeholders.</h2>";
            if ($answer9 == "ambassador") { echo "CORRECT: Ambassador<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Ambassador</div></b><p>"; } 
            
            echo "<h2>Question #10: (6.3) In addition to the five toxins described by Jackman, a software team often struggles with the differing ______ traits of its members.</h2>";
            if ($answer10 == "human") { echo "CORRECT: Human<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Human</div></b><p>"; } 

            echo "<h2>Question #11: (6.5.1) To achieve ________, the agile team designs only for immediate needs, rather than considering future needs.</h2>";
            if ($answer11 == "simplicity") { echo "CORRECT: Simplicity<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Simplicity</div></b><p>"; }  

            echo "<h2>Question #12: (6.6) The value of social media grows as team size _______, and is magnified further when the team is geographically dispersed.</h2>";
            if ($answer12 == "increases") { echo "CORRECT: Increases<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Increases</div></b><p>"; }   


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
                  echo "<div style ='color:#ff0000'><h2>Attempt limit reached - Quiz Score NOT recorded</h2></div>";
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
