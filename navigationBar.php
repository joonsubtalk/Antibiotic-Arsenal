<?php
/**
 * Created by PhpStorm.
 * User: Joon-Sub
 * Date: 12/27/2014
 * Time: 11:01 PM
 */

?>
<!-- Fixed navbar -->
<nav class="navbar navbar-fixed-top navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $title; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php //todo fix this?>
                <li class="active"><a href="#">Hello, Joon</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>