<?php
/**
 * Created by PhpStorm.
 * User: Joon-Sub
 * Date: 12/28/2014
 * Time: 7:05 PM
 */

require_once("global.php");

$titleFormat = $titleFormat . "Register";
require_once("header.php");

?>

<body role="document">

<?php
require_once("navigationBar.php");
?>

    <div class="container content" role="main">
        <div class="row">
            <h1>Register</h1>
            <?php
            /**
             * Note that the salt here is randomly generated.
             * Never use a static salt or one that is not randomly generated.
             *
             * For the VAST majority of use-cases, let password_hash generate the salt randomly for you
             */
            $options = [
                'cost' => 11,
                'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
            ];
            // See the password_hash() example to see where this came from.
            $hash = password_hash("asdf", PASSWORD_BCRYPT, $options);

            echo $hash;

            if (password_verify('asdf', $hash)) {
                echo 'Password is valid!';
            } else {
                echo 'Invalid password.';
            }
            $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password);
            $statement = $pdo->query("SELECT * FROM wp_users");
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            echo htmlentities($row['user_login']);
            ?>
            <hr>
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="InputEmail1">Email address (.mednet)</label>
                        <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Password</label>
                        <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="optionsRadios">Year in Med school</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                2nd Year Student
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                3rd Year Student
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                4rth Year Student
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div> <!-- /container -->

    <script>
        function loadXMLDoc()
        {
            var xmlhttp;
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==XMLHttpRequest.DONE && xmlhttp.status==200)
                {
                    document.getElementById("optionsRadios2").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","index.php",true);
            xmlhttp.send();
        }
    </script>

<?php
require_once("footer.php");
?>

