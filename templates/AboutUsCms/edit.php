<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AboutUsCm $aboutUsCm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aboutUsCm->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aboutUsCm->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List About Us Cms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aboutUsCms form content">
            <?= $this->Form->create($aboutUsCm) ?>
            <fieldset>
                <legend><?= __('Edit About Us Cm') ?></legend>
                <?php
                    echo $this->Form->control('first_section_header_1');
                    echo $this->Form->control('first_section_body_1');
                    echo $this->Form->control('first_section_photo_1');
                    echo $this->Form->control('first_section_header_2');
                    echo $this->Form->control('first_section_body_2');
                    echo $this->Form->control('first_section_photo_2');
                    echo $this->Form->control('first_section_header_3');
                    echo $this->Form->control('first_section_body_3');
                    echo $this->Form->control('first_section_photo_3');
                    echo $this->Form->control('what_we_offer_photo');
                    echo $this->Form->control('what_we_offer_body');
                    echo $this->Form->control('what_we_offer_dot_1');
                    echo $this->Form->control('what_we_offer_dot_2');
                    echo $this->Form->control('what_we_offer_dot_3');
                    echo $this->Form->control('what_we_offer_dot_4');
                    echo $this->Form->control('what_we_offer_dot_5');
                    echo $this->Form->control('what_we_offer_dot_6');
                    echo $this->Form->control('what_we_offer_dot_7');
                    echo $this->Form->control('what_we_offer_dot_8');
                    echo $this->Form->control('annoucement_heading');
                    echo $this->Form->control('annoucment_body');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
