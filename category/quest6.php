<?php include "../examproject/db.php";

if(isset($_POST['submit'])){
    $question = $_POST['question'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $option4 = $_POST['option4'];
    $correctans = $_POST['correctans'];

    $question = mysqli_real_escape_string($connection,$question);
    $option1 = mysqli_real_escape_string($connection,$option1);
    $option2 = mysqli_real_escape_string($connection,$option2);
    $option3 = mysqli_real_escape_string($connection,$option3);
    $option4 = mysqli_real_escape_string($connection,$option4);
    $correctans = mysqli_real_escape_string($connection,$correctans); 


    $query = "INSERT into onlineexam61(question,option1,option2,option3,option4,correctans) ";
    $query .= " VALUES ('$question','$option1','$option2','$option3','$option4','$correctans') ";

    $result = mysqli_query($connection,$query);

    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../b4/css/bootstrap.css">
    <script src="../b4/js/jquery.min.js.js"></script>
    <script src="../b4/js/bootstrap.js"></script>
    <script src="../b4/js/proper.js"></script>
</head>
<body>
<center>
<p class="display-4">Insert Questions Into the Database here !!!</p>
</center>

<div class="mx-auto" style="width:40%";>
 <form action="quest6.php" method="post">
  <div class="form-group">
    <label for="quest">Question</label>
    <input type="text" name="question" class="form-control" placeholder="Enter question">
  </div>
  <div class="form-group">
    <label for="text">Option One</label>
    <input type="text" name="option1" class="form-control" placeholder="Enter option">
  </div>
  <div class="form-group">
    <label for="text">Option Two</label>
    <input type="text" name="option2" class="form-control" placeholder="Enter option">
  </div>
  <div class="form-group">
    <label for="text">Option Three</label>
    <input type="text" name="option3" class="form-control" placeholder="Enter option">
  </div>
  <div class="form-group">
    <label for="text">Option Four</label>
    <input type="text" name="option4" class="form-control" placeholder="Enter option">
  </div>
  <div class="form-group">
    <label for="text">Correct Answer</label>
    <input type="text" name="correctans" class="form-control" placeholder="Enter Answer">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    
</div>

<p class="small text-center">Click here to select the pages </p>
  <div>
  <ul class="pagination justify-content-center">
  <li class="page-item"><a class="page-link" href="inserques1.php">1</a></li>
  <li class="page-item"><a class="page-link" href="quest2.php">2</a></li>
  <li class="page-item"><a class="page-link" href="quest3.php">3</a></li>
  <li class="page-item"><a class="page-link" href="quest4.php">4</a></li>
  <li class="page-item"><a class="page-link" href="quest5.php">5</a></li>
  <li class="page-item"><a class="page-link" href="quest6.php">6</a></li>
  <li class="page-item"><a class="page-link" href="quest7.php">7</a></li>
  <li class="page-item"><a class="page-link" href="quest8.php">8</a></li>
 
</ul>




</body>
</html>