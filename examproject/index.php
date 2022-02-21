<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">
    


    <h1 class="p">Preliminary</h1>
    <form action="exam.php">

    <input type="submit" value="Click Here">
    
    </form>


      <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="examproject/index.php?logout='1'" style="color: white;">logout</a> </p>
    <?php endif ?>

</body>
</html>