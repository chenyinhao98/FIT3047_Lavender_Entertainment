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
                    <th><?= $this->Paginator->sort('event_name') ?></th>
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
                    <td><?= h($event->event_name) ?></td>
                    <td><?= $event->has('customer') ? $this->Html->link($event->customer->id, ['controller' => 'Customers', 'action' => 'view', $event->customer->id]) : '' ?></td>
                    <td><?= $event->has('venue') ? $this->Html->link($event->venue->id, ['controller' => 'Venues', 'action' => 'view', $event->venue->id]) : '' ?></td>
                    <td><?= $this->Number->format($event->event_attendance) ?></td>
                    <td><?= $this->Number->format($event->event_date) ?></td>
                    <td><?= $event->has('event_type') ? $this->Html->link($event->event_type->id, ['controller' => 'EventTypes', 'action' => 'view', $event->event_type->id]) : '' ?></td>
                    <td><?= h($event->event_startdate) ?></td>
                    <td><?= h($event->event_enddate) ?></td>
                    <td><?= $event->has('payment') ? $this->Html->link($event->payment->id, ['controller' => 'Payments', 'action' => 'view', $event->payment->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
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
