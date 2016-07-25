<?php
                $username = $_POST['username'];
                $password = $_POST['password'];
                $id = $_POST['id'];
                
                $check = $username;
                $filename = "users.txt";
                $repeat = 0;
                $i = 0;
                $myfile = fopen($filename, "r") or die("Unable to open file!");
                while(!feof($myfile))
                {
                    $next = fgets($myfile);
                    $boom[$i] = $next;
                    if ($check == $next)
                    {
                        $repeat = 1;
                    }
                    $trash = fgets($myfile);
                    $trash = fgets($myfile);
                    $i = $i + 1;
                }
                fclose($myfile);
                if($repeat == 1)
                        header('Location: http://cpsc362quiz.atwebpages.com/registerfail.html');
                $myfile2 = fopen($filename, "a") or die("Unable to open file!");
                fputs($myfile2, $username);
                fputs($myfile2, "\n");
                fputs($myfile2, $password);
                fputs($myfile2, "\n");
                fputs($myfile2, $id);
                fputs($myfile2, "\n");
                fputs($myfile2, $next);
                fputs($myfile2, $check);
                fputs($myfile2, $repeat);
                fputs($myfile2, $boom[0]);
                fclose($myfile2);
                
                header('Location: http://cpsc362quiz.atwebpages.com/index.html');
?>