<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Talent $talent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Talent'), ['action' => 'edit', $talent->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Talent'), ['action' => 'delete', $talent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $talent->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Talents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Talent'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="talents view content">
            <h3><?= h($talent->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Talent Type') ?></th>
                    <td><?= h($talent->talent_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talent Name') ?></th>
                    <td><?= h($talent->talent_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talent Address') ?></th>
                    <td><?= h($talent->talent_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talent Contact Name') ?></th>
                    <td><?= h($talent->talent_contact_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talent Contact Number') ?></th>
                    <td><?= h($talent->talent_contact_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talent Email') ?></th>
                    <td><?= h($talent->talent_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talent Photo') ?></th>
                    <td><?= h($talent->talent_photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talent About Us') ?></th>
                    <td><?= h($talent->talent_about_us) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($talent->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Talent Payrate') ?></th>
                    <td><?= $this->Number->format($talent->talent_payrate) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Event Types') ?></h4>
                <?php if (!empty($talent->event_types)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Event Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($talent->event_types as $eventTypes) : ?>
                        <tr>
                            <td><?= h($eventTypes->id) ?></td>
                            <td><?= h($eventTypes->event_name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EventTypes', 'action' => 'view', $eventTypes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EventTypes', 'action' => 'edit', $eventTypes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'EventTypes', 'action' => 'delete', $eventTypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventTypes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Events') ?></h4>
                <?php if (!empty($talent->events)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Event Name') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Venue Id') ?></th>
                            <th><?= __('Event Attendance') ?></th>
                            <th><?= __('Event Type Id') ?></th>
                            <th><?= __('Event Startdate') ?></th>
                            <th><?= __('Event Enddate') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($talent->events as $events) : ?>
                        <tr>
                            <td><?= h($events->id) ?></td>
                            <td><?= h($events->event_name) ?></td>
                            <td><?= h($events->user_id) ?></td>
                            <td><?= h($events->venue_id) ?></td>
                            <td><?= h($events->event_attendance) ?></td>
                            <td><?= h($events->event_type_id) ?></td>
                            <td><?= h($events->event_startdate) ?></td>
                            <td><?= h($events->event_enddate) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Talent Availability') ?></h4>
                <?php if (!empty($talent->talent_availability)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Talent Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Avaliable') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($talent->talent_availability as $talentAvailability) : ?>
                        <tr>
                            <td><?= h($talentAvailability->id) ?></td>
                            <td><?= h($talentAvailability->talent_id) ?></td>
                            <td><?= h($talentAvailability->date) ?></td>
                            <td><?= h($talentAvailability->description) ?></td>
                            <td><?= h($talentAvailability->avaliable) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'TalentAvailability', 'action' => 'view', $talentAvailability->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'TalentAvailability', 'action' => 'edit', $talentAvailability->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TalentAvailability', 'action' => 'delete', $talentAvailability->id], ['confirm' => __('Are you sure you want to delete # {0}?', $talentAvailability->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Talent Suburb') ?></h4>
                <?php if (!empty($talent->talent_suburb)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Talent Id') ?></th>
                            <th><?= __('Suburb Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($talent->talent_suburb as $talentSuburb) : ?>
                        <tr>
                            <td><?= h($talentSuburb->id) ?></td>
                            <td><?= h($talentSuburb->talent_id) ?></td>
                            <td><?= h($talentSuburb->suburb_name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'TalentSuburb', 'action' => 'view', $talentSuburb->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'TalentSuburb', 'action' => 'edit', $talentSuburb->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'TalentSuburb', 'action' => 'delete', $talentSuburb->id], ['confirm' => __('Are you sure you want to delete # {0}?', $talentSuburb->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
