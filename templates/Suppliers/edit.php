<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $supplier->supplierID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->supplierID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Suppliers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="suppliers form content">
            <?= $this->Form->create($supplier) ?>
            <fieldset>
                <legend><?= __('Edit Supplier') ?></legend>
                <?php
                    echo $this->Form->control('supplierCategory');
                    echo $this->Form->control('supplierName');
                    echo $this->Form->control('supplierPreferred');
                    echo $this->Form->control('supplierAddress');
                    echo $this->Form->control('supplierTravelRadius');
                    echo $this->Form->control('supplierPPH');
                    echo $this->Form->control('supplierMiniHour');
                    echo $this->Form->control('supplierContactName');
                    echo $this->Form->control('supplierContactNumber');
                    echo $this->Form->control('supplierContactEmail');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
