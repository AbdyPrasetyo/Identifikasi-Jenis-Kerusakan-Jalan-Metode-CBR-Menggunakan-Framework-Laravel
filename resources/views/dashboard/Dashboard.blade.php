@extends('layouts.modul')
@section('content')

<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-stats">
          <div class="card-stats-title">Data Statistik

          </div>
          <div class="card-stats-items">
            <div class="card-stats-item">
              <div class="card-stats-item-count">{{ $cha }}</div>
              <div class="card-stats-item-label">Indikator</div>
            </div>
            <div class="card-stats-item">
              <div class="card-stats-item-count">{{ $typ }}</div>
              <div class="card-stats-item-label">Solusi</div>
            </div>
            <div class="card-stats-item">
              <div class="card-stats-item-count">{{ $expert }}</div>
              <div class="card-stats-item-label">Bobot Pakar  </div>
            </div>
          </div>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-archive"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Basis Pengetahuan</h4>
          </div>
          <div class="card-body">
            {{ $know }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-chart">
          <canvas id="balance-chart" height="80"></canvas>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-history"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Riwayat Identifikasi</h4>
          </div>
          <div class="card-body">
            {{ $history }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-chart">
          <canvas id="sales-chart" height="80"></canvas>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-users"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4> Data Pengguna</h4>
          </div>
          <div class="card-body">
            {{ $user }}
          </div>
        </div>
      </div>
    </div>
  </div>


</div>


    @endsection


    @push('js')

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
      var salesChart = document.getElementById('sales-chart');
      if (salesChart) {
          var ctx = salesChart.getContext('2d');
          var balanceChartBgColor = ctx.createLinearGradient(0, 0, 0, 80);
          balanceChartBgColor.addColorStop(0, 'rgba(63,82,227,.2)');
          balanceChartBgColor.addColorStop(1, 'rgba(63,82,227,0)');

          new Chart(ctx, {
              type: 'line',
              data: {
                  labels: ['16-07-2018', '17-07-2018', '18-07-2018', '19-07-2018', '20-07-2018', '21-07-2018', '22-07-2018', '23-07-2018', '24-07-2018', '25-07-2018', '26-07-2018', '27-07-2018', '28-07-2018', '29-07-2018', '30-07-2018', '31-07-2018'],
                  datasets: [{
                      label: 'Sales',
                      data: [70, 62, 44, 40, 21, 63, 82, 52, 50, 31, 70, 50, 91, 63, 51, 60],
                      borderWidth: 2,
                      backgroundColor: balanceChartBgColor,
                      borderColor: 'rgba(63,82,227,1)',
                      pointBorderWidth: 0,
                      pointBorderColor: 'transparent',
                      pointRadius: 3,
                      pointBackgroundColor: 'transparent',
                      pointHoverBackgroundColor: 'rgba(63,82,227,1)',
                  }]
              },
              options: {
                  layout: {
                      padding: {
                          bottom: -1,
                          left: -1
                      }
                  },
                  legend: {
                      display: false
                  },
                  scales: {
                      yAxes: [{
                          gridLines: {
                              display: false,
                              drawBorder: false,
                          },
                          ticks: {
                              beginAtZero: true,
                              display: false
                          }
                      }],
                      xAxes: [{
                          gridLines: {
                              drawBorder: false,
                              display: false,
                          },
                          ticks: {
                              display: false
                          }
                      }]
                  },
              }
          });
      }



var balance_chart = document.getElementById("balance-chart").getContext('2d');

var balance_chart_bg_color = balance_chart.createLinearGradient(0, 0, 0, 70);
balance_chart_bg_color.addColorStop(0, 'rgba(63,82,227,.2)');
balance_chart_bg_color.addColorStop(1, 'rgba(63,82,227,0)');

var myChart = new Chart(balance_chart, {
  type: 'line',
  data: {
    labels: ['16-07-2018', '17-07-2018', '18-07-2018', '19-07-2018', '20-07-2018', '21-07-2018', '22-07-2018', '23-07-2018', '24-07-2018', '25-07-2018', '26-07-2018', '27-07-2018', '28-07-2018', '29-07-2018', '30-07-2018', '31-07-2018'],
    datasets: [{
      label: 'Balance',
      data: [50, 61, 80, 50, 72, 52, 60, 41, 30, 45, 70, 40, 93, 63, 50, 62],
      backgroundColor: balance_chart_bg_color,
      borderWidth: 3,
      borderColor: 'rgba(63,82,227,1)',
      pointBorderWidth: 0,
      pointBorderColor: 'transparent',
      pointRadius: 3,
      pointBackgroundColor: 'transparent',
      pointHoverBackgroundColor: 'rgba(63,82,227,1)',
    }]
  },
  options: {
    layout: {
      padding: {
        bottom: -1,
        left: -1
      }
    },
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          display: false,
          drawBorder: false,
        },
        ticks: {
          beginAtZero: true,
          display: false
        }
      }],
      xAxes: [{
        gridLines: {
          drawBorder: false,
          display: false,
        },
        ticks: {
          display: false
        }
      }]
    },
  }
});

      });







    </script>

    @endpush
