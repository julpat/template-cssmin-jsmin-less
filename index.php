<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/kickstart/kickstart.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        
        <div id="header">
            <div id="headerImg" style="background-image: url(img/header_img_01.png);">
                <div class="baseWidth">
                    <a id="logo"><img src="img/logo.png" alt="Ozkouseno.cz" /></a>
                    
                    <div id="userBlock">
                        <div class="inner">
                            <a class="login btn btnGreen" href="">Přihlásit se</a>
                            <a class="loginFb btn btnBlue" href="">Facebook Login</a>
                        </div>
                    </div>
                    
                    <div id="searchBlock">
                        <form method="" action="">
                            <input type="text" class="text" placeholder="Hledání.." />
                            <button type="submit" class="submit btn btnGreen btnBig"><span class="ico icoArrowSubmit"></span></button>
                        </form>
                    </div>
                </div>
                
                <div id="menuTop">
                    <div class="baseWidth">
                        <ul>
                            <li><a href="">Auta</a></li>
                            <li><a href="">Knihy</a></li>
                            <li><a href="">Počítače a software</a></li>
                            <li><a href="">Elektronika</a></li>
                            <li><a href="">Dárky</a></li>
                            <li><a href="">Domov a zahrada</a></li>
                            <li><a href="">Kancelářské potřeby</a></li>
                            <li><a href="">Sporty</a></li>
                            <li><a href="">Cestování</a></li>
                            <li>
                                <a href="">Další &gt;</a>
                                <ul>
                                    <li><a href="">Dalsi 1.</a></li>
                                    <li><a href="">Dalsi 2.</a></li>
                                    <li><a href="">Dalsi 3.</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="content">
<?php
if(!isset($_GET['str'])){
    $str = 'home';
}else{
    $str = $_GET['str'];
}
include $str . '.php';
?>
        </div>
        
        <div id="footer">
            <div id="footerMenu">
                <div class="baseWidth">
                    
                    <ul class="column">
                        <li><a href="">Auta</a>
                            <ul>
                                <li><a href="">příslušenství</a></li>
                                <li><a href="">doplňky</a></li>
                                <li><a href="">kosmetika</a></li>
                                <li><a href="">podkategorie 4</a></li>
                                <li><a href="">nová vozidla</a></li>
                                <li><a href="">...více <span class="ico icoArrowGreenSmall"></span></a></li>
                            </ul>
                        </li>
                        <li><a href="">Knihy</a>
                            <ul>
                                <li><a href="">časopisy</a></li>
                                <li><a href="">odborná literatura</a></li>
                                <li><a href="">návody</a></li>
                                <li><a href="">komix</a></li>
                                <li><a href="">právě vyšlo</a></li>
                                <li><a href="">...více <span class="ico icoArrowGreenSmall"></span></a></li>
                            </ul>
                        </li>
                        <li><a href="">Filmy</a>
                            <ul>
                                <li><a href="">dokumenty</a></li>
                                <li><a href="">hollywood</a></li>
                                <li><a href="">art</a></li>
                                <li><a href="">thrillery a akční</a></li>
                                <li><a href="">komedie</a></li>
                                <li><a href="">...více <span class="ico icoArrowGreenSmall"></span></a></li>
                            </ul>
                        </li>
                    </ul>
                    
                    <ul class="column">
                        <li><a href="">Auta</a>
                            <ul>
                                <li><a href="">příslušenství</a></li>
                                <li><a href="">doplňky</a></li>
                                <li><a href="">kosmetika</a></li>
                                <li><a href="">podkategorie 4</a></li>
                                <li><a href="">nová vozidla</a></li>
                                <li><a href="">...více <span class="ico icoArrowGreenSmall"></span></a></li>
                            </ul>
                        </li>
                        <li><a href="">Knihy</a>
                            <ul>
                                <li><a href="">časopisy</a></li>
                                <li><a href="">odborná literatura</a></li>
                                <li><a href="">návody</a></li>
                                <li><a href="">komix</a></li>
                                <li><a href="">právě vyšlo</a></li>
                                <li><a href="">...více <span class="ico icoArrowGreenSmall"></span></a></li>
                            </ul>
                        </li>
                        <li><a href="">Filmy</a>
                            <ul>
                                <li><a href="">dokumenty</a></li>
                                <li><a href="">hollywood</a></li>
                                <li><a href="">art</a></li>
                                <li><a href="">thrillery a akční</a></li>
                                <li><a href="">komedie</a></li>
                                <li><a href="">...více <span class="ico icoArrowGreenSmall"></span></a></li>
                            </ul>
                        </li>
                    </ul>
                    
                    <ul class="column">
                        <li><a href="">Auta</a>
                            <ul>
                                <li><a href="">příslušenství</a></li>
                                <li><a href="">doplňky</a></li>
                                <li><a href="">kosmetika</a></li>
                                <li><a href="">podkategorie 4</a></li>
                                <li><a href="">nová vozidla</a></li>
                                <li><a href="">...více <span class="ico icoArrowGreenSmall"></span></a></li>
                            </ul>
                        </li>
                        <li><a href="">Knihy</a>
                            <ul>
                                <li><a href="">časopisy</a></li>
                                <li><a href="">odborná literatura</a></li>
                                <li><a href="">návody</a></li>
                                <li><a href="">komix</a></li>
                                <li><a href="">právě vyšlo</a></li>
                                <li><a href="">...více <span class="ico icoArrowGreenSmall"></span></a></li>
                            </ul>
                        </li>
                        <li><a href="">Filmy</a>
                            <ul>
                                <li><a href="">dokumenty</a></li>
                                <li><a href="">hollywood</a></li>
                                <li><a href="">art</a></li>
                                <li><a href="">thrillery a akční</a></li>
                                <li><a href="">komedie</a></li>
                                <li><a href="">...více <span class="ico icoArrowGreenSmall"></span></a></li>
                            </ul>
                        </li>
                    </ul>
                    
                    <ul class="column">
                        <li><a href="">Auta</a>
                            <ul>
                                <li><a href="">příslušenství</a></li>
                                <li><a href="">doplňky</a></li>
                                <li><a href="">kosmetika</a></li>
                                <li><a href="">podkategorie 4</a></li>
                                <li><a href="">nová vozidla</a></li>
                                <li><a href="">...více <span class="ico icoArrowGreenSmall"></span></a></li>
                            </ul>
                        </li>
                        <li><a href="">Knihy</a>
                            <ul>
                                <li><a href="">časopisy</a></li>
                                <li><a href="">odborná literatura</a></li>
                                <li><a href="">návody</a></li>
                                <li><a href="">komix</a></li>
                                <li><a href="">právě vyšlo</a></li>
                                <li><a href="">...více <span class="ico icoArrowGreenSmall"></span></a></li>
                            </ul>
                        </li>
                        <li><a href="">Filmy</a>
                            <ul>
                                <li><a href="">dokumenty</a></li>
                                <li><a href="">hollywood</a></li>
                                <li><a href="">art</a></li>
                                <li><a href="">thrillery a akční</a></li>
                                <li><a href="">komedie</a></li>
                                <li><a href="">...více <span class="ico icoArrowGreenSmall"></span></a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
            <div id="footerCopy">
                <div class="baseWidth">
                    Copiright | <a href="">licenční ujednání</a> | <a href="">podmínky užívání</a> | <a href="">info o ochraně osobních údajů</a>
                </div>
            </div>
            <div id="footerPartners">
                <div class="baseWidth">
                    Loga partneru
                </div>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
