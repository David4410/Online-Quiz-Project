<?php include "db.php";

$query = "SELECT * FROM onlineexam5";

$result = mysqli_query($connection, $query);


echo "<center>";
echo "<h1> QUIZ QUESTIONS </h1>";
echo "<h2> Choose Anyone of the Answers. </h2>";
echo "<h3> Question 5. </h3>";
echo "<hr>";

if(mysqli_num_rows($result) > 0){

echo "<table>";
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>". $row['id'].")". $row['question']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><input type='radio' id='option1' name=".$row['id']." style='font-size:50px'; class='radoptions' value=".$row['option1'].">".$row['option1']."";
    echo "<br>";
    echo "<input type='radio' id='option2' name=".$row['id']." class='radoptions' value=".$row['option2'].">".$row['option2']."";
    echo "<br>";
    echo "<input type='radio' id='option3' name=".$row['id']." class='radoptions' value=".$row['option3'].">".$row['option3']."";
    echo "<br>";
    echo "<input type='radio' id='option4' name=".$row['id']." class='radoptions' value=".$row['option4'].">".$row['option4']."";
    echo "<br>";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><span id='span1' class='radoptions' style='color:green; display:none';><hr><b> Correct Answer is : ".$row['correctans']."</b><hr></span></td>";
    echo "</tr>";
}
echo "</table>";
}

mysqli_close($connection);
?>
<button id="but1" type="button" onclick="displayname();">Submit</button>

<label id="labelmsg"></label>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>


<script>
$(document).ready(function(){
      $("#but1").click(function(){
          $(".radoptions").show();
          $(".radoptions").attr("disabled",true);
          $("#but1").attr("disabled",true);
      });
});

function displayname(){
    document.getElementById("labelmsg").innerHTML="";
    var results = document.getElementsByTagName('input');
    for(i=0; i<results.length; i++){
        if(results[i].type=="radio"){
            if(results[i].checked)
            {
                document.getElementById("labelmsg").innerHTML +="Q"+results[i].name+")"+" Your Selected Answer is : "+ results[i].value+"<br>";
            }
        }

    }
}




</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form action="http://localhost/examproject/quartr.php" method="POST">
   <input type="submit" value="Next" class="a">
   </form>

   Time : <span id="timer"></span>
   
   <script src="main.js"></script>
</body>
</html>