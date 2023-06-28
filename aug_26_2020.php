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
  <meta property="og:image" content="http://kirstenpomales.com/img/read_list.png">
  <meta property="og:url" content="https://kirstenpomales.com/aug_26_2020.html">
  <meta property="og:site_name" content="Kirsten Pomales Langenbrunner"/>
  <meta property="og:title" content="Blockchain Governance Reading List"/>
  <meta property="og:description" content="A Curriculum Maintained by the IEEE P2145, Working Group on Blockchain/DLT Governance Standards"/>

  <!--Twitter Meta Tags-->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@kirstenrpomales">
  <meta name="twitter:creator" content="@kirstenrpomales">
  <meta name="twitter:title" content="Blockchain Governance Reading List | Kirsten Pomales Langenbrunner">
  <meta name="twitter:description" content="A Curriculum Maintained by the IEEE P2145, Working Group on Blockchain/DLT Governance Standards">
  <meta name="twitter:image" content="http://kirstenpomales.com/img/read_list.png">
  <!--END META TAGS-->  

  
  <title>Blockchain Governance Reading List | Kirsten Pomales Langenbrunner</title>


</head>

<body id="page-top">
<?php
   include 'header.php';
    ?>

  <section class="features contact" id="about">
    <div class="container">
     <img style="width: 100%; height: auto; padding-bottom: 40px; padding-top: 60px;" src="img/read_list.png" alt="reading_list_cover">
    </div>
    <div class="container">
      <div class="section-heading text-center">
        <h3 class="text-left" style="font-weight: bold;">Blockchain Governance Reading List</h3>
        <h5 class = "text-left">A Curriculum Maintained by the IEEE P2145, Working Group on Blockchain/DLT Governance Standards</h5>
        <h6 class="text-left">Posted on August 26, 2020</h6>
        <br><br>

        <p class="text-left" style="font-style:italic">
          The following curriculum is updated periodically with new modules and readings. The last update was made on August 20th, 2020. If you are interested in learning more about blockchain governance or contributing to our work, reach out to our Chair, <a href="https://www.linkedin.com/in/thomasbcox/">Thomas B. Cox</a>, or our Vice Chair, <a href="https://www.linkedin.com/in/kirstenpomales/">Kirsten Pomales Langenbrunner</a>.
        </p>
        <br>
        
        <br><br>
        
        <h4 class="text-left" style="font-weight: bold;">Module 1: An Introduction to Blockchain Governance</h4>
        <br><br>
        <h5 class="text-left" style="font-weight: bold;">The Role of Governance</h5>
        <p class="text-left">
          <ul class = "text-left">
            <li><a href="https://medium.com/prysmeconomics/what-is-governance-for-1bb2376a2134?source=---------12------------------">What is Governance for?</a> | Article</li>
            <li><a href="https://www.youtube.com/watch?v=3m8SEkOlAAQ">An Introduction to Blockchain Governance with Thomas Cox</a> | September, 2019 | Video</li>
            <li><a href="https://www.youtube.com/watch?v=LNTsQsm6B44">Blockchain Governance 101</a> | Video</li>
          </ul>
          <br>
        </p>
        
        <h5 class="text-left" style="font-weight: bold;">Governance Models and Design</h5>
        <p class="text-left">
          <ul class = "text-left">
            <li><a href="https://www.youtube.com/watch?v=unDkWECKupY">Blockchain Governance Models: On-chain and Off-chain</a> | Video</li>
            <li><a href="https://medium.com/prysmeconomics/blockchain-and-coordination-games-failures-and-focal-points-e166cc244973">Blockchain and Coordination Games: Failures and Focal Points</a> | Article</li>
            <li><a href="https://medium.com/prysmeconomics/a-framework-for-blockchain-governance-design-the-prysm-group-wheel-703279c1b0dd?source=---------2------------------">A Framework for Blockchain Governance Design</a> | April, 2019 | Article</li>
            <li><a href="https://medium.com/prysmeconomics/what-is-voting-for-6e733a1d2bc9">What is voting for? </a> | Article</li>
          </ul>
          <br>
        </p>

        <h4 class="text-left" style="font-weight: bold;">Module 2: Advanced Concepts in Blockchain Governance</h4>
        <br><br>
        <h5 class="text-left" style="font-weight: bold;">Incomplete Contract Theory</h5>
        <p class="text-left">
          <ul class = "text-left">
            <li><a href="https://medium.com/prysmeconomics/incomplete-contracts-and-blockchain-ac9f348a2e6f">Incomplete Contracts and Blockchain</a> | Article</li>
            <li><a href="https://www.youtube.com/watch?v=qct5m7nxkbI">Asymmetric Information — Cryptoeconomics, Tokenomics, and the Economics of Blockchain </a> | Classroom Lecture</li>
          </ul>
          <br>
        </p>
        
        <h5 class="text-left" style="font-weight: bold;">Game Theory and Blockchain Governance</h5>
        <p class="text-left">
          <ul class = "text-left">
            <li><a href="https://www.youtube.com/watch?v=iy1VaTvA2a8">The Political Economy of Blockchain Governance</a> | Video</li>
            <li><a href="https://www.intelligenteconomist.com/game-theory/">Introduction to Game Theory (If you aren’t already familiar)</a> | Article</li>
            <li><a href="https://medium.com/@matthewfinestone/game-theory-and-blockchain-db46e67933d7">Game Theory and Blockchain</a> | Article</li>
          </ul>
          <br>
        </p>

        <h5 class="text-left" style="font-weight: bold;">Stakeholder Alignment in Blockchain Systems</h5>
        <p class="text-left">
          <ul class = "text-left">
            <li><a href="https://www.youtube.com/watch?time_continue=1&v=9wIqmsbEvDE&feature=emb_logo">Aligning Stakeholder Incentives in Blockchain Systems</a> | October, 2019 | Video</li>
            <li><a href="https://medium.com/@thomasbcox/on-aligning-stakeholder-incentives-in-blockchain-systems-75a89c80be5c">A Summary of Aligning Stakeholder Incentives in Blockchain Systems</a> | Jan, 2020 | Article</li>
            <li><a href="https://papers.ssrn.com/sol3/papers.cfm?abstract_id=3334674">The Governance of Blockchain Dispute Resolution</a> | Research Paper</li>
          </ul>
          <br>
        </p>

        <h4 class="text-left" style="font-weight: bold;">Module 3: An Introduction to Tokenomics</h4>
        <br><br>
        <h5 class="text-left" style="font-weight: bold;">The Economics of Blockchains</h5>
        <p class="text-left">
          <ul class = "text-left">
            <li><a href="https://medium.com/cryptoeconomics-australia/the-blockchain-economy-a-beginners-guide-to-institutional-cryptoeconomics-64bf2f2beec4">The Blockchain Economy: A beginner’s guide to institutional cryptoeconomics</a> | Article</li>
            <li><a href="https://www.issuelab.org/resources/30952/30952.pdf">The economics of crypto-democracy</a> | Article</li>
            <li><a href="https://www.academia.edu/37376308/Crypto_Public_Choice">Crypto Public Choice</a> | Article</li>
          </ul>
          <br>
        </p>
        
        <h5 class="text-left" style="font-weight: bold;">Tokenomics (Cryptoeconomics)</h5>
        <p class="text-left">
          <ul class = "text-left">
            <li><a href="https://medium.com/prysmeconomics/economics-of-tokenized-incentives-1-intro-to-pay-for-performance-84e3b9cfffa?source=---------5------------------">Economics of Tokenized Incentives 1: Intro to Pay for Performance</a> | Article</li>
            <li><a href="https://medium.com/prysmeconomics/economics-of-tokenized-incentives-2-selecting-effective-performance-metrics-18d6376eccc8?source=---------4------------------">Economics of Tokenized Incentives 2: Selecting Effective Performance Metrics</a> | Article</li>
            <li><a href="https://medium.com/prysmeconomics/economics-of-tokenized-incentives-3-token-value-wont-align-stakeholders-545cffa4f58?source=---------3------------------">Economics of Tokenized Incentives 3: Token Value Won’t Align Stakeholders</a> | Article</li>
            <li><a href="https://papers.ssrn.com/sol3/papers.cfm?abstract_id=3249860">Crypto Economics — The Top 100 Token Models Compared</a> | October, 2018 | Research Paper</li>
          </ul>
          <br>
        </p>
        
        <h4 class="text-left" style="font-weight: bold;">Module 4: Introduction to Blockchain Consortium Governance</h4>
        <br><br>
        <h5 class="text-left" style="font-weight: bold;">Consortium Basics</h5>
        <p class="text-left">
          <ul class = "text-left">
            <li><a href="https://www2.deloitte.com/us/en/pages/consulting/articles/blockchain-consortia-perspectives.html">A Simple Guide to Blockchain Consortia, Deloitte </a> | 2019</li>
          </ul>
          <br>
        </p>
        
        <h5 class="text-left" style="font-weight: bold;">Consortium Design & Governance</h5>
        <p class="text-left">
          <ul class = "text-left">
            <li><a href="https://www.youtube.com/watch?v=OFvV89tKQgE&t=5s">The Politics and Governance of Consortium Blockchains</a> | February, 2019</li>
            <li><a href="https://widgets.weforum.org/blockchain-toolkit/pdf/WEF_Redesigning_Trust_Blockchain_Deployment%20Toolkit.pdf">Blockchain Deployment Toolkit, Supply Chain, Consortium Formation Section| 2020</a> | Research Paper</li>
            <li><a href="https://www2.deloitte.com/content/dam/Deloitte/us/Documents/technology/us-cons-blockchain-consortium.pdf">So You’ve Decided to Join a Blockchain Consortium?</a> | 2019</li>
            <li><a href="https://www.govops.ca.gov/wp-content/uploads/sites/11/2020/07/BWG-Final-Report-2020-July1.pdf">California GovOps Blockchain Report Section IV, Potential Applications</a> | August 2020</li>
          </ul>
          <br>
        </p>

        <h4 class="text-left" style="font-weight: bold;">Module 5: Use Cases In Action: Scaling Through Governance</h4>
        <br>
        <p class="text-left">
          <ul class = "text-left">
            <li><a href="/@thomasbcox/walk-through-of-vechain-governance-d3453a1987a6">Ve-Chain Governance </a>| 2020 | Article</li>
            <li><a href="/@thomasbcox/blockchain-governance-overview-chronicled-and-mediledger-7809eb780789">Chronicled Mediledger Governance </a>| 2020 | Article</li>
            <li ><a href="https://www.youtube.com/watch?v=oe6pIu1BQDc" >Enterprise DLT Live Episode 001 — Susanne Somerville, Chronicled MediLedger</a> | 2020 | Webinar<li>
            <li><a href="/@thomasbcox/blockchain-governance-overview-eos-mainnet-26d8f9a88801">EOS Mainnet Governance</a> | 2019 | Article</li>
            <li><a href="https://www.youtube.com/watch?v=rZD4zGChcao">Enterprise DLT Live Episode 003 — Luis Macias, GrainChain</a> | 2020 | Webinar</li>
            <li><a href="https://www.computerworld.com/article/3398923/maersk-adds-two-big-shipping-firms-to-its-blockchain-ledger.html">Maersk adds two big shipping firms to its blockchain ledger </a>(After Governance Revamp) | 2019</li>
          </ul>
          <br>
        </p>

        <h4 class="text-left" style="font-weight: bold;">The Chair's Recommended Reading on Blockchain Governance</h4>
        <p class="text-left">
          The following books and courses are exceptional resources for those seeking a greater understanding of blockchain governance and collectives design.
        </p>
        <br>
        <ul class="text-left">
          <li><a href="https://www.amazon.com/dp/1107569788/?ref=idea_lv_dp_vv_d" >Governing the Commons: The Evolution of Institutions for Collective Action</a>, Elinor Ostrom</li>
          <li><a href="https://www.amazon.com/Enterprise-Blockchain-Has-Arrived-Deployments-ebook/dp/B07Z3LJCHW">Enterprise Blockchain Has Arrived</a>, Radhika Iyegnar, Jorden Woods</li>
          <li><a href="https://www.amazon.com/dp/0674341112/?ref=idea_lv_dp_vv_d" >Game Theory and the Law</a>, Robert Gertner</li>
          <li><a href="https://www.amazon.com/dp/B001QXCY8Q/?ref=idea_lv_dp_vv_d" >Rational Ritual: Culture, Coordination, and Common Knowledge: Culture, Coordination and Common Knowledge</a>, Michael Suk-Young Chwe</li>
          <li><a href="https://www.amazon.com/dp/B00ZADTSAK/?ref=idea_lv_dp_vv_d" >Beyond Governments</a>, Jonas Moberg</li>
          <li><a href="https://www.amazon.com/dp/B00DFJNWBW/?ref=idea_lv_dp_vv_d" >An Introduction to the Use of Formal Methods in Political Philosophy</a>, Robert Paul Wolff</li>
          <li><a href="https://www.amazon.com/dp/B004MYFLDG/?ref=idea_lv_dp_vv_d" >Punished by Rewards: Twenty-fifth Anniversary Edition: The Trouble with Gold Stars, Incentive Plans, A’s, Praise, and Other Bribes</a>, Alfie Kohn</li>
          <li><a href="https://www.amazon.com/dp/B01FEKBLHG/?ref=idea_lv_dp_vv_d" >The Calculus of Consent,</a> Gordon Tullock; James Buchanan</li>
          <li><a href="https://www.amazon.com/dp/0470598786/?ref=idea_lv_dp_vv_d" >Governance Reimagined: Organizational Design, Risk, and Value Creation</a>, David R. Koenig</li>
          <li><a href="https://www.amazon.com/dp/2960133501/?ref=idea_lv_dp_vv_d" >Reinventing Organizations: A Guide to Creating Organizations Inspired by the Next Stage in Human Consciousness</a>, Frederic Laloux</li>
          <li><a href="https://www.amazon.com/dp/0140264450/?ref=idea_lv_dp_vv_d" >The Origins of Virtue: Human Instincts and the Evolution of Cooperation</a>, M. Ridley</li>
          <li><a href="https://www.amazon.com/dp/0201442302/?ref=idea_lv_dp_vv_d" >Hidden Order: How Adaptation Builds Complexity</a>, John Holland</li>
          <li><a href="https://www.amazon.com/dp/0226320863/?ref=idea_lv_dp_vv_d" >Law, Legislation and Liberty, Volume 1: Rules and Order</a>, F. A. Hayek</li>
          <li><a href="https://www.amazon.com/dp/0674840313/?ref=idea_lv_dp_vv_d" >The Strategy of Conflict,</a> Thomas Schelling</li>
          <li><a href="https://communityrule.info/about/" >CommunityRule.info</a></li>
        </ul>
        
        <br><br>

        <p class="text-left">
         <b>About <a href="https://sagroups.ieee.org/ieee2145/">IEEE P2145 Working Group on Blcockahin/DLT Governance</a></b>
         <br>
         Blockchain / DLT Governance is a complex topic. The topic is made more difficult by a lack of a shared language. The IEEE P2145 Working Group exists to identify and share a common vocabulary for discussing the governance of shared ledgers, and to eventually draft standards for DLT governance activities (a Process Model), and possibly for defining the maturity of a governance regime (a Maturity Model).
          <br><br>
         P2145 actively seeks participation from individuals plus other standards organizations, blockchain ecosystems, consortia, and other entities in pursuit of our holistic and collaborative approach to standards development. If you represent an organization with an interest in DLT governance standards, please connect with us <a href="https://sagroups.ieee.org/ieee2145/">through our website.</a>.
        </p>
        <br><br>

        <p class="text-left">
          <b>About <a href="https://standards.ieee.org/">the IEEE Standards Association</a></b>
          <br>
          The Institute of Electrical and Electronics Engineers is a professional association for electronic engineering and electrical engineering. The IEEE Standards Association is an international leader in technology standards creation. Learn more about the IEEE <a href="https://standards.ieee.org/">here.</a>
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