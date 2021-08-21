<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $event->eventID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $event->eventID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="events form content">
            <?= $this->Form->create($event) ?>
            <fieldset>
                <legend><?= __('Edit Event') ?></legend>
                <?php
                    echo $this->Form->control('customerID');
                    echo $this->Form->control('venueID');
                    echo $this->Form->control('eventAttendance');
                    echo $this->Form->control('eventDate');
                    echo $this->Form->control('eventType');
                    echo $this->Form->control('eventStartTime');
                    echo $this->Form->control('eventEndTime');
                    echo $this->Form->control('paymentID');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
