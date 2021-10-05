<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 * @var \App\Model\Entity\Venue[]|\Cake\Collection\CollectionInterface $venues
 * @var int $payrate
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
                <div class="d-flex flex-row align-items-center"></div></div>
                <p><a href="<?= $this->Url->build(['controller'=>'Venues','action' => 'result']) ?>" style="text-align:center; width:32.5%; padding:10;" class="btn btn-primary" ><i class="fa fa-long-arrow-left ml-1" aria-hidden="true"></i> Continue Shopping</a>
                <a href="#" style="text-align:center; width:32.5%; padding:10;" class="btn btn-primary" input type="button" name="update" id="update" value="Submit" onClick="multiplyBy()"><i class="fa fa-refresh" aria-hidden="true"></i> Update Cart</a>
                <a href="<?= $this->Url->build(['controller'=>'Pages','action' => 'display','emptycart']) ?>" style="text-align:center; width:32.5%; padding:10; " class="btn btn-primary" ><i class="fa fa-trash" aria-hidden="true"></i> Empty Cart	</a></p>
                <hr>
                <h6 class="mb-0">Shopping cart</h6>
                <div class="d-flex justify-content-between"></div>
                <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                    <div class="d-flex flex-row"><img class="rounded" src="<?=$this->Html->Url->image(h($venue->venue_photo1)) ?>" width="250" length="250">
                        <div class="col-md-12"> <h2 class="font-weight-bold"><?=h($venue->venue_name) ?></h2></div>                
                    </div>
                    <div class="col-md-2"
                    >   
                        <form><div class="input number required"style="text-align: left"><label for="guest-count" class="form-label">Guests</label><input type="number" min="0" max="" id="guest_count" name="guest_count" class="form-control" required="required"></div></form>
                        
                    </div>
                    <div class="col-md-2">
                    <form><div class="input number required"style="text-align: left"><label for="guest-count" class="form-label">Rate($/Guest)</label><input type="number" min="1" step="1" max="<?=h($venue->venue_min_capacity) ?>" id="check" name="guest_count" class="form-control" value="<?=h($venue->venue_payrate) ?>" readonly required="required"></div></form>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="payment-info" style="background:white">
                <div class="d-flex justify-content-between align-items-center"><span>Card details</span><img class="rounded" src="https://www.tenforums.com/geek/gars/images/2/types/thumb_15951118880user.png" width="30"></div><span class="type d-block mt-3 mb-1">Card type</span><label class="radio"> <input type="radio" name="card" value="payment" checked> <span><img width="30" src="https://img.icons8.com/color/48/000000/mastercard.png" /></span> </label>
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
                <div class="d-flex justify-content-between information"><span>Total($)</span><span><span id="result">$</span></span></div>
                
                <p class="pt-1"><?= $this->Html->link(__('Checkout'), ['action' => 'invoice', $venue->id],['class' => 'btn btn-primary btn-block d-flex justify-content-between mt-3']) ?>
            </div>
        </div>
    </div>
</div>

<script>
    function multiplyBy()
    {
      num1 = document.getElementById(
        "guest_count").value;
      num2 = document.getElementById(
        "check").value;
      document.getElementById(
        "result").innerHTML = num1 * num2;
        num3 = 2;
        num4 = document.getElementById(
        "result").value;
        document.getElementById(
        "total").innerHTML = num3 * num4;

        localStorage.setItem("txtValue", num1);
        localStorage.setItem("txtValue1", num2);
    }
  </script>




</body>
