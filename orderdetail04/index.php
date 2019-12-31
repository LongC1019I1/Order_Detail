<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once "class/Order.php";
    include_once "class/OrderManager.php";
    include_once "database/OrderDB.php";
    include_once "database/DBConnect.php";
    include_once "view/order/list.php";
    $orderManager = new OrderManager();
    ?>
</head>
<body>
<?php
$page = isset($_GET['page'])? $_GET['page'] : null;
$keyword = isset($_POST['keyword'])? $_POST['keyword'] : null;

?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
            switch ($page){
                case "list.php":
                    $orderManager->index();
                    break;
                case  "orderDetail.php":
                    $orderManager->show();
                    break;
                default:
                    $orderManager->index();
            }
            ?>
        </div>
    </div>

</div>



</body>
</html>