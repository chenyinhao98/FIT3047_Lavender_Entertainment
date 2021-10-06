<?php
/**
 * @var \App\View\AppView $this
<<<<<<< HEAD
 * @var \App\Model\Entity\ContactUsCm $ContactUsCm
=======
 * @var \App\Model\Entity\ContactUsCm $contactUsCm
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
<<<<<<< HEAD
            <?= $this->Html->link(__('Edit About Us Cm'), ['action' => 'edit', $ContactUsCm->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete About Us Cm'), ['action' => 'delete', $ContactUsCm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aboutUsCm->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List About Us Cms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New About Us Cm'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ContactUsCms view content">
            <h3><?= h($ContactUsCm->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Header 1') ?></th>
                    <td><?= h($ContactUsCm->header_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Body 1') ?></th>
                    <td><?= h($ContactUsCm->body_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ContactUsCm->id) ?></td>
                </tr>
=======
            <?= $this->Html->link(__('Edit Contact Us Cm'), ['action' => 'edit', $contactUsCm->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contact Us Cm'), ['action' => 'delete', $contactUsCm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactUsCm->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contact Us Cms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contact Us Cm'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contactUsCms view content">
            <h3><?= h($contactUsCm->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Header') ?></th>
                    <td><?= h($contactUsCm->header) ?></td>
                </tr>
                <tr>
                    <th><?= __('Body') ?></th>
                    <td><?= h($contactUsCm->body) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contactUsCm->id) ?></td>
                </tr>
            </table>
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
        </div>
    </div>
</div>
