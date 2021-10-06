<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactUsCm $contactUsCm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contactUsCm->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contactUsCm->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Contact Us Cms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contactUsCms form content">
            <?= $this->Form->create($contactUsCm) ?>
            <fieldset>
                <legend><?= __('Edit Contact Us Cm') ?></legend>
                <?php
                    echo $this->Form->control('header');
                    echo $this->Form->control('body');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
