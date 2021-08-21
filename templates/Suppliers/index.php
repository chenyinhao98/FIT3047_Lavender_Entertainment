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
                    <th><?= $this->Paginator->sort('supplierID') ?></th>
                    <th><?= $this->Paginator->sort('supplierCategory') ?></th>
                    <th><?= $this->Paginator->sort('supplierName') ?></th>
                    <th><?= $this->Paginator->sort('supplierPreferred') ?></th>
                    <th><?= $this->Paginator->sort('supplierAddress') ?></th>
                    <th><?= $this->Paginator->sort('supplierTravelRadius') ?></th>
                    <th><?= $this->Paginator->sort('supplierPPH') ?></th>
                    <th><?= $this->Paginator->sort('supplierMiniHour') ?></th>
                    <th><?= $this->Paginator->sort('supplierContactName') ?></th>
                    <th><?= $this->Paginator->sort('supplierContactNumber') ?></th>
                    <th><?= $this->Paginator->sort('supplierContactEmail') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($suppliers as $supplier): ?>
                <tr>
                    <td><?= $this->Number->format($supplier->supplierID) ?></td>
                    <td><?= h($supplier->supplierCategory) ?></td>
                    <td><?= h($supplier->supplierName) ?></td>
                    <td><?= h($supplier->supplierPreferred) ?></td>
                    <td><?= h($supplier->supplierAddress) ?></td>
                    <td><?= $this->Number->format($supplier->supplierTravelRadius) ?></td>
                    <td><?= h($supplier->supplierPPH) ?></td>
                    <td><?= $this->Number->format($supplier->supplierMiniHour) ?></td>
                    <td><?= h($supplier->supplierContactName) ?></td>
                    <td><?= h($supplier->supplierContactNumber) ?></td>
                    <td><?= h($supplier->supplierContactEmail) ?></td>
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
