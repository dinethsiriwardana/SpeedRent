<?php

	function sendSMS($MSISDN,$MESSAGE ){
		// $MSISDN = $_POST["mobile"];
		// $SRC = $_POST["senderId"];
		// $MSISDN = "0768808901";
		$SRC = "INFO";
		
		// $MESSAGE = ( urldecode("There are user $user under $email called $fname $lname has beed registerd. please confirm it. https://easybank.systems/admin_login.php"));
		$AUTH = "1010|dsYLZIT5WwqGygkvjMEoOLkALbm3nSbGAIaLFw8w";  //Replace your Access Token
		
		$msgdata = array("recipient"=>$MSISDN, "sender_id"=>$SRC, "message"=>$MESSAGE);


				
				$curl = curl_init();
				
				//IF you are running in locally and if you don't have https/SSL. then uncomment bellow two lines
				curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
				
				curl_setopt_array($curl, array(
				CURLOPT_URL => "https://sms.send.lk/api/v3/sms/send",
				CURLOPT_CUSTOMREQUEST => "POST",
				CURLOPT_POSTFIELDS => json_encode($msgdata),
				CURLOPT_HTTPHEADER => array(
					"accept: application/json",
					"authorization: Bearer $AUTH",
					"cache-control: no-cache",
					"content-type: application/x-www-form-urlencoded",
				),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);

				curl_close($curl);

				if ($err) {
					echo "cURL Error #:" . $err;
				} else {
					echo $response;
				}
		}
?>
