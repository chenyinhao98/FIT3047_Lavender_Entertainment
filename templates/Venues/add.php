<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 * @var \Cake\Collection\CollectionInterface|string[] $eventTypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Venues'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="venues form content">
            <?= $this->Form->create($venue) ?>
            <fieldset>
                <legend><?= __('Add Venue') ?></legend>
                <?php
                    echo $this->Form->control('venue_name');
                    echo $this->Form->control('venue_address');
                    echo $this->Form->control('venue_min_capacity');
                    echo $this->Form->control('venue_payrate');
                    echo $this->Form->control('venue_rating');
                    echo $this->Form->control('venue_contact_name');
                    echo $this->Form->control('venue_contact_number');
                    echo $this->Form->control('venue_email');
                    echo $this->Form->control('venue_photo1');
                    echo $this->Form->control('venue_photo2');
                    echo $this->Form->control('venue_about_us');
                    echo $this->Form->control('event_types._ids', ['options' => $eventTypes]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
