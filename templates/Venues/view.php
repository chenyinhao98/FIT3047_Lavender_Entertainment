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
    <title></title>
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
        <a class="navbar-brand" href="<?= $this->Url->build(['controller'=>'Pages','action' => 'display','home']) ?>"><span>Lavender</span>Entertainment</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto" >
                <li class="nav-item active"><a href="<?= $this->Url->build(['controller'=>'Pages','action' => 'display','home']) ?>" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="rooms.html" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Sign In</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Cart</a></li>
            </ul>
        </div>
    </div>
</nav>
    <!-- END nav -->

<?php
$view_venue = array();
$view_name = $_POST["venue_name"];
$view_empty = false;
if (empty($view_name)){
    foreach ($venues as $venue):
        array_push($search_venue,$venue);
    endforeach;
    $view_empty = true;
}
foreach ($venues as $venue):
    if ($view_empty == false){
        if (strpos($venue->venue_name,$view_name) !== false ){
            array_push($view_venue,$venue);
        }
    }
    endforeach;
?>


    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row no-gutters">
            <?php foreach ($view_venue as $venue): ?>
          <div class="col-md-7 d-flex services align-self-stretch px-3 ftco-animate">
            <div class="d-block services-wrap text-left">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
					  <div class="carousel-item active">
						<img class="d-block w-100 " style="height: 421px;" src=<?= h($venue->venue_photo1) ?> alt="First Picture">
					  </div>
					  <div class="carousel-item">
						<img class="d-block w-100 " style="height: 421px;" src=<?= h($venue->venue_photo2) ?> alt="Second Picture">
					  </div>

					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					  <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
				  </div>
              <div class="media-body py-5 px-5">
				<div class="row">
					<div class="col-md-6">
                <h2 class="font-weight-bold"><?= h($venue->venue_name) ?></h2></div>
                <div class="col-md-6">
                <h2 class="font-weight-bold" style="text-align: right"><?= $this->Number->format($venue->venue_rating) ?></h2></div>

			</div>
			<div class="row">
				<div class="col-md-6">
                <p class="font-weight-bold" style="text-align: left; font-size: large;"><?= h($venue->venue_contact_number) ?></p>
				<p class="font-weight-bold"style="text-align: left; font-size: large;"><?= h($venue->venue_address) ?></p> </div>
				<div class="col-md-6">
					<p class="font-weight-bold" style="text-align: right; font-size: large;">Price: <?= $this->Number->format($venue->venue_payrate) ?>/Guest</p>
				</div>
			</div>

                <button><a href="#" style="text-align:center; width:32.5%; padding:10;" class="btn btn-primary"><i class="fa fa-heart" aria-hidden="true"></i>Shortlist</a>
				<a href="#" style="text-align:center; width: 32.5%; padding:10; " class="btn btn-primary">Google Maps</a>
				<a href="#" style="text-align:center; width:32.5%; padding:10; " class="btn btn-primary">Write A Review!	</a></button>
              </div>

            </div>
          </div>
		  <div class="col-lg-5 col-md-7 d-flex align-items-stretch ">
			<div class="contact-wrap w-100 p-md-5 p-4 ">
				<h3 class="mb-4">Check Availability</h3>
				<div id="form-message-warning" class="mb-4"></div>
		  <div id="form-message-success" class="mb-4">

		  </div>
				<form method="POST" id="contactForm" name="contactForm" class="contactForm">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="label" for="Occasion">Occasion</label>
								<input type="text" class="form-control" name="occasion" id="occasion" placeholder="">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="label" for="date">Date</label>
								<input type="date" class="form-control" name="date" id="date" placeholder="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="label" for="budget">Budget</label>
								<input type="number" class="form-control" name="budget" id="budget" placeholder="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="label" for="guests">Number of Guests</label>
								<input type="number" class="form-control" name="guests" id="guests" placeholder="">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="label" for="#">Food Requirements</label>
								<textarea name="num" class="form-control" id="foodreq" cols="20" rows="2" placeholder=""></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="label" for="#">Additional Message</label>
								<textarea name="num" class="form-control" id="foodreq" cols="20" rows="2" placeholder=""></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Enquire"  style="text-align:center; width:100%; padding:10;" class="btn btn-primary">
								<div class="submitting"></div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

