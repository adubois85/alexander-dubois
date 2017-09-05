<?
/**
* require all composer dependencies; requiring the autoload file loads all composer packages at once
**/
require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");

/**
 * require mail-config.php so we have access to our keys and e-mail send-to email
 **/
require_once("mail-config.php");

// verify user's reCAPTCHA input
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$response = $recaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);

try {
	// if reCAPTCHA error, output the error code to the user
	if (!$response->isSuccess()) {
	throw(new Exception("reCAPTCHA error!"));
	}

	// We can't trust end users, so we sanitize their form inputs: name, email, subject, and message
	// note, this exact method won't work in angular -- we're assuming that jQuery is doing the submitting
	$name = filter_input(INPUT_POST, "contact-name", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$email = filter_input(INPUT_POST, "contact-email", FILTER_SANITIZE_EMAIL);
	$subject = filter_input(INPUT_POST, "contact-subject", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$body = filter_input(INPUT_POST, "contact-body", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

	// create Swift message
	$swiftMessage = new Swift_Message();

	// attach the sender to the message
	// this takes the form of an associative array where the Email is the key for the real name
	$swiftMessage->setFrom([$email => $name]);

	/**
	* attach the recipients to the message
	* $MAIL_RECIPIENTS is set in mail-config.php
	**/
	$recipients = $mailRecipients;
	$swiftMessage->setTo($recipients);

	// attach the subject line to the message
	$swiftMessage->setSubject($subject);

	/**
	 * attach the actual message to the message
	 * here, we set two versions of the message: the HTML formatted message and a plain text version of the HTML
	 * content this lets users who aren't viewing HTML content in Emails still access the links
	 **/
	$swiftMessage->setBody($body, "text/html");
	$swiftMessage->addPart(html_entity_decode($body), "text/plain");

	/**
	 * send the Email via SMTP; the SMTP server here is configured to relay everything upstream via CNM
	 * this default may or may not be available on all web hosts; consult their documentation/support for details
	 * SwiftMailer supports many different transport methods; SMTP was chosen because it's the most compatible and has the best error handling
	 * @see http://swiftmailer.org/docs/sending.html Sending Messages - Documentation - SwitftMailer
	 **/
	$smtp = new Swift_SmtpTransport("localhost", 25);
	$mailer = new Swift_Mailer($smtp);
	$numSent = $mailer->send($swiftMessage, $failedRecipients);

	/**
	 * the send method returns the number of recipients that accepted the Email, therefore if the number attempted is not
	 * equal to the number accepted, you have a problem -- so throw an Exception
	 **/
	if($numSent !== count($recipients)) {
		// the $failedRecipients parameter passed in the send() method now contains contains an array of the Emails that failed
		throw(new RuntimeException("Unable to send email."));
	}
	// report a successful send
	echo "<div class=\"alert alert-success\" role=\"alert\">Email successfully sent.</div>";

} catch(Exception $exception) {
	echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Oops</strong>, Somthing went wrong and the email wasn't able to be sent: " .
		$exception->getMessage() . "</div>";
}
