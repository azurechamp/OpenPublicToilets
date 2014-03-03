<?php
// $Id: adsense_injector.admin.inc,v 1.1.2.3.2.4 2009/01/02 03:00:26 hswong3i Exp $

/**
 * @file
 * Administrative page callbacks for the adsense_injector module.
 *
 * @ingroup adsense_injector
 */

/**
 * Implementation of hook_settings().
 */
function adsense_injector_admin_settings() {
  // 'body view' insertion (i.e. show with node complete view).
  $form['body_view'] = array(
    '#type' => 'fieldset',
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#title' => t('Node body ad insertion'),
    '#description' => t('Requires adsense.module'),
  );
  $form['body_view']['adsense_injector_body_view'] = array(
    '#type' => 'checkbox',
    '#title' => t('Insert inline ad in node body on page views'),
    '#default_value' => variable_get('adsense_injector_body_view', TRUE),
    '#description' => t('Description'),
    '#required' => FALSE,
  );
  $form['body_view']['adsense_injector_body_view_minwords'] = array(
    '#type' => 'textfield',
    '#title' => t('Minimum node body word count'),
    '#default_value' => variable_get('adsense_injector_body_view_minwords', 75),
    '#description' => t('The minimum node body word count threshold - only inject if node body has at least this many words.'),
  );
  $form['body_view']['adsense_injector_body_view_template'] = array(
    '#type' => 'textarea',
    '#title' => t('Node body ad insertion template'),
    '#rows' => 5,
    '#cols' => 40,
    '#default_value' => variable_get('adsense_injector_body_view_template', '<div style="float: right; margin: 0; padding: 0 1em .25em 0;">[adsense:250x250:0123456789]</div>%body<br class="clear"/>[adsense:728x90:0123456789]'),
    '#description' => t('Ad insertion template. Substitution variables: %body = full node body text. Insert adsense module filter tags. See the <a href="/admin/settings/adsense">adsense.module settings page</a> for a list of supported formats and help with filter tags.'),
    '#required' => TRUE,
  );

  // 'list view' insertion (frontpage, taxonomy, etc).
  $form['list_view'] = array(
    '#type' => 'fieldset',
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#title' => t('Node list ad insertion'),
    '#description' => t('Ad insertion in node lists or other non-page view, like front page, taxonomy views.'),
  );
  $form['list_view']['adsense_injector_list_view'] = array(
    '#type' => 'checkbox',
    '#title' => t('Append an ad after teaser on frontpage and taxonomy lists'),
    '#default_value' => variable_get('adsense_injector_list_view', FALSE),
    '#description' => t('Note: this does not currently support Views module based lists.'),
    '#required' => FALSE,
  );
  $form['list_view']['adsense_injector_list_view_template'] = array(
    '#type' => 'textarea',
    '#title' => t('List ad insertion template'),
    '#rows' => 3,
    '#cols' => 40,
    '#default_value' => variable_get('adsense_injector_list_view_template', '%teaser<br class="clear"/>[adsense:728x90:0123456789]'),
    '#description' => t('Template to use when inserting adsense ad. "%teaser" will be replaced with the node teaser. Insert adsense filter tags. See the <a href="/admin/settings/adsense">adsense.module settings page</a> for a list of supported formats and help with filter tags.'),
    '#required' => TRUE,
  );

  // What kinds of nodes do we want to insert on...?
  $form['content_types'] = array(
    '#type' => 'fieldset',
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#title' => t('Content types'),
  );
  $form['content_types']['adsense_injector_nodes'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Content types'),
    '#default_value' => variable_get('adsense_injector_nodes', array()),
    '#options' => array_map('check_plain', node_get_types('names')),
    '#description' => t('Select content types to display inline ads.'),
  );

  return system_settings_form($form);
}
