<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tech Fest</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Custom stylesheet -->
        <style>
              <link rel="stylesheet" href="style.css">
        </style>
             
    

</head>

<body>
 <br>
 <h2 class="text-primary text-center">Data Of TechFest 2021 </h1><br> 
 <div class="d-flex table-data">
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Student Name</th>   
            <th>Enrollment</th>
            <th>Branch</th>
            <th>Semester</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Event</th>
            <th>Update</th>
            <th>Delete</th>   
        </tr>
        </thead>
                <tbody id="tbody">
    <?php
        include 'conn.php';
   
        $q = "SELECT * FROM `techfest`";

        $query = mysqli_query($con,$q);

        while($res = mysqli_fetch_array($query)){
    ?>
        <thead class="table table-striped table-light">
            <tr class="table-info">    
                <td> <?php echo $res['id'];?> </td>
                <td> <?php echo $res['name'];?> </td>
                <td> <?php echo $res['enrollment'];?> </td>
                <td> <?php echo $res['branch'];?></td>
                <td> <?php echo $res['sem'];?></td>
                <td> <?php echo $res['email'];?> </td>
                <td> <?php echo $res['mobile'];?></td>
                <td> <?php echo $res['event'];?></td>
                <td> <button><a class="fas fa-edit" href="update.php?id=<?php echo $res['id']; ?>" > Update</a></button></td>
                <td> <button><a class="fas fa-trash" href="delete.php?id=<?php echo $res['id']; ?>" > Delete</a></button></td>
            </tr>
           
        </thead>
       <?php
     }
     
       ?>   
        <tr>
             <td colspan=10 align="center">
                <button><a class="fas fa-plus-circle" href="insert.php"> Insert</a></button>
                </td>
            </tr>
    </table>

</body>

</html>

