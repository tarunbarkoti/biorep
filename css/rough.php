    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 pt-25">  

            <div style="height:12vh;" class="callout callout-danger">
        <marquee>
          <ul class="list-group list-group-horizontal">
            <li style= "font-size: 28px; font-weight:bolder;" class="list-group-item border-0 pt-0 pb-0 text-danger">&bull; <img src="{{ asset('site/img/covid/cvi.jpg') }}" class="img-fluid" alt="" style= "height: 7vh; width:20%;"> COVID-19 Dashboard <img src="{{ asset('site/img/covid/cvi.jpg') }}" class="img-fluid" alt="" style= "height: 7vh; width:20%;"> <li>
          </ul>
        </marquee>
      </div>


      <div class="row"> 
      <div class="col-lg-8 md-8">
      <div class="card-header d-flex justify-content-between align-items-center">
      <h3 class="card-title" style= "font-weight: bolder;">
      Total participants enrolled (n=8667)
      </h3>
      </div>
      <div class="card-body">
      <div class="chart">
      <canvas id="myChart" style="min-height: 450px; height: 450px; max-height: 450px; max-width: 100%;"></canvas> 
      </div>
      </div>
      </div>


      <div class="col-lg-4 md-4">
      <div class="card-header d-flex justify-content-between align-items-center">
      <h3 class="card-title" style= "font-weight: bolder;">
      Samples available (Aliquots)
      </h3>
      </div>
      <div class="card-body">
      <div class="chart">
      <canvas id="myChart2" style="min-height: 430px; height: 430px; max-height: 430px; max-width: 100%;"></canvas> 
      </div>
      </div>
      </div>

      </div>  


      <div class= "card col-lg-12 md-12">
      <!-- <div class="card-header d-flex justify-content-between align-items-center"> -->
      <!-- <h3 class="card-title"> -->
      <!-- Variables (visit-wise) -->
      <!-- </h3> -->
      <!-- </div> -->
      <div class="card-body">
      <div class="flow1">
      <img src="{{ asset('site/img/covid/covid_flow2.png') }}" alt="flow" width="100%" height="340"> 
      </div>
      </div>
      </div>



      <div class= "card col-lg-12 md-12">
      <div class="card-header d-flex justify-content-between align-items-center">
      <h3 class="card-title"  style= "font-weight: bolder;">
      Participants at different timepoints
      </h3>
      </div>
      <div class="card-body">
      <div class="flow1">
      <img src="{{ asset('site/img/covid/covidplot4.jpg') }}" alt="flow" width="100%" height="530"> 
      </div>
      </div>
      </div>


      <!-- <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
      <h3 class="card-title">
      Participants available at different timepoints
      </h3>
      </div>
      <div class="card-body">
      <div class="chart">
      <div id="mkip"></div>
      </div>
      </div>
      </div> -->



     <!-- small box -->

     <div class="row">

     <div class="col-lg-6 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>1389</h3>
            <p>Clinical variables</p>
            </div>
            <div class="icon">
              <i class="fa fa-file"></i>
            </div>
            <a href="#" class="small-box-footer">300 variables at enrollment, &nbsp; &nbsp; 105 variables at FUP-1, <br> 204 variables at FUP-2, &nbsp; &nbsp; 389 variables at FUP-3, <br> 391 variables at FUP-4</a>
          </div>
        </div>
        
        <div class="col-lg-6 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3><a href="#colllabb">4</h3>
            <p>Types of biospecimen collected</p>
            </div>
            <div class="icon">
              <i class="fa fa-vials"></i>
            </div>
            <a href="#" class="small-box-footer">4 types of biospecimen are collected at different visits <br> Enrollment: Serum, NP/OP; &nbsp; &nbsp; &nbsp; FUP-1: Serum; <br> FUP-2, &nbsp; FUP-3, &nbsp; FUP-4: &nbsp; Plasma, PBMCs</a>
          </div>
        </div>

        
</div>


<div class= "card col-lg-12 md-12">
      <div class="card-header d-flex justify-content-between align-items-center">
      <h3 class="card-title" style= "font-weight: bolder;">
      Data Dictionary
      </h3>
      </div>
      <div class="card-body table-responsive-sm">
      
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
        <table border ="1" class="dataframe table table-bordered table-sm table-striped text-justify">
          <tr style="text-align: justify; background-color:#fff44f">
                <th>Timepoint</th>
                <th>Variable name</th>
                <th>Definition</th>
            </tr>
            <tr>
               
                <td>Enrollment</td>
                <td>FVR</td>
                <td>Fever</td>
            </tr>
            <tr>
                
                <td>Enrollment</td>
                <td>DTFSSING</td>
                <td>Date of onset of symptoms</td>
            </tr>
            <tr>
                
                <td>Enrollment</td>
                <td>STHOAT</td>
                <td>Sore Throat</td>
            </tr>
            <tr>
                
                <td>Enrollment</td>
                <td>LSMELL</td>
                <td>Loss of Smell</td>
            </tr>
            <tr>
                
                <td>12-36 months</td>
                <td>Chest Pain</td>
                <td>CPAIN</td>
            </tr>
            <tr>
                
                <td>12-36 months</td>
                <td>CPAINDYS</td>
                <td>Chest pain duration in days</td>
            </tr>
          </table>
        

      </div>
      </div>
      </div>
      </div>



      <!-- <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
      <h3 class="card-title">
      Aliquots Stored (Project-wise at different timepoints)
      </h3>
      </div>
      <div class="card-body">
      <div class="chart">
      <canvas id="myChart3" style="min-height: 450px; height: 570px; max-height: 370px; max-width: 100%;"></canvas> 
      </div>
      </div>
      </div> -->




<!-- three doughnuts  -->
<br>
<div id="colllabb">
        <h4 style= "font-weight: bolder;">Biospecimen stored at biorepository</h3>
