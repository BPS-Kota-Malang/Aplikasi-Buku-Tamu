@extends('app')

@section('content')

<!-- Content Row -->
<h4 class="mb-0 text-center">Data Customer - Berdasarkan Pekerjaan</h4><br>
<div class="row">
    <!-- Data Pengunjung -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Pengunjung</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$customer}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data ASN -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            ASN</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$asn}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Mahasiswa -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Mahasiswa
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$student}}</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Dosen -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Dosen</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$lecturer}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!DOCTYPE HTML>
<html>
<head>
<h4 class="mb-0 text-center">Data Customer - Berdasarkan Pendidikan</h4><br>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">

window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		data: [              
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "column",
			dataPoints: [
				{ label: "SMP/Dibawahnya",  y: {{$smp}}  },
				{ label: "SMA", y: {{$sma}}  },
				{ label: "Diploma (D1/D2/D3)", y: {{$diploma}}  },
                { label: "Sarjana (S1)",  y: {{$sarjana}} },
				{ label: "Magister (S2)",  y: {{$magister}}  },
                { label: "Doktor (D3)",  y: {{$doktor}}  }
			]
		}
		]
	});
	chart.render();
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 340px; width: 100%;"></div>
</body>
</html>

@endsection

</div>