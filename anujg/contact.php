<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Anujg </title>
    <link rel="stylesheet" href="styles.css" type="text/css" />
    <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <style>
        /*
       
*/
        
        .col {
            color: #80B763;
        }
        
        .roundrect {
            border-radius: 15px;
        }
    </style>

</head>

<body>

    <section id="body" class="width">
        <aside id="sidebar" class="column-left">

            <header>
                <h1><a href="#">Anujg</a></h1>

                <h2>Welcome to my website!</h2>

            </header>

            <nav id="mainnav">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Solutions</a></li>
                    <li><a href="file/Files.html">Files</a></li>
                    <li><a href="examples.html">Examples</a></li>
                    <li class="selected-item"><a href="contact.html">Contact</a></li>
                </ul>
            </nav>



        </aside>
        <section id="content" class="column-right">
            <article>
                <h4 class="col">Contact us</h4> Welcome here, your responses are precious to use web template for commuinity lerarning Anujg . This responsive template is easy to use

                <div border-radius: 25px;>
                    <img src="img/Anuj.jpg" class="roundrect" align="right" height="250px" widht="">
                </div>



                <br>
                <br>
                <br>

                <h3>Feedback Form</h3>
                <fieldset>

                    <legend>Form legend</legend>
                    <form action="db/store.php" method="post">
                        <p>
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" value="" required/>
                            <br />
                        </p>
                        <p>
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="" required/>
                            <br />
                        </p>
                        <p>
                            <label for="message">Message:</label>
                            <textarea cols="60" rows="11" name="message" id="message" required></textarea>
                            <br />
                        </p>
                        <p>
                            <input type="submit" name="send" class="formbutton" value="Send" />
                        </p>
                    </form>

                </fieldset>
            </article>


            <footer class="clear">
                <p>&copy; 2015 sitename. <a href="">Anujg</a> for Rapid Development</p>
            </footer>

        </section>

        <div class="clear"></div>

    </section>


</body>

<?php
//    $data = json_decode(file_get_contents("php://input"));
//$name = mysql_real_escape_string($data->name);
//$email= mysql_real_escape_string($data->email);
//$message= mysql_real_escape_string($data->message);
$name='name';$email='email';
$message='message';
//
mysql_connect("mysql6.000webhost.com", "a8958712_us", "laatujike2") or die(mysql_error()); 
mysql_select_db("a8958712_db") or die(mysql_error()); 
mysql_query("INSERT INTO feedback (name,email,message) VALUES ('$name', '$email','$message')"); 
Print "Your information has been successfully added to the database.";
?>

</html>