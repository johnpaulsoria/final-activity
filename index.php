<link rel="stylesheet" href="style.css">
<?php
    require_once('connection.php');

    if(isset($_POST['create'])){
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $religion = $_POST['religion'];
        $civilstatus = $_POST['civilstatus'];
        $LastSchoolAttended = $_POST['LastSchoolAttended'];
        $bloodtype = $_POST['bloodtype'];

        $sql = "INSERT INTO finalactivity (lastname, firstname, middlename, age, gender, address, contact, religion, civilstatus, LastSchoolAttended, bloodtype) VALUES(?,?,?,?,?,?,?,?,?,?,?)";

		$stmtinsert = $db->prepare($sql);

		$result = $stmtinsert->execute([$lastname, $firstname, $middlename, $age, $gender, $address, $contact, $religion, $civilstatus, $LastSchoolAttended, $bloodtype]);
	}
?>


<form action="index.php" method="post">
    <div class="main">
    	<h1>USER INFORMATION</h1>
        <label for="lastname">Last Name</label><br>
        <input type="text" name="lastname" id="lastname" class="input" required><br><br>

        <label for="firstname">First Name</label><br>
        <input type="text" name="firstname" id="firstname" class="input" required><br><br>

        <label for="middlename">Middle Name</label><br>
        <input type="text" name="middlename" id="middlename" class="input" required><br><br>

        <label for="age">Age</label><br>
        <input type="number" name="age" id="age" class="input" required><br><br>

        <label>Gender</label><br>
        <label for="gender">Male</label>
        <input type="radio" name="gender" id="gender" value="Male" checked>
    
        <label for="gender">Female</label>
        <input type="radio" name="gender" id="gender" value="Female" checked>
    
        <label for="gender">Others</label>
        <input type="radio" name="gender" id="gender" value="Others" checked><br><br>

        <label for="address">Address</label><br>
        <input type="text" name="address" id="address" class="input" required><br><br>

        <label for="contact">Contact Number</label><br>
        <input type="text" name="contact" id="contact" class="input" required><br><br>

        <label for="religion">Religion</label><br>
        <input type="text" name="religion" id="religion" class="input" required><br><br>

        <label for="civilstatus">Civil Status</label><br>
        <input type="text" name="civilstatus" id="civilstatus" class="input" required><br><br>

        <label for="LastSchoolAttended">Last School Attended</label><br>
        <input type="text" name="LastSchoolAttended" id="LastSchoolAttended" class="input" required><br><br>

        <label for="bloodtype">Blood Type</label><br>
        <input type="text" name="bloodtype" id="bloodtype" class="input" required><br><br>
    
        <input type="submit" name="create" class="btn" value="Submit Form">
    </div>
</form>