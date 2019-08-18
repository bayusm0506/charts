<div class="row">
    <div class="col">
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>

        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>
</div>
<?php
    foreach ($chart->result() as $data) {
        $nama_hadiah[] = $data->nama_hadiah;
        $total_hadiah[] = (float) $data->total_hadiah;
        $total_anggota[] = (float) $data->total_anggota;
    }   
?>
<script type="text/javascript">
    Highcharts.chart('container', {
        chart: {
            zoomType: 'xy'
        },
        title: {
            text: 'Data Anggota Mendapat Hadiah',
            align: 'center'
        },
        subtitle: {
            text: 'Source: bayusm.com',
            align: 'left'
        },
        xAxis: [{
            categories: <?php echo json_encode($nama_hadiah);?>,
            crosshair: true
        }],
        yAxis: [{ // Primary yAxis
            // opposite: true

        }, { // Secondary yAxis
            gridLineWidth: 0,
            title: {
                text: 'Hadiah',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            labels: {
                format: '{value} ',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            }

        }, { // Tertiary yAxis
            gridLineWidth: 0,
            title: {
                text: 'Anggota',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            labels: {
                format: '{value} ',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            opposite: true
        }],
        tooltip: {
            shared: true
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            x: 80,
            verticalAlign: 'top',
            y: 55,
            floating: true,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || // theme
                'rgba(255,255,255,0.25)'
        },
        series: [{
            name: 'Hadiah',
            type: 'column',
            yAxis: 1,
            data: <?php echo json_encode($total_hadiah);?>,
            tooltip: {
                valueSuffix: ' hadiah'
            }

        }, {
            name: 'Anggota',
            type: 'spline',
            yAxis: 2,
            data: <?php echo json_encode($total_anggota);?>,
            marker: {
                enabled: false
            },
            dashStyle: 'shortdot',
            tooltip: {
                valueSuffix: ' anggota'
            }

        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        floating: false,
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom',
                        x: 0,
                        y: 0
                    }
                }
            }]
        }
    });
</script>