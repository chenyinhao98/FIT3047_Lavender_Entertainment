<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 * @var \Cake\Collection\CollectionInterface|string[] $customers
 * @var \Cake\Collection\CollectionInterface|string[] $venues
 * @var \Cake\Collection\CollectionInterface|string[] $eventTypes
 * @var \Cake\Collection\CollectionInterface|string[] $payments
 * @var \Cake\Collection\CollectionInterface|string[] $suppliers
 * @var \Cake\Collection\CollectionInterface|string[] $talents
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="events form content">
            <?= $this->Form->create($event) ?>
            <fieldset>
                <legend><?= __('Add Event') ?></legend>
                <?php
                    echo $this->Form->control('event_name');
                    echo $this->Form->control('customer_id', ['options' => $customers]);
                    echo $this->Form->control('venue_id', ['options' => $venues]);
                    echo $this->Form->control('event_attendance');
                    echo $this->Form->control('event_date');
                    echo $this->Form->control('event_type_id', ['options' => $eventTypes]);
                    echo $this->Form->control('event_startdate');
                    echo $this->Form->control('event_enddate');
                    echo $this->Form->control('payment_id', ['options' => $payments]);
                    echo $this->Form->control('suppliers._ids', ['options' => $suppliers]);
                    echo $this->Form->control('talents._ids', ['options' => $talents]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