</div>

      <div class="row">
      
      <div class="col-lg-6 col-6">
      
      <div class="card-body">
      <div class="abc">
      <img src="{{ asset('site/img/covid/Picture1.jpg') }}" class="img-fluid" alt="">
      </div>
      </div>
      </div>

      <div class="col-lg-6 col-6">
      
      <div class="card-body">
      <div class="abc">
      <img src="{{ asset('site/img/covid/Picture2.jpg') }}" class="img-fluid" alt="">
      </div>
      </div>
      </div>

      </div>
      
      <div class="row">
      
      <div class="col-lg-6 col-6">
      <div class="card-body">
      <div class="abc">
      <img src="{{ asset('site/img/covid/Picture3.jpg') }}" class="img-fluid" alt="">
      </div>
      </div>
      </div>

      <div class="col-lg-6 col-6">
      <div class="card-body">
      <div class="abc">
      <img src="{{ asset('site/img/covid/Picture4.jpg') }}" class="img-fluid" alt="">
      </div>
      </div>
      </div>

      </div>




      
      <div class="row"> 
      
      <div class="col-lg-8 md-8">
      <div class="card-header d-flex justify-content-between align-items-center">
      <h3 class="card-title" style= "font-weight: bolder;">
      COVID-19 BIORESOURCES AVAILABLE AT THSTI BIOREPOSITORY
      </h3>
      </div>
      <div class="card-body">
      <div class="clinical">
      <img src="{{ asset('site/img/covid/accessA.png') }}" class="img-fluid" alt="">
      </div>
      </div>
      </div>

      <div class="card col-lg-4 md-4">
      <div class="card-header d-flex justify-content-between align-items-center">
      <h3 class="card-title" style= "font-weight: bolder;">
      BIORESOURCE ACCESS REQUEST
      </h3>
      </div>
      <div class="card-body">
      <div class="clinical">
      <dl>
      <ul class="fa-ul">
  <li><i class="fa-li fas fa-spinner fa-square"></i><a href="https://biorepository.thsti.in/SampleAccessRequestForm/COVID-19/Biological">COVID-19 Biological Sample Access Request Form</a></li>
  <br>
  <li><i class="fa-li fas fa-spinner fa-square"></i><img src="{{ asset('site/img/covid/barcode_biological.gif') }}" class="img-fluid" alt=""></li>
  <br>
  <li><i class="fa-li fas fa-spinner fa-square"></i><a href="https://biorepository.thsti.in/SampleAccessRequestForm/COVID-19/Clinical">COVID-19 Clinical Sample Access Request Form</a></li>
  <br>
  <li><i class="fa-li fas fa-spinner fa-square"></i><img src="{{ asset('site/img/covid/barcode_clinical.gif') }}" class="img-fluid" alt=""></li>
  <!-- <li><i class="fa-li fas fa-spinner fa-pulse"></i><a href="https://biorepository.thsti.in/SampleAccessRequestForm/COVID-19/Biological">Data Sharing Policy</a></li> -->
</ul> 


      </div>
      </div>
      </div>


      </div>  

                

                
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('scripts')

<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>    
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>


<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Enrollment (Day-0) ', 'FUP-1 (Day 10-28) ', 'FUP-2 (6-10 weeks) ', 'FUP-3 (6 months) ', 'FUP-4 (12-36 months) '],
        datasets: [{
          label: 'Total Participants',
          data: [8667, 3169, 2337, 1156, 1308],
          backgroundColor: '#6f42c1',
          // backgroundColor: '#c21363',
          borderColor: 'rgba(60,141,188,0.8)',
          pointRadius: false,
          pointColor: '#3b8bba',
          pointStrokeColor: 'rgba(60,141,188,1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)'

        },

        ]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
          }
        }
      }
    });
  </script>



<!-- retrieval chart horizontal  -->

<script>
    const ctr = document.getElementById('myChartr');

    new Chart(ctr, {
      type: 'bar',
      data: {
        labels: ['Prediabetic (PG)', 'Normoglycemic (NG)', 'Diabetic (PD)'],
        datasets: [{
          label: 'Total Participants',
          axis: 'y',
          data: [273, 3, 3],
          backgroundColor: '#6f42c1',
          borderColor: 'rgba(60,141,188,0.8)',
          pointRadius: false,
          pointColor: '#3b8bba',
          pointStrokeColor: 'rgba(60,141,188,1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)'
        },
        ]
      },
      options: {
    indexAxis: 'y'
  }
    });
  </script>


<!-- second bar chart  -->

<script>
    const cty = document.getElementById('myChart3');

    new Chart(cty, {
      type: 'bar',
      data: {
        labels: ['Baseline', 'Follow-up 1', 'Follow-Up 2'],
        datasets: [{
          label: 'Serum (PG)',
          data: [4236, 150, 118],
          backgroundColor: '#6f42c1',
          borderColor: 'rgba(60,141,188,0.8)',
          pointRadius: false,
          pointColor: '#3b8bba',
          pointStrokeColor: 'rgba(60,141,188,1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)'

        },
        {
          label: 'Plasma (PG)',
          data: [2848, 85, 111],
          backgroundColor: '#ffc107',
          borderColor: 'rgba(210, 214, 222, 1)',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)'
        },
        {
          label: 'Serum (NG)',
          data: [731, 8, 68],
          backgroundColor: '#20c997',
          borderColor: 'rgba(210, 214, 222, 1)',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)'
        },
        {
          label: 'Plasma (NG)',
          data: [528, 4, 35],
          backgroundColor: '#e83e8c',
          borderColor: 'rgba(210, 214, 222, 1)',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)'
        },
        {
          label: 'Serum (PD)',
          data: [731, 8, 68],
          backgroundColor: '#28a745',
          borderColor: 'rgba(210, 214, 222, 1)',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)'
        },
        {
          label: 'Plasma (PD)',
          data: [528, 4, 35],
          backgroundColor: '#28a745',
          borderColor: 'rgba(210, 214, 222, 1)',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#fd7e14',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)'
        },

        ]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
          }
        }
      }
    });
  </script>


<!-- donut chart  -->

<script>
    const ctz = document.getElementById('myChart2');

    new Chart(ctz, {
      type: 'doughnut',
      data: {
        labels: [
    'Enrollment (Positive)',
    'Enrollment (Negative)',
    'FUP-1',
    'FUP-2',
    'FUP-3',
    'FUP-4'
  ],
  datasets: [{
    label: 'Projectwise',
    data: [37791, 26698, 39429, 23534, 9532, 12202],
    backgroundColor: [
      '#dc3545',
      '#7393B3',
      '#28a745',
      '#17a2b8',
      '#ffc107',
      '#6f42c1'
    ],
    hoverOffset: 4
  }]
}
    });
  </script>


<!-- donut chart a1  -->

<script>
    const ctza1 = document.getElementById('myCharta1');

    new Chart(ctza1, {
      type: 'doughnut',
      data: {
        labels: [
    'Enrollment',
    'FUP-1 (Day 10-28)'
  ],
  datasets: [{
    label: 'Projectwise',
    data: [57021, 96450],
    backgroundColor: [
      '#6f42c1',
      '#28a745'
    ],
    hoverOffset: 4
  }]
}
    });
  </script>


<!-- donut chart a2  -->

<script>
    const ctza2 = document.getElementById('myCharta2');

    new Chart(ctza2, {
      type: 'doughnut',
      data: {
        labels: [
          'FUP-2 (6-10 weeks)',
          'FUP-3 (6 months)',
          'FUP-4 (12-36 months)'
  ],
  datasets: [{
    label: 'Projectwise',
    data: [16676, 6782, 8622],
    backgroundColor: [
      '#dc143c',
      '#6495ed',
      '#ffd700'
    ],
    hoverOffset: 4
  }]
}
    });
  </script>

  <!-- donut chart a3  -->

