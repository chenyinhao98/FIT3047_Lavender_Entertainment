<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SupplierSuburb $supplierSuburb
 * @var \Cake\Collection\CollectionInterface|string[] $suppliers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Supplier Suburb'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supplierSuburb form content">
            <?= $this->Form->create($supplierSuburb) ?>
            <fieldset>
                <legend><?= __('Add Supplier Suburb') ?></legend>
                <?php
                    echo $this->Form->control('supplier_id', ['options' => $suppliers]);
                    echo $this->Form->control('suburb_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
