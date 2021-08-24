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
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($event->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Id') ?></th>
                    <td><?= $this->Number->format($event->customer_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Id') ?></th>
                    <td><?= $this->Number->format($event->venue_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Event Attendance') ?></th>
                    <td><?= $this->Number->format($event->event_attendance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Event Date') ?></th>
                    <td><?= $this->Number->format($event->event_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Event Type Id') ?></th>
                    <td><?= $this->Number->format($event->event_type_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Id') ?></th>
                    <td><?= $this->Number->format($event->payment_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Event Startdate') ?></th>
                    <td><?= h($event->event_startdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Event Enddate') ?></th>
                    <td><?= h($event->event_enddate) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
