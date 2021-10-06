<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 * @var string $subtotal;
 * @var string $userName;
 * @var \App\Model\Entity\Venue[]|\Cake\Collection\CollectionInterface $venues
 */
?>
<?= $this->Form->create($venue, ['type' => 'get']);?>
<p></p>

<?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">



    <div class="container">
        <div class="row no-gutters">
		<p><div class="col md-12" style="font-size: 24px; color: green; text-align: left" id="checkmark">

		<h2 class="font-weight-bold" style="text-align:center; width: 700px; padding: 10px; color: green; align:left";><i class="fa fa-check-circle fa-3x"></i><span>  Your Order has been booked!  </span></h2></p>

		</div>

			<div class="receipt-content" id="receipt">

				<div class="row">
					<div class="col-md-12">
						<div class="invoice-wrapper">
							<div class="intro">
							Hi!
							<br>
							This is the receipt for a payment of <strong id="data"></strong> (AUD) for your booking
						</div>

						<div class="payment-info">
							<div class="row">
								<div class="col-sm-6">
								<?php
									$a = mt_rand(100000,999999);
								?>
									<span>Payment No.</span>
									<strong><span id="random">32424254</span></strong>
								</div>
								<div class="col-sm-6 text-right">
									<span>Payment Date</span>
									<strong><span id="date1"></span></strong>


							</div>
						</div>
					</div>

					<div class="payment-details">
						<div class="row">
							<div class="col-sm-6">
								<span>Payment From</span>
								<strong>
									Client
								</strong>
								
							</div>
							<div class="col-sm-6 text-right">
								<span>Payment To</span>
								<strong>
									Lavender Entertainment
								</strong>
								
							</div>
						</div>
					</div>

					<div class="line-items">
						<div class="headers clearfix">
						<strong style="font-size:25px">Booking For </strong><strong id="data5" style="font-size:25px"></strong><strong style="font-size:25px"> Guests at <?=h($venue->venue_name) ?>
						</div>
						
						<div class="total text-right">
							<p class="extra-notes">
								<strong>Extra Notes</strong>
								Thank you for choosing Lavender Entertainment
							</p>
							<div class="field">
								Venue Charges($) <span id="data4"></span>
							</div>
							<div class="field">
								Supplier Charges($) <span id="data3">$0.00</span>
							</div>
							<div class="field">
								Talent Charge($) <span id="data2">N/A</span>
							</div>
							<div class="field grand-total">
								Total($)<span id="data1"></span>
							</div>
						</div>
						<div class="print">
							<a href="#" onclick="printInvoice();">
								<i class="fa fa-print"></i>
								Print this receipt
							</a>
						</div>


					</div>
				</div>


			</div>
		</div>

</div>

<script>
function randomString() {
            //initialize a variable having alpha-numeric characters
    var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";

            //specify the length for the new string to be generated
    var string_length = 8;
    var randomstring = '';

            //put a loop to select a character randomly in each iteration
    for (var i=0; i<string_length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        randomstring += chars.substring(rnum,rnum+1);
    }
             //display the generated string
    document.getElementById("randomfield").innerHTML = randomstring;

}
</script>

<script>
//displaying the value from local storage to another page by their respective Ids
document.getElementById("data").innerHTML=localStorage.getItem("txtValue");
document.getElementById("data1").innerHTML=localStorage.getItem("txtValue1");
document.getElementById("data2").innerHTML=localStorage.getItem("txtValue2");
document.getElementById("data3").innerHTML=localStorage.getItem("txtValue3");
document.getElementById("data4").innerHTML=localStorage.getItem("txtValue4");
document.getElementById("data5").innerHTML=localStorage.getItem("txtValue5");
document.getElementById("data6").innerHTML=localStorage.getItem("txtValue7");
document.getElementById("data7").innerHTML=localStorage.getItem("txtValue7");
document.getElementById("data8").innerHTML=localStorage.getItem("txtValue9");
</script>

<script>

var today = new Date();

var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();

document.getElementById("date1").innerHTML =date;

</script>

<script id="random">
	function getRandomNumber(100000, 9999999) {
  let r = Math.floor(Math.random() * (9999999 - 1000000 + 1)) + 100000;
  return r;
}
</script>

<script>
function printInvoice()
 {
     printDiv = "#receipt"; // id of the div you want to print
     $("*").addClass("no-print");
     $(printDiv+" *").removeClass("no-print");
     $(printDiv).removeClass("no-print");

     parent =  $(printDiv).parent();
     while($(parent).length)
     {
         $(parent).removeClass("no-print");
         parent =  $(parent).parent();
     }
     window.print();
 }
</script>
