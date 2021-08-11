/* jshint esversion:6 */
jQuery(document).ready(function ($) {
    let image_to_show = '';
    let variations = JSON.parse($('.variations_form').attr('data-product_variations'));

    if (variations) {

        let first_attr = Object.keys(variations[0].attributes)[0];

        $('select[data-attribute_name="' + first_attr + '"]').change(function () {

            let found = false;
            let choice = $(this).val();

            for (const i in variations) {

                if (found) {
                    continue;
                }

                if (variations.hasOwnProperty(i)) {
                    if (choice === variations[i].attributes[Object.keys(variations[0].attributes)[0]]) {
                        image_to_show = variations[i].image.url;
                        found = true;
                    }
                }
            }

            if (image_to_show.length) {

                $('.zoomImg').attr('src', image_to_show).removeAttr('srcset');
                $('.wp-post-image').attr('src', image_to_show).removeAttr('srcset');
                $('.wp-post-image').attr('data-src', image_to_show).removeAttr('srcset');
                $('.wp-post-image').attr('data-large_image', image_to_show).removeAttr('srcset');
            }
        });
    }
});
