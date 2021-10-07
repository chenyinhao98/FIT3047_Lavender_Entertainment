<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 * @var \App\Model\Entity\Talent $talent
 * @var \App\Model\Entity\Supplier $supplier
 * @var \App\Model\Entity\Venue[]|\Cake\Collection\CollectionInterface $venues
 * @var \App\Model\Entity\Talent[]|\Cake\Collection\CollectionInterface $talentResults
 * @var \App\Model\Entity\Supplier[]|\Cake\Collection\CollectionInterface $supplierResults
 */
?>
<?= $this->Form->create($venue, ['type' => 'get']);?>
<p></p>

<?= $this->Html->css(['vendors.css']) ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">

<section class="ftco-section bg-light " style="background:gray">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-7 d-flex services align-self-stretch px-3 ftco-animate">
                <div class="d-block services-wrap text-left">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 " style="height: 421px;" src="<?=$this->Html->Url->image(h($venue->venue_photo1)) ?>" alt="First Picture">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 " style="height: 421px;" src="<?=$this->Html->Url->image(h($venue->venue_photo2)) ?>" alt="Second Picture">
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
                            <div class="col-md-8">
                                <h2 class="font-weight-bold"><?=h($venue->venue_name) ?></h2></div>
                            <div class="col-md-4">
                                <div class="text-md-right" style="text-align:right; padding: 20px;">
                                    <p class="star mb-0" style="color:#A295FF">
                                        <?php  $count = 0;
                                        while($count < $venue->venue_rating){
                                            $count++;
                                            ?>
                                            <span class="fa fa-star fa-2x"></span>
                                        <?php } ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p class="font-weight-bold" style="text-align: left; font-size: large;"><i class="fa fa-phone fa-2x" aria-hidden="true" style="padding: 10px;"></i>  <?=h($venue->venue_contact_number) ?></p>
                                <p class="font-weight-bold"style="text-align: left; font-size: large;"><i class="fa fa-address-card fa-2x" aria-hidden="true" style="padding: 10px;"></i>  <?=h($venue->venue_address) ?></p> </div>
                            <div class="col-md-4">
                                <p class="font-weight-bold" style="text-align: right; font-size: large;"><i class="fa fa-usd fa-2x" aria-hidden="true" style="padding: 10px;"></i><?=h($venue->venue_payrate) ?> / Guest</p>
                                <div class="input-wrap">
                                    <input type="text" name="search_end_date" class="form-control appointment_date-check-out" placeholder="Availabilty Date">
                                </div>
                            </div>
                        </div>



                        <p><a href="#" style="text-align:center; width:32.5%; padding:10;" class="btn btn-primary" data-toggle="modal" data-target="#shortlistModal"><i class="fa fa-heart" aria-hidden="true"></i> Shortlist</a>
                            <a href="#" style="text-align:center; width:32.5%; padding:10;" class="btn btn-primary" data-toggle="modal" data-target="#recModal">Book Venue</a>
                            <a href="<?= $this->Url->build(['controller'=>'Pages','action' => 'display','underconstruction']) ?>" style="text-align:center; width:32.5%; padding:10; " class="btn btn-primary" >Write A Review!	</a></p>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-7 d-flex align-items-stretch ">
                <div class="contact-wrap w-100 p-md-5 p-4 ">
                    <h3 class="mb-4">Send Event Enquiry</h3>
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

                                    <a href="#" style="text-align:center; width:100%; padding:10;" class="btn btn-primary" data-toggle="modal" data-target="#enquiryModal">Submit	</a>
                                    <div class="submitting"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

    </div>

</section>


