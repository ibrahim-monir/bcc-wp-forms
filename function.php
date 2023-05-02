add_filter( 'wpforms_email_headers', function ( $headers, $emails ) {
	// APPLY THE BCC TO THIS FORM ID ONLY.
	// CHANGE THE ID TO THE FORM YOU NEED. OR REMOVE THE WHOLE IF BLOCK IF NEEDED FOR ALL FORMS.
	if ( 384 !== $emails->form_data['id'] ) {
		return $headers;
	}

	// CHANGE THIS EMAIL ADDRESS TO YOURS:
	$bcc_email = 'test@example.com';

	$headers .= "Bcc: $bcc_email\r\n";

	return $headers;
}, 10, 2 );
