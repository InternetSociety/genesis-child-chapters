jQuery(window).load(function() {


    var waitForEl = function(selector, callback) {
        if (jQuery(selector).length) {
            callback();
        } else {
            setTimeout(function() {
                waitForEl(selector, callback);
            }, 100);
        }
    };

    waitForEl(('.menu-toggle'), function() {




/*

        document.querySelector('.menu-toggle').addEventListener('click', () => {
            //    console.log('clicked');
            if(document.querySelector('.slid-in')) {
                document.querySelector('.nav-primary.genesis-responsive-menu').classList.remove('slid-in');
            } else {
                document.querySelector('.nav-primary.genesis-responsive-menu').classList.add('slid-in');
            }
        });

        document.querySelector('.menu-toggle').addEventListener('click', function(e) {
            setTimeout(() => {
                document.querySelectorAll('.sub-menu-toggle').forEach((toggle) => {
                    toggle.addEventListener('click', function(e2){
                        if(!document.querySelector('.hidden-menu-item')) {
                            document.querySelectorAll('#menu-header-menu > .menu-item').forEach(function(menuItem) {
                                if(menuItem.querySelector('button') != toggle) {
                                    menuItem.classList.add('hidden-menu-item');
                                }
                            })
                        } else {
                            document.querySelectorAll('.hidden-menu-item').forEach(function(item) {
                                item.classList.remove('hidden-menu-item');
                            })
                        }
                    })
                })
            },500)
        });


*/



    });




    var waitForEl2 = function(selector, callback) {
        if (jQuery(selector).length) {
            callback();
        } else {
            setTimeout(function() {
                waitForEl2(selector, callback);
            }, 200);
        }
    };

    waitForEl2(('.sub-menu-toggle'), function() {
//        jQuery('.sub-menu-toggle:nth-of-type(2)').remove();

        jQuery('.outer-menu .sub-menu-toggle').click(function(){
            jQuery('.outer-menu .sub-menu').toggleClass('open');
            jQuery(".outer-menu .sub-menu").removeAttr("style");
        });
/*
        jQuery('#menu-header-menu .sub-menu-toggle').on("click", function(){
            jQuery('.sub-menu-toggle + .sub-menu-toggle').removeClass('activated');
            jQuery(".outer-menu .sub-menu").removeAttr("style");
        });
*/
        /*
        jQuery('.outer-menu .menu-item-has-children, .outer-menu .menu-item-has-children > a, .outer-menu .menu-item-has-children .sub-menu-toggle').on('mouseover', function() {
            jQuery(".outer-menu .sub-menu").removeAttr("style");
        });

        jQuery( ".mega-tc .sub-menu" ).wrapInner( "<div class='art-menu-cols-flex'></div>");
        jQuery( ".icon-mega .sub-menu" ).wrapInner( "<div class='art-menu-icons-flex'></div>");
        jQuery( ".icon-mega-gs .sub-menu" ).wrapInner( "<div class='art-menu-icons-flex-gs'></div>");
*/
//        jQuery('.sub-menu-toggle + .sub-menu-toggle').remove();
//        jQuery('.over-sub + .sub-menu-toggle').remove();

//        jQuery('#menu-header-over-menu2 .over-menu-li .over-sub').remove();
//        jQuery('#menu-header-over-menu2 .over-menu-li .sub-menu-toggle + .sub-menu-toggle').remove();

    });

/*
    if(document.body.contains(document.querySelector('.header-menu-bh'))){
        alert('Element exists!');
    } else{
        alert('Element does not exist!');
    }
*/

    //        jQuery('.over-sub + .sub-menu-toggle').remove();


});


jQuery( document ).ready(function() {
//    jQuery('<button class="sub-menu-toggle over-sub dashicons-before dashicons-arrow-down-alt2"><span class="screen-reader-text">Submenu</span></button>').insertAfter( '.over-menu-li > a' );


    jQuery(".checkbox-toggle").on("click", function(){
        jQuery(".hamburger2").toggleClass("activated");
        jQuery(".custom-logo-link").toggleClass("white-logo");
    });
//    jQuery('.sub-menu-toggle:nth-of-type(2)').remove();
//    jQuery('.sub-menu-toggle + .sub-menu-toggle').remove();

//    jQuery("#menu-header-over-menu").clone().prependTo("#genesis-nav-primary .wrap");
//    jQuery('#genesis-nav-primary #menu-header-over-menu').attr("id","menu-header-over-menu2");
//    jQuery('#menu-header-over-menu2 .over-menu-li .over-sub').remove();
//    jQuery("#menu-header-over-menu").removeClass("sf-js-enabled");
//    jQuery("#menu-header-over-menu").addClass("sf-js-disabled");
//    jQuery( "#genesis-nav-primary" ).append( "<div class=splash></div>" );

});
