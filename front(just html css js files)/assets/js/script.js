
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

if( isMobile.iOS() )
{
    $('body').addClass('ios');
}
if( isMobile.Android() )
{
    $('body').addClass('android');
}
if( isMobile.Windows() )
{
    $('body').addClass('windows');
}
if(isMobile.Windows() || isMobile.Android() || isMobile.iOS()){
    $('body').addClass('mobile');
}
else{
    $('body').addClass('desktop');
}

(function (window) {
    {
        var unknown = '-';

        // screen
        var screenSize = '';
        if (screen.width) {
            width = (screen.width) ? screen.width : '';
            height = (screen.height) ? screen.height : '';
            screenSize += '' + width + " x " + height;
        }

        //browser
        var nVer = navigator.appVersion;
        var nAgt = navigator.userAgent;
        var browser = navigator.appName;
        var version = '' + parseFloat(navigator.appVersion);
        var majorVersion = parseInt(navigator.appVersion, 10);
        var nameOffset, verOffset, ix;

        // Opera
        if ((verOffset = nAgt.indexOf('Opera')) != -1) {
            browser = 'Opera';
            version = nAgt.substring(verOffset + 6);
            if ((verOffset = nAgt.indexOf('Version')) != -1) {
                version = nAgt.substring(verOffset + 8);
            }
        }
        // MSIE
        else if ((verOffset = nAgt.indexOf('MSIE')) != -1) {
            browser = 'Microsoft Internet Explorer';
            version = nAgt.substring(verOffset + 5);
        }
        // Chrome
        else if ((verOffset = nAgt.indexOf('Chrome')) != -1) {
            browser = 'Chrome';
            version = nAgt.substring(verOffset + 7);
        }
        // Safari
        else if ((verOffset = nAgt.indexOf('Safari')) != -1) {
            browser = 'Safari';
            version = nAgt.substring(verOffset + 7);
            if ((verOffset = nAgt.indexOf('Version')) != -1) {
                version = nAgt.substring(verOffset + 8);
            }
        }
        // Firefox
        else if ((verOffset = nAgt.indexOf('Firefox')) != -1) {
            browser = 'Firefox';
            version = nAgt.substring(verOffset + 8);
        }
        // MSIE 11+
        else if (nAgt.indexOf('Trident/') != -1) {
            browser = 'Microsoft Internet Explorer';
            version = nAgt.substring(nAgt.indexOf('rv:') + 3);
        }
        // Other browsers
        else if ((nameOffset = nAgt.lastIndexOf(' ') + 1) < (verOffset = nAgt.lastIndexOf('/'))) {
            browser = nAgt.substring(nameOffset, verOffset);
            version = nAgt.substring(verOffset + 1);
            if (browser.toLowerCase() == browser.toUpperCase()) {
                browser = navigator.appName;
            }
        }
        // trim the version string
        if ((ix = version.indexOf(';')) != -1) version = version.substring(0, ix);
        if ((ix = version.indexOf(' ')) != -1) version = version.substring(0, ix);
        if ((ix = version.indexOf(')')) != -1) version = version.substring(0, ix);

        majorVersion = parseInt('' + version, 10);
        if (isNaN(majorVersion)) {
            version = '' + parseFloat(navigator.appVersion);
            majorVersion = parseInt(navigator.appVersion, 10);
        }

        // mobile version
        var mobile = /Mobile|mini|Fennec|Android|iP(ad|od|hone)/.test(nVer);

        // cookie
        var cookieEnabled = (navigator.cookieEnabled) ? true : false;

        if (typeof navigator.cookieEnabled == 'undefined' && !cookieEnabled) {
            document.cookie = 'testcookie';
            cookieEnabled = (document.cookie.indexOf('testcookie') != -1) ? true : false;
        }

        // system
        var os = unknown;
        var clientStrings = [
            {s:'Windows 3.11', r:/Win16/},
            {s:'Windows 95', r:/(Windows 95|Win95|Windows_95)/},
            {s:'Windows ME', r:/(Win 9x 4.90|Windows ME)/},
            {s:'Windows 98', r:/(Windows 98|Win98)/},
            {s:'Windows CE', r:/Windows CE/},
            {s:'Windows 2000', r:/(Windows NT 5.0|Windows 2000)/},
            {s:'Windows XP', r:/(Windows NT 5.1|Windows XP)/},
            {s:'Windows Server 2003', r:/Windows NT 5.2/},
            {s:'Windows Vista', r:/Windows NT 6.0/},
            {s:'Windows 7', r:/(Windows 7|Windows NT 6.1)/},
            {s:'Windows 8.1', r:/(Windows 8.1|Windows NT 6.3)/},
            {s:'Windows 8', r:/(Windows 8|Windows NT 6.2)/},
            {s:'Windows NT 4.0', r:/(Windows NT 4.0|WinNT4.0|WinNT|Windows NT)/},
            {s:'Windows ME', r:/Windows ME/},
            {s:'Android', r:/Android/},
            {s:'Open BSD', r:/OpenBSD/},
            {s:'Sun OS', r:/SunOS/},
            {s:'Linux', r:/(Linux|X11)/},
            {s:'iOS', r:/(iPhone|iPad|iPod)/},
            {s:'Mac OS X', r:/Mac OS X/},
            {s:'Mac OS', r:/(MacPPC|MacIntel|Mac_PowerPC|Macintosh)/},
            {s:'QNX', r:/QNX/},
            {s:'UNIX', r:/UNIX/},
            {s:'BeOS', r:/BeOS/},
            {s:'OS/2', r:/OS\/2/},
            {s:'Search Bot', r:/(nuhk|Googlebot|Yammybot|Openbot|Slurp|MSNBot|Ask Jeeves\/Teoma|ia_archiver)/}
        ];
        for (var id in clientStrings) {
            var cs = clientStrings[id];
            if (cs.r.test(nAgt)) {
                os = cs.s;
                break;
            }
        }

        var osVersion = unknown;

        if (/Windows/.test(os)) {
            osVersion = /Windows (.*)/.exec(os)[1];
            os = 'WindowsOS';
        }

        switch (os) {
            case 'Mac OS X':
                osVersion = /Mac OS X (10[\.\_\d]+)/.exec(nAgt)[1];
                break;

            case 'Android':
                osVersion = /Android ([\.\_\d]+)/.exec(nAgt)[1];
                break;

            case 'iOS':
                osVersion = /OS (\d+)_(\d+)_?(\d+)?/.exec(nVer);
                osVersion = osVersion[1] + '.' + osVersion[2] + '.' + (osVersion[3] | 0);
                break;
        }

        // flash (you'll need to include swfobject)
        /* script src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js" */
        var flashVersion = 'no check';
        if (typeof swfobject != 'undefined') {
            var fv = swfobject.getFlashPlayerVersion();
            if (fv.major > 0) {
                flashVersion = fv.major + '.' + fv.minor + ' r' + fv.release;
            }
            else  {
                flashVersion = unknown;
            }
        }
    }

    window.jscd = {
        screen: screenSize,
        browser: browser,
        browserVersion: version,
        mobile: mobile,
        os: os,
        osVersion: osVersion,
        cookies: cookieEnabled,
        flashVersion: flashVersion
    };
    $('body').addClass(window.jscd.os);
    $('body').addClass(window.jscd.browser);
}(this));
function isUrlValid(url) {
    return /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
}
(function ($) {
    "use strict";

    window.customscripts = $.extend({}, {
        winWidth: $(window).width(),
        preloader: $('.preloader'),

        init: function () {



            customscripts.ajaxLoader();
            customscripts.openModals();
            customscripts.scrollTo();
            customscripts.mobileMenu();
            customscripts.initSelect();
            customscripts.formSteps();
            customscripts.langSwitch();
            // customscripts.gMap();

            $(window).load(function () {
                customscripts.floatHeader();

            });
            $(window).resize(function () {


            });


        },


        preloaderToggle: function (event) {
            switch (event) {
                case 'show':
                    customscripts.preloader.addClass("active");
                    break;
                case 'hide':
                    customscripts.preloader.removeClass("active");
                    break;
            }
        },
        ajaxLoader: function () {
            var ajaxBtn = $('.js_ajax-load');

            ajaxBtn.click(function (e) {
                e.preventDefault();
                var url = $(this).data('url');
                var containerId = $(this).data('container');
                $.ajax({
                    url: url,
                    beforeSend: function () {
                        customscripts.preloaderToggle('show');
                    },
                    success: function (content) {
                        setTimeout(function () { /* remove delay on prod */
                            customscripts.preloaderToggle('hide');
                            $('#' + containerId).html(content);
                        }, 1000);
                    }
                });
            });
        },
        openModals: function () {
            $(document).on('click','.open_modal',function (e) {
               e.preventDefault();

               var pathname = window.location.pathname;
               if(pathname == '/'){
                   pathname = 'home';
               }
               console.log(pathname);
                var hashtagValue = '#'+pathname.replace(/\//g, "") + '-contactform';

                $('.modal_cont').removeClass('opened');
               var modalclass = $(this).attr('data-modalclass');
               $('.'+modalclass).addClass('opened');
                window.location = hashtagValue;

            });
            $(document).on('click','.show_map',function () {
                var lat = $(this).attr('data-latitude'),
                 lng = $(this).attr('data-longitude');
                customscripts.gMap(lat,lng);
                console.log(lat,lng);

            })
            $(document).keydown(function (eventObject) {
                if (eventObject.which == 27){
                    $('.modal_cont').removeClass('opened');
                }
            });
            $(document).on('click','.hide_modal',function (e) {
                e.preventDefault();
                $('.modal_cont').removeClass('opened');
            })

        },
        floatHeader: function () {

            if($('.header-wrap').length){
                var offsettopstickystatic = $('.header-wrap').offset().top;

                $(window).on('resize',function () {
                    offsettopstickystatic = $('.header-wrap').offset().top;
                })
                $('#catapultCookie').on('click',function () {
                    $('.mainheader').css('top','0');
                })
                $(window).on('scroll load',function(){
                    if($(window).scrollTop() > offsettopstickystatic){
                        $('.mainheader').addClass('fixed-head');
                        if($('.has-cookie-bar').length){
                            $('.mainheader').css('top','55px');
                        }
                    }
                    else{
                        $('.mainheader').removeClass('fixed-head');
                        $('.mainheader').css('top','0');
                    }
                });

            }



        },
        scrollTo: function () {
            $(document).on('click',".scroll_to",function (e) {
                var elementClick = $(this).attr("data-href");
                if($('[data-id="'+elementClick+'"]').length){
                    e.preventDefault();
                    var destination = $('[data-id="'+elementClick+'"]').offset().top;
                    if($('.header-wrap').length && !$(this).hasClass('btn-go-next')){
                        destination = $('[data-id="'+elementClick+'"]').offset().top - $('.header-wrap').outerHeight();
                    }

                    $('body,html').animate({ scrollTop: destination }, 800);

                }
            });
        },
        gMap: function (lat,lng) {
            function initialize() {
                var stylesArray = [
                    {
                        "featureType": "landscape.natural",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#e0efef"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "hue": "#1900ff"
                            },
                            {
                                "color": "#c0e8e8"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "lightness": 100
                            },
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "lightness": 700
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#7dcdcd"
                            }
                        ]
                    }
                ]

                var isDraggable = jQuery('body').hasClass('mobile') ? true : false;
                // var myLatlng = new google.maps.LatLng(lat, lat);
                var myLatlng = new google.maps.LatLng(
                    parseFloat(lat),
                    parseFloat(lng)
                );
                console.log(myLatlng);
                var mapOptions = {
                    zoom              :15,
                    center            : myLatlng,
                    panControl        : false,
                    zoomControl       : true,
                    mapTypeControl    : false,
                    scaleControl      : false,
                    streetViewControl : false,
                    overviewMapControl: false,
                    scrollwheel       : false,
                    draggable: isDraggable,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.SMALL
                    }
                };

                var map = new google.maps.Map(document.getElementById('gmap'), mapOptions);
                map.setOptions({styles: stylesArray});

                var markerImage = new google.maps.MarkerImage(
                    '/wp-content/themes/splashdev/assets/img/marker.png',
                    new google.maps.Size(34,45),
                    new google.maps.Point(0,0)
                );
                var marker = new google.maps.Marker({
                    icon: markerImage,
                    position: myLatlng,
                    map: map
                });

                google.maps.event.addDomListener(window, 'resize', function() {
                    map.setCenter(myLatlng);
                });
            }

            initialize();

            google.maps.event.addDomListener(window, 'load', initialize);
        },
        mobileMenu: function(){
            $(document).on('click', '#openMobileMenu', function(e){
                e.preventDefault();
                $('#mobileMenu').toggleClass('opened');
                $(this).toggleClass('is-active');
            });

            $(document).on('click touchstart', function (e) {
                if (!$(e.target).parents().hasClass('mobile-menu') && !$(e.target).hasClass('mobile-menu') && !$(e.target).parents().hasClass('hamburger') && !$(e.target).hasClass('hamburger')) {
                    $('#mobileMenu').removeClass('opened');
                    $('#openMobileMenu').removeClass('is-active');
                }

            });
        },
        initSelect: function(){
            jQuery(document).on('click', '.custom-select .current-value', function(){
                if($(this).hasClass('active')){
                    jQuery(document).find('.custom-select').find('.current-value').removeClass('active');
                    jQuery(this).removeClass('active');
                }
                else{
                    jQuery(document).find('.custom-select').find('.current-value').removeClass('active');
                    jQuery(this).addClass('active');
                }
            });

            jQuery(document).on('click', '.custom-select .list-values a', function(){

                var parent = jQuery(this).parents('.custom-select'),
                    value = jQuery(this).attr('data-val'),
                    th = jQuery(this),
                    trigger = parent.find('.current-value');

                if(!$(this).hasClass('current')){
                    trigger.removeClass('active').html($(this).text());
                    parent.find('input[type="hidden"]').val(value);
                    trigger.attr('data-val',value);
                    setTimeout(function(){
                        parent.find('a').removeClass('current');
                        th.addClass('current');
                    },400);
                }
                return false;
            });

            jQuery(document).on('click', function(e) {
                if (!jQuery(e.target).parents().hasClass('custom-select') && !jQuery(e.target).hasClass('custom-select')) {
                    jQuery('.custom-select .current-value').removeClass('active');
                }
            });

            function fix_zIndex(){
                if(jQuery('.custom-select').length){
                    var count = 90;
                    jQuery('.custom-select').each(function(){
                        jQuery(this).css('z-index',count);
                        count--;
                    });
                }
            }
            fix_zIndex();
        },
        formSteps: function () {
            $(document).on('change','#addmailing',function () {
                if($('#addmailing').is(':checked')){
                    $('#ifAddToMailing').val('Add to mailing');
                }
                else{
                    $('#ifAddToMailing').val("Don't add to mailing");
                }
            });
            $(document).on('click','.go_to_step2',function (e) {
                e.preventDefault();
                $('.inp-row').removeClass('error');
                var subVal = $('#leadSubject').val();
                var websiteVal = $('#leadWebsite').val();

                if(subVal == '' && !isUrlValid(websiteVal)){
                    $('#leadSubject').parents('.inp-row').addClass('error');
                    $('#leadWebsite').parents('.inp-row').addClass('error');


                }
                else if(subVal == ''){
                    $('#leadSubject').parents('.inp-row').addClass('error');

                }
                else if(!isUrlValid(websiteVal)){
                    $('#leadWebsite').parents('.inp-row').addClass('error');

                }
                else{
                    var parent = $(this).parents('.form_steps');
                    parent.find('.form_step_1').slideUp();
                    parent.find('.form_step_2').slideDown();
                    parent.find('.step-item:first-child()').addClass('checked');
                }



            })
            $(document).on('click','.go_to_step3',function (e) {
                e.preventDefault();
                var parent = $(this).parents('.form_steps');
                parent.find('.form_step_2').slideUp();
                parent.find('.form_step_3').slideDown();
                parent.find('.step-item:nth-child(2)').addClass('checked');

            })
            $(window).on('load', function () {
                if($('.form_landing').length){
                    $('#leadSubject').val('Get the report');
                }
            })
            if($('.wpcf7').length){
                var wpcf7Elm = document.querySelector( '.wpcf7' );

                $(document).on('click','.wpcf7 button[type="submit"]', function () {
                    if($('.preloader').length){
                        $('.preloader').addClass('active');
                    }
                });

                wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
                    if($('.preloader').length){
                        $('.preloader').removeClass('active');
                    }

                }, false );

                wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {

                    var pathname = window.location.pathname;
                    if(pathname == '/'){
                        pathname = 'home';
                    }
                    var hashtagValue = '#'+pathname.replace(/\//g, "") + '-contactform';


                    window.location.href = 'http://splashdev.azurewebsites.net/thank-you/'+hashtagValue;
                }, false );
            }
        },
        langSwitch:function () {
            $(document).on('click','.open_langlist',function (e) {
                e.preventDefault();
                $(this).parents('.lang_switcher').toggleClass('opened');
            })
            jQuery(document).on('click', function(e) {
                if (!jQuery(e.target).parents().hasClass('language-chooser ') && !jQuery(e.target).hasClass('language-chooser ') && !jQuery(e.target).parents().hasClass('current-lang') && !jQuery(e.target).hasClass('current-lang')) {
                    $('.lang_switcher').removeClass('opened');
                }
            });
        }

    });

    customscripts.init();

    if($('body').hasClass('desktop')){
        $(document).on('click','.contact-tel',function (e) {
            e.preventDefault();
        })
    }



})(jQuery);
jQuery(document).ready(function () {
    // ==================== WOW ANIMATION DELAY ==================== //
    wow = new WOW(
        {
            animateClass: 'animated',
            mobile: false,
            offset: 20
        }
    );
    wow.init();
});
