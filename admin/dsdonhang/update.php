<?php
  if(is_array($bill)){
    extract($bill);
  } 
?>
<section class="row">
                <h1>CẬP NHẬP ĐƠN HÀNG</h1>
                <form action="index.php?act=updatebill" method="post" enctype="multipart/form-data">
                   <?php $count=loadAll_cart_count($id);
                        $ttdh=get_ttdh($bill_status);
                   ?>
                    <div class="row_content">Mã đơn hàng<br><input type="text" name="id" value="<?php echo $iduser; ?>" disabled></div>
                    <div class="row_content">khách hàng <br><input type="text" name="iduser" value="<?php echo $iduser; ?>" disabled></div>
                    <div class="row_content">Tên khách hàng <br><input type="text" name="username" value="<?php echo $bill_name; ?>" disabled></div>
                    <div class="row_content">Số lượng <br><input type="text" name="" value="<?php echo $count; ?>" disabled></div>
                    <div class="row_content">Giá đơn hàng<br><input type="text" name="total" value="<?php echo $total; ?>" disabled></div> 
                    <div class="row_content">Trạng thái đơn hàng <br>
                        <select name="bill_status" id="">
                          <option value="<?php echo $bill_status ?>">--<?php echo ''.$bill_status.'.'.$ttdh ?>--</option>
                          <option value="0">0.đơn hàng mới</option>
                          <option value="1">1.đang sử lý</option>
                          <option value="2">2.đang giao hàng</option>
                          <option value="3">3.hoàn tất</option>                         
                        </select>
                    </div>
                    <input type="hidden" name="idbill" value="<?php echo $id; ?>">
                    <input type="hidden" name="iduser" value="<?php echo $iduser; ?>">
                    <input type="submit" name="capnhap" value="CẬP NHẬP" >
                    <input type="reset" value="NHẬP LOẠI">
                </form>

        </section>