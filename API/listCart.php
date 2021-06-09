<?php
    session_start();
    require_once('../connect.php');
    //session_destroy();

    if(isset($_SESSION['cart'])) :?>
<div class="row">
    <div class="col col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>IMG</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="datarow">
                <?php               
                foreach($_SESSION['cart'] as $list) {
                    
                    ?>
                <tr>
                    <td><?php echo $list["Pro_ID"];?></td>
                    <td><?php echo $list["Pro_Img"];?></td>
                    <td><?php echo $list["Pro_Name"]; ?></td>
                    <td><?= $list['qty']?></td>
                    <td><?= $list['Size']?></td>
                    <td><?= $list['Price']?></td>
                    <td>
                        <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                        <a id="delete_1" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham">
                            <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                        </a>
                    </td>
                </tr>
                <?php
                            
                            }
                            ?>
            </tbody>
        </table>
        <?php else :?>
        <p> ko co gio hang` </p>
        <?php endif;?>