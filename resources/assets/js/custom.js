/**
 * Created by HaiLong on 5/30/2016.
 */
$(document).ready(function () {


    //slide setting
    $('#homeSlider').slider({
        full_width: true,
        height: 400,
        indicators: true
    });

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

    // parallax and carousel option
    $('#parallax-container').parallax();
    // $('#crs-head').carousel();
    $('#crs-head').carousel({
        
    });

    $('.scrollspy').scrollSpy();

    $(window).load(function () {
        loadSpyMeny();
    })
    $(window).resize(function () {
        loadSpyMeny();
    })
    function loadSpyMeny() {
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
});