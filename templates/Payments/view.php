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
            <?= $this->Html->link(__('Edit Payment'), ['action' => 'edit', $payment->paymentID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Payment'), ['action' => 'delete', $payment->paymentID], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->paymentID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Payments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Payment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="payments view content">
            <h3><?= h($payment->paymentID) ?></h3>
            <table>
                <tr>
                    <th><?= __('PaymentType') ?></th>
                    <td><?= h($payment->paymentType) ?></td>
                </tr>
                <tr>
                    <th><?= __('PaymentID') ?></th>
                    <td><?= $this->Number->format($payment->paymentID) ?></td>
                </tr>
                <tr>
                    <th><?= __('PaymentTotal') ?></th>
                    <td><?= $this->Number->format($payment->paymentTotal) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
