<?php
$paymentType = isset($_REQUEST['paymentType']) ? $_REQUEST['paymentType'] : '';
?>

<script language="JavaScript">
	function generateCC(){
		var cc_number = new Array(16);
		var cc_len = 16;
		var start = 0;
		var rand_number = Math.random();

		switch(document.perform.creditCardType.value)
        {
			case "Visa":
				cc_number[start++] = 4;
				break;
			case "Discover":
				cc_number[start++] = 6;
				cc_number[start++] = 0;
				cc_number[start++] = 1;
				cc_number[start++] = 1;
				break;
			case "MasterCard":
				cc_number[start++] = 5;
				cc_number[start++] = Math.floor(Math.random() * 5) + 1;
				break;
			case "Amex":
				cc_number[start++] = 3;
				cc_number[start++] = Math.round(Math.random()) ? 7 : 4 ;
				cc_len = 15;
				break;
        }

        for (var i = start; i < (cc_len - 1); i++) {
			cc_number[i] = Math.floor(Math.random() * 10);
        }

		var sum = 0;
		for (var j = 0; j < (cc_len - 1); j++) {
			var digit = cc_number[j];
			if ((j & 1) == (cc_len & 1)) digit *= 2;
			if (digit > 9) digit -= 9;
			sum += digit;
		}

		var check_digit = new Array(0, 9, 8, 7, 6, 5, 4, 3, 2, 1);
		cc_number[cc_len - 1] = check_digit[sum % 10];

		document.perform.creditCardNumber.value = "";
		for (var k = 0; k < cc_len; k++) {
			document.perform.creditCardNumber.value += cc_number[k];
		}
	}
</script>
<section id="main-content">
	<section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-sm-12">
			
                <div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php echo $admin_url = base_url()."dashboard/agent"; ?>"> Dashboard </a></li>
						<li> Payment By Paypal </li>
					</ol>
				</div>