<script>
    const ctza3 = document.getElementById('myCharta3');

    new Chart(ctza3, {
      type: 'doughnut',
      data: {
        labels: [
          'FUP-2 (6-10 weeks)',
          'FUP-3 (6 months)',
          'FUP-4 (12-36 months)'
  ],
  datasets: [{
    label: 'Projectwise',
    data: [6858, 2750, 3580],
    backgroundColor: [
      '#dc143c',
      '#6495ed',
      '#ffd700'
    ],
    hoverOffset: 4
  }]
}
    });
  </script>

  <!-- donut chart a4  -->

<script>
    const ctza4 = document.getElementById('myCharta4');

    new Chart(ctza4, {
      type: 'pie',
      data: {
        labels: [
    'Fig',
    'Overweight'
  ],
  datasets: [{
    label: 'Randomized',
    data: [86, 10],
    backgroundColor: [
      '#6495ed',
      '#dc143c'
    ],
    hoverOffset: 4
  }]
}
    });
  </script>









  <!-- upset plot  -->

  <script src='https://unpkg.com/@upsetjs/bundle@1'></script>
  <script src='https://unpkg.com/lodash'></script>
  <!-- <script  src="./script.js"></script> -->
  <script type="text/javascript">
  </script>
  <script type="text/javascript">

    const data = [
    { name: 'Enrollment', elems: ['NG-0001', 'NG-0002', 'NG-0003', 'NG-0004', 'NG-0005', 'NG-0006', 'NG-0007', 'NG-0008', 'NG-0009', 'NG-0010', 'NG-0011', 'NG-0012', 'NG-0013', 'NG-0014', 'NG-0015', 'NG-0016', 'NG-0017', 'NG-0018', 'NG-0019', 'NG-0020', 'NG-0021', 'NG-0022', 'NG-0023', 'NG-0024', 'NG-0025', 'NG-0026', 'NG-0027', 'NG-0028', 'NG-0029', 'NG-0030', 'NG-0031', 'NG-0032', 'NG-0033', 'NG-0034', 'NG-0035', 'NG-0036', 'NG-0037', 'NG-0038', 'NG-0039', 'NG-0040', 'NG-0041', 'NG-0042', 'NG-0043', 'NG-0044', 'NG-0045', 'NG-0046', 'NG-0047', 'NG-0048', 'NG-0049', 'NG-0050', 'NG-0051', 'NG-0052', 'NG-0053', 'NG-0054', 'NG-0055', 'NG-0056', 'NG-0057', 'NG-0058', 'NG-0059', 'NG-0060', 'NG-0061', 'NG-0062', 'NG-0067', 'NG-0068', 'NG-0069', 'NG-0070', 'NG-0071', 'NG-0072', 'NG-0073', 'NG-0074', 'NG-0075', 'NG-0076', 'NG-0077', 'NG-0078', 'NG-0079', 'NG-0080', 'NG-0081', 'NG-0082', 'NG-0083', 'NG-0084', 'NG-0085', 'NG-0086', 'NG-0087', 'NG-0088', 'NG-0089', 'NG-0090', 'NG-0091', 'NG-0092', 'NG-0093', 'NG-0094', 'NG-0095', 'NG-0096', 'NG-0097', 'NG-0098', 'NG-0099', 'NG-0100', 'NG-0101', 'NG-0102', 'NG-0103', 'NG-0104', 'NG-0105', 'NG-0106', 'NG-0107', 'NG-0108', 'NG-0109', 'NG-0110', 'NG-0111', 'NG-0112', 'NG-0113', 'NG-0114', 'NG-0115', 'NG-0116', 'NG-0117', 'NG-0118', 'NG-0119', 'NG-0120', 'NG-0121', 'NG-0122', 'NG-0123', 'NG-0124', 'NG-0125', 'NG-0126', 'NG-0134', 'NG-0135', 'NG-0136', 'NG-0137', 'NG-0138', 'NG-0139', 'NG-0140', 'NG-0141', 'NG-0142', 'NG-0143', 'NG-0144', 'NG-0145', 'NG-0146', 'NG-0147', 'NG-0148', 'NG-0149', 'NG-0150', 'NG-0151', 'NG-0152', 'NG-0154', 'NG-0155', 'NG-0156', 'NG-0157', 'NG-0158', 'NG-0159', 'NG-0160', 'NG-0161', 'NG-0162', 'NG-0163', 'NG-0164', 'NG-0165', 'NG-0166', 'NG-0167', 'NG-0168', 'NG-0169', 'NG-0170', 'NG-0171', 'NG-0541', 'NG-0591', 'PD-0001', 'PD-0002', 'PD-0003', 'PD-0004', 'PD-0005', 'PD-0006', 'PD-0007', 'PD-0008', 'PD-0009', 'PD-0010', 'PD-0011', 'PD-0012', 'PD-0013', 'PD-0014', 'PD-0015', 'PD-0016', 'PD-0017', 'PD-0018', 'PD-0019', 'PD-0020', 'PD-0021', 'PD-0022', 'PD-0023', 'PD-0024', 'PD-0025', 'PD-0026', 'PD-0027', 'PD-0028', 'PD-0029', 'PD-0030', 'PD-0031', 'PD-0032', 'PD-0033', 'PD-0034', 'PD-0035', 'PD-0036', 'PD-0037', 'PD-0038', 'PD-0039', 'PD-0040', 'PD-0041', 'PD-0042', 'PD-0043', 'PD-0044', 'PD-0045', 'PD-0046', 'PD-0047', 'PD-0048', 'PD-0049', 'PD-0050', 'PD-0051', 'PD-0052', 'PD-0053', 'PD-0054', 'PD-0055', 'PD-0056', 'PD-0057', 'PD-0058', 'PD-0059', 'PD-0060', 'PD-0061', 'PD-0062', 'PD-0063', 'PD-0064', 'PD-0065', 'PD-0066', 'PD-0067', 'PD-0068', 'PD-0069', 'PD-0070', 'PD-0071', 'PD-0072', 'PD-0073', 'PD-0074', 'PD-0075', 'PD-0076', 'PD-0077', 'PD-0078', 'PD-0079', 'PD-0080', 'PD-0081', 'PD-0082', 'PD-0083', 'PD-0084', 'PD-0085', 'PD-0086', 'PD-0087', 'PD-0088', 'PD-0089', 'PD-0090', 'PD-0091', 'PD-0092', 'PD-0093', 'PD-0094', 'PD-0095', 'PD-0096', 'PD-0097', 'PD-0098', 'PD-0099', 'PD-0100', 'PD-0101', 'PD-0102', 'PD-0103', 'PD-0104', 'PD-0105', 'PD-0106', 'PD-0107', 'PD-0108', 'PD-0109', 'PD-0110', 'PD-0111', 'PD-0112', 'PD-0113', 'PD-0114', 'PD-0115', 'PD-0116', 'PD-0117', 'PD-0118', 'PD-0119', 'PD-0120', 'PD-0121', 'PD-0122', 'PD-0123', 'PD-0124', 'PD-0125', 'PD-0126', 'PD-0127', 'PD-0128', 'PD-0129', 'PD-0130', 'PD-0131', 'PD-0132', 'PD-0133', 'PD-0134', 'PD-0135', 'PD-0136', 'PD-0137', 'PD-0138', 'PD-0139', 'PD-0140', 'PD-0141', 'PD-0142', 'PD-0143', 'PD-0144', 'PD-0145', 'PD-0146', 'PD-0147', 'PD-0148', 'PD-0149', 'PD-0150', 'PD-0151', 'PD-0152', 'PD-0153', 'PD-0154', 'PD-0155', 'PD-0156', 'PD-0157', 'PD-0158', 'PD-0159', 'PD-0160', 'PD-0161', 'PD-0162', 'PD-0163', 'PD-0164', 'PD-0165', 'PD-0166', 'PD-0167', 'PD-0168', 'PD-0169', 'PD-0170', 'PD-0171', 'PD-0172', 'PD-0173', 'PD-0174', 'PD-0175', 'PD-0176', 'PD-0177', 'PD-0178', 'PD-0179', 'PD-6070', 'PG-0061', 'PG-0062', 'PG-0063', 'PG-0064', 'PG-0065', 'PG-0066', 'PG-0067', 'PG-0068', 'PG-0069', 'PG-0070', 'PG-0071', 'PG-0072', 'PG-0073', 'PG-0074', 'PG-0075', 'PG-0076', 'PG-0077', 'PG-0078', 'PG-0079', 'PG-0080', 'PG-0081', 'PG-0082', 'PG-0083', 'PG-0084', 'PG-0085', 'PG-0086', 'PG-0087', 'PG-0088', 'PG-0089', 'PG-0090', 'PG-0091', 'PG-0092', 'PG-0093', 'PG-0094', 'PG-0095', 'PG-0096', 'PG-0097', 'PG-0098', 'PG-0099', 'PG-0100', 'PG-0101', 'PG-0102', 'PG-0103', 'PG-0104', 'PG-0105', 'PG-0106', 'PG-0107', 'PG-0108', 'PG-0109', 'PG-0110', 'PG-0111', 'PG-0112', 'PG-0113', 'PG-0114', 'PG-0115', 'PG-0116', 'PG-0117', 'PG-0118', 'PG-0119', 'PG-0120', 'PG-0121', 'PG-0122', 'PG-0123', 'PG-0124', 'PG-0125', 'PG-0126', 'PG-0127', 'PG-0128', 'PG-0129', 'PG-0130', 'PG-0131', 'PG-0132', 'PG-0133', 'PG-0134', 'PG-0135', 'PG-0136', 'PG-0137', 'PG-0138', 'PG-0139', 'PG-0140', 'PG-0141', 'PG-0142', 'PG-0143', 'PG-0144', 'PG-0145', 'PG-0146', 'PG-0147', 'PG-0148', 'PG-0149', 'PG-0150', 'PG-0151', 'PG-0152', 'PG-0153', 'PG-0154', 'PG-0155', 'PG-0156', 'PG-0157', 'PG-0158', 'PG-0159', 'PG-0160', 'PG-0161', 'PG-0162', 'PG-0163', 'PG-0164', 'PG-0165', 'PG-0166', 'PG-0167', 'PG-0168', 'PG-0169', 'PG-0170', 'PG-0171', 'PG-0172', 'PG-0173', 'PG-0174', 'PG-0175', 'PG-0176', 'PG-0177', 'PG-0178', 'PG-0179', 'PG-0180', 'PG-0181', 'PG-0182', 'PG-0183', 'PG-0184', 'PG-0185', 'PG-0186', 'PG-0187', 'PG-0188', 'PG-0189', 'PG-0190', 'PG-0191', 'PG-0192', 'PG-0193', 'PG-0194', 'PG-0195', 'PG-0196', 'PG-0197', 'PG-0198', 'PG-0199', 'PG-0200', 'PG-0201', 'PG-0202', 'PG-0203', 'PG-0204', 'PG-0205', 'PG-0206', 'PG-0207', 'PG-0208', 'PG-0209', 'PG-0210', 'PG-0211', 'PG-0212', 'PG-0213', 'PG-0214', 'PG-0215', 'PG-0216', 'PG-0217', 'PG-0218', 'PG-0219', 'PG-0220', 'PG-0221', 'PG-0222', 'PG-0223', 'PG-0224', 'PG-0225', 'PG-0226', 'PG-0227', 'PG-0228', 'PG-0229', 'PG-0230', 'PG-0231', 'PG-0232', 'PG-0233', 'PG-0234', 'PG-0235', 'PG-0236', 'PG-0237', 'PG-0238', 'PG-0239', 'PG-0240', 'PG-0241', 'PG-0242', 'PG-0243', 'PG-0244', 'PG-0245', 'PG-0246', 'PG-0247', 'PG-0248', 'PG-0249', 'PG-0250', 'PG-0251', 'PG-0252', 'PG-0253', 'PG-0254', 'PG-0255', 'PG-0256', 'PG-0257', 'PG-0258', 'PG-0259', 'PG-0260', 'PG-0261', 'PG-0262', 'PG-0263', 'PG-0264', 'PG-0265', 'PG-0266', 'PG-0267', 'PG-0268', 'PG-0269', 'PG-0270', 'PG-0271', 'PG-0272', 'PG-0273', 'PG-0274', 'PG-0275', 'PG-0276', 'PG-0277', 'PG-0278', 'PG-0279', 'PG-0280', 'PG-0281', 'PG-0282', 'PG-0283', 'PG-0284', 'PG-0285', 'PG-0286', 'PG-0287', 'PG-0288', 'PG-0289', 'PG-0290', 'PG-0291', 'PG-0292', 'PG-0293', 'PG-0294', 'PG-0295', 'PG-0296', 'PG-0297', 'PG-0298', 'PG-0299', 'PG-0300', 'PG-0301', 'PG-0302', 'PG-0303', 'PG-0304', 'PG-0305', 'PG-0306', 'PG-0307', 'PG-0308', 'PG-0309', 'PG-0310', 'PG-0311', 'PG-0312', 'PG-0313', 'PG-0314', 'PG-0315', 'PG-0316', 'PG-0317', 'PG-0318', 'PG-0319', 'PG-0320', 'PG-0321', 'PG-0322', 'PG-0323', 'PG-0324', 'PG-0325', 'PG-0326', 'PG-0327', 'PG-0328', 'PG-0329', 'PG-0330', 'PG-0331', 'PG-0332', 'PG-0333', 'PG-0334', 'PG-0335', 'PG-0336', 'PG-0337', 'PG-0338', 'PG-0339', 'PG-0340', 'PG-0341', 'PG-0342', 'PG-0343', 'PG-0344', 'PG-0345', 'PG-0346', 'PG-0347', 'PG-0348', 'PG-0349', 'PG-0350', 'PG-0351', 'PG-0352', 'PG-0353', 'PG-0354', 'PG-0355', 'PG-0356', 'PG-0357', 'PG-0358', 'PG-0359', 'PG-0360', 'PG-0361', 'PG-0362', 'PG-0363', 'PG-0364', 'PG-0365', 'PG-0366', 'PG-0367', 'PG-0368', 'PG-0369', 'PG-0370', 'PG-0371', 'PG-0372', 'PG-0373', 'PG-0374', 'PG-0375', 'PG-0376', 'PG-0377', 'PG-0378', 'PG-0379', 'PG-0380', 'PG-0381', 'PG-0382', 'PG-0383', 'PG-0384', 'PG-0385', 'PG-0386', 'PG-0387', 'PG-0388', 'PG-0389', 'PG-0390', 'PG-0391', 'PG-0392', 'PG-0393', 'PG-0394', 'PG-0395', 'PG-0396', 'PG-0397', 'PG-0398', 'PG-0399', 'PG-0400', 'PG-0401', 'PG-0402', 'PG-0403', 'PG-0404', 'PG-0405', 'PG-0406', 'PG-0407', 'PG-0408', 'PG-0409', 'PG-0410', 'PG-0411', 'PG-0412', 'PG-0413', 'PG-0414', 'PG-0415', 'PG-0416', 'PG-0417', 'PG-0418', 'PG-0419', 'PG-0420', 'PG-0421', 'PG-0422', 'PG-0423', 'PG-0424', 'PG-0425', 'PG-0426', 'PG-0427', 'PG-0428', 'PG-0429', 'PG-0430', 'PG-0431', 'PG-0432', 'PG-0433', 'PG-0434', 'PG-0435', 'PG-0436', 'PG-0437', 'PG-0438', 'PG-0439', 'PG-0440', 'PG-0441', 'PG-0442', 'PG-0443', 'PG-0444', 'PG-0445', 'PG-0446', 'PG-0447', 'PG-0448', 'PG-0449', 'PG-0450', 'PG-0451', 'PG-0452', 'PG-0453', 'PG-0454', 'PG-0455', 'PG-0456', 'PG-0457', 'PG-0458', 'PG-0459', 'PG-0460', 'PG-0461', 'PG-0462', 'PG-0463', 'PG-0464', 'PG-0465', 'PG-0466', 'PG-0467', 'PG-0468', 'PG-0469', 'PG-0470', 'PG-0471', 'PG-0472', 'PG-0473', 'PG-0474', 'PG-0475', 'PG-0476', 'PG-0477', 'PG-0478', 'PG-0479', 'PG-0480', 'PG-0481', 'PG-0482', 'PG-0483', 'PG-0484', 'PG-0485', 'PG-0486', 'PG-0487', 'PG-0488', 'PG-0489', 'PG-0490', 'PG-0491', 'PG-0492', 'PG-0493', 'PG-0494', 'PG-0495', 'PG-0496', 'PG-0497', 'PG-0498', 'PG-0499', 'PG-0500', 'PG-0501', 'PG-0502', 'PG-0503', 'PG-0504', 'PG-0505', 'PG-0506', 'PG-0507', 'PG-0508', 'PG-0509', 'PG-0510', 'PG-0511', 'PG-0512', 'PG-0513', 'PG-0514', 'PG-0515', 'PG-0516', 'PG-0517', 'PG-0518', 'PG-0519', 'PG-0520', 'PG-0521', 'PG-0522', 'PG-0523', 'PG-0524', 'PG-0525', 'PG-0526', 'PG-0527', 'PG-0528', 'PG-0529', 'PG-0530', 'PG-0531', 'PG-0532', 'PG-0533', 'PG-0534', 'PG-0535', 'PG-0536', 'PG-0537', 'PG-0538', 'PG-0539', 'PG-0540', 'PG-0541', 'PG-0542', 'PG-0543', 'PG-0544', 'PG-0545', 'PG-0546', 'PG-0547', 'PG-0548', 'PG-0549', 'PG-0550', 'PG-0551', 'PG-0552', 'PG-0553', 'PG-0554', 'PG-0555', 'PG-0556', 'PG-0557', 'PG-0558', 'PG-0559', 'PG-0560', 'PG-0561', 'PG-0562', 'PG-0563', 'PG-0564', 'PG-0565', 'PG-0566', 'PG-0567', 'PG-0568', 'PG-0569', 'PG-0570', 'PG-0571', 'PG-0572', 'PG-0573', 'PG-0574', 'PG-0575', 'PG-0576', 'PG-0577', 'PG-0578', 'PG-0579', 'PG-0580', 'PG-0581', 'PG-0582', 'PG-0583', 'PG-0584', 'PG-0585', 'PG-0586', 'PG-0587', 'PG-0588', 'PG-0589', 'PG-0590', 'PG-0591', 'PG-0592', 'PG-0593', 'PG-0594', 'PG-0595', 'PG-0596', 'PG-0597', 'PG-0598', 'PG-0599', 'PG-0600', 'PG-0601', 'PG-0602', 'PG-0603', 'PG-0604', 'PG-0605', 'PG-0606', 'PG-0607', 'PG-0608', 'PG-0609', 'PG-0610', 'PG-0611', 'PG-0612', 'PG-0613', 'PG-0614', 'PG-0615', 'PG-0616', 'PG-0617', 'PG-0618', 'PG-0619', 'PG-0620', 'PG-0621', 'PG-0622', 'PG-0623', 'PG-0624', 'PG-0625', 'PG-0626', 'PG-0627', 'PG-0628', 'PG-0629', 'PG-0630', 'PG-0631', 'PG-0632', 'PG-0633', 'PG-0634', 'PG-0635', 'PG-0636', 'PG-0637', 'PG-0638', 'PG-0639', 'PG-0640', 'PG-0641', 'PG-0642', 'PG-0643', 'PG-0644', 'PG-0645', 'PG-0646', 'PG-0647', 'PG-0648', 'PG-0649', 'PG-0650', 'PG-0651', 'PG-0652', 'PG-0653', 'PG-0654', 'PG-0655', 'PG-0656', 'PG-0657', 'PG-0658', 'PG-0659', 'PG-0660', 'PG-0661', 'PG-0662', 'PG-0663', 'PG-0664', 'PG-0665', 'PG-0666', 'PG-0667', 'PG-0668', 'PG-0669', 'PG-0670', 'PG-0671', 'PG-0672', 'PG-0673', 'PG-0674', 'PG-0675', 'PG-0676', 'PG-0677', 'PG-0678', 'PG-0679', 'PG-0680', 'PG-0681', 'PG-0682', 'PG-0683', 'PG-0684', 'PG-0685', 'PG-0686', 'PG-0687', 'PG-0688', 'PG-0689', 'PG-0690', 'PG-0691', 'PG-0692', 'PG-0693', 'PG-0694', 'PG-0695', 'PG-0696', 'PG-0697', 'PG-0698', 'PG-0699', 'PG-0700', 'PG-0701', 'PG-0702', 'PG-0703', 'PG-0704', 'PG-0705', 'PG-0706', 'PG-0707', 'PG-0708', 'PG-0709', 'PG-0710', 'PG-0711', 'PG-0712', 'PG-0713', 'PG-0714', 'PG-0715', 'PG-0716', 'PG-0717', 'PG-0718', 'PG-0719', 'PG-0720', 'PG-0721', 'PG-0722', 'PG-0723', 'PG-0724', 'PG-0725', 'PG-0726', 'PG-0727', 'PG-0728', 'PG-0729', 'PG-0730', 'PG-0731', 'PG-0732', 'PG-0733', 'PG-0734', 'PG-0735', 'PG-0736', 'PG-0737', 'PG-0738', 'PG-0740', 'PG-0741', 'PG-0742', 'PG-0743', 'PG-0744', 'PG-0745', 'PG-0746', 'PG-0747', 'PG-0748', 'PG-0749', 'PG-0750', 'PG-0754', 'PG-0755', 'PG-0756', 'PG-0757', 'PG-0758', 'PG-0759', 'PG-0760', 'PG-0761', 'PG-0762', 'PG-0763', 'PG-0764', 'PG-0765', 'PG-0766', 'PG-0767', 'PG-0768', 'PG-0769', 'PG-0770', 'PG-0771', 'PG-0772', 'PG-0773', 'PG-0774', 'PG-0775', 'PG-0776', 'PG-0777', 'PG-0778', 'PG-0780', 'PG-0781', 'PG-0782', 'PG-0783', 'PG-0784', 'PG-0785', 'PG-0786', 'PG-0787', 'PG-0788', 'PG-0789', 'PG-0790', 'PG-0791', 'PG-0792', 'PG-0793', 'PG-0794', ], },
    { name: 'FUP_1', elems: [ 'NG-0043', 'NG-0111', 'NG-0114', 'NG-0115', 'PD-0108', 'PD-0157', 'PG-0088', 'PG-0100', 'PG-0101', 'PG-0109', 'PG-0115', 'PG-0120', 'PG-0125', 'PG-0126', 'PG-0128', 'PG-0129', 'PG-0132', 'PG-0139', 'PG-0140', 'PG-0144', 'PG-0151', 'PG-0152', 'PG-0154', 'PG-0156', 'PG-0161', 'PG-0164', 'PG-0166', 'PG-0169', 'PG-0171', 'PG-0172', 'PG-0175', 'PG-0179', 'PG-0182', 'PG-0187', 'PG-0191', 'PG-0199', 'PG-0203', 'PG-0207', 'PG-0213', 'PG-0214', 'PG-0224', 'PG-0229', 'PG-0232', 'PG-0240', 'PG-0243', 'PG-0246', 'PG-0284', 'PG-0296', 'PG-0321', 'PG-0332', 'PG-0336', 'PG-0340', 'PG-0360', 'PG-0367', 'PG-0368', 'PG-0370', 'PG-0375', 'PG-0381', 'PG-0387', 'PG-0390', 'PG-0394', 'PG-0397', 'PG-0401', 'PG-0402', 'PG-0408', 'PG-0418', 'PG-0432', 'PG-0434', 'PG-0438', 'PG-0443', 'PG-0449', 'PG-0455', 'PG-0458', 'PG-0463', 'PG-0468', 'PG-0472', 'PG-0475', 'PG-0476', 'PG-0480', 'PG-0483', 'PG-0501', 'PG-0508', 'PG-0512', 'PG-0535', 'PG-0536', 'PG-0545', 'PG-0554', 'PG-0556', 'PG-0559', 'PG-0583', 'PG-0610', 'PD-0208', 'PD-0225', 'PD-0339'  ], },
    { name: 'FUP_2', elems: [ 'NG-0001', 'NG-0007', 'NG-0008', 'NG-0025', 'NG-0026', 'NG-0027', 'NG-0031', 'NG-0035', 'NG-0038', 'NG-0041', 'NG-0042', 'NG-0046', 'NG-0054', 'NG-0059', 'NG-0060', 'NG-0074', 'NG-0083', 'NG-0136', 'NG-0137', 'NG-0139', 'NG-0151', 'NG-0154', 'NG-0155', 'PD-0001', 'PD-0005', 'PD-0010', 'PD-0011', 'PD-0013', 'PD-0015', 'PD-0018', 'PD-0024', 'PD-0025', 'PD-0026', 'PD-0032', 'PD-0039', 'PD-0041', 'PD-0043', 'PD-0053', 'PD-0065', 'PD-0124', 'PD-0126', 'PD-0127', 'PD-0128', 'PD-0129', 'PD-0130', 'PD-0131', 'PD-0132', 'PD-0133', 'PD-0134', 'PD-0135', 'PD-0136', 'PD-0137', 'PD-0158', 'PD-0160', 'PG-0076', 'PG-0083', 'PG-0090', 'PG-0091', 'PG-0118', 'PG-0122', 'PG-0123', 'PG-0127', 'PG-0136', 'PG-0137', 'PG-0138', 'PG-0141', 'PG-0142', 'PG-0143', 'PG-0145', 'PG-0148', 'PG-0149', 'PG-0158', 'PG-0159', 'PG-0162', 'PG-0163', 'PG-0170', 'PG-0177', 'PG-0178', 'PG-0181', 'PG-0186', 'PG-0195', 'PG-0197', 'PG-0209', 'PG-0212', 'PG-0216', 'PG-0222', 'PG-0235', 'PG-0249', 'PG-0251', 'PG-0252', 'PG-0253', 'PG-0254', 'PG-0255', 'PG-0256', 'PG-0257', 'PG-0258', 'PG-0260', 'PG-0261', 'PG-0263', 'PG-0264', 'PG-0269', 'PG-0270', 'PG-0275', 'PG-0277', 'PG-0283', 'PG-0290', 'PG-0295', 'PG-0300', 'PG-0301', 'PG-0304', 'PG-0306', 'PG-0308', 'PG-0311', 'PG-0430', 'PG-0756', 'PG-0757', 'PG-0758', 'NG-0065', 'NG-0127', 'NG-0128'  ], },
    { name: 'FUP_3', elems: [ 'NG-0043', 'NG-0111', 'NG-0114', 'NG-0115', 'PD-0108', 'PD-0157', 'PG-0088', 'PG-0100', 'PG-0101', 'PG-0109', 'PG-0115', 'PG-0120', 'PG-0125', 'PG-0126', 'PG-0128', 'PG-0129', 'PG-0132', 'PG-0139', 'PG-0140', 'PG-0144', 'PG-0151', 'PG-0152', 'PG-0154', 'PG-0156', 'PG-0161', 'PG-0164', 'PG-0166', 'PG-0169', 'PG-0171', 'PG-0172', 'PG-0175', 'PG-0179', 'PG-0182', 'PG-0187', 'PG-0191', 'PG-0199', 'PG-0203', 'PG-0207', 'PG-0213', 'PG-0214', 'PG-0224', 'PG-0229', 'PG-0232', 'PG-0240', 'PG-0243', 'PG-0246', 'PG-0284', 'PG-0296', 'PG-0321', 'PG-0332', 'PG-0336', 'PG-0340', 'PG-0360', 'PG-0367', 'PG-0368', 'PG-0370', 'PG-0375', 'PG-0381', 'PG-0387', 'PG-0390', 'PG-0394', 'PG-0397', 'PG-0401', 'PG-0402', 'PG-0408', 'PG-0418', 'PG-0432', 'PG-0434', 'PG-0438', 'PG-0443', 'PG-0449', 'PG-0455', 'PG-0458', 'PG-0463', 'PG-0468', 'PG-0472', 'PG-0475', 'PG-0476', 'PG-0480', 'PG-0483', 'PG-0501', 'PG-0508', 'PG-0512', 'PG-0535', 'PG-0536', 'PG-0545', 'PG-0554', 'PG-0556', 'PG-0559', 'PG-0583', 'PG-0610', 'PD-0208', 'PD-0225', 'PD-0339'  ], },
    { name: 'FUP_4', elems: [ 'NG-0001', 'NG-0007', 'NG-0008', 'NG-0025', 'NG-0026', 'NG-0027', 'NG-0031', 'NG-0035', 'NG-0038', 'NG-0041', 'NG-0042', 'NG-0046', 'NG-0054', 'NG-0059', 'NG-0060', 'NG-0074', 'NG-0083', 'NG-0136', 'NG-0137', 'NG-0139', 'NG-0151', 'NG-0154', 'NG-0155', 'PD-0001', 'PD-0005', 'PD-0010', 'PD-0011', 'PD-0013', 'PD-0015', 'PD-0018', 'PD-0024', 'PD-0025', 'PD-0026', 'PD-0032', 'PD-0039', 'PD-0041', 'PD-0043', 'PD-0053', 'PD-0065', 'PD-0124', 'PD-0126', 'PD-0127', 'PD-0128', 'PD-0129', 'PD-0130', 'PD-0131', 'PD-0132', 'PD-0133', 'PD-0134', 'PD-0135', 'PD-0136', 'PD-0137', 'PD-0158', 'PD-0160', 'PG-0076', 'PG-0083', 'PG-0090', 'PG-0091', 'PG-0118', 'PG-0122', 'PG-0123', 'PG-0127', 'PG-0136', 'PG-0137', 'PG-0138', 'PG-0141', 'PG-0142', 'PG-0143', 'PG-0145', 'PG-0148', 'PG-0149', 'PG-0158', 'PG-0159', 'PG-0162', 'PG-0163', 'PG-0170', 'PG-0177', 'PG-0178', 'PG-0181', 'PG-0186', 'PG-0195', 'PG-0197', 'PG-0209', 'PG-0212', 'PG-0216', 'PG-0222', 'PG-0235', 'PG-0249', 'PG-0251', 'PG-0252', 'PG-0253', 'PG-0254', 'PG-0255', 'PG-0256', 'PG-0257', 'PG-0258', 'PG-0260', 'PG-0261', 'PG-0263', 'PG-0264', 'PG-0269', 'PG-0270', 'PG-0275', 'PG-0277', 'PG-0283', 'PG-0290', 'PG-0295', 'PG-0300', 'PG-0301', 'PG-0304', 'PG-0306', 'PG-0308', 'PG-0311', 'PG-0430', 'PG-0756', 'PG-0757', 'PG-0758', 'NG-0065', 'NG-0127', 'NG-0128'  ], }


    ];
    console.log(data);
    const sets = UpSetJS.asSets(data);
    const props = {
    sets: sets,
    width: 900,
    height: 400,
    combinations: UpSetJS.generateCombinations(sets, {
        type: 'intersection', //  There are three types: intersection to generate set intersections, union for set unions, and distinctIntersection for set intersections that do not appear in any other set
        min: 1,
        limit: 100,
        order: 'cardinality',
    }),
    selection: null,
    setName: ' ',
    combinationName: 'Participants'
    }
    props.onHover = (set) => {
    props.selection = set;
    UpSetJS.render(document.getElementById('mkip'), props);
    };
    UpSetJS.render(document.getElementById('mkip'), props);
  </script>








































