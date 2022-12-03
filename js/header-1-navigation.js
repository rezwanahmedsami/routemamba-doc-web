var docnav = document.getElementById("docnav");
var homenav = document.getElementById("homenav");

docnav?.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopImmediatePropagation();

    let url = this.getAttribute("href");

    routemamba.navigate(url, {}, {
        header_load: true
    });
})

homenav?.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopImmediatePropagation();

    let url = this.getAttribute("href");

    routemamba.navigate(url, {}, {
        header_load: true
    });
})