<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactUsCm $ContactUsCm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
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
        </div>
    </div>
</div>
