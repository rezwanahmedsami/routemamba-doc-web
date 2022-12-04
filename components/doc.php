
    
    <div class="wrapper">
      <aside class="doc__nav">
        <ul>
          <li class="js-btn selected">Get Started</li>
          <li class="js-btn">Installation guide</li>
          <li class="js-btn">Configurations</li>
          <li class="js-btn">Http Routes</li>
          <li class="js-btn">Navigate Method</li>
          <li class="js-btn">State Management</li>
          <li class="js-btn">Server side rendering</li>
          <li class="js-btn">Contribution</li>
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
        <section id="get-started" class="js-section">
          <h3 class="section__title">Get Started</h3>
          <p>set files and folder like this to use <code class="code">routemamba.min.js</code> :</p>
          <h3 class="section__title">Installation</h3>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code class="code">
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
            <pre class="code code--block"><span>&lt;</span><span>script</span> <span>src</span>="<span>https://cdn.rezwanahmodsami.com/routemamba/v3.1.x/routemamba.min.js</span>"<span>&gt;</span><span>&lt;/</span><span>script</span><span>&gt;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

            <p>Then Linked the routemamba.min.js file in your projects html <code class="code"> <span><</span><span>head</span><span>></span></code> Tag</p>

            <p>Example linking:</p>
            <pre class="code code--block"><span>&lt;</span><span>head</span><span>&gt;</span>
              <span>&lt;</span><span>script</span> <span>src</span>="<span>https://cdn.rezwanahmodsami.com/routemamba/v3.1.x/routemamba.min.js</span>"<span>&gt;</span><span>&lt;/</span><span>script</span><span>&gt;</span>
            <span>&lt;/</span><span>head</span><span>&gt;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

            <p dir="auto">If you are using <code class="code">npm i routemamba</code> then go to the folder: <code class="code">node_modules/ </code>  there you will see <code class="code">/routemamba </code> folder. Just copy the <code class="code">/routemamba </code> folder and use it in your <code class="code">/assets</code> folder and then link into html <code class="code">&lt;head&gt;</code> tag.</p>

            <pre class="code code--block"><span>&lt;</span><span>script</span> <span>src</span>="<span>./assets/routemamba/dist/routemamba.min.js</span>"<span>&gt;</span><span>&lt;/</span><span>script</span><span>&gt;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

            <p>Then create a file by name <code class="code">app.js</code> in <code class="code">root</code> folder. Example:</p>

            <pre class="code code--block">project_root/app.js<div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

            <p>Then link the <code class="code">/app.js</code> file in footer of your project html file.</p>

            <p>Example Code of <code class="code">/index.html</code> :</p>

            <pre class="code code--block">    <span>&lt;</span><span>script</span> <span>src</span>="<span>/app.js</span>"<span>&gt;</span><span>&lt;/</span><span>script</span><span>&gt;</span>
            <span>&lt;/</span>body<span>&gt;</span>
            <span>&lt;/</span>html<span>&gt;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

            <p>OR You can link as you want.</p>

          </div>

          <hr>

          <div class="js-section">
          <h2>app.js file setup example:</h2>

            <p><code class="code">app.js</code> File code example as our demo test project: (you can find in <code class="code">/example</code> folder)</p>

            <p>First of all you need to set <code class="code">Server Host</code>. It can be your full url Example: <code class="code">https://example.com/</code> OR <code class="code">https://localhost/</code> for your localhost.</p>

            <p>Example:</p>

            <pre class="code code--block"><span>// set server host</span>
            <span>routemamba</span><span>.</span><span>registerServerHost</span><span>(</span><span>'http://example.com/'</span><span>)</span><span>;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

            <p>After set meta content path, you need to add <code class="code">&lt;meta&gt;&lt;/meta&gt;</code> tag on <code class="code">&lt;head&gt;</code> tag.</p>

            <pre class="code code--block"><span>&lt;</span><span>head</span><span>&gt;</span>
            <span>&lt;</span><span>meta</span><span>&gt;</span><span>&lt;/</span><span>meta</span><span>&gt;</span>
            <span>&lt;/</span><span>head</span><span>&gt;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

            <p><b>Note:</b> After adding this, it will will load meta content, but you will face a problem to do seo with meta content. I mean google or other's urls crawlers can't get your seo info from meta content because of meta content and other's content loading after document ready. So to fix that problem you also need to add some meta info by php.</p>

            <h5>Example: (in header.php file)</h5>

            <pre class="code code--block">&lt;!<span>DOCTYPE</span> html&gt;
            &lt;html lang="<span>en</span>"&gt;
            &lt;head&gt;
              &lt;meta&gt;
            <span>&lt;?php</span>
            <span><span>$</span>route</span> = basename(<span><span>$</span><span>_SERVER</span></span>[<span>'PHP_SELF'</span>]);
            <span>switch</span> (<span><span>$</span>route</span>) {
                <span>case</span> <span>'index.php'</span>:
                  <span><span>$</span>title</span> = <span>'Home'</span>;
                  <span>break</span>;
                <span>case</span> <span>'about.php'</span>:
                      <span><span>$</span>title</span> = <span>'About'</span>;
                  <span>break</span>;
                <span>case</span> <span>'privacy.php'</span>:
                  <span><span>$</span>title</span> = <span>'Privacy'</span>;
                  <span>break</span>;
                <span>default</span>:
                <span><span>$</span>title</span> = <span>'Home'</span>;
                <span>break</span>;
            }

            <span>?&gt;</span>
            <span>&lt;</span><span>meta</span> <span>charset</span>="<span>UTF-8</span>"<span>&gt;</span>
            <span>&lt;</span><span>meta</span> <span>name</span>="<span>viewport</span>" <span>content</span>="<span>width=device-width, initial-scale=1.0</span>"<span>&gt;</span>
            <span>&lt;</span><span>title</span><span>&gt;</span><span>&lt;?php</span> <span>echo</span> <span><span>$</span>title</span>; <span>?&gt;</span><span>&lt;/</span><span>title</span><span>&gt;</span>
            <span>&lt;/</span>meta<span>&gt;</span>
            <span>&lt;</span><span>script</span> <span>src</span>="<span>https://cdn.rezwanahmodsami.com/routemamba/v2.0.x/routemamba.min.js</span>"<span>&gt;</span><span>&lt;/</span><span>script</span><span>&gt;</span>

            <span>&lt;/</span>head<span>&gt;</span>
            <span>&lt;</span><span>body</span><span>&gt;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

            <h5>And In <code class="code">meta-content.php</code> file:</h5>

            <pre class="code code--block"><span>&lt;?php</span>
            <span>if</span> (isset(<span><span>$</span><span>_GET</span></span>[<span>'route'</span>])) {
              <span>switch</span> (<span><span>$</span><span>_GET</span></span>[<span>'route'</span>]) {
                <span>case</span> <span>'index.php'</span>:
                    <span><span>$</span>title</span> = <span>'Home'</span>;
                    <span>break</span>;
                <span>case</span> <span>'about.php'</span>:
                      <span><span>$</span>title</span> = <span>'About'</span>;
                    <span>break</span>;
                <span>case</span> <span>'privacy.php'</span>:
                    <span><span>$</span>title</span> = <span>'Privacy'</span>;
                    <span>break</span>;
                <span>default</span>:
                <span><span>$</span>title</span> = <span>'Home'</span>;
                <span>break</span>;
              }
            }
            <span>?&gt;</span>
            <span>&lt;</span><span>meta</span> <span>charset</span>="<span>UTF-8</span>"<span>&gt;</span>
            <span>&lt;</span><span>meta</span> <span>name</span>="<span>viewport</span>" <span>content</span>="<span>width=device-width, initial-scale=1.0</span>"<span>&gt;</span>
            <span>&lt;</span><span>title</span><span>&gt;</span><span>&lt;?php</span> <span>echo</span> <span><span>$</span>title</span>; <span>?&gt;</span><span>&lt;/</span><span>title</span><span>&gt;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

            <p><b>Note:</b> In meta-content.php you can get any parameter from get request automaticly. <b>Example:</b> Suppose your url is <code class="code">https://example.com/category.php?catid=234&deviceid=45678&location=Bangladesh</code> So, if you passed any parameter by url, you can get this parameter with extra parameter name is: <code class="code">route</code>.</p>

            <h5>Example: (how to get parameter's is <code class="code">meta-content.php</code> file)</h5>

            <pre class="code code--block"><span>// this is meta-content.php file</span>
            <span>// you can get here by default route param</span>
            <span>// example:</span>
            <span><span>$</span>route</span> = <span><span>$</span><span>_GET</span></span>["<span>route</span>"]; <span>// this is default param and you can't remove this</span>

            <span>// user defined param</span>
            <span>// from: category.php?catid=234&amp;deviceid=45678&amp;location=Bangladesh</span>
            <span>// example:</span>
            <span><span>$</span>catid</span> = <span><span>$</span><span>_GET</span></span>["<span>catid</span>"];
            <span><span>$</span>deviceid</span> = <span><span>$</span><span>_GET</span></span>["<span>deviceid</span>"];
            <span><span>$</span>location</span> = <span><span>$</span><span>_GET</span></span>["<span>location</span>"];

            <spa>echo</spa> "<span>Route: </span>"<span><span>$</span>route</span>."<span>&lt;br&gt;</span>";
            <spa>echo</spa> "<span>catid: </span>"<span><span>$</span>catid</span>."<span>&lt;br&gt;</span>";
            <spa>echo</spa> "<span>deviceid: </span>"<span><span>$</span>deviceid</span>."<span>&lt;br&gt;</span>";
            <spa>echo</spa> "<span>location: </span>"<span><span>$</span>location</span>."<span>&lt;br&gt;</span>";

            <span>// Output:</span>
            <span>// Route: category.php</span>
            <span>// catid: 234</span>
            <span>// deviceid: 45678</span>
            <span>// location: Bangladesh</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div>
            </pre>

            <p>That's everything you need to do for SEO.</p>
          </div>

          <hr>

          <div class="js-section">


            <h2>http routes</h2>

            <p>Then you must need to set <code class="code">http routes</code>. <code class="code">Http Routes</code> is actually the urls, which urls user will visit. You need to pass array objects with all the routes.</p>

            <p>Example: (from our test project <code class="code">/test/app.js</code> file)</p>

            <pre class="code code--block"><span>// http routes setup</span>
            <span>routemamba</span><span>.</span><span>register_http_routes</span><span>(</span><span>[</span>
            <span>{</span>
              <span>method</span>: <span>"GET"</span><span>,</span>
              <span>meta_loader</span>: <span>true</span><span>,</span>
              <span>content_url</span>: <span>"content/home.php"</span><span>,</span>
              <span>container</span>: <span>"#root"</span><span>,</span>
              <span>data</span>: <span>{</span><span>}</span><span>,</span>
              <span>preloader</span>: <span>'loading...'</span><span>,</span>
              <span>error_content</span>: <span>'error'</span><span>,</span>
              <span>http_url_change</span>: <span>false</span><span>,</span>
              <span>http_url</span>: <span>"index.php"</span>
            <span>}</span><span>,</span>
            <span>{</span>
              <span>method</span>: <span>"GET"</span><span>,</span>
              <span>meta_loader</span>: <span>true</span><span>,</span>
              <span>content_url</span>: <span>"content/about.php"</span><span>,</span>
              <span>container</span>: <span>"#root"</span><span>,</span>
              <span>data</span>: <span>{</span><span>}</span><span>,</span>
              <span>preloader</span>: <span>'loading...'</span><span>,</span>
              <span>error_content</span>: <span>'error'</span><span>,</span>
              <span>http_url_change</span>: <span>false</span><span>,</span>
              <span>http_url</span>: <span>"about.php"</span>
            <span>}</span><span>,</span>
            <span>{</span>
              <span>method</span>: <span>"GET"</span><span>,</span>
              <span>meta_loader</span>: <span>true</span><span>,</span>
              <span>content_url</span>: <span>"content/privacy.php"</span><span>,</span>
              <span>container</span>: <span>"#root"</span><span>,</span>
              <span>data</span>: <span>{</span><span>}</span><span>,</span>
              <span>preloader</span>: <span>'loading...'</span><span>,</span>
              <span>error_content</span>: <span>'error'</span><span>,</span>
              <span>http_url_change</span>: <span>false</span><span>,</span>
              <span>http_url</span>: <span>"privacy.php"</span>
              <span>}</span>
              <span>]</span><span>)</span><span>;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

              <p>Explanation code about array data objects:</p>

              <pre class="code code--block"><span>{</span>
                <span>method</span>: <span>'GET'</span><span>,</span> <span>// This is method of request, two method is accepted (POST/GET).</span>
                <span>meta_loader</span>: <span>true</span><span>,</span> <span>// You need to define boolean(true/false) here to change the meta content on per link visits,</span>
                <span>content_url</span>: <span>"content/about.php"</span><span>,</span> <span>// there you need to give path of content_url, from where your contet will load in every route.</span>
                <span>container</span>: <span>"#root"</span><span>,</span> <span>// This is the container address, it will define by class or id in html where content will display.</span>
                <span>preloader</span>: <span>'loading...'</span><span>,</span> <span>// This is preloader, there you can insert your preloader html content.</span>
                <span>data</span>: <span>{</span><span>id</span>: <span>2456</span><span>}</span><span>,</span> <span>// There you can pass data as javascript object</span>
                <span>error_content</span>: <span>'&lt;h2&gt;error&lt;h2&gt;'</span><span>,</span> <span>// There you can put error content in html.</span>
                <span>http_url_change</span>: <span>true</span><span>,</span> <span>// there you need to define boolean(true/false) value to declare that http url should change or not in browser.</span>
                <span>http_url</span>: <span>"about.php"</span> <span>// This is http url, it will visible in browser url tab.</span>
                <span>}</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div>
              </pre>

              <p>Then you need to set <code class="code">routemamba.register_routes_headers([]);</code> for set per routes different headers or same header content.</p>

              <p>Example code:</p>

              <pre class="code code--block"><span>routemamba</span><span>.</span><span>register_routes_footers</span><span>(</span><span>[</span>
              <span>{</span>
                <span>content_url</span>: <span>"content/footer.php"</span><span>,</span>
                <span>container</span>: <span>"#footer_load"</span><span>,</span>
                <span>preloader</span>: <span>'loading...'</span><span>,</span>
                <span>error_content</span>: <span>'error'</span><span>,</span>
                <span>http_url</span>: <span>[</span><span>"index.php"</span><span>,</span> <span>"about.php"</span><span>,</span> <span>"privacy.php"</span><span>]</span>
              <span>}</span><span>,</span>
              <span>]</span><span>)</span><span>;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

              <h3>Pop route and push route:</h3>

              <p>Pop route and push route example for go back and go next:</p>

              <pre class="code code--block"><span>// pop</span>
              <span>routemamba</span><span>.</span><span>pop_route</span><span>(</span><span>)</span><span>;</span>

              <span>//push</span>
              <span>routemamba</span><span>.</span><span>push_route</span><span>(</span><span>)</span><span>;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

              <p>Note: Must need to set it in any <code class="code">event listener</code>. Example:</p>

              <pre class="code code--block"><span>back</span><span>.</span><span>addEventListener</span><span>(</span><span>'click'</span><span>,</span> <span>(</span><span>)</span><span>=&gt;</span><span>{</span>
              <span>routemamba</span><span>.</span><span>pop_route</span><span>(</span><span>)</span><span>;</span>
            <span>}</span><span>)</span><span>;</span>

            <span>next</span><span>.</span><span>addEventListener</span><span>(</span><span>'click'</span><span>,</span> <span>(</span><span>)</span><span>=&gt;</span><span>{</span>
              <span>routemamba</span><span>.</span><span>push_route</span><span>(</span><span>)</span><span>;</span>
            <span>}</span><span>)</span><span>;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

          </div>

          <div class="js-section">
            <h2>Navigate method: (Old <code class="code">route()</code> method deprecated and removed from routemamba)</h2>

            <hr>

            <p>to navigate one page to another page without reload again website, use <code class="code">routemamba.navigate()</code> method.</p>

            <pre class="code code--block"><span>if</span><span>(</span><span>bookmarks_btn</span> <span>!=</span> <span>undefined</span><span>)</span><span>{</span>

          <span>bookmarks_btn</span><span>.</span><span>addEventListener</span><span>(</span><span>'click'</span><span>,</span> <span>(</span><span>route</span><span>)</span> <span>=&gt;</span> <span>{</span>
          <span>route</span><span>.</span><span>preventDefault</span><span>(</span><span>)</span><span>;</span> <span >// for stop double click</span>
          <span>route</span><span>.</span><span>stopImmediatePropagation</span><span>(</span><span>)</span><span>;</span> <span >// for stop immidiate Propagation.</span>

          <span >// routemamba.navigate(&lt;URl here&gt;, &lt;Data here&gt;, &lt;Options here&gt;);</span>
          <span>routemamba</span><span>.</span><span>navigate</span><span>(</span><span>"bookmarks.php"</span><span>,</span> <span>{</span>
              <span>id</span>: <span>345345</span><span>,</span>
              <span>name</span>: <span>"rezwan"</span><span>,</span>
          <span>}</span><span>,</span> <span>{</span>
              <span>header_load</span>: <span>true</span><span>,</span>
              <span>footer_load</span>: <span>true</span>
          <span>}</span><span>)</span><span>;</span>

          <span >//more examples:</span>
          <span>routemamba</span><span>.</span><span>navigate</span><span>(</span><span>"bookmarks.php?id=4545&amp;name=rezwan"</span><span>,</span> <span>{</span><span>}</span><span>,</span> <span>{</span>
              <span>meta_loader</span>: <span>true</span><span>,</span>
            <span>method</span>: <span>"GET"</span><span>,</span>
            <span>http_url_change</span>: <span>true</span><span>,</span>
            <span>header_load</span>: <span>true</span><span>,</span>
            <span>footer_load</span>: <span>true</span>
          <span>}</span><span>)</span><span>;</span>

          <span>routemamba</span><span>.</span><span>navigate</span><span>(</span><span>"bookmarks.php?id=4545&amp;name=rezwan"</span><span>,</span> <span>{</span><span>}</span><span>,</span> <span>{</span><span>}</span><span>)</span><span>;</span>
          <span>routemamba</span><span>.</span><span>navigate</span><span>(</span><span>"bookmarks.php?id=4545&amp;name=rezwan"</span><span>)</span><span>;</span>
          <span>routemamba</span><span>.</span><span>navigate</span><span>(</span><span>"bookmarks.php"</span><span>)</span><span>;</span>
          <span>}</span><span>)</span><span>;</span>
          <span>}</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

          <p><b>Note:</b></p>

            <p>If you face double click problem or multiple content load problem, don't forget to use: <code class="code">preventDefault()</code> & <code class="code">stopImmediatePropagation()</code> in on click event listener.</p>

            <h3>Last Important</h3>

            <p>You must need to call a method <code class="code">routemamba.render()</code>; else content will not load. Example:</p>

            <pre class="code code--block"><span>// rendering</span>
            <span>routemamba</span><span>.</span><span>render</span><span>(</span><span>)</span><span>;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

            <p><b>Whole <code class="code">app.js</code> code example: (from <code class="code">/example</code> project)</b></p>

            <pre class="code code--block"><span>routemamba</span><span>.</span><span>registerMetaUrl</span><span>(</span><span>"inc/meta-content.php"</span><span>)</span><span>;</span>

              <span>routemamba</span><span>.</span><span>registerServerHost</span><span>(</span><span>"http://localhost:3000/example/"</span><span>)</span><span>;</span>

              <span>routemamba</span><span>.</span><span>register_http_routes</span><span>(</span><span>[</span>
                  <span>{</span>
                      <span>method</span>: <span>"GET"</span><span>,</span>
                      <span>meta_loader</span>: <span>true</span><span>,</span>
                      <span>content_url</span>: <span>"content/home.php"</span><span>,</span>
                      <span>container</span>: <span>"#root"</span><span>,</span>
                      <span>preloader</span>: <span>'&lt;h1&gt;loading...&lt;/h2&gt;'</span><span>,</span>
                      <span>data</span>: <span>{</span><span>}</span><span>,</span>
                      <span>error_content</span>: <span>'error'</span><span>,</span>
                      <span>http_url_change</span>: <span>false</span><span>,</span>
                      <span>http_url</span>: <span>"/"</span>
                  <span>}</span><span>,</span>
                  <span>{</span>
                    <span>method</span>: <span>"GET"</span><span>,</span>
                    <span>meta_loader</span>: <span>true</span><span>,</span>
                    <span>content_url</span>: <span>"content/home.php"</span><span>,</span>
                    <span>container</span>: <span>"#root"</span><span>,</span>
                    <span>preloader</span>: <span>'&lt;h1&gt;loading...&lt;/h2&gt;'</span><span>,</span>
                    <span>data</span>: <span>{</span><span>}</span><span>,</span>
                    <span>error_content</span>: <span>'error'</span><span>,</span>
                    <span>http_url_change</span>: <span>false</span><span>,</span>
                    <span>http_url</span>: <span>"index.php"</span>
                <span>}</span><span>,</span>
                  <span>{</span>
                      <span>method</span>: <span>"GET"</span><span>,</span>
                      <span>meta_loader</span>: <span>true</span><span>,</span>
                      <span>content_url</span>: <span>"content/about.php"</span><span>,</span>
                      <span>container</span>: <span>"#root"</span><span>,</span>
                      <span>preloader</span>: <span>'&lt;h1&gt;loading...&lt;/h2&gt;'</span><span>,</span>
                      <span>data</span>: <span>{</span><span>}</span><span>,</span>
                      <span>error_content</span>: <span>'error'</span><span>,</span>
                      <span>http_url_change</span>: <span>false</span><span>,</span>
                      <span>http_url</span>: <span>"about.php"</span>
                  <span>}</span><span>,</span>
                  <span>{</span>
                      <span>method</span>: <span>"GET"</span><span>,</span>
                      <span>meta_loader</span>: <span>true</span><span>,</span>
                      <span>content_url</span>: <span>"content/privacy.php"</span><span>,</span>
                      <span>container</span>: <span>"#root"</span><span>,</span>
                      <span>preloader</span>: <span>'&lt;h1&gt;loading...&lt;/h2&gt;'</span><span>,</span>
                      <span>data</span>: <span>{</span><span>}</span><span>,</span>
                      <span>error_content</span>: <span>'error'</span><span>,</span>
                      <span>http_url_change</span>: <span>false</span><span>,</span>
                      <span>http_url</span>: <span>"privacy.php"</span>
                  <span>}</span><span>,</span>
                  <span>{</span>
                      <span>method</span>: <span>"GET"</span><span>,</span>
                      <span>meta_loader</span>: <span>true</span><span>,</span>
                      <span>content_url</span>: <span>"content/tabs-example.php"</span><span>,</span>
                      <span>container</span>: <span>"#root"</span><span>,</span>
                      <span>preloader</span>: <span>'&lt;h1&gt;loading...&lt;/h2&gt;'</span><span>,</span>
                      <span>data</span>: <span>{</span><span>}</span><span>,</span>
                      <span>error_content</span>: <span>'error'</span><span>,</span>
                      <span>http_url_change</span>: <span>false</span><span>,</span>
                      <span>http_url</span>: <span>"tabs-example.php"</span>
                  <span>}</span><span>,</span>
              <span>]</span><span>)</span><span>;</span>

              <span>routemamba</span><span>.</span><span>register_routes_headers</span><span>(</span><span>[</span>
                  <span>{</span>
                      <span>content_url</span>: <span>"content/header.php"</span><span>,</span>
                      <span>container</span>: <span>"#header_load"</span><span>,</span>
                      <span>preloader</span>: <span>'loading...'</span><span>,</span>
                      <span>error_content</span>: <span>'error'</span><span>,</span>
                      <span>http_url</span>: <span>[</span><span>"/"</span><span>,</span><span>"about.php"</span><span>,</span> <span>"privacy.php"</span><span>,</span> <span>"tabs-example.php"</span><span>]</span>
                  <span>}</span><span>,</span>
              <span>]</span><span>)</span><span>;</span>

              <span>routemamba</span><span>.</span><span>register_routes_footers</span><span>(</span><span>[</span>
                  <span>{</span>
                      <span>content_url</span>: <span>"content/footer.php"</span><span>,</span>
                      <span>container</span>: <span>"#footer_load"</span><span>,</span>
                      <span>preloader</span>: <span>'loading...'</span><span>,</span>
                      <span>error_content</span>: <span>'error'</span><span>,</span>
                      <span>http_url</span>: <span>[</span><span>"/"</span><span>,</span><span>"about.php"</span><span>,</span> <span>"privacy.php"</span><span>,</span> <span>"tabs-example.php"</span><span>]</span>
                  <span>}</span><span>,</span>
              <span>]</span><span>)</span><span>;</span>

              <span>routemamba</span><span>.</span><span>render</span><span>(</span><span>)</span><span>;</span>

              <span>var</span> <span>home_btn</span> <span>=</span> <span>document</span><span>.</span><span>getElementById</span><span>(</span><span>"home"</span><span>)</span><span>;</span>
              <span>var</span> <span>about_btn</span> <span>=</span> <span>document</span><span>.</span><span>getElementById</span><span>(</span><span>"about"</span><span>)</span><span>;</span>
              <span>var</span> <span>privacy_btn</span> <span>=</span> <span>document</span><span>.</span><span>getElementById</span><span>(</span><span>"privacy"</span><span>)</span><span>;</span>
              <span>var</span> <span>tabs_example_btn</span> <span>=</span> <span>document</span><span>.</span><span>getElementById</span><span>(</span><span>"tabs-example"</span><span>)</span><span>;</span>
              <span>var</span> <span>back</span> <span>=</span> <span>document</span><span>.</span><span>getElementById</span><span>(</span><span>"back"</span><span>)</span><span>;</span>
              <span>var</span> <span>next</span> <span>=</span> <span>document</span><span>.</span><span>getElementById</span><span>(</span><span>"next"</span><span>)</span><span>;</span>

              <span>back</span><span>.</span><span>addEventListener</span><span>(</span><span>'click'</span><span>,</span> <span>(</span><span>)</span><span>=&gt;</span><span>{</span>
                  <span>routemamba</span><span>.</span><span>pop_route</span><span>(</span><span>)</span><span>;</span>
              <span>}</span><span>)</span><span>;</span>
              
              <span>next</span><span>.</span><span>addEventListener</span><span>(</span><span>'click'</span><span>,</span> <span>(</span><span>)</span><span>=&gt;</span><span>{</span>
                  <span>routemamba</span><span>.</span><span>push_route</span><span>(</span><span>)</span><span>;</span>
              <span>}</span><span>)</span><span>;</span>
              

              <span>home_btn</span><span>.</span><span>addEventListener</span><span>(</span><span>'click'</span><span>,</span> <span>(</span><span>)</span><span>=&gt;</span><span>{</span>
                  <span>routemamba</span><span>.</span><span>navigate</span><span>(</span><span>"/"</span><span>,</span> <span>{</span><span>}</span><span>,</span> <span>{</span>
                      <span>header_load</span>: <span>true</span><span>,</span>
                      <span>footer_load</span>: <span>true</span>
                  <span>}</span><span>)</span><span>;</span>
              <span>}</span><span>)</span><span>;</span>

              <span>about_btn</span><span>.</span><span>addEventListener</span><span>(</span><span>'click'</span><span>,</span> <span>(</span><span>)</span><span>=&gt;</span><span>{</span>
                  <span>routemamba</span><span>.</span><span>navigate</span><span>(</span><span>"about.php"</span><span>,</span> <span>{</span>
                    <span>id</span>: <span>43345</span><span>,</span>
                    <span>name</span>: <span>"rezwan"</span>
                  <span>}</span><span>,</span> <span>{</span>
                    <span>header_load</span>: <span>true</span><span>,</span>
                    <span>footer_load</span>: <span>true</span>
                  <span>}</span><span>)</span><span>;</span>
              <span>}</span><span>)</span><span>;</span>

              <span>privacy_btn</span><span>.</span><span>addEventListener</span><span>(</span><span>'click'</span><span>,</span> <span>(</span><span>)</span><span>=&gt;</span><span>{</span>
                  <span>routemamba</span><span>.</span><span>navigate</span><span>(</span><span>"privacy.php"</span><span>)</span><span>;</span>
              <span>}</span><span>)</span><span>;</span>
              
              <span>tabs_example_btn</span><span>.</span><span>addEventListener</span><span>(</span><span>'click'</span><span>,</span> <span>(</span><span>)</span><span>=&gt;</span><span>{</span>
                  <span>routemamba</span><span>.</span><span>navigate</span><span>(</span><span>"tabs-example.php"</span><span>,</span> <span>{</span><span>}</span><span>,</span> <span>{</span>
                    <span>meta_loader</span>: <span>true</span><span>,</span>
                    <span>method</span>: <span>"GET"</span><span>,</span>
                    <span>http_url_change</span>: <span>true</span><span>,</span>
                    <span>header_load</span>: <span>true</span><span>,</span>
                    <span>footer_load</span>: <span>true</span>
                  <span>}</span><span>)</span><span>;</span>
              <span>}</span><span>)</span><span>;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

            <h3>Creating Tabs</h3>

            <p>Some people also wants to create a tabs system easily. So, now by routemamba you can easily add tabs by routemamba method: <code class="code">routemamba.initTabs([])</code>. See this Example:</p>

            <h4>javascript initialization:</h4>

            <pre class="code code--block"><span>routemamba</span><span>.</span><span>initTabs</span><span>(</span><span>[</span>
        <span>{</span>
            <span>tabSwitcher</span>: <span>".tab-switcher"</span><span>,</span> <span>// tab switcher buttons class here.</span>
            <span>initialTab</span>: <span>"tab1"</span><span>,</span> <span>// inital tab id here</span>
            <span>activeSwitcherClass</span>: <span>"tab-active"</span><span>,</span> <span>// active tab class here, which class you want to add.</span>
            <span>activeTabClass</span>: <span>"activeTab"</span><span>,</span> <span>// active tab class here, which class you want to add.</span>
            <span>tabs</span>: <span>[</span> <span>//define tabs info here</span>
                <span>{</span>
                    <span>tabRoute</span>: <span>"tab1"</span><span>,</span> <span>// tab id where content will load</span>
                    <span>content_url</span>: <span>"content/tabs/tab1.php"</span><span>,</span> <span>// tab component</span>
                    <span>preloader</span>: <span>'loading...'</span><span>,</span> <span>// preloading content</span>
                    <span>error_handler</span>: <span>'error'</span><span>,</span> <span>// error content</span>
                <span>}</span><span>,</span>
                <span>{</span>
                    <span>tabRoute</span>: <span>"tab2"</span><span>,</span>
                    <span>content_url</span>: <span>"content/tabs/tab2.php"</span><span>,</span>
                    <span>preloader</span>: <span>'loading...'</span><span>,</span>
                    <span>error_handler</span>: <span>'error'</span><span>,</span>
                <span>}</span><span>,</span>
                <span>{</span>
                    <span>tabRoute</span>: <span>"tab3"</span><span>,</span>
                    <span>content_url</span>: <span>"content/tabs/tab3.php"</span><span>,</span>
                    <span>preloader</span>: <span>'loading...'</span><span>,</span>
                    <span>error_handler</span>: <span>'error'</span><span>,</span>
                <span>}</span><span>,</span>
            <span>]</span>
        <span>}</span><span>,</span>
    <span>]</span><span>)</span><span>;</span>

                <span>// note: you can initalize multiple tabs here</span>
                <span>// example:</span>

                <span>routemamba</span><span>.</span><span>initTabs</span><span>(</span><span>[</span>
                    <span>{</span>
                        <span>tabSwitcher</span>: <span>".tab-switcher"</span><span>,</span>
                        <span>initialTab</span>: <span>"tab1"</span><span>,</span>
                        <span>activeSwitcherClass</span>: <span>"tab-active"</span><span>,</span>
                        <span>activeTabClass</span>: <span>"activeTab"</span><span>,</span>
                        <span>tabs</span>: <span>[</span>
                            <span>{</span>
                                <span>tabRoute</span>: <span>"tab1"</span><span>,</span>
                                <span>content_url</span>: <span>"content/tabs/tab1.php"</span><span>,</span>
                                <span>preloader</span>: <span>'loading...'</span><span>,</span>
                                <span>error_handler</span>: <span>'error'</span><span>,</span>
                            <span>}</span><span>,</span>
                            <span>{</span>
                                <span>tabRoute</span>: <span>"tab2"</span><span>,</span>
                                <span>content_url</span>: <span>"content/tabs/tab2.php"</span><span>,</span>
                                <span>preloader</span>: <span>'loading...'</span><span>,</span>
                                <span>error_handler</span>: <span>'error'</span><span>,</span>
                            <span>}</span><span>,</span>
                            <span>{</span>
                                <span>tabRoute</span>: <span>"tab3"</span><span>,</span>
                                <span>content_url</span>: <span>"content/tabs/tab3.php"</span><span>,</span>
                                <span>preloader</span>: <span>'loading...'</span><span>,</span>
                                <span>error_handler</span>: <span>'error'</span><span>,</span>
                            <span>}</span><span>,</span>
                        <span>]</span>
                    <span>}</span><span>,</span>
                    <span>{</span>
                        <span>tabSwitcher</span>: <span>".tab-switcher2"</span><span>,</span>
                        <span>initialTab</span>: <span>"tab22"</span><span>,</span>
                        <span>activeSwitcherClass</span>: <span>"tab-active2"</span><span>,</span>
                        <span>activeTabClass</span>: <span>"activeTab2"</span><span>,</span>
                        <span>tabs</span>: <span>[</span>
                            <span>{</span>
                                <span>tabRoute</span>: <span>"tab12"</span><span>,</span>
                                <span>content_url</span>: <span>"content/tabs/tab1.php"</span><span>,</span>
                                <span>preloader</span>: <span>'loading...'</span><span>,</span>
                                <span>error_handler</span>: <span>'error'</span><span>,</span>
                            <span>}</span><span>,</span>
                            <span>{</span>
                                <span>tabRoute</span>: <span>"tab22"</span><span>,</span>
                                <span>content_url</span>: <span>"content/tabs/tab2.php"</span><span>,</span>
                                <span>preloader</span>: <span>'loading...'</span><span>,</span>
                                <span>error_handler</span>: <span>'error'</span><span>,</span>
                            <span>}</span><span>,</span>
                            <span>{</span>
                                <span>tabRoute</span>: <span>"tab32"</span><span>,</span>
                                <span>content_url</span>: <span>"content/tabs/tab3.php"</span><span>,</span>
                                <span>preloader</span>: <span>'loading...'</span><span>,</span>
                                <span>error_handler</span>: <span>'error'</span><span>,</span>
                            <span>}</span><span>,</span>
                        <span>]</span>
                    <span>}</span><span>,</span>
                <span>]</span><span>)</span><span>;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

                <p>Note: you must need to initialize this method where tabs will load. if you want to see more details check this code: <a class="link-underline" href="https://github.com/rezwanahmodsami/routemamba/tree/main/example/content/tabs-example.php">Tabs example code</a></p>

                <h4>html code example:</h4>

                <pre class="code code--block"><span>&lt;</span><span>style</span><span>&gt;</span>
                .<span>TabRoot</span>{
                    <span>width</span><span>:</span> <span>500<span>px</span></span>;
                    <span>height</span><span>:</span> <span>500<span>px</span></span>;
                    <span>background-color</span><span>:</span> green;
                    <span>display</span><span>:</span> flex;
                    <span>justify-content</span><span>:</span> flex-start;
                    <span>align-items</span><span>:</span> center;
                    <span>flex-direction</span><span>:</span> column;
                }
                .<span>tabs-btns</span>{
                    <span>width</span><span>:</span> <span>100<span>%</span></span>;
                    <span>height</span><span>:</span> <span>60<span>px</span></span>;
                    <span>display</span><span>:</span> flex;
                    <span>justify-content</span><span>:</span> center;
                    <span>align-items</span><span>:</span> center;
                }
                .<span>tabs-btns</span> <span>button</span>{
                    <span>margin-right</span><span>:</span> <span>5<span>px</span></span>;
                }
                .<span>tab-contents</span> {
                    <span>width</span><span>:</span> <span>480<span>px</span></span>;
                    <span>padding</span><span>:</span> <span>5<span>px</span></span>;
                    <span>background-color</span><span>:</span> red;
                }
                .<span>tab-active</span> {
                    <span>background-color</span><span>:</span> yellow;
                    <span>display</span><span>:</span> flex;
                }
                .<span>activeTab</span>{
                    <span>display</span><span>:</span> block <span>!important</span>;
                }

                .<span>tab-active2</span> {
                    <span>background-color</span><span>:</span> yellow;
                    <span>display</span><span>:</span> flex;
                }
                .<span>activeTab2</span>{
                    <span>display</span><span>:</span> block <span>!important</span>;
                }
                .<span>tab-container</span>{
                    <span>display</span><span>:</span> none;
                }
            <span>&lt;/</span><span>style</span><span>&gt;</span>

            <span>&lt;</span><span>div</span> <span>class</span>="<span>TabRoot</span>"<span>&gt;</span>
                <span>&lt;</span><span>div</span> <span>class</span>="<span>tabs-btns</span>"<span>&gt;</span>
                    // this is tab switchers
                    <span>&lt;</span><span>button</span> <span>class</span>="<span>tab-switcher</span>" <span>tabRoute</span>="<span>tab1</span>"<span>&gt;</span>Tab1<span>&lt;/</span><span>button</span><span>&gt;</span> //  you must need to define tabRoute="" attribute here.
                    <span>&lt;</span><span>button</span> <span>class</span>="<span>tab-switcher</span>" <span>tabRoute</span>="<span>tab2</span>"<span>&gt;</span>Tab2<span>&lt;/</span><span>button</span><span>&gt;</span>
                    <span>&lt;</span><span>button</span> <span>class</span>="<span>tab-switcher</span>" <span>tabRoute</span>="<span>tab3</span>"<span>&gt;</span>Tab3<span>&lt;/</span><span>button</span><span>&gt;</span>
                <span>&lt;/</span><span>div</span><span>&gt;</span>
                <span>&lt;</span><span>div</span> <span>class</span>="<span>tab-contents</span>"<span>&gt;</span>
                    <span>&lt;</span><span>div</span> <span>id</span>="<span>tab1</span>" <span>class</span>="<span>tab-container</span>"<span>&gt;</span> // there you need to define tab id, where content will load.
                    <span>&lt;/</span><span>div</span><span>&gt;</span>
                    <span>&lt;</span><span>div</span> <span>id</span>="<span>tab2</span>" <span>class</span>="<span>tab-container</span>"<span>&gt;</span>
                    <span>&lt;/</span><span>div</span><span>&gt;</span>
                    <span>&lt;</span><span>div</span> <span>id</span>="<span>tab3</span>" <span>class</span>="<span>tab-container</span>"<span>&gt;</span>
                    <span>&lt;/</span><span>div</span><span>&gt;</span>
                <span>&lt;/</span><span>div</span><span>&gt;</span>
            <span>&lt;/</span><span>div</span><span>&gt;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>
          </div>


          <div class="js-section">
            <h2>Reactive system by State Management in routemamba</h2>
            <hr>
            
            <p>In routemamba, you can perform reactive system by managing states. This can be done in two ways.</p>

            <ul>
              <li>Local States.</li>
              <li>Global States. (Coming soon)</li>
            </ul>

            <h4>Local states:</h4>

            <p>Local states are used to show data that is reactive in a specific section or multiple sections.</p>

            <p>To use local states you have to do like that:</p>

            <pre class="code code--block">    <span>// To display changes in particular section</span>
            <span>const</span> <span>[</span><span>count</span><span>,</span> <span>setCount</span><span>]</span> <span>=</span> <span>routemamba</span><span>.</span><span>localState</span><span>.</span><span>useState</span><span>(</span><span>0</span><span>,</span> <span>"#count1"</span><span>)</span><span>;</span>

            <span>// to display changes at a time multiple section</span>
            <span>const</span> <span>[</span><span>count</span><span>,</span> <span>setCount</span><span>]</span> <span>=</span> <span>routemamba</span><span>.</span><span>localState</span><span>.</span><span>useState</span><span>(</span><span>0</span><span>,</span> <span>[</span><span>"#count1"</span><span>,</span> <span>"#count2"</span><span>]</span><span>)</span><span>;</span>

            <span>// use setCount() to set state value</span>
            <span>setCount</span><span>(</span><span>4534</span><span>)</span><span>;</span>

            <span>// call count to get count value</span>
            <span class="pl-smi">console</span><span>.</span><span>log</span><span>(</span><span>"Total count is:"</span><span>,</span> <span>count</span><span>(</span><span>)</span><span>)</span><span>;</span><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre>

          </div>

          <div class="js-section">
            <h2>Server Side Rendering (SSR)</h2>
          <p>Server side rendering tested by these languages.</p>
            <table id="customers">
              <tr>
                <td>PHP</td>
                <td style="color: green;">Supported &#10003;</td>
              </tr>
            </table>
            <hr />
          </div>

          <div class="js-section">
            <h2>Contribution</h2>
            <hr>
            <p>In general, we follow the "fork-and-pull" Git workflow.</p>

            <ol dir="auto">
              <li>Fork the repo on GitHub</li>
              <li>Clone the project to your own machine</li>
              <li>Work on your fork
              <ol dir="auto">
              <li>Make your changes and additions
              <ul dir="auto">
              <li>Most of your changes should be focused on <code class="code">src/</code> and <code class="code">__tests__/</code> folders and/or <code class="code">README.md</code>.</li>
              <li>Files such as <code class="code">/dist/routemamba.min.js</code> and <code class="code">/dist/routemamba.min.js.LICENSE.txt</code> are autogenerated when running tests (<code class="code">npm run build</code>) and need not to be changed <strong>manually</strong>.</li>
              </ul>
              </li>
              <li>Change or add tests if needed</li>
              <li>Run tests and make sure they pass</li>
              <li>Add changes to README.md if needed</li>
              </ol>
              </li>
              <li>Commit changes to your own branch</li>
              <li><strong>Make sure</strong> you merge the latest from "upstream" and resolve conflicts if there is any</li>
              <li>Repeat step 3(3) above</li>
              <li>Push your work back up to your fork</li>
              <li>Submit a Pull request so that we can review your changes</li>
            </ol>

            <h2>Author Info:</h2>
            <hr>
            <p><b>Name:</b> Rezwan Ahmod Sami</p>
            <p><b>Profession:</b> Software Enginner, Entrepreneur</p>
            <p><b>Lives In:</b> Bangladesh</p>
            <p><b>Socials:</b></p>
            <ul>
              <li><a class="link-underline" href="https://facebook.com/rezwanahmodsami">Facebook</a></li>
              <li><a class="link-underline" href="https://twitter.com/rezwanahmodsami">Twitter</a></li>
              <li><a class="link-underline" href="https://linkedin.com/rezwanahmodsami">LinkedIn</a></li>
              <li><a class="link-underline" href="https://github.com/rezwanahmodsami">Github</a></li>
              <li><a class="link-underline" href="https://instagram.com/rezwanahmodsami">Instagram</a></li>
            </ul>
            

          </div>
        </section>
        
      </article>
    </div>

    <!-- <script>hljs.initHighlightingOnLoad();</script> -->
    <script src="scribbler.js"></script>