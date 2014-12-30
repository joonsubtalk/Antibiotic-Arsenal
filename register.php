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
            <hr>
            <div id="response"></div>
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="InputEmail">Email address (.mednet)</label>
                        <input type="email" class="form-control" id="InputEmail" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="optionsRadios">Year in Med school</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="yearSelection" id="optionsRadios1" value="2" checked>
                                2nd Year Student
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="yearSelection" id="optionsRadios2" value="3">
                                3rd Year Student
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="yearSelection" id="optionsRadios3" value="4">
                                4rth Year Student
                            </label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-default" onclick="loadXMLDoc()">Submit</button>
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
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("response").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("POST","registerUser.php",true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xmlhttp.send("email=" + document.getElementById('InputEmail').value
                        +"&password=" + document.getElementById('InputPassword').value
                        +"&yearSelection=" + document.querySelector('input[name = "yearSelection"]:checked').value);
        }
    </script>

<?php
require_once("footer.php");
?>

