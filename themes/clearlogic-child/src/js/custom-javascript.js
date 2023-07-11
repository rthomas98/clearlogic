// Add your custom JS here.
jQuery(function() {

    var siteSticky = function() {
        jQuery(".js-sticky-header").sticky({topSpacing:0});
    };
    siteSticky();

    var siteMenuClone = function() {

        jQuery('.js-clone-nav').each(function() {
            var $this = jQuery(this);
            $this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
        });


        setTimeout(function() {

            var counter = 0;
            jQuery('.site-mobile-menu .has-children').each(function(){
                var $this = jQuery(this);

                $this.prepend('<span class="arrow-collapse collapsed">');

                $this.find('.arrow-collapse').attr({
                    'data-toggle' : 'collapse',
                    'data-target' : '#collapseItem' + counter,
                });

                $this.find('> ul').attr({
                    'class' : 'collapse',
                    'id' : 'collapseItem' + counter,
                });

                counter++

            });

        }, 1000);

        jQuery('body').on('click', '.arrow-collapse', function(e) {
            var $this = jQuery(this);
            if ( $this.closest('li').find('.collapse').hasClass('show') ) {
                $this.removeClass('active');
            } else {
                $this.addClass('active');
            }
            e.preventDefault();

        });

        jQuery(window).resize(function() {
            var $this = jQuery(this),
                w = $this.width();

            if ( w > 768 ) {
                if ( jQuery('body').hasClass('offcanvas-menu') ) {
                    jQuery('body').removeClass('offcanvas-menu');
                }
            }
        })

        jQuery('body').on('click', '.js-menu-toggle', function(e) {
            var $this = jQuery(this);
            e.preventDefault();

            if ( jQuery('body').hasClass('offcanvas-menu') ) {
                jQuery('body').removeClass('offcanvas-menu');
                $this.removeClass('active');
            } else {
                jQuery('body').addClass('offcanvas-menu');
                $this.addClass('active');
            }
        })

        // click outside offcanvas
        jQuery(document).mouseup(function(e) {
            var container = jQuery(".site-mobile-menu");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ( jQuery('body').hasClass('offcanvas-menu') ) {
                    jQuery('body').removeClass('offcanvas-menu');
                }
            }
        });
    };
    siteMenuClone();

});
