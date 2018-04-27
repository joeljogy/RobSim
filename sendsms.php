<?php
	include ( "./src/NexmoMessage.php" );
	/**
	 * To send a text message.
	 *
	 */
	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('879fdda7', '7ed24cc85d4a8f92');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info2 = $nexmo_sms->sendText( '919836176161', '919901560673', 'Greetings Laddha, Please note that the road with network_id: 87821142 and name: D Ring Road has been disabled!' );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info2);
	// Done!
?>