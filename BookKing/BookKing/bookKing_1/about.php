<!--
    The main  page (index)
    Created on : 25.2.2016
    Author     : Hallvard & Alexander
    Change log:
        -1.3.16: Added the navigation menu with links to; About us
        -1.3.16: Added background image, did some changes to section and aside.
-->

<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="normalize.css">
        <link rel="stylesheet" href="main.css">
        <title>Book King</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="about.css">
    </head>
    <body>
        <header> 
            <img src="BookKingHeader.jpg">
        </header>

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
                <li><a href="about.php">About us</a></li>
            </ul>
        </nav>
        
        
        
        <section id="about">
            
            <h2 id="about_header">Kontakt oss!</h2>
    
            
            
<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "someone@example.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form id="about_form" method="post">
  Email: <input name="email" id="email" type="text" /><br />
  Subject: <input name="subject" id="subject" type="text" /><br />
  Message:<br />
  <textarea name="comment" id="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" id="submit" value="Submit" />
  </form>
  
<?php
  }
?>


        </section>
        <aside id="meny">
            <ul>
                <li>
                    <a href="#">Om oss</a>  
                </li>
                <li>
                    <a href="#">Historie</a>
                </li>
                <li>
                    <a href="#">Medlemmer</a>
                </li>
                <li>
                    <a href="#">liste</a>
                </li>
                <li>
                    <a href="#">liste</a>
                </li>
            </ul>
        </aside>
        <footer> </footer>
    </body>
</html>
