/**	CONTACT FORM
*************************************************** **/
var _hash = window.location.hash;
jQuery('#alert_success').hide();
jQuery('#alert_failed').hide();
/**
	BROWSER HASH - from php/contact.php redirect!

	#alert_success 		= email sent
	#alert_failed		= email not sent - internal server error (404 error or SMTP problem)
	#alert_mandatory	= email not sent - required fields empty
**/	
if (_hash === '#alert_success' || _hash === '#alert_failed') {
	jQuery(_hash).show();
	}