<script language="javascript">
function btnRegistry_onclick(){
	if(test_empty(document.frmRegistry.txtName.value)){
		alert(mustInput_Name);document.frmRegistry.txtName.focus();return false;
	}
	if(document.frmRegistry.cmbSex.selectedIndex==0){
		alert(mustSelect_Sex);return false;
	}
	if(test_empty(document.frmRegistry.txtAddress.value)){
		alert(mustInput_Address);document.frmRegistry.txtAddress.focus();return false;
	}
	if(test_empty(document.frmRegistry.txtCity.value)){
		alert(mustInput_city);document.frmRegistry.txtCity.focus();return false;
	}
	if(document.frmRegistry.cmbCountry.selectedIndex==0){
		alert(mustSelect_Country);return false;
	}
	if(test_empty(document.frmRegistry.txtTel.value)){
		alert(mustInput_Tel);document.frmRegistry.txtTel.focus();return false;
	}
	if(test_integer(document.frmRegistry.txtTel.value)){
		alert(mustInterger_Tel);document.frmRegistry.txtTel.focus();return false;
	}
	if(test_empty(document.frmRegistry.txtEmail.value)){
		alert(mustInput_Email);document.frmRegistry.txtEmail.focus();return false;
	}
	if(!checkEmail(document.frmRegistry.txtEmail.value)){
		alert(invalid_Email);document.frmRegistry.txtEmail.focus();return false;
	}
	if(test_empty(document.frmRegistry.txtUid.value)){
		alert(mustInput_Uid);document.frmRegistry.txtUid.focus();return false;
	}
	if(!test_length4(document.frmRegistry.txtUid.value)){
		alert(mustLength4_Uid);document.frmRegistry.txtUid.focus();return false;
	}
	if(test_empty(document.frmRegistry.txtPwd.value)){
		alert(mustInput_Pwd);document.frmRegistry.txtPwd.focus();return false;
	}
	if(!test_length4(document.frmRegistry.txtPwd.value)){
		alert(mustLength4_Pwd);document.frmRegistry.txtPwd.value = '';document.frmRegistry.txtPwd.focus();return false;
	}
	if(test_empty(document.frmRegistry.txtPwd2.value)){
		alert(mustInput_Pwd2);document.frmRegistry.txtPwd2.focus();return false;
	}
	if(!test_length4(document.frmRegistry.txtPwd2.value)){
		alert(mustLength4_Pwd);document.frmRegistry.txtPwd2.value = '';document.frmRegistry.txtPwd2.focus();return false;
	}
	if(!test_confirm_pass(document.frmRegistry.txtPwd.value,document.frmRegistry.txtPwd2.value)){
		alert(identicalPassword);
		document.frmRegistry.txtPwd.value = '';
		document.frmRegistry.txtPwd2.value = '';
		document.frmRegistry.txtPwd.focus();return false;
	}
	if(test_empty(document.frmRegistry.txtRobust.value)){
		alert(mustInput_Robust);document.frmRegistry.txtRobust.focus();return false;
	}
	return true;
}
</script>
<?php $alphanum  = "abcdefghijlmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$rand = substr(str_shuffle($alphanum), 0, 5);
$randE = PKI_Encrypt($rand, 6733, 82393793)?>

<?php $errMsg =''?>
<?php $l_Request     = $_lang == 'vn' ? 'Th??ng tin ph???i nh???p' : 'Request info';
$l_PerInfo     = $_lang == 'vn' ? 'Th??ng tin c?? nh??n' : 'Personal info';
$l_AddressInfo = $_lang == 'vn' ? '?????a ch???' : 'Address info';
$l_ContactInfo = $_lang == 'vn' ? 'Th??ng tin li??n h???' : 'Contact info';
$l_UserInfo    = $_lang == 'vn' ? 'T??n truy c???p & m???t kh???u' : 'User info';
$l_strConfirm  = $_lang == 'vn' ? 'Chu???i x??c nh???n' : 'Confirm string';

$l_Sex         = $_lang == 'vn' ? 'Gi???i t??nh' : 'Sex';
$l_Male        = $_lang == 'vn' ? 'Nam' : 'Male';
$l_Female      = $_lang == 'vn' ? 'N???' : 'Female';
$l_Name        = $_lang == 'vn' ? 'H??? v?? t??n' : 'Full name';
$l_Company     = $_lang == 'vn' ? 'C??ng ty' : 'Company name';
$l_Address     = $_lang == 'vn' ? '?????a ch???' : 'Address';
$l_State       = $_lang == 'vn' ? 'T???nh / Th??nh ph???' : 'State';
$l_Country     = $_lang == 'vn' ? 'Qu???c gia' : 'Country';
$l_Tel         = $_lang == 'vn' ? '??i???n tho???i' : 'Tel';
$l_Email       = $_lang == 'vn' ? 'Email' : 'Email';
$l_Fax         = $_lang == 'vn' ? 'S??? fax' : 'Fax';
$l_Website     = $_lang == 'vn' ? 'Trang web' : 'Website';
$l_Uid         = $_lang == 'vn' ? 'T??n ????ng nh???p' : 'Username';
$l_Pwd         = $_lang == 'vn' ? 'M???t kh???u' : 'Password';
$l_Pwd2        = $_lang == 'vn' ? 'Nh???p l???i m???t kh???u' : 'Confirm password';
$l_strR        = $_lang == 'vn' ? 'Chu???i x??c nh???n' : 'Confirm string';


