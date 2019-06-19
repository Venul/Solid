jQuery(document).ready(function() {
    jQuery('.ui.sidebar').sidebar('attach events', '.toc.item');

    new WOW({offset: 150}).init();

    jQuery('select[name="category-selector"], select[name="category-top-selector"]').on('change', function (e) {
        var optionSelected = jQuery("option:selected", this);
        window.location.href = optionSelected.val();
    });
});
