<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Contact us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="normalize.css">
        <link rel="stylesheet" type="text/css" href="main.css">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="Contact_us.css">
        

    </head>
    <body>
        <header> <img src="BookKingHeader.jpg" alt="header" /> </header>
        <nav id="nav">
            <ul id="navigation">
                <li><a href="index.html">Home</a>
                </li>
                <li><a href="CatPage.html">Categories &raquo;</a>
                    <ul>
                        <li><a href="#">Fantasy &raquo;</a>
                            <ul>
                                <li><a href="artikkelmal.html">Dark-Fantasy</a></li>
                                <li><a href="#">Fantasy-Comedy</a></li>
                                <li><a href="#">Medival-Fantasy</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Sci-fi</a>
                            <ul>
                                <li><a href="#">Dark-Sci-fi</a></li>
                                <li><a href="#">Sci-fi-Comedy</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drama</a></li>
                    </ul>
                </li>
                <li><a href="#">Forum</a></li>
                <li><a href="#">Wiki</a></li>
                <li><a href="#">Other mediums</a></li>
                <li><a href="About.us.html">About us</a></li>
            </ul>
        </nav>
        <section>
            <aside id="meny">
                <ul>
                    <li>
                        <a href="About_us.html">Om oss</a>  
                    </li>
                    <li>
                        <a href="Historie.html">Historie</a>
                    </li>
                    <li>
                        <a href="Medlemmer.html">Medlemmer</a>
                    </li>
                    <li>
                        <a href="contact_us.html">Kontakt oss</a>
                    </li>
                    <li>
                        <a href="#">liste</a>
                    </li>
                </ul>
            </aside>
            <article>
                <h2 id="about_header">Contact us!</h2>
                <?php

              if (isset($_REQUEST['email']))  {
  
 
            $admin_email = "someone@example.com";
            $email = $_REQUEST['email'];
            $subject = $_REQUEST['subject'];
            $comment = $_REQUEST['comment'];
  
  
            mail($admin_email, "$subject", $comment, "From:" . $email);
  
  
             echo "Thank you for contacting us!";
             }
  
  
             else  {
            ?>

 
  


                    <form id="about_form"  method="post" enctype="text/plain">
                        Subject:<br>
                        <input id="subject" type="text" name="name" value="The subject"><br>
                        E-mail:<br>
                        <input id="email" type="text" name="mail" value="your email"><br>
                        Comment:<br>
                        <textarea id="comment"  name="comment">Your comment</textarea><br><br>
                        <input type="submit" value="Send">
                        <input type="reset" value="Reset">
                    </form>
<?php
  }
?>
        </section>
        <footer>  ©2016- Webtech.(Alexander, Øystein, Hallvard, André, Kristian, Asbjørn) in terms with the <a href="http://creativecommons.org/licenses/by-nc/2.0/legalcode" target="blank">Creative commons, Legal code</a> and the <a href="https://lovdata.no/dokument/NL/lov/1961-05-12-2" target="blank">Norwegian Aandsvers law.</a>   <a href="contactUs.html" target="blank">Contact us</a>           </footer>
    </body>
</html>
