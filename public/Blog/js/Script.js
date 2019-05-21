var slide = document.getElementsByClassName('slide');
var image1 = document.querySelector('.img1');
var image2 = document.querySelector('.img2');
var image3 = document.querySelector('.img3');
var image4 = document.querySelector('.img4');

var n = 0;
var m = 0;
var i;

function displaynone() {

    for (i = 0; i < slide.length; i++) {
        slide[i].style.display = 'none';
    }

}

function noActive() {

    image1.classList.remove('active');
    image2.classList.remove('active');
    image3.classList.remove('active');
    image4.classList.remove('active');

}


image1.addEventListener('click', function (e) {
    e.preventDefault();

    displaynone();
    noActive();
    slide[0].style.display = 'block';
    image1.classList.add('active');
});

image2.addEventListener('click', function (e) {
    e.preventDefault();
    m++;
    displaynone();
    noActive();
    slide[1].style.display = 'block';
    image2.classList.add('active');
});

image3.addEventListener('click', function (e) {
    e.preventDefault();
    m++;
    displaynone();
    noActive();
    slide[2].style.display = 'block';
    image3.classList.add('active');
});

image4.addEventListener('click', function (e) {
    e.preventDefault();
    m++;
    displaynone();
    noActive();
    slide[3].style.display = 'block';
    image4.classList.add('active');
});
setInterval(function () {

    n++;
    if (n > slide.length - 1) {
        n = 0;
    }
    displaynone();
    noActive();
    slide[n].style.display = 'block';
    if (n == 0) {
        image1.classList.add('active');
    }
    if (n == 1) {
        image2.classList.add('active')
    }
    if (n == 2) {
        image3.classList.add('active')
    }
    if (n == 3) {
        image4.classList.add('active')
    }
}, 3000);


