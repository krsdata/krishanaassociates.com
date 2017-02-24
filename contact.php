<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Krishana Associates</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>
<script language="JavaScript" src="scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
function alertmsg()
{
var n=$('#name').val();
var c=$('#cn').val();
var e=$('#nemail').val();
if(n=='')
{
alert("Please enter your name");
return false;
}
if(c=='')
{
alert("Please enter your Contact Number");
return false;
}
if(e=='')
{
alert("Please enter your Email ID");
return false;
}
else
{

}

}
</script>
</head>

<body bgcolor="#FBFBFB">
 <?php include 'logo.php';?>
 <?php include 'navigation.php';?>
<div class="contact_main">
  <table width="100%" border="0" bgcolor="#FFFFFF" style="color:#009933">
  <tr>
    <td width="30%" height="42" style=" font-size:20px; padding-left:10px;">Contact us :-</td>
    <td width="37%" style="color:#000033; font-size:20px;padding-left:10px;color:#009900">&nbsp; </td>
    <td width="33%" style="color:#000033; font-size:20px;padding-left:10px;color:#009900">&nbsp; </td>
  </tr>
  <tr>
    <td><div class="contact_td">
      <p><strong><u>Registered address :</u></strong><br />
        Krishana  Associates<br />
        10-F,  Sidharipur, Surajkund,<br />
        Near&nbsp; Netaji Subhash Chowk,<br />
        Gorakhpur-273015&nbsp; (U.P.)<br />
      
        Mobile : <span id="skype_c2c_container" dir="ltr" tabindex="-1" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" onclick="SkypeClick2Call.MenuInjectionHandler.makeCall(this, event)" data-numbertocall="+919936011666" data-numbertype="paid" data-isfreecall="false" data-isrtl="false" data-ismobile="false"><span dir="ltr" skypeaction="skype_dropdown"><span id="non_free_num_ui">+91-9936011666 </span></span></span>
		<br />Email :  sales@krihanaassociates.com
		</p>
     
    </div></td>
    <td><div class="contact_td">
      <p><strong><u>Corporate Office Lucknow:</u></strong><br />
        Krishana  Associates<br />
        G-86, Flat  No.3,&nbsp; Nashara Campus,<br />
        Sanjay  Gandhipuram,<br />
        Lucknow-226001  (U.P.)<br />
        Mobile :  +91-9336099911, 8799037745<br />
  Email : lucknow@krishanaassociates.com</strong><strong> </p>
    </div></td>
    <td><div class="contact_td">
      <p><strong><u>Branch office :</u></strong><br />
        Krishana  Associates<br />
        B-17, Balajipuram,  Rajkishore Nagar,<br />
        Behind Axis  Bank, Lingiyadiah,<br />
        Bilaspur-495006  (C.G.)<br />
        Phone :  07752 - 412376(Office)<br />
        Mobile :  +91-9584411666<br />
		Email : krishana@krishanaassociates.com
  <strong> </strong></p>
    </div></td>
  </tr>
  <tr> <td align="center" ><a href="#" title="men power supply" style="color:#999999"> </a></td>
    <td align="center"><a href="#" title="Construction metarial and equipment" style="color:#999999"> </a></td>
    <td align="center"><a href="#" title="Vehical rental in govt. sector" style="color:#999999"> </a></td> 
  </tr>
</table>

 
</div>
<div class="contact_second" style="78%">
  <table width="98%" border="0" bgcolor="#FFFFFF" style="color:#009933">
  <tr>
    <td width="33%" height="42" style=" font-size:20px; padding-left:10px;">Services : </td>
    <td style="color:#000033; font-size:20px;padding-left:10px;">Reach us :</td>
    <td width="32%" style="color:#000033; font-size:20px;padding-left:10px; ">Query : </td>
    </tr>
  <tr>
    <td height="182" rowspan="2">
    
    <?php include 'servicesmenu.php'; ?> </td>
    <td width="35%" rowspan="2">
    <div class="below_sevice_third" style="" >
     Contact us :  <br /><br />
      Mobile   : +91-9584411666<br />
     Phone :  07752-412376 <br />
     krishana@krishanaassociates.com  <br />
     info.krishanaassociates@gmail.com  </div></td>
    
  
    <td> <div class="below_sevice_third_td">
<form action="contact-form-handler.php" method="post" >
<table width="100%" border="0">
  <tr>
    <td width="40%" height="29">Name : </td>
    <td width="60%"> 
      <input type="text" name="name" id="name" placeholder="Your Name" />
     </td>
  </tr>
  <tr>
    <td>Conatct No. </td>
    <td>  
      <input type="text" name="contact" id="cn" placeholder="Your Contact Number" /></td>
  </tr>
  <tr>
    <td>Email ID  : </td>
    <td> 
    <input type="text" name="email" id="email"  placeholder="Your Email ID" />
     </td>
  </tr>
  <tr>
    <td>Message : </td>
    <td> 
       <textarea name="message" cols="" rows="2"   style="width:140px" placeholder="Type your message here"></textarea>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label> 
        <input type="submit" name="Submit" value="Submit" onclick="alertmsg()" />
    </label></td>
  </tr>
</table>
</form>
</div>
 
 </td>
    </tr>
</table>

 
</div>
<?php include 'footer.php';?>
 

</body>
</html>
