@extends('layouts.panel')
@section('content')
  <div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Reporte: Frecuencia de citas</h3>
            </div>
            
          </div>
        </div>
        <div class="card-body">
           <div id="container">

           </div>
        </div>
    
      </div>
   
@endsection

@section('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
            Highcharts.chart('container', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Citas registradas mensualmente'
            },
           
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de citas'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Citas registradas',
                data: @json($counts)
            }]
        });

</script>
@endsection