document.addEventListener("DOMContentLoaded", function() {
    let btn5 = document.querySelector('.btn5')
    function magic() {
        if (window.pageYOffset > 20) {
            btn5.style.opacity = '1'
        } else { btn5.style.opacity = '0' }
    }
    btn5.onclick = function () {
        window.scrollTo({
            top:0,
            left: 0,
            behavior: "smooth"
        });
    }

    window.onscroll = magic
});



