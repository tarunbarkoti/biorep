<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>THSTI Biorepository</title>

        <!-- CSS FILES -->  

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <link href="css/style2.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>
        <script src="plugins/select2/js/select2.full.min.js"></script>
        <script src="plugins/chart.js/Chart.min.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta3/css/bootstrap.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">

        <link  href="css/style2.css" rel="stylesheet">
        
    </head>
    
    <body>

    <div class="header-image">
<div class="col-lg-12 col-md-12" style="position: fixed; z-index: 99;  background-color: #454679; height: 10vh; border-bottom: 1px solid whitesmoke;">
<h3 class="text-light mb-4 pb-3" style="padding-top: 10px; text-align: center; font-weight: bolder;">COVID-19 BIORESOURCE AT THSTI BIOREPOSITORY</h3>             
</div>
</div>
<br>
<br>
<br>
<br>

<!-- debug above code later -->


<!-- <div class="col-lg-12 col-md-12" style="position: fixed; z-index: 99;">                                    
    <h3 class="text-light mb-4 pb-3" style="padding-top: 10px; text-align: center; background-color: #454679; border-top: 16px solid coral;">DBT COVID-19 CONSORTIA AT THSTI BIOREPOSITORY</h3>
</div> -->

            <section class="content-header">


      <h3 style="text-align: center; font-weight: bold">Participants enrolled and aliquots stored</h3>
            
            <hr style="margin: 0 auto; height:2px; width: 100%; border-width: 0; color: brown; background-color: brown;">
      <br>
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

      <br>
      <br>

      <h3 style="text-align: center; font-weight: bold">Cohort design</h3>
            
            <hr style="margin: 0 auto; height:2px; width: 100%; border-width: 0; color: brown; background-color: brown;">
      <br>
      <br>

      <div class= "col-lg-11 md-11" style="display: block; margin-left: auto; margin-right: auto;">
      <div class="">
      <div class="flow1">
      <img src="images/covid_flow2.png" alt="flow" width="100%" height="400"> 
      </div>
      </div>
      </div>

      <br>
      <br>

      <h3 style="text-align: center; font-weight: bold">Participants at different timepoints</h3>
            
            <hr style="margin: 0 auto; height:2px; width: 100%; border-width: 0; color: brown; background-color: brown;">
      <br>
      <br>

      <div class= "col-lg-11 md-11" style="display: block; margin-left: 300px;">
      <!-- <div class="card-header d-flex justify-content-between align-items-center"> -->
      <!-- <h3 class="card-title"> -->
      <!-- Variables (visit-wise) -->
      <!-- </h3> -->
      <!-- </div> -->
      <div class="">
      <div class="flow1">
      <img src="images/covidplot4.jpg" alt="flow" width="70%" height="550"> 
      </div>
      </div>
      </div>

      <br>
      <br>

      <h3 style="text-align: center; font-weight: bold">Data Dictionary</h3>
            
            <hr style="margin: 0 auto; height:2px; width: 100%; border-width: 0; color: brown; background-color: brown;">
      <br>


      <div>
        
      <button class="toggle-btn" onclick="toggleTable()">Show table</button>


