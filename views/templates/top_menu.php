<?php
/**
 * Default Top menu template
 *
 * @author David Eddy <me@davidjeddy.com>
 * @date 2014-01-13
 * @since 0.0.1
 * @version 0.0.1
 */
?>
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= SITEHOME; ?>">Winds.net</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="#">Learn More</a></li>
            <li><a href="#">Sign In</a></li>
            <?php if ( $_SESSION['IS_AUTH'] == true ){ ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account&nbsp;<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">My Device</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Time (Add / View / Refund)</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Access History</a></li>
                </ul>
            </li>
            <?php }; ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php
            if ( $_SESSION['IS_AUTH'] == true ){
                echo '<li><a href="#">Sign Out</a></li>';
            }
            ?>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>