var slides = document.getElementsByClassName('slides');
var dots = document.getElementsByClassName('dot');
var Prev = document.querySelector('.prev');
var Next = document.querySelector('.next');
var n = 0;
var m = 0;

var i;
function disno() {
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }
}

function no_Active() {
    for (i = 0; i < dots.length; i++) {
        dots[i].classList.remove('active')
    }

}

Next.addEventListener('click', function (e) {
        e.preventDefault();
        n++;
        if (n > slides.length - 1) {
            n = 0;
        }
        disno();
        no_Active();
        slides[n].style.display = 'block';
        dots[n].classList.add('active');


    }
);

Prev.addEventListener('click', function (e) {
        e.preventDefault();
        n--;
        if (n < 0) {
            n = slides.length - 1;
        }
        disno();
        no_Active();
        slides[n].style.display = 'block';
        dots[n].classList.add('active');

    }
);

setInterval(function () {
    m++;
    if (m > slides.length - 1) {
        m = 0;
    }
        disno();
    no_Active();
    slides[m].style.display = 'block';
    dots[m].classList.add('active');
}, 3000);


