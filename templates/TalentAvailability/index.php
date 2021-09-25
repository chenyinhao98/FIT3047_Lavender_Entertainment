<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TalentAvailability[]|\Cake\Collection\CollectionInterface $talentAvailability
 */
?>
<div class="talentAvailability index content">
    <?= $this->Html->link(__('New Talent Availability'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Talent Availability') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('talent_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('avaliable') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($talentAvailability as $talentAvailability): ?>
                <tr>
                    <td><?= $this->Number->format($talentAvailability->id) ?></td>
                    <td><?= $talentAvailability->has('talent') ? $this->Html->link($talentAvailability->talent->id, ['controller' => 'Talents', 'action' => 'view', $talentAvailability->talent->id]) : '' ?></td>
                    <td><?= h($talentAvailability->date) ?></td>
                    <td><?= h($talentAvailability->description) ?></td>
                    <td><?= h($talentAvailability->avaliable) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $talentAvailability->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $talentAvailability->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $talentAvailability->id], ['confirm' => __('Are you sure you want to delete # {0}?', $talentAvailability->id)]) ?>
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
