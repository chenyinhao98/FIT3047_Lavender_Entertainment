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
                    <th><?= __('Supplier Type') ?></th>
                    <td><?= h($supplier->supplier_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Name') ?></th>
                    <td><?= h($supplier->supplier_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Address') ?></th>
                    <td><?= h($supplier->supplier_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Payrate') ?></th>
                    <td><?= h($supplier->supplier_payrate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Contact Name') ?></th>
                    <td><?= h($supplier->supplier_contact_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Contact Number') ?></th>
                    <td><?= h($supplier->supplier_contact_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Email') ?></th>
                    <td><?= h($supplier->supplier_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($supplier->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Travel Radius') ?></th>
                    <td><?= $this->Number->format($supplier->supplier_travel_radius) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Min Hour') ?></th>
                    <td><?= $this->Number->format($supplier->supplier_min_hour) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Advertise Fee') ?></th>
                    <td><?= $this->Number->format($supplier->supplier_advertise_fee) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
