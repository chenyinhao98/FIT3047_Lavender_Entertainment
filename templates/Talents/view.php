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
                    <th><?= __('Talent Type') ?></th>
                    <td><?= h($talent->talent_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talent Name') ?></th>
                    <td><?= h($talent->talent_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talent Address') ?></th>
                    <td><?= h($talent->talent_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talent Contact Name') ?></th>
                    <td><?= h($talent->talent_contact_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talent Contact Number') ?></th>
                    <td><?= h($talent->talent_contact_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talent Email') ?></th>
                    <td><?= h($talent->talent_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($talent->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talent Travel Radius') ?></th>
                    <td><?= $this->Number->format($talent->talent_travel_radius) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talent Payrate') ?></th>
                    <td><?= $this->Number->format($talent->talent_payrate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talent Min Hour') ?></th>
                    <td><?= $this->Number->format($talent->talent_min_hour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
