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
                <li class="nav-item"><a href="<?= $this->Url->build(['controller'=>'Pages','action' => 'display','aboutus']) ?>" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="<?= $this->Url->build(['controller'=>'Pages','action' => 'display','aboutus']) ?>" class="nav-link">About</a></li>
                <li class="nav-item active"><a href="<?= $this->Url->build(['controller'=>'Pages','action' => 'display','contactus']) ?>" class="nav-link">Contact Us</a></li>
                <li class="nav-item"><a href="<?= $this->Url->build(['controller'=>'Pages','action' => 'display','signin']) ?>" class="nav-link">Sign In</a></li>
                <li class="nav-item"><a href="<?= $this->Url->build(['controller'=>'Pages','action' => 'display','cart']) ?>" class="nav-link">Cart</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?=$this->Html->Url->image('/img/result_background.png')?>); data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= $this->Url->build(['controller'=>'Pages','action' => 'display','home']) ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact Us <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>

   	<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-8">
    				<div id="map" class="map"></div>
    			</div>
    			<div class="col-md-4 p-4 p-md-5 bg-white">
    				<h2 class="font-weight-bold mb-4">Lets have a conversation!</h2>
    				<p>If you have any questions, just fill in the contact form, and we will answer you shortly. If you live nearby, come visit Lavender Entertainment at our comfortable office. We'd love to help you with any venue bookings you want!</p>
    				<p><a href="<?= $this->Url->build(['controller'=>'Venues','action' => 'result']) ?>" class="btn btn-primary">Book Venue Now</a></p>
    			</div>
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-lg-8 col-md-7 d-flex align-items-stretch">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Get in touch</h3>
										<div id="form-message-warning" class="mb-4"></div>
					      		<div id="form-message-success" class="mb-4">

					      		</div>
										<form method="POST" id="contactForm" name="contactForm" class="contactForm">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="name">Full Name</label>
														<input type="text" class="form-control" name="name" id="name" placeholder="Name">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="email">Email Address</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="Email">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="subject">Subject</label>
														<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#">Message</label>
														<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
                                                    <a href="#" style="text-align:center; width:100%; padding:10;" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">Submit	</a>
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
									<div class="info-wrap bg-primary w-100 p-md-5 p-4">
										<h3>Let's get in touch</h3>
										<p class="mb-4">We're open for any suggestion or just to have a chat</p>
					        	<div class="dbox w-100 d-flex align-items-start">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-map-marker"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Address:</span> 8 Franklin St, Melbourne, VIC 3000</p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-phone"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-paper-plane"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Email:</span> <a href="mailto:info@lavenderentertainment.com">info@lavenderentertainment.com</a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-globe"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Website:</span> <a href="<?= $this->Url->build(['controller'=>'Pages','action' => 'display','home']) ?>">lavenderentertainment.com</a></p>
						          </div>
					          </div>
				          </div>
								</div>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>


<!-- Enquiry Modal-->
<div class="modal fade" id="enquiryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Your Enquiry has been sent!</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                            </div>
        </div>
</div>


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
