<html>
<body style="background-color:FFFFFF;">

<?php
$student = $_POST['resetstudent'];
$chapter = $_POST['resetchapter'];

$studenttext = $student . ".txt";
$count = 0;

if ($chapter == 3){
$check = -3;
}

else if ($chapter == 5){
$check = -5;
}

else if ($chapter == 6){
$check = -6;
}

else if ($chapter == 8){
$check = -8;
}

else if ($chapter == 9){
$check = -9;
}

else if ($chapter == 10){
$check = -10;
}
            $myfile = fopen($studenttext, "r+") or die("Unable to open file!");
            do{
                    $next = fgets($myfile);
                    $count++;
            } while($next != $check);
            fclose($myfile);
            
            $filename = $studenttext;
                    $line_i_am_looking_for = $count;
                    $lines = file( $filename , FILE_IGNORE_NEW_LINES );
                    $lines[$line_i_am_looking_for] = 0;
                    $lines[$line_i_am_looking_for + 1] = 0;
                    $lines[$line_i_am_looking_for + 2] = 0;
                    file_put_contents( $filename , implode( "\n", $lines ) );
            
            
 echo "Succesfully reset attempts for $student Chapter $chapter.";
?>
<div id="page-wrap"> 
	<div style="background-color:DDDDFF; background-image: url(CourseBook.jpg); background-repeat: no-repeat; background-position: right">
        
	<fieldset>
<form action="resetstudent.php" id="reset" method="post">    
       

<h1>Choose Student To Reset</h1>
                    

                    <div>
                        <input type="radio" name="resetstudent" value="josh" /> Josh Beckman <br>
                        <input type="radio" name="resetstudent" value="brian" /> Brian Nuckles <br>
                        <input type="radio" name="resetstudent" value="eryu" /> Eryu Suo <br>
                        <input type="radio" name="resetstudent" value="philip" /> Philip Tanwongprasert <br>
                        <input type="radio" name="resetstudent" value="dennis" /> Dennis Wu <br>                        
                    </div>   
                    
<h1> Choose Chapter to Reset </h1>
                    
                    <div>
                        <input type="radio" name="resetchapter" value="3" /> Chapter 3 <br>
                        <input type="radio" name="resetchapter" value="5" /> Chapter 5 <br>
                        <input type="radio" name="resetchapter" value="6" /> Chapter 6 <br>
                        <input type="radio" name="resetchapter" value="8" /> Chapter 8 <br>
                        <input type="radio" name="resetchapter" value="9" /> Chapter 9 <br> 
                        <input type="radio" name="resetchapter" value="10" /> Chapter 10 <br> 
                    </div>   
      
    
         </fieldset></div>
<input type="submit" value="Select" /><br>           
</div>
        </form>
<p>
<form action="teacher.html">
    <input type="submit" value="Main Menu">
</form>

</body>
</html>