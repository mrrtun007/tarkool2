<!DOCTYPE html>
<html>

<head>
    <?php include('h.php'); 
    //ปิดการแจ้งเตือน
    error_reporting( error_reporting() & ~E_NOTICE );?>
    

    <head>

    <body>
        <div class="container">
            <?php include('navbar.php'); ?>
            <p></p>
            <div class="row">
                <div class="col-md-3">
                    <?php include('menu_left.php'); ?>
                </div>

                <div class="col-md-9">
                <a href="customerdata.php?act=add" class="btn-info btn-sm">เพิ่ม</a>
                    <p></p>
                    <!-- แอด/เพิ่ม -->
                    <?php
                    $act = $_GET['act'];
                    if ($act == 'add') {
                        include('customer_form_add.php');
                    } elseif ($act == 'edit') {
                        include('customer_form_edit.php');
                    } else {
                        include('customer_list.php');
                    }
                    ?>
                    
                </div>
            </div>
        </div>
    </body>

</html>