<!DOCTYPE html>
<html>
  <head>
    <title>JavaScript Sankey Diagram</title>
    <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-sankey.min.js"></script>
    <style type="text/css">      
      html, body, #container { 
        width: 95%; height: 95%; margin: 0; padding: 0; 
      } 
    </style>
  </head>
  <body>  
    <div id="container"></div>
    <script>
      anychart.onDocumentReady(function () {
  
        // add data
        const data = [
          {from: "Normoglycemic", to: "Data_2", value: 6},
          {from: "Prediabetic", to: "Data_2", value: 24},
          {from: "Diabetic", to: "Data_2", value: 79},
          {from: "Data_1", to: "Data_2", value: 0},
          {from: "Normoglycemic", to: "Adult", value: 319},
          {from: "Prediabetic", to: "Adult", value: 261},
          {from: "Diabetic", to: "Adult", value: 627},
          {from: "Data_1", to: "Adult", value: 885},
          {from: "Data_2", to: "Female", value: 45},
          {from: "Data_2", to: "Male", value: 64},
          {from: "Adult", to: "Female", value: 425},
          {from: "Adult", to: "Male", value: 1667},
          {from: "Female", to: "Survived", value: 344},
          {from: "Female", to: "Perished", value: 126},
          {from: "Male", to: "Survived", value: 367},
          {from: "Male", to: "Perished", value: 1364}
        ];


        // const data = [
        //   {from: "Normoglycemic", to: "Data_2", value: 6},
        //   {from: "Prediabetic", to: "Data_2", value: 24},
        //   {from: "Diabetic", to: "Data_2", value: 79},
        //   {from: "Data_1", to: "Data_2", value: 0},
        //   {from: "Normoglycemic", to: "Adult", value: 319},
        //   {from: "Prediabetic", to: "Adult", value: 261},
        //   {from: "Diabetic", to: "Adult", value: 627},
        //   {from: "Data_1", to: "Adult", value: 885},
        //   {from: "Data_2", to: "Female", value: 45},
        //   {from: "Data_2", to: "Male", value: 64},
        //   {from: "Adult", to: "Female", value: 425},
        //   {from: "Adult", to: "Male", value: 1667},
        //   {from: "Female", to: "Survived", value: 344},
        //   {from: "Female", to: "Perished", value: 126},
        //   {from: "Male", to: "Survived", value: 367},
        //   {from: "Male", to: "Perished", value: 1364}
        // ];
  
        // create a sankey diagram instance
        let chart = anychart.sankey();

        // load the data to the sankey diagram instance
        chart.data(data);

        // set the chart's padding
        chart.padding(20, 40);

        // configure a custom color palette
        chart.palette([
          "#f5dc50",
          "#e1a03c",
          "#c87d5a",
          "#fff0c8",
          "#aa96b4",
          "#6e5a7d",
          "#e19196",
          "#419bd2",
          "#46afaa",
          "#5a5050"
        ]);
  
        // customize the nodes:
        // set the width
        chart.nodeWidth("40%");
        // set the padding
        chart.nodePadding(30);
        // customize the labels
        chart.node().normal().labels().fontSize(14);
        chart.node().labels().useHtml(true);
        chart
          .node()
          .labels()
          .format("<span style='font-weight:bold'>{%name}</span><br>{%value}");

        // customize the links
        chart.flow({
          normal: {
            fill: function () {
              return anychart.color.lighten(this.sourceColor, 0.5) + " " + 0.3;
            }
          },
          hovered: {
            fill: function () {
              return this.sourceColor + " " + 0.8;
            }
          }
        });

        // add a title and customize it
        chart
          .title()
          .enabled(true)
          .useHtml(true)
          .text(
            '<span style = "color: #2b2b2b; font-size:20px;">Titanic Survivors</span>' +
              '<br/><span style="color:#00bfa5; font-size: 16px;">(by gender, age, ticket class)</span>'
          );
  
        // set the chart container id
        chart.container("container");

        // draw the chart
        chart.draw();
  
      });
    </script>
  </body>
