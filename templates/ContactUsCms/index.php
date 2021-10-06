<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactUsCm[]|\Cake\Collection\CollectionInterface $contactUsCms
 */
?>
<div class="contactUsCms index content">
    <?= $this->Html->link(__('New Contact Us Cm'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contact Us Cms') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('header') ?></th>
                    <th><?= $this->Paginator->sort('body') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contactUsCms as $contactUsCm): ?>
                <tr>
                    <td><?= $this->Number->format($contactUsCm->id) ?></td>
                    <td><?= h($contactUsCm->header) ?></td>
                    <td><?= h($contactUsCm->body) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contactUsCm->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contactUsCm->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contactUsCm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactUsCm->id)]) ?>
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
