<?php 
include "../includes/Global.php";
?>
<link rel="stylesheet" href="scribbler-landing.css">
<div class="hero">
  <img class="banner-logo" src="./images/logo-big.svg" alt="Routemamba">
      <h1 class="hero__title">Routemamba</h1>
      <p class="hero__description">Convert your web application single page by raw coding.</p>
    </div>
    <div class="hero__terminal">
      <pre>
        <!-- Place your demo code here -->
        <code class="shell-session demo"></code>
      </pre>
    </div>
    <div class="wrapper">
      <div class="installation">
        <h3 class="section__title">Installation</h3>
        <div class="tab__container">
          <ul class="tab__menu">
            <li class="tab active" data-tab="download">Download</li>
            <li class="tab" data-tab="mac">Script Tag</li>
            <li class="tab" data-tab="linux">npm</li>
          </ul>
          <pre class="nohighlight code">
          <code class="tab__pane active download"><b><a class="button--primary" href="">Download Latest</a></b></code>
            <code class="tab__pane mac"><?= $scriptInstallationLink ?></code>
            <code class="tab__pane linux"><?= $npmInstallation; ?></code>
          </pre>
        </div>
      </div>
      <div class="feature">
        <div class="feature__item">
          <h3 class="section__title">Fast & Light</h3>
          <p>Routemamba is the faster and more lightweight library. You have to just link it by script tag and do some configuration by creating an <span class="code code--inline">app.js</span> file. </p>
        </div>
        <div class="feature__item">
          <h3 class="section__title">Customizable</h3>
          <p>By using this library you can develop a more customizable web app. We just developed this library, especially for raw coders and raw projects.</p>
        </div>
        <div class="feature__item">
          <h3 class="section__title">Server side rendering</h3>
          <p>We verified that you can do also server-side rendering by PHP, to develop SEO friendly web app.</p>
        </div>
        <div class="feature__item">
          <h3 class="section__title">SEO friendly</h3>
          <p>When you are routing, you can handle your web SEO. Check our <b><a href="doc.php" class="docLink">documentation</a></b> for more info.</p>
        </div>
        <div class="feature__item">
          <h3 class="section__title">Open source</h3>
          <p>Routemamba is an open-source library, which means everyone can use this library fully free for commercial use. And also can contribute to <b><a href="<?= $githubLink ?>">GitHub</a></b>.</p>
        </div>
        <div class="feature__item">
          <h3 class="section__title">Reactive system</h3>
          <p>By Routemamba state management system you can make your application reactive. Check our <b><a href="doc.php" class="docLink">documentation</a></b> for more info.</p></p>
        </div>
      </div>
      
      <div class="callout">
        <p>Read our documentation to use <b>Routemamba</b> in your project.</p>
        <a href="doc.php" class="button--primary docLink">Documentation</a>
      </div>
    </div>
    <div class="changelog">
      <div class="wrapper">
        <h3 class="section__title">Releases</h3>

        <?php

        foreach ($releasesData as $key => $value) {
        ?>
          <div class="changelog__item">
            <div class="changelog__meta">
              <h4 class="changelog__title"><?= $value["version"] ?></h4>
              <small class="changelog__date"><?= $value["date"] ?></small>
            </div>
            <div class="changelog__detail">
            <?= $value["details"] ?>
            </div>
          </div>
        <?php
          }
        ?>

        <div class="changelog__callout">
          <a target="_blank" href="https://github.com/rezwanahmodsami/routemamba/releases" class="button--secondary">Checkout All Releases</a>
        </div>
      </div>
    </div>

    <!-- <script>hljs.initHighlightingOnLoad();</script> -->
<script src="scribbler.js"></script>

<script>
  var docLink = document.querySelectorAll(".docLink");

  docLink.forEach(link =>{
    link?.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        let url = this.getAttribute("href");

        routemamba.navigate(url, {}, {
            header_load: true
        });
    })
  });
</script>
    