
<?php
require_once('../../connect.php');
$sql = "SELECT firstName, lastName, phoneNumber, email FROM grooming";
$result = $conn->query($sql);
?>

<div class="row customer-list">
            <div class="col-md-12">
                <h1>Customer List</h1>
            </div>
            <div class="col-md-3">
                <h3>First Name:</h3>
            </div>
            <div class="col-md-3">
                <h3>Last Name:</h3>
            </div>
            <div class="col-md-3">
                <h3>Phone Number:</h3>
            </div>
            <div class="col-md-3">
                <h3>Email:</h3>
            </div>
        </div>
<hr>
<?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>

        <div class="col-md-3">
            <h3><?php echo $row["firstName"] ?></h3>
        </div>
        <div class="col-md-3">
            <h3><?php echo $row["lastName"] ?></h3>
        </div>
        <div class="col-md-3">
            <h3><?php echo $row["phoneNumber"] ?></h3>
        </div>
        <div class="col-md-3">
            <h3><?php echo $row["email"] ?></h3>
        </div>

  <?php  }
} else {
    echo "0 results";
}
$conn->close();

?>