<table class="expandable-table">
  <thead>
  <tr class="hidden">
  <th width="15%">Timepoint</th>
  <th width="20%">Form name</th>
  <th width="15%">Variable Name</th>
  <th width="50%">Description</th>
 </tr>
 </thead>
 <tbody>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>RNO</td>
  <td>Record Number</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>TMSTP</td>
  <td>Timestamp</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>EADD</td>
  <td>Email address</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>INF</td>
  <td>Informant</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>OTHINF</td>
  <td>If Others, Please specify the relation</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SNO</td>
  <td>S. No</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CENT</td>
  <td>Centre</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NMPT</td>
  <td>1 Name of the Patient</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>PTNO</td>
  <td>2 Patient ID No (Hospital ID)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>LOC</td>
  <td>3 Ward/OPD/ICU</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SPFY</td>
  <td>3.1 Please specify</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DOB</td>
  <td>4 Date of birth</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>AAGE</td>
  <td>4.1 In case exact DOB not known,Approximate age (In completed years)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>GEN</td>
  <td>5 Gender</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>PADD1</td>
  <td>6 Present address</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>LMARK1</td>
  <td>Landmark</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CITY1</td>
  <td>City</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>STATE1</td>
  <td>State</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>PIN1</td>
  <td>Pin</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>MOB</td>
  <td>7 Mobile</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ALTNO1</td>
  <td>8 Alternate number 1</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ALTNO2</td>
  <td>9 Alternate number 2</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ADDNO</td>
  <td>10 Additional Number</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>RELADNO</td>
  <td>10.1 Relation of the person whose additional number
  provided</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>EMAIL</td>
  <td>11 Email</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ALTADD</td>
  <td>12 Alternate address (If any)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>LMARK2</td>
  <td>Landmark</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CITY2</td>
  <td>City</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>STATE2</td>
  <td>State</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>PIN2</td>
  <td>Pin</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>LANDNO1</td>
  <td>12.1 Landline Number</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>RELALTNO</td>
  <td>12.2Relation of the
  person whose alternate address is provided</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>PADD2</td>
  <td>13 Permanent Address</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>LANDNO2</td>
  <td>Landmark</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CITY</td>
  <td>City</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>STATE</td>
  <td>State</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>PIN</td>
  <td>Pin</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>LANDNO3</td>
  <td>13.1 Landline</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DTFSSING</td>
  <td>1.1 Date of the first onset of symptoms &amp; signs</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FVR</td>
  <td>1.2 Fever</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FVRDD1</td>
  <td>1.2.1Duration in
  days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>COUGH</td>
  <td>1.3 Cough</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>COUGHDD2</td>
  <td>1.3.1Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CPROD</td>
  <td>1.4 Is your cough productive?</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CPRODDD3</td>
  <td>1.4.1Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>STHOAT</td>
  <td>1.5 Sore throat</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>STHOATDD4</td>
  <td>1.5.1Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>BREAT</td>
  <td>1.6 Breathlessness</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>BREATDD5</td>
  <td>1.6.1Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>LSMELL</td>
  <td>1.7 Loss of smell</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>LSMELLDD6</td>
  <td>1.7.1Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>BACHE</td>
  <td>1.8 Body ache</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>BACHEDD7</td>
  <td>1.8.1Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HACHE</td>
  <td>1.9 Headache</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HACHEDD8</td>
  <td>1.9.1Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NAUSEA</td>
  <td>1.10 Nausea</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NAUSEADD9</td>
  <td>1.10.1Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>VOM</td>
  <td>1.11 Vomiting</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>VOMDD10</td>
  <td>1.11.1<span
  style='mso-spacerun:yes'>  </span>Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ABDPN</td>
  <td>1.12Abdominal pain</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ABDPNDD11</td>
  <td>1.12.1Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DIR</td>
  <td>1.13Diarrhea</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DIRDD12</td>
  <td>1.13.1Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HAEMPT</td>
  <td>1.14 Haemoptysis</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HAEMPTDD13</td>
  <td>1.15.1 Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>RNOSE</td>
  <td>1.16 Runny nose</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>RNOSEDD14</td>
  <td>1.16.1 Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FVREVN</td>
  <td>1.17 Fever at evaluation</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>OTHSYM</td>
  <td>1.18Any other symptom</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>OTHSYMDD15</td>
  <td>1.18.1Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HVISTWET</td>
  <td>2 History of the visit to wet/seafood market</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CCANML</td>
  <td>3 Close contact with animal/birds</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HCW</td>
  <td>Is the person, a health care worker (HCW)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ROLE</td>
  <td>4.1 Role</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>PLCHOSP</td>
  <td>4.2 Place of posting in the hospital</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DAYEXPS</td>
  <td>4.3 No of Days of exposure</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>AVGDEXPHRS</td>
  <td>4.4 Average Duration of exposure per day (in hours)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ADEXPMN1</td>
  <td>4.4.1 Average duration of exposure per day (in minutes)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CCONC6FT1</td>
  <td>4.5 Close contact of &lt;6 feet</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>PPE</td>
  <td>4.6 PPE use</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>GLOV</td>
  <td>4.6.1 Gloves</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HCOV</td>
  <td>4.6.2 Head cover</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>GOGS</td>
  <td>4.6.3 Goggles</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>GOWN</td>
  <td>4.6.4 Gown</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HAZSUT</td>
  <td>4.6.5 Hazmat suit</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>LCOV</td>
  <td>4.6.6 Leg cover</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SUGMSK</td>
  <td>4.6.7 Surgical Mask</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>N95MSK</td>
  <td>4.6.8 N95 mask</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FSHLD</td>
  <td>4.6.9 Face shield</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>INTRVDEC2019</td>
  <td>4.1 Any international travel after 1st December 2019 (If
  travelled before select as &quot;No&quot;)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NMCON</td>
  <td>4.2 Name of the country</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NMCONOTH</td>
  <td>4.2.1 if 4.2 is other, specify</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NMPLCVST</td>
  <td>4.3 Specify the name of the place visited</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DSTYDAYS</td>
  <td>4.4 Duration of stay (in days)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DTDEPT</td>
  <td>4.5 Date of departure</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DEARVLIND</td>
  <td>4.6 Date of arrival to India</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>MULCONC</td>
  <td>4.7 In case of travel to multiple countries, even transiently
  (please mention details)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SARSCOV2</td>
  <td>4.8 H/o exposure to a confirmed/ suspected case of 2019-n CoV
  (SARS-CoV -2)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SARSCOV2DT</td>
  <td>4.8.1 if4.8 is yes then
  mention the date</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td class=xl7318797 style='border-top:none;border-left:none'>NDAYSEXP1</td>
  <td class=xl7418797 width=1014 style='border-top:none;border-left:none;
  width:760pt'>4.8.2 No of Days of exposure</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>AVGDUREXHRS</td>
  <td>4.8.3 Average Duration of exposure per day (in hours)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ADEXPMN2</td>
  <td>4.8.3a Average duration of exposure per day (in minutes)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CCONC6FT2</td>
  <td>4.8.4 Close contact of &lt;6 feet</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>EXPSARSCOV2</td>
  <td>4.9 H/o exposure to any person with above symptoms who has
  further H/o of exposure to a confirmed case of 2019 â€“nCoV (SARS-CoV-2)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>EXPSARSCOV2DT</td>
  <td>4.9.1 if 4.9 is yes, then mention the date</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NDAYSEXP2</td>
  <td>4.9.2 No of Days of exposure</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>AVGDEXPHRS2</td>
  <td>4.9.3 Average Duration of exposure per day (in hours)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ADEXPMN3</td>
  <td>4.9.3a Average duration of exposure per day (in minutes)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CCONC6FT3</td>
  <td>4.9.4 Close contact of &lt;6 feet</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HOSP</td>
  <td>5.1 Hospitalised</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ICU1</td>
  <td>5.2 ICU</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ICUDD1</td>
  <td>5.2.1 Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>OXY1</td>
  <td>5.3 Oxygen</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>OXYDD2</td>
  <td>5.3.1 Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>VENT1</td>
  <td>5.4 Ventilator</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>VENTDD2</td>
  <td>5.4.1 Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DEATH1</td>
  <td>5.5 Death</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DTDTH</td>
  <td>5.5.1 If Death, specify the date of death</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HOSPDT1</td>
  <td>6 Hospitalization date</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DISCDT1</td>
  <td>7 Discharge date</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HBP1</td>
  <td>8.1 High BP</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DIAB1</td>
  <td>8.2 Diabetes</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>THYD1</td>
  <td>8.3 Thyroid problems</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ANM1</td>
  <td>8.4Anaemia</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ASTH1</td>
  <td>8.5Asthma</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SMOK</td>
  <td>8.6Smoking</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CANC1</td>
  <td>8.7 Cancer</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>AUTDISC1</td>
  <td>8.8 Autoimmune disorders</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>LIVDISE1</td>
  <td>8.9 Liver Disease</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HEARTDISE1</td>
  <td>8.10 Heart Disease</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>KIDDISE1</td>
  <td>8.11 Kidney Disease</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>OTH</td>
  <td>8.12 Other</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>OTHSPFY</td>
  <td>8.12.1 If others, specify</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>PREG</td>
  <td>9 Pregnancy</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>LMPDT</td>
  <td>9.1 LMP date</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>TRETHIST</td>
  <td>10.1 Is there a Treatment History<span
  style='mso-spacerun:yes'>  </span></td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NMDRG1</td>
  <td>Name of Drug 1</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DYRS1</td>
  <td>Duration in Years 1</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DMNT1</td>
  <td>Duration in Months 1</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DDYS1</td>
  <td>Duration in Days 1</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NMDRG2</td>
  <td>Name of Drug 2</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DYRS2</td>
  <td>Duration in Years 2</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DMNT2</td>
  <td>Duration in Months 2</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DDYS2</td>
  <td>Duration in Days 2</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NMDRG3</td>
  <td>Name of Drug 3</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DYRS3</td>
  <td>Duration in Years 3</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DMNT3</td>
  <td>Duration in Months 3</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DDYS3</td>
  <td>Duration in Days 3</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NMDRG4</td>
  <td>Name of Drug 4</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DYRS4</td>
  <td>Duration in Years 4</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DMNT4</td>
  <td>Duration in Months 4</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DDYS4</td>
  <td>Duration in Days 4</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NMDRG5</td>
  <td>Name of Drug 5</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DYRS5</td>
  <td>Duration in Years 5</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DMNT5</td>
  <td>Duration in Months 5</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DDYS5</td>
  <td>Duration in Days 5</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NP</td>
  <td>1.1 Nasopharyngeal sample (NP) collected</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NPDT</td>
  <td>1.1.1 Date of NP sample collection</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>OP</td>
  <td>1.2 Oropharyngeal (OP) sample collected</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>OPDT</td>
  <td>1.2..1 Date of OP sample collection</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>WB</td>
  <td>1.3Whole blood collected</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>WBDT</td>
  <td>1.3.1 Date of blood sample collection</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>WBVOL</td>
  <td>1.3.2 Volume (in ml)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SUBSTAT</td>
  <td>Status of subject</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>RTPCR</td>
  <td>RT-PCR done?</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DTRTPCR</td>
  <td>Date of Testing for diagnosis (RT-PCR)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>RESRTPCR</td>
  <td>Result of RT-PCR</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>RTPCRINF</td>
  <td>Source of RT-PCR information:</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>RDT_ANT</td>
  <td>RDT- Antigen done?</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DTRDT</td>
  <td>Date of RDT</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>RESRDTT</td>
  <td>Result of RDT test</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>RDTINF</td>
  <td>Source of RDT information</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CPTSTPAST</td>
  <td>Have you tested positive for Covid in the past?</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CPTSTPASTDT</td>
  <td>If Yes, When tested positive</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CPTSTPASTNM</td>
  <td>If Yes, Name of the testing centre</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CPTSTPASTSPFY</td>
  <td>If the testing centre was others, please specify</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ENRID</td>
  <td>Enrolment ID (will be updated once Lab received the sample)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>RMK</td>
  <td>Remarks (If any)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>VACC</td>
  <td>Have you been Vaccinated?</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>VFDOSE</td>
  <td>1 Vaccinated the first dose</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DTFDOSE</td>
  <td>1.1 Date of the first dose</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>VACTKN</td>
  <td>1.2 Vaccine Taken</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FDFVR</td>
  <td>1.3 Symptoms and signs after the first dose (with duration in
  Days) [Fever]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FDCOUGH</td>
  <td>1.3 Symptoms and signs after the first dose (with duration in
  Days) [Cough]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FDPCOUGH</td>
  <td>1.3 Symptoms and signs after the first dose (with duration in
  Days) [Productive cough]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FDSTHOAT</td>
  <td>1.3 Symptoms and signs after the first dose (with duration in
  Days) [Sore throat]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FDBRTH</td>
  <td>1.3 Symptoms and signs after the first dose (with duration in
  Days) [Breathlessness]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FDLSMELL</td>
  <td>1.3 Symptoms and signs after the first dose (with duration in
  Days) [Loss of smell]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FDBACHE</td>
  <td>1.3 Symptoms and signs after the first dose (with duration in
  Days) [Body Ache]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FBHACHE</td>
  <td>1.3 Symptoms and signs after the first dose (with duration in
  Days) [Headache]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FBNAUS</td>
  <td>1.3 Symptoms and signs after the first dose (with duration in
  Days) [Nausea]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FBVOM</td>
  <td>1.3 Symptoms and signs after the first dose (with duration in
  Days) [Vomiting]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FBABDPN</td>
  <td>1.3 Symptoms and signs after the first dose (with duration in
  Days) [Abdominal pain]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FBDIAR</td>
  <td>1.3 Symptoms and signs after the first dose (with duration in
  Days) [Diarrhea]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FBHAEMPT</td>
  <td>1.3 Symptoms and signs after the first dose (with duration in
  Days) [Haemoptysis]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FBRNOSE</td>
  <td>1.3 Symptoms and signs after the first dose (with duration in
  Days) [Runny Nose]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>FBOTH</td>
  <td>1.3 Symptoms and signs after the first dose (with duration in
  Days) [Any other]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SREADOSE1</td>
  <td>1.4 any other serious reactions post dose 1</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>RTPCRD1D2</td>
  <td>1.5 RT-PCR test required between dose 1 and dose 2</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DTRTPCRD1D2</td>
  <td>1.5.1 Date of RT-PCR test required between dose 1 and dose2</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>RESRTPCRD1D2</td>
  <td>1.5.2 Result of RT-PCR test required between dose 1 and dose2</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>VACDOSE2</td>
  <td>2 Vaccinated for the second dose</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DTDOSE2</td>
  <td>2.1 Date of the second dose</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>VACTAKEN</td>
  <td>2.2 Vaccine Taken</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SDFVR</td>
  <td>2.3 Symptoms and signs after the second dose (with duration in
  Days) [Fever]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SDCOUGH</td>
  <td>2.3 Symptoms and signs after the second dose (with duration in
  Days) [Cough]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SDPCOUGH</td>
  <td>2.3 Symptoms and signs after the second dose (with duration in
  Days) [Productive cough]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SDSTHOAT</td>
  <td>2.3 Symptoms and signs after the second dose (with duration in
  Days) [Sore throat]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SDBREAT</td>
  <td>2.3 Symptoms and signs after the second dose (with duration in
  Days) [Breathlessness]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SDLSMELL</td>
  <td>2.3 Symptoms and signs after the second dose (with duration in
  Days) [Loss of smell]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SDBACHE</td>
  <td>2.3 Symptoms and signs after the second dose (with duration in
  Days) [Body Ache]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SDHACHE</td>
  <td>2.3 Symptoms and signs after the second dose (with duration in
  Days) [Headache]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SDNAUS</td>
  <td>2.3 Symptoms and signs after the second dose (with duration in
  Days) [Nausea]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SDVOM</td>
  <td>2.3 Symptoms and signs after the second dose (with duration in
  Days) [Vomiting]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SDABDPN</td>
  <td>2.3 Symptoms and signs after the second dose (with duration in
  Days) [Abdominal pain]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SDDIAR</td>
  <td>2.3 Symptoms and signs after the second dose (with duration in
  Days) [Diarrhea]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SDHAEMPT</td>
  <td>2.3 Symptoms and signs after the second dose (with duration in
  Days) [Haemoptysis]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SDRNOSE</td>
  <td>2.3 Symptoms and signs after the second dose (with duration in
  Days) [Runny Nose]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SDOTH</td>
  <td>2.3 Symptoms and signs after the second dose (with duration in
  Days) [Any other]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SREADOSE2</td>
  <td>2.4 Any other serious reactions post dose 2</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>RTPCRD2</td>
  <td>2.5 RT-PCR test required between dose 2 and till date</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DTRTPCRD2</td>
  <td>2.5.1 Date of RT-PCR test required between dose 2 and till date</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>RESRTPCRD2</td>
  <td>2.5.2 Result of RT-PCR test required between dose 2 and till
  date</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>BDTAK</td>
  <td>Booster dose taken?</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NMBDVAC</td>
  <td>Name of Booster dose vaccine?</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DTBDOSE</td>
  <td>Date of Booster dose?</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ADDBDDOSE</td>
  <td>Any additional dose taken after booster dose?</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NMADDVAC</td>
  <td>Name of additional dose vaccine?</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DTADDOSE</td>
  <td>Date of additional dose?</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HRE2019_SARSCOV_INF</td>
  <td>3 Is the person have a history of a repeat 2019 â€“nCoV
  (SARS-CoV-2) infection</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DTDIAG</td>
  <td>3.1 Date of diagnosis</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DURFINFMN</td>
  <td>3.2 Duration from first infection (months)</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>MOD</td>
  <td>3.3 Mode of Diagnosis</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>VACSTATTMDIAG</td>
  <td>3.4 What was the vaccination status at the time of diagnosis?</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>D1FVR</td>
  <td>3.5 Symptoms and signs after the first dose (with duration in
  Days) [Fever]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>D1COUGH</td>
  <td>3.5 Symptoms and signs after the first dose (with duration in
  Days) [Cough]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>D1PCOUGH</td>
  <td>3.5 Symptoms and signs after the first dose (with duration in
  Days) [Productive cough]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>D1STHOAT</td>
  <td>3.5 Symptoms and signs after the first dose (with duration in
  Days) [Sore throat]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>D1BREAT</td>
  <td>3.5 Symptoms and signs after the first dose (with duration in
  Days) [Breathlessness]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>D1LSMELL</td>
  <td>3.5 Symptoms and signs after the first dose (with duration in
  Days) [Loss of smell]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>D1BACHE</td>
  <td>3.5 Symptoms and signs after the first dose (with duration in
  Days) [Body Ache]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>D1HACHE</td>
  <td>3.5 Symptoms and signs after the first dose (with duration in
  Days) [Headache]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>D1NAUS</td>
  <td>3.5 Symptoms and signs after the first dose (with duration in
  Days) [Nausea]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>D1VOM</td>
  <td>3.5 Symptoms and signs after the first dose (with duration in
  Days) [Vomiting]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>D1ABDPN</td>
  <td>3.5 Symptoms and signs after the first dose (with duration in
  Days) [Abdominal pain]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>D1DIAR</td>
  <td>3.5 Symptoms and signs after the first dose (with duration in
  Days) [Diarrhea]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>D1HAEMPT</td>
  <td>3.5 Symptoms and signs after the first dose (with duration in
  Days) [Haemoptysis]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>D1RNOSE</td>
  <td>3.5 Symptoms and signs after the first dose (with duration in
  Days) [Runny Nose]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>D1OTH</td>
  <td>3.5 Symptoms and signs after the first dose (with duration in
  Days) [Any other]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HOSP_OXYSPT</td>
  <td>4 Need for hospitalization/ Oxygen support</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>REAS_HOSP</td>
  <td>4.1 Reason for hospitalisation</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DDAY</td>
  <td>4.1.1 Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ICU2</td>
  <td>4.2 ICU</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DDAY2</td>
  <td>4.2.1 Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>OXY2</td>
  <td>4.3 Oxygen</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DDAYS3</td>
  <td>4.3.1 Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>VENT2</td>
  <td>4.4 Ventilator</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DDAYS4</td>
  <td>4.4.1 Duration in days</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DEATH2</td>
  <td>4.5 Death</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HOSPDT2</td>
  <td>5 Hospitalisation date</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DISCDT2</td>
  <td>6 Discharge date</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HISTREAT</td>
  <td>7.1 Is there a Treatment History<span
  style='mso-spacerun:yes'>  </span></td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NM1</td>
  <td>Name of Drug 1</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DURDAYS1</td>
  <td>Duration in Days 1</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NM2</td>
  <td>Name of Drug 2</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DURDAYS2</td>
  <td>Duration in Days 2</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NM3</td>
  <td>Name of Drug 3</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DURDAYS3</td>
  <td>Duration in Days 3</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NM4</td>
  <td>Name of Drug 4</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DURDAYS4</td>
  <td>Duration in Days 4</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>NM5</td>
  <td>Name of Drug 5</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DURDAYS5</td>
  <td>Duration in Days 5</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>LTCOVID19INF</td>
  <td>8.1 Did you get newly diagnosed with<span
  style='mso-spacerun:yes'>  </span>any medical conditions or face any
  long-term effects after the COVID-19 Infection?</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HBP2</td>
  <td>9.1 High BP</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DIAB2</td>
  <td>9.2 Diabetes</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>THYD2</td>
  <td>9.3 Thyroid problems</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ANM2</td>
  <td>9.4Anaemia</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>ASTH2</td>
  <td>9.5Asthma</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CANC2</td>
  <td>9.6 Cancer</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>AUTDISC2</td>
  <td>9.7 Autoimmune disorders</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>LIVDISE2</td>
  <td>9.8 Liver Disease</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>HEARTDISE2</td>
  <td>9.9 Heart Disease</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>KIDDISE2</td>
  <td>9.10 Kidney Disease</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>OTHER</td>
  <td>9.11 Other</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>OTHERSPFY</td>
  <td>9.11.1 If others, specify</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>SLPTM</td>
  <td>10 Compared to before COVID-19, are you better, same or worse in
  full-filling the following day to day activities [Standing for long period of
  time]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>TCHWORK</td>
  <td>10 Compared to before COVID-19, are you better, same or worse in
  full-filling the following day to day activities [Taking care of household
  work]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>LNTASK</td>
  <td>10 Compared to before COVID-19, are you better, same or worse in
  full-filling the following day to day activities [Learning New task]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>JSOCLACT</td>
  <td>10 Compared to before COVID-19, are you better, same or worse in
  full-filling the following day to day activities [Joining social activities]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>EMAFHEALTH</td>
  <td>10 Compared to before COVID-19, are you better, same or worse in
  full-filling the following day to day activities [Emotional affected by
  health]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CONC10MN</td>
  <td>10 Compared to before COVID-19, are you better, same or worse in
  full-filling the following day to day activities [Concentrating for 10
  minutes]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>WOVKM</td>
  <td>10 Compared to before COVID-19, are you better, same or worse in
  full-filling the following day to day activities [Walking over a kilometer]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>WYWHBDY</td>
  <td>10 Compared to before COVID-19, are you better, same or worse in
  full-filling the following day to day activities [Washing your whole body]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>GDRES</td>
  <td>10 Compared to before COVID-19, are you better, same or worse in
  full-filling the following day to day activities [Getting dressed]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DNPELE</td>
  <td>10 Compared to before COVID-19, are you better, same or worse in
  full-filling the following day to day activities [Dealing with new people]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>MFRND</td>
  <td>10 Compared to before COVID-19, are you better, same or worse in
  full-filling the following day to day activities [Maintaining Friendship]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DDWORK</td>
  <td>10 Compared to before COVID-19, are you better, same or worse in
  full-filling the following day to day activities [Day-to-day work ]</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DTTDIAG1</td>
  <td>Date of Testing
  for diagnosis1</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>DURSYM</td>
  <td>Duration of
  sympotms</td>
 </tr>
 <tr class="hidden">
  <td>Enrollment</td>
  <td>Screening form</td>
  <td>CURSTATSUB</td>
  <td>Current Status
  of subject</td>
 </tr>
 </tbody>
