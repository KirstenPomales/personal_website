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
  <meta property="og:image" content="http://kirstenpomales.com/img/uniswap.jpg">
  <meta property="og:url" content="https://kirstenpomales.com/mar_30_2021.html">
  <meta property="og:site_name" content="Kirsten Pomales Langenbrunner"/>
  <meta property="og:title" content="How Uniswap V3 Boosts Capital Efficiency by Increasing Stakeholder Decision Rights"/>
  <meta property="og:description" content="How does Uniswap V3 hope to boost capital efficiency through increasing stakeholder decision rights? Three highly impactful innovations..."/>

  <!--Twitter Meta Tags-->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@kirstenrpomales">
  <meta name="twitter:creator" content="@kirstenrpomales">
  <meta name="twitter:title" content="How Uniswap V3 Boosts Capital Efficiency by Increasing Stakeholder Decision Rights">
  <meta name="twitter:description" content="How does Uniswap V3 hope to boost capital efficiency through increasing stakeholder decision rights? Three highly impactful innovations......">
  <meta name="twitter:image" content="http://kirstenpomales.com/img/uniswap.jpg">
  <!--END META TAGS-->
  <!--Remember to verify that meta tags are working using these tools-->
  <!--Linkedin Validator: https://www.linkedin.com/post-inspector/-->
  <!--Twitter Validator: https://cards-dev.twitter.com/validator-->


  <title>How Uniswap V3 Boosts Capital Efficiency by Increasing Stakeholder Decision Rights</title>


</head>

