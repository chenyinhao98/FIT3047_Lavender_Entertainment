<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SupplierAvailability[]|\Cake\Collection\CollectionInterface $supplierAvailability
 */
?>
<div class="supplierAvailability index content">
    <?= $this->Html->link(__('New Supplier Availability'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Supplier Availability') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('supplier_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('avaliable') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($supplierAvailability as $supplierAvailability): ?>
                <tr>
                    <td><?= $this->Number->format($supplierAvailability->id) ?></td>
                    <td><?= $supplierAvailability->has('supplier') ? $this->Html->link($supplierAvailability->supplier->id, ['controller' => 'Suppliers', 'action' => 'view', $supplierAvailability->supplier->id]) : '' ?></td>
                    <td><?= h($supplierAvailability->date) ?></td>
                    <td><?= h($supplierAvailability->description) ?></td>
                    <td><?= h($supplierAvailability->avaliable) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $supplierAvailability->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supplierAvailability->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supplierAvailability->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplierAvailability->id)]) ?>
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