<section class="ftco-section about-section bg-light">
    <div class="container">
        <div class="row justify-content-left pb-5 mb-3">
            <div class="col-md-8 heading-section text-left ftco-animate">
                <h2>About Us</h2>
            </div>
            <div class="col-md-4 heading-section text-left ftco-animate">
                <h2>Venue Capacity</h2>
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
                            <p style="padding: 10px;"><?=h($venue->venue_about_us) ?></p>

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
                            <h1 class="display-3 " style="text-align: center; padding: 10px;" ><?=h($venue->venue_min_capacity) ?> Guests</h1>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light" id=reviewtab>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link  " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Recommended Vendors</a>
                        <a class="nav-item nav-link active" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Write a Review</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="testimony-wrap d-flex" style="height: auto ">
                            <div class="container">
                                <?php if(empty($supplierResults)): ?>
                                No Available Reccomended Suppliers :(
                                <?php else:?>
                                    <?php foreach ($supplierResults as $supplier): ?>
                                        <div class="col-md-12" style="flex-wrap:wrap">
                                            <div class="supplier_background ">
                                                <a href="#" class="img supplier_image" style="background-image: url('<?=$this->Html->Url->image(h($supplier->supplier_photo))?>');"></a>
                                                <div class="supplier_name">
                                                    <?=h($supplier->supplier_name) ?>
                                                </div>
                                                <div class="supplier_type">
                                                    <?=h($supplier->supplier_type) ?>
                                                 </div>
                                                <div class="supplier_price">
                                                    $<?=h($supplier->supplier_payrate) ?>/ph
                                                </div>
                                                <div class="supplier_address">
                                                    <i class="map-pin"></i><?=h($supplier->supplier_address) ?>
                                                </div>
                                                <div class="supplier_aboutus">
                                                    <?=h($supplier->supplier_about_us) ?>
                                                </div>
                                            </div>
                                        </div><br>
                            <?php endforeach;?>
                                <?php endif; ?>
                                <?php if(empty($talentResults)): ?>
                                    <br> No Available Reccomended Talent :(
                                <?php else:?>
                                    <?php foreach ($talentResults as $talent): ?>
                                <div class="col-12" >
                                    <div class="supplier_background ">
                                        <a href="#" class="img supplier_image" style="background-image: url('<?=$this->Html->Url->image(h($talent->talent_photo))?>');"></a>
                                        <div class="supplier_name">
                                            <?=h($talent->talent_name) ?>
                                        </div>
                                        <div class="supplier_type">
                                            <?=h($talent->talent_type) ?>
                                        </div>
                                        <div class="supplier_price">
                                            $<?=h($talent->talent_payrate) ?>/ph
                                        </div>
                                        <div class="supplier_address">
                                            <i class="map-pin"></i><?=h($talent->talent_address) ?>
                                        </div>
                                        <div class="supplier_aboutus">
                                            <?=h($talent->talent_about_us) ?>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                                <?php endif; ?>
                        </div>
                    </div>
                    </div>

                    <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                        <div class="testimony-wrap d-flex" style="height: 250px">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="#">Please let us know about your experience!</label>
                                    <textarea name="num" class="form-control" id="foodreq" cols="20" rows="2" placeholder=""></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <a href="<?= $this->Url->build(['controller'=>'Pages','action' => 'display','underconstruction']) ?>" style="text-align:center; width:70%; padding:10;" class="btn btn-primary">Submit	</a>
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

<!-- Shortlist Modal-->
<div class="modal fade" id="shortlistModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?=h($venue->venue_name) ?> has been shortlisted!</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    </div>
</div>

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

<!-- Book Modal-->
<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Book <?=h($venue->venue_name) ?> ? </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Do you want to add <?=h($venue->venue_name) ?> to your cart ?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="#" data-dismiss="modal" data-toggle="modal" data-target="#recModal">Yes</a>
            </div>
        </div>
    </div>
</div>
<!-- Recommendation Modal-->

<div class="modal fade" id="recModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add some of our recommended suppliers to your purchase?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="list-group">
                    <?php foreach ($supplierResults as $supplier): ?>
                        <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="">
                            <?=h($supplier->supplier_name) ?>
                        </label>
                    <?php endforeach; ?>
                    <?php foreach ($talentResults as $talent): ?>
                        <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="">
                            <?=h($talent->talent_name) ?>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="pt-1" style="text-align:center; width:32.5%; padding:10; "><?= $this->Html->link(__('Book Venue'), ['action' => 'cart', $venue->id],['class' => 'btn btn-primary']) ?></a>
            </div>
        </div>
    </div>
</div>

