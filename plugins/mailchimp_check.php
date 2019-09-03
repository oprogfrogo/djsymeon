<?php
$api_key = "fea0e11fa81768948dbd25427d8e7401-us12";
$list_id = "a6f25b9992";

require('Mailchimp.php');
$Mailchimp = new Mailchimp( $api_key );
$Mailchimp_Lists = new Mailchimp_Lists( $Mailchimp );
$subscriber = $Mailchimp_Lists->subscribe( $list_id, array( 'email' => htmlentities($_POST['email']) ) );

if ( ! empty( $subscriber['leid'] ) ) {
   echo "success";
} else {
    echo "fail";
}
?>
