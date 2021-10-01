<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 * @var \App\Model\Entity\Venue[]|\Cake\Collection\CollectionInterface $venues
 */
?>
<?= $this->Form->create($venue, ['type' => 'get']);?>
<p></p>  
  
<div class="receipt-content">
    
		<div class="row">
			<div class="col-md-12">
				<div class="invoice-wrapper">
					<div class="intro">
						Hi <strong>User Name</strong>, 
						<br>
						This is the receipt for a payment of <strong></strong> (USD) for your works
					</div>

					<div class="payment-info">
						<div class="row">
							<div class="col-sm-6">
								<span>Payment No.</span>
								<strong>434334343</strong>
							</div>
							<div class="col-sm-6 text-right">
								<span>Payment Date</span>
								<strong>Jul 09, 2014 - 12:20 pm</strong>
							</div>
						</div>
					</div>

					<div class="payment-details">
						<div class="row">
							<div class="col-sm-6">
								<span>Client</span>
								<strong>
									Andres felipe posada
								</strong>
								<p>
									989 5th Avenue <br>
									City of monterrey <br>
									55839 <br>
									USA <br>
									<a href="#">
										jonnydeff@gmail.com
									</a>
								</p>
							</div>
							<div class="col-sm-6 text-right">
								<span>Payment To</span>
								<strong>
									Juan fernando arias
								</strong>
								<p>
									344 9th Avenue <br>
									San Francisco <br>
									99383 <br>
									USA <br>
									<a href="#">
										juanfer@gmail.com
									</a>
								</p>
							</div>
						</div>
					</div>

					<div class="line-items">
						<div class="headers clearfix">
							<div class="row">
								<div class="col-xs-4">Description</div>
								<div class="col-xs-3">Quantity</div>
								<div class="col-xs-5 text-right">Amount</div>
							</div>
						</div>
						<div class="items">
						
						</div>
						<div class="total text-right">
							<p class="extra-notes">
								<strong>Extra Notes</strong>
								Please send all items at the same time to shipping address by next week.
								Thanks a lot.
							</p>
							<div class="field">
								Subtotal <span>$379.00</span>
							</div>
							<div class="field">
								Shipping <span>$0.00</span>
							</div>
							<div class="field">
								Discount <span>4.5%</span>
							</div>
							<div class="field grand-total">
								Total <span>$312.00</span>
							</div>
						</div>

						
					</div>
				</div>

				
			</div>
		</div>
	
</div>                    