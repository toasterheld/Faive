window.addEventListener('load', (event) => {
    var imgs = document.querySelectorAll('.user_picture');

    imgs.forEach(function(img) {
        var width = img.offsetWidth;
        img.style.height = width + 'px';
    });
});