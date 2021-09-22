<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VenueAvailability $venueAvailability
 * @var \Cake\Collection\CollectionInterface|string[] $venues
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Venue Availability'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="venueAvailability form content">
            <?= $this->Form->create($venueAvailability) ?>
            <fieldset>
                <legend><?= __('Add Venue Availability') ?></legend>
                <?php
                    echo $this->Form->control('venue_id', ['options' => $venues]);
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
