$(document).ready(function () {

    $(function () {
        var Accordion = function (el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;

            var links = this.el.find('.article-title');
            links.on('click', {
                el: this.el,
                multiple: this.multiple
            }, this.dropdown)
        }

        Accordion.prototype.dropdown = function (e) {
            var $el = e.data.el;
            $this = $(this),
                $next = $this.next();

            $next.slideToggle();
            $this.parent().toggleClass('open');

            if (!e.data.multiple) {
                $el.find('.accordion-content').not($next).slideUp().parent().removeClass('open');
            }
            ;
        }
        var accordion = new Accordion($('.accordion-container'), false);
    });

    $(document).on('click', '.screen-button', function () {
        var button = $(this);
        var screen_id = button.data('content');
        $('.screen-button.active').removeClass('active');
        button.addClass('active');
        $('.screen.active').removeClass('active');
        $('#' + screen_id).addClass('active')
    })

    $('.carousel').slick();

    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
});

