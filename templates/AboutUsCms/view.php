<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AboutUsCm $aboutUsCm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit About Us Cm'), ['action' => 'edit', $aboutUsCm->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete About Us Cm'), ['action' => 'delete', $aboutUsCm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aboutUsCm->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List About Us Cms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New About Us Cm'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aboutUsCms view content">
            <h3><?= h($aboutUsCm->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Section Header 1') ?></th>
                    <td><?= h($aboutUsCm->first_section_header_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Section Body 1') ?></th>
                    <td><?= h($aboutUsCm->first_section_body_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Section Photo 1') ?></th>
                    <td><?= h($aboutUsCm->first_section_photo_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Section Header 2') ?></th>
                    <td><?= h($aboutUsCm->first_section_header_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Section Body 2') ?></th>
                    <td><?= h($aboutUsCm->first_section_body_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Section Photo 2') ?></th>
                    <td><?= h($aboutUsCm->first_section_photo_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Section Header 3') ?></th>
                    <td><?= h($aboutUsCm->first_section_header_3) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Section Body 3') ?></th>
                    <td><?= h($aboutUsCm->first_section_body_3) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Section Photo 3') ?></th>
                    <td><?= h($aboutUsCm->first_section_photo_3) ?></td>
                </tr>
                <tr>
                    <th><?= __('What We Offer Photo') ?></th>
                    <td><?= h($aboutUsCm->what_we_offer_photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('What We Offer Body') ?></th>
                    <td><?= h($aboutUsCm->what_we_offer_body) ?></td>
                </tr>
                <tr>
                    <th><?= __('Annoucement Heading') ?></th>
                    <td><?= h($aboutUsCm->annoucement_heading) ?></td>
                </tr>
                <tr>
                    <th><?= __('Annoucment Body') ?></th>
                    <td><?= h($aboutUsCm->annoucment_body) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($aboutUsCm->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('What We Offer Dot 1') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aboutUsCm->what_we_offer_dot_1)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('What We Offer Dot 2') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aboutUsCm->what_we_offer_dot_2)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('What We Offer Dot 3') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aboutUsCm->what_we_offer_dot_3)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('What We Offer Dot 4') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aboutUsCm->what_we_offer_dot_4)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('What We Offer Dot 5') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aboutUsCm->what_we_offer_dot_5)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('What We Offer Dot 6') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aboutUsCm->what_we_offer_dot_6)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('What We Offer Dot 7') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aboutUsCm->what_we_offer_dot_7)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('What We Offer Dot 8') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aboutUsCm->what_we_offer_dot_8)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
