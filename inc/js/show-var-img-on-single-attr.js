/* jshint esversion:6 */
jQuery(function ($) {

    $(window).bind('load', function () {

        let base_image = $('.zoomImg')[0].src;
        let variations = JSON.parse($('.variations_form').attr('data-product_variations'));

        if (variations) {

            let first_attr = Object.keys(variations[0].attributes)[0];

            $('select[data-attribute_name="' + first_attr + '"]').change(function () {

                let found = false;
                let value_of_choice = $(this).val();

                let image_to_show = '';
                let main_base_image = '';
                $('.zoomImg').removeAttr('src');
                $('.wp-post-image').removeAttr('src');
                $('.wp-post-image').removeAttr('srcset');
                $('.wp-post-image').removeAttr('data-src');
                $('.wp-post-image').removeAttr('data-large_image');

                for (const i in variations) {

                    if (found) {
                        continue;
                    }

                    if (value_of_choice) {

                        if (variations.hasOwnProperty(i)) {
                            if (value_of_choice === variations[i].attributes[Object.keys(variations[0].attributes)[0]]) {
                                image_to_show = variations[i].image.url;
                                found = true;
                                console.log('image_to_show: ' + image_to_show);
                            }
                        }
                    } else {

                        main_base_image = base_image;
                        found = true;
                        console.log('main_base_image_src: ' + main_base_image);
                    }
                }

                if (image_to_show.length) {

                    $('.zoomImg').attr('src', image_to_show).removeAttr('srcset');
                    $('.wp-post-image').attr('src', image_to_show).removeAttr('srcset');
                    $('.wp-post-image').attr('data-src', image_to_show).removeAttr('srcset');
                    $('.wp-post-image').attr('data-large_image', image_to_show).removeAttr('srcset');
                }

                if (main_base_image.length) {

                    $('.zoomImg').attr('src', main_base_image).removeAttr('srcset');
                    $('.wp-post-image').attr('src', main_base_image).removeAttr('srcset');
                    $('.wp-post-image').attr('data-src', main_base_image).removeAttr('srcset');
                    $('.wp-post-image').attr('data-large_image', main_base_image).removeAttr('srcset');
                }

            });
        }
    });
});
