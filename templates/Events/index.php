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
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('customer_id') ?></th>
                    <th><?= $this->Paginator->sort('venue_id') ?></th>
                    <th><?= $this->Paginator->sort('event_attendance') ?></th>
                    <th><?= $this->Paginator->sort('event_date') ?></th>
                    <th><?= $this->Paginator->sort('event_type_id') ?></th>
                    <th><?= $this->Paginator->sort('event_startdate') ?></th>
                    <th><?= $this->Paginator->sort('event_enddate') ?></th>
                    <th><?= $this->Paginator->sort('payment_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $event): ?>
                <tr>
                    <td><?= $this->Number->format($event->id) ?></td>
                    <td><?= $this->Number->format($event->customer_id) ?></td>
                    <td><?= $this->Number->format($event->venue_id) ?></td>
                    <td><?= $this->Number->format($event->event_attendance) ?></td>
                    <td><?= $this->Number->format($event->event_date) ?></td>
                    <td><?= $this->Number->format($event->event_type_id) ?></td>
                    <td><?= h($event->event_startdate) ?></td>
                    <td><?= h($event->event_enddate) ?></td>
                    <td><?= $this->Number->format($event->payment_id) ?></td>
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
