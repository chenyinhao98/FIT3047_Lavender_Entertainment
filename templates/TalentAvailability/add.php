<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TalentAvailability $talentAvailability
 * @var \Cake\Collection\CollectionInterface|string[] $talents
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Talent Availability'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="talentAvailability form content">
            <?= $this->Form->create($talentAvailability) ?>
            <fieldset>
                <legend><?= __('Add Talent Availability') ?></legend>
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
