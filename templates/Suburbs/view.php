<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Suburb $suburb
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Suburb'), ['action' => 'edit', $suburb->postcode], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Suburb'), ['action' => 'delete', $suburb->postcode], ['confirm' => __('Are you sure you want to delete # {0}?', $suburb->postcode), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Suburbs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Suburb'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="suburbs view content">
            <h3><?= h($suburb->postcode) ?></h3>
            <table>
                <tr>
                    <th><?= __('Postcode') ?></th>
                    <td><?= $this->Number->format($suburb->postcode) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Subrub Name') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($suburb->subrub_name)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
