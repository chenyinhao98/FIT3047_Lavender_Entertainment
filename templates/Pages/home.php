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

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

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
                <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="#">emailsample@email.com</a></p>
            </div>
            <div class="col d-flex justify-content-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html"><span>Lavender</span>Entertainment</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="<?= $this->Url->build(['controller'=>'Pages','action' => 'display','home']) ?>" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="rooms.html" class="nav-link">Apartment Room</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Sign In</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap js-fullheight" style="background-image: linear-gradient(rgba(40,12,70,0.2),rgba(40,12,70,0.2)),url(<?=$this->Html->Url->image('/img/homepage_background.jpg')?>);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-start" data-scrollax-parent="true" style="padding-top: 9em">
            <div class="col-md-12 ftco-animate">
                <h2 class="subheading">Welcome to Lavender Entertainment</h2>
                <h1 class="mb-4">Discover a Venue for Your Event</h1>
                <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-12">
                <form action="#" class="appointment-form">
                    <h3 class="mb-3">Book your Venue</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Suburb">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Event Type</option>
                                            <option value="">Wedding</option>
                                            <option value="">Birthday Party</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Attendees</option>
                                            <option value="">Less than 5</option>
                                            <option value="">5-9</option>
                                            <option value="">10-19</option>
                                            <option value="">More than 20</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Price</option>
                                            <option value="">Under $15/h</option>
                                            <option value="">$15-29/h</option>
                                            <option value="">$30-49/h</option>
                                            <option value="">over $50/h</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date-check-out" placeholder="Start Date">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="Start Time">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date-check-in" placeholder="End Date">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="End Time">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <a  type="submit" class="btn btn-primary py-3 px-4" href="<?= $this->Url->build(['controller'=>'Venues','action' => 'index']) ?>">Book My Venue Now</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block services-wrap text-center">
                    <div class="img" style="background-image: url(images/services-1.jpg);"></div>
                    <div class="media-body py-4 px-3">
                        <h3 class="heading">Map Direction</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <p><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block services-wrap text-center">
                    <div class="img" style="background-image: url(images/services-2.jpg);"></div>
                    <div class="media-body py-4 px-3">
                        <h3 class="heading">Accomodation Services</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <p><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block services-wrap text-center">
                    <div class="img" style="background-image: url(images/services-3.jpg);"></div>
                    <div class="media-body py-4 px-3">
                        <h3 class="heading">Great Experience</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        <p><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Apartment Room</h2>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="room-wrap d-md-flex">
                    <a href="#" class="img" style="background-image: url(images/room-1.jpg);"></a>
                    <div class="half left-arrow d-flex align-items-center">
                        <div class="text p-4 p-xl-5 text-center">
                            <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                            <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                            <h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
                            <ul class="list-accomodation">
                                <li><span>Max:</span> 3 Persons</li>
                                <li><span>Size:</span> 45 m2</li>
                                <li><span>View:</span> Sea View</li>
                                <li><span>Bed:</span> 1</li>
                            </ul>
                            <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="room-wrap d-md-flex">
                    <a href="#" class="img" style="background-image: url(images/room-2.jpg);"></a>
                    <div class="half left-arrow d-flex align-items-center">
                        <div class="text p-4 p-xl-5 text-center">
                            <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                            <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                            <h3 class="mb-3"><a href="rooms.html">Standard Room</a></h3>
                            <ul class="list-accomodation">
                                <li><span>Max:</span> 3 Persons</li>
                                <li><span>Size:</span> 45 m2</li>
                                <li><span>View:</span> Sea View</li>
                                <li><span>Bed:</span> 1</li>
                            </ul>
                            <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="room-wrap d-md-flex">
                    <a href="#" class="img order-md-last" style="background-image: url(images/room-3.jpg);"></a>
                    <div class="half right-arrow d-flex align-items-center">
                        <div class="text p-4 p-xl-5 text-center">
                            <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                            <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                            <h3 class="mb-3"><a href="rooms.html">Family Room</a></h3>
                            <ul class="list-accomodation">
                                <li><span>Max:</span> 3 Persons</li>
                                <li><span>Size:</span> 45 m2</li>
                                <li><span>View:</span> Sea View</li>
                                <li><span>Bed:</span> 1</li>
                            </ul>
                            <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="room-wrap d-md-flex">
                    <a href="#" class="img order-md-last" style="background-image: url(images/room-4.jpg);"></a>
                    <div class="half right-arrow d-flex align-items-center">
                        <div class="text p-4 p-xl-5 text-center">
                            <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                            <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                            <h3 class="mb-3"><a href="rooms.html">Deluxe Room</a></h3>
                            <ul class="list-accomodation">
                                <li><span>Max:</span> 3 Persons</li>
                                <li><span>Size:</span> 45 m2</li>
                                <li><span>View:</span> Sea View</li>
                                <li><span>Bed:</span> 1</li>
                            </ul>
                            <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
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
                            <div class="user-img" style="background-image: url(images/person_1.jpg)">
                            </div>
                            <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Racky Henderson</p>
                                <span class="position">Father</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(images/person_2.jpg)">
                            </div>
                            <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Henry Dee</p>
                                <span class="position">Businesswoman</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(images/person_3.jpg)">
                            </div>
                            <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Mark Huff</p>
                                <span class="position">Businesswoman</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(images/person_4.jpg)">
                            </div>
                            <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Rodel Golez</p>
                                <span class="position">Businesswoman</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(../img/person_1.jpg)">
                            </div>
                            <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Ken Bosh</p>
                                <span class="position">Businesswoman</span>
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
                <div class="img img-2 mb-4" style="background-image: url(images/about.jpg);">
                </div>
                <h2>The most recommended vacation rental</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
            </div>
            <div class="col-md-6 wrap-about ftco-animate">
                <div class="heading-section">
                    <div class="pl-md-5">
                        <h2 class="mb-2">What we offer</h2>
                    </div>
                </div>
                <div class="pl-md-5">
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <div class="row">
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-diet"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading">Tea Coffee</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-workout"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading">Hot Showers</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-diet-1"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading">Laundry</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-first"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading">Air Conditioning</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-first"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading">Free Wifi</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-first"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading">Kitchen</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-first"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading">Ironing</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                            </div>
                        </div>
                        <div class="services-2 col-lg-6 d-flex w-100">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-first"></span>
                            </div>
                            <div class="media-body pl-3">
                                <h3 class="heading">Lovkers</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-intro" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 text-center">
                <h2>Ready to get started</h2>
                <p class="mb-4">It’s safe to book online with us! Get your dream stay in clicks or drop us a line with your questions.</p>
                <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Book now</a> <a href="#" class="btn btn-white px-4 py-3">Contact us</a></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Latest news from our blog</h2>
                <span class="subheading">News &amp; Blog</span>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text p-4 text-center">
                        <h3 class="heading"><a href="#">Work Hard, Party Hard in a Luxury Chalet in the Alps</a></h3>
                        <div class="meta mb-2">
                            <div><a href="#">January 30, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text p-4 text-center">
                        <h3 class="heading"><a href="#">Work Hard, Party Hard in a Luxury Chalet in the Alps</a></h3>
                        <div class="meta mb-2">
                            <div><a href="#">January 30, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text p-4 text-center">
                        <h3 class="heading"><a href="#">Work Hard, Party Hard in a Luxury Chalet in the Alps</a></h3>
                        <div class="meta mb-2">
                            <div><a href="#">January 30, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
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
                    <a href="#" class="tag-cloud-link">apartment</a>
                    <a href="#" class="tag-cloud-link">home</a>
                    <a href="#" class="tag-cloud-link">vacation</a>
                    <a href="#" class="tag-cloud-link">rental</a>
                    <a href="#" class="tag-cloud-link">rent</a>
                    <a href="#" class="tag-cloud-link">house</a>
                    <a href="#" class="tag-cloud-link">place</a>
                    <a href="#" class="tag-cloud-link">drinks</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <h2 class="footer-heading">Subcribe</h2>
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control rounded-left" placeholder="Enter email address">
                        <button type="submit" class="form-control submit rounded-right"><span class="sr-only">Submit</span><i class="fa fa-paper-plane"></i></button>
                    </div>
                </form>
                <h2 class="footer-heading mt-5">Follow us</h2>
                <ul class="ftco-footer-social p-0">
                    <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="w-100 mt-5 border-top py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8">

                    <p class="copyright mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
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
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<?= $this->Html->script('/js/jquery.min.js');?>
<?= $this->Html->script('/js/jquery-migrate-3.0.1.min.js');?>
<?= $this->Html->script('/js/popper.min.js');?>
<?= $this->Html->script('/js/bootstrap.min.js');?>
<?= $this->Html->script('/js/jquery.easing.1.3.js');?>
<?= $this->Html->script('/js/jquery.waypoints.min.js');?>
<?= $this->Html->script('/js/jquery.stellar.min.js');?>
<?= $this->Html->script('/js/jquery.animateNumber.min.js');?>
<?= $this->Html->script('/js/bootstrap-datepicker.js');?>
<?= $this->Html->script('/js/jquery.timepicker.min.js');?>
<?= $this->Html->script('/js/owl.carousel.min.js');?>
<?= $this->Html->script('/js/jquery.magnific-popup.min.js');?>
<?= $this->Html->script('/js/scrollax.min.js');?>
<?= $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false');?>
<?= $this->Html->script('/js/google-map.js');?>
<?= $this->Html->script('/js/main.js');?>



>>>>>>> 7a6c549e9c749a038d938d759751da6e08d079c1
</body>
</html>
