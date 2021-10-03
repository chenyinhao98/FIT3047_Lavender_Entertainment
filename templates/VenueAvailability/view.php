<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VenueAvailability $venueAvailability
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Venue Availability'), ['action' => 'edit', $venueAvailability->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Venue Availability'), ['action' => 'delete', $venueAvailability->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venueAvailability->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Venue Availability'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Venue Availability'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="venueAvailability view content">
            <h3><?= h($venueAvailability->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Venue') ?></th>
                    <td><?= $venueAvailability->has('venue') ? $this->Html->link($venueAvailability->venue->id, ['controller' => 'Venues', 'action' => 'view', $venueAvailability->venue->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($venueAvailability->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($venueAvailability->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($venueAvailability->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Avaliable') ?></th>
                    <td><?= $venueAvailability->avaliable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
