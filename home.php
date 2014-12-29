<?php
/**
 * Created by PhpStorm.
 * User: Joon-Sub
 * Date: 12/28/2014
 * Time: 12:25 PM
 */


require_once("global.php");

$titleFormat = $titleFormat . "Objectives";
require_once("header.php");
?>

<body role="document">

<?php
require_once("navigationBar.php");
?>

<div class="container content" role="main">
    <div class="row">
        <h1>Main Menu</h1>
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
        ?>
        <hr>
        <div class="col-md-4">
            <div class="box">
                Pre Test
            </div>
        </div>
        <div class="col-md-4">
            <div class="box disabled">
                Modules
            </div>
        </div>
        <div class="col-md-4">
            <div class="box disabled">
                Post Test
            </div>
        </div>
    </div>
</div> <!-- /container -->

<?php
require_once("footer.php");
?>