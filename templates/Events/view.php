<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->eventID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->eventID], ['confirm' => __('Are you sure you want to delete # {0}?', $event->eventID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Event'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="events view content">
            <h3><?= h($event->eventID) ?></h3>
            <table>
                <tr>
                    <th><?= __('EventType') ?></th>
                    <td><?= h($event->eventType) ?></td>
                </tr>
                <tr>
                    <th><?= __('EventID') ?></th>
                    <td><?= $this->Number->format($event->eventID) ?></td>
                </tr>
                <tr>
                    <th><?= __('CustomerID') ?></th>
                    <td><?= $this->Number->format($event->customerID) ?></td>
                </tr>
                <tr>
                    <th><?= __('VenueID') ?></th>
                    <td><?= $this->Number->format($event->venueID) ?></td>
                </tr>
                <tr>
                    <th><?= __('EventAttendance') ?></th>
                    <td><?= $this->Number->format($event->eventAttendance) ?></td>
                </tr>
                <tr>
                    <th><?= __('EventDate') ?></th>
                    <td><?= $this->Number->format($event->eventDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('PaymentID') ?></th>
                    <td><?= $this->Number->format($event->paymentID) ?></td>
                </tr>
                <tr>
                    <th><?= __('EventStartTime') ?></th>
                    <td><?= h($event->eventStartTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('EventEndTime') ?></th>
                    <td><?= h($event->eventEndTime) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
