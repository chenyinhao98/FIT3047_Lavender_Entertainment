<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactUsCm[]|\Cake\Collection\CollectionInterface $ContactUsCms
 */
?>
<div class="aboutUsCms index content">
    <?= $this->Html->link(__('New Contact Us Cms'), ['action' => 'edit',1], ['class' => 'button float-right']) ?>
    <h3><?= __('Contact Us Cms') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('header_1') ?></th>
                    <th><?= $this->Paginator->sort('body_1') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ContactUsCms as $ContactUsCm): ?>
                <tr>
                    <td><?= $this->Number->format($ContactUsCm->id) ?></td>
                    <td><?= h($ContactUsCm->header_1) ?></td>
                    <td><?= h($ContactUsCm->body_1) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ContactUsCm->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ContactUsCm->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ContactUsCm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ContactUsCm->id)]) ?>
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
