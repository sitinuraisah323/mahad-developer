<?php echo $this->extend('layouts/users'); ?>
<?php echo $this->section('csslibraies') ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<?php echo $this->endSection(); ?>

<?php echo $this->section('content'); ?>

<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                    </ol>
                </nav>
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
                <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fas fa-table"></i>
                                Data Materi
                            </h4>
                            <div class="table-responsive">
                                <table class="table" id="table-1">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama Materi</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 grid-margin stretch-card">
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
                <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fas fa-thumbtack"></i>
                                Todo
                            </h4>
                            <div class="add-items d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                                <button class="add btn btn-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
                            </div>
                            <div class="list-wrapper">
                                <ul class="d-flex flex-column-reverse todo-list">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Meeting with Alisa
                                            </label>
                                        </div>
                                        <i class="remove fa fa-times-circle"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked>
                                                Call John
                                            </label>
                                        </div>
                                        <i class="remove fa fa-times-circle"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Create invoice
                                            </label>
                                        </div>
                                        <i class="remove fa fa-times-circle"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Print Statements
                                            </label>
                                        </div>
                                        <i class="remove fa fa-times-circle"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked>
                                                Prepare for presentation
                                            </label>
                                        </div>
                                        <i class="remove fa fa-times-circle"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Pick up kids from school
                                            </label>
                                        </div>
                                        <i class="remove fa fa-times-circle"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fas fa-rocket"></i>
                                Projects
                            </h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                Assigned to
                                            </th>
                                            <th>
                                                Project name
                                            </th>
                                            <th>
                                                Priority
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../images/faces/face1.jpg" alt="profile" class="img-sm rounded-circle" />
                                            </td>
                                            <td>
                                                South Shyanne
                                            </td>
                                            <td>
                                                <label class="badge badge-warning badge-pill">Medium</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../images/faces/face2.jpg" alt="profile" class="img-sm rounded-circle" />
                                            </td>
                                            <td>
                                                New Trystan
                                            </td>
                                            <td>
                                                <label class="badge badge-danger badge-pill">High</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../images/faces/face3.jpg" alt="profile" class="img-sm rounded-circle" />
                                            </td>
                                            <td>
                                                East Helga
                                            </td>
                                            <td>
                                                <label class="badge badge-success badge-pill">Low</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <img src="../../images/faces/face4.jpg" alt="profile" class="img-sm rounded-circle" />
                                            </td>
                                            <td>
                                                Omerbury
                                            </td>
                                            <td>
                                                <label class="badge badge-warning badge-pill">Medium</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
        <!-- content-wrapper ends -->

        <?php echo $this->endSection(); ?>
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
  <?php echo $this->section('jslibraies') ?>
        <script src="<?php echo base_url(); ?>/assets/bundles/datatables/datatables.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
        <!-- <script src="<?php echo base_url(); ?>/assets/js/page/datatables.js"></script> -->
        <script src="<?php echo base_url(); ?>/assets/bundles/sweetalert/sweetalert.min.js"></script>
        <!-- Page Specific JS File -->

        <script src="<?php echo base_url(); ?>/assets/js/page/sweetalert.js"></script>

        <script type="text/javascript">
            var dataTable;
            const formClear = () => {
                $('#addSubject').find('[name="id"]').val('');
                $('#addSubject').find('[name="name"]').val('');
                $('#addSubject').find('[name="description"]').val('');
            }
            const openModal = () => {
                formClear();

                $('#addSubject').modal('show');
            }

            $('#upload-file').on('change', function(event) {
                $('#addSubject').find('.btn-save').addClass('d-none');
                let file = event.target.files[0];
                let formData = new FormData();
                formData.append('file', file);
                axios.post(`<?php echo base_url(); ?>/api/filedrives/upload`, formData).then(res => {
                    let id = res.data.data.id;
                    $('#id_file_drive').val(id);
                }).then(res => {
                    $('#addSubject').find('.btn-save').removeClass('d-none');
                })
            });

            const submitform = (event) => {
                event.preventDefault();
                let formData = new FormData(event.target);
                let id = $('#addSubject').find('[name="id"]').val();
                if (id === '') {
                    axios.post(`<?php echo base_url(); ?>/api/subject/subject/insert`, formData).then(res => {
                        let status = res.data.status;
                        let data = res.data.data;
                        if (status === 422) {
                            let message = Object.values(data)[0];
                            swal('Validasi Inputan', message, 'error');
                            return;
                        }
                        formClear();
                        dataTable.ajax.reload();
                        $('#addSubject').modal('hide');
                    });
                } else {
                    axios.post(`<?php echo base_url(); ?>/api/subject/subject/updated`, formData).then(res => {
                        let status = res.data.status;
                        let data = res.data.data;
                        if (status === 422) {
                            let message = Object.values(data)[0];
                            swal('Validasi Inputan', message, 'error');
                            return;
                        }
                        formClear();
                        dataTable.ajax.reload();
                        $('#addSubject').modal('hide');
                    });
                }
            }

            const initDataTable = () => {
                dataTable = $('#table-1').DataTable({
                    ajax: {
                        url: `<?php echo base_url(); ?>/api/subject/subject`,
                        dataFilter: function(data) {
                            var json = jQuery.parseJSON(data);
                            json.recordsTotal = json.message.totalRecord;
                            json.recordsFiltered = json.message.totalRecord;
                            json.data = json.data;
                            return JSON.stringify(json); // return JSON string
                        },
                    },
                    columns: [{
                            data: "id"
                        },
                        {
                            data: "name"
                        },
                        {
                            data: "status"
                        }
                    ],
                });
            }

            const btnDelete = (id) => {
                axios.get(`<?php echo base_url(); ?>/api/subject/subject/view/${id}`).then(res => {
                    swal({
                        title: 'Are you sure?',
                        text: `Once deleted, you will not be able to recover ${res.data.data.level}!`,
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    }).then((willDelete) => {
                        if (willDelete) {
                            axios.get(`<?php echo base_url(); ?>/api/subject/subject/deleted/${id}`).then(res => {
                                swal(`Poof! ${res.data.data.level} has been deleted!`, {
                                    icon: 'success',
                                });
                                dataTable.ajax.reload();
                            });
                        } else {
                            swal('Your imaginary file is safe!');
                        }
                    });
                })

            }

            const btnEdit = (id) => {
                axios.get(`<?php echo base_url(); ?>/api/subject/subject/view/${id}`).then(res => {
                    $('#addSubject').find('[name="id"]').val(res.data.data.id);
                    $('#addSubject').find('[name="name"]').val(res.data.data.name);
                    $('#addSubject').find('[name="description"]').val(res.data.data.description);
                }).then(res => $('#addSubject').modal('show'))
            }

            const btnHistory = (id) => {
                url = `<?php echo base_url(); ?>/api/settings/levelshistories?id_price_lm=${id}`;
                dataTableHistory.ajax.url(url).load();
                $('#modal-history').modal('show');
            }

            initDataTable();
        </script>
        <?php echo $this->endSection(); ?>