<?php
session_start();

    if($_SESSION) {
        header('location: dashboard.php');
    }

include('pros-login.php');
?>

<html>
    <head>
        <title>Login</title>
        <style>
             table, tr, td, th {
                border: 1px black solid;
                border-collapse: collapse;
                padding: 10px;
            }

            th {
                text-align: left;
            }
            
            #button {
                text-align: center;
            }
        </style>
    </head> 
    <body>
        <center>
        <br>
            <h1>Login</h1>
            <br>
            <form action="" method="POST">
                <table>
                    <tr>
                        <th>Username:</th>
                        <td><input type="text" name="userid" required/></td>
                    </tr>
                    <tr>
                        <th>Password:</th>
                        <td><input type="password" name="pass" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2" id="button">
                                <button type="submit" name="submit">Log Masuk</button>
                                <button type="reset" name="reset">Set Semula</button>
                        </td>
                    </tr>
                </table> <br>
                <?php echo $error; ?>
            </form>
        </center>
    </body>
</html>
    </body>
</html>
