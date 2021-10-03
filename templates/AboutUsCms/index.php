<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AboutUsCm[]|\Cake\Collection\CollectionInterface $aboutUsCms
 */
?>
<div class="aboutUsCms index content">
    <?= $this->Html->link(__('New About Us Cms'), ['action' => 'edit',1], ['class' => 'button float-right']) ?>
    <h3><?= __('About Us Cms') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('first_section_header_1') ?></th>
                    <th><?= $this->Paginator->sort('first_section_body_1') ?></th>
                    <th><?= $this->Paginator->sort('first_section_photo_1') ?></th>
                    <th><?= $this->Paginator->sort('first_section_header_2') ?></th>
                    <th><?= $this->Paginator->sort('first_section_body_2') ?></th>
                    <th><?= $this->Paginator->sort('first_section_photo_2') ?></th>
                    <th><?= $this->Paginator->sort('first_section_header_3') ?></th>
                    <th><?= $this->Paginator->sort('first_section_body_3') ?></th>
                    <th><?= $this->Paginator->sort('first_section_photo_3') ?></th>
                    <th><?= $this->Paginator->sort('what_we_offer_photo') ?></th>
                    <th><?= $this->Paginator->sort('what_we_offer_body') ?></th>
                    <th><?= $this->Paginator->sort('annoucement_heading') ?></th>
                    <th><?= $this->Paginator->sort('annoucment_body') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aboutUsCms as $aboutUsCm): ?>
                <tr>
                    <td><?= $this->Number->format($aboutUsCm->id) ?></td>
                    <td><?= h($aboutUsCm->first_section_header_1) ?></td>
                    <td><?= h($aboutUsCm->first_section_body_1) ?></td>
                    <td><?= @$this->Html->image($aboutUsCm->first_section_photo_1)?></td>
                    <td><?= h($aboutUsCm->first_section_header_2) ?></td>
                    <td><?= h($aboutUsCm->first_section_body_2) ?></td>
                    <td><?= @$this->Html->image($aboutUsCm->first_section_photo_2)?></td>
                    <td><?= h($aboutUsCm->first_section_header_3) ?></td>
                    <td><?= h($aboutUsCm->first_section_body_3) ?></td>
                    <td><?= @$this->Html->image($aboutUsCm->first_section_photo_3)?></td>
                    <td><?= @$this->Html->image($aboutUsCm->what_we_offer_photo) ?></td>
                    <td><?= h($aboutUsCm->what_we_offer_body) ?></td>
                    <td><?= h($aboutUsCm->annoucement_heading) ?></td>
                    <td><?= h($aboutUsCm->annoucment_body) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aboutUsCm->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aboutUsCm->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aboutUsCm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aboutUsCm->id)]) ?>
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
