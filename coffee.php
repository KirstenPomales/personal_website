<!DOCTYPE html>
<html lang="en">
<head>
    <?php
   include 'meta.php';
    ?>
    <title>Hey, I'm Kirsten: Let's Chat</title>
    <!--OG Meta Tags-->
  <meta property="og:image" content="http://kirstenpomales.com/img/main_img.png">
  <meta property="og:url" content="https://kirstenpomales.com/index.php">
  <meta property="og:site_name" content="KirstenPomales.com"/>
  <meta property="og:title" content="Let's grab coffee."/>
  <meta property="og:description" content="Drop a time on my calendar."/>

  <!--Twitter Meta Tags-->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@kirstenrpomales">
  <meta name="twitter:creator" content="@kirstenrpomales">
  <meta name="twitter:title" content="Let's grab coffee.">
  <meta name="twitter:description" content="HDrop a time on my calendar.">
  <meta name="twitter:image" content="http://kirstenpomales.com/img/main_img.png">
  <!--END META TAGS-->
    <style>
    * {
      box-sizing: border-box;
    }

    /* Create two equal columns that floats next to each other */
    .column {
      float: left;
      width: 50%;
      padding: 10px;
      height: 300px; /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    </style>
  </head>

<body id="page-top">

  <section class="features contact" id="about">
    <?php
   include 'header.php';
    ?>
    <div class="container" style="padding-top: 30px;">
      <div class="section-heading text-center">
        <h1>Let's grab coffee.</h1>
        <h5 class="text-center">Check my calendar for a time that works.</h5>
        <h2 class="text-black-50">📍 Digital Coffee</h2>
      </div>
    </div>
    <div class="container">
      <!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/coalitions/kpl?hide_landing_page_details=1&hide_gdpr_banner=1" style="min-width:320px;height:630px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Calendly inline widget end -->
    </div>

  </section>

    <?php
   include 'footer.php';
    ?>
  

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/new-age.min.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>