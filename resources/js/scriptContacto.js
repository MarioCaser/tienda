window.addEventListener('scroll', function() {
    var menu = document.getElementById('header');
  
    if (window.pageYOffset >= 40) {
        menu.style.top = '0';
        menu.style.position = 'fixed';
        document.getElementById("imagen").style.marginTop = document.getElementById("header").offsetHeight + "px";
    } else {
        menu.style.top = 40-window.pageYOffset + 'px';
        menu.style.position = '';
        document.getElementById("imagen").style.marginTop = "0px";
    }
});