<body id="page-top">
<?php
   include 'header.php';
    ?>

  <section class="features contact" id="about">
    <div class="container">
     <img style="width: 100%; height: auto; padding-bottom: 40px; padding-top: 60px;" src="img/uniswap.jpg" alt="kirstenpomales">
    </div>
    <div class="container">
      <div class="section-heading text-center">
        <h3 class="text-left">How Uniswap V3 Boosts Capital Efficiency by Increasing Stakeholder Decision Rights</h3>
        <h6 class="text-left">Posted on Mar 30 2021</h6>
        <br>
        <p class="text-left">
		How does Uniswap V3 hope to boost capital efficiency through increasing stakeholder decision rights?</br></br>
		Three highly impactful innovations are present in V3: <i>1. Concentrated Liquidity, 2. Fee Tiers, and 3. Liquidity Positions being represented as NFTs</i>.</br></br>
		In this piece, we’ll take a look at these updates and their implications.</br></br>	
	</p>
	<p class="text-left">
		<h4 class="text-left">Uniswap: A Very Brief Backstory</h4>
	</p>
	<p class="text-left">
		<a href="https://uniswap.org/docs/v1/">Uniswap V1</a> launched in November 2018 as a proof of concept for automated market makers (AMMs).</br></br>
		<a href="https://www.gemini.com/cryptopedia/amm-what-are-automated-market-makers">Automated Market Makers</a> are a relatively new riff on traditional market makers. Traditional market makers are individuals or entities that provide tradable assets to a marketplace and quote both a buy and 
		sell price on that asset, making a profit on the bid-ask spread (the amount by which the asking price exceeds the bid price). Automated market makers allow anyone to can pool assets and engage in market-making 
		activities as a collective. While Uniswap <a href="https://docs.bancor.network/getting-started/the-v2-difference">wasn’t the first platform to use AMMs</a>, it was the platform that made AMMs a household name (or, at least in my household)!</br></br>
	</p>
	<p class="text-left">
		Uniswap V1 allowed users to swap between ETH and a single type of ERC20 token. After V1’s popularity, <a href="https://docs.uniswap.org/">Uniswap V2</a> launched in November 2020 with new features that allow users to swap any ERC20 with any other ERC20. <b>Uniswap V2 has seen $135bn in trading volume since its launch</b> (November 2020 — March 2021).</br></br>
		While V2 was undeniably popular, there are always improvements that can be made.</br></br>
		<b><i>Will greater decision rights allow Liquidity Providers to more efficiently allocate capital; promoting the health of Uniswap’s ecosystem and others?</i></b></br></br>
		<a href="https://uniswap.org/blog/uniswap-v3/">On March 23rd, 2020, Uniswap announced</a> its much-anticipated Version 3 — a platform designed to tackle that question.
	</p>
	<p class="text-left">
		<img style="width: 100%; height: auto; padding-bottom: 40px; padding-top: 60px;" src="img/uniswap1.jpg" alt="kirstenpomales">
		<p><i>What benefits will Uniswap Version 3 bring? Let’s find out.</i></p>
	</p>
	</br>
	<p class="text-left">
		<h4 class="text-left">Introducing Uniswap V3’s Three Key Changes</h4>
	</p>
	<p class="text-left">
		Uniswap V3 will be launched on the Ethereum Mainnet on May 5th, 2020, and on Optimism shortly thereafter (<a href="https://research.paradigm.xyz/optimism">Optimism</a> is an Ethereum Layer 2 solution that uses <a href="https://docs.ethhub.io/ethereum-roadmap/layer-2-scaling/optimistic_rollups/">Optimistic Rollups</a> to boost scalability). Uniswap V3 includes some major innovations that could have a large impact on how future AMMs are designed.</br></br>
		While this section does not encompass all of the updates present in V3, here are the three most impactful innovations present in V3: <i>1. Concentrated Liquidity, 2. Fee Tiers, and 3. Liquidity Positions being represented as NFTs.</i></br></br>
	</p>
	<p class="text-left">
		<b>1. Concentrated Liquidity (Configurable Liquidity):</b>
	</p>
	<p class="text-left">
		In V3, Liquidity Providers (LPs) can specify which price ranges they would like to provide liquidity for. LPs capital is only deployed when trading is happening within the range they specified. Different LP’s price range-based liquidity commitments are combined to create one pool for users to trade within.</br></br>
		The game theory behind Concentrated Liquidity supposes that LPs will be incentivized to concentrate capital deployment around the range where most trading is happening at a given point, but, at least some LPs will deploy capital at the very high and very low ranges of possibility (in order to make an increased profit by being the only or one of few LPs serving that market).</br></br>
		Here’s a hypothetical about what this looks like in practice from <a href="https://uniswap.org/blog/uniswap-v3/">Uniswap’s Blog post “Introducing Uniswap V3”</a>:</br></br>
	</p>
	<p class="text-left">
		<i>“Alice and Bob both want to provide liquidity in an ETH/DAI pool on Uniswap v3. They each have $1m. The current price of ETH is 1,500 DAI.</br></br>
		Alice decides to deploy her capital across the entire price range (as she would have in Uniswap v2). She deposits 500,000 DAI and 333.33 ETH (worth a total of $1m).</br></br>
		Bob instead creates a concentrated position, depositing only within the price range from 1,000 to 2,250. He deposits 91,751 DAI and 61.17 ETH, worth a total of about $183,500. He keeps the other $816,500 himself, investing it however he prefers.</br></br>
		While Alice has put down 5.44x as much capital as Bob, they earn the same amount of fees, as long as the ETH/DAI price stays within the 1,000 to 2,250 range.”</i></br></br>
	</p>	
	<p class="text-left">
		As we see in the above hypothetical, Bob experiences the same return as Alice while having significantly less capital locked into a liquidity position. 
		<b>This is the heart of Uniswap V3’s “increased capital efficiency” — with less capital committed, the same return or greater return can be earned.</b></br></br>
	</p>	
	<p class="text-left">
		<b>2. Fee Tiers:</b>
	</p>
	<p class="text-left">
		Uniswap V3 offers three fee tiers per token pair; 0.05%, 0.30%, and 1.00%. LPs can choose which of the three fees to charge based on the pair’s expected volatility, with higher fees better-compensating LPs who provide liquidity to riskier ranges (as explained in the Configurable Liquidity section of this article).</br></br>
		LPs can set whichever of the three fee tiers they desire for a given pair. The game theory behind Fee Tiers assumes that most LPs will be incentivized to set fees that are reasonable based on expected volatility.</br></br>
	</p>
	<p class="text-left">
		<b>3. NFT, Not ERC-20 Liquidity Positions:</b>
	</p>
	<p class="text-left">
		Because individual liquidity positions are highly customizable and unique, rather than LPs receiving ERC20 (UNI-V2) tokens representing their liquidity positions like in V2, LPs receive NFTs (non-fungible tokens). This update is a consequence of Concentrated Liquidity.</br></br>
		Liquidity NFTs have caused some concern over <b>fungibility</b>. Uniswap V2’s “UNI-V2" tokens could be traded easily, allowing Liquidity Providers to perform more diverse trading strategies while their liquidity is locked up. It is yet to be seen what new NFT finance/NFT Defi contracts or tools will come about to help LPs utilize their liquidity NFTs.</br></br>
	</p>
	<p class="text-left">
		<h4 class="text-left">Standing By for the May 5th Release!</h4>
	</p>
	<p class="text-left">
		All in all, Uniswap V3 brings us some exciting updates. It will surely be interesting to observe how increased decision rights impact how Liquidity Providers leverage the platform.</br></br>
		Even though it was not discussed in-depth in this piece, I’m curious to see the cost of gas fees on each V3 iteration — especially V3 on Optimism!</br></br>
		<i>“the <b>gas cost of v3 swaps on Ethereum mainnet is slightly cheaper than v2</b>. Transactions made on the Optimism deployment will likely be significantly cheaper!” — <a href="https://uniswap.org/blog/uniswap-v3/">Introducing Uniswap V3, Uniswap.org</a></i></br></br>
	</p>
	<p class="text-left">
		Lower gas prices brought by Version 3 could open up major markets to Uniswap that had been previously priced out due to high gas fees — an exciting possibility for equitable accessibility.</br></br>
		Till May 5th, friends.</br></br>
		Cheers!</br></br>
		___</br></br>
		Written by <a href="https://kirstenpomales.com/">KPL</a>, a stakeholder and community strategist helping blockchain and crypto tech companies build, govern, and educate their ecosystems. Connect with me on <a href="https://twitter.com/kirstenrpomales">Twitter</a> and <a href="https://www.linkedin.com/in/kirstenpomales/">Linkedin</a>.	
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