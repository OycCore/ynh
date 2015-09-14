<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			
                <div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php echo $admin_url = base_url()."dashboard/agent"; ?>"> Dashboard </a></li>
						<li> Payment </li>
					</ol>
				</div>
 <table border='0' width='40%' cellspacing='2' cellpadding='2' align="center">
<?php
$q=$_POST['amount'];
$cryptKey = 'mNC0aFy4JAIxK039ChtEdr';
$qDecoded = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), base64_decode($q), MCRYPT_MODE_CBC, md5(md5($cryptKey))), "\0");
require_once("paypal_pro.inc.php");
$firstName =urlencode( $_POST['firstName']);
$lastName =urlencode( $_POST['lastName']);
$creditCardType =urlencode( $_POST['creditCardType']);
$creditCardNumber = urlencode($_POST['creditCardNumber']);
$expDateMonth =urlencode( $_POST['expDateMonth']);
$padDateMonth = str_pad($expDateMonth, 2, '0', STR_PAD_LEFT);
$expDateYear =urlencode( $_POST['expDateYear']);
$cvv2Number = urlencode($_POST['cvv2Number']);
$address1 = urlencode($_POST['address1']);
//$address2 = urlencode($_POST['address2']);
$city = urlencode($_POST['city']);
$state =urlencode( $_POST['state']);
$zip = urlencode($_POST['zip']);
$amount = urlencode($qDecoded);
//HANDLINGAMT handling charge

// $item_name_1 = urlencode($_POST['item_name_1']);
// $amount_1 = urlencode($_POST['amount_1']);
// $quantity_1 = urlencode($_POST['quantity_1']);

$currencyCode="USD";
$paymentAction = urlencode("Sale");
/*if(isset($_POST['recurring'] ) && $_POST['recurring'] == 1) // For Recurring
{
	
	$profileStartDate = urlencode(date('Y-m-d h:i:s'));
	$billingPeriod = urlencode($_POST['billingPeriod']);// or "Day", "Week", "SemiMonth", "Year"
	$billingFreq = urlencode($_POST['billingFreq']);// combination of this and billingPeriod must be at most a year
	$initAmt = $amount;
	$failedInitAmtAction = urlencode("ContinueOnFailure");
	$desc = urlencode("Recurring $".$amount);
	$autoBillAmt = urlencode("AddToNextBilling");
	$profileReference = urlencode("Anonymous");
	$methodToCall = 'CreateRecurringPaymentsProfile';
	$nvpRecurring ='&BILLINGPERIOD='.$billingPeriod.'&BILLINGFREQUENCY='.$billingFreq.'&PROFILESTARTDATE='.$profileStartDate.'&INITAMT='.$initAmt.'&FAILEDINITAMTACTION='.$failedInitAmtAction.'&DESC='.$desc.'&AUTOBILLAMT='.$autoBillAmt.'&PROFILEREFERENCE='.$profileReference;
} 
else
{ */
	$nvpRecurring = '';
	$methodToCall = 'doDirectPayment';
/*} */

$nvpstr='&AMT='.$amount.'&CURRENCYCODE='.$currencyCode.'&PAYMENTACTION='.$paymentAction.'&CREDITCARDTYPE='.$creditCardType.'&ACCT='.$creditCardNumber.'&EXPDATE='.$padDateMonth.$expDateYear.'&CVV2='.$cvv2Number.'&FIRSTNAME='.$firstName.'&LASTNAME='.$lastName.'&STREET='.$address1.'&CITY='.$city.'&STATE='.$state.'&ZIP='.$zip.'&COUNTRYCODE=US'.$nvpRecurring;

"nvpstr : ".$nvpstr."<br />";
$p_name=$this->Site_setting_model->site_detail_by('paypal_username');
$username=$p_name[0]->paypal_username; 
$p_pass=$this->Site_setting_model->site_detail_by('paypal_password');
$password=$p_pass[0]->paypal_password; 
$p_sign=$this->Site_setting_model->site_detail_by('paypal_signature');
$signature=$p_sign[0]->paypal_signature;

$url=$this->Site_setting_model->site_value_byid('paypal_url');
$IS_ONLINE = (boolean)strtoupper($url->paypal_url);
 
$paypalPro = new paypal_pro($username, $password, $signature, '', '', $IS_ONLINE, FALSE );
$resArray = $paypalPro->hash_call($methodToCall,$nvpstr);

$ack = strtoupper($resArray["ACK"]);

if($ack!="SUCCESS")
{
	echo '<tr>';
		echo '<td colspan="2" style="font-weight:bold;color:red;" align="center">Error! '.$resArray["L_LONGMESSAGE0"].':( </td>';
	echo '</tr>';
	echo '<tr>';
		echo '<td align="right">Ack:</td>';
		echo '<td>'.$resArray["ACK"].'</td>';
	echo '</tr>';
	echo '<tr>';
		echo '<td align="right">Correlation ID:</td>';
		echo '<td>'.$resArray['CORRELATIONID'].'</td>';
	echo '</tr>';
	echo '<tr>';
		echo '<td><a class="btn btn-warning" href="'. base_url()."admin/property_boosting".'"> Back << </a></td>';
	echo '</tr>';
}
else
{
	$fname= $_POST['firstName'];
	$lname= $_POST['lastName'];
	$card_type= $_POST['creditCardType'];
	$card_no= $_POST['creditCardNumber'];
	$expiry_date= $_POST['expDateMonth'] .'/'. $_POST['expDateYear'];
	$cv_no= $_POST['cvv2Number'];
	$address= $_POST['address1'];
	$c= $_POST['city'];
	$s= $_POST['state'];
	$zip_code= $_POST['zip'];
	$country= "United States";
	$transaction_id=$resArray["TRANSACTIONID"];
	$plan_id=$_POST['planid'];
	$p_id=$_POST['property_id'];
	$amount=$resArray['AMT'];
	$crr=$currencyCode;
	$ack=$resArray['ACK'];
		$this->Admin_model->payment_detail($transaction_id,$plan_id,$amount,$crr,$ack,$p_id,$fname,$lname,$card_type,$card_no,$expiry_date,$cv_no,$address,$c,$s,$zip_code,$country);
		$this->Admin_model->update_boosted($p_id);
	echo '<tr>';
		echo '<td colspan="2" style="font-weight:bold;color:Green" align="center">Thank You For Your Payment :)</td>';
	echo '</tr>';
	echo '<tr>';
		echo '<td align="right"> Transaction ID:</td>';
		echo '<td>'.$resArray["TRANSACTIONID"].'</td>';
	echo '</tr>';
	echo '<tr>';
		echo '<td align="right"> Amount:</td>';
		echo '<td>'.$currencyCode.$resArray['AMT'].'</td>';
	echo '</tr>';
	echo '<tr>';
		echo '<td><a class="btn btn-success" href="'. base_url()."admin/property_boosting".'"> Back << </a></td>';
	echo '</tr>';
}
?>
</table>
 </div>
 </div>
 </section>
 </section>