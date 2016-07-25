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
        <h1>Quiz Chapter: 10</h1>
        </font>
              
        <div style="background-color:DDDDFF;">
        <fieldset>
        	
	<?php
    // <!-- Read From file for number of attempts and current average-->
            
            $user = $_SESSION['userValue'];
            $user = $user . ".txt";
            $count = 0;
            $myfile = fopen( $user, "r") or die("Unable to open file!");
            $check = -10;
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
            
            echo "<h2>Question #1: (10) Class-based methods for requirements modeling were often categorized as object-oriented analysis.</h2>";
            if ($answer1 == "A") { echo "CORRECT: A) True<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: A) True</div></b><p>"; }
            
            echo "<h2>Question #2: (10) Operations define the class that clarify what is meant by the class in the context of the problem space.</h2>";
            if ($answer2 == "B") { echo "CORRECT: B) False<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: B) False; Operations [pending answer]</div></b><p>"; }        
                     
            echo "<h2>Question #3: (10) Class-responsibility-collaborator (CRC) modeling provides a simple means for identifying and organizing the classes that are relevant to system or product requirements.</h2>";
            if ($answer3 == "B") { echo "CORRECT: A) True<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: A) True</div></b><p>"; }
            
            echo "<h2>Question #4: (10) Categorization is not an important part of analysis modeling.</h2>";
            if ($answer4 == "A") { echo "CORRECT: B) False<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is B) False; Categorization is an important part of analysis modeling.</div></b><p>"; }  
            
    // <!-- MULTIPLE CHOICE -->  
     
            echo "<h2>Question #5: (10.1) Classes are determined by underlining each ______ and entering it into a simple table.</h2>";
            if ($answer5 == "A") { echo "CORRECT: A) Noun or noun phase<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is A) Noun or noun phase</div></b><p>"; }      
            
            echo "<h2>Question #6: (10.2) To develop a meaningful set of attributes fro an analysis class, you should study each use case and select those ____ that reasonably 'belong' to the class</h2>";
            if ($answer6 == "C") { echo "CORRECT: C) 'Things'<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is C) 'Things'</div></b><p>"; }      
            
            echo "<h2>Question #7: (10.4) Which is not a section of CRC (class responsibility collaborator) card?</h2>";
            if ($answer7 == "B") { echo "CORRECT: B) Class type<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is B) Class type</div></b><p>"; }      
            
            echo "<h2>Question #8: (10.6) A symbol '#' preceding the analysis class name in a package indicates that:</h2>";
            if ($answer8 == "C") { echo "CORRECT: C) The class is accessible only to packages contained with in a given package.<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is C) The class is accessible only to packages contained with in a given package.</div></b><p>"; }         

    // <!-- FILL IN THE BLANK -->  

            $answer9 = strtolower($answer9);
            $answer10 = strtolower($answer10);
            $answer11 = strtolower($answer11);
            $answer12 = strtolower($answer12);
     
            echo "<h2>Question #9: (6.5) _________ is required for agile teams to make effective use of the competencies of each team member and to foster effective collaboration through a software project.</h2>";
            if ($answer9 == "communications") { echo "CORRECT: Communications<p>"; $totalCorrect++; }
            else { echo "<div style ='color:#ff0000'><b>INCORRECT: The correct answer is: Communications</div></b><p>"; }      


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
