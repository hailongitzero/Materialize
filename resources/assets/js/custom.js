/**
 * Created by HaiLong on 5/30/2016.
 */
$(document).ready(function () {
    var navHeight = $('#nav-wrapper').height()+'px';

    //slide setting
    $('#homeSlider').slider({
        full_width: true,
        height: 400,
        indicators: true
    });

    //open left sidenav menu
    $('#btnLeftSideMenu').sideNav({
            menuWidth: 240, // Default is 240
            edge: 'left', // Choose the horizontal origin
            closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            easing: 'easeInQuad',
            padding: true
        }
    );

    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    //$('.collapsible').collapsible();

    //drop down list setting
    $('#drdDrd').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: true, // Displays dropdown below the button
            alignment: 'left' // Displays dropdown with edge aligned to the left of button
        }
    );


    $('#drdDrd2').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: true, // Displays dropdown below the button
            alignment: 'left' // Displays dropdown with edge aligned to the left of button
        }
    );

    //dropdown hotel menu
    $('#drdHotel').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: false, // Does not change width of dropdown to that of the activator
            hover: false, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: true, // Displays dropdown below the button
            alignment: 'left' // Displays dropdown with edge aligned to the left of button
        }
    );

    //dropdown tour menu
    $('#drdTour').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: false, // Does not change width of dropdown to that of the activator
            hover: false, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: true, // Displays dropdown below the button
            alignment: 'left' // Displays dropdown with edge aligned to the left of button
        }
    );

    //language option
    $('#drdLang').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: false, // Does not change width of dropdown to that of the activator
            hover: false, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: true, // Displays dropdown below the button
            alignment: 'left' // Displays dropdown with edge aligned to the left of button
        }
    );

    // parallax and carousel option
    $('#parallax-container').parallax();
    // $('#crs-head').carousel();
    $('#crs-head').carousel({
        
    });

    $('.scrollspy').scrollSpy();

    $(window).load(function () {
        loadSpyMenu();
    })
    $(window).resize(function () {
        loadSpyMenu();
    })
    function loadSpyMenu() {
        //setTimeOut();
        //setting pushpin left menu
        var tocWrapperHeight = 0; // Max height of ads.
        var tocHeight = $('.toc-wrapper').length ? $('.toc-wrapper').height() : 0;
        var socialHeight = 45; // Height of unloaded social media in footer.
        var footerOffset = $('body > footer').first().length ? $('body > footer').first().offset().top : 0;
        var bottomOffset = footerOffset - tocHeight - socialHeight - tocWrapperHeight;

        if ($('nav').length && $('#homeSlider').length) {
            $('#leftScrollSpy').pushpin({
                top: $('nav').height() + $('#homeSlider').height(),
                bottom:  bottomOffset,
                offset: 45
            });
        }
        else if ($('#homeSlider').length) {
            $('#leftScrollSpy').pushpin({
                top: $('#homeSlider').height(),
                bottom: bottomOffset,
                offset: 45
            });
        }
        else {
            $('#leftScrollSpy').pushpin({
                top: 0,
                bottom: bottomOffset,
                offset: 45
            });
        }
    }

    $(window).scroll(function () {
        onScroll();
    })

    function onScroll() {
        var jScroll = $(window);
        if(jScroll.scrollTop() > 100){
            $('#headerInfo').addClass("hidden");
            $('#nav-mobile').addClass("side-nav-none-info");
        }else {
            $('#headerInfo').removeClass("hidden");
            $('#nav-mobile').removeClass("side-nav-none-info");
        }
    }

    //change language icon
    $('#vi-vn').click(function () {
        $(this).onClickEvent({
            target: "drdLang"
        });
    })
    $('#en-us').click(function () {
        $(this).onClickEvent({
            target: "drdLang"
        });
    })
});

//function change language icon
(
    function ($) {
        $.fn.onClickEvent = function (options) {
            var defaults = {
                target: "none"
            };

            options = $.extend(defaults, options);
            return this.each(function () {
                var $this  = $(this);
                var $src_id = $this.attr("id");
                var $id_target = options.target != "none" ? options.target : "none";
                var $target_class = $('#' + $id_target).attr("class").split(' ')[0];

                if($src_id != $target_class){
                    $("#"+$id_target).removeClass($target_class);
                    $("#"+$id_target).addClass($src_id);
                }
            })
        }
    }
( jQuery ));