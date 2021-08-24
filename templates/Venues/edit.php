<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $venue->venueID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $venue->venueID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Venues'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="venues form content">
            <?= $this->Form->create($venue) ?>
            <fieldset>
                <legend><?= __('Edit Venue') ?></legend>
                <?php
                    echo $this->Form->control('id');
                    echo $this->Form->control('venue_name');
                    echo $this->Form->control('venue_address');
                    echo $this->Form->control('venue_min_capacity');
                    echo $this->Form->control('venue_payrate');
                    echo $this->Form->control('venue_min_hour');
                    echo $this->Form->control('venue_contact_name');
                    echo $this->Form->control('venue_contact_number');
                    echo $this->Form->control('venue_email');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
