<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventType $eventType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Event Type'), ['action' => 'edit', $eventType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Event Type'), ['action' => 'delete', $eventType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Event Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Event Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="eventTypes view content">
            <h3><?= h($eventType->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Event Name') ?></th>
                    <td><?= h($eventType->event_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($eventType->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Venues') ?></h4>
                <?php if (!empty($eventType->venues)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Venue Name') ?></th>
                            <th><?= __('Venue Address') ?></th>
                            <th><?= __('Venue Min Capacity') ?></th>
                            <th><?= __('Venue Payrate') ?></th>
                            <th><?= __('Venue Min Hour') ?></th>
                            <th><?= __('Venue Contact Name') ?></th>
                            <th><?= __('Venue Contact Number') ?></th>
                            <th><?= __('Venue Email') ?></th>
                            <th><?= __('Venue Photo1') ?></th>
                            <th><?= __('Venue Photo2') ?></th>
                            <th><?= __('Venue About Us') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($eventType->venues as $venues) : ?>
                        <tr>
                            <td><?= h($venues->id) ?></td>
                            <td><?= h($venues->venue_name) ?></td>
                            <td><?= h($venues->venue_address) ?></td>
                            <td><?= h($venues->venue_min_capacity) ?></td>
                            <td><?= h($venues->venue_payrate) ?></td>
                            <td><?= h($venues->venue_min_hour) ?></td>
                            <td><?= h($venues->venue_contact_name) ?></td>
                            <td><?= h($venues->venue_contact_number) ?></td>
                            <td><?= h($venues->venue_email) ?></td>
                            <td><?= h($venues->venue_photo1) ?></td>
                            <td><?= h($venues->venue_photo2) ?></td>
                            <td><?= h($venues->venue_about_us) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Venues', 'action' => 'view', $venues->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Venues', 'action' => 'edit', $venues->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Venues', 'action' => 'delete', $venues->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venues->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Suppliers') ?></h4>
                <?php if (!empty($eventType->suppliers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Supplier Type') ?></th>
                            <th><?= __('Supplier Name') ?></th>
                            <th><?= __('Supplier Address') ?></th>
                            <th><?= __('Supplier Travel Radius') ?></th>
                            <th><?= __('Supplier Payrate') ?></th>
                            <th><?= __('Supplier Min Hour') ?></th>
                            <th><?= __('Supplier Advertise Fee') ?></th>
                            <th><?= __('Supplier Contact Name') ?></th>
                            <th><?= __('Supplier Contact Number') ?></th>
                            <th><?= __('Supplier Email') ?></th>
                            <th><?= __('Supplier Photo') ?></th>
                            <th><?= __('Supplier About Us') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($eventType->suppliers as $suppliers) : ?>
                        <tr>
                            <td><?= h($suppliers->id) ?></td>
                            <td><?= h($suppliers->supplier_type) ?></td>
                            <td><?= h($suppliers->supplier_name) ?></td>
                            <td><?= h($suppliers->supplier_address) ?></td>
                            <td><?= h($suppliers->supplier_travel_radius) ?></td>
                            <td><?= h($suppliers->supplier_payrate) ?></td>
                            <td><?= h($suppliers->supplier_min_hour) ?></td>
                            <td><?= h($suppliers->supplier_advertise_fee) ?></td>
                            <td><?= h($suppliers->supplier_contact_name) ?></td>
                            <td><?= h($suppliers->supplier_contact_number) ?></td>
                            <td><?= h($suppliers->supplier_email) ?></td>
                            <td><?= h($suppliers->supplier_photo) ?></td>
                            <td><?= h($suppliers->supplier_about_us) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Suppliers', 'action' => 'view', $suppliers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Suppliers', 'action' => 'edit', $suppliers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Suppliers', 'action' => 'delete', $suppliers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suppliers->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Talents') ?></h4>
                <?php if (!empty($eventType->talents)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Talent Type') ?></th>
                            <th><?= __('Talent Name') ?></th>
                            <th><?= __('Talent Address') ?></th>
                            <th><?= __('Talent Travel Radius') ?></th>
                            <th><?= __('Talent Payrate') ?></th>
                            <th><?= __('Talent Min Hour') ?></th>
                            <th><?= __('Talent Contact Name') ?></th>
                            <th><?= __('Talent Contact Number') ?></th>
                            <th><?= __('Talent Email') ?></th>
                            <th><?= __('Talent Photo') ?></th>
                            <th><?= __('Talent About Us') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($eventType->talents as $talents) : ?>
                        <tr>
                            <td><?= h($talents->id) ?></td>
                            <td><?= h($talents->talent_type) ?></td>
                            <td><?= h($talents->talent_name) ?></td>
                            <td><?= h($talents->talent_address) ?></td>
                            <td><?= h($talents->talent_travel_radius) ?></td>
                            <td><?= h($talents->talent_payrate) ?></td>
                            <td><?= h($talents->talent_min_hour) ?></td>
                            <td><?= h($talents->talent_contact_name) ?></td>
                            <td><?= h($talents->talent_contact_number) ?></td>
                            <td><?= h($talents->talent_email) ?></td>
                            <td><?= h($talents->talent_photo) ?></td>
                            <td><?= h($talents->talent_about_us) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Talents', 'action' => 'view', $talents->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Talents', 'action' => 'edit', $talents->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Talents', 'action' => 'delete', $talents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $talents->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Events') ?></h4>
                <?php if (!empty($eventType->events)) : ?>
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
                        <?php foreach ($eventType->events as $events) : ?>
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
