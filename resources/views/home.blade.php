@extends('layouts.app')

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@section('content')

	<label for="cars">Select Chart Style</label>
	<select name="chart" onchange="myFunction()" class="form-control" id="chart" style="width:120px;">
        <option placeholder>Choose...</option>
		<option value="column">Column</option>
		<option value="bar">Bar</option>
	</select>

    {{--  Chart Out Put is printinh here  --}}
	
	<div class="product-index" align="right" style="margin-top:40px;">
		<div id="chartContainer" style="height: 370px; width: 100%;"></div>
	</div> 

@endsection


<script>
    
function myFunction() 
{
  var chartType = document.getElementById("chart").value;
  var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Jumlah Mahasiswa Per-Kelas"
	},
	data: [{
	    type:chartType, //"column",  type: "pie",
		// yValueFormatString: "#,##0.\"\"",
		// indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($chart, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
}
// window.onload = function() {
 
// }
</script>
<body>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

