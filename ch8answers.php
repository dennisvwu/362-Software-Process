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
        <h1>Quiz Chapter: 8</h1>
        </font>
              
        <div style="background-color:DDDDFF;">
        <fieldset>
        	
	<?php
        // <!-- Read From file for number of attempts and current average-->
            
            $user = $_SESSION['userValue'];
            $user = $user . ".txt";
            $count = 0;
            $myfile = fopen( $user, "r") or die("Unable to open file!");
            $check = -8;
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
            
            echo "<h2>Question #1: (8.1) The broad spectrum of tasks and techniques that lead to an understanding of requirements is called requirements engineering.</h2>";
            if ($answer1 == "A") { echo "CORRECT: A) True<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: A) True</div></b><p>"; }
            
            echo "<h2>Question #2: (8.1)  Problems of scope are encountered when customers and users are not completely sure of what is needed.</h2>";
            if ($answer2 == "B") { echo "CORRECT: B) False<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: B) False; Problems of understanding.</div></b><p>"; }        
                     
            echo "<h2>Question #3: (8.1) Requirements management is a set of activities that help the project team identify, control, and track requirements and changes to requirements at any time as the project proceeds.</h2>";
            if ($answer3 == "B") { echo "CORRECT: A) True<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: A) True</div></b><p>"; }
            
            echo "<h2>Question #4: (8.2) A stakeholder is anyone who benefit in a direct or indirect way from the system which is being developed.</h2>";
            if ($answer4 == "A") { echo "CORRECT: A) True<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is A) True</div></b><p>"; }  
            
    // <!-- MULTIPLE CHOICE -->  
     
            echo "<h2>Question #5: (8.5) What are the 3 elements to an analysis model?</h2>";
            if ($answer5 == "A") { echo "CORRECT: A) Scenario-based, class-based and, behavioral based<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is A) Scenario-based, class-based and, behavioral based</div></b><p>"; }      
            
            echo "<h2>Question #6: (8.3) Which is not a rule for collaborative gatherings?</h2>";
            if ($answer6 == "D") { echo "CORRECT: D) Everyone freely shares ideas<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is D) Everyone freely shares ideas</div></b><p>"; }      
            
            echo "<h2>Question #7: (8.2) What is traceability?</h2>";
            if ($answer7 == "B") { echo "CORRECT: B) Software engineering term that refers to documented links between software engineering work products<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is B) Software engineering term that refers to documented links between software engineering work products</div></b><p>"; }      
            
            echo "<h2>Question #8: (8.7) Which is not a task requirement monitoring?</h2>";
            if ($answer8 == "C") { echo "CORRECT: C) Run-time debugging<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is C) Run-time debugging</div></b><p>"; }         

    // <!-- FILL IN THE BLANK -->  

            $answer9 = strtolower($answer9);
            $answer10 = strtolower($answer10);
            $answer11 = strtolower($answer11);
            $answer12 = strtolower($answer12);
     
            echo "<h2>Question #9: (8.1) The information obtained from the customer during inception and ________ is expanded and refined during elaboration.</h2>";
            if ($answer9 == "elicitation") { echo "CORRECT: Elicitation<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Elicitation</div></b><p>"; }      
           
            echo "<h2>Question #10: (8.2) You should categorize all ________ information (including inconsistent and conflicting requirements) in a way that will allow decision makers to choose an internally consistent set of requirements for the system.</h2>";
            if ($answer10 == "stakeholder") { echo "CORRECT: Stakeholder<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Stakeholder</div></b><p>"; }   
            
            echo "<h2>Question #11: (8.3) Service-oriented development views a ________ as an aggregation of services.</h2>";
            if ($answer11 == "system") { echo "CORRECT: System<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: System</div></b><p>"; }      
            
            echo "<h2>Question #12: (8.5) Scenario-based ________ of the requirements model are often the first part of the model that is developed.</h2>";
            if ($answer12 == "elements") { echo "CORRECT: Elements<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Elements</div></b><p>"; }      

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
