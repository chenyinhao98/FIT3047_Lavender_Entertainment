<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Venue'), ['action' => 'edit', $venue->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Venue'), ['action' => 'delete', $venue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venue->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Venues'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Venue'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="venues view content">
            <h3><?= h($venue->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Venue Name') ?></th>
                    <td><?= h($venue->venue_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Address') ?></th>
                    <td><?= h($venue->venue_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Contact Name') ?></th>
                    <td><?= h($venue->venue_contact_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Contact Number') ?></th>
                    <td><?= h($venue->venue_contact_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Email') ?></th>
                    <td><?= h($venue->venue_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Photo1') ?></th>
                    <td><?= h($venue->venue_photo1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Photo2') ?></th>
                    <td><?= h($venue->venue_photo2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue About Us') ?></th>
                    <td><?= h($venue->venue_about_us) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($venue->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Min Capacity') ?></th>
                    <td><?= $this->Number->format($venue->venue_min_capacity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Payrate') ?></th>
                    <td><?= $this->Number->format($venue->venue_payrate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Rating') ?></th>
                    <td><?= $this->Number->format($venue->venue_rating) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Event Types') ?></h4>
                <?php if (!empty($venue->event_types)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Event Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($venue->event_types as $eventTypes) : ?>
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
                <?php if (!empty($venue->events)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Event Name') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Venue Id') ?></th>
                            <th><?= __('Event Attendance') ?></th>
                            <th><?= __('Event Date') ?></th>
                            <th><?= __('Event Type Id') ?></th>
                            <th><?= __('Event Startdate') ?></th>
                            <th><?= __('Event Enddate') ?></th>
                            <th><?= __('Payment Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($venue->events as $events) : ?>
                        <tr>
                            <td><?= h($events->id) ?></td>
                            <td><?= h($events->event_name) ?></td>
                            <td><?= h($events->customer_id) ?></td>
                            <td><?= h($events->venue_id) ?></td>
                            <td><?= h($events->event_attendance) ?></td>
                            <td><?= h($events->event_date) ?></td>
                            <td><?= h($events->event_type_id) ?></td>
                            <td><?= h($events->event_startdate) ?></td>
                            <td><?= h($events->event_enddate) ?></td>
                            <td><?= h($events->payment_id) ?></td>
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
        </div>
    </div>
</div>
