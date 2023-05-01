<?php
        $conn = mysqli_connect("localhost", "root", "", "David");

        if($conn === false) die("ERROR: Could not connect. ". mysqli_connect_error());

        $FIRSTNAME = $_REQUEST['FIRSTNAME'];
        $LASTNAME = $_REQUEST['LASTNAME'];
        $MAIL = $_REQUEST['MAIL'];

        $sql = "INSERT INTO davidd VALUES ('','$FIRSTNAME','$LASTNAME','$MAIL')";

        if(mysqli_query($conn, $sql)) echo "<h3>data inserted successfully, browse local host if you need to view the update</h3>";
        else echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);

        mysqli_close($conn);
?>

<?php
$CarModel = array( "Ahmed"=>"2020","David"=>"2013", "Mostafa"=>"2017" , "Mohamed"=>"2016");
sort($CarModel);
$alength = count($CarModel);
for($x = 0; $x < $alength; $x++) {
  echo $CarModel[$x];
  echo "<br>";
}
?>