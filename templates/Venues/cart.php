<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 * @var \App\Model\Entity\Venue[]|\Cake\Collection\CollectionInterface $venues
 */
?>
<?= $this->Form->create($venue, ['type' => 'get']);?>
<p></p>

<body>


<div class="container mt-5 p-3 rounded cart">
    <div class="row no-gutters">
        <div class="col-md-8">
            <div class="product-details mr-2">
            <div class="col-md-8">
                <div class="d-flex flex-row align-items-center"></div><button class="btn btn-primary" type="button"><span><i class="fa fa-long-arrow-left ml-1"></i> Continue Shopping</span></button></div>
            <div class="col-md-4">
                <div class="d-flex flex-row align-items-center"></div><button class="btn btn-primary" input type="update" name="update" value="Submit"><span> Update Cart</span></button> </div>
                <hr>
                <h6 class="mb-0">Shopping cart</h6>
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center"><span class="text-black-50">Sort by:</span>
                        <div class="price ml-2"><span class="mr-1">price</span><i class="fa fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                    <div class="d-flex flex-row"><img class="rounded" src="<?=$this->Html->Url->image(h($venue->venue_photo1)) ?>" width="250" length="250">
                        <div class="col-md-12"> <h2 class="font-weight-bold"><?=h($venue->venue_name) ?></h2></div>                
                    </div>
                    <div class="col-md-4">
                        <div class="input number required"style="text-align: left"><label for="guest-count" class="form-label">Number of Guests</label><input type="number" name="guest-count" class="form-control" required="required" data-validity-message="This field cannot be left empty" oninvalid="this.setCustomValidity(''); if (!this.value) this.setCustomValidity(this.dataset.validityMessage)" oninput="this.setCustomValidity('')" id="guest-count"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-row align-items-center" style="text-align: right"><span class="d-block ml-5 font-weight-bold" name="paye">$<?=h($venue->venue_payrate) ?> / Guest</span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="payment-info" style="background:white">
                <div class="d-flex justify-content-between align-items-center"><span>Card details</span><img class="rounded" src="https://i.imgur.com/WU501C8.jpg" width="30"></div><span class="type d-block mt-3 mb-1">Card type</span><label class="radio"> <input type="radio" name="card" value="payment" checked> <span><img width="30" src="https://img.icons8.com/color/48/000000/mastercard.png" /></span> </label>
                <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/visa.png" /></span> </label>
                <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/ultraviolet/48/000000/amex.png" /></span> </label>
                <label class="radio"><a href="https://www.paypal.com/in/signin"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/paypal.png" /></span></a></label>
                <div><label class="credit-card-label">Name on card</label><input type="text" color="Black" class="form-control credit-inputs" placeholder="Name"></div>
                <div><label class="credit-card-label">Card number</label><input type="text" class="form-control credit-inputs" placeholder="0000 0000 0000 0000"></div>
                
                <div class="row">
                    <div class="col-md-6"><label class="credit-card-label">Date</label><input type="text" class="form-control credit-inputs" placeholder="12/24"></div>
                    <div class="col-md-6"><label class="credit-card-label">CVV</label><input type="text" class="form-control credit-inputs" placeholder="342"></div>
                </div>
                <hr class="line">
                    <?php
                        if(isset($_POST['update']))
                        {
                        $a = $_POST['payrate'];
                        $b = $_POST['guest-count'];
                        $mul = $a * $b; // Multiplication of two numbers
                        $tax = $mul + 0.2*$mul;
                        }
                    ?>
                <div class="d-flex justify-content-between information"><span>Subtotal</span><span><?php echo $mul; ?></span></div>
                <div class="d-flex justify-content-between information"><span>Total(Incl. taxes)</span><span><?php echo $tax; ?></span></div>
                <p class="pt-1"><?= $this->Html->link(__('Checkout'), ['action' => 'invoice', $venue->id],['class' => 'btn btn-primary btn-block d-flex justify-content-between mt-3']) ?>
            </div>
        </div>
    </div>
</div>




</body>
