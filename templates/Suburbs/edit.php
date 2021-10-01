<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Suburb $suburb
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $suburb->postcode],
                ['confirm' => __('Are you sure you want to delete # {0}?', $suburb->postcode), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Suburbs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="suburbs form content">
            <?= $this->Form->create($suburb) ?>
            <fieldset>
                <legend><?= __('Edit Suburb') ?></legend>
                <?php
                    echo $this->Form->control('subrub_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
