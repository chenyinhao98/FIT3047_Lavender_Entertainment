<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Talent[]|\Cake\Collection\CollectionInterface $talents
 */
?>
<div class="talents index content">
    <?= $this->Html->link(__('New Talent'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Talents') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('talent_type') ?></th>
                    <th><?= $this->Paginator->sort('talent_name') ?></th>
                    <th><?= $this->Paginator->sort('talent_address') ?></th>
                    <th><?= $this->Paginator->sort('talent_travel_radius') ?></th>
                    <th><?= $this->Paginator->sort('talent_payrate') ?></th>
                    <th><?= $this->Paginator->sort('talent_min_hour') ?></th>
                    <th><?= $this->Paginator->sort('talent_contact_name') ?></th>
                    <th><?= $this->Paginator->sort('talent_contact_number') ?></th>
                    <th><?= $this->Paginator->sort('talent_email') ?></th>
                    <th><?= $this->Paginator->sort('talent_about_us') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($talents as $talent): ?>
                <tr>
                    <td><?= $this->Number->format($talent->id) ?></td>
                    <td><?= h($talent->talent_type) ?></td>
                    <td><?= h($talent->talent_name) ?></td>
                    <td><?= h($talent->talent_address) ?></td>
                    <td><?= $this->Number->format($talent->talent_travel_radius) ?></td>
                    <td><?= $this->Number->format($talent->talent_payrate) ?></td>
                    <td><?= $this->Number->format($talent->talent_min_hour) ?></td>
                    <td><?= h($talent->talent_contact_name) ?></td>
                    <td><?= h($talent->talent_contact_number) ?></td>
                    <td><?= h($talent->talent_email) ?></td>
                    <td><?= h($talent->talent_about_us) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $talent->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $talent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $talent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $talent->id)]) ?>
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
