<?php
  $MailAttachments = "";
  $MailBCC         = "";
  $MailCC          = "";
  $MailTo          = "";
  $MailBodyFormat  = "";
  $MailBody        = "";
  $MailImportance  = "";
  $MailFrom        = "".((isset($_POST["name"]))?$_POST["name"]:"")  ."|WA|".((isset($_POST["email"]))?$_POST["email"]:"")  ."";
  $MailSubject     = "[Contact Form] Website Contact form";
  $_SERVER["QUERY_STRING"] = "";

  //Global Variables

  $WA_MailObject = WAUE_Definition("smtp.gmail.com","25","risepara@gmail.com","RisE | A Paranormal Research Team","","");

  if ($RecipientEmail)     {
    $WA_MailObject = WAUE_AddRecipient($WA_MailObject,$RecipientEmail);
  }
  else      {
    //To Entries
  }

  //Attachment Entries

  //BCC Entries

  //CC Entries

  //Body Format
  $WA_MailObject = WAUE_BodyFormat($WA_MailObject,0);

  //Set Importance
  $WA_MailObject = WAUE_SetImportance($WA_MailObject,"3");

  //Start Mail Body
$MailBody = $MailBody . "<html><head></head><body>\r\n";
$MailBody = $MailBody . "<p style=\"font-family:Verdana, Geneva, sans-serif\"><strong>Name:</strong> ";
$MailBody = $MailBody .  ((isset($_POST["name"]))?$_POST["name"]:"");
$MailBody = $MailBody . "\r\n";
$MailBody = $MailBody . "  <br />\r\n";
$MailBody = $MailBody . "  <strong>Email Address:</strong> ";
$MailBody = $MailBody .  ((isset($_POST["email"]))?$_POST["email"]:"");
$MailBody = $MailBody . "\r\n";
$MailBody = $MailBody . "  <br />\r\n";
$MailBody = $MailBody . "  <strong>Phone #:</strong> ";
$MailBody = $MailBody .  ((isset($_POST["phone"]))?$_POST["phone"]:"");
$MailBody = $MailBody . "\r\n";
$MailBody = $MailBody . "  <br />\r\n";
$MailBody = $MailBody . "  <strong>Street Address: </strong><br />\r\n";
$MailBody = $MailBody . "  ";
$MailBody = $MailBody .  ((isset($_POST["street_address"]))?$_POST["street_address"]:"");
$MailBody = $MailBody . "<br />\r\n";
$MailBody = $MailBody .  ((isset($_POST["city"]))?$_POST["city"]:"");
$MailBody = $MailBody . ", ";
$MailBody = $MailBody .  ((isset($_POST["state"]))?$_POST["state"]:"");
$MailBody = $MailBody . " ";
$MailBody = $MailBody .  ((isset($_POST["zip"]))?$_POST["zip"]:"");
$MailBody = $MailBody . "</p>\r\n";
$MailBody = $MailBody . "<hr />\r\n";
$MailBody = $MailBody . "<p style=\"font-family:Verdana, Geneva, sans-serif\">\r\n";
$MailBody = $MailBody . "  \r\n";
$MailBody = $MailBody . "  <strong>Reason:</strong> ";
$MailBody = $MailBody .  ((isset($_POST["reason"]))?$_POST["reason"]:"");
$MailBody = $MailBody . "\r\n";
$MailBody = $MailBody . "  <br />\r\n";
$MailBody = $MailBody . "<strong>Comments:</strong></p>\r\n";
$MailBody = $MailBody .  ((isset($_POST["comments"]))?$_POST["comments"]:"");
$MailBody = $MailBody . "</body></html>";
  //End Mail Body

  $WA_MailObject = WAUE_SendMail($WA_MailObject,$MailAttachments,$MailBCC,$MailCC,$MailTo,$MailImportance,$MailFrom,$MailSubject,$MailBody);

  $WA_MailObject = null;
?>