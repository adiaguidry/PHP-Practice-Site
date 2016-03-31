
<?php
require_once('../../connect.php');

if(isset($_POST['add'])){

    $addQuery = "INSERT INTO grooming(firstName, lastName) VALUES ('$_POST[firstName]',
    '$_POST[lastName]')";

    if (mysqli_query($conn, $addQuery)){
        echo "New grooming appointment set";
    } else{
        echo "Error: " . $addQuery . "<br>" . mysqli_error($conn);
    };
}

mysqli_close($conn);

?>
<style>
    .form-control {
        background-color: transparent;
        color: #000;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <h1>Schedule Grooming Appointment</h1>
        <p class="dash-welcome">Add pet shop grooming appointment. <i class="fa fa-pencil fa-md"></i></p>
    </div>
    <hr style="border: 1px solid #fff">
    <div class="col-md-12">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="span-10">
          <div class="col-md-6">
            <div class="col-sm-12 form-group">
                <label for="firstName" class="control-label">First Name</label>
                <div>
                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Jane">
                </div>
            </div>
            <div class="col-sm-12 form-group">
                <label for="lastName" class="control-label">Last Name</label>
                <div>
                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Doe">
                </div>
            </div>
            <div class="col-md-12 form-group">
                <label for="firstName" class="control-label">Address</label>
                <div>
                    <input type="text" class="form-control" id="firstName" placeholder="1234 Anywhere St.">
                </div>
            </div>
            <div class="col-md-12 form-group">
                <label for="lastName" class=" control-label">City</label>
                <div>
                    <input type="text" class="form-control" id="lastName" placeholder="New York City">
                </div>
            </div>
              <div class="col-md-12 form-group">
                <label for="firstName" class="control-label">State</label>
                <div>
                    <input type="text" class="form-control" id="firstName" placeholder="NY">
                </div>
            </div>
          </div>
            <div class="col-md-6">
            <div class="col-md-12 form-group">
                <label for="lastName" class="control-label">Zip</label>
                <div>
                    <input type="text" class="form-control" id="lastName" placeholder="55555">
                </div>
            </div>
            <div class="col-md-12 form-group">
                <label for="firstName" class="control-label">Phone Numer</label>
                <div>
                    <input type="text" class="form-control" id="firstName" placeholder="951-895-0000">
                </div>
            </div>
            <div class="col-md-12 form-group">
                <label for="lastName" class="control-label">Email</label>
                <div>
                    <input type="text" class="form-control" id="lastName" placeholder="JaneDoe@gmail.com">
                </div>
            </div>
            <div class="col-md-12 form-group">
                <label for="lastName" class="control-label">Pet type</label>
                <div>
                    <select class="form-control">
                        <option value="">choose</option>
                        <option value="dog">dog</option>
                        <option value="cat">cat</option>
                        <option value="rabbit">rabbit</option>
                        <option value="reptile">reptile</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <label for="lastName" class="control-label">Breed</label>
                <div>
                    <select class="form-control">
                        <option value="0">choose</option>
                        <option value="beagle">Beagle</option>
                        <option value="boxer">Boxer</option>
                        <option value="bulldog">Bull Dog</option>
                        <option value="collie">Collie</option>
                        <option value="german">German Shepherd</option>
                        <option value="golden">Golden</option>
                        <option value="Lab">Lab</option>
                        <option value="maltese">Maltese</option>
                        <option value="poodle">Poodle</option>
                        <option value="pug">Pug</option>
                        <option value="vizsla">Vizsla</option>
                        <option value="weimaraner">Weimararner</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="add" class="btn btn-default ">Add</button>
                </div>
            </div>
          </div>

        </form>
    </div>