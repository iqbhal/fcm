<?php



		$url = 'https://fcm.googleapis.com/fcm/send';
		$msg = array(
			'body' =>'Firebase Push Notification',
			'title'=>'Visha Takkar',

			);
		$fields = array(
			'registration_ids' =>'dhx_heTR1As:APA91bEK2NjN9dSKpABhrf0l4Z4EQxpkBBHBv5ARaL4fahymCYDgfLQ_t_0IzTmYESq87nM6Qn5mFqV1f5K5YAFjMG-1FfyVHkS58UvqLGcCd1mJR3r4YiO1cg8pvccsyU4PfdXAdiKV',
			'data' =>$msg);
		$headers = array(

		'Authorization:key = AIzaSyBJp8WsSE6ymEBI1b3ulWmA-XIMd-XRMTo',
		'Content-Type : application/json');
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($fields));
		$result = curl_exec($ch);
		echo $result;
		if ($result === FALSE) {
			// echo (string)$result;
			die('Curl failed: '. curl_error($ch));
		}
		curl_close($ch);
		// echo (string)$result;
		// echo "sukses";
		return $result;

		// $conn = mysqli_connect("localhost","root","","fcm");

		// $sql = "Select Token From users";

		// $result = mysqli_query($conn,$sql);
		// $tokens = array();

		// if(mysqli_num_rows($result) > 0 ){

		// 	while ($row = mysqli_fetch_assoc($result)){
		// 		$tokens[] = $row["Token"];
		// 	}
		// }

		// mysqli_close($conn);

		// $message = array("message" => "FCM PUSH NOTIFICATION TEST MESSAGE");
		// $message_status = send_notification($tokens, $message);
		// echo $message_status;
	 ?>
