@extends("backend/master/master")
@section("title","Dashboard Admin")
@section("main")
<!--main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Tổng quan</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tổng quan</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-6">
            <div class="panel panel-blue panel-widget ">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-4 widget-left">
                        <span class="glyphicon glyphicon-signal icon-50" aria-hidden="true"></span>
                    </div>
                    <div class="col-sm-9 col-lg-8 widget-right">
                        <div class="large">7000000 đ</div>
                        <div class="text-muted">Doanh thu tháng 12</div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xs-12 col-md-6 col-lg-6">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked male-user">
                            <use xlink:href="#stroked-male-user"></use>
                        </svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">12</div>
                        <div class="text-muted">Số đơn hàng</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Biểu đồ doanh thu</div>
                <div class="panel-body">
                    <div class="canvas-wrapper">
                        <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->

</div>
<!--end main-->
<!-- javascript -->
<script>
    var lineChartData = {
        labels: [
            "Thang 3",
            "Thang 4",
            "Thang 5",
            "Thang 6",
            "Thang 7",
        ],
        datasets: [{
            label: "My Second dataset",
            fillColor: "rgba(48, 164, 255, 0.2)",
            strokeColor: "rgba(48, 164, 255, 1)",
            pointColor: "rgba(48, 164, 255, 1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(48, 164, 255, 1)",
            data: [
                1000000,
                2000000,
                3000000,
                4000000,
                5000000,
                6000000,
                7000000,
            ]
        }]
    }

    window.onload = function() {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true
        });
        var chart2 = document.getElementById("bar-chart").getContext("2d");
        window.myBar = new Chart(chart2).Bar(barChartData, {
            responsive: true
        });
        var chart3 = document.getElementById("doughnut-chart").getContext("2d");
        window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {
            responsive: true
        });
        var chart4 = document.getElementById("pie-chart").getContext("2d");
        window.myPie = new Chart(chart4).Pie(pieData, {
            responsive: true
        });

    };
</script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
</body>

</html>
@stop