<section class="row">
<h1>QUẢN LÝ LOẠI HÀNG</h1>
    <div class="row_loai">
            <table>
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th>HÌNH</th>
                <th></th>
            </tr>
            <?php 
                foreach ($listDM as $danhMuc){
                extract($danhMuc);
                $suadm="index.php?act=suadm&id=".$idDm;
                $xoadm="index.php?act=xoadm&id=".$idDm; 
                $hinhpath="../uploads/".$img;
            echo'                     
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$idDm.'</td>
                <td>'.$name.'</td>
                <td><img src="'.$hinhpath.'" alt="" height="100px"></td>
                <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
            </tr>';
            } ?>
            </table>
    </div>                   
    <form action="">
    <input type="button" value="Chọn tất cả" >
    <input type="button" value="Bỏ chọn tất cả">
    <input type="button" value="Xóa các mục đã chọn">
    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
    </form>
    
</section>