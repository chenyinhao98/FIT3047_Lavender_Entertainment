<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Venue'), ['action' => 'edit', $venue->venueID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Venue'), ['action' => 'delete', $venue->venueID], ['confirm' => __('Are you sure you want to delete # {0}?', $venue->venueID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Venues'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Venue'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="venues view content">
            <h3><?= h($venue->venueID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Venue Name') ?></th>
                    <td><?= h($venue->venue_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Address') ?></th>
                    <td><?= h($venue->venue_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Min Capacity') ?></th>
                    <td><?= h($venue->venue_min_capacity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Contact Name') ?></th>
                    <td><?= h($venue->venue_contact_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Contact Number') ?></th>
                    <td><?= h($venue->venue_contact_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Email') ?></th>
                    <td><?= h($venue->venue_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($venue->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Payrate') ?></th>
                    <td><?= $this->Number->format($venue->venue_payrate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Min Hour') ?></th>
                    <td><?= $this->Number->format($venue->venue_min_hour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
