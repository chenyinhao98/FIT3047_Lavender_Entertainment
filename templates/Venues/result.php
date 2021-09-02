<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 * @var \App\Model\Entity\Venue[]|\Cake\Collection\CollectionInterface $venues
 */
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?=$this->Html->Url->image('/img/result_background.png')?>); data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= $this->Url->build(['controller'=>'Pages','action' => 'display','home']) ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Venues <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Venues</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters">
            <?php foreach ($venues as $venue): ?>
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img" style="background-image: url('<?=$this->Html->Url->image(h($venue->venue_email))?>');"></a>
                        <div class="half left-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0">
                                <?php  $count = 0;
                                while($count < $venue->venue_min_hour){
                                    $count++;
                                ?>
                                <span class="fa fa-star"></span>
                                <?php } ?>
                                </p>
                                <p class="mb-0"><span class="price mr-1">$<?= $this->Number->format($venue->venue_payrate) ?></span> <span class="per">per hour</span></p>
                                <h3 class="mb-3" style="font-size: 24px"><a href="rooms.html"><?= h($venue->venue_name) ?></a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Capacity:</span> <?= $this->Number->format($venue->venue_min_capacity) ?> Persons</li>
                                    <li><span>Address:</span> <?= h($venue->venue_address) ?></li>
                                </ul>
                                <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Venue Details <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
