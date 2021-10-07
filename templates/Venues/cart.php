<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 * @var \App\Model\Entity\Talent $talent
 * @var \App\Model\Entity\Supplier $supplier
 * @var string $userName;
 * @var \App\Model\Entity\Venue[]|\Cake\Collection\CollectionInterface $venues
 * @var \App\Model\Entity\Talent[]|\Cake\Collection\CollectionInterface $talentResults
 * @var \App\Model\Entity\Supplier[]|\Cake\Collection\CollectionInterface $supplierResults
 * @var int $guestNumber
 */
?>
<?= $this->Form->create($venue, ['type' => 'get']);?>
<p></p>
<?php if ($talentResults != null){
    foreach($talentResults as $talent){

    }
}?>
<?php if ($supplierResults != null){
    foreach($supplierResults as $supplier){

    }
}?>


<body>
<section class="ftco-section about-section bg-light">
    <div class="container">
        <div class="container mt-6 p-4 rounded cart" style="height: 600px">


            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="product-details mr-2">
                    <div class="col-md-8">
                        <div class="d-flex flex-row align-items-center"></div></div>
                        <p><a href="<?= $this->Url->build(['controller'=>'Venues','action' => 'result']) ?>" style="text-align:center; width:32.5%; padding:10;" class="btn btn-primary" ><i class="fa fa-long-arrow-left ml-1" aria-hidden="true"></i> Continue Shopping</a>
                        <a href="#" style="text-align:center; width:32.5%; padding:10;" class="btn btn-primary" input type="button" name="update" id="update" value="Submit" onClick="totalCalc()"><i class="fa fa-refresh" aria-hidden="true"></i> Update Cart</a>
                        <a href="<?= $this->Url->build(['controller'=>'Pages','action' => 'display','emptycart']) ?>" style="text-align:center; width:32.5%; padding:10; " class="btn btn-primary" ><i class="fa fa-trash" aria-hidden="true"></i> Empty Cart	</a></p>
                        <hr>
                        <strong style="font-size:25px">Hi </strong><strong id="client" style="font-size:25px"><?php echo $userName ?></strong><strong style="font-size:25px">! This is your shopping cart</strong>
                        <div class="d-flex justify-content-between"></div>

                        <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded" style="height: 300px">
                            <div class="d-flex flex-row"><img class="rounded" src="<?=$this->Html->Url->image(h($venue->venue_photo1)) ?>" width="250" length="250">
                                <div class="col-md-12"> <h2 class="font-weight-bold"><?=h($venue->venue_name) ?></h2><div class="col-md-12" id="date">Event Date: <?php echo $eventDate ?></div>
                                <div class="col-md-12">Supplier: <?php echo $supplierselection ?></div>
                                <div class="col-md-12">Talent: <?php echo $talentselection ?></div>  </div>


                            </div>

                            <div class="col-md-2">
                                <div class="input number required"style="text-align: left"><label for="guest-count" class="form-label">Guests</label><input type="number" id="guest_count" name="guest_count" class="form-special" value="<?php echo $guestNumber ?>" readonly required="required" onKeyDown="return false"></div>
                                <div class="input number required"style="text-align: left"><label for="guest-count" class="form-label">Talent Rate</label><input type="number" id="talpayrate" name="talpayrate" class="form-special" value="<?= (h($talent->talent_payrate)) ?>" readonly required="required" onKeyDown="return false"></div>

                            </div>
                            <div class="col-md-2">
                            <div class="input number required"style="text-align: left"><label for="guest-count" class="form-label">Rate($/Guest)</label><input type="number" id="check" name="guest_count" class="form-special" value="<?=h($venue->venue_payrate) ?>" readonly required="required" onKeyDown="return false"></div>
                            <div class="input number required"style="text-align: left"><label for="guest-count" class="form-label">Supplier Rate</label><input type="number" id="suppayrate" name="suppayrate" class="form-special" value="<?= (h($supplier->supplier_payrate)) ?>" readonly required="required" onKeyDown="return false"></div>

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
                        <div><label class="credit-card-label">Name on card</label><input type="text" color="Black" class="form-control credit-inputs" placeholder="Name" onkeyup="this.value=this.value.replace(/[\d]/,'')"></div>
                        <div><label class="credit-card-label">Card number</label><input type="text" class="form-control credit-inputs" placeholder="0000 0000 0000 0000" minlength="16" maxlength="16" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"></div>

                        <div class="row">
                            <div class="col-md-6"><label class="credit-card-label">Date</label><input type="text" class="form-control credit-inputs" placeholder="12/24" minlength="4" maxlength="4" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"></div>
                            <div class="col-md-6"><label class="credit-card-label">CVV</label><input type="text" class="form-control credit-inputs" placeholder="342" minlength="3" maxlength="3" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"></div>
                        </div>
                        <hr class="line">


                        <div class="d-flex justify-content-between information"><span>Venue Cost($)</span><span><span id="result" name="subtotal">$</span></span></div>
                        <div class="d-flex justify-content-between information"><span>Supplier Cost($)</span><span><span id="suptotal" name="suptotal"><?= h($supplier->supplier_payrate) ?></span></span></div>
                        <div class="d-flex justify-content-between information"><span>Talent Cost($)</span><span><span id="taltotal" name="taltotal"><?= (h($talent->talent_payrate)) ?></span></span></div>
                        <hr class="line">

                        <div class="d-flex justify-content-between information"><span>Total($)</span><span><span id="final" name="final">$</span></span></div>
                        <?= $this->Form->end(); ?>
                        <?= $this-> Form-> create(null,['class'=>'appointment-form','style'=>'margin-top:0px', 'action' => $this->Url->build(['controller'=>'Venues','action' => 'invoice', $venue->id]),'method' => 'GET']);?>
                        <?= $this->Form->button('Checkout',['type' => 'submit','class' => 'btn btn-primary btn-block d-flex justify-content-between mt-3', 'style' => 'margin-top: 0px']); ?>
                        <?= $this->Form->end(); ?>
                        <?= $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    localStorage.clear()
</script>
<script>
    function totalCalc()
    {
      num1 = document.getElementById(
        "guest_count").value;
      num2 = document.getElementById(
        "check").value;
        num3 = document.getElementById(
        "talpayrate").value;
        num4 = document.getElementById(
        "suppayrate").value;
        num5 = (Number(num1)*Number(num2))
        document.getElementById(
        "result").innerHTML = num5;
        num6 = (Number(num1)*Number(num2))+Number(num3)+Number(num4);
        document.getElementById(
        "final").innerHTML = num6;
        num7 = document.getElementById(
        "client");
        num8 = document.getElementById(
        "date");

        localStorage.setItem("txtValue", num6);
        localStorage.setItem("txtValue1", num6);
        localStorage.setItem("txtValue2", num3);
        localStorage.setItem("txtValue3", num4);
        localStorage.setItem("txtValue4", num5);
        localStorage.setItem("txtValue5", num1);
        localStorage.setItem("txtValue6", num2);
        localStorage.setItem("txtValue7", num7);
        localStorage.setItem("txtValue8", num7);
        localStorage.setItem("txtValue9", num8);
    }
</script>

<script>
    windows.onload=totalCalc();
</script>

<script>
jQuery(function(){
   jQuery('#update').click();
});
</script>









</body>
