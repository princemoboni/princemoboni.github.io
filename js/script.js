$(function () {
    $('.box').hover(
        function () {
            var overlay = $(this).find('.box-overlay');
            overlay.removeClass(overlay.data('return')).addClass(overlay.data('hover'));
        },
        function () {
            var overlay = $(this).find('.box-overlay');
            overlay.removeClass(overlay.data('hover')).addClass(overlay.data('return'));

        }
    );
});/**
 * Created by code4ct on 2017/06/09.
 */

