<?php include "../examproject/db.php"; ?>
<?php include "../functions/function.php";?>
<?php UpdateEight();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="../b4/css/bootstrap.css">
	<script src="../b4/js/jquery.min.js.js"></script>
	<script src="../b4/js/bootstrap.js"></script>
	<script src="../b4/js/proper.js"></script>
</head>
<body>
<div class="header">
  	<h2>Change The Question Eight here</h2>
  </div>


<form method="post" action="page8.php">
<div class="input-group">
  	<div class="input-group">
  	  <label>Question</label>
  	  <input type="text" name="question" >
  	</div>
  	<div class="input-group">
  	  <label>Option One</label>
  	  <input type="text" name="option1">
  	</div>
  	<div class="input-group">
  	  <label>Option Two</label>
  	  <input type="text" name="option2">
  	</div>
  	<div class="input-group">
  	  <label>Option Three</label>
  	  <input type="text" name="option3">
  	</div>
      <div class="input-group">
  	  <label>Option Four</label>
  	  <input type="text" name="option4">
  	</div>
      <div class="input-group">
  	  <label>Correct Answer</label>
  	  <input type="text" name="correctans">
  	</div>
	  <select name="id" id="">
	  <?php showAll_7();?>
	  </select>
  	<div class="input-group">
  	  <button type="submit" class="btn btn-outline-success" name="submit">Submit</button>
  	</div>
</div>
  </form><br>
  <p class="small text-center">Click here to select the pages </p>
  <div>
  <ul class="pagination justify-content-center">
  <li class="page-item"><a class="page-link" href="../update.php">1</a></li>
  <li class="page-item"><a class="page-link" href="page2.php">2</a></li>
  <li class="page-item"><a class="page-link" href="page3.php">3</a></li>
  <li class="page-item"><a class="page-link" href="page4.php">4</a></li>
  <li class="page-item"><a class="page-link" href="page5.php">5</a></li>
  <li class="page-item"><a class="page-link" href="page6.php">6</a></li>
  <li class="page-item"><a class="page-link" href="page7.php">7</a></li>
  <li class="page-item"><a class="page-link" href="page8.php">8</a></li>
</ul>
</div>

</p>
</body>
</html>