</table>

</div>

<script>
    function toggleTable() {
      const table = document.querySelector('.expandable-table');
      const rows = table.querySelectorAll('tbody tr.hidden');
      const button = document.querySelector('.toggle-btn');
      const isCollapsed = rows[0].style.display === 'none';

      rows.forEach(row => {
        row.style.display = isCollapsed ? 'table-row' : 'none';
      });

      button.textContent = isCollapsed ? 'Hide table' : 'Show table';
    }

    // Initialize the table to show limited rows
    document.addEventListener('DOMContentLoaded', () => {
      toggleTable(); // Initially collapse the table
    });
  </script>





      <!-- <div class= "card col-lg-12 md-12">
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
      </div> -->


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

      <br>
      <br>
      <br>
      <br>

      <h3 style="text-align: center; font-weight: bold">Clinical variables and biospecimen</h3>
            
            <hr style="margin: 0 auto; height:2px; width: 100%; border-width: 0; color: brown; background-color: brown;">
      <br>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front d-flex justify-content-center align-items-center">
                            <h2>1389<br><br>Clinical Variables</h2>
                        </div>
                        <div class="flip-card-back">
                            <div class="card-header cardhh">
                                <h3 style="color:white; font-weight: bolder; padding-left: 10px;">Cinical variable details</h3>
                            </div>
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <h4 style="color: #FFFDD0;">300 variables at enrollment,&nbsp;&nbsp;&nbsp;105 variables at FUP-1,<br><br>204 variables at FUP-2,&nbsp;&nbsp;&nbsp;389 variables at FUP-3</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front d-flex justify-content-center align-items-center">
                            <h2>04<br><br>Types of various biospecimen</h2>
                        </div>
                        <div class="flip-card-back">
                            <div class="card-header cardhh">
                                <h3 style="color:white; font-weight: bolder; padding-left: 10px;">Biospecimen details</h3>
                            </div>
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <h4 style="color: #FFFDD0;">Enrollment : Serum, NP/OP;<br><br>FUP-1 : Serum<br><br>FUP-2, FUP-3, FUP-4 : Plasma, PBMCs</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <!-- biospecimens start----------------------- -->

 <div class="dlkf" id="biospecimen_section">
