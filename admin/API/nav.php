    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once('API/slideBar.php'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once('API/topBar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <?php
                        require_once('API/ear.php');
                        ?>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Bill</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?=  $Total?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Earnings(monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?=  $Totals . "VND" ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Earnings(yearly)
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=  $Totals . "VND" ?></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Products</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=   $numder ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <?php
                        require_once('API/ear.php');
                        ?>

                        <!-- Approach -->
                        <?php //require_once("./ARU.php")
                        ?>

                        <?php //require_once("./update.php")
                        ?>

                        <div class="p-3 bg-white rounded">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="text-uppercase">Product Management</h1>
                                    <a href="ARU.php" class="btn btn-primary">Add Item</a>


                                </div>
                                <div class="col-md-6 text-right mt-3">

                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Size</th>
                                                <th>Price</th>
                                                <th>Detail</th>
                                                <th>Type</th>
                                                <th>Img</th>
                                                <th>ImgID</th>
                                                <th>Delete</th>
                                                <th>Update</th>
                                            </tr>
                                        </thead>
                                        <!-- data -->
                                        <tbody>
                                            <?php if (mysqli_num_rows($result) > 0) {

                                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <?= $row['Pro_ID']; ?>
                                                </th>
                                                <td>
                                                    <?= $row['Pro_Name']; ?>
                                                </td>
                                                <td>
                                                    <?= $row['Size']; ?>
                                                </td>
                                                <td>
                                                    <?= $row['Price']; ?>
                                                </td>
                                                <td>
                                                    <?= $row['Pro_detail']; ?>
                                                </td>
                                                <td>
                                                    <?= $row['Type'] . "</br>"; ?>
                                                </td>
                                                <td>
                                                    <div class="col-sm-4 col-xs-6" style="max-width: 10rem;display: block;margin-left: auto;margin-right: auto;">
                                                        <img src="<?= $row['Pro_Img'] ?>" alt="" class="img-fluid">
                                                    </div>
                                                </td>
                                                <td> <?= $row['img_ID'] ?></td>
                                                <td><a class="btn btn-primary" href="delete.php?img_ID=<?= $row['img_ID'] ?>&Pro_ID=<?= $row['Pro_ID']; ?>">Xóa</a></button></td>
                                                <td><a class="btn btn-primary" href="update.php?img_ID=<?= $row['img_ID'] ?>&Pro_ID=<?= $row['Pro_ID']; ?>">Sửa</a></button></td>
                                            </tr>
                                        </tbody>
                                <?php
                                                    $count++;
                                                }
                                            }
                                ?>
                                </tbody>

                                    </table>

                                    <!-- End of Footer -->
                                </div>
                                <!-- /.container-fluid -->

                            </div>
                            <!-- End of Main Content -->



                        </div>
                        <!-- End of Content Wrapper -->

                    </div>