<?php
/**
<<<<<<< HEAD
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue[]|\Cake\Collection\CollectionInterface $venues
 */

echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block'=>true]);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Home</title>

    <!-- Custom fonts for this template-->
    <?= $this->Html->css('/vendor/fontawesome-free/css/all.min.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">


    <!-- Custom styles for this template-->
    <?= $this->Html->css(['sb-admin-2.min.css']) ?>
    <?= $this->Html->css(['/css/animate.css']) ?>
    <?= $this->Html->css(['/css/owl.carousel.min.css']) ?>
    <?= $this->Html->css(['/css/owl.theme.default.min.css']) ?>
    <?= $this->Html->css(['/css/magnific-popup.css']) ?>
    <?= $this->Html->css(['/css/bootstrap-datepicker.css']) ?>
    <?= $this->Html->css(['/css/jquery.timepicker.css']) ?>
    <?= $this->Html->css(['/css/flaticon.css']) ?>
    <?= $this->Html->css(['/css/style.css']) ?>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper" style="width:100%;">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" style=" background-image:linear-gradient(180deg, #a298fc 10%, #6f47bd 100%)" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-text mx-3 --white" style="color: white;">Admin Home</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">


        <!-- Nav Item - Venue Collapse Menu -->
        <li class="nav-item active">
            <a class="nav-link collapsed services-2" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-home"></i>
                <span>Venues</span>
            </a>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Venue Options:</h6>
                    <a style="color:#a298fc;" class="collapse-item active">View All Venues</a>
                    <?= $this->Html->link(__('Add New Venue'), ['controller'=>'Venues','action' => 'add'], ['class' => 'collapse-item']) ?>
                </div>
            </div>
        </li>

        <!-- Nav Item - Supplier Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSuppliers"
               aria-expanded="true" aria-controls="collapseSuppliers">
                <i class="fas fa-box-open"></i>
                <span>Suppliers</span>
            </a>
            <div id="collapseSuppliers" class="collapse" aria-labelledby="headingSuppliers"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Supplier Options:</h6>
                    <?= $this->Html->link(__('View All Suppliers'), ['controller'=> 'Suppliers','action' => 'index'], ['class' => 'collapse-item']) ?>
                    <?= $this->Html->link(__('Add New Supplier'), ['controller'=> 'Suppliers','action' => 'add'], ['class' => 'collapse-item']) ?>
                </div>
            </div>
        </li>

        <!-- Nav Item - Talent Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTalent"
               aria-expanded="true" aria-controls="collapseTalent">
                <i class="fas fa-user-friends"></i>
                <span>Talent</span>
            </a>
            <div id="collapseTalent" class="collapse" aria-labelledby="headingTalent"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Talent Options:</h6>
                    <?= $this->Html->link(__('View All Talent'), ['controller'=> 'Talents','action' => 'index'], ['class' => 'collapse-item']) ?>
                    <?= $this->Html->link(__('Add New Talents'), ['controller'=> 'Talents','action' => 'add'], ['class' => 'collapse-item']) ?>
                </div>
            </div>
        </li>

        <!-- Nav Item - Supplier Event Type Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEventTypes"
               aria-expanded="true" aria-controls="collapseEventTypes">
                <i class="fas fa-birthday-cake"></i>
                <span>Event Types</span>
            </a>
            <div id="collapseEventTypes" class="collapse" aria-labelledby="headingEventTypes"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Event Type Options:</h6>
                    <?= $this->Html->link(__('View All Event Types'), ['controller'=> 'EventTypes','action' => 'index'], ['class' => 'collapse-item']) ?>
                    <?= $this->Html->link(__('Add New Event Types'), ['controller'=> 'EventTypes','action' => 'add'], ['class' => 'collapse-item']) ?>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <hr class="topbar-divider">
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome Admin</span>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-black-50" style="font-family: Poppins, Arial, sans-serif; font-weight: bold; padding-left: 1%;" ><?= __('Venues') ?></h3></h1>
            </div>
            <div class="venues index content">
                <div class="table-responsive" style="padding-left: 1%; padding-right: 1%;">
                    <table class="table table-bordered" id="dataTable" width="100%" cellpadding="0">
                        <thead>
                        <tr style="font-size: 10px; padding: 0 !important; margin: 0 !important; ">
                            <th><?= $this->Paginator->sort('Venue Name') ?></th>
                            <th><?= $this->Paginator->sort('Address') ?></th>
                            <th><?= $this->Paginator->sort('Capacity') ?></th>
                            <th><?= $this->Paginator->sort('Hourly Rate') ?></th>
                            <th><?= $this->Paginator->sort('Rating') ?></th>
                            <th><?= $this->Paginator->sort('Contact Name') ?></th>
                            <th><?= $this->Paginator->sort('Contact Number') ?></th>
                            <th><?= $this->Paginator->sort('Email') ?></th>
                            <th><?= $this->Paginator->sort('Photo 1') ?></th>
                            <th><?= $this->Paginator->sort('Photo 2') ?></th>
                            <th><?= $this->Paginator->sort('About') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($venues as $venue): ?>
                            <tr style="font-size: 10px;">
                                <td><?= h($venue->venue_name) ?></td>
                                <td><?= h($venue->venue_address) ?></td>
                                <td><?= $this->Number->format($venue->venue_min_capacity) ?></td>
                                <td><?= $this->Number->format($venue->venue_payrate) ?></td>
                                <td><?= $this->Number->format($venue->venue_rating) ?></td>
                                <td><?= h($venue->venue_contact_name) ?></td>
                                <td><?= h($venue->venue_contact_number) ?></td>
                                <td><?= h($venue->venue_email) ?></td>
                                <td><?= h($venue->venue_photo1) ?></td>
                                <td><?= h($venue->venue_photo2) ?></td>
                                <td><?= h($venue->venue_about_us) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $venue->id]) ?> <br>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $venue->id]) ?> <br>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venue->id], ['confirm' => __('Are you sure you want to delete {0}?', $venue->venue_name)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container-fluid">
                <!-- content goes here !-->
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
            <br>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
<?= $this->fetch('script') ?>

    <script>
        $(document).ready(function(){
            $('#dataTable').DataTable();
        });
    </script>

</body>

</html>
=======
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

require 'webroot' . DIRECTORY_SEPARATOR . 'index.php';
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
