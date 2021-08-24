<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier[]|\Cake\Collection\CollectionInterface $suppliers
 */
?>
<div class="suppliers index content">
    <?= $this->Html->link(__('New Supplier'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Suppliers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('supplier_type') ?></th>
                    <th><?= $this->Paginator->sort('supplier_name') ?></th>
                    <th><?= $this->Paginator->sort('supplier_address') ?></th>
                    <th><?= $this->Paginator->sort('supplier_travel_radius') ?></th>
                    <th><?= $this->Paginator->sort('supplier_payrate') ?></th>
                    <th><?= $this->Paginator->sort('supplier_min_hour') ?></th>
                    <th><?= $this->Paginator->sort('supplier_advertise_fee') ?></th>
                    <th><?= $this->Paginator->sort('supplier_contact_name') ?></th>
                    <th><?= $this->Paginator->sort('supplier_contact_number') ?></th>
                    <th><?= $this->Paginator->sort('supplier_email') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($suppliers as $supplier): ?>
                <tr>
                    <td><?= $this->Number->format($supplier->id) ?></td>
                    <td><?= h($supplier->supplier_type) ?></td>
                    <td><?= h($supplier->supplier_name) ?></td>
                    <td><?= h($supplier->supplier_address) ?></td>
                    <td><?= $this->Number->format($supplier->supplier_travel_radius) ?></td>
                    <td><?= h($supplier->supplier_payrate) ?></td>
                    <td><?= $this->Number->format($supplier->supplier_min_hour) ?></td>
                    <td><?= $this->Number->format($supplier->supplier_advertise_fee) ?></td>
                    <td><?= h($supplier->supplier_contact_name) ?></td>
                    <td><?= h($supplier->supplier_contact_number) ?></td>
                    <td><?= h($supplier->supplier_email) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $supplier->supplierID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supplier->supplierID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supplier->supplierID], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->supplierID)]) ?>
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
