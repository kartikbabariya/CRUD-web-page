<?php
   include 'conn.php';
   if(isset($_POST['done'])){

      $id = $_GET['id'];
      $name = $_POST['name'];
      $enrollment = $_POST['enrollment'];
      $branch = $_POST['branch'];
      $sem = $_POST['sem'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $event = $_POST['event'];

      $q = " UPDATE techfest set id=$id, name='$name', enrollment='$enrollment' , branch='$branch' , sem='$sem' ,email='$email' , mobile='$mobile' ,event='$event' where id=$id";

      $query = mysqli_query($con,$q);

      header('location:display.php');
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="" method="post" style="max-width:500px;margin:auto">
            <h2>Update Data Form</h2>
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Student Name..." name="name">
            </div>

            <div class="input-container">
                <i class="fas fa-id-card icon"></i>
                <input class="input-field" type="text" placeholder="Student Enrollment no..." name="enrollment">
            </div>


            <div class="input-container">
                <i class="fa fa-building icon"></i>
                <input class="input-field" type="text" placeholder="Branch..." name="branch">
            </div>

            <div class="input-container">
                <i class="fa fa-layer-group icon"></i>
                <input class="input-field" type="text" placeholder="Semester..." name="sem">
            </div>

            <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input class="input-field" type="email" placeholder="Email" name="email">
            </div>

            <div class="input-container">
                <i class="fa fa-phone-alt icon"></i>
                <input class="input-field" type="text" placeholder="Contact No..." name="mobile">
            </div>

            <div class="input-container">
                <i class="fas fa-id-card icon"></i>
                <select name="event" class="input-field">
                    <option name="event" >Select Your Event</option>
                    <option name="event" >Coding</option>
                    <option name="event" >Cube Solving</option>
                    <option name="event" >Quiz</option>
                    <option name="event" >Debate</option>
                    <option name="event" >Rapid Fire</option>
                </select>

            </div>

            <button type="submit" name="done" class="btn">Update</button>
        </form>
    </div>

</body>

</html>
