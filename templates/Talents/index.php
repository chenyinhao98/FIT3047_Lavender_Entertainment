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
                    <th><?= $this->Paginator->sort('talentID') ?></th>
                    <th><?= $this->Paginator->sort('talentCategory') ?></th>
                    <th><?= $this->Paginator->sort('talentName') ?></th>
                    <th><?= $this->Paginator->sort('talentPreferred') ?></th>
                    <th><?= $this->Paginator->sort('talentAddress') ?></th>
                    <th><?= $this->Paginator->sort('talentTravelRadius') ?></th>
                    <th><?= $this->Paginator->sort('talentPPH') ?></th>
                    <th><?= $this->Paginator->sort('talentMinHour') ?></th>
                    <th><?= $this->Paginator->sort('talentContactName') ?></th>
                    <th><?= $this->Paginator->sort('talentContactNumber') ?></th>
                    <th><?= $this->Paginator->sort('talentContactEmail') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($talents as $talent): ?>
                <tr>
                    <td><?= $this->Number->format($talent->talentID) ?></td>
                    <td><?= h($talent->talentCategory) ?></td>
                    <td><?= h($talent->talentName) ?></td>
                    <td><?= h($talent->talentPreferred) ?></td>
                    <td><?= h($talent->talentAddress) ?></td>
                    <td><?= $this->Number->format($talent->talentTravelRadius) ?></td>
                    <td><?= h($talent->talentPPH) ?></td>
                    <td><?= $this->Number->format($talent->talentMinHour) ?></td>
                    <td><?= h($talent->talentContactName) ?></td>
                    <td><?= h($talent->talentContactNumber) ?></td>
                    <td><?= h($talent->talentContactEmail) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $talent->talentID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $talent->talentID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $talent->talentID], ['confirm' => __('Are you sure you want to delete # {0}?', $talent->talentID)]) ?>
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
