
<?php
$pageTitle = "Grooming";
$nameErr = " ";
include('inc/header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstName"])) {
        $nameErr = "Name is required";
    } else {
        $firstName = ($_POST["firstName"]);
    }
}
?>

<div class="row groom">
    <div class="col-md-12">
        <h1>We are pleased announce that we offer grooming services! <?php echo $firstName;?></h1>
    </div>
    <div class="col-md-offset-6 col-md-6">
        <h2 align="center">Get Groomed</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-horizontal">
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">First Name</label>
                <span class="error">* <?php echo $nameErr;?></span>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Jane">
                </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Doe">
                </div>
            </div>
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="firstName" placeholder="1234 Anywhere St.">
                </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">City</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="lastName" placeholder="New York">
                </div>
            </div>
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">State</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="firstName" placeholder="NY">
                </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">Zip</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="lastName" placeholder="55555">
                </div>
            </div>
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">Phone Numer</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="firstName" placeholder="951-895-0000">
                </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="lastName" placeholder="JaneDoe@gmail.com">
                </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">Pet type</label>
               <div class="col-sm-6">
                   <select class="form-control">
                       <option value="">choose</option>
                       <option value="dog">dog</option>
                       <option value="cat">cat</option>
                       <option value="rabbit">rabbit</option>
                       <option value="reptile">reptile</option>
                   </select>
               </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">Breed</label>
                <div class="col-sm-6">
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
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="submit" class="btn btn-default">Sign in</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!--<div class="groomer">-->
<!--  <h3>GET GROOMED!</h3>-->
<!--  <h4 align="center">Sandy's Pet Shop is pleased announce that we offer grooming services! -->
<!--  <br>Simply fill out the form below and you will be contacted with our first available day and time! </h4>-->
<!--           -->
<!---->
<!--    <div class="contactright">-->
<!--<form id="groom" name="groom"action="grooming.php" method="post" >-->
<!--       <p align="center">--><?php //echo "$message"; ?><!-- </p>-->
<!---->
<!--  <table>-->
<!--      <tr>-->
<!--        <th>-->
<!--            <label for="firstname">First Name:</label>-->
<!--            </th>-->
<!--        -->
<!--          <td>-->
<!--               <input type="text" name="firstname" id="FirstName" value="--><?php //echo htmlspecialchars($firstname);?><!--" -->
<!--              <span> --><?php //echo $firstname_error; ?><!--</span>   -->
<!--          </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <th>-->
<!--            <label for="lastname">Last Name:</label>-->
<!--            </th>-->
<!--        -->
<!--          <td>-->
<!--               <input type="text" name="lastname" id="LastName" value="--><?php //echo htmlspecialchars($lastname);?><!--"-->
<!--               <span> --><?php //echo $lastname_error; ?><!--</span>   -->
<!--          </td>-->
<!--        </tr>       -->
<!---->
<!--        <tr>-->
<!--          <th>-->
<!--            <label for="address">Address:</label>-->
<!--            </th>-->
<!--        -->
<!--          <td>-->
<!--               <input type="text" name="address" id="Address" value="--><?php //echo htmlspecialchars($address);?><!--">  -->
<!--                <span> --><?php //echo $address_error; ?><!--</span>    -->
<!--          </td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--          <th>-->
<!--            <label for="city">City:</label>-->
<!--            </th>-->
<!--        -->
<!--          <td>-->
<!--               <input type="text" name="city" id="City" value="--><?php //echo htmlspecialchars($city);?><!--">   -->
<!--               <span> --><?php //echo $city_error; ?><!--</span>  -->
<!--          </td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--          <th>-->
<!--            <label for="state">State:</label>-->
<!--            </th>-->
<!--        -->
<!--          <td>-->
<!--               <input type="text" name="state" id="State" value="--><?php //echo htmlspecialchars($state);?><!--">    -->
<!--               <span > --><?php //echo $state_error; ?><!--</span> -->
<!--          </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <th>-->
<!--            <label for="email">Zip:</label>-->
<!--            </th>-->
<!--        -->
<!--          <td>-->
<!--               <input type="text" name="zip" id="Zip" value="--><?php //echo htmlspecialchars($zip);?><!--"> -->
<!--                <span style="color:red;"> --><?php //echo $zip_error; ?><!--</span>    -->
<!--          </td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--          <th>-->
<!--            <label for="phone">Phone Number:</label>-->
<!--            </th>-->
<!--        -->
<!--          <td>-->
<!--               <input type="text" name="phonenumber" id="PhoneNumber" value="--><?php //echo htmlspecialchars($phonenumber);?><!--">-->
<!--                <span style="color:red;"> --><?php //echo $phonenumber_error; ?><!--</span>     -->
<!--          </td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--          <th>-->
<!--            <label for="email">Email:</label>-->
<!--            </th>-->
<!--        -->
<!--          <td>-->
<!--               <input type="text" name="email" id="Email" value="--><?php //echo htmlspecialchars($email);?><!--"> -->
<!--                 <span style="color:red;"> --><?php //echo $email_error; ?><!--</span>  -->
<!--          </td>-->
<!--        </tr>-->
<!---->
<!---->
<!--             <th>-->
<!--            <label for="pet">Pet Type:</label>-->
<!--        </th>-->
<!---->
<!--        <td>-->
<!--         <select id="pet" name="pet">-->
<!--        <option value="">choose</option>-->
<!--        <option value="dog">dog</option>-->
<!--        <option value="cat">cat</option>-->
<!--        <option value="rabbit">rabbit</option>-->
<!--        <option value="reptile">reptile</option>-->
<!--        </select>-->
<!--        </td>-->
<!--        </tr>-->
<!--<span style="color:red;"> --><?php //echo $breed_error; ?><!--</span>-->
<!---->
<!--           <tr id="breed"> -->
<!--         <th>-->
<!--            <label for="breed">Breed:</label><p id="message"></p>-->
<!--        </th>-->
<!---->
<!--        <td>-->
<!--         <select id="breedtype" name="breed">-->
<!--        <option value="0">choose</option>-->
<!--         <option value="beagle">Beagle</option>-->
<!--         <option value="boxer">Boxer</option>-->
<!--          <option value="bulldog">Bull Dog</option>-->
<!--          <option value="collie">Collie</option>-->
<!--          <option value="german">German Shepherd</option>-->
<!--           <option value="golden">Golden</option>-->
<!--           <option value="Lab">Lab</option>-->
<!--          <option value="maltese">Maltese</option>-->
<!--           <option value="poodle">Poodle</option>-->
<!--          <option value="pug">Pug</option>-->
<!--           <option value="vizsla">Vizsla</option>-->
<!--          <option value="weimaraner">Weimararner</option>-->
<!---->
<!--        </select>-->
<!--        </td>-->
<!--        </tr>-->
<!--  -->
<!---->
<!--           <tr> -->
<!-- -->
<!--         <tr>-->
<!--          <th>-->
<!--            <label for="petname">Pet Name:</label>-->
<!--            </th>-->
<!--        -->
<!--          <td>-->
<!--               <input type="text" name="petname" id="Petname" value="--><?php //echo htmlspecialchars($petname);?><!--"> -->
<!--                <span style="color:red;"> --><?php //echo $petname_error; ?><!--</span>    -->
<!--          </td>-->
<!--        </tr>-->
<!---->
<!--           <tr>-->
<!--          <th>-->
<!--            <label for="petbirthday">Birthdate:</label>-->
<!--            </th>-->
<!--        -->
<!--          <td>-->
<!--               <input type="text" name="petbirthday" id="Petage" value="--><?php //echo $petbirthday_error; ?><!--"> -->
<!--                <span style="color:red;"> --><?php //echo $petage_error; ?><!--</span>    -->
<!--          </td>-->
<!--        </tr>-->
<!---->
<!--             <tr>-->
<!--          <th>-->
<!--            <label for="neutered">Neutered/Spayed:</label>-->
<!--            </th>-->
<!--        -->
<!--          <td>-->
<!--               <input type="checkbox" name="neutered" value="3"> Yes-->
<!--                <br> -->
<!--                <input type="checkbox" name="neutered" value="2"> No-->
<!--               -->
<!--          </td>-->
<!--        </tr>-->
<!---->
<!---->
<!--        </table>-->
<!--        -->
<!--  <input type="submit" id="submit" name="submit" value="Submit">-->
<!---->
<!--</form>-->
<!--</div>-->
<!--  <div class="contactleft"><img width="500px"src="http://i3.ypcdn.com/blob/ba20d39bac179fd74643172151fb3e791aa4e685"></div>-->
<!---->
<!--</div>-->
<?php include('inc/footer.php'); ?>
<script type="text/javascript" src="grooming.js"></script>





