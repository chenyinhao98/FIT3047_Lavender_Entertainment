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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $supplier->supplierID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->supplierID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Suppliers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="suppliers form content">
            <?= $this->Form->create($supplier) ?>
            <fieldset>
                <legend><?= __('Edit Supplier') ?></legend>
                <?php
                    echo $this->Form->control('id');
                    echo $this->Form->control('supplier_type');
                    echo $this->Form->control('supplier_name');
                    echo $this->Form->control('supplier_address');
                    echo $this->Form->control('supplier_travel_radius');
                    echo $this->Form->control('supplier_payrate');
                    echo $this->Form->control('supplier_min_hour');
                    echo $this->Form->control('supplier_advertise_fee');
                    echo $this->Form->control('supplier_contact_name');
                    echo $this->Form->control('supplier_contact_number');
                    echo $this->Form->control('supplier_email');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
