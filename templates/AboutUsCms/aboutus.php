<?php


/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 * @var \App\Model\Entity\AboutUsCm $aboutUsCm
 * @var \App\Model\Entity\News $new
 * @var \App\Model\Entity\News[]|\Cake\Collection\CollectionInterface $news
 */

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

$checkConnection = function (string $name) {
    $error = null;
    $connected = false;
    try {
        $connection = ConnectionManager::get($name);
        $connected = $connection->connect();
    } catch (Exception $connectionError) {
        $error = $connectionError->getMessage();
        if (method_exists($connectionError, 'getAttributes')) {
            $attributes = $connectionError->getAttributes();
            if (isset($attributes['message'])) {
                $error .= '<br />' . $attributes['message'];
            }
        }
    }

    return compact('connected', 'error');
};

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lavender Entertainment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <?= $this->Html->css(['/css/animate.css']) ?>

    <?= $this->Html->css(['/css/owl.carousel.min.css']) ?>
    <?= $this->Html->css(['/css/owl.theme.default.min.css']) ?>
    <?= $this->Html->css(['/css/magnific-popup.css']) ?>

    <?= $this->Html->css(['/css/bootstrap-datepicker.css']) ?>
    <?= $this->Html->css(['/css/jquery.timepicker.css']) ?>
    <?= $this->Html->css(['/css/flaticon.css']) ?>
    <?= $this->Html->css(['/css/style.css']) ?>


