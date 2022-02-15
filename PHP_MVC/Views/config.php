<?php
require_once('vendor/autoload.php');
 
$stripe = array(
    'secret_key' => 'sk_test_51IhM0VJFz9033mKSyVvuPkDpLKGmmMpdJjgdAyOwa3zFlvOxRzeMSsq7ea1ORwninDWxlBsFpPoJjNxpH0E1xFOw00EhQqoBT8',
    'publishable_key' => 'pk_test_51IhM0VJFz9033mKSUQfxxEeStEB9dqBdSK9nAV26M3FX185ZEc2FmVyXXaZEw4ShSJr8YrQxmyTpMvcjCDYEoLJa00uhm0OaUC',
);
 
\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>