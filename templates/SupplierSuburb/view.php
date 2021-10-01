<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SupplierSuburb $supplierSuburb
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Supplier Suburb'), ['action' => 'edit', $supplierSuburb->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Supplier Suburb'), ['action' => 'delete', $supplierSuburb->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplierSuburb->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Supplier Suburb'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Supplier Suburb'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supplierSuburb view content">
            <h3><?= h($supplierSuburb->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Supplier') ?></th>
                    <td><?= $supplierSuburb->has('supplier') ? $this->Html->link($supplierSuburb->supplier->id, ['controller' => 'Suppliers', 'action' => 'view', $supplierSuburb->supplier->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($supplierSuburb->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Suburb Name') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($supplierSuburb->suburb_name)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
