<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission (Flight Booking).',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'info@snapshottoursandsafaris.com',
    'to' => 'info@snapshottoursandsafaris.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'phone' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Phone Number',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Phone Number\' is required.'
    )
    ),
    'email' => array(
    'order' => 3,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'destination' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Destination',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Destination\' is required.'
    )
    ),
    'date' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Date of Travel',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Date of Travel\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>