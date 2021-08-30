<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Event'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="events view content">
            <h3><?= h($event->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Event Name') ?></th>
                    <td><?= h($event->event_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer') ?></th>
                    <td><?= $event->has('customer') ? $this->Html->link($event->customer->id, ['controller' => 'Customers', 'action' => 'view', $event->customer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue') ?></th>
                    <td><?= $event->has('venue') ? $this->Html->link($event->venue->id, ['controller' => 'Venues', 'action' => 'view', $event->venue->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Event Type') ?></th>
                    <td><?= $event->has('event_type') ? $this->Html->link($event->event_type->id, ['controller' => 'EventTypes', 'action' => 'view', $event->event_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment') ?></th>
                    <td><?= $event->has('payment') ? $this->Html->link($event->payment->id, ['controller' => 'Payments', 'action' => 'view', $event->payment->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($event->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Event Attendance') ?></th>
                    <td><?= $this->Number->format($event->event_attendance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Event Date') ?></th>
                    <td><?= $this->Number->format($event->event_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Event Startdate') ?></th>
                    <td><?= h($event->event_startdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Event Enddate') ?></th>
                    <td><?= h($event->event_enddate) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Suppliers') ?></h4>
                <?php if (!empty($event->suppliers)) : ?>
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
                        <?php foreach ($event->suppliers as $suppliers) : ?>
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
                <?php if (!empty($event->talents)) : ?>
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
                        <?php foreach ($event->talents as $talents) : ?>
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
        </div>
    </div>
</div>
