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
                    echo $this->Form->control('talentCategory');
                    echo $this->Form->control('talentName');
                    echo $this->Form->control('talentPreferred');
                    echo $this->Form->control('talentAddress');
                    echo $this->Form->control('talentTravelRadius');
                    echo $this->Form->control('talentPPH');
                    echo $this->Form->control('talentMinHour');
                    echo $this->Form->control('talentContactName');
                    echo $this->Form->control('talentContactNumber');
                    echo $this->Form->control('talentContactEmail');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
