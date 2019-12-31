<table>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Mã DH</th>
        <th scope="col">Ngày mua</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Mã khách hàng</th>
        <th scope="col">Khách hàng</th>
    </tr>


    <?php  foreach($orders as $key => $order) :?>
        <tr>
            <th scope="row"><?php echo ++$key ?></th>
            <td><a href="index.php?page=orderDetail.php&orderID=<?php echo $order->getOrderNumber() ?>" ><?php echo $order->getOrderNumber()  ?></td></a>
            <td><?= $order->getOrderDate()  ?></td>
            <td><?= $order->getStatus()  ?></td>
            <td><?= $order->getCustomerNumber()  ?></td>
            <td><?= $order->getCustomerName()  ?></td>
        </tr>
    <?php endforeach;?>
</table>