</div>

                <?php endforeach; ?>
			</div>

		</div>

    </section>


    <section class="ftco-section about-section bg-light">
      <div class="container">
        <div class="row justify-content-left pb-5 mb-3">
        <?php foreach ($view_venue as $venue): ?>
          <div class="col-md-8 heading-section text-left ftco-animate">
            <h2>About Us</h2>
          </div>
		  <div class="col-md-4 heading-section text-left ftco-animate">
            <h2>Venue Size</h2>
          </div>
        </div>
		<div class="row">
		<div class="col-md-8">
        		<div class="item">
			<div class="testimony-wrap d-flex" style="height: 250px">

			  <div class="text pl-4">
				  <span class="quote d-flex align-items-center justify-content-center">
				  <i class="fa fa-quote-left"></i>
				</span>
				<p style="padding: 10px;"><?= h($venue->venue_about_us) ?></p>

			  </div>
			</div>
		  </div>
		  </div>
		  <div class="col-md-4">
			<div class="item">
		<div class="testimony-wrap d-flex lavender " style="height: 250px; color:#A295FF ;">
			<div class="">
			  <span class="quote d-flex align-items-center justify-content-center">

			</span>
			<h1 class="display-3 " style="text-align: center;" ><?= $this->Number->format($venue->venue_min_capacity) ?></h1>


		  </div>
		</div>
	  </div>
	  </div>
      <?php endforeach; ?>
      </div>
	  </div>
    </section>

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Recommended Suppliers</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Write a Review</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

									<div class="testimony-wrap d-flex" style="height: 250px">
										<ul><li>Lorem ipsum</li>
										<li>Lorem ipsum</li>
										<li>Lorem ipsum</li>
										<li>Lorem ipsum</li>
										<li>Lorem ipsum</li>
										<li>Lorem ipsum</li>
										<li>Lorem ipsum</li> </ul>

									  </div>
							   </div>

                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

									<div class="testimony-wrap d-flex" style="height: 250px">
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="#">Please let us know about your experience!</label>
												<textarea name="num" class="form-control" id="foodreq" cols="20" rows="2" placeholder=""></textarea>
											</div>
											<div class="row">
												<div class="col-md-8">
													<div class="form-group">
														<input type="submit" value="Enquire"  style="text-align:center; width:70%; padding:10;" class="btn btn-primary">
														<div class="submitting"></div></div>
										</div>
										<div class="col-md-4">
											<div class="text-md-right">
												<div class="stars">
													<form action=""> <input class="star star-5" id="star-5" type="radio" name="star"  /> <label class="star star-5" for="star-5"></label> <input class="star star-4" id="star-4" type="radio" name="star" /> <label class="star star-4" for="star-4"></label> <input class="star star-3" id="star-3" type="radio" name="star" /> <label class="star star-3" for="star-3"></label> <input class="star star-2" id="star-2" type="radio" name="star" /> <label class="star star-2" for="star-2"></label> <input class="star star-1" id="star-1" type="radio" name="star" /> <label class="star star-1" for="star-1"></label> </form>
											</div>
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


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>



  </body>
</html>
<p><?= $this->Form->create($venue, ['type' => 'get']);?>


<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Venue'), ['action' => 'edit', $venue->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Venue'), ['action' => 'delete', $venue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venue->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Venues'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Venue'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="venues view content">
            <h3><?= h($venue->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Venue Name') ?></th>
                    <td><?= h($venue->venue_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Address') ?></th>
                    <td><?= h($venue->venue_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Contact Name') ?></th>
                    <td><?= h($venue->venue_contact_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Contact Number') ?></th>
                    <td><?= h($venue->venue_contact_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Email') ?></th>
                    <td><?= h($venue->venue_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Photo1') ?></th>
                    <td><?= h($venue->venue_photo1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Photo2') ?></th>
                    <td><?= h($venue->venue_photo2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue About Us') ?></th>
                    <td><?= h($venue->venue_about_us) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($venue->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Min Capacity') ?></th>
                    <td><?= $this->Number->format($venue->venue_min_capacity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Payrate') ?></th>
                    <td><?= $this->Number->format($venue->venue_payrate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Rating') ?></th>
                    <td><?= $this->Number->format($venue->venue_rating) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Event Types') ?></h4>
                <?php if (!empty($venue->event_types)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Event Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($venue->event_types as $eventTypes) : ?>
                        <tr>
                            <td><?= h($eventTypes->id) ?></td>
                            <td><?= h($eventTypes->event_name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EventTypes', 'action' => 'view', $eventTypes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EventTypes', 'action' => 'edit', $eventTypes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EventTypes', 'action' => 'delete', $eventTypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventTypes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Events') ?></h4>
                <?php if (!empty($venue->events)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Event Name') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Venue Id') ?></th>
                            <th><?= __('Event Attendance') ?></th>
                            <th><?= __('Event Date') ?></th>
                            <th><?= __('Event Type Id') ?></th>
                            <th><?= __('Event Startdate') ?></th>
                            <th><?= __('Event Enddate') ?></th>
                            <th><?= __('Payment Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($venue->events as $events) : ?>
                        <tr>
                            <td><?= h($events->id) ?></td>
                            <td><?= h($events->event_name) ?></td>
                            <td><?= h($events->customer_id) ?></td>
                            <td><?= h($events->venue_id) ?></td>
                            <td><?= h($events->event_attendance) ?></td>
                            <td><?= h($events->event_date) ?></td>
                            <td><?= h($events->event_type_id) ?></td>
                            <td><?= h($events->event_startdate) ?></td>
                            <td><?= h($events->event_enddate) ?></td>
                            <td><?= h($events->payment_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
                        </p>
