<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers view content">
            <h3><?= h($customer->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Customer Firstname') ?></th>
                    <td><?= h($customer->customer_firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Secondname') ?></th>
                    <td><?= h($customer->customer_secondname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Email') ?></th>
                    <td><?= h($customer->customer_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Phone') ?></th>
                    <td><?= h($customer->customer_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($customer->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Events') ?></h4>
                <?php if (!empty($customer->events)) : ?>
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
                        <?php foreach ($customer->events as $events) : ?>
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
