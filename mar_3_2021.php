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
  <meta property="og:image" content="http://kirstenpomales.com/img/mutualist.jpeg">
  <meta property="og:url" content="https://kirstenpomales.com/mar_3_2021.html">
  <meta property="og:site_name" content="Kirsten Pomales Langenbrunner"/>
  <meta property="og:title" content="KeeperDAO’s Mutualist Solution to Gas Wars"/>
  <meta property="og:description" content="Just came across a really cool protocol via a Crypto NYC Whitepaper Wednesday event: KeeperDAO. The Problem..."/>

  <!--Twitter Meta Tags-->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@kirstenrpomales">
  <meta name="twitter:creator" content="@kirstenrpomales">
  <meta name="twitter:title" content="KeeperDAO’s Mutualist Solution to Gas Wars">
  <meta name="twitter:description" content="Just came across a really cool protocol via a Crypto NYC Whitepaper Wednesday event: KeeperDAO. The Problem...">
  <meta name="twitter:image" content="http://kirstenpomales.com/img/mutualist.jpeg">
  <!--END META TAGS-->
  <!--Remember to verify that meta tags are working using these tools-->
  <!--Linkedin Validator: https://www.linkedin.com/post-inspector/-->
  <!--Twitter Validator: https://cards-dev.twitter.com/validator-->

  
  <title>KeeperDAO’s Mutualist Solution to Gas Wars</title>


</head>

<body id="page-top">
<?php
   include 'header.php';
    ?>

  <section class="features contact" id="about">
    <div class="container">
     <img style="width: 100%; height: auto; padding-bottom: 40px; padding-top: 60px;" src="img/mutualist.jpeg" alt="kirstenpomales">
    </div>
    <div class="container">
      <div class="section-heading text-center">
        <h3 class="text-left">KeeperDAO’s Mutualist Solution to Gas Wars</h3>
        <h6 class="text-left">Posted on Mar 3 2021</h6>
        <br>
        <p class="text-left">
		Just came across a really cool protocol via a <a href="https://www.linkedin.com/feed/#">Crypto NYC</a> Whitepaper Wednesday event: <a href = "https://www.linkedin.com/feed/#">KeeperDAO</a>.</br></br>
	</p>
	<p class="text-left">
		The Problem: In DeFi, gas wars eat profits and harm the ecosystem.</br></br>
	</p>
	<p class="text-left">
		When a borrower experiences a liquidation event (on platforms like Compound, <a href="https://www.linkedin.com/feed/">Aave</a>, etc.) collateral is put up for sale or auctioned. Traders and bots compete to trade during these events and extract value.</br></br>
	</p>
	<p class="text-left">
		In order to get their trade prioritized, traders increase the gas they pay, hoping that miners will pick up their transactions first. 
		This is is the start of a gas war! Traders pay fees that eat into profit, and miners get paid booku.</br></br>
	</p>	
	<p class="text-left">
		<a href="https://www.linkedin.com/feed/">KeeperDAO</a> has an interesting solution impacting three actor groups:</br></br>
	</p>
	<p class="text-left">
		💳 <b>Borrowers who are about to get liquidated…</b></br></br>
		+ Wrap their debt positions via KeeperDAO</br></br>
		+ Commit to the liquidation event happening early</br></br>
		+ Receive $ROOK tokens = to the profit from the liquidation</br></br>
	</p>
	<p class="text-left">
		💰 <b>Individuals/bots trying to extract value via trades…</b></br></br>
		+ Opt-in to KeeperDAO membership</br></br>
		+ Are algorithmically each given opportunities to trade during liquidation events (reducing competition/gas wars amongst members)</br></br>
		+ Receive priority trading status during liquidation events (because liquidation events happen early)</br></br>
	</p>
	<p class="text-left">
		⛏ <b>Miners processing transactions…</b></br></br>
		+ Have less of an incentive to reorder transactions based on gas warring, promoting a healthy ecosystem</br></br>
	</p>
	<p class="text-left">
		This project is cool because it helps traders voluntarily unionize; splitting up trade opportunities amongst members. 
		It also helps borrowers — subsidizing losses via sharing profit. This solution is the definition of mutualism; a symbiosis beneficial to all organisms involved.</br></br>
		Looking forward to following KeeperDAO’s progress,</br></br>
		</a>
	</p>
      </div>
    </div>
  </section>

<?php
   include 'footer.php';
    ?>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>