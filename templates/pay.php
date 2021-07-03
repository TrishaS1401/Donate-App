<script type="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
    "key": "rzp_test_W9KJOUi6tO2dX4", // Enter the Key ID generated from the Dashboard
    "amount": "100", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "MyCompany",
    "description": "Test Transaction",
    "image": "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/donate-logo-design-template-2a0222d09351e90d935dbb4715c1918c_screen.jpg?ts=1590585470",
    "handler": function (response){
        console.log(response);
    },
    "theme": {
        "color": "#68D6E1"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.payment_id);
});
    rzp1.open();
</script>