</html>



<!-- tables------------------------------------->



<h3 style="text-align: center; font-weight: bold">Tables</h3>
            <br>
            <hr style="margin: 0 auto; height:2px; width: 85%; border-width: 0; color: brown; background-color: brown;">

            <div class="custom-scrollbar">

  <div class="container">
    <div class="table-container">
      <button class="btn btn-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#tableBody" aria-expanded="false" aria-controls="tableBody">
        Show dataset
      </button>
      <table class="table table-bordered table-hover">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Details</th>
          </tr>
        </thead>
        <tbody class="collapse" id="tableBody">
          <!-- Rows will be inserted here by JavaScript -->
        </tbody>
      </table>
    </div>
    <nav>
      <ul class="pagination">
        <!-- Pagination items will be inserted here by JavaScript -->
      </ul>
    </nav>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const rowsPerPage = 10;
    const totalRows = 50;
    const tableBody = document.getElementById('tableBody');
    const pagination = document.querySelector('.pagination');

    // Create 50 rows with placeholder content
    const data = Array.from({ length: totalRows }, (v, k) => ({
      id: k + 1,
      name: `Item ${k + 1}`,
      details: `These are the details for Item ${k + 1}. More information can be added here.`
    }));

    // Function to display rows
    function displayRows(page) {
      tableBody.innerHTML = '';
      const start = (page - 1) * rowsPerPage;
      const end = start + rowsPerPage;
      const rows = data.slice(start, end);

      rows.forEach(row => {
        const tr = document.createElement('tr');
        tr.classList.add('table-row');
        tr.dataset.id = row.id;
        tr.innerHTML = `
          <td>${row.id}</td>
          <td>${row.name}</td>
          <td>${row.details}</td>
        `;

        tableBody.appendChild(tr);
      });
    }

    // Function to create pagination
    function createPagination() {
      pagination.innerHTML = '';
      const pages = Math.ceil(totalRows / rowsPerPage);

      for (let i = 1; i <= pages; i++) {
        const li = document.createElement('li');
        li.classList.add('page-item');
        li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
        li.addEventListener('click', function (e) {
          e.preventDefault();
          displayRows(i);
          document.querySelector('.pagination .active')?.classList.remove('active');
          li.classList.add('active');
        });
        pagination.appendChild(li);
      }
    }

    // Initialize table
    displayRows(1);
    createPagination();
    document.querySelector('.pagination .page-item:first-child').classList.add('active');
  </script>

