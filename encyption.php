<?php ?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="icon" href="img/favicon.ico" type="icon" sizes="32x32">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Utilities</title>
</head>

<body>

<nav class="blue">
    <div class="nav-wrapper container">
        <a href="#!" class="brand-logo right">Sam Roberts</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="left hide-on-med-and-down">
            <li class="active" ><a href="encyption.php">Encryption</a></li>
            <li><a href="obfuscation.php">Obfuscation</a></li>
            <li><a href="minifying.php">Minifying</a></li>
            <li><a href="character-codes.php">Character Codes</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li class="active"><a href="encyption.php">Encryption</a></li>
            <li><a href="obfuscation.php">Obfuscation</a></li>
            <li><a href="minifying.php">Minifying</a></li>
            <li><a href="character-codes.php">Character Codes</a></li>
        </ul>
    </div>
</nav>

<div class="container">

</div>

<footer class="page-footer blue">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contact Me</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" target="_blank" href="https://github.com/samroberts707">Github</a></li>
                    <li><a class="grey-text text-lighten-3" target="_blank" href="https://twitter.com/samroberts707">Twitter</a></li>
                    <li><a class="grey-text text-lighten-3" target="_blank" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" target="_blank" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Sam Roberts © 2016
        </div>
    </div>
</footer>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>$(".button-collapse").sideNav();</script>
</body>
</html>