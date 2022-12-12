<?php
$amount = $GET
?>

<form action="success.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="your_api_key" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount= "<?php echo $_GET['amt']*100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="" //Replace with the order_id generated by you in the backend.
    data-buttontextt="Pay with Razorpay"
    data-name="<?php echo $_GET['name'];?>" //Your App or CompanyName. 
    data-description="<?php echo $_GET['des'];?>"
    data-image="<?php echo $_GET['image'];?>"
    data-prefill.name="<?php echo $_GET['username'];?>"
    data-prefill.contact="<?php echo $_GET['phoneno'];?>"
    data-theme.color="<?php echo $_GET['color'];?>"
></script>
<input type="submit" custom="Hidden Element" name="hidden" value="" id="hidden">
</form>
<div class="center" id="center">
  <p>Kindly Press Back Button in Order to Reattempt the purchase your purchase.</p>
</div>
<script>
// On mouse-over, execute myFunction
function myFunction() {
  document.getElementById("hidden").click();
}
myFunction()
function showmodal() {
  document.getElementById("center").style.display = "block";
}
setTimeout(showmodal,5000);
</script>
<style>
input[type=submit]{
	display: none;
}
.center {
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}
</style>