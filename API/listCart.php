<?php
    session_start();
    require_once('../connect.php');
    $sql = 'SELECT Pro_Img, Pro_Name';
    foreach($_SESSION['cart'] as $list) :?>
        <tr>
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
<?php endforeach;?>