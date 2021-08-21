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
                    <th><?= __('VenueName') ?></th>
                    <td><?= h($venue->venueName) ?></td>
                </tr>
                <tr>
                    <th><?= __('VenueAddress') ?></th>
                    <td><?= h($venue->venueAddress) ?></td>
                </tr>
                <tr>
                    <th><?= __('VenueMiniCap') ?></th>
                    <td><?= h($venue->venueMiniCap) ?></td>
                </tr>
                <tr>
                    <th><?= __('VenuePreferred') ?></th>
                    <td><?= h($venue->venuePreferred) ?></td>
                </tr>
                <tr>
                    <th><?= __('VenuePPH') ?></th>
                    <td><?= h($venue->venuePPH) ?></td>
                </tr>
                <tr>
                    <th><?= __('VenueContactName') ?></th>
                    <td><?= h($venue->venueContactName) ?></td>
                </tr>
                <tr>
                    <th><?= __('VenueContactNumber') ?></th>
                    <td><?= h($venue->venueContactNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('VenueContactEmail') ?></th>
                    <td><?= h($venue->venueContactEmail) ?></td>
                </tr>
                <tr>
                    <th><?= __('VenueID') ?></th>
                    <td><?= $this->Number->format($venue->venueID) ?></td>
                </tr>
                <tr>
                    <th><?= __('VenueMiniHour') ?></th>
                    <td><?= $this->Number->format($venue->venueMiniHour) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
