<script type="https://code.jquery.com/jquery-3.5.0.js"></script>

<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_W9KJOUi6tO2dX4" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $_POST['amount']*100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-buttontext="Pay with Razorpay"
    data-name="MyCompany"
    data-description="Don’t turn away, Give today!"
    data-image="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pngitem.com%2Fmiddle%2FiJoihiw_dog-tag-donate-button-donate-button-heart-hd%2F&psig=AOvVaw0D5b3Id4PsF8HbD-6c6Fl8&ust=1625368043806000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCJj5koD2xfECFQAAAAAdAAAAABAD"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="#248f8f"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>