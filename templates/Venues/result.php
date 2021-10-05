<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 * @var \App\Model\Entity\Venue[]|\Cake\Collection\CollectionInterface $venues
<<<<<<< HEAD
=======
 * @var \App\Model\Entity\Venue[]|\Cake\Collection\CollectionInterface $results
 * @var \App\Model\Entity\Venue[]|\Cake\Collection\CollectionInterface $invalidResults
 * @var \App\Model\Entity\Venue[]|\Cake\Collection\CollectionInterface $result
 * @var \App\Model\Entity\EventType[]|\Cake\Collection\CollectionInterface $eventType
>>>>>>> eb6a50b8b745668bb9d74b990b2d6f7f2ca19a59
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


<<<<<<< HEAD
<?php
$search_venue = array();
$search_name = $_POST["search_name"];
$search_empty = false;
=======

<?php
 if ($searchStartDate == null){
     echo 'yes';
};
/*
$search_venue = array();
$search_name = $_POST["search_name"];
$search_empty = false;

>>>>>>> eb6a50b8b745668bb9d74b990b2d6f7f2ca19a59
if (empty($search_name)){
    foreach ($venues as $venue):
        array_push($search_venue,$venue);
    endforeach;
    $search_empty = true;
}
foreach ($venues as $venue):
    if ($search_empty == false){
<<<<<<< HEAD
        if (strpos($venue->venue_name,$search_name) !== false ){
=======
        if (strpos($venue->venue_address,$search_name) !== false ){
>>>>>>> eb6a50b8b745668bb9d74b990b2d6f7f2ca19a59
            array_push($search_venue,$venue);
        }
    }
    endforeach;
<<<<<<< HEAD
?>


<section class="ftco-section bg-light ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters">
            <?php foreach ($search_venue as $venue): ?>
=======
*/
?>

<section class = "container">
<section class="ftco-section bg-light ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters">
            <?php foreach ($results as $venue): ?>
>>>>>>> eb6a50b8b745668bb9d74b990b2d6f7f2ca19a59
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img" style="background-image: url('<?=$this->Html->Url->image(h($venue->venue_photo1))?>');"></a>
                        <div class="half left-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0">
                                <?php  $count = 0;
                                while($count < $venue->venue_rating){
                                    $count++;
                                ?>
                                <span class="fa fa-star"></span>
                                <?php } ?>
                                </p>
                                <p class="mb-0"><span class="price mr-1">$<?= $this->Number->format($venue->venue_payrate) ?></span> <span class="per">per hour</span></p>
                                <h3 class="mb-3" style="font-size: 24px"><a href="rooms.html"><?= h($venue->venue_name) ?></a></h3>
                                <ul class="list-accomodation">
<<<<<<< HEAD
                                    <li><span>Capacity:</span> <?= $this->Number->format($venue->venue_min_capacity) ?> Persons</li>
                                    <li><span>Address:</span> <?= h($venue->venue_address) ?></li>
                                </ul>
                                <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">View Venue Details <span class="icon-long-arrow-right"></span></a></p>
=======
                                    <li><span>Capacity:</span> <?= $this->Number->format($venue->venue_capacity) ?> Persons</li>
                                    <li><span>Address:</span> <?= h($venue->venue_address) ?></li>
                                </ul>

                                <p class="pt-1"><?= $this->Html->link(__('View Venue Details '), ['action' => 'individual', $venue->id],['class' => 'btn-custom px-3 py-2']) ?> <span class="icon-long-arrow-right"></span></p>
>>>>>>> eb6a50b8b745668bb9d74b990b2d6f7f2ca19a59
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
<<<<<<< HEAD
        </div>
    </div>
</section>
=======
            <?php if ($invalidResults != null){ ?>
            <?php foreach ($invalidResults as $venue): ?>
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img" style="background-image: url('<?=$this->Html->Url->image(h($venue->venue_photo1))?>');"></a>
                        <div class="half left-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0">
                                    <?php  $count = 0;
                                    while($count < $venue->venue_rating){
                                        $count++;
                                        ?>
                                        <span class="fa fa-star"></span>
                                    <?php } ?>
                                </p>
                                <p class="mb-0"><span class="price mr-1">$<?= $this->Number->format($venue->venue_payrate) ?></span> <span class="per">per hour</span></p>
                                <h3 class="mb-3" style="font-size: 24px"><a href="rooms.html"><?= h($venue->venue_name) ?></a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Capacity:</span> <?= $this->Number->format($venue->venue_capacity) ?> Persons</li>
                                    <li><span>Address:</span> <?= h($venue->venue_address) ?></li>
                                </ul>

                                <p class="pt-1"><a class="btn-custom px-3 py-2", style="background:red">Not Available</a><span class="icon-long-arrow-right"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;
            }?>
        </div>

    </div>
</section>
</section>
>>>>>>> eb6a50b8b745668bb9d74b990b2d6f7f2ca19a59
