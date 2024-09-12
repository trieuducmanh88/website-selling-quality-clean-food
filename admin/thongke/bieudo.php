            <section class="row">
                <h1>THỐNG KÊ SẢN PHẨM THEO DANH MUC </h1>

<div id="piechart"></div>

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

            </section>