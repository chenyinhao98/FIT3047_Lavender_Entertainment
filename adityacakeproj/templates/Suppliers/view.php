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
            <?= $this->Html->link(__('Edit Supplier'), ['action' => 'edit', $supplier->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Supplier'), ['action' => 'delete', $supplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Suppliers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Supplier'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="suppliers view content">
            <h3><?= h($supplier->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Supplier Type') ?></th>
                    <td><?= h($supplier->supplier_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Name') ?></th>
                    <td><?= h($supplier->supplier_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Address') ?></th>
                    <td><?= h($supplier->supplier_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Payrate') ?></th>
                    <td><?= h($supplier->supplier_payrate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Contact Name') ?></th>
                    <td><?= h($supplier->supplier_contact_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Contact Number') ?></th>
                    <td><?= h($supplier->supplier_contact_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Email') ?></th>
                    <td><?= h($supplier->supplier_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Photo') ?></th>
                    <td><?= h($supplier->supplier_photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier About Us') ?></th>
                    <td><?= h($supplier->supplier_about_us) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($supplier->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Travel Radius') ?></th>
                    <td><?= $this->Number->format($supplier->supplier_travel_radius) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Min Hour') ?></th>
                    <td><?= $this->Number->format($supplier->supplier_min_hour) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Advertise Fee') ?></th>
                    <td><?= $this->Number->format($supplier->supplier_advertise_fee) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Event Types') ?></h4>
                <?php if (!empty($supplier->event_types)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Event Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($supplier->event_types as $eventTypes) : ?>
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
                <?php if (!empty($supplier->events)) : ?>
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
                        <?php foreach ($supplier->events as $events) : ?>
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
