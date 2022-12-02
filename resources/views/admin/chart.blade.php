@extends('layouts.app-admin')

@section('content')
<div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Perbulan</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Pertahun</button>
</div>
</nav>
<div class="tab-content" id="nav-tabContent">
<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
    <div id="chartByMonth" style="height: 70vh"></div>
</div>
<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
    <div id="chartByYear" style="height: 70vh"></div>
</div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('chartByMonth', {
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Statistik Penjualan Barang Bekas Perbulan'
        },
        xAxis: {
            categories: {!! json_encode($categoriesByMonth) !!},
            accessibility: {
                description: 'Months of the year'
            }
        },
        yAxis: {
            title: {
                text: 'Total'
            },
            labels: {
                formatter: function () {
                    return this.value;
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true
        },
        plotOptions: {
            spline: {
                marker: {
                    radius: 4,
                    lineColor: '#666666',
                    lineWidth: 1
                }
            }
        },
        series: [{
            name: 'Penjualan Barang Bekas',
            marker: {
                symbol: 'square'
            },
            data: {!! json_encode($dataByMonth) !!}
        }]
    });
</script>
<script>
    Highcharts.chart('chartByYear', {
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Statistik Penjualan Barang Bekas pertahun'
        },
        xAxis: {
            categories: {!! json_encode($categoriesByYear) !!},
            accessibility: {
                description: 'Months of the year'
            }
        },
        yAxis: {
            title: {
                text: 'Total'
            },
            labels: {
                formatter: function () {
                    return this.value;
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true
        },
        plotOptions: {
            spline: {
                marker: {
                    radius: 4,
                    lineColor: '#666666',
                    lineWidth: 1
                }
            }
        },
        series: [{
            name: 'Penjualan Barang Bekas',
            marker: {
                symbol: 'square'
            },
            data: {!! json_encode($dataByYear) !!}
        }]
    });
</script>
@endsection