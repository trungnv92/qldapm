<div class="row">
  <div class="form-group mleft20">
      <label for="usr">Công việc:</label>
      <select class="selectpicker">
          <?php foreach($tasks as $task){ ?>
          <option value="<?php echo $task['id'] ; ?>">
              <?php echo $task['name']; ?>
          </option>
          <?php } ?>
      </select>
  </div>


</div>
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#cost" >CHI PHÍ</a></li>
  <li><a data-toggle="tab" href="#perfom">HIỆU SUẤT</a></li>
</ul>
<div class="tab-content">
<div id="cost" class="tab-pane fade in active">
  <div style="width:75%;">
      <canvas id="canvas"></canvas>
  </div>
  <script src="<?php echo base_url('assets/js/Chart.js'); ?>"></script>
  <script>
    var arr = new Array();
   <?php foreach($tasks as $task){?>
      arr.push('<?php echo $task['startdate'];?>')
      <?php }?>;

      var lbsList =  ['Thứ hai-9/4/2018 ', 'Thứ ba-10/4/2018', 'Thứ bốn-11/4/2018', 'Thứ năm-12/4/2018'];
  		var config = {
  			type: 'line',
  			data: {
          datasets: [{
              label: 'BCWS',
              data: [400, 200, 400, 500, 700],
              fill: false,
              backgroundColor: '#ff6384',
              borderColor: '#ff6384'
          },
          {
            label: 'BCWP',
            data: [200, 200, 300, 900,1100],
            fill: false,
            backgroundColor: '#537bc4',
            borderColor: '#537bc4'
          },
          {
              label: 'ACWS',
              data: [100, 100, 700, 800, 900],
              fill: false,
              backgroundColor: '#58595b',
              borderColor: '#58595b'
          }
        ],
          labels: arr,

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
              },
              ticks: {
                    beginAtZero:true
              }

  					}],
  					yAxes: [{
  						display: true,
  						scaleLabel: {
  							display: true,
  							labelString: 'Chi phí của công việc - Đơn vị: $'
              },
              ticks: {                
                    beginAtZero:true,

              }
  					}]
  				}
  			}
  		};
      var ctx = document.getElementById('canvas').getContext('2d');
      window.myLine = new Chart(ctx, config);

  </script>

</div>
<div id="perfom" class="tab-pane fade">
  <div style="width:75%;">
      <canvas id="chart_perfom"></canvas>
  </div>
  <script src="<?php echo base_url('assets/js/Chart.js'); ?>"></script>
  <script>
    //var colorNames = Object.keys(window.chartColors);

      var config = {
        type: 'line',
        data: {
          datasets: [{
              label: 'SPI',
              data: [0, 2, 4, 3],
              fill: false,
              backgroundColor: '#acc236',
              borderColor: '#acc236'
          },
          {
            label: 'CPI',
            data: [0, 1, 1.5, 2.5],
            fill: false,
            backgroundColor: '#166a8f',
            borderColor: '#166a8f'
          }
        ],
            labels: ['Thứ hai-9/4/2018 ', 'Thứ ba-10/4/2018', 'Thứ tư-11/4/2018', 'Thứ năm-12/4/2018'],

      },
        options: {
          responsive: true,
          title: {
            display: true,
            text: 'Biểu đồ hiệu suất thực hiện'
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
                labelString: 'Mức chênh lệch - Đơn vị: %'
              }
            }]
          }
        }
      };
      var ctx = document.getElementById('chart_perfom').getContext('2d');
      window.myLine = new Chart(ctx, config);

  </script>
</div>
</div>
