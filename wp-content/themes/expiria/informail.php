<?php
//#!/usr/bin/php
header('Content-Type: text/html; charset=UTF-8');
$con = mysqli_connect("127.0.0.1","zaluldbusr","zaluldbusr@)!$","zalulpetitiondb");
$con->set_charset('utf8');

	if (mysqli_connect_errno()) {
	//	echo "Failed to connect to MySQL: " . mysqli_connect_error();
        	error_log("Petition Failed to connet to MySQL on: " . date("Y-m-d H:i:s") . " with error - " . mysqli_connect_error() . " - " . $_POST["nmae"] . " - " . $_POST["email"] . " - " . $_POST["phone"], 1, "judmojo@gmail.com");

	} else {

		$sql = "SELECT DATE_FORMAT(time,'%d-%m-%Y') as time FROM kidronSignatures ORDER BY id DESC LIMIT 1";
		if ($result = mysqli_query($con, $sql)) {
          		$row = $result->fetch_assoc();
	  		$time = date_create($row["time"]); // 2015-01-20 15:40:17
          		$today = date_create(date('d-m-Y'));
		}
		$interval = date_diff($time, $today);
		$d = $interval->format('%a');
		if ($d == 0) {
			$sql="SELECT COUNT(*) as count FROM kidronSignatures";

			if ($result = mysqli_query($con, $sql)) {

          			$row = $result->fetch_assoc();
	  			$count = $row["count"];
			//	error_log("נכון ל - " . date("d-m-Y H:i:s") . ", חתמו על העצומה " . $count . " תומכות/ים.", 1, "judmojo@gmail.com", "Subject: עדכון מספר תומכים\ות בעצומת אסון הנפט");

				$to      = "mayaj@zalul.org.il" . ", ";
				$to     .= "judmojo@gmail.com"  . ", ";
				$to     .= "ngilboa76@gmail.com". ", ";
				$to     .= "sigalB@zalul.org.il". ", ";
				$to     .= "lilach@zalul.org.il". ", ";
				$to     .= "hilaK@zalul.org.il";
			//		"Cc: ngilboa76@gmail.com, sigalB@zalul.org.il, hilaK@zalul.org.il" .
				$subject = "עדכון מספר תומכות/ים בעצומת נחל קדרון";
				$message = "נכון ל - " . date("d-m-Y H:i:s") . ", חתמו על העצומה " . $count . " תומכות/ים." . "\r\n" . "תודה על התמיכה.\r\n" . "צוות צלול.";
				$headers = "From: webmaster@zalul.org.il" . "\r\n" . 
    					"Reply-To: admin@nwg.co.il" . "\r\n" .
    					"X-Mailer: PHP/" . phpversion();

				mail($to, $subject, $message, $headers);

			//    printf("Select returned %d rows.\n", mysqli_num_rows($result));

    				/* free result set */
    				mysqli_free_result($result);
			} else {
	  			error_log('Error: ' . $sql, 0);
	  			error_log("TotalsendOut Kidron Petition Failed on QUERY MySQL on: " . date("Y-m-d H:i:s") . " with error - " . $sql, 1, "judmojo@gmail.com");

				die('Error: ' . mysqli_error($con));
			}
		}
		mysqli_close($con);
	}
?>
