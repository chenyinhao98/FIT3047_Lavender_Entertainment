<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SupplierSuburb[]|\Cake\Collection\CollectionInterface $supplierSuburb
 */
?>
<div class="supplierSuburb index content">
    <?= $this->Html->link(__('New Supplier Suburb'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Supplier Suburb') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('supplier_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($supplierSuburb as $supplierSuburb): ?>
                <tr>
                    <td><?= $this->Number->format($supplierSuburb->id) ?></td>
                    <td><?= $supplierSuburb->has('supplier') ? $this->Html->link($supplierSuburb->supplier->id, ['controller' => 'Suppliers', 'action' => 'view', $supplierSuburb->supplier->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $supplierSuburb->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supplierSuburb->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supplierSuburb->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplierSuburb->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
