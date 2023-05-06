<?php echo $this->extend('layouts/administrator'); ?>

<?php echo $this->section('content'); ?>

<div class="main-panel">

  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Dashboard
      </h3>
    </div>

    <div class="row grid-margin">
      <div class="col-12">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fa fa-user mr-2"></i>
                  New users
                </p>
                <h2>54000</h2>
                <label class="badge badge-outline-success badge-pill">2.7% increase</label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fa fa-male mr-2"></i>
                  Ustadz
                </p>
                <h2>123.50</h2>
                <label class="badge badge-outline-danger badge-pill">30% decrease</label>
              </div>
              <div class="statistics-item">
                <p>
                  <i class="icon-sm fa fa-female mr-2"></i>
                  Ustadzah
                </p>
                <h2>3500</h2>
                <label class="badge badge-outline-success badge-pill">12% increase</label>
              </div>

              <div class="statistics-item">
                <p>
                  <i class="icon-sm fa fa-book mr-2"></i>
                  Materi
                </p>
                <h2>7500</h2>
                <label class="badge badge-outline-success badge-pill">57% increase</label>
              </div>

              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-check-circle mr-2"></i>
                  Penilaian
                </p>
                <h2>9000</h2>
                <label class="badge badge-outline-success badge-pill">10% increase</label>
              </div>

              <div class="statistics-item">
                <p>
                  <i class="icon-sm fas fa-circle-notch mr-2"></i>
                  Pending
                </p>
                <h2>7500</h2>
                <label class="badge badge-outline-danger badge-pill">16% decrease</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="fas fa-table"></i>
              Data Materi
            </h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nama Materi</th>
                    <th>Peserta</th>
                    <th>Average</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="font-weight-bold">
                      Matematika
                    </td>
                    <td class="text-muted">
                      PT613
                    </td>
                    <td>
                      350
                    </td>
                    <td>
                      <label class="badge badge-success badge-pill">Dispatched</label>
                    </td>
                  </tr>

                  <tr>
                    <td class="font-weight-bold">
                      Bahasa Inggris
                    </td>
                    <td class="text-muted">
                      ST456
                    </td>
                    <td>
                      520
                    </td>
                    <td>
                      <label class="badge badge-warning badge-pill">Processing</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">
                      Fiqih
                    </td>
                    <td class="text-muted">
                      CS789
                    </td>
                    <td>
                      830
                    </td>
                    <td>
                      <label class="badge badge-danger badge-pill">Failed</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">
                      Al Qur'an Hadits
                    </td>
                    <td class="text-muted">
                      LP908
                    </td>
                    <td>
                      579
                    </td>
                    <td>
                      <label class="badge badge-primary badge-pill">Delivered</label>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">
                      Sejarah Islam
                    </td>
                    <td class="text-muted">
                      HF675
                    </td>
                    <td>
                      790
                    </td>
                    <td>
                      <label class="badge badge-info badge-pill">On Hold</label>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <i class="fas fa-calendar-alt"></i>
              Calendar
            </h4>
            <div id="inline-datepicker-example" class="datepicker"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="d-md-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center mb-3 mb-md-0">
                <button class="btn btn-social-icon btn-facebook btn-rounded">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <div class="ml-4">
                  <h5 class="mb-0">Facebook</h5>
                  <p class="mb-0">813 friends</p>
                </div>
              </div>
              <div class="d-flex align-items-center mb-3 mb-md-0">
                <button class="btn btn-social-icon btn-twitter btn-rounded">
                  <i class="fab fa-twitter"></i>
                </button>
                <div class="ml-4">
                  <h5 class="mb-0">Twitter</h5>
                  <p class="mb-0">9000 followers</p>
                </div>
              </div>
              <div class="d-flex align-items-center mb-3 mb-md-0">
                <button class="btn btn-social-icon btn-google btn-rounded">
                  <i class="fab fa-google-plus-g"></i>
                </button>
                <div class="ml-4">
                  <h5 class="mb-0">Google plus</h5>
                  <p class="mb-0">780 friends</p>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <button class="btn btn-social-icon btn-linkedin btn-rounded">
                  <i class="fab fa-linkedin-in"></i>
                </button>
                <div class="ml-4">
                  <h5 class="mb-0">Linkedin</h5>
                  <p class="mb-0">1090 connections</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo $this->endsection(); ?>

  <?php echo $this->section('jslibraies') ?>
  <script src="<?php echo base_url(); ?>/assets/bundles/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/modules/dashboard/index.js"></script>
  <script src="<?php echo base_url(); ?>/assets/bundles/datatables/datatables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js">
  </script>
  <script src="<?php echo base_url(); ?>/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/bundles/sweetalert/sweetalert.min.js"></script>
  <!-- Add New Javascript -->


  <script>
    $('[name="month"]').on('change', function() {

      console.log(month);
    });

    // const summary = () => {

    var summary = document.getElementById('summary');
    var month = $('#month').val();

    var a = document.createElement("a");
    a.setAttribute("class", "nav-link nav-link-lg ion-ios-reload");
    a.setAttribute("href", `<?php echo base_url(); ?>/Generate/Summary/index/${month}`);
    a.textContent = 'Download Summary';
    summary.appendChild(a);

    // var opt = document.createElement("span");
    // // opt.value = item.id;
    // opt.text = item.count;
    // count.appendChild(opt);

    // }
    function convertToRupiah(angka) {
      var rupiah = '';
      var angkarev = angka.toString().split('').reverse().join('');
      for (var i = 0; i < angkarev.length; i++)
        if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
      return rupiah.split('', rupiah.length - 1).reverse().join('');
    }


    //CountOneobligor
    axios.get(`<?php echo base_url(); ?>/api/dashboard/countOneobligor`).then(
      res => {
        const {
          data
        } = res.data;
        console.log('oneobligorog', res.data.data);


        var count = document.getElementById('countOneobligor');
        count.textContent = convertToRupiah(res.data.data) + ' (Nasabah)';


      }).catch(err => {
      console.log(err)
    })


    //Grafik

    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
      'Oktober',
      'November', 'Desember'
    ];

    // OutstandingAll
    axios.get(`<?php echo base_url(); ?>/api/dashboard/outstandingAll`).then(
      res => {
        const {
          data
        } = res.data;

        if (data.length == 0) {

          var viewOs = document.getElementById('viewOs');
          viewOs.style.display = "none";

        }

        const awal = [];

        var noa = 0;
        var os = 0;
        data.forEach(item => {

          date = new Date();
          if (item.month == date.getMonth() + 1) {
            noa = item.noa;
            os = item.os;
          } else {
            noa = 0;
            os = 0;
          }

          const a = awal.findIndex(f => {
            return f.name == 'LTV';
          });


          const templateAwal = a > -1 ? awal[a] : {

            type: "spline",
            yValueFormatString: "#,### ",
            xValueFormatString: "MMM",
            name: "LTV",
            dataPoints: []
          }

          templateAwal.dataPoints.push({
            label: months[item.month - 1],
            y: +item.os
          });

          if (a > -1) {
            awal[a] = templateAwal;
          } else {
            awal.push(templateAwal);
          }
        });

        var count = document.getElementById('countOs');
        document.getElementById("noaOs").innerHTML = convertToRupiah(noa);
        count.textContent = 'Rp ' + convertToRupiah(os);


        var chart = new CanvasJS.Chart("chartOutstandingAll", {
          exportEnabled: true,
          animationEnabled: true,
          title: {
            text: "Outstanding",
            fontFamily: "arial black",
            fontColor: "#695A42"
          },
          axisY: {
            title: "Jumlah",
            lineColor: "#4F81BC",
            tickColor: "#4F81BC",
            labelFontColor: "#4F81BC"
          },

          data: [...awal, ]
        });


        chart.render();
      }).catch(err => {
      console.log(err)
    })

    // DPD
    axios.get(`<?php echo base_url(); ?>/api/dashboard/dpdAll`).then(
      res => {
        const {
          data
        } = res.data;


        if (data.length == 0) {

          var viewDpd = document.getElementById('viewDpd');
          viewDpd.style.display = "none";

        }
        const awal = [];


        var noa = 0;
        var os = 0;
        data.forEach(item => {

          date = new Date();
          if (item.month == date.getMonth() + 1) {
            noa = item.noa;
            os = item.os;
          } else {
            noa = 0;
            os = 0;
          }

          const a = awal.findIndex(f => {
            return f.name == 'DPD';
          });


          const templateAwal = a > -1 ? awal[a] : {

            type: "line",
            yValueFormatString: "#,### ",
            xValueFormatString: "MMM",
            name: "DPD",

            // showInLegend: true,
            // markerType: "square",
            color: "#F08080",
            dataPoints: []
          }

          templateAwal.dataPoints.push({
            label: months[item.month - 1],
            y: +item.os
          });

          if (a > -1) {
            awal[a] = templateAwal;
          } else {
            awal.push(templateAwal);
          }
        });


        var count = document.getElementById('countDpd');
        count.textContent = 'Rp ' + convertToRupiah(os);
        document.getElementById("noaDpd").innerHTML = convertToRupiah(noa);


        var chart = new CanvasJS.Chart("chartDpd", {
          exportEnabled: true,
          animationEnabled: true,
          theme: "light2",
          title: {
            text: "DPD",
            fontFamily: "arial black",
            fontColor: "#695A42"
          },
          axisY: {
            title: "Jumlah",
            lineColor: "#4F81BC",
            tickColor: "#4F81BC",
            labelFontColor: "#4F81BC",
            crosshair: {
              enabled: true
            }
          },
          toolTip: {
            shared: true
          },
          // legend:{
          //     cursor:"pointer",
          //     verticalAlign: "bottom",
          //     horizontalAlign: "left",
          //     dockInsidePlotArea: true,
          //     itemclick: toogleDataSeries
          // },


          data: [...awal, ]
        });


        chart.render();
      }).catch(err => {
      console.log(err)
    })

    // Deviasi
    axios.get(`<?php echo base_url(); ?>/api/dashboard/deviasiAll`).then(
      res => {
        const {
          data
        } = res.data;

        if (data.length == 0) {

          var viewDeviasi = document.getElementById('viewDeviasi');
          viewDeviasi.style.display = "none";

        }

        const awal = [];


        var noa = 0;
        var os = 0;
        data.forEach(item => {

          date = new Date();
          if (item.month == date.getMonth() + 1) {
            noa = item.noa;
            os = item.os;
          } else {
            noa = 0;
            os = 0;
          }

          const a = awal.findIndex(f => {
            return f.name == 'LTV';
          });


          const templateAwal = a > -1 ? awal[a] : {

            type: "line",
            yValueFormatString: "#,### trx",
            xValueFormatString: "MMM",
            name: "LTV",
            // color: "DarkGreen",

            dataPoints: []
          }

          templateAwal.dataPoints.push({
            label: months[item.month - 1],
            y: +item.noa
          });

          if (a > -1) {
            awal[a] = templateAwal;
          } else {
            awal.push(templateAwal);
          }
        });

        var count = document.getElementById('countDeviasi');
        count.textContent = convertToRupiah(noa) + ' (x)';

        var chart = new CanvasJS.Chart("chartDeviasi", {
          exportEnabled: true,
          animationEnabled: true,
          theme: "light2",
          title: {
            text: "Deviasi",
            fontFamily: "arial black",
            fontColor: "#695A42"
          },
          axisY: {
            title: "Jumlah",
            lineColor: "#4F81BC",
            tickColor: "#4F81BC",
            labelFontColor: "#4F81BC"
          },


          data: [...awal, ]
        });


        chart.render();
      }).catch(err => {
      console.log(err)
    })

    // Oneobligor
    axios.get(`<?php echo base_url(); ?>/api/dashboard/oneobligorAll`).then(
      res => {
        const {
          data
        } = res.data;


        const awal = [];


        var noa = 0;
        var os = 0;
        data.forEach(item => {

          date = new Date();
          if (item.month == date.getMonth() + 1) {
            noa = item.noa;
            os = item.os;
          } else {
            noa = 0;
            os = 0;
          }

          const a = awal.findIndex(f => {
            return f.name == 'LTV';
          });


          const templateAwal = a > -1 ? awal[a] : {

            type: "spline",
            yValueFormatString: "#,### trx",
            xValueFormatString: "MMM",
            name: "LTV",
            dataPoints: []
          }

          templateAwal.dataPoints.push({
            label: months[item.month - 1],
            y: +item.noa
          });

          if (a > -1) {
            awal[a] = templateAwal;
          } else {
            awal.push(templateAwal);
          }
        });


        var chart = new CanvasJS.Chart("chartOneobligor", {
          exportEnabled: true,
          animationEnabled: true,
          title: {
            text: "Oneobligor",
            fontFamily: "arial black",
            fontColor: "#695A42"
          },
          axisY: {
            title: "Nasabah",
            lineColor: "#4F81BC",
            tickColor: "#4F81BC",
            labelFontColor: "#4F81BC"
          },


          data: [...awal, ]
        });


        chart.render();
      }).catch(err => {
      console.log(err)
    })

    // LTV
    axios.get(`<?php echo base_url(); ?>/api/dashboard/ltvAll`).then(
      res => {
        const {
          data
        } = res.data;

        // console.log(data.length);
        if (data.length == 0) {

          var viewLtv = document.getElementById('viewLtv');
          viewLtv.style.display = "none";

        }
        const awal = [];

        var noa = 0;
        var os = 0;
        data.forEach(item => {

          date = new Date();
          if (item.month == date.getMonth() + 1) {
            noa = item.noa;
          } else {
            noa = 0;
          }

          const a = awal.findIndex(f => {
            return f.name == 'LTV';
          });


          const templateAwal = a > -1 ? awal[a] : {

            type: "spline",
            yValueFormatString: "#,### trx",
            xValueFormatString: "MMM",
            name: "LTV",
            dataPoints: []
          }

          templateAwal.dataPoints.push({
            label: months[item.month - 1],
            y: +item.noa
          });

          if (a > -1) {
            awal[a] = templateAwal;
          } else {
            awal.push(templateAwal);
          }
        });





        var count = document.getElementById('countLtv');
        count.textContent = convertToRupiah(noa) + '(x)';

        var chart = new CanvasJS.Chart("chartLtv", {
          exportEnabled: true,
          animationEnabled: true,
          title: {
            text: "LTV ",
            fontFamily: "arial black",
            fontColor: "#695A42"
          },
          axisY: {
            title: "Jumlah",
            lineColor: "#4F81BC",
            tickColor: "#4F81BC",
            labelFontColor: "#4F81BC"
          },


          data: [...awal, ]
        });


        chart.render();
      }).catch(err => {
      console.log(err)
    })

    // Pembatalan
    axios.get(`<?php echo base_url(); ?>/api/dashboard/batalAll`).then(
      res => {
        const {
          data
        } = res.data;

        if (data.length == 0) {

          var viewBatalan = document.getElementById('viewBatalan');
          viewBatalan.style.display = "none";

        }

        const awal = [];


        var noa = 0;
        var os = 0;
        data.forEach(item => {

          date = new Date();
          if (item.month == date.getMonth() + 1) {
            noa = item.noa;
          } else {
            noa = 0;
          }

          // os = item.os;

          const a = awal.findIndex(f => {
            return f.name == 'Pembatalan';
          });


          const templateAwal = a > -1 ? awal[a] : {

            type: "spline",
            yValueFormatString: "#,### trx",
            xValueFormatString: "MMM",
            name: "Pembatalan",
            color: "#F08080",
            dataPoints: []
          }

          templateAwal.dataPoints.push({
            label: months[item.month - 1],
            y: +item.noa
          });

          if (a > -1) {
            awal[a] = templateAwal;
          } else {
            awal.push(templateAwal);
          }
        });

        document.getElementById("countBatal").innerHTML = convertToRupiah(noa) + ' (x)';

        var chart = new CanvasJS.Chart("chartSelect", {
          exportEnabled: true,
          animationEnabled: true,
          title: {
            text: "Pembatalan ",
            fontFamily: "arial black",
            fontColor: "#695A42"
          },
          axisY: {
            title: "Jumlah",
            lineColor: "#4F81BC",
            tickColor: "#4F81BC",
            labelFontColor: "#4F81BC"
          },


          data: [...awal, ]
        });


        chart.render();
      }).catch(err => {
      console.log(err)
    })

    //Revenue
    var options = {
      chart: {
        exportEnabled: true,
        height: 230,
        type: "line",
        shadow: {
          enabled: true,
          color: "#000",
          top: 18,
          left: 7,
          blur: 10,
          opacity: 1
        },
        toolbar: {
          show: false
        }
      },
      colors: ["#3dc7be", "#ffa117"],
      dataLabels: {
        enabled: true
      },
      stroke: {
        curve: "smooth"
      },
      series: [{
          name: "High - 2019",
          data: [5, 15, 14, 36, 32, 32]
        },
        //   {
        //     name: "Low - 2019",
        //     data: [7, 11, 30, 18, 25, 13]
        //   }
      ],
      grid: {
        borderColor: "#e7e7e7",
        row: {
          colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
          opacity: 0.0
        }
      },
      markers: {
        size: 6
      },
      xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],

        labels: {
          style: {
            colors: "#9aa0ac"
          }
        }
      },
      yaxis: {
        title: {
          text: "Income"
        },
        labels: {
          style: {
            color: "#9aa0ac"
          }
        },
        min: 5,
        max: 40
      },
      legend: {
        position: "top",
        horizontalAlign: "right",
        floating: true,
        offsetY: -25,
        offsetX: -5
      }
    };

    var chart = new ApexCharts(document.querySelector("#revenue"), options);

    chart.render();
  </script>

  <?php echo $this->endSection(); ?>