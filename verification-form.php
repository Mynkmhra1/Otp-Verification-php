<div class="error"></div>
<div class="success"></div>
<form id="frm-mobile-verification">
	<div class="form-row">
		<label>OTP is sent to Your Mobile Number</label>		
	</div>

	<div class="form-row">
		<input type="number"  id="mobileOtp" class="form-input" placeholder="Enter the OTP">		
	</div>

	<div class="row">
		<input id="verify" type="button" class="btnVerify" value="Verify" onClick="verifyOTP();">  <a class="action" href="index.php">Back</a>
	</div>
	
</form>
<style>
.action {
    background: red;
    padding: 8px 20px;
	margin-left:210px;
    border: orange 1px solid;
    border-radius: 14px;
    width: 40%;
    color: #FFF;
    box-shadow: 0px 0px 2px 2px rgb(0,0,0);
}
.btnVerify {
    background: red;
    padding: 8px 20px;
    border: orange 1px solid;
    border-radius: 14px;
    width: 40%;
    color: #FFF;
	box-shadow: 0px 0px 2px 2px rgb(0,0,0);
}

</style>
