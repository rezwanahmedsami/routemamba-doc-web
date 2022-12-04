<?php 
include "../includes/Global.php";
?>
<link rel="stylesheet" href="scribbler-landing.css">
<div class="hero">
  <img class="banner-logo" src="./images/logo-big.svg" alt="">
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
            <li class="tab active" data-tab="mac">Script Tag</li>
            <li class="tab" data-tab="linux">npm</li>
          </ul>
          <pre class="nohighlight code">
            <code class="tab__pane active mac"><?= $scriptInstallationLink ?></code>
            <code class="tab__pane linux"><?= $npmInstallation; ?></code>
          </pre>
        </div>
      </div>
      <div class="feature">
        <div class="feature__item">
          <h3 class="section__title">Fast & Light</h3>
          <p>Start writing your notes immediately in any terminal! No more time wasted on navigating and opening your text editor.</p>
        </div>
        <div class="feature__item">
          <h3 class="section__title">File Syncing</h3>
          <p>Save your file in Dropbox then you can access to it from anywhere.</p>
        </div>
        <div class="feature__item">
          <h3 class="section__title">Secure</h3>
          <p>Encrypt your notes optionally. No one can get to your secrets! </p>
        </div>
        <div class="feature__item">
          <h3 class="section__title">Configuration</h3>
          <p>Maintain all your settings in a single <span class="code code--inline">config.json</span> file. Never need to redo the setting every single time jotting down a note.</p>
        </div>
        <div class="feature__item">
          <h3 class="section__title">Highlightings</h3>
          <p>For better readability, scribbler has a clean, beautiful color scheme allow you to scan files fast.</p>
        </div>
        <div class="feature__item">
          <h3 class="section__title">Keybindings</h3>
          <p>You can expect common keybindings for scribbler. Customize <span class="code code--inline">bindings.json</span> for your own liking! </p>
        </div>
      </div>
      
      <div class="callout">
        <p>Read our documentation to use <b>Routemamba</b> in your project.</p>
        <a href="doc.php" id="docLink" class="button--primary">Documentation</a>
      </div>
    </div>
    <div class="changelog">
      <div class="wrapper">
        <h3 class="section__title">Changelog</h3>
        <div class="changelog__item">
          <div class="changelog__meta">
            <h4 class="changelog__title">v0.7</h4>
            <small class="changelog__date">10/12/2017</small>
          </div>
          <div class="changelog__detail">
            <ul>
              <li>Improving the writing workflow with better key bindings</li>
              <li>Design updates</li>
              <li>SSL Verification for web hooks</li>
              <li>Render Emoji</li>
            </ul>
          </div>
        </div>
        <div class="changelog__item">
          <div class="changelog__meta">
            <h4 class="changelog__title">v0.6</h4>
            <small class="changelog__date">7/30/2017</small>
          </div>
          <div class="changelog__detail">
            <ul>
              <li>Adding Unicode support</li>
              <li>Basic text highlighting</li>
              <li>Fresh Design</li>
            </ul>
          </div>
        </div>
        <div class="changelog__item">
          <div class="changelog__meta">
            <h4 class="changelog__title">v0.5</h4>
            <small class="changelog__date">5/10/2017</small>
          </div>
          <div class="changelog__detail">
            <ul>
              <li>Save default md file in new folders</li>
              <li>Ability to quick search on existing notes</li>
            </ul>
          </div>
        </div>
        <div class="changelog__callout">
          <a href="#" class="button--secondary">Checkout Full Log</a>
        </div>
      </div>
    </div>

    <!-- <script>hljs.initHighlightingOnLoad();</script> -->
<script src="scribbler.js"></script>

<script>
  var docLink = document.getElementById("docLink");

  docLink?.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopImmediatePropagation();

    let url = this.getAttribute("href");

    routemamba.navigate(url, {}, {
        header_load: true
    });
})
</script>
    