<br>
            <h3 class= "slide-up" style="color: #484848; text-align: center; font-weight: bold; transform: translateY(50px);">Different types of biospecimens</h3>
            <br>
            <hr style="margin: 0 auto; height:2px; width: 85%; border-width: 0; color: brown; background-color: brown;">
            </div>

 <div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card unique-card unique-card-a">
                <div class="card-body">
                    <h5 class="card-title unique-card-title">Human<br>Serum</h5>
                    <p class="card-text">Detailed description about biospecimen.</p>
                    <a href="serum.php" target="_blank" class="btn btn-primary" style="background: #454679;">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card unique-card unique-card-b">
                <div class="card-body">
                    <h5 class="card-title unique-card-title">Nasopharyngeal and Oropharyngeal<br>Swabs (NP/OP)</h5>
                    <p class="card-text">Detailed description about biospecimen.</p>
                    <a href="serum.php" target="_blank" class="btn btn-primary" style="background: #454679;">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card unique-card unique-card-c">
                <div class="card-body">
                    <h5 class="card-title unique-card-title">Human<br>Plasma</h5>
                    <p class="card-text">Detailed description about biospecimen.</p>
                    <a href="#" class="btn btn-primary" style="background: #454679;">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card unique-card unique-card-d">
                <div class="card-body">
                    <h5 class="card-title unique-card-title">Human Peripheral Blood Mononuclear<br>CellS (PBMCs)</h5>
                    <p class="card-text">Detailed description about biospecimen.</p>
                    <a href="#" class="btn btn-primary" style="background: #454679;">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="custom-btn-group" style="margin-left: 490px;">
                                <a href="temp.php" target="_blank" class="btn custom-btn smoothscroll me-3">Know more about biospecimens</a>
                            </div>
                        </div>
