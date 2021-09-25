<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TalentAvailability $talentAvailability
 * @var string[]|\Cake\Collection\CollectionInterface $talents
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $talentAvailability->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $talentAvailability->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Talent Availability'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="talentAvailability form content">
            <?= $this->Form->create($talentAvailability) ?>
            <fieldset>
                <legend><?= __('Edit Talent Availability') ?></legend>
                <?php
                    echo $this->Form->control('talent_id', ['options' => $talents]);
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
