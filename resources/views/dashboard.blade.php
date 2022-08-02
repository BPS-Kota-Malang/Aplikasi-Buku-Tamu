@extends('app')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"></h1>
    <a href="{{url('download-pdf-report')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i>Generate Report</a>
</div>

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

// Menampilkan visualisasi Data Customer - Berdasarkan Pendidikan
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		data: [              
		{
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

// Menampilkan visualisasi Data Customer - Berdasarkan Jenis Pelayanan

    var charta = new CanvasJS.Chart("chartaContainer", {
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: ""
	},
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "{name}: <strong>{y}%</strong>",
		indexLabel: "{name} - {y}%",
		dataPoints: [
			{ y: ({{$service1}}/({{$service1}}+{{$service2}}+{{$service3}}))*100, name: "Permintaan Data", exploded: true },
			{ y: ({{$service2}}/({{$service1}}+{{$service2}}+{{$service3}}))*100, name: "Konsultasi Data" },
			{ y: ({{$service3}}/({{$service1}}+{{$service2}}+{{$service3}}))*100, name: "Rekomendasi Data Sektoral", exploded: true },
		]
	}]
});
charta.render();

// Menampilkan visualisasi Data Customer - Berdasarkan Media Layanan

var chartb = new CanvasJS.Chart("chartbContainer", {
	animationEnabled: true,
	title: {
	},
	axisX: {
		interval: 1
	},
	axisY: {
		title: "Jumlah Pengunjung BPS Kota Malang",
		includeZero: true,
		scaleBreaks: {
			type: "wavy",
			customBreaks: [{
				startValue: 80,
				endValue: 210
				}
		]}
	},
	data: [{
		type: "bar",
		toolTipContent: "<b>{label}</b><br>Jumlah: {y} orang",
		dataPoints: [
			{ label: "Add-Stat-Whatsapp", y: 10},
			{ label: "Email", y: 15},
			{ label: "Social Media - Facebook", y: 20},
			{ label: "Social Media - Instagram", y: 25},
			{ label: "Pelayanan Statistik Terpadu", y: 30}
		]
	}]
});
chartb.render();
}

function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.charta.render();
}
</script>
</head>

<!-- Menampilkan judul untuk setiap visualisasi data pada chart -->
<body>
<div id="chartContainer" style="height: 340px; width: 100%;"></div>
<h4 class="mb-0 text-center"><br>Data Customer - Berdasarkan Jenis Pelayanan</h4><br>
<div id="chartaContainer" style="height: 340px; width: 100%;"></div>
<h4 class="mb-0 text-center"><br>Data Customer - Berdasarkan Media Layanan</h4><br>
<div id="chartbContainer" style="height: 300px; width: 100%;"></div>
</body>

</html>
@endsection
</div>