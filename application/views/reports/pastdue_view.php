<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<FORM ACTION="<?php echo $this->url_prefix?>/index.php/reports/pastdue" METHOD="POST" name="form1"> 

<td><b><?php echo lang('organizationname')?></b></td>
<td><select name="organization_id">
<option value=""><?php echo lang('choose')?></option>
<?php
foreach ($orglist as $myresult) {
	$myid = $myresult['id'];
	$myorg = $myresult['org_name'];
	echo "<option value=\"$myid\">$myorg</option>";
}
?>
</select></td><tr>

&nbsp;&nbsp; <?php echo lang('billingstatus')?>: <select name="viewstatus">
<option> </option>
<option value="pending"><?php echo lang('pending')?></option>
<option value="collections"><?php echo lang('collections')?></option>
<option value="turnedoff"><?php echo lang('turnedoff')?></option>
<option value="cancelwfee"><?php echo lang('cancelwithfee')?></option>
<option value="pastdue"><?php echo lang('pastdue')?></option>
<option value="pastdueexempt"><?php echo lang('pastdueexempt')?></option>
<option value="noticesent"><?php echo lang('noticesent')?></option>
<option value="waiting"><?php echo lang('waiting')?></option>
</select>

<input type="SUBMIT" NAME="submit" value="<?php echo lang('submit')?>"></form><p>

<h3><?php echo $org_name?>: 

<?php
// print the status being viewed
switch ($viewstatus) 
{
	case 'authorized':
		echo lang('authorized');
		break;
	case 'declined':
		echo lang('declined');
		break;
	case 'pending':
		echo lang('pending');
		break;
	case 'collections':
		echo lang('collections');
		break;
	case 'turnedoff':
		echo lang('turnedoff');
		break;
	case 'canceled':
		echo lang('canceled');
		break;
	case 'cancelwfee':
		echo lang('cancelwithfee');
		break;
	case 'pastdue':
		echo lang('pastdue');
		break;
	case 'pastdueexempt':
		echo lang('pastdueexempt');
		break;
	case 'noticesent':
		echo lang('noticesent');
		break;
	case 'waiting':
		echo lang('waiting');
		break;
}
?>
</h3>
<table cellpadding=5><tr style="background: #bbb;"><td>Status</td>
<td>Acct Number</td><td>Invoice Number</td><td>Name</td><td>From</td><td>To</td>
<td>Past Amount Due</td><td>Due Date</td>
<td><?php echo lang('category')?></td><td>Modify Status</td></tr>

<?php
foreach ($recentpayments as $payment)
{
?>
	<tr style="background: #ccc;"><td><?php echo $payment['status']?></td>
	<td><a href="<?php echo $this->url_prefix?>/index.php/view/account/<?php echo $payment['account_number']?>"
	target="_blank"><?php echo $payment['account_number']?></a></td>
	<td><?php echo $payment['invoice_number']?></td>
	<td><?php echo $payment['name']?></td>
	<td><?php echo $payment['from_date']?></td>
	<td><?php echo $payment['to_date']?></td>
	<td><?php echo $payment['pastcharges']?></td>
	<td><?php echo $payment['payment_due_date']?></td>
	<td><?php echo $payment['categorylist']?></td>

	<td><form style="margin-bottom:0;" action="<?php echo $this->url_prefix?>/index.php/reports/pastdue" method=post>

	<select name="changestatus" style="font-size: 9px;">
	<option value=""><?php lang('choose')?></option>
	<option value="collections"><?php echo lang('collections')?></option>
	<option value="turnedoff"><?php echo lang('turnedoff')?></option>
	<option value="canceled"><?php echo lang('canceled')?></option>
	<option value="cancelwfee"><?php echo lang('cancelwithfee')?></option>
	<option value="waiting"><?php echo lang('waiting')?></option>
	</select>

	<input type=hidden name=billingid value="<?php echo $payment['billing_id']?>">
	<input type=hidden name=organization_id value="<?php echo $organization_id?>">
	<input type=hidden name=viewstatus value="<?php echo $viewstatus?>">
	<input type="SUBMIT" NAME="submit" value="<?php echo lang('submit')?>" class="smallbutton"> 
	</form></td>
	</tr>
<?php
}
?>
</table>
</body>
</html>
