<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment $payment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $payment->paymentID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $payment->paymentID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Payments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="payments form content">
            <?= $this->Form->create($payment) ?>
            <fieldset>
                <legend><?= __('Edit Payment') ?></legend>
                <?php
                    echo $this->Form->control('paymentType');
                    echo $this->Form->control('paymentTotal');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>