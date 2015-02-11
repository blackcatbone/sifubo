/**
 * @file
 * A custom JavaScript file for the training theme.
 */

(function ($) {
  // Make the event details block sticky when scrolling down.
  Drupal.behaviors.trainingStickyEventDetails = {
    attach: function(context, settings) {
      // Calculate the heights of window and the target block.
      var blockHeight = $('#block-views-event-details-block').height();
      var windowHeight = $(window).height() - 40; // Account for footer height.

      // Only make it sticky if the block height is less than the window height to avoid cutting off block content.
      if (windowHeight > blockHeight) {
        $('#block-views-event-details-block').sticky({topSpacing:15});
      }

      // Add tooltip to our icons so that the title text pops up fast and pretty.
      $('#block-views-event-details-block i.fa').tooltip();
      $('.field-name-field-event-status button').tooltip();
    }
  };

})(jQuery);




