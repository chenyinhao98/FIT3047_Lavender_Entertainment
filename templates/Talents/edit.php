<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Talent $talent
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
                ['action' => 'delete', $talent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $talent->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Talents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="talents form content">
            <?= $this->Form->create($talent) ?>
            <fieldset>
                <legend><?= __('Edit Talent') ?></legend>
                <?php
                    echo $this->Form->control('talent_type');
                    echo $this->Form->control('talent_name');
                    echo $this->Form->control('talent_address');
                    echo $this->Form->control('talent_payrate');
                    echo $this->Form->control('talent_contact_name');
                    echo $this->Form->control('talent_contact_number');
                    echo $this->Form->control('talent_email');
                    echo $this->Form->control('talent_photo');
                    echo $this->Form->control('talent_about_us');
                    echo $this->Form->control('event_types._ids', ['options' => $eventTypes]);
                    echo $this->Form->control('events._ids', ['options' => $events]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
