gsap.registerPlugin(ScrollTrigger);
// gsap.registerPlugin(TextPlugin);

ScrollTrigger.saveStyles(".anim-heading h2");
if(jQuery('.me-wrap').length){


// moving with the mouse
    const throttled = (delay, fn) => {
        let lastCall = 0;
        return function (...args) {
            const now = (new Date).getTime();
            if (now - lastCall < delay) {
                return;
            }
            lastCall = now;
            return fn(...args);
        }
    }

    const movableElementsWrapper = document.querySelector('.me-wrap');

    const mouseMoveHandler = (e) => {
        const y = e.movementY;
        const x = e.movementX;

        let moveX = x > 0 ? -x : x;
        let moveY = y > 0 ? -y : y;

        const movableElements =   document.querySelectorAll('.movable');

        movableElements.forEach(
            (movableElement) => {
                gsap.to(movableElement, {x: moveX, y: moveY, duration: 1})
            }
        );
    };
    const speed = 0.35;

    const mouseMoveHandler2 = (e) => {
        const movableElements =   document.querySelectorAll('.movable');

        movableElements.forEach(
            (movableElement) => {
                const  shiftValue = movableElement.getAttribute('data-value');
                const moveX = (e.clientX * shiftValue) / 250;
                const moveY = (e.clientY * shiftValue) / 250;


                gsap.to(movableElement, {x: moveX, y: moveY, duration: 1})

            }
        );
    };

    const tHandler = throttled(200, mouseMoveHandler2);
    movableElementsWrapper.onmousemove = tHandler;



}



gsap.to(".inner-page-header img", {
    delay: 0.5,
    scale: 1.2,
    ease: "power4.out",
    scrollTrigger: {
        trigger: ".anim-header-top",
        start: "top 80%",
        scrub: 1.5,
        toggleActions: "restart none none none",
    }
});



gsap.from(".anim-up", {
    delay: 1,
    opacity: 0,
    y: -50,
    ease: "back.out(1)",
    stagger: {
        amount: 1,
        opacity: 0,
    }
});

const animsilmut = gsap.utils.toArray('.anim-heading h2');
animsilmut.forEach(anim => {

    // desktop
    gsap.from(anim, {
//        scale: 0,
        y: 20,
        opacity: 0,
        duration: 0.8,
        delay: 0.2,
        start: "10% top",
        scrollTrigger: {
//                   markers: true,
            trigger: anim,
//                    scrub: 0.5
        }
    })
});



gsap.utils.toArray(".slide-up img").forEach(box => {

    var tlu = gsap.timeline({
        scrollTrigger: {
            trigger: box,
            toggleActions: "restart none none none",
            scrub: 1,
            start: "top 95%",
            end: "bottom 95%",
//            markers: true
        }
    });

    tlu.to(box, {
        duration: 1,
        y: 0,
    });

});


const animsil = gsap.utils.toArray('.slide-in-left img');
animsil.forEach(anim => {

    // desktop
    gsap.from(anim, {
//        scale: 0,
        x: -50,
//        opacity: 0,
        duration: 0.8,
        delay: 0.5,
        start: "20% top",
        scrollTrigger: {
//            markers: true,
            trigger: anim,
            scrub: 1
        }
    })
});



const anims = gsap.utils.toArray('.slide-in-right img');
anims.forEach(anim => {

    gsap.from(anim, {
//        scale: 0,
        x: 50,
//        opacity: 0,
        duration: 0.8,
        delay: 0.5,
        start: "20% top",
        scrollTrigger: {
            trigger: anim,
            scrub: 1
        }
    })
});



let boxBlog,
    boxPress,
    boxAnno;
