<?php

include('email_attachments.php');

// REQUIRED: The address we indend to send this email to.
$to = 'someone@example.net';

// REQUIRED: Who the e-mail was from.
$from = 'me@example.net';

// REQUIRED: The subject of the e-mail.
$subject = 'Hello there';

// REQUIRED: The body of the e-mail.
$message = 'Heya, here are those files I was talking about.';

// OPTIONAL: The files we wish to attach to send with the e-mail as a list of
// file names, preferably including full paths.
$attachments = array(
	'/some/directory/file-1.html',
	'/some/directory/file-2.html'
);

// OPTIONAL: Any additional headers we may wish to include in the e-mail as
// key/value pairs.
$headers = array(
	'Reply-To' => 'John Smith <jsmith@example.net>'
);

// OPTIONAL: Additional parameters, as referenced at http://www.php.net/mail
$additional_parameters = '';

// Send the e-mail.
$email_success = email_attachments(
	$to,
	$from,
	$subject,
	$message,
	$attachments,
	$headers,
	$additional_parameters
);

if($email_success) {
	print 'E-mail successfully sent.';
} else {
	print 'There was a problem while attempting to send the e-mail.';
}
