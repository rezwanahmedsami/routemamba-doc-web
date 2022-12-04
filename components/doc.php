
    
    <div class="wrapper">
      <aside class="doc__nav">
        <ul>
          <li class="js-btn selected">Get Started</li>
          <li class="js-btn">Configuration</li>
          <li class="js-btn">Keybindings</li>
          <li class="js-btn">Issues</li>
        </ul>
      </aside>
      <article class="doc__content">
        <section>
          <h3>Introduction</h3>
          <p>Routemamba is now mainly developed to use in php projects. In this world lot's of web applications were built in php. Php is good enough, but in the competition of node js, a php developer can't give much user experience. So, that's the reason we developed routemamba. Routemamba js library will help you to make your php web application fully single page application and give your user better experience.</p>
          <hr>
          <h5>what is single page web application?</h5>
          <p>A single-page application is a web application or website that interacts with the user by dynamically rewriting the current web page with new data from the web server, instead of the default method of a web browser loading entire new pages.</p>
          <hr>
          <p>And also it's easy to use. You can use directly to your php project. To use that script you can directly add our cdn link in your html tag or also you can add by downloading <code class="code">routemamba.min.js</code> . Follow the guideline to use routemamba in your project.</p>
        </section>
        <hr>
        <section class="js-section">
          <h3 class="section__title">Get Started</h3>
          <p>set files and folder like this to use <code class="code">routemamba.min.js</code> :</p>
          <h3 class="section__title">Installation</h3>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                project_root
                |
                |-- assets
                |      |-- routemamba
                |                |-- routemamba.min.js
                |-- components
                |      |-- header-layout
                |      |         |--- header-component.php
                |      |-- footer-layout
                |      |         |-- footer-component.php
                |      |-- about-component.php
                |      |-- Index-component.php
                |      
                |-- include
                |      |-- header.php
                |      |-- footer.php
                |      |-- meta-content.php
                |
                |-- index.php
                |-- about.php
                |-- app.js
              </code>
            </pre>
          </div>
        </section>
        <section class="js-section">
          <h3 class="section__title">video tutorial:</h3>
          <p>Check this full guided video tutorial: <a class="link-underline" href="https://www.youtube.com/playlist?list=PLWeKWwtQYN-RIDzc4ZuruoYeU1HkuRpC_">Video tutorial of routemamba.min.js</a> (Note: This video is to use routemamba js. elevator js was previous name of routemamba.)</p>

          <div>
            <h3>Installation guide</h3>
            <p>You can directly install our routemamba js by using npm.</p>

            <p>npm install Example:</p>
            <pre class="code code--block">
              npm i routemamba
            </pre>

            <p>OR by copy script tag:</p>
            <pre class="code code--block"><span class="pl-kos">&lt;</span><span class="pl-ent">script</span> <span class="pl-c1">src</span>="<span class="pl-s">https://cdn.rezwanahmodsami.com/routemamba/v3.1.x/routemamba.min.js</span>"<span class="pl-kos">&gt;</span><span class="pl-kos">&lt;/</span><span class="pl-ent">script</span><span class="pl-kos">&gt;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

            <p>Then Linked the routemamba.min.js file in your projects html <code class="code"> <span><</span><span>head</span><span>></span></code> Tag</p>

            <p>Example linking:</p>
            <pre class="code code--block"><span class="pl-kos">&lt;</span><span class="pl-ent">head</span><span class="pl-kos">&gt;</span>
              <span class="pl-kos">&lt;</span><span class="pl-ent">script</span> <span class="pl-c1">src</span>="<span class="pl-s">https://cdn.rezwanahmodsami.com/routemamba/v3.1.x/routemamba.min.js</span>"<span class="pl-kos">&gt;</span><span class="pl-kos">&lt;/</span><span class="pl-ent">script</span><span class="pl-kos">&gt;</span>
            <span class="pl-kos">&lt;/</span><span class="pl-ent">head</span><span class="pl-kos">&gt;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

            <p dir="auto">If you are using <code class="code">npm i routemamba</code> then go to the folder: <code class="code">node_modules/ </code>  there you will see <code>/routemamba </code> folder. Just copy the <code class="code">/routemamba </code> folder and use it in your <code class="code">/assets</code> folder and then link into html <code class="code">&lt;head&gt;</code> tag.</p>

            <pre class="code code--block"><span class="pl-kos">&lt;</span><span class="pl-ent">script</span> <span class="pl-c1">src</span>="<span class="pl-s">./assets/routemamba/dist/routemamba.min.js</span>"<span class="pl-kos">&gt;</span><span class="pl-kos">&lt;/</span><span class="pl-ent">script</span><span class="pl-kos">&gt;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

            <p>Then create a file by name <code class="code">app.js</code> in <code class="code">root</code> folder. Example:</p>

            <pre class="code code--block">project_root/app.js<div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

            <p>Then link the <code class="code">/app.js</code> file in footer of your project html file.</p>

            <p>Example Code of <code class="code">/index.html</code> :</p>

            <pre class="code code--block">    <span class="pl-kos">&lt;</span><span class="pl-ent">script</span> <span class="pl-c1">src</span>="<span class="pl-s">/app.js</span>"<span class="pl-kos">&gt;</span><span class="pl-kos">&lt;/</span><span class="pl-ent">script</span><span class="pl-kos">&gt;</span>
            <span class="pl-kos">&lt;/</span>body<span class="pl-kos">&gt;</span>
            <span class="pl-kos">&lt;/</span>html<span class="pl-kos">&gt;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

          </div>

          <table id="customers">
            <tr>
              <th>Options</th>
              <th>Value</th>
              <th>Default</th>
            </tr>
            <tr>
              <td>encryption</td>
              <td>encrypt all notes before saving. If turned on, it requires password to open the file.</td>
              <td>false</td>
            </tr>
            <tr>
              <td>highlighting</td>
              <td>Show syntax highlight on markdown text.</td>
              <td>true</td>
            </tr>
            <tr>
              <td>prettyTable</td>
              <td>Render table with Scribbler’s pretty table style.</td>
              <td>true</td>
            </tr>
          </table>
          <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant definiebas concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea te, ne per tacimates suavitate vituperatoribus.</p>
          <hr />
        </section>
        <section class="js-section">
          <h3 class="section__title">Keybindings</h3>
          <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex per. At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed. Porro verear eu vix, ne usu tation vituperata.</p>
          <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant definiebas concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea te, ne per tacimates suavitate vituperatoribus.</p>
          <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant definiebas concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea te, ne per tacimates suavitate vituperatoribus.</p>
          <hr />
        </section>
        <section class="js-section">
          <h3 class="section__title">Issues</h3>
          <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex per. At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed. Porro verear eu vix, ne usu tation vituperata.</p>
          <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant definiebas concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea te, ne per tacimates suavitate vituperatoribus.</p>
        </section>
      </article>
    </div>

    <script>hljs.initHighlightingOnLoad();</script>
    <script src="scribbler.js"></script>