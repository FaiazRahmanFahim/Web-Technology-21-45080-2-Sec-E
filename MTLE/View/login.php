<?php
    session_start();
    print_r($_SESSION);

?>
<html lang="en">
    <head>
        <title>Login</title>
    </head>
    <body>
        <center>
                <form method="post" action="../controller/logincheck.php" enctype="">
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td>
                                <fieldset>
                                    <legend><h3>LOGIN</h3></legend>
                                    User Id<br/>
                                    <input type="text" name="userId" value="" /><br/>                               
                                    Password<br/>
                                    <input type="password" name="password" value="" />
                                    <br /><hr/>
                                    <input type="button" value="Login">
                                    <a href="registration.html">Register</a>
                                </fieldset>
                            </td>
                        </tr>                                
                    </table>
                </form>
        </center>
    </body>
</html>