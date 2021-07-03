<script type="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form>
    <input type="textbox" name="name" id="name" placeholder="Enter your name"/><br><br>
    <input type="textbox" name="amt" id="amt" placeholder="Enter amount"/><br><br>
    <input type="button" name="btn" id="btn" value="Pay now" onclick="paynow()"/><br><br>
</form>
<script>
    function paynow(){
    var name=jQuery('#name').val();
    var amt=jQuery('#amt').val();
    var options = {
    "key": "rzp_test_W9KJOUi6tO2dX4", // Enter the Key ID generated from the Dashboard
    "amount": amt*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "handler": function (response){
        console.log(response);
    },
   
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
    }
</script>


