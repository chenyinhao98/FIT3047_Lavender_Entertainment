<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventType[]|\Cake\Collection\CollectionInterface $eventTypes
 */
?>
<div class="eventTypes index content">
    <?= $this->Html->link(__('New Event Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Event Types') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('event_name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($eventTypes as $eventType): ?>
                <tr>
                    <td><?= $this->Number->format($eventType->id) ?></td>
                    <td><?= $this->Number->format($eventType->event_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $eventType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $eventType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $eventType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventType->id)]) ?>
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
