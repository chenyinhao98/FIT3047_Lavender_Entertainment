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
            <?= $this->Html->link(__('List Venues'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="venues form content">
            <?= $this->Form->create($venue) ?>
            <fieldset>
                <legend><?= __('Add Venue') ?></legend>
                <?php
                    echo $this->Form->control('venueName');
                    echo $this->Form->control('venueAddress');
                    echo $this->Form->control('venueMiniCap');
                    echo $this->Form->control('venuePreferred');
                    echo $this->Form->control('venuePPH');
                    echo $this->Form->control('venueMiniHour');
                    echo $this->Form->control('venueContactName');
                    echo $this->Form->control('venueContactNumber');
                    echo $this->Form->control('venueContactEmail');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