let anim = {
    init: function() {
        anim.initEls();
        anim.animate();
    },
    initEls: function() {
        boxBlog = document.querySelectorAll('.blog-block .ultp-block-items-wrap > div');
        boxPress = document.querySelectorAll('.press-block .ultp-block-items-wrap > div');
        boxAnno = document.querySelectorAll('.anno-block .ultp-block-items-wrap > div');
    },
    animate: function() {

        let tl = gsap.timeline({
            scrollTrigger: {
                id: 'box',
                trigger: '.blog-block',
                toggleActions: 'play puase resume pause',
                start: 'top 90%',
                end: 'bottom 90%',
                scrub: 0.25,
            //    pin: true
            }
        });

        let tl2 = gsap.timeline({
            scrollTrigger: {
                id: 'box',
                trigger: '.press-block',
                start: 'top 80%',
                end: 'bottom 80%',
           //     markers: true,
                scrub: 0.25
            }
        });

        let tl3 = gsap.timeline({
            scrollTrigger: {
                id: 'box',
                trigger: '.anno-block',
                start: 'top 80%',
                end: 'bottom 80%',
                //     markers: true,
                scrub: 0.25
            }
        });

        tl.from(boxBlog, {
            opacity: 0,
            stagger: 0.5
        });

        tl2.from(boxPress, {
            opacity: 0,
            stagger: 0.5
        });

        tl3.from(boxAnno, {
            opacity: 0,
            stagger: 0.5
        });
    }
}

window.addEventListener('load', function() {
    anim.init();
});









/*
const sectionsLi = gsap.utils.toArray('.ultp-block-items-wrap > div');

sectionsLi.forEach((section, i) => {
    let isEven = i % 2 == 0;

    gsap.from(section, {
        scrollTrigger: {
            trigger: section,
            toggleActions: "restart none none none",
        },
        duration: 1,
        opacity: 0,
        x: 35,
        delay: isEven ? 0.7 : 0,
//        delay: 0.7,
        ease: "back.out(1)",
        stagger: {
            amount: 1,
            opacity: 0
        }
    });
});
*/














// scroll triger refresh
ScrollTrigger.addEventListener("refresh", function() {

});




/*



ScrollTrigger.matchMedia({

    // desktop
    "(min-width: 1023px)": function() {

// scroll triger refresh
        ScrollTrigger.addEventListener("refresh", function() {

        });


        gsap.to(".blue-zoom-box", {
            duration: 0.5,
            scale: 1.2,
            ease: Power4.easeOut,
            scrollTrigger: {
//        markers: true,
                trigger: ".blue-zoom-box",
                start: "top center",
                end: "+=60%",
                // end: "bottom top",
                scrub: 1
            },
        });



// match media end
    },

    "(max-width:1022px)": function() {


    }

});


// animated heading// zoom scale
gsap.to(".animated-heading img", {
    delay: 0.5,
    scale: 1,
    ease: "power4.out",
    scrollTrigger: {
        trigger: ".animated-heading",
        start: "top 80%",
        scrub: 1.5,
        toggleActions: "restart none none none",
    }
});


// blog tiles

gsap.from(".category-news article, .blog article", {
    scrollTrigger: {
        trigger: "main.content",
        scrub: 1,
//        markers: true,
//        start: "top bottom",
//        end: "top top",
        start: "-=400px center",
        end: "+=60%",

    },
    opacity: 0,
    y: -25,
    ease: "back.out(1)",
    stagger: {
        amount: 0.5,
        opacity: 0,
//        from: "random"
    }
});


document.addEventListener("DOMContentLoaded", function(event) {

    // wait until window is loaded - meaning all images, stylesheets, js, fonts, media assets, and links
    window.addEventListener("load", function(e) {

        gsap.to(".heading-over-text h1", {
            opacity: 1,
            y: 0,
            duration: 1,
            scale: 1.1
        });

    }, false);
});


        gsap.to(".limits-title h2", {
            duration: 3,
            text: "Test your Limits...",
            delay: 2,
            scrollTrigger: {
                trigger: ".limits-title h2",
                start: "top 80%",
                end: "top: 20%",
//        scrub: 2,
                toggleActions: "play none none none",
            }
        });
*/


/*

// cursor anim test

var $circle = jQuery('.circle'),
    $follow = jQuery('.circle-follow');

function moveCircle(e) {
    gsap.to($circle, 0.3, {
        x: e.clientX,
        y: e.clientY
    });
    gsap.to($follow, 0.1, {
        x: e.clientX,
        y: e.clientY
    });
}

function hoverFunc(e) {
    gsap.to($circle, 0.3, {
        opacity: 1,
        scale: 0.8
    });
    gsap.to($follow, 0.3, {
        scale: 3
    });
}

function unhoverFunc(e) {
    gsap.to($circle, 0.3, {
        opacity: 1,
        scale: 1
    });
    gsap.to($follow, 0.3, {
        scale: 1
    });
}

jQuery(window).on('mousemove', moveCircle);

jQuery("a, button, input[type=submit]").hover(hoverFunc, unhoverFunc);
*/