$l_btnRegistry = $_lang == 'vn' ? '????ng k??' : 'Registry';
$l_btnReset    = $_lang == 'vn' ? 'Nh???p l???i' : 'Reset';

$l_RegSuccess  = $_lang == 'vn' ? '???? ????ng k?? th??nh c??ng.' : 'Registry Successfully.';

$l_min4char    = $_lang == 'vn' ? 't???i thi???u 4 k?? t???' : 'Min 4 characters';

if (isset($_POST['btnRegistry'])){
	$sex        = $_POST['cmbSex'];
	$name       = trim($_POST['txtName']);
	$company    = trim($_POST['txtCompany']);
	$address    = trim($_POST['txtAddress']);
	$city       = trim($_POST['txtCity']);
	$country    = $_POST['cmbCountry'];
	$tel        = trim($_POST['txtTel']);
	$fax        = trim($_POST['txtFax']);
	$email      = trim($_POST['txtEmail']);
	$website    = trim($_POST['txtWebsite']);
	$uid        = trim($_POST['txtUid']);
	$pwd        = trim($_POST['txtPwd']);
	$Rdx        = isset($_POST['HidRd']) ? trim($_POST['HidRd']) : "";
	$strRobust  = isset($_POST['txtRobust']) ? trim($_POST['txtRobust']) : "";
	if (md5($strRobust) == $Rdx){
		$uidTest = getRecord("tbl_member","uid='".$uid."'");
		if($uidTest['uid']==$uid){
			$errMsg = '"T??n ????ng nh???p" n??y ???? t???n t???i. H??y ch???n t??n kh??c !';
		}else{
			$fields_arr = array(
				"name"          => "'$name'",
				"sex"           => "$sex",
				"company"       => "'$company'",
				"address"       => "'$address'",
				"city"          => "'$city'",
				"country"       => "'$country'",
				"tel"           => "'$tel'",
				"fax"           => "'$fax'",
				"email"         => "'$email'",
				"website"       => "'$website'",
				"uid"           => "'$uid'",
				"pwd"           => "'$pwd'",
				"status"        => "0",
				"date_added"    => "now()",
				"last_modified" => "now()",
			);
			
			$result = insert("tbl_member",$fields_arr);
			if($result) {
				$_SESSION['member'] = $uid;
				echo "<script>window.location='./?frame=registry&code=1'</script>";
			}
		}
	}else{
		$errMsg = 'Sai "Chu???i x??c nh???n" !';
	}
}
if ($_REQUEST['code']=='1'){
?>

<table align="center" border="0" width="98%" cellpadding="0" cellspacing="0">
	<tr><td height="5"></td></tr>
	<tr>
		<td>
			<table align="center" border="1" width="100%" cellpadding="0" bordercolor="#FFFFFF" cellspacing="0" style="border-collapse:collapse">
				<tr>
					<td align="center">
						<br><br>
						<font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">
						<b><?php echo $l_RegSuccess?></b>
						</font>
						<br><br>
						[ <a href="./"><?php echo $_lang=='vn'?'K??ch v??o ????y ????? tr??? v??? trang ch??? !.':'Login'?></a> ]
						<br><br>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr><td height="5"></td></tr>
</table>

<?php }else{
?>

<form method="POST" name="frmRegistry" action="./">
<input type="hidden" name="frame" value="registry">
<table align="center" border="0" width="98%" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<table align="center" border="1" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse" bordercolor="#CCCCCC">
				<tr>
					<td align="center">

<table border="0" cellspacing="5" cellpadding="0" width="100%" align="center">
	<tr>
		<td height="20" colspan="3" class="normalfont" align="right">
			<font color="#FF0000">* </font><font color="#FFFFFF"><?php echo $l_Request?>&nbsp;&nbsp;&nbsp;</font>
		</td>
	</tr>

	<tr><td height="20" colspan="3" class="normalTitle"><b><?php echo $l_PerInfo?></b><HR size="1" noshade></td></tr>

	<tr>
		<td align="right" class="normalFont"><?php echo $l_Name?></td>
		<td><font color="#FF0000">*</font></td>
		<td><input class="textbox" size="30" name="txtName" value="<?php echo $name?>"></td>
	</tr>
	
	<tr>
		<td align="right" class="normalFont" width="35%"><?php echo $l_Sex?></td>
		<td width="7"><font color="#FF0000">*</font></td>
		<td><?php echo comboSex($sex,$_lang)?></td>
	</tr>
	
	<tr>
		<td align="right" class="normalFont"><?php echo $l_Company?></td>
		<td>&nbsp;</td>
		<td><input class="textbox" size="30" name="txtCompany" value="<?php echo $company?>"></td>
	</tr>


	<tr><td height="20" colspan="3" class="normalTitle"><b><?php echo $l_AddressInfo?></b><HR size="1" noshade></td></tr>


	<tr>
		<td align="right" class="normalFont"><?php echo $l_Address?></td>
		<td><font color="#FF0000">*</font></td>
		<td><input class="textbox" size="30" name="txtAddress" value="<?php echo $address?>"></td>
	</tr>

	<tr>
		<td align="right" class="normalFont"><?php echo $l_State?></td>
		<td><font color="#FF0000">*</font></td>
		<td><input class="textbox" size="30" name="txtCity" value="<?php echo $city?>"></td>
	</tr>

	<tr valign="middle" height="22">
		<td align="right" class="normalFont"><?php echo $l_Country?></td>
		<td><font color="#FF0000">*</font></td>
		<td>
			<?php echo comboCountry($country,$_lang)?>
		</td>
	</tr>
	
	<tr><td height="20" colspan="3" class="normalTitle"><b><?php echo $l_ContactInfo?></b><HR size="1" noshade></td></tr>

	<tr>
		<td align="right" class="normalFont"><?php echo $l_Tel?></td>
		<td><font color="#FF0000">*</font></td>
		<td><input class="textbox" size="30" name="txtTel" value="<?php echo $tel?>"></td>
	</tr>
	
	<tr>
		<td align="right" class="normalFont"><?php echo $l_Fax?></td>
		<td>&nbsp;</td>
		<td><input class="textbox" size="30" name="txtFax" value="<?php echo $fax?>"></td>
	</tr>
	
	<tr>
		<td align="right" class="normalFont"><?php echo $l_Email?></td>
		<td><font color="#FF0000">*</font></td>
		<td><input class="textbox" size="30" name="txtEmail" value="<?php echo $email?>"></td>
	</tr>
	
	<tr>
		<td align="right" class="normalFont"><?php echo $l_Website?></td>
		<td>&nbsp;</td>
		<td><input class="textbox" size="30" name="txtWebsite" value="<?php echo $website?>"></td>
	</tr>

	<tr><td height="20" colspan="3" class="normalTitle"><b><?php echo $l_UserInfo?></b><HR size="1" noshade></td></tr>

	<tr>
		<td align="right" class="normalFont"><?php echo $l_Uid?></td>
		<td class="Star"><font color="#FF0000">*</font></td>
		<td>
			<input class="textbox" size="30" name="txtUid" value="<?php echo $uid?>">
			<font color="#FFFFFF">(<?php echo $l_min4char?>)</font>
		</td>
	</tr>

	<tr>
		<td align="right" class="normalFont"><?php echo $l_Pwd?></td>
		<td><font color="#FF0000">*</font></td>
		<td>
			<input class="textbox" size="30" name="txtPwd" type="password">
			<font color="#FFFFFF">(<?php echo $l_min4char?>)</font>
		</td>
	</tr>
	
	<tr>
		<td align="right" class="normalFont"><?php echo $l_Pwd2?></td>
		<td class="Star"><font color="#FF0000">*</font></td>
		<td>
			<input class="textbox" size="30" name="txtPwd2" type="password">
			<font color="#FFFFFF">(<?php echo $l_min4char?>)</font>
		</td>
	</tr>
	
	<tr><td height="20" colspan="3" class="normalTitle"><b><?php echo $l_strConfirm?></b><HR size="1" noshade></td></tr>
	
	<tr>
		<td align="right" class="normalFont"></td>
		<td class="Star"></td>
		<td>
			<input type="hidden" name="HidRd" id="HidRd" value="<?php print( md5($rand)) ?>">
			<img name="robust" src= "<?php print('lib/RD_Img.php?RD='.$randE) ?>" border="1" style="border-color:#999999; border-collapse:collapse">
		</td>
	</tr>
	
	<tr>
		<td align="right" class="normalFont"><?php echo $l_strR?></td>
		<td class="Star"></td>
		<td>
			<input class="textbox" size="30" name="txtRobust" type="text"> 
		</td>
	</tr>
	
	<tr><td height="20" colspan="3" class="normalTitle"><HR size="1" noshade></td></tr>

	<tr>
		<td colspan="2"></td>
		<td></td>
	</tr>

	<tr>
		<td colspan="2"></td>
		<td>
			<input class="buttonorange" onmouseover="this.className='buttonblue'" style="WIDTH: 89px; HEIGHT: 22px" onmouseout="this.className='buttonorange'" type="submit" value="<?php echo $l_btnRegistry?>" name="btnRegistry" onclick="return btnRegistry_onclick()">
			<input type=reset class="buttonorange" onmouseover="this.className='buttonblue'" style="WIDTH: 89px; HEIGHT: 22px" onmouseout="this.className='buttonorange'" name=butReset value="<?php echo $l_btnReset?>">
		</td>
	</tr>
	
	<tr><td colspan="3" height="10"></td></tr>
</table>

					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr><td height="5"></td></tr>
</table>
</form>

<?php }?>
<?php if($errMsg!=''){echo '<p align=center class="err">'.$errMsg.'<br></p>';}?>