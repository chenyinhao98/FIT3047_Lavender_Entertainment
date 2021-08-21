<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers view content">
            <h3><?= h($customer->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('CustomerFirstname') ?></th>
                    <td><?= h($customer->customerFirstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerSecondname') ?></th>
                    <td><?= h($customer->customerSecondname) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerEmail') ?></th>
                    <td><?= h($customer->customerEmail) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerPhone') ?></th>
                    <td><?= h($customer->customerPhone) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerID') ?></th>
                    <td><?= $this->Number->format($customer->customerID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
