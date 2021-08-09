<?php
/*
kiosk_id: 3
email: "stephen.bannasch@gmail.com"
observation: "Whirlpool Galaxy (M51)"
datetime_when_user_made_request_at_kiosk: "2021-06-03 10:13:36.214899 -0400"
credential: 1114c7c1d689b28d3e21178c47136be21899050022084b856fea4277966f927


*/
$message='HTTP 400';
////////////////////////////////////////////////////////////////////////////////
$kiosk_id = $_POST[ "kiosk_id" ];
$kiosk_id = $_GET[ "kiosk_id" ];
$email = $_GET[ "email" ];
$observation = $_GET[ "observation" ];
$datetime_when_user_made_request_at_kiosk = $_GET[ "datetime_when_user_made_request_at_kiosk" ];
$credential = $_GET[ "credential" ];
////////////////////////////////////////////////////////////////////////////////
if (empty($kiosk_id) || empty($observation) || empty($email)  || empty($datetime_when_user_made_request_at_kiosk) || empty($credential))
    {$message='HTTP 400';}
elseif ($credential!='1114c7c1d689b28d3e21178c47136be21899050022084b856fea4277966f927')
    {$message='HTTP 401';}
else
    {$message='HTTP 200';}
////////////////////////////////////////////////////////////////////////////////
?>
{
  "message": "<?php echo $message; ?>",
  "kiosk_id": "<?php echo $kiosk_id; ?>",
  "email": "<?php echo $email; ?>",
  "observation": "<?php echo $observation; ?>",
  "datetime_when_user_made_request_at_kiosk": "<?php echo $datetime_when_user_made_request_at_kiosk; ?>",
  "credential": "<?php echo $credential; ?>"
}