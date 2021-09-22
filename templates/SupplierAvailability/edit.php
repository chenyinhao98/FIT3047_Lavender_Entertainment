<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SupplierAvailability $supplierAvailability
 * @var string[]|\Cake\Collection\CollectionInterface $suppliers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $supplierAvailability->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $supplierAvailability->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Supplier Availability'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supplierAvailability form content">
            <?= $this->Form->create($supplierAvailability) ?>
            <fieldset>
                <legend><?= __('Edit Supplier Availability') ?></legend>
                <?php
                    echo $this->Form->control('supplier_id', ['options' => $suppliers]);
                    echo $this->Form->control('date');
                    echo $this->Form->control('description');
                    echo $this->Form->control('avaliable');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
