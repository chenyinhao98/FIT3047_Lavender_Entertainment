<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TalentAvailability $talentAvailability
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Talent Availability'), ['action' => 'edit', $talentAvailability->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Talent Availability'), ['action' => 'delete', $talentAvailability->id], ['confirm' => __('Are you sure you want to delete # {0}?', $talentAvailability->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Talent Availability'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Talent Availability'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="talentAvailability view content">
            <h3><?= h($talentAvailability->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Talent') ?></th>
                    <td><?= $talentAvailability->has('talent') ? $this->Html->link($talentAvailability->talent->id, ['controller' => 'Talents', 'action' => 'view', $talentAvailability->talent->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($talentAvailability->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($talentAvailability->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($talentAvailability->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Avaliable') ?></th>
                    <td><?= $talentAvailability->avaliable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
