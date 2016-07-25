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
        <h1>Quiz Chapter: 9</h1>
        </font>
              
        <div style="background-color:DDDDFF;">
        <fieldset>
        	
	<?php
                
        // <!-- Read From file for number of attempts and current average-->
            
            $user = $_SESSION['userValue'];
            $user = $user . ".txt";
            $count = 0;
            $myfile = fopen( $user, "r") or die("Unable to open file!");
            $check = -9;
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
            
            echo "<h2>Question #1: (9.1) Flow and data modeling have become more popular while scenario and class-based method have declined.</h2>";
            if ($answer1 == "B") { echo "CORRECT: B) False<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: B) False; Scenario and class-based modeling are growing increasingly popular in the software engineering community as they turn away from flow and data modeling. </div></b><p>"; }
            
            echo "<h2>Question #2: (9.1.1) It is important to note that all elements of the requirements model will be directly traceable to parts of the design model.</h2>";
            if ($answer2 == "A") { echo "CORRECT: A) True<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: A) True</div></b><p>"; }        
                     
            echo "<h2>Question #3: (9.1.2) It is a rule of thumb to focus on infrastructure and other nonfunctional models before design.</h2>";
            if ($answer3 == "B") { echo "CORRECT: B) False<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: B) False; Before in can inplement a system, such as a database, you would need classes and functionsto implement the system into the application.</div></b><p>"; }
            
            echo "<h2>Question #4: (9.1.2) The goal of domain analysis is to find or create those analysis classes and patterns that are boardly applicable so that thay may be reused.</h2>";
            if ($answer4 == "A") { echo "CORRECT: A) True<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is A) True</div></b><p>"; }  
            
    // <!-- MULTIPLE CHOICE -->  
     
            echo "<h2>Question #5: (9.1) Which of the following models is used to represent the functional element of the system and how they transform data as they move through the system?</h2>";
            if ($answer5 == "D") { echo "CORRECT: D) Flow-oriented model<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is D) Flow-oriented model</div></b><p>"; }      
            
            echo "<h2>Question #6: (9.1.4) Which combination of fours are the elements of the analysis model?</h2>";
            if ($answer6 == "B") { echo "CORRECT: B) Scenario-based model, class-based model, data model, and flow-oriented model<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is B) Scenario-based model, class-based model, data model, and flow-oriented model</div></b><p>"; }      
            
            echo "<h2>Question #7: (9.2.2) Which is NOT a question to refine a preliminary use case?</h2>";
            if ($answer7 == "B") { echo "CORRECT: B) Can the actor terminate from the process at this point?<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is B) Can the actor terminate from the process at this point?</div></b><p>"; }      
            
            echo "<h2>Question #8: (9.3.2) Which UML diagram is allows you to represent the flow of activities described by the use case and at the same time indicate with actor or analysis class has responsibility for the action described by an activity rectangle?</h2>";
            if ($answer8 == "C") { echo "CORRECT: C) Swimlane diagram<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is C) Swimlane diagram</div></b><p>"; }         

    // <!-- FILL IN THE BLANK -->  

            $answer9 = strtolower($answer9);
            $answer10 = strtolower($answer10);
            $answer11 = strtolower($answer11);
            $answer12 = strtolower($answer12);
     
            echo "<h2>Question #9: (9.1.2) The model should focus on _____ that are visible within the problem or business domain.</h2>";
            if ($answer9 == "requirements") { echo "CORRECT: Requirements<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Requirements</div></b><p>"; } 
            
            echo "<h2>Question #10: (9.1.4) _____ elements depict how external events change the state of the system or the classes that reside within it.</h2>";
            if ($answer10 == "behavioral") { echo "CORRECT: Behavioral<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Behavioral</div></b><p>"; } 
            
            echo "<h2>Question #11: (9.1.4) _____-oriented analysis, focuses on the definition of classes and the manner in which they collaborate with one another to effect customer requirements.</h2>";
            if ($answer11 == "object") { echo "CORRECT: Object<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Object</div></b><p>"; } 
            
            echo "<h2>Question #12: (9.3.1) Scenarios can also be described using an ______ diagram-a flowchart-like graphical representation that depicts the processing flow within a specific scenario.</h2>";
            if ($answer12 == "activity") { echo "CORRECT: Activity<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Activity</div></b><p>"; }        
            
            
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
