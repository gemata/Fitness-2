<?php
require  './login.php';

$user = new UserLogin;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fitness Website</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
     integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" 
     crossorigin="anonymous"/>
</head>
<body>
   <header class="header">
    
<a href="#" class="logo">Fit<span>ness</span></a>

    <nav class="navbar">

        <a href="#" style="border-bottom: .5rem solid white; border-radius: .2rem;">Faqja Kryesore</a>
        <a href="#foot" onclick="contactScroll()" >Rreth Nesh</a>
        <a href="workOutSection.php">Ushtrime</a>
        <a href="dietSection.php" >Dieta</a>
        <a href="#foot" onclick="contactScroll()">Kontakti</a>
    </nav>

    <div class="icons">

        <a href="formValidation.php" class="btn" >Bëhu anëtarë</a>
        <div id="menu-btn" class="fas fa-bars"></div>
        <a id="logout" href="logout.php" class="btn">Dilni</a>
    </div>

   </header>

   <!-- -------------------home section starts ----------------------- -->
<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div  class="swiper-slide box" style = "background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)),
            url('images/b-1.webp');" >
              <div class="content">
                 <h3>Shijo palestrën tani</h3>
                 <p>Fitnesi nuk është të jesh më i mirë se dikush tjetër. Ka të bëjë me të qenit më i mirë se që ke qenë dikur.</p>
                    <div class="button">
                        <a href="#featureID" class="btn btn-1">Fillo tani</a>
                        <a href="#featureID" class="btn">Fito zbritje</a>
                    </div>
               </div>
            </div>


            <div  class="swiper-slide box" style = "background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)),
            url('images/b-5.webp');" >
              <div class="content">
                 <h3>Shëndeti është pasuri</h3>
                 <p>Dhimbja që ndjen sot do të jetë forca që ndjen nesër!</p>
                    <div class="button">
                        <a href="#featureID" class="btn btn-1">Fillo Tani</a>
                        <a href="#featureID" class="btn">Fito Zbritje</a>
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>

   <!-- -------------------home section ends ----------------------- -->

   <!-- ------------------------feature sections starts----------------------------- -->

   <section class="feature" id="featureID">

<?php
if (!isset($_SESSION["user_email"])) { // user is not logged in
    $redirect_url = 'formValidationL.php';
} else { // user is logged in
    $redirect_url = 'creditcard/payment.php';
}
?>

<h1 class="heading">Kliko oferten  <span> për tu abonuar</span></h1>

<div class="swiper feature-slider">
    <div class="swiper-wrapper">
        
      
        <div class="swiper-slide box">
        <a href="<?php echo $redirect_url; ?>">
            <div class="image">
                <img src="images/p-1.webp" alt="">
            </div>
            <div class="content">
                <div class="price"><h2>100€</h2></div>
                <h3>Uniclub</h3>
            </div>
            </a>
        </div>
    

        <div class="swiper-slide box">
        <a href="<?php echo $redirect_url; ?>">
            <div class="image">
                <img src="images/pic-3.webp" alt="">
            </div>
            <div class="content">
                <div class="price"><h2>80€</h2></div>
                <h3>Dayclub</h3>
            </div>
            </a>
        </div>
    


        <div class="swiper-slide box">
        <a href="<?php echo $redirect_url; ?>">
            <div class="image">
                <img src="images/p-3.webp" alt="">
            </div>
            <div class="content">
                <div class="price"><h2>60€</h2></div>
                <h3>Monthclub</h3>
            </div>
            </a>
        </div>


        <div class="swiper-slide box">
        <a href="<?php echo $redirect_url; ?>">
            <div class="image">
                <img src="images/p-2.webp" alt="">
            </div>
            <div class="content">
                <div class="price"><h2>50€</h2></div>
                <h3>Timeclub</h3>
            </div>
            </a>
        </div>


        <div class="swiper-slide box">
        <a href="<?php echo $redirect_url; ?>">
            <div class="image">
                <img src="images/Feature-classes.webp" alt="">
            </div>
            <div class="content">
                <div class="price"><h2>150€</h2></div>
                <h3>Multiclub</h3>
            </div>
            </a>
        </div>

        
    </div>
</div>

</section>



   <!-- ------------------------feature sections ends----------------------------- -->

   

   <!-- -----------------------------------testimonial section starts here---------------------------->
<section class="testimonial">
    <h1 class="heading">Dëshmitë<span> tona</span></h1>
    
    <div class="box-contanier">
        <div class="box">
            <div class="image">
                <img src="images/t-2.webp" alt="">
            </div>
            <div class="name">
                <h1>Berat Zogaj</h1>
                <p>Anëtarë <span> 3 vjet</span></p>
            </div>
            <p>Do të doja të falënderoja stafin dhe trajnerët për punën e tyre të palodhur, 
                që më kan rritur kufijtë e mi për të vazhduar sfidën.</p>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/t-3.webp" alt="">
            </div>
            <div class="name">
                <h1>Artesa Zeqiri </h1>
                <p>Anëtare<span> 5 vjet</span></p>
            </div>
            <p>Definitivisht palestra më e mirë në qytet! Ambienti fantastik për ushtrime, hapësirë e bollshme dhe pajisje të shumëta. 
                Stafi miqësor dhe profesional.</p>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/t-4.webp" alt="">
            </div>
            <div class="name">
                <h1>Anita Berisha</h1>
                <p>Trajnere <span> profesioniste</span></p>
            </div>
            <p>Trajnimi personal ju jep motivim për të vazhduar stërvitjen. Disa javë është e vështirë të qëndrosh i motivuar.
                Një trajner personal ju mban vërtet në lëvizje.</p>
        </div>
    </div>
