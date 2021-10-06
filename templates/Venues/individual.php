<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 * @var \App\Model\Entity\Talent $talent
 * @var \App\Model\Entity\Supplier $supplier
 * @var \App\Model\Entity\Venue[]|\Cake\Collection\CollectionInterface $venues
 * @var \App\Model\Entity\EventType $eventType
 * @var \App\Model\Entity\EventType[]|\Cake\Collection\CollectionInterface $venueEventTypes
 * @var \App\Model\Entity\Talent[]|\Cake\Collection\CollectionInterface $talentResults
 * @var \App\Model\Entity\Supplier[]|\Cake\Collection\CollectionInterface $supplierResults
 */
?>
<?= $this->Form->create($venue, ['type' => 'get']);?>
<p></p>


<?php /*$this-> Form-> create(null,['action' => '$this->Url->build(['controller'=>'Venues','action' => 'cart'])','method' => 'GET']);?>
<input name=''>
<?= $this->Form->button('Book Venue',['type' => 'submit','class' => 'put class inside ']); ?>
<?= $this->Form->end(); ?> */ ?>

<?php if ($talentResults != null){
    foreach($talentResults as $talent){
    
    }
}?>
<?php if ($supplierResults != null){
    foreach($supplierResults as $supplier){
    
    }
}?>

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
                    <h3 class="mb-4">Check Availability</h3>
                    <div id="form-message-warning" class="mb-4"></div>
                    <div id="form-message-success" class="mb-4">

                    </div>
                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="Occasion">Occasion</label>
                                    <input type="text" class="form-control" name="occasion" id="occasion" placeholder="" onkeyup="this.value=this.value.replace(/[\d]/,'')">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="date">Date</label>
                                    <input type="date" class="form-control" name="date" id="date" placeholder="" onKeyDown="return false"> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="budget">Budget</label>
                                    <input type="number" class="form-control" name="budget" id="budget" placeholder="" onkeyup="this.value=this.value.replace(/[\d]/,'')">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="guests">Number of Guests</label>
                                    <input type="number" class="form-control" name="guests" id="guests" placeholder="" onkeyup="this.value=this.value.replace(/[\d]/,'')">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="#">Food Requirements</label>
                                    <textarea name="num" class="form-control" id="foodreq" cols="20" rows="2" placeholder="" onkeyup="this.value=this.value.replace(/[\d]/,'')"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="#">Additional Message</label>
                                    <textarea name="num" class="form-control" id="foodreq" cols="20" rows="2" placeholder="" onkeyup="this.value=this.value.replace(/[\d]/,'')"></textarea>
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
                            <h1 class="display-3 " style="text-align: center; padding: 10px;" ><?=h($venue->venue_capacity) ?> Guests</h1>


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
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Recommended Vendors</a>
                        <a class="nav-item nav-link " id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Write a Review</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        <div class="testimony-wrap d-flex" style="height: 250px">
                            <ul><li id="one">Lorem ipsum</li>
                                <li id="two">Lorem ipsum</li>
                                <li id="three">Lorem ipsum</li>
                                <li id="four">Lorem ipsum</li>
                                <li>Lorem ipsum</li>
                                <li>Lorem ipsum</li>
                                <li>Lorem ipsum</li> </ul>

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
<div class="modal fade" id="reccModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                        <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="">
                            <span><? document.getElementById("one")?></span>
                        </label>
                        <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="">
                            Second checkbox
                        </label>
                        <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="">
                            Third checkbox
                        </label>
                        <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="">
                            Fourth checkbox
                        </label>
                        <label class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="">
                            Fifth checkbox
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="pt-1" style="text-align:center; width:32.5%; padding:10; "><?= $this->Html->link(__('Book Venue'), ['action' => 'cart', $venue->id],['class' => 'btn btn-primary']) ?></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Recommendation Final Modal-->
<div class="modal fade" id="recModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Please type in your details to proceed to cart</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="col-lg-12">
                <?= $this-> Form-> create(null,['class'=>'appointment-form','action' => $this->Url->build(['controller'=>'Venues','action' => 'cart', $venue->id]),'method' => 'GET']);?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            
                            <input class="form-control" type="text" name="username" placeholder="Enter Your Full Name" onkeyup="this.value=this.value.replace(/[\d]/,'')"/>
                            
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                           
                            <input class="form-control" type="number" name="phone" min="0100000000" max="9999999999"  placeholder="Enter Your Phone Number" onkeyup="this.value=this.value.replace(/[^\d]/,'')" maxlength="10"/>
                            
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            
                            <input class="form-control" type="number" name="guests" min="1" max="<?=h($venue->venue_capacity) ?>" onKeyDown="return false" placeholder="Number Of Guests"/>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-field">
                                <div class="select-wrap">
                                    
                                    <select name="venue_type" id="" class="form-control">
                                        <option value="">Event Type</option>
                                        <?php foreach ($venueEventTypes as $eventType): ?>
                                            <option value="<?= h($eventType->event_name) ?>"><?= h($eventType->event_name) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-field">
                                <div class="select-wrap">
                                    <!--Recommended Supplier-->
                                    <select name="recsupplier" id="" class="form-control" value='Recommended Supplier'>
                                        <option value=''>Choose Supplier</option>
                                        <?php foreach($supplierResults as $supplier):?>
                                        <option value="<?= h($supplier->supplier_name) ?>"><?= h($supplier->supplier_name) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-field">
                                <div class="select-wrap">
                                    <!--Recommended Talent-->
                                    <select name="rectalent" id="" class="form-control">
                                        <option value=''>Choose Talent</option>
                                        <?php foreach($talentResults as $talent):?>
                                        <option value="<?= h($talent->talent_name) ?>"><?= h($talent->talent_name) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <input type="text" name="eventDate" class="form-control appointment_date-check-in" placeholder="Event Date" onKeyDown="return false">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <?= $this->Form->button('Add to Cart',['type' => 'submit','class' => 'btn btn-primary py-3 px-4']); ?>
                        </div>
                    </div>
                </div>
                <?= $this->Form->end(); ?>
            </div>
        </div>
                </div>
                
            </div>
        </div>
    </div>
