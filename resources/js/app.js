require('./bootstrap');

var matches = document.querySelectorAll("[data-src]");
console.log(matches);

const images = document.querySelectorAll('[data-src]');


console.log(faders);

function preloadImage(img) {
    const src = img.getAttribute("data-src");
    if(!src) {
        return;
    }
    img.src = src;
}

const imgOptions = {
    threshold: 0,
    rootMargin: "0px 0px 300px 0px"
};

const imgObserver = new IntersectionObserver((entries, imgObserver) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        } else {
            preloadImage(entry.target);
            imgObserver.unobserve(entry.target);
        }
    })
}, imgOptions);

images.forEach(image => {
    imgObserver.observe(image);
})

const appearOptions = {};

const appearOnScroll = new IntersectionObserver (function(entries, appearOnScroll){
    entries.forEach(entry => {
        if (!entry.isIntersecting)
        {
            return;
        } else {
            entry.target.classList.add('fade-in-appear');
            apearOnScroll.unobserve(entry.target);
        }
    })
}, appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader);
})