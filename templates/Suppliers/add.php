<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 * @var \Cake\Collection\CollectionInterface|string[] $eventTypes
 * @var \Cake\Collection\CollectionInterface|string[] $events
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Suppliers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="suppliers form content">
            <?= $this->Form->create($supplier) ?>
            <fieldset>
                <legend><?= __('Add Supplier') ?></legend>
                <?php
                    echo $this->Form->control('supplier_type');
                    echo $this->Form->control('supplier_name');
                    echo $this->Form->control('supplier_address');
                    echo $this->Form->control('supplier_payrate');
                    echo $this->Form->control('supplier_contact_name');
                    echo $this->Form->control('supplier_contact_number');
                    echo $this->Form->control('supplier_email');
                    echo $this->Form->control('supplier_photo');
                    echo $this->Form->control('supplier_about_us');
                    echo $this->Form->control('event_types._ids', ['options' => $eventTypes]);
                    echo $this->Form->control('events._ids', ['options' => $events]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
