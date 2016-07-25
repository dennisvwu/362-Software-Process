<html>
<body style="background-color:DDDDFF;">
<?php


$myfile = fopen("josh.txt", "r") or die("Unable to open file!");           
                      
echo "<u>Josh Beckman</u> - Attempts | Latest | Average";
            echo "<br>";
            for ($i = 0; $i < 6; $i++){
                    $chapter = fgets($myfile);
                    $attempts = fgets($myfile);
                    $average = fgets($myfile);
                    $latestscore = fgets($myfile);
                    if ($i == 0)
                    {
                            echo "Chapter 3 : ";
                    }
                    else if ($i == 1)
                    {
                            echo "Chapter 5 : ";
                    }
                    else if ($i == 2)
                    {
                            echo "Chapter 6 : ";
                    }
                    else if ($i == 3)
                    {
                            echo "Chapter 8 : ";
                    }
                    else if ($i == 4)
                    {
                            echo "Chapter 9 : ";
                    }
                    else if ($i == 5)
                    {
                            echo "Chapter 10 : ";
                    }
                    echo "$attempts |";
                    echo "$latestscore |";
                    echo "$average";
                    echo "<br>";                           
            }
            fclose($myfile);
            
echo "<br> <br>";

$myfile = fopen("brian.txt", "r") or die("Unable to open file!");           
                      
echo "<u>Brian Nuckles</u> - Attempts | Latest | Average";
            echo "<br>";
            for ($i = 0; $i < 6; $i++){
                    $chapter = fgets($myfile);
                    $attempts = fgets($myfile);
                    $average = fgets($myfile);
                    $latestscore = fgets($myfile);
                    if ($i == 0)
                    {
                            echo "Chapter 3 : ";
                    }
                    else if ($i == 1)
                    {
                            echo "Chapter 5 : ";
                    }
                    else if ($i == 2)
                    {
                            echo "Chapter 6 : ";
                    }
                    else if ($i == 3)
                    {
                            echo "Chapter 8 : ";
                    }
                    else if ($i == 4)
                    {
                            echo "Chapter 9 : ";
                    }
                    else if ($i == 5)
                    {
                            echo "Chapter 10 : ";
                    }
                    echo "$attempts |";
                    echo "$latestscore |";
                    echo "$average";
                    echo "<br>";                           
            }
            fclose($myfile);
            
echo "<br> <br>";

$myfile = fopen("eryu.txt", "r") or die("Unable to open file!");           
                      
echo "<u>Eryu Suo</u> - Attempts | Latest | Average";
            echo "<br>";
            for ($i = 0; $i < 6; $i++){
                    $chapter = fgets($myfile);
                    $attempts = fgets($myfile);
                    $average = fgets($myfile);
                    $latestscore = fgets($myfile);
                    if ($i == 0)
                    {
                            echo "Chapter 3 : ";
                    }
                    else if ($i == 1)
                    {
                            echo "Chapter 5 : ";
                    }
                    else if ($i == 2)
                    {
                            echo "Chapter 6 : ";
                    }
                    else if ($i == 3)
                    {
                            echo "Chapter 8 : ";
                    }
                    else if ($i == 4)
                    {
                            echo "Chapter 9 : ";
                    }
                    else if ($i == 5)
                    {
                            echo "Chapter 10 : ";
                    }
                    echo "$attempts |";
                    echo "$latestscore |";
                    echo "$average";
                    echo "<br>";                           
            }
            fclose($myfile);
            
echo "<br> <br>";
$myfile = fopen("philip.txt", "r") or die("Unable to open file!");           
                      
echo "<u>Philip Tanwongprasert</u> - Attempts | Latest | Average";
            echo "<br>";
            for ($i = 0; $i < 6; $i++){
                    $chapter = fgets($myfile);
                    $attempts = fgets($myfile);
                    $average = fgets($myfile);
                    $latestscore = fgets($myfile);
                    if ($i == 0)
                    {
                            echo "Chapter 3 : ";
                    }
                    else if ($i == 1)
                    {
                            echo "Chapter 5 : ";
                    }
                    else if ($i == 2)
                    {
                            echo "Chapter 6 : ";
                    }
                    else if ($i == 3)
                    {
                            echo "Chapter 8 : ";
                    }
                    else if ($i == 4)
                    {
                            echo "Chapter 9 : ";
                    }
                    else if ($i == 5)
                    {
                            echo "Chapter 10 : ";
                    }
                    echo "$attempts |";
                    echo "$latestscore |";
                    echo "$average";
                    echo "<br>";                           
            }
            fclose($myfile);
            
echo "<br> <br>";

$myfile = fopen("dennis.txt", "r") or die("Unable to open file!");           
                      
echo "<u>Dennis Wu</u> - Attempts | Latest | Average";
            echo "<br>";
            for ($i = 0; $i < 6; $i++){
                    $chapter = fgets($myfile);
                    $attempts = fgets($myfile);
                    $average = fgets($myfile);
                    $latestscore = fgets($myfile);
                    if ($i == 0)
                    {
                            echo "Chapter 3 : ";
                    }
                    else if ($i == 1)
                    {
                            echo "Chapter 5 : ";
                    }
                    else if ($i == 2)
                    {
                            echo "Chapter 6 : ";
                    }
                    else if ($i == 3)
                    {
                            echo "Chapter 8 : ";
                    }
                    else if ($i == 4)
                    {
                            echo "Chapter 9 : ";
                    }
                    else if ($i == 5)
                    {
                            echo "Chapter 10 : ";
                    }
                    echo "$attempts |";
                    echo "$latestscore |";
                    echo "$average";
                    echo "<br>";                           
            }
            fclose($myfile);
            
echo "<br> <br>";
?>

<p>
<form action="teacher.html">
    <input type="submit" value="Main Menu">
</form>

<p>
<form action="index.html">
    <input type="submit" value="Log Out">
</form>

</body>
</html>