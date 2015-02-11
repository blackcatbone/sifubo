/**
 * @file
 * A custom JavaScript file for the acquia university theme.
 */

(function ($) {
    // Make the event details block sticky when scrolling down.
    Drupal.behaviors.responsiveViewImages = {
        attach: function(context, settings) {
            // Calculate the heights of window and the target block.
            //var blockHeight = $('#block-views-event-details-block').height();
            //var windowHeight = $(window).height() - 40; // Account for footer height.

            // Only make it sticky if the block height is less than the window height to avoid cutting off block content.
            //if (windowHeight > blockHeight) {
              //  $('#block-views-event-details-block').sticky({topSpacing:15});
            //}

            // Add tooltip to our icons so that the title text pops up fast and pretty.
            //$('#block-views-event-details-block i.fa').tooltip();
            $('.view-responsive').find("img").addClass("img-responsive");
            $('.view-circle').find("img").addClass("img-circle");
            $('.field-name-field-bio-picture').find("img").addClass("img-responsive img-circle");
            $('.field-name-field-banner-link').find("a").addClass("btn btn-primary btn-lg");
            $('.field-name-field-banner-image').find("img").addClass("img-responsive");
            $('.views-field-field-banner-image').find("img").addClass("img-responsive");
            $('.views-field-field-banner-link').find("a").addClass("btn btn-primary btn-lg");
        }
    };

})(jQuery);




