<!DOCTYPE html>
<html lang="en">
<head>
    <?php
   include 'meta.php';
    ?>
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
  <!--OG Meta Tags-->
  <meta property="og:image" content="http://kirstenpomales.com/img/gitcoin.png">
  <meta property="og:url" content="https://kirstenpomales.com/may_10_2021.html">
  <meta property="og:site_name" content="Kirsten Pomales Langenbrunner"/>
  <meta property="og:title" content="The State of NFT Environmental Impact Reduction: A Gitcoin Bounty Report"/>
  <meta property="og:description" content="It's undeniable that the energy that many popular #NFT platforms use is unsustainable for the long run. 🌳 That being said, what alternatives do we have as #ecofriendly artists, entrepreneurs, and...."/>

  <!--Twitter Meta Tags-->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@kirstenrpomales">
  <meta name="twitter:creator" content="@kirstenrpomales">
  <meta name="twitter:title" content="The State of NFT Environmental Impact Reduction: A Gitcoin Bounty Report">
  <meta name="twitter:description" content="It's undeniable that the energy that many popular #NFT platforms use is unsustainable for the long run. 🌳 That being said, what alternatives do we have as #ecofriendly artists, entrepreneurs, and....">
  <meta name="twitter:image" content="http://kirstenpomales.com/img/gitcoin.png">
  <!--END META TAGS-->
  <!--Remember to verify that meta tags are working using these tools-->
  <!--Linkedin Validator: https://www.linkedin.com/post-inspector/-->
  <!--Twitter Validator: https://cards-dev.twitter.com/validator-->

  
  <title>The State of NFT Environmental Impact Reduction: A Gitcoin Bounty Report</title>

</head>

<body id="page-top">
<?php
   include 'header.php';
    ?>

  <section class="features contact" id="about">
    <div class="container">
     <img style="width: 100%; height: auto; padding-bottom: 40px; padding-top: 60px;" src="img/gitcoin.png" alt="kirstenpomales">
    </div>
    <div class="container">
      <div class="section-heading text-center">
        <h3 class="text-left">The State of NFT Environmental Impact Reduction: A Gitcoin Bounty Report</h3>
        <h6 class="text-left">Posted on May 10 2021</h6>
        <br>

		<p class="text-left">It's undeniable that the energy that many popular #NFT platforms use is unsustainable for the long run. 🌳 That being said, what alternatives do we have as #ecofriendly artists, entrepreneurs, and collectors? <a target="_blank" href="https://www.linkedin.com/in/robin-roy-thomas/">Robin Roy Thomas</a> and I have been working for the past month on our Gitcoin research paper "The State of NFT Environmental Impact Reduction in Non-Fungible Tokens” where we tackle this question!</p><br>

		<p class="text-left">Our research paper that audits the energy efficiency of NFT projects across chains that currently support NFT minting. Based on our analysis, we uncovered common characteristics that can be used to reduce the environmental impact of NFT minting and transactions.</p><br>

		<p class="text-left">We looked at...</p>
		<p class="text-left">🌐 26 different blockchains!</p>
		<p class="text-left">🖥️ 80 different NFT platforms!</p>
		<p class="text-left">🌳 Four key design considerations that can lower environmental impact!</p><br>

        <p class="text-left">
		<a target="_blank" href="https://github.com/KirstenPomales/The-State-of-NFT-Environmental-Impact-Reduction">Read the full report on Github here</a>.
		</p>

  </section>

<?php
   include 'footer.php';
    ?>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>