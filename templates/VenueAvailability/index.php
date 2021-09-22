<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VenueAvailability[]|\Cake\Collection\CollectionInterface $venueAvailability
 */
?>
<div class="venueAvailability index content">
    <?= $this->Html->link(__('New Venue Availability'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Venue Availability') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('venue_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('avaliable') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($venueAvailability as $venueAvailability): ?>
                <tr>
                    <td><?= $this->Number->format($venueAvailability->id) ?></td>
                    <td><?= $venueAvailability->has('venue') ? $this->Html->link($venueAvailability->venue->id, ['controller' => 'Venues', 'action' => 'view', $venueAvailability->venue->id]) : '' ?></td>
                    <td><?= h($venueAvailability->date) ?></td>
                    <td><?= h($venueAvailability->description) ?></td>
                    <td><?= h($venueAvailability->avaliable) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $venueAvailability->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $venueAvailability->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venueAvailability->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venueAvailability->id)]) ?>
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
