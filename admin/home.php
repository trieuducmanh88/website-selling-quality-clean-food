<section class="home">
        <div class="home_con">
            <div>
                <p class="title">SẢN PHẨM MỚI</p>
                <P> <?php foreach  ($spmoi as $spmoi){
                    extract($spmoi);
                    echo $name;
                } ?> </P>
            </div>
            <div>
                <p class="title">SẢN PHẨM XEM NHIỀU</p>
                <P> <?php foreach  ($spxemnhieu as $spxn){
                    extract($spxn);
                    echo ''.$name.' - '.$luotxem.' view';
                } ?></P>
            </div>
        </div>
        <div class="home_con">
            <div>
                <p class="title">BÌNH LUẬN MỚI</p>
                <P> <?php foreach  ($blmoi as $bl){
                    extract($bl);
                    echo ''.$noidung.' - '.$user;
                } ?></P>
            </div>
            <div>
                <p class="title">ĐƠN HÀNG MỚI</p>
                <P> <?php foreach  ($dhmoi as $dh){
                    extract($dh);
                    echo ''.$bill_name.' - DAM'.$id.' - '.$total.' VND';
                } ?></P>
            </div>
        </div>
        <div class="home_bieudo" >
                <p class="title">BIỂU ĐỒ THỐNG KÊ THEO DANH MỤC</p>
                <div>
                <div id="piechart" style="margin: 0 auto;"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['danh mục', 'số lượng danh mục'],
     <?php
      $tongdm=count($listtk);
      $i=1; 
      foreach ($listtk as $tk){
        extract($tk);
        if($i==$tongdm) $dauphay=""; else $dauphay=",";
        echo "['".$tendm."', ".$countsp."]".$dauphay." ";
        $i+=1;

        } ?>

]);

  var options = {'title':'THỐNG KÊ SẢN PHÂM THEO DANH MỤC', 'width':550, 'height':400};
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
                </div>
            </div>
    </section>