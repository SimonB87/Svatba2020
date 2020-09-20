
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Dreams Template">
    <meta name="keywords" content="Dreams, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Svatba Veroniky & Šimona | 2. října 2020 13:30</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<?php
header('Content-Type: text/html; charset=utf-8');
?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <a href="#"><img src="img/simon/logoSimonLabut_long_50px.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-9">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.php">Domů</a></li>

                            <li><a href="#">Kdy a kde</a>
                                <ul class="dropdown">
                                    <li><a href="#">Obřad</a></li>
                                    <li><a href="#">Oslava</a></li>
<!--                                     <li><a href="./blog-details.html">Blog Details</a></li> -->
                                </ul>
                            </li>
<!-- 
                            <li><a href="./services.html">Místo Obřadu</a></li>
                            <li><a href="./portfolio.html">Místo oslavy</a></li> -->

<!--                             <li><a href="./blog.html">News</a></li> -->
                            <li><a href="#form">Kontakt</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-1">
                    <div class="header__right">
                        <div class="header__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
<!--                             <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a> -->
                        </div>
<!--                         <div class="header__right__search">
                            <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <section class="features spad replystyle">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    


<?php

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$option = filter_input(INPUT_POST, 'option');
$comment = filter_input(INPUT_POST, 'comment');


$to		= 	"simon.buryan@seznam.cz";
$subject	=		$name . " se ptá na Tvojí svatbu";

$message_head	=	"<div style='max-width: 550px; margin: 0 auto; line-height: 1.5rem; font-size: 0.9rem;'>" .
                "<p>Krásný den, </p><p> někdo po Tobě chce něco kvůli svatbě.</p></div><br>";
$message_body = "<div style='max-width: 550px; margin: 0 auto; line-height: 1.5rem; font-size: 0.9rem;'>" .
                "<h4>Jméno tazatele</h4> <p>" . $name . "</p>" .
                "<h4>Jeho email</h4> <p>" . $email . "</p>" .
                "<h4>Kategorie dotazu</h4> <p>" . $option . "</p>" .
                "<h4>Text zprávy</h4> <p>" . $comment . "</p>" .
                "</div><br>";
$message_footer =  "<div style='max-width: 550px; margin: 0 auto; line-height: 1.5rem; font-size: 0.9rem;'>"  . 
              "<p>Děkujeme za spolupráci. :-) <br><br>" .
              "INFO: Tato zpráva byla automaticky generována algorytmem. <br><br>"  . 
              "[ Šimon Buryan 19.09.2020 ]" . "</p></div>";

$message = $message_head . $message_body . $message_footer;
              
$replyto	=		"From: " . $prefilled_email . " \n\r" . "Reply-To:" . $prefilled_email . " \n\r";

$headers = "Content-Type: text/html; charset=UTF-8";

if (mail($to, $subject, $message, $headers)) {
  //test
  echo "<h4>Email odeslán.</h4> <p>Brzo se ozveme :-).</p>";//test
} else {
  //test
  echo "<p>Chyba! Email neodeslán<p>";//test
}


?>

              </div>
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">

                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer__widget">
                        <h5>Kontakt</h5>
                        <ul>
                            <li>Šimon</li>
                            <li>Prosím, použijte kontaktní formulář výše :-)</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer__copyright__text">Edited by Šimon Buryan | Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Template with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <div class="col-lg-5 col-md-5">
                    <ul class="footer__copyright__widget">
                        <li><a href="#">Terms & Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search model Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>