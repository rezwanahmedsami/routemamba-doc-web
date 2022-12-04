// utilities
var get = function (selector, scope) {
  scope = scope ? scope : document;
  return scope.querySelector(selector);
};

var getAll = function (selector, scope) {
  scope = scope ? scope : document;
  return scope.querySelectorAll(selector);
};

// setup typewriter effect in the terminal demo
if (document.getElementsByClassName('demo').length > 0) {
  var i = 0;
  var txt = `// Example configuration:
  routemamba.registerMetaUrl("inc/meta-content.php");

  routemamba.registerServerHost("http://localhost:3000/example/");
  
  routemamba.register_http_routes([
      {
          method: "GET",
          meta_loader: true,
          content_url: "content/home.php",
          container: "#root",
          preloader: '<h1>loading...</h2>',
          data: {},
          error_content: 'error',
          http_url_change: false,
          http_url: "/"
       },
       {
        method: "GET",
        meta_loader: true,
        content_url: "content/home.php",
        container: "#root",
        preloader: '<h1>loading...</h2>',
        data: {},
        error_content: 'error',
        http_url_change: false,
        http_url: "index.php"
     }
  ]);
  
  routemamba.register_routes_headers([
      {
          content_url: "content/header.php",
          container: "#header_load",
          preloader: 'loading...',
          error_content: 'error',
          http_url: ["/","about.php", "privacy.php", "tabs-example.php"]
       },
  ]);
  
  routemamba.register_routes_footers([
      {
          content_url: "content/footer.php",
          container: "#footer_load",
          preloader: 'loading...',
          error_content: 'error',
          http_url: ["/","about.php", "privacy.php", "tabs-example.php"]
       },
  ]);
  
  routemamba.render();
  
  var home_btn = document.getElementById("home");
  var about_btn = document.getElementById("about");
  var privacy_btn = document.getElementById("privacy");
  var tabs_example_btn = document.getElementById("tabs-example");
  var back = document.getElementById("back");
  var next = document.getElementById("next");
  
  back.addEventListener('click', ()=>{
      routemamba.pop_route();
   });
   
   next.addEventListener('click', ()=>{
      routemamba.push_route();
   });
   
  
  home_btn.addEventListener('click', ()=>{
      routemamba.navigate("/", {}, {
          header_load: true,
          footer_load: true
      });
  });
  
  about_btn.addEventListener('click', ()=>{
      routemamba.navigate("about.php", {
         id: 43345,
         name: "rezwan"
      }, {
         header_load: true,
         footer_load: true
      });
   });
  
   privacy_btn.addEventListener('click', ()=>{
      routemamba.navigate("privacy.php");
   });
   
   tabs_example_btn.addEventListener('click', ()=>{
      routemamba.navigate("tabs-example.php", {}, {
         meta_loader: true,
         method: "GET",
         http_url_change: true,
         header_load: true,
         footer_load: true
      });
   });
  `;
  var speed = 60;

  function typeItOut () {
    if (i < txt.length) {
      document.getElementsByClassName('demo')[0].innerHTML += txt.charAt(i);
      i++;
      setTimeout(typeItOut, speed);
    }
  }

  setTimeout(typeItOut, 1800);
}

// toggle tabs on codeblock
window.addEventListener("load", function() {
  // get all tab_containers in the document
  var tabContainers = getAll(".tab__container");

  // bind click event to each tab container
  for (var i = 0; i < tabContainers.length; i++) {
    get('.tab__menu', tabContainers[i]).addEventListener("click", tabClick);
  }

  // each click event is scoped to the tab_container
  function tabClick (event) {
    var scope = event.currentTarget.parentNode;
    var clickedTab = event.target;
    var tabs = getAll('.tab', scope);
    var panes = getAll('.tab__pane', scope);
    var activePane = get(`.${clickedTab.getAttribute('data-tab')}`, scope);

    // remove all active tab classes
    for (var i = 0; i < tabs.length; i++) {
      tabs[i].classList.remove('active');
    }

    // remove all active pane classes
    for (var i = 0; i < panes.length; i++) {
      panes[i].classList.remove('active');
    }

    // apply active classes on desired tab and pane
    clickedTab.classList.add('active');
    activePane.classList.add('active');
  }
});

//in page scrolling for documentaiton page
var btns = getAll('.js-btn');
var sections = getAll('.js-section');

function setActiveLink(event) {
  // remove all active tab classes
  for (var i = 0; i < btns.length; i++) {
    btns[i].classList.remove('selected');
  }

  event.target.classList.add('selected');
}

function smoothScrollTo(i, event) {
  var element = sections[i];
  setActiveLink(event);

  window.scrollTo({
    'behavior': 'smooth',
    'top': element.offsetTop - 20,
    'left': 0
  });
}

if (btns.length && sections.length > 0) {
  for (var i = 0; i<btns.length; i++) {
    btns[i].addEventListener('click', smoothScrollTo.bind(this,i));
  }
}

// fix menu to page-top once user starts scrolling
window.addEventListener('scroll', function () {
  var docNav = get('.doc__nav > ul');

  if( docNav) {
    if (window.pageYOffset > 63) {
      docNav.classList.add('fixed');
    } else {
      docNav.classList.remove('fixed');
    }
  }
});

// responsive navigation
var topNav = get('.menu');
var icon = get('.toggle');

window.addEventListener('load', function(){
  function showNav() {
    if (topNav.className === 'menu') {
      topNav.className += ' responsive';
      icon.className += ' open';
    } else {
      topNav.className = 'menu';
      icon.classList.remove('open');
    }
  }
  icon.addEventListener('click', showNav);
});

