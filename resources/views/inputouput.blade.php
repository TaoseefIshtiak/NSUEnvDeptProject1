<?php

// $name = $username = $password = $retypepassword = $gender = $skill = $contact = $email = $university = $skill ="";
// $skills;

// $nameErr = $usernameErr = $passwordErr = $genderErr = $skillErr = $contactErr = $emailErr = $universityErr = $skillErr = "";



// if (empty($_POST['name'])) {
//   $nameErr = "*name is missing";
// } else {
//   $name = test_input($_POST['name']);
//   if (!preg_match("/^[a-zA-Z ]*$/",$name)){
//      $nameErr = "*Please submit only letters and whitespace";
//   }
// }

// if (empty($_POST['username'])) {
//   $usernameErr = "*Username is missing";
// } else {
//   $username = test_input($_POST['username']);
//   if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)){
//      $usernameErr = "*Please submit only letters and numbers";
//   }
// }

// if (empty($_POST['password']) || empty($_POST['retypepassword'])) {
//   $passwordErr = "*Please enter your password in both field";
// } else {
//   $password = test_input($_POST['password']);
//   $retypepassword = test_input($_POST['retypepassword']);
//   if (strcmp($password,$retypepassword)){
//      $passwordErr = "*Sorry,password did not match";
//   }
// }

// if (empty($_POST['gender'])) {
//   $genderErr = "*Put your gender";
// } else {
//   $gender = test_input($_POST["gender"]);
// }



// if (empty($_POST['contact'])) {
//   $contactErr = "*Give your Contact number";
// } else {
//   $contact = test_input($_POST['contact']);
//   if (!preg_match("/^[0-9][0-9]*$/",$contact)){

//      $contactErr = "*Invalid Number";
//   }
// }

// if (empty($_POST["email"])) {
//   $emailErr = "*Email is needed";
// } else {
//   $email = test_input($_POST["email"]);
//   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $emailErr = "*Invalid email format";
//   }
// }

// if (empty($_POST['university'])) {
//   $universityErr = "*University is required";
// } else {
//   $university = test_input($_POST["university"]);
// }




// function test_input($value)
// {
//   $value = trim($value);
//   $value = stripslashes($value);
//   $value = htmlspecialchars($value);
//   return $value;
// }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>welcome to user form</title>
    <link rel="stylesheet" href="stylex.css">
  </head>

  <body>
      <form class="stylex" name="Form" action="inputouput.php" method="post">
          <h1>FORM VALIDATION:</h1>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name"><span class="error"></span><br>

          <label for="username">Username:</label>
          <input type="text" id="username" name="username"><span class="error"></span><br>

          <label for="password">Password:</label>
          <input type="password" name="password" id="password"><span class="error"></span><br>

          <label for="retypepassword">Re-type Password:</label>
          <input type="password" name="retypepassword" id="retypepassword"><br

          <label>Gender:</label><span class="error"></span><br>
          <input type="radio" id="male" name="gender" value="male">
          <label for="male">Male</label><br>
          <input type="radio" id="female" name="gender" value="female">
          <label for="female">Female</label><br>
          <input type="radio" id="other" name="gender" value="other">
          <label for="other">Other</label><br>

          Skill:<br>
          <input type="checkbox" id="skill1" name="skills[]" value="Java">
          <label for="skill1"> Java</label><br>
          <input type="checkbox" id="skill2" name="skills[]" value="Android">
          <label for="skill2"> Android</label><br>
          <input type="checkbox" id="skill3" name="skills[]" value="Ruby">
          <label for="skill3"> Ruby</label><br>
          <input type="checkbox" id="skill4" name="skills[]" value=".Net">
          <label for="skill4"> .Net</label><br>



        <label for="contact">Contact no</label>
        <input type="number" id="contact" name="contact" ><span class="error"></span><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><span class="error"></span><br>

        <label for="university">University:</label>
            <select id="university" name="university">
                <option value="">Please select university</option>
                <option value="NSU">NSU</option>
                <option value="AIUB">AIUB</option>
            </select><span class="error"><?php echo  $universityErr ?></span>
            <br>


      <input type="submit" name="submit" value="submit"><br>
      <input type="reset">
    </form>

    <?php


    // if (empty($nameErr)) {
    //   echo "Name: " .$name."<br>";
    // }

    // if (empty($usernameErr)) {
    //   echo "Userame: " .$username."<br>";
    // }

    // if (empty($passwordErr)) {
    //   echo "Password: " .$password."<br>";
    // }

    // if (empty($genderErr)) {
    //   echo "Gender: " .$gender."<br>";
    // }

    // foreach($_POST['skills'] as $skill) {
    // echo $skill." " ;
    // }
    // echo "<br>";

    // if (empty($contactErr)) {
    //   echo "Contact: " .$contact."<br>";
    // }

    // if (empty($emailErr)) {
    //   echo "Email: " .$email."<br>";
    // }

    // if (empty($universityErr)) {
    //   echo "University: " .$university."<br>";
    // }

     ?>


  </body>
</html>