</head>
<body>
<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col d-flex align-items-center">
                <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span
                        class="mailus">email us:</span> <a href="#">emailsample@email.com</a></p>
            </div>
            <div class="col d-flex justify-content-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= $this->Url->build(['controller'=>'Venues','action' => 'home']) ?>"><span>Lavender</span>Entertainment</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="<?= $this->Url->build(['controller'=>'Venues','action' => 'home']) ?>" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="<?= $this->Url->build(['controller'=>'AboutUsCms','action' => 'aboutus']) ?>" class="nav-link">About</a></li>
                <li class="nav-item"><a href="<?= $this->Url->build(['controller'=>'ContactUsCms','action' => 'contactus']) ?>" class="nav-link">Contact Us</a></li>
                <li class="nav-item"><a href="<?= $this->Url->build(['controller'=>'Users','action' => 'login']) ?>" class="nav-link">Sign In</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?=$this->Html->Url->image('/img/homepage_background.jpg')?>);"
         data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>About us <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-0 bread">About Us</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block services-wrap text-center">
                    <div class="img" style="background-image"><?= $this->Html->image($aboutUsCm->first_section_photo_1,array('width'=>'340px','height'=>'220px'))?></div>
                    <div class="media-body py-4 px-3">
                        <h3 class="heading"><p><?= h($aboutUsCm->first_section_header_1) ?></p></h3>
                        <p><?= h($aboutUsCm->first_section_body_1) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block services-wrap text-center">
                    <div class="img" style="background-image"><?= $this->Html->image($aboutUsCm->first_section_photo_2,array('width'=>'340px','height'=>'220px'))?></div>
                    <div class="media-body py-4 px-3">
                        <h3 class="heading"><?= h($aboutUsCm->first_section_header_2) ?></h3>
                        <p><?= h($aboutUsCm->first_section_body_2) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block services-wrap text-center">
                    <div class="img" style="background-image"><?= $this->Html->image($aboutUsCm->first_section_photo_3,array('width'=>'340px','height'=>'220px'))?></div>
                    <div class="media-body py-4 px-3">
                        <h3 class="heading"><?= h($aboutUsCm->first_section_header_3) ?></h3>
                        <p><?= h($aboutUsCm->first_section_body_3) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>News</h2>
            </div>
        </div>
        <div class="row d-flex">
            <?php foreach ($news as $new): ?>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <div class="text p-4 text-center">
                            <h3 class="heading"><a href="#"><?= h($new->title) ?></a></h3>
                            <p><?= h($new->content) ?></p>
                            <div class="meta mb-2">
                                <div><a href="#"><?= h($new->author) ?></a></div>
                                <div><a href="#"><?= h($new->date) ?></a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span></a></div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Happy Clients &amp; Feedbacks</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="img" style="background-image: url(<?=$this->Html->Url->image('/img/person_2.jpg')?>);">
                            </div>
                            <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                                <p>A new appointment experience, thanks Lavender! </p>
                                <p class="name">Racky Henderson</p>
                                <span class="position">Father</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?=$this->Html->Url->image('/img/person-3.jpg')?>);">
                            </div>
                            <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                                <p>Fast search engine, can quickly filter the most preferred. </p>
                                <p class="name">Mark Huff</p>
                                <span class="position">BusinessWoman</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?=$this->Html->Url->image('/img/person-4.jpg')?>);">
                            </div>
                            <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                                <p>Become their member and enjoy the greatest discount.
                                    Compared with other websites, the price-performance ratio is very high! </p>
                                <p class="name">Rodel Golez</p>
                                <span class="position">Businesswoman</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="img" style="background-image: url(<?=$this->Html->Url->image('/img/person_1.jpg')?>);"></div>
                            <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                                <p>I will recommend a friend to use it next time, the whole process is very convenient </p>
                                <p class="name">Ken Bosh</p>
                                <span class="position">Businessman</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 wrap-about">
                <div class="img" style="background-image"><?= $this->Html->image($aboutUsCm->what_we_offer_photo,array('width'=>'700px','height'=>'400px'))?>
                </div>
                <h2><?= h($aboutUsCm->annoucement_heading) ?></h2>
                <p><?= h($aboutUsCm->annoucment_body) ?> </p>
            </div>
            <div class="col-md-6 wrap-about ftco-animate">
                <div class="heading-section">
                    <div class="pl-md-5">
                        <h2 class="mb-2">What we offer</h2>
                    </div>
                </div>
                <div class="pl-md-5">
                    <p><?= h($aboutUsCm->what_we_offer_body) ?></p>
                    <div class="row">
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-diet"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading"><?= h($aboutUsCm->what_we_offer_dot_1) ?></h3>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-workout"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading"><?= h($aboutUsCm->what_we_offer_dot_2) ?></h3>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-diet-1"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading"><?= h($aboutUsCm->what_we_offer_dot_3) ?></h3>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-first"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading"><?= h($aboutUsCm->what_we_offer_dot_4) ?></h3>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-first"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading"><?= h($aboutUsCm->what_we_offer_dot_5) ?></h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-first"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading"><?= h($aboutUsCm->what_we_offer_dot_6) ?></h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-first"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading"><?= h($aboutUsCm->what_we_offer_dot_7) ?></h3>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-first"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading"><?= h($aboutUsCm->what_we_offer_dot_8) ?></h3>
                                <p></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <h2 class="footer-heading"><a href="#" class="logo">Lavender Entertainment</a></h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <a href="#">Read more <span class="fa fa-chevron-right" style="font-size: 11px;"></span></a>
            </div>
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <h2 class="footer-heading">Services</h2>
                <ul class="list-unstyled">
                    <li><a href="#" class="py-1 d-block">Map Direction</a></li>
                    <li><a href="#" class="py-1 d-block">Accomodation Services</a></li>
                    <li><a href="#" class="py-1 d-block">Great Experience</a></li>
                    <li><a href="#" class="py-1 d-block">Perfect central location</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <h2 class="footer-heading">Tag cloud</h2>
                <div class="tagcloud">
                    <a href="#" class="tag-cloud-link">Venue</a>
                    <a href="#" class="tag-cloud-link">place</a>
                    <a href="#" class="tag-cloud-link">party</a>
                    <a href="#" class="tag-cloud-link">rental</a>
                    <a href="#" class="tag-cloud-link">wedding</a>
                    <a href="#" class="tag-cloud-link">melbourne</a>
                    <a href="#" class="tag-cloud-link">DJ</a>
                    <a href="#" class="tag-cloud-link">drinks</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <h2 class="footer-heading">Subcribe</h2>
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control rounded-left" placeholder="Enter email address">
                        <button type="submit" class="form-control submit rounded-right"><span
                                class="sr-only">Submit</span><i class="fa fa-paper-plane"></i></button>
                    </div>
                </form>
                <h2 class="footer-heading mt-5">Follow us</h2>
                <ul class="ftco-footer-social p-0">
                    <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Twitter"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Facebook"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Instagram"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="w-100 mt-5 border-top py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8">

                    <p class="copyright mb-0">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i>
                        by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
                <div class="col-md-6 col-lg-4 text-md-right">
                    <p class="mb-0 list-unstyled">
                        <a class="mr-md-3" href="#">Terms</a>
                        <a class="mr-md-3" href="#">Privacy</a>
                        <a class="mr-md-3" href="#">Compliances</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<?= $this->Html->script('/js/jquery.min.js'); ?>
<?= $this->Html->script('/js/jquery-migrate-3.0.1.min.js'); ?>
<?= $this->Html->script('/js/popper.min.js'); ?>
<?= $this->Html->script('/js/bootstrap.min.js'); ?>
<?= $this->Html->script('/js/jquery.easing.1.3.js'); ?>
<?= $this->Html->script('/js/jquery.waypoints.min.js'); ?>
<?= $this->Html->script('/js/jquery.stellar.min.js'); ?>
<?= $this->Html->script('/js/jquery.animateNumber.min.js'); ?>
<?= $this->Html->script('/js/bootstrap-datepicker.js'); ?>
<?= $this->Html->script('/js/jquery.timepicker.min.js'); ?>
<?= $this->Html->script('/js/owl.carousel.min.js'); ?>
<?= $this->Html->script('/js/jquery.magnific-popup.min.js'); ?>
<?= $this->Html->script('/js/scrollax.min.js'); ?>
<?= $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false'); ?>
<?= $this->Html->script('/js/google-map.js'); ?>
<?= $this->Html->script('/js/main.js'); ?>


</body>
</html>
