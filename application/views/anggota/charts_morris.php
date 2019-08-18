<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<div class="row">
	<div class="col">
		<div id="myfirstchart" style="height: 250px;"></div>
	</div>
</div>
<?php
	// $cek = $chart->num_rows();
	// echo $cek;
	$tahun = 2008;
	foreach ($chart->result() as $p) {
		$data[] = "{ year: '".$tahun++."', value: ".(float)$p->total_anggota."}";
	}

	$json = json_encode($data);
	$result = str_replace('"', '', $json);
	print_r($result);
?>
<script type="text/javascript">
	new Morris.Line({
	  // ID of the element in which to draw the chart.
	  element: 'myfirstchart',
	  // Chart data records -- each entry in this array corresponds to a point on
	  // the chart.
	  data: <?=$result?>,
	  // data: [
	  // 	{ year: '2008', value: 20 },
	  //   { year: '2009', value: 10 },
	  //   { year: '2010', value: 5 },
	  //   { year: '2011', value: 5 },
	  //   { year: '2012', value: 20 },
	  // ],
	  // The name of the data record attribute that contains x-values.
	  xkey: 'year',
	  // A list of names of data record attributes that contain y-values.
	  ykeys: ['value'],
	  // Labels for the ykeys -- will be displayed when you hover over the
	  // chart.
	  labels: ['Value3']
	});
</script>