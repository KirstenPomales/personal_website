<!DOCTYPE html>
<html lang="en">
<head>
    <?php
   include 'meta.php';
    ?>
    <title>Kirsten's Blog</title>
    <!--OG Meta Tags-->
  <meta property="og:image" content="http://kirstenpomales.com/img/main_img.png">
  <meta property="og:url" content="https://kirstenpomales.com/blog_main.php">
  <meta property="og:site_name" content="KirstenPomales.com"/>
  <meta property="og:title" content="Kirsten's Blog: Building Web 3"/>
  <meta property="og:description" content="I sometimes write and talk about blockchain ecosystem design, stakeholder engagement, governance, and other topics."/>

  <!--Twitter Meta Tags-->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@kirstenrpomales">
  <meta name="twitter:creator" content="@kirstenrpomales">
  <meta name="twitter:title" content="Kirsten's Blog: Building Web 3">
  <meta name="twitter:description" content="I sometimes write and talk about blockchain ecosystem design, stakeholder engagement, governance, and other topics.">
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
    .row:after
      content: "";
      display: table;
      clear: both;
    }
    </style>
</head>
<body>

<section>
    <?php
   include 'header.php';
    ?>

  <div id="container" style="padding-bottom: 800px;">
    <h1>Hey, I'm Kirsten</h1>
    <div class="icon_wrapper" style="text-align: center;">
      <img style="width: 100px; padding-top: 10px; padding-bottom: 20px;" src="img/round.webp" alt="kirstenpomales">
    </div>
      <div style="margin-left: 20px; margin-right: 20px; padding-bottom: 280px;">
        <?php
         include 'blog_insert.php';
        ?>
      </div>
    </div>
  
    <!--END ABOUT-->   
  </div><!-- // End #container -->   

</section>

    <?php
   include 'footer.php';
    ?>
  

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>