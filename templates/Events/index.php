<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>
<div class="events index content">
    <?= $this->Html->link(__('New Event'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Events') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('eventID') ?></th>
                    <th><?= $this->Paginator->sort('customerID') ?></th>
                    <th><?= $this->Paginator->sort('venueID') ?></th>
                    <th><?= $this->Paginator->sort('eventAttendance') ?></th>
                    <th><?= $this->Paginator->sort('eventDate') ?></th>
                    <th><?= $this->Paginator->sort('eventType') ?></th>
                    <th><?= $this->Paginator->sort('eventStartTime') ?></th>
                    <th><?= $this->Paginator->sort('eventEndTime') ?></th>
                    <th><?= $this->Paginator->sort('paymentID') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $event): ?>
                <tr>
                    <td><?= $this->Number->format($event->eventID) ?></td>
                    <td><?= $this->Number->format($event->customerID) ?></td>
                    <td><?= $this->Number->format($event->venueID) ?></td>
                    <td><?= $this->Number->format($event->eventAttendance) ?></td>
                    <td><?= $this->Number->format($event->eventDate) ?></td>
                    <td><?= h($event->eventType) ?></td>
                    <td><?= h($event->eventStartTime) ?></td>
                    <td><?= h($event->eventEndTime) ?></td>
                    <td><?= $this->Number->format($event->paymentID) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $event->eventID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->eventID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->eventID], ['confirm' => __('Are you sure you want to delete # {0}?', $event->eventID)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
