<?php

/* Read the birthdays from the dedicated file */
$bdays = file_get_contents('/var/www/html/birthdays.php');

if ( $bdays ) {

	/* explode the file content into an array */
	$bdays_array = explode( "\n", $bdays );

	foreach ( $bdays_array as $bday_row ) {

		/* Explode each line of the file to get the webhook and the birthday */
		$bday_array = explode( " ", $bday_row );
            
		if ( ! empty( $bday_array ) ) {
			
			/* current date before 2 weeks */
			$date_before_2_week = date( "d-m", strtotime( '+2 week' ) );
			
			/* current date before 1 week */
			$date_before_1_week = date( "d-m", strtotime( '+1 week' ) );
			
			/* formated birthday */
			$birthday_date = date( "d-m", strtotime( $bday_array[1] ) );
				
			if( ( $date_before_1_week == $birthday_date ) || ( $date_before_2_week == $birthday_date ) ) {
					
				//Initiate cURL.
				$ch = curl_init( $bday_array[0] );

				//The JSON data.
				$payload = array(
				   'text' => 'Buy me a gift. Pretty please'
				);

				//Encode the array into JSON.
				$jsonDataEncoded = json_encode( $payload );

				//Tell cURL that we want to send a POST request.
				curl_setopt( $ch, CURLOPT_POST, 1 );

				//Attach our encoded JSON string to the POST fields.
				curl_setopt( $ch, CURLOPT_POSTFIELDS, $jsonDataEncoded );

				//Set the content type to application/json
				curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) ); 

				//Execute the request
				$result = curl_exec( $ch );
			}
		}   
    }
}