<?php $plan_id=$plan[0]->id;
$q=$plan[0]->price;
$cryptKey = 'mNC0aFy4JAIxK039ChtEdr';
$qEncoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), $q, MCRYPT_MODE_CBC, md5(md5($cryptKey)))); ?>				
<center>
<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png"><br>
<font size=4 color=black face=Verdana><b>You Selected <?php echo $plan[0]->name; ?> , Price - $<?php echo $plan[0]->price; ?> ( <?php echo $plan[0]->days; ?> days)</b></font>
<br><br>
<form method="POST" action="<?php echo base_url()."admin/payment"?>" name="perform">
<input type=hidden name=paymentType value="<?=$paymentType?>" />
<input type=hidden name=amount value="<?=$qEncoded?>" />
<input type=hidden name=planid value="<?=$plan_id?>" />
<input type=hidden name=property_id value="<?php echo $p_id; ?>" />
<table width="600" border="0">
	<tr>
		<td align=right><spam>First Name:</spam></td>
		<td align=left><input type=text size=30 maxlength=32 name=firstName value=John class="form-control m-bot15" required ></td>
	</tr>
	<tr>
		<td align=right><spam>Last Name:</spam></td>
		<td align=left><input type=text size=30 maxlength=32 name=lastName value=Doe class="form-control m-bot15" required></td>
	</tr>
	<tr>
		<td align=right><spam>Card Type:</spam></td>
		<td align=left>
			<select name=creditCardType onChange="javascript:generateCC(); return false;" class="form-control m-bot15">
				<option value=Visa>Visa</option>
				<option value=MasterCard>MasterCard</option>
				<option value=Discover>Discover</option>
				<option value=Amex>American Express</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align=right><spam>Card Number:</spam></td>
		<td align=left><input type=text size=19 maxlength=19 name=creditCardNumber class="form-control m-bot15" required ></td>
	</tr>
	<tr>
		<td align=right><spam>Expiration Date:</spam></td>
		<td align=left><p>
			<select name=expDateMonth class="col-lg-4 m-bot15" style="padding:6px;">
				<option value=12>12</option>
				<option value=1>01</option>
				<option value=2>02</option>
				<option value=3>03</option>
				<option value=4>04</option>
				<option value=5>05</option>
				<option value=6>06</option>
				<option value=7>07</option>
				<option value=8>08</option>
				<option value=9>09</option>
				<option value=10>10</option>
				<option value=11>11</option>
				<option value=12>12</option>
			</select>
			<select name=expDateYear class="col-lg-4 m-bot15" style="padding:6px;">
				<option value=2015>2015</option>
				<option value=2005>2005</option>
				<option value=2006>2006</option>
				<option value=2007>2007</option>
				<option value=2008>2008</option>
				<option value=2009>2009</option>
				<option value=2010>2010</option>
				<option value=2011>2011</option>
				<option value=2012>2012</option>
				<option value=2013>2013</option>
				<option value=2014>2014</option>
				<option value=2015>2015</option>
				<option value=2015>2016</option>
				<option value=2015>2017</option>
				<option value=2015>2018</option>
				<option value=2015>2019</option>
				<option value=2015>2020</option>
			</select>
		</p></td>
	</tr>
	<tr>
		<td align=right><spam>Card Verification Number:</spam></td>
		<td align=left><input type=text size=3 maxlength=4 name=cvv2Number value=962 class="form-control m-bot15" required ></td>
	</tr>
	<tr>
		<td align=right><br><spam><b>Billing Address:</b></spam></td>
	</tr>
	<tr>
		<td align=right><spam>Address :</spam></td>
		<td align=left><input type=text size=25 maxlength=100 name=address1 class="form-control m-bot15" required></td>
	</tr>
	<tr>
		<td align=right><spam>City:</spam></td>
		<td align=left><input type=text size=25 maxlength=40 name=city class="form-control m-bot15" required></td>
	</tr>
	<tr>
		<td align=right><spam>State:</spam></td>
		<td align=left>
			<select id=state name=state class="form-control m-bot15" required> 	
				<option value="">State</option>
				<option value="OT">Other</option>
				<option value=AK>AK</option>
				<option value=AL>AL</option>
				<option value=AR>AR</option>
				<option value=AZ>AZ</option>
				<option value=CA>CA</option>
				<option value=CO>CO</option>
				<option value=CT>CT</option>
				<option value=DC>DC</option>
				<option value=DE>DE</option>
				<option value=FL>FL</option>
				<option value=GA>GA</option>
				<option value=HI>HI</option>
				<option value=IA>IA</option>
				<option value=ID>ID</option>
				<option value=IL>IL</option>
				<option value=IN>IN</option>
				<option value=KS>KS</option>
				<option value=KY>KY</option>
				<option value=LA>LA</option>
				<option value=MA>MA</option>
				<option value=MD>MD</option>
				<option value=ME>ME</option>
				<option value=MI>MI</option>
				<option value=MN>MN</option>
				<option value=MO>MO</option>
				<option value=MS>MS</option>
				<option value=MT>MT</option>
				<option value=NC>NC</option>
				<option value=ND>ND</option>
				<option value=NE>NE</option>
				<option value=NH>NH</option>
				<option value=NJ>NJ</option>
				<option value=NM>NM</option>
				<option value=NV>NV</option>
				<option value=NY>NY</option>
				<option value=OH>OH</option>
				<option value=OK>OK</option>
				<option value=OR>OR</option>
				<option value=PA>PA</option>
				<option value=RI>RI</option>
				<option value=SC>SC</option>
				<option value=SD>SD</option>
				<option value=TN>TN</option>
				<option value=TX>TX</option>
				<option value=UT>UT</option>
				<option value=VA>VA</option>
				<option value=VT>VT</option>
				<option value=WA>WA</option>
				<option value=WI>WI</option>
				<option value=WV>WV</option>
				<option value=WY>WY</option>
				<option value=AA>AA</option>
				<option value=AE>AE</option>
				<option value=AP>AP</option>
				<option value=AS>AS</option>
				<option value=FM>FM</option>
				<option value=GU>GU</option>
				<option value=MH>MH</option>
				<option value=MP>MP</option>
				<option value=PR>PR</option>
				<option value=PW>PW</option>
				<option value=VI>VI</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align=right><spam>ZIP Code:</spam></td>
		<td align=left><input type=text size=10 maxlength=10 name=zip class="form-control" required>(5 or 9 digits)</td>
	</tr>
	<tr>
		<td align=right><spam>Country:</spam></td>
		<td align=left>United States</td>
	</tr>
	
	<tr>
		<td/>
		<td><input class="btn btn-info" type=Submit value=Checkout></td>
	</tr>
</table>
</form>
</center>
</div>
</div>
</section>
</section>
<script language="javascript">
	generateCC();
</script>
<style>
spam {
    font-size: 15px;
    padding: 25px;
}
</style>
</body>
</html>