<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Talent $talent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $talent->talentID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $talent->talentID), 'class' => 'side-nav-item']
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
                    echo $this->Form->control('id');
                    echo $this->Form->control('talent_type');
                    echo $this->Form->control('talent_name');
                    echo $this->Form->control('talent_address');
                    echo $this->Form->control('talent_travel_radius');
                    echo $this->Form->control('talent_payrate');
                    echo $this->Form->control('talent_min_hour');
                    echo $this->Form->control('talent_contact_name');
                    echo $this->Form->control('talent_contact_number');
                    echo $this->Form->control('talent_email');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
