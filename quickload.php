<?php
require_once "theBed-main.php";
accessdb("password","put","amzn1.ask.account.ACCOUNTID","EMAIL@EXAMPLE.COM|PASSWORD");
#OR by URL
#accessdb("password","put","amzn1.ask.account.ACCOUNTID","https://EXAMPLE.execute-api.us-east-1.amazonaws.com/Prod/?secret=LETMEIN");
?>
