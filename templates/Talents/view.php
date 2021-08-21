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
            <?= $this->Html->link(__('Edit Talent'), ['action' => 'edit', $talent->talentID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Talent'), ['action' => 'delete', $talent->talentID], ['confirm' => __('Are you sure you want to delete # {0}?', $talent->talentID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Talents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Talent'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="talents view content">
            <h3><?= h($talent->talentID) ?></h3>
            <table>
                <tr>
                    <th><?= __('TalentCategory') ?></th>
                    <td><?= h($talent->talentCategory) ?></td>
                </tr>
                <tr>
                    <th><?= __('TalentName') ?></th>
                    <td><?= h($talent->talentName) ?></td>
                </tr>
                <tr>
                    <th><?= __('TalentPreferred') ?></th>
                    <td><?= h($talent->talentPreferred) ?></td>
                </tr>
                <tr>
                    <th><?= __('TalentAddress') ?></th>
                    <td><?= h($talent->talentAddress) ?></td>
                </tr>
                <tr>
                    <th><?= __('TalentPPH') ?></th>
                    <td><?= h($talent->talentPPH) ?></td>
                </tr>
                <tr>
                    <th><?= __('TalentContactName') ?></th>
                    <td><?= h($talent->talentContactName) ?></td>
                </tr>
                <tr>
                    <th><?= __('TalentContactNumber') ?></th>
                    <td><?= h($talent->talentContactNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('TalentContactEmail') ?></th>
                    <td><?= h($talent->talentContactEmail) ?></td>
                </tr>
                <tr>
                    <th><?= __('TalentID') ?></th>
                    <td><?= $this->Number->format($talent->talentID) ?></td>
                </tr>
                <tr>
                    <th><?= __('TalentTravelRadius') ?></th>
                    <td><?= $this->Number->format($talent->talentTravelRadius) ?></td>
                </tr>
                <tr>
                    <th><?= __('TalentMinHour') ?></th>
                    <td><?= $this->Number->format($talent->talentMinHour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