</section>


   <!-- -----------------------------------testimonial section ends here---------------------------->

   <!-------------------------------------blog section starts here---------------------------->
    <section class="blogs">

        <h1 class="heading">blogu <span> ynë</span></h1>

        <div class="swiper blogs-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="images/fish-chic.webp" alt="">

                    </div>
                    <div class="content">
                        <h3>Ushqimet me Proteinat më të Mira për Ndërtimin e Muskujve!</h3>
                        <span><i class="fad fa-calendar-alt"></i>Qershor 01, 2020</span>
                        <p>Cili është burimi më i mirë i proteinave për stërvitje?
                            Burime të mira të proteinave janë vezët dhe shpendët.</p>
                    </div>
                    <div class="button">
                    <a href="https://vegan.rocks/sq/blog/muscle-building-foods/" class="btn">Lexo më shumë</a>
                </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="images/blog-2.webp" alt="">

                    </div>
                    <div class="content">
                        <h3>Ushtrime Efektive Për Ju Që Punoni Në Kompjuter!</h3>
                        <span><i class="fad fa-calendar-alt"></i>Mars 01, 2021</span>
                        <p>Ushtrimet më themelore dhe më të rëndësishme janë:
                         Tërheqje, Shtytje, Squat, Lunge, Mentesh, Rrotullim dhe Vrapim.</p>
                    </div>
                    <div class="button">
                    <a href="https://telegrafi.com/ushtrime-per-kurrizin-per-ju-qe-punoni-ne-kompjuter/" class="btn">Lexo më shumë</a>
                </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="images/blog-4.webp" alt="">

                    </div>
                    <div class="content">
                        <h3>Sa Është e Nevojshme Zgjatja para Ushtrimeve!?</h3>
                        <span><i class="fad fa-calendar-alt"></i>December 01, 2022</span>
                        <p> Ngrohja rrit temperaturën e trupit, gjë që redukton mundësinë
                              për lëndime të muskujve, tendinave dhe ligamenteve po ashtu.</p>
                    </div>
                    <div class="button">
                    <a href="https://www.homeology.live/ks/rri-ne-forme/kur-duhet-te-beni-zgjatje-muskujsh/" class="btn">Lexo më shumë</a>
                </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="images/nd.webp" alt="">

                    </div>
                    <div class="content">
                        <h3>Pezmatimi Muskulor Apo Ndezja E Muskujve!</h3>
                        <span><i class="fad fa-calendar-alt"></i>Korrik 31, 2022</span>
                        <p>Ndezja dëmton fibrat e muskujve, gjë që shkakton dobësi dhe mund
                             të prekë arteriet dhe enët e gjakut që kalojnë në muskuj.</p>
                    </div>
                    <div class="button">
                    <a href="http://www.tollomed.com/Home/FullArticle/355" class="btn">Lexo më shumë</a>
                </div>
                </div>


            </div>
        </div>
    </section>
   <!-------------------------------------blog section ends here---------------------------->

   <!-------------------------------------footer section starts here---------------------------->

<section class="footer" id="foot">
    <div class="box-container">
        <div class="box">
            <h1>Rreth Nesh</h1>
            <div class="text">
                <p>Ne jemi një rrjet i palestrave të fitnesit, 
                    të nxitur nga pasioni që të ofrojmë pajisje moderne, 
                    mjedis miqësor dhe hapësira të dizajnuara me stil.
                     Ne besojmë se për t'i shtyer njerëzit të lëvizin
                      çdo detaj ka rëndësi.</p>
            </div>
            <div class="icon">
               <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
               <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
               <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
               <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="box">
            <h1>Kontakti</h1>
            <div class="icons">
                <a href="#foot"><i class="fas fa-map-marker-alt"></i>Lagjja Pejton </a>
                <a href="#foot"><i class="fas fa-phone-alt"></i>+38344598455</a>
                <a href="#foot"><i class="fas fa-envelope"></i>fitness@gmail.com</a>
            </div>
        </div>

        <div class="box">
            <h1>Linqe Të Shpejta</h1>
            <div class="icons">
                <a href="#">Faqja Kryesore</a>
                <a href="dietSection.php">Dieta</a>
                <a href="workOutSection.php">Ushtrimet</a>
            </div>
        </div>
    </div>
</section>


   <!-------------------------------------footer section ends here---------------------------->


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script src="./JS/script.js"></script>
</body>
</html>  