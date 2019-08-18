<div class="row">
	<div class="col">
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/modules/export-data.js"></script>

		<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	</div>
</div>
<?php
	$anggota = 0;
	$hadiah = 0;
	foreach ($chart->result() as $data) {
		$nama_hadiah[] = $data->nama_hadiah;
		$total_hadiah[] = (float) $data->total_hadiah;
		$total_anggota[] = (float) $data->total_anggota;
		$hadiah += (float) $data->total_hadiah;
		$anggota += (float) $data->total_anggota;
	}	
?>
<script type="text/javascript">
	Highcharts.chart('container', {
	    title: {
	        text: 'Data Hadiah <?=date('Y')?>'
	    },
	    xAxis: {
	        categories: <?php echo json_encode($nama_hadiah);?>
	    },
	    labels: {
	        items: [{
	            html: 'Total Keseluruhan',
	            style: {
	                left: '50px',
	                top: '18px',
	                color: ( // theme
	                    Highcharts.defaultOptions.title.style &&
	                    Highcharts.defaultOptions.title.style.color
	                ) || 'black'
	            }
	        }]
	    },
	    series: [
		    {
		        type: 'column',
		        name: 'Total Hadiah',
		        data: <?php echo json_encode($total_hadiah);?>
		    },
		    {
		        type: 'spline',
		        name: 'Average',
		        data: <?php echo json_encode($total_anggota);?>,
		        marker: {
		            lineWidth: 2,
		            lineColor: Highcharts.getOptions().colors[3],
		            fillColor: 'white'
		        }
		    },
		    {
		    	type: 'pie',
		        // name: 'Total consumption',
		        data: [{
		            name: 'Total Anggota',
		            y: <?=$anggota?>,
		            color: Highcharts.getOptions().colors[0] // Jane's color
		        }, {
		            name: 'Total Hadiah',
		            y: <?=$hadiah?>,
		            color: Highcharts.getOptions().colors[1] // John's color
		        }],
		        center: [100, 80],
		        size: 100,
		        showInLegend: false,
		        dataLabels: {
		            enabled: false
		        }
		    }
	    ],
	});
</script>