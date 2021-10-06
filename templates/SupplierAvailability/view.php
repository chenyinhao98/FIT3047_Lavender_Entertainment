<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SupplierAvailability $supplierAvailability
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Supplier Availability'), ['action' => 'edit', $supplierAvailability->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Supplier Availability'), ['action' => 'delete', $supplierAvailability->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplierAvailability->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Supplier Availability'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Supplier Availability'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supplierAvailability view content">
            <h3><?= h($supplierAvailability->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Supplier') ?></th>
                    <td><?= $supplierAvailability->has('supplier') ? $this->Html->link($supplierAvailability->supplier->id, ['controller' => 'Suppliers', 'action' => 'view', $supplierAvailability->supplier->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($supplierAvailability->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($supplierAvailability->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($supplierAvailability->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Avaliable') ?></th>
                    <td><?= $supplierAvailability->avaliable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
