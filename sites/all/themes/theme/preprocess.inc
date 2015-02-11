<?php
/**
 * @file
 * preprocess.inc
 *
 * Contains various implementations of hook_preprocess().
 */

/**
 * Implements hook_preprocess_field().
 */
function acquia_training_preprocess_field(&$vars) {
  $name = $vars['element']['#field_name'];

  switch ($name) {
    // Event confirmed field.
    case 'field_event_status':
      // Change the field depending on the selected option key.
      $status = $vars['element']['#items'][0]['value'];
      $button_text = $vars['items'][0]['#markup'];
      switch ($status) {
        case 'cancelled':
          $title = t('Unfortunately, the event had to be cancelled. We apologize for any inconvenience this may have caused you.');
          $button_class = 'btn btn-danger';
          $icon_class = 'fa fa-exclamation-circle';
          break;
        case 'confirmed':
          $title = t('The event has been confirmed and will proceed at the specified date and time.');
          $button_class = 'btn btn-success';
          $icon_class = 'fa fa-check-circle';
          break;
        case 'draft':
          $title = t('This event is not published.');
          $button_class = 'btn btn-danger';
          $icon_class = 'fa fa-exclamation-circle';
          break;
        case 'provisional':
          $title = t('This event has not been confirmed yet. Sign up now, one or two more registrations will assure this class confirms.');
          $button_class = 'btn btn-warning';
          $icon_class = 'fa fa-info-circle';
          $more_link = '<div class="small text-center">' . l(t('Why "!button_text"?', array('!button_text' => $button_text)), 'why-event-labeled-tentative') . '</div>';
          break;
      }

      $vars['items'][0]['#markup'] = '<button type="button" data-toggle="tooltip" class="' . $button_class . '" title="' . $title . '"><i class="' . $icon_class . '"></i>&nbsp;&nbsp;' . $button_text . ' ' . t('event') . '</button>';
      if (!empty($more_link)) {
        $vars['items'][0]['#markup'] .= $more_link;
      }
      break;

  }
}


/**
 * Implements hook_preprocess_views_view_fields().
 */
function acquia_training_preprocess_views_view_fields(&$vars) {
  $view = $vars['view'];

  switch ($view->name) {
    case 'event_details':
      // Replace Delivery text with FA icons.
      $delivery_key = $vars['row']->field_field_delivery[0]['raw']['value'];
      $delivery_output = $vars['row']->field_field_delivery[0]['rendered']['#markup'];
      if ($delivery_key == 0) {
        $icon = 'fa fa-users fa-2x';
      }
      else {
        $icon = 'fa fa-video-camera fa-2x';
      }

      $delivery_replacement = '<span class="event-delivery"><i class="' . $icon . '" title="' . $delivery_output . '"></i>';
      if (empty($vars['fields']['field_course_language'])) {
        $vars['fields']['field_course_language']->content == t('English');
      }
      $vars['fields']['field_course_language']->content = str_replace('<span class="event-delivery">' . $delivery_output, $delivery_replacement, $vars['fields']['field_course_language']->content);

      // Replace Provided text with FA icons.
      $provided_options = $vars['view']->field['field_provided']->field_info['settings']['allowed_values'];
      $provided_icons = array(
        'lunchmaybe' => 'fa fa-cutlery fa-2x fa-rotate-90',
        'lunch' => 'fa fa-cutlery fa-2x',
        'manual' => 'fa fa-book fa-2x',
        'computers' => 'fa fa-laptop fa-2x',
        'byol' => 'fa fa-briefcase fa-2x',
        'computersmaybe' => 'fa fa-laptop fa-2x fa-rotate-90',
      );

      // Get the provided options for this node.
      $provided_selections = array();
      foreach ($vars['row']->field_field_provided AS $delta => $provided) {
        $provided_selections[] = $provided['raw']['value'];
      }

      // Generate the HTML code for each icon. Uses bootstrap tooltips as well.
      $icons = array();
      foreach ($provided_selections AS $selection) {
        $icon = $provided_icons[$selection];
        $title = $provided_options[$selection];
        $icons[] = '<i data-toggle="tooltip" class="' . $icon . '" title="' . $title . '"></i>';
      }

      // Rewrite the field output completely.
      $vars['fields']['field_provided']->content = theme('item_list', array('items' => $icons, 'attributes' => array('class' => 'list-inline')));

      break;
  }
}
