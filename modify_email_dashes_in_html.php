/**

This function removes dashes from labels in the email message.
The function is a filter that is applied to the 'wpforms_email_message' hook.
It takes two parameters: the email message string that includes Smart Tags, and
an instance of the WPForms_WP_Emails class.
The function uses the PHP 'str_replace' function to remove the HTML entity
for an em dash ('—') from the email message. The resulting string is
returned.
The function also includes a var_dump statement that will output the value
of the $email variable to the error log, for debugging purposes.
@link https://wpforms.com/developers/wpforms_email_message/
@param string $message Email message including Smart Tags.
@param object $emails Instance of the WPForms_WP_Emails class
@return string The modified email message string.
*/
function wpf_dev_email_message( $message, $emails ) {
// Remove dashes from labels
$email = str_replace('—', '', $message );
// Output the $email variable to the error log for debugging
var_dump($email);
return $email;
}
// Add the wpf_dev_email_message() function as a filter for the wpforms_email_message hook
add_filter( 'wpforms_email_message', 'wpf_dev_email_message', 10, 2 );
