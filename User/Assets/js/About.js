window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky-header", window.scrollY > 100);
});
