//live
// routemamba.registerServerHost('https://routemamba.com/');
// local
routemamba.registerServerHost('http://localhost:3000/');

routemamba.registerMetaUrl("./components/meta.php");


routemamba.register_http_routes([
    {
        method: "GET",
        meta_loader: true,
        content_url: "components/index.php",
        container: "#root",
        data: {},
        preloader: '',
        error_content: '',
        http_url_change: false,
        http_url: "/"
     },
     {
        method: "GET",
        meta_loader: true,
        content_url: "components/index.php",
        container: "#root",
        data: {},
        preloader: '',
        error_content: '',
        http_url_change: false,
        http_url: "index.php"
     },
     {
        method: "GET",
        meta_loader: true,
        content_url: "components/doc.php",
        container: "#root",
        data: {},
        preloader: '',
        error_content: '',
        http_url_change: false,
        http_url: "doc.php"
     },
]);

// set  pages headers
routemamba.register_routes_headers([
    {
       content_url: "components/header-footer/header.php",
       container: "#header_load",
       preloader: '',
       error_content: '',
       http_url: ["/","index.php"]
    },
    {
        content_url: "components/header-footer/header-2nd.php",
        container: "#header_load",
        preloader: '',
        error_content: '',
        http_url: ["doc.php"]
     },
]);

routemamba.register_routes_footers([
    {
       content_url: "components/header-footer/footer.php",
       container: "#footer_load",
       preloader: '',
       error_content: '',
       http_url: ["/","index.php", "doc.php"]
    },
]);

routemamba.render();