<html>
<body>
    <h1>Sign In</h1>
    <main>
        <?php
            if(isset($_POST['Submit'])){
                if($count == 1){
                    //session_start();
                    //register the username and password and redirect to account page
                    $_SESSION['loggedin'] = true;
                    $_SESSION["id"] = $row['id'];
                    header("Location: ./index.php/?action=home");
                }
                else{
                    echo "<span class='error'>Wrong Username or Password</span>";
                }
            }
        ?>
        <form name="login" id="login-form" method="post" action="#">
            <table id="login">
                <tr>
                    <td>Username &nbsp;</td>
                    <td><input name="myusername" type="text" id="myusername"/></td>                                     
                    <td></td>
                </tr>
                <tr>
                    <td>Password &nbsp;</td>
                    <td><input name="mypassword" type="password" id="mypassword"/></td>  
                    <td></td>
                </tr>
                <tr><td colspan="3">&nbsp;</td></tr>
                <tr>
                    <td><input type="submit" name="Submit" value="Login"/></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr><td colspan="3">&nbsp;</td></tr>
                <tr>
                    <td colspan="3">Don't have an account? <a href="./index.php/?action=signUp">Sign Up</a></td>
                </tr>
            </table>
        </form>
        <br/>
    </main>
</body>
</html>
