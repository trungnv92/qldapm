<div style="width:75%;">
    <canvas id="canvas"></canvas>
</div>
<script src="<?php echo base_url('assets/js/Chart.js'); ?>"></script>
<script>
  //var colorNames = Object.keys(window.chartColors);
		var config = {
			type: 'line',
			data: {
        datasets: [{
            label: 'BCWS',
            data: [0, 20, 40, 50],
            fill: false,
            backgroundColor: '#ff6384',
            borderColor: '#ff6384'
        },
        {
          label: 'BCWP',
          data: [0, 20, 30, 90],
          fill: false,
          backgroundColor: '#537bc4',
          borderColor: '#537bc4'
        },
        {
            label: 'ACWS',
            data: [0, 10, 70, 80],
            fill: false,
            backgroundColor: '#58595b',
            borderColor: '#58595b'
        }
      ],
        labels: ['January', 'February', 'March', 'April'],

    },
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Biểu đồ so sánh chi phí'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Thời gian của công việc - Đơn vị: Ngày'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Chi phí của công việc - Đơn vị: $'
						}
					}]
				}
			}
		};
    var ctx = document.getElementById('canvas').getContext('2d');
    window.myLine = new Chart(ctx, config);

</script>
