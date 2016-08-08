<!doctype html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Anujg </title>
        <link rel="stylesheet" href="../styles.css" type="text/css" />
        <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
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
                        <li><a href="../index.html">Home</a></li>
                        <li class="selected-item"><a href="show1.php">Database</a></li>
                        <li><a href="../file/Files.html">Files</a></li>
                        <li><a href="../examples.html">Examples</a></li>
                        <li><a href="../contact.html">Contact</a></li>
                    </ul>
                </nav>



            </aside>
            <section id="content" class="column-right">

                <article>

                    <!--<h3>Code and blockquote</h3>-->
                    <h3>Database Rec.</h3>
                    <blockquote>
                        <p>Hello this page is showing all the records for the present context for the database. These records contains the data entered from the user's </p>
                    </blockquote>
                    <p>&nbsp;</p>


                    <h3>Table</h3>
                    <?php
//"mysql6.000webhost.com","a8958712_us","laatujike2","a8958712_db"
                    $conn = mysql_connect("sql200.byethost13.com", "b13_18201075", "laatujike1");
                    mysql_select_db("b13_18201075_d", $conn);

                    echo '<table>
<tr>
<th>name</th>
<th>email</th>
<th>message</th>
</tr>';
//$sql="SELECT * from feedback where sequence = '".$_GET["sequence"]."' ";
                    $sql = "SELECT * from feedback";
                    $rs = mysql_query($sql, $conn) or die(mysql_error());
                    while ($result = mysql_fetch_array($rs)) {
                        echo '<tr>
<td>' . $result["name"] . '</td>
<td>' . $result["email"] . '</td>
<td>' . $result["message"] . '</td>
</tr>';
                    }
                    echo '</table>';
                    ?>




                    <p>&nbsp;</p>

                    <h3>Form</h3>
                    <fieldset>

                        <legend>Form legend</legend>
                        <!--    get not working                <form action="store.php" method="get">-->

                        <form action="store.php" method="post">
                            <p>
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" value="" />
                                <br />
                            </p>
                            <p>
                                <label for="email">Email:</label>
                                <input type="text" name="email" id="email" value="" />
                                <br />
                            </p>
                            <p>
                                <label for="message">Message:</label>
                                <textarea cols="60" rows="11" name="message" id="message"></textarea>
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

</html>