<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 * @var string[]|\Cake\Collection\CollectionInterface $eventTypes
 * @var string[]|\Cake\Collection\CollectionInterface $events
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $supplier->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->id), 'class' => 'side-nav-item']
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
