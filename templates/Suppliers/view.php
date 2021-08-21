<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Supplier'), ['action' => 'edit', $supplier->supplierID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Supplier'), ['action' => 'delete', $supplier->supplierID], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->supplierID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Suppliers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Supplier'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="suppliers view content">
            <h3><?= h($supplier->supplierID) ?></h3>
            <table>
                <tr>
                    <th><?= __('SupplierCategory') ?></th>
                    <td><?= h($supplier->supplierCategory) ?></td>
                </tr>
                <tr>
                    <th><?= __('SupplierName') ?></th>
                    <td><?= h($supplier->supplierName) ?></td>
                </tr>
                <tr>
                    <th><?= __('SupplierPreferred') ?></th>
                    <td><?= h($supplier->supplierPreferred) ?></td>
                </tr>
                <tr>
                    <th><?= __('SupplierAddress') ?></th>
                    <td><?= h($supplier->supplierAddress) ?></td>
                </tr>
                <tr>
                    <th><?= __('SupplierPPH') ?></th>
                    <td><?= h($supplier->supplierPPH) ?></td>
                </tr>
                <tr>
                    <th><?= __('SupplierContactName') ?></th>
                    <td><?= h($supplier->supplierContactName) ?></td>
                </tr>
                <tr>
                    <th><?= __('SupplierContactNumber') ?></th>
                    <td><?= h($supplier->supplierContactNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('SupplierContactEmail') ?></th>
                    <td><?= h($supplier->supplierContactEmail) ?></td>
                </tr>
                <tr>
                    <th><?= __('SupplierID') ?></th>
                    <td><?= $this->Number->format($supplier->supplierID) ?></td>
                </tr>
                <tr>
                    <th><?= __('SupplierTravelRadius') ?></th>
                    <td><?= $this->Number->format($supplier->supplierTravelRadius) ?></td>
                </tr>
                <tr>
                    <th><?= __('SupplierMiniHour') ?></th>
                    <td><?= $this->Number->format($supplier->supplierMiniHour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
