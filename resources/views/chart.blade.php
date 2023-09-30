@php
  
  $salary_list = json_encode($salaries);
  // echo $salary_list;
  $names_list=json_encode($names);
  // echo $names_list;
@endphp 



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<canvas id="myChart" width="50" height="22"></canvas>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels:@php
                echo $names_list;
    @endphp
    ,
    datasets: [{
      label: 'salary',
      data: 
      @php
        
      echo $salary_list;
      @endphp
      ,
      backgroundColor: 'rgba(255, 99, 132, 1)',
    }]
  },
  options: {
    scales: {
      xAxes: [{
        display: false,
        barPercentage: 1.30,
      }, {
        display: true,
      }],
      yAxes: [{
        ticks: {
          beginAtZero:true
        }
      }]
    }
  }
});
</script>


























































@php
  
  
  $sal_arr=[];
  $Above30k=0;
  $Above50k=0;
  $Above70k=0;
  $Above90k=0;
  $Above100k=0;
  for ($i = 0; $i < count($salaries); $i++) {
    if ($salaries[$i] > 30000) {
      $Above30k=$Above30k+1;
      $sal_arr[0]=$Above30k;
    }
    if ($salaries[$i] > 50000) {
      $Above50k=$Above50k+1;
      $sal_arr[1]=$Above50k;
    }
    if ($salaries[$i] > 70000) {
      $Above70k=$Above70k+1;
      $sal_arr[2]=$Above70k;
    }
    if ($salaries[$i] > 90000) {
      $Above90k=$Above90k+1;
      $sal_arr[3]=$Above90k;
    }
    if ($salaries[$i] > 100000) {
      $Above100k=$Above100k+1;
      $sal_arr[4]=$Above100k;
    }
  };
  // print_r($sal_arr);
  $salary_list = json_encode($sal_arr);
  // echo $salary_list;
  $names_list=json_encode($names);
  //  echo $names_list;
  
  
  @endphp

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{{-- <canvas id="myPieChart" width="200px" height="200px"></canvas> --}}
<div class="chart" >
  
<canvas id="myPieChart" style=""></canvas>
</div>
<style>
  .chart{
    position: relative;
    height: 300px;
    width: 400px;
  }
</style>
<script>
var ctx = document.getElementById('myPieChart').getContext('2d');


var data = {
  labels: ["Above30k","Above50k","Above70k","Above 90k","Above 100k"],
  datasets: [{
    data:
    @php  
    echo $salary_list
    @endphp,
    backgroundColor: [
      'red',
      'blue',
      'yellow',
      'green',
      'purple'
    ]
  }]
};

var options={ 
  responsive:true,
  //  radius:"300",
   
};
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: data,
  options:options,
});
</script>

