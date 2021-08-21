<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue[]|\Cake\Collection\CollectionInterface $venues
 */
?>
<div class="venues index content">
    <?= $this->Html->link(__('New Venue'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Venues') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('venueID') ?></th>
                    <th><?= $this->Paginator->sort('venueName') ?></th>
                    <th><?= $this->Paginator->sort('venueAddress') ?></th>
                    <th><?= $this->Paginator->sort('venueMiniCap') ?></th>
                    <th><?= $this->Paginator->sort('venuePreferred') ?></th>
                    <th><?= $this->Paginator->sort('venuePPH') ?></th>
                    <th><?= $this->Paginator->sort('venueMiniHour') ?></th>
                    <th><?= $this->Paginator->sort('venueContactName') ?></th>
                    <th><?= $this->Paginator->sort('venueContactNumber') ?></th>
                    <th><?= $this->Paginator->sort('venueContactEmail') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($venues as $venue): ?>
                <tr>
                    <td><?= $this->Number->format($venue->venueID) ?></td>
                    <td><?= h($venue->venueName) ?></td>
                    <td><?= h($venue->venueAddress) ?></td>
                    <td><?= h($venue->venueMiniCap) ?></td>
                    <td><?= h($venue->venuePreferred) ?></td>
                    <td><?= h($venue->venuePPH) ?></td>
                    <td><?= $this->Number->format($venue->venueMiniHour) ?></td>
                    <td><?= h($venue->venueContactName) ?></td>
                    <td><?= h($venue->venueContactNumber) ?></td>
                    <td><?= h($venue->venueContactEmail) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $venue->venueID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $venue->venueID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venue->venueID], ['confirm' => __('Are you sure you want to delete # {0}?', $venue->venueID)]) ?>
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
