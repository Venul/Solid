$(".menu-popup").click(function() {
    $('.toggled_block').toggle();
});

$(document).on('click', function(e) {
    if (!$(e.target).closest(".parent_block").length) {
        $('.toggled_block').hide();
    }
    e.stopPropagation();
});