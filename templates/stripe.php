

<?php 
include("../start.php");
include("head.php");



    $stremail = $usuario['email'];
    // Set your secret key: remember to change this to your live secret key in production
    // See your keys here: https://dashboard.stripe.com/account/apikeys
    \Stripe\Stripe::setApiKey("sk_test_ZQFTMFKiS2flUbTOQwxQUA63");
 
    // Token is created using Checkout or Elements!
    // Get the payment token ID submitted by the form:
    $token = $_POST['stripeToken'];
 
    $customer = \Stripe\Customer::create(array(
        "email" => $stremail,
        "source" => $token,
    ));
 
    /*$charge = \Stripe\Charge::create([
        'amount' => ($preciofinal*100),
        'currency' => 'eur',
        'customer' => $customer,
    ]);*/
?>

</body>
</html>