</div>

<script>
    document.querySelectorAll('.unique-card').forEach(card => {
        card.addEventListener('click', () => {
            card.classList.toggle('selected');
            if (card.classList.contains('selected')) {
                card.style.backgroundColor = '#007bff';
                card.style.color = 'white';
            } else {
                card.style.backgroundColor = '#343a40';
                card.style.color = 'white';
            }
        });
    });
</script>

<!-- three doughnuts  -->
<br>
<br>
<!-- <div id="colllabb">
        <h4 style= "font-weight: bolder;">Biospecimen stored at biorepository</h3>
</div> -->

<h3 style="text-align: center; font-weight: bold">Biospecimen stored at biorepository</h3>
            
            <hr style="margin: 0 auto; height:2px; width: 100%; border-width: 0; color: brown; background-color: brown;">
      <br>
      <br>

      <div class="access">
                <img src="images/accessA.png" alt="biospecimen" width="800" height="430" style="margin-left: 350px">  
            </div>

            <!-- biospecimens end----------------------- -->


      <br>
      <br>

      <h3 style="text-align: center; font-weight: bold">Bioresource Access Request</h3>
            
            <hr style="margin: 0 auto; height:2px; width: 100%; border-width: 0; color: brown; background-color: brown;">
      <br>
      <br>

      <div class="card-container" style="margin-left: 5px;">
    <div class="unique-card1">
        <div class="card-header">
            <h2>Biological Sample Access Form</h2>
            <div class="card-content">
                <img src="images/barcode_biological.gif" alt="QR Code 1">
            </div>
        </div>
        <div class="card-footer">
            <p style="color: black;"><a href="https://biorepository.thsti.in/SampleAccessRequestForm/COVID-19/Biological" target="_blank">COVID-19 Biological Sample Access Request Form</a></p>
        </div>
    </div>
    <div class="unique-card2">
        <div class="card-header">
            <h2>Clinical Sample Access Form</h2>
            <div class="card-content">
                <img src="images/barcode_clinical.gif" alt="QR Code 2">
            </div>
        </div>
        <div class="card-footer">
            <p style="color: black;"><a href="https://biorepository.thsti.in/SampleAccessRequestForm/COVID-19/Clinical" target="_blank">COVID-19 Clinical Sample Access Request Form</a></p>
        </div>
    </div>
    <div class="unique-card2">
        <div class="card-header">
            <h2>Data Sharing Policy</h2>
            <div class="card-content">
                <img src="images/go-up.png" alt="QR Code 2">
            </div>
        </div>
        <div class="card-footer">
            <p style="color: black;"><a href="km.php" target="_blank">Know more about data sharing policy</a></p>
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




      <div style="height: 20vh">
        </div>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 me-auto mb-5 mb-lg-0">
                        <a class="navbar-brand d-flex align-items-center" href="index.php">
                            <img src="images/thsti-logo-icon.png" class="img-fluid" alt="">
                            <span class="navbar-brand-text">
                                Biorepository
                                <small>BRIC-THSTI</small>
                            </span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-12">
                        <h5 class="site-footer-title mb-4">Contact Us</h5>

                        <p class="d-flex border-bottom pb-3 mb-3 me-lg-3">
                            <span>Mon-Fri</span>
                            10:00 AM - 05:00 PM
                        </p>

                    
                       <br>
                        <p class="copyright-text">Copyright © 2024<br>THSTI Biorepository</p>
                    </div>

                        <div class="col-lg-2 col-12 ms-auto">
                            <ul class="social-icon mt-lg-5 mt-3 mb-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-whatsapp"></a>
                                </li>
                            </ul>
                                <p class="copyright-text">Developed by<br>THSTI Biorepository</p>
                            
                        </div>

                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#81B29A" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
        </footer>


        <!-- JAVASCRIPT code -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  </script>




      
     
    <!-- /.content -->
  <!-- /.content-wrapper -->

 <!-- JAVASCRIPT FILES -->
 <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>
        <script src="plugins/select2/js/select2.full.min.js"></script>
        <script src="plugins/chart.js/Chart.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.min.js"></script>

    </body>
</html>

<script>
    const ctx = document.getElementById('myChart');

    // Define a custom color palette with unique colors
        
    var colorPalette = [
            '#dc3545', '#28a745', '#17a2b8', '#ffc107', '#6f42c1', '#7393B3'
        ];


            new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Enrolment (Day-0)', 'FUP-1 (Day 10-28)', 'FUP-2 (6-10 weeks)', 'FUP-3 (6 months)', 'FUP-4 (12-36 months)'],
                datasets: [
                    {
                        label: 'Positive participants',
                        data: [4890, 3169, 2337, 1156, 1308],
                        backgroundColor: colorPalette.slice(0, 5),
                        borderWidth: 1
                    },
                    {
                        label: 'Negative participants',
                        data: [3777, 0, 0, 0, 0],
                        backgroundColor: colorPalette.slice(5),
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        stacked: true
                    },
                    y: {
                        stacked: true
                    }
                },
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
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