</div>




 






























<div class="col-lg-12 col-12 mb-3 mb-lg-0">
                            <!-- <h4 class="mb-4 pb-lg-2">Membership Fees</h4> -->

                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th style="width: 34%;">Biorepositories</th>
                                            
                                            <th style="width: 22%;">Sample type</th>
                                            
                                            <th style="width: 22%;">Description</th>
                                            
                                            <th style="width: 22%;">Know more</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-start">THSTI-RCB (NCR-Cluster)</th>
                                            
                                            <td>
                                                <i class="bi-check-circle-fill"></i>
                                            </td>
                                            
                                            <td>
                                                <i class="bi-check-circle-fill"></i>
                                            </td>
                                            
                                            <td>
                                                <i class="bi-check-circle-fill"></i>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row" class="text-start">ILS</th>
                                            <td>
                                                <i class="bi-check-circle-fill"></i>
                                            </td>

                                            <td>
                                                <i class="bi-check-circle-fill"></i>
                                            </td>

                                            <td>
                                                <i class="bi-check-circle-fill"></i>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row" class="text-start">InSTEM</th>

                                            <td>
                                                <i class="bi-x-circle-fill"></i>
                                            </td>

                                            <td>
                                                <i class="bi-check-circle-fill"></i>
                                            </td>

                                            <td>
                                                <i class="bi-check-circle-fill"></i>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row" class="text-start">NCCS</th>

                                            <td>
                                                <i class="bi-x-circle-fill"></i>
                                            </td>

                                            <td>
                                                <i class="bi-check-circle-fill"></i>
                                            </td>

                                            <td>
                                                <i class="bi-check-circle-fill"></i>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row" class="text-start">ILBS</th>

                                            <td>
                                                <i class="bi-x-circle-fill"></i>
                                            </td>

                                            <td>
                                                <i class="bi-x-circle-fill"></i>
                                            </td>

                                            <td>
                                                <i class="bi-check-circle-fill"></i>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

















                        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stacked Bar Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart" width="60%" height="20vh"></canvas>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Dataset 1',
                    data: [10, 20, 30, 40, 50, 60, 70],
                    backgroundColor: [
                        'red'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(99, 255, 132, 1)'
                    ],
                    borderWidth: 1
                }, {
                    label: 'Dataset 2',
                    data: [20, 30, 40, 50, 60, 70, 80],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(99, 255, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(99, 255, 132, 1)'
                    ],
                    borderWidth: 1
                }, {
                    label: 'Dataset 3',
                    data: [30, 40, 50, 60, 70, 80, 90],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(99, 255, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(99, 255, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        stacked: true,
                    },
                    y: {
                        stacked: true
                    }
                }
            }
        });
    </script>
</body>
</html>

