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
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                            Total Pengunjung</div>
                        <div class="h5 mb-0 font-weight text-gray-800"><strong>{{$customer}}</strong> orang</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data ASN -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                            ASN</div>
                        <div class="h5 mb-0 font-weight text-gray-800"><strong>{{$asn}}</strong> orang</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-circle fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Pelajar/Mahasiswa-->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-info text-uppercase mb-1">Pelajar/Mahasiswa
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight text-gray-800"><strong>{{$student}}</strong> orang
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-address-card fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Guru/Dosen -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-dark shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-dark text-uppercase mb-1">
                            Guru/Dosen</div>
                        <div class="h5 mb-0 font-weight text-gray-800"><strong>{{$lecturer}}</strong> orang</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-address-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Peneliti -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                            Peneliti</div>
                        <div class="h5 mb-0 font-weight text-gray-800"><strong>{{$researcher}}</strong> orang</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-american-sign-language-interpreting fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- General -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-secondary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-secondary text-uppercase mb-1">
                            Umum/lain-lain</div>
                        <div class="h5 mb-0 font-weight text-gray-800"><strong>{{$general_job}}</strong> orang</div>
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
            toolTipContent: "<b>{label}</b><br>Jumlah: {y} orang",
			dataPoints: [
				{ label: "SMP/Dibawahnya",  y: {{$smp}} },
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
		toolTipContent: "<b>{name}</b><br>Jumlah: {x} transaksi",
		indexLabel: "{name} - {y}%",
		dataPoints: [
			{ y: ({{$service1}}/({{$service1}}+{{$service2}}+{{$service3}}+{{$service4}}))*100, x: {{$service1}}, name: "Permintaan Data", exploded: true },
			{ y: ({{$service2}}/({{$service1}}+{{$service2}}+{{$service3}}+{{$service4}}))*100, x: {{$service2}}, name: "Konsultasi Data" },
			{ y: ({{$service3}}/({{$service1}}+{{$service2}}+{{$service3}}+{{$service4}}))*100, x: {{$service3}}, name: "Rekomendasi Data Sektoral", },
            { y: ({{$service4}}/({{$service1}}+{{$service2}}+{{$service3}}+{{$service4}}))*100, x: {{$service4}}, name: "Umum (lain-lain)", exploded: true },
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
		title: "Jumlah Transaksi",
		includeZero: true,
		scaleBreaks: {
			type: "wavy",
			customBreaks: [{
				startValue: 80,
				endValue: 210
				}
		] }
	},
	data: [{
		type: "bar",
		toolTipContent: "<b>{label}</b><br>Jumlah: {y} transaksi",
		dataPoints: [
			{ label: "Add-Stat-Whatsapp", y: {{$media1}}},
			{ label: "Email", y:  {{$media2}}},
			{ label: "Social Media - Facebook", y:  {{$media3}}},
			{ label: "Social Media - Instagram", y: {{$media4}}},
			{ label: "Pelayanan Statistik Terpadu", y: {{$media5}}}
		]
	}]
});
chartb.render();

// Menampilkan visualisasi Data Customer - Berdasarkan Tujuan

var chartc = new CanvasJS.Chart("chartcContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1",
	title:{
		text: ""
	},
	data: [{
		type: "pyramid",
		yValueFormatString: "#\"%\"",
		indexLabelFontColor: "black",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}",
		//reversed: true, // Reverses the pyramid
		dataPoints: [
			{ y: ({{$purpose1}}/({{$purpose1}}+{{$purpose2}}+{{$purpose3}}+{{$purpose4}}+{{$purpose5}}))*100, label: "Tugas Sekolah/Universitas" },
			{ y: ({{$purpose2}}/({{$purpose1}}+{{$purpose2}}+{{$purpose3}}+{{$purpose4}}+{{$purpose5}}))*100, label: "Skripsi" },
			{ y: ({{$purpose3}}/({{$purpose1}}+{{$purpose2}}+{{$purpose3}}+{{$purpose4}}+{{$purpose5}}))*100, label: "Tesis" },
			{ y: ({{$purpose4}}/({{$purpose1}}+{{$purpose2}}+{{$purpose3}}+{{$purpose4}}+{{$purpose5}}))*100, label: "Perumusan Kebijakan" },
			{ y: ({{$purpose5}}/({{$purpose1}}+{{$purpose2}}+{{$purpose3}}+{{$purpose4}}+{{$purpose5}}))*100, label: "Yang Lainnya" }
		]
	}]
});
chartc.render();

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
    <h4 class="mb-0 text-center"><br>Data Transaksi - Berdasarkan Jenis Pelayanan</h4><br>
    <div id="chartaContainer" style="height: 340px; width: 100%;"></div>
    <h4 class="mb-0 text-center"><br>Data Transaksi - Berdasarkan Media Layanan</h4><br>
    <div id="chartbContainer" style="height: 300px; width: 100%;"></div>
    <h4 class="mb-0 text-center"><br>Data Transaksi - Berdasarkan Tujuan</h4><br>
    <div id="chartcContainer" style="height: 300px; width: 100%;"></div>
</body>

</html>
@endsection
</div>