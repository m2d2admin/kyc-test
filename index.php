<?php 
echo "<h1>Hello Shahadat M2-D2 Org</h1>";
$servername     = "kyc-db.mysql.database.azure.com";
$dbusername     = "kycmaster";
$dbpassword     = "fact2tension4outward!";
$dbname         = "kyc-db";

//Create connection
//$conn 	        = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
//global $conn;
//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

echo "<h3>db-configration</h3>";
//Check connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die ("Could not connect to the database $dbname :" . $pe->getMessage());
}

echo "<h3>this is end</h3>";

/*
$qstr3 		    = "SELECT 
fct_domain_monitoring.domain_url_id, fct_domain_monitoring.timestamp, fct_domain_monitoring.availability_indicator, fct_domain_monitoring.response_time 
FROM fct_domain_monitoring 
WHERE fct_domain_monitoring.domain_url_id='".$domain_url_id."'  
ORDER BY fct_domain_monitoring.timestamp DESC LIMIT 1";
$result3 	    = $conn->query($qstr3);
if($result3->num_rows > 0) {
    while( $row3 = $result3->fetch_assoc() ) {
        $prev_availability_indicator     = $row3["availability_indicator"];
        if($prev_availability_indicator != $availability_indicator){
            $insertstr3     = "INSERT INTO `fct_domain_monitoring`(`domain_url_id`, `timestamp`, `availability_indicator`, `response_time`) VALUES ('".$domain_url_id."', '".$timestamp."', '".$availability_indicator."', '".$taken_response_time."')";
            $conn->query($insertstr3);
        }
    }
}
*/
?>
