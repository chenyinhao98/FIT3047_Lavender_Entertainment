<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventType $eventType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $eventType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $eventType->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Event Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="eventTypes form content">
            <?= $this->Form->create($eventType) ?>
            <fieldset>
                <legend><?= __('Edit Event Type') ?></legend>
                <?php
                    echo $this->Form->control('event_name');
                    echo $this->Form->control('suppliers._ids', ['options' => $suppliers]);
                    echo $this->Form->control('talents._ids', ['options' => $talents]);
                    echo $this->Form->control('venues._ids', ['options' => $venues]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
