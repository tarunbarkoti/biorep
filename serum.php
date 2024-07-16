<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <link href="css/style.css" rel="stylesheet">

        <link  href="css/style2.css" rel="stylesheet">

    <title>Interactive Web Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .header-image {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        .content {
            padding: 20px;
        }
        .heading {
            color: #113f24;;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2.5em;
            transition: color 0.3s;
        }
        .images {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .image-container {
            position: relative;
            width: 30%;
            margin: 10px;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .image-container:hover {
            transform: scale(1.05);
        }
        .image-container img {
            width: 100%;
            border-radius: 10px;
        }
        .info {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
        }
        .image-container:hover .info {
            display: block;
        }
        .centered {
        position: absolute;
        top: 34%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 4em;
        }   
    </style>
</head>
<body>

<div class="header-image">
<div class="col-lg-12 col-md-12" style="position: fixed; z-index: 99;  background-color: #13274F; height: 10vh; opacity: 0.5; border-bottom: 1px solid whitesmoke;">
<h3 class="text-light mb-4 pb-3" style="padding-top: 10px; text-align: center;"></h3>             
</div>
</div>

<div style="background-color: grey;">
<img src="images/serum.jpg" alt="Header Image" style="width:100%; height:55vh; mix-blend-mode: multiply;">
<div class="centered">Human Serum</div>
</div>

<div class="content" style="">
    <h1 class="heading">Human Serum</h1>
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-9 col-12 mb-9 mb-lg-0">
    <h4 style="text-align: center; font-weight: normal; font-family: Inter, sans-serif; margin-left: 10em; margin-right: -6em; color: rgba(17, 63, 36, .7);">Peripheral blood-derived Serum is extracted from clotted blood. It has similar composition as the plasma except proteins like fibrinogen and clotting factors like Factor VIII. Serum samples are commonly used in diagnosis of cancer, cardiovascular diseases, infectious diseases & autoimmune conditions. Serum can also be used for the isolation of naturally produced antigens and antibodies. Academic and commercial researchers utilize healthy and diseased patient serum samples for drug testing, human cell culture, tissue typing, and cell therapy research.</h4>
    </div>
    </div>
    </div>
</div>

</body>
</html>
