<?php

function showAll(){
    global $connection;
$query = "SELECT * FROM onlineexam ";

$result = mysqli_query($connection,$query);

if(!$result){
   die("QUERY FAILED ") . mysqli_error($connection);
}

while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo "<option id='$id'>$id</option>";
}
}

function UpdateAll(){
    global $connection;
    if(isset($_POST['submit'])){
    
        $question = $_POST['question'];
        $option1 = $_POST['option1'];
        $option2 = $_POST['option2'];
        $option3 = $_POST['option3'];
        $option4 = $_POST['option4'];
        $correctans = $_POST['correctans']; 
        $id = $_POST['id'];
    
        
    
        $question = mysqli_real_escape_string($connection,$question);
        $option1 = mysqli_real_escape_string($connection,$option1);
        $option2 = mysqli_real_escape_string($connection,$option2);
        $option3 = mysqli_real_escape_string($connection,$option3);
        $option4 = mysqli_real_escape_string($connection,$option4);
        $correctans = mysqli_real_escape_string($connection,$correctans); 
    
    
        $query = "UPDATE onlineexam SET ";
        $query .="question = '$question', ";
        $query .="option1 = '$option1', ";
        $query .="option2 = '$option2', ";
        $query .="option3 = '$option3', ";
        $query .="option4 = '$option4', ";
        $query .="correctans = '$correctans' ";
        $query .="WHERE id = $id ";
    
    
        $result = mysqli_query($connection,$query);
    
        if(!$result){
            die("QUERY FAILED " . mysqli_error($connection));
        }
    }
    
}

function showAll_1(){
    global $connection;
$query = "SELECT * FROM onlineexam2 ";

$result = mysqli_query($connection,$query);

if(!$result){
   die("QUERY FAILED ") . mysqli_error($connection);
}

while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo "<option id='$id'>$id</option>";
}
}

function UpdateTwo(){
    global $connection;
    if(isset($_POST['submit'])){
    
        $question = $_POST['question'];
        $option1 = $_POST['option1'];
        $option2 = $_POST['option2'];
        $option3 = $_POST['option3'];
        $option4 = $_POST['option4'];
        $correctans = $_POST['correctans']; 
        $id = $_POST['id'];
    
        
    
        $question = mysqli_real_escape_string($connection,$question);
        $option1 = mysqli_real_escape_string($connection,$option1);
        $option2 = mysqli_real_escape_string($connection,$option2);
        $option3 = mysqli_real_escape_string($connection,$option3);
        $option4 = mysqli_real_escape_string($connection,$option4);
        $correctans = mysqli_real_escape_string($connection,$correctans); 
    
    
        $query = "UPDATE onlineexam2 SET ";
        $query .="question = '$question', ";
        $query .="option1 = '$option1', ";
        $query .="option2 = '$option2', ";
        $query .="option3 = '$option3', ";
        $query .="option4 = '$option4', ";
        $query .="correctans = '$correctans' ";
        $query .="WHERE id = $id ";
    
    
        $result = mysqli_query($connection,$query);
    
        if(!$result){
            die("QUERY FAILED " . mysqli_error($connection));
        }
    }
}


function showAll_2(){
    global $connection;
$query = "SELECT * FROM onlineexam3 ";

$result = mysqli_query($connection,$query);

if(!$result){
   die("QUERY FAILED ") . mysqli_error($connection);
}

while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo "<option id='$id'>$id</option>";
}
}

function UpdateThree(){
    global $connection;
    if(isset($_POST['submit'])){
    
        $question = $_POST['question'];
        $option1 = $_POST['option1'];
        $option2 = $_POST['option2'];
        $option3 = $_POST['option3'];
        $option4 = $_POST['option4'];
        $correctans = $_POST['correctans']; 
        $id = $_POST['id'];
    
        
    
        $question = mysqli_real_escape_string($connection,$question);
        $option1 = mysqli_real_escape_string($connection,$option1);
        $option2 = mysqli_real_escape_string($connection,$option2);
        $option3 = mysqli_real_escape_string($connection,$option3);
        $option4 = mysqli_real_escape_string($connection,$option4);
        $correctans = mysqli_real_escape_string($connection,$correctans); 
    
    
        $query = "UPDATE onlineexam3 SET ";
        $query .="question = '$question', ";
        $query .="option1 = '$option1', ";
        $query .="option2 = '$option2', ";
        $query .="option3 = '$option3', ";
        $query .="option4 = '$option4', ";
        $query .="correctans = '$correctans' ";
        $query .="WHERE id = $id ";
    
    
        $result = mysqli_query($connection,$query);
    
        if(!$result){
            die("QUERY FAILED " . mysqli_error($connection));
        }
    }
}
function showAll_3(){
    global $connection;
$query = "SELECT * FROM exam4 ";

$result = mysqli_query($connection,$query);

if(!$result){
   die("QUERY FAILED ") . mysqli_error($connection);
}

while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo "<option id='$id'>$id</option>";
}
}

function UpdateFour(){
    global $connection;
    if(isset($_POST['submit'])){
    
        $question = $_POST['question'];
        $option1 = $_POST['option1'];
        $option2 = $_POST['option2'];
        $option3 = $_POST['option3'];
        $option4 = $_POST['option4'];
        $correctans = $_POST['correctans']; 
        $id = $_POST['id'];
    
        
    
        $question = mysqli_real_escape_string($connection,$question);
        $option1 = mysqli_real_escape_string($connection,$option1);
        $option2 = mysqli_real_escape_string($connection,$option2);
        $option3 = mysqli_real_escape_string($connection,$option3);
        $option4 = mysqli_real_escape_string($connection,$option4);
        $correctans = mysqli_real_escape_string($connection,$correctans); 
    
    
        $query = "UPDATE exam4 SET ";
        $query .="question = '$question', ";
        $query .="option1 = '$option1', ";
        $query .="option2 = '$option2', ";
        $query .="option3 = '$option3', ";
        $query .="option4 = '$option4', ";
        $query .="correctans = '$correctans' ";
        $query .="WHERE id = $id ";
    
    
        $result = mysqli_query($connection,$query);
    
        if(!$result){
            die("QUERY FAILED " . mysqli_error($connection));
        }
    }
}
function showAll_4(){
    global $connection;
$query = "SELECT * FROM onlineexam5 ";

$result = mysqli_query($connection,$query);

if(!$result){
   die("QUERY FAILED ") . mysqli_error($connection);
}

while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo "<option id='$id'>$id</option>";
}
}

function UpdateFive(){
    global $connection;
    if(isset($_POST['submit'])){
    
        $question = $_POST['question'];
        $option1 = $_POST['option1'];
        $option2 = $_POST['option2'];
        $option3 = $_POST['option3'];
        $option4 = $_POST['option4'];
        $correctans = $_POST['correctans']; 
        $id = $_POST['id'];
    
        
    
        $question = mysqli_real_escape_string($connection,$question);
        $option1 = mysqli_real_escape_string($connection,$option1);
        $option2 = mysqli_real_escape_string($connection,$option2);
        $option3 = mysqli_real_escape_string($connection,$option3);
        $option4 = mysqli_real_escape_string($connection,$option4);
        $correctans = mysqli_real_escape_string($connection,$correctans); 
    
    
        $query = "UPDATE onlineexam5 SET ";
        $query .="question = '$question', ";
        $query .="option1 = '$option1', ";
        $query .="option2 = '$option2', ";
        $query .="option3 = '$option3', ";
        $query .="option4 = '$option4', ";
        $query .="correctans = '$correctans' ";
        $query .="WHERE id = $id ";
    
    
        $result = mysqli_query($connection,$query);
    
        if(!$result){
            die("QUERY FAILED " . mysqli_error($connection));
        }
    }
}
function showAll_5(){
    global $connection;
$query = "SELECT * FROM onlineexam6 ";

$result = mysqli_query($connection,$query);

if(!$result){
   die("QUERY FAILED ") . mysqli_error($connection);
}

while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo "<option id='$id'>$id</option>";
}
}

function UpdateSix(){
    global $connection;
    if(isset($_POST['submit'])){
    
        $question = $_POST['question'];
        $option1 = $_POST['option1'];
        $option2 = $_POST['option2'];
        $option3 = $_POST['option3'];
        $option4 = $_POST['option4'];
        $correctans = $_POST['correctans']; 
        $id = $_POST['id'];
    
        
    
        $question = mysqli_real_escape_string($connection,$question);
        $option1 = mysqli_real_escape_string($connection,$option1);
        $option2 = mysqli_real_escape_string($connection,$option2);
        $option3 = mysqli_real_escape_string($connection,$option3);
        $option4 = mysqli_real_escape_string($connection,$option4);
        $correctans = mysqli_real_escape_string($connection,$correctans); 
    
    
        $query = "UPDATE onlineexam6 SET ";
        $query .="question = '$question', ";
        $query .="option1 = '$option1', ";
        $query .="option2 = '$option2', ";
        $query .="option3 = '$option3', ";
        $query .="option4 = '$option4', ";
        $query .="correctans = '$correctans' ";
        $query .="WHERE id = $id ";
    
    
        $result = mysqli_query($connection,$query);
    
        if(!$result){
            die("QUERY FAILED " . mysqli_error($connection));
        }
    }
}

function showAll_6(){
    global $connection;
$query = "SELECT * FROM onlineexam7 ";

$result = mysqli_query($connection,$query);

if(!$result){
   die("QUERY FAILED ") . mysqli_error($connection);
}

while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo "<option id='$id'>$id</option>";
}
}

function UpdateSeven(){
    global $connection;
    if(isset($_POST['submit'])){
    
        $question = $_POST['question'];
        $option1 = $_POST['option1'];
        $option2 = $_POST['option2'];
        $option3 = $_POST['option3'];
        $option4 = $_POST['option4'];
        $correctans = $_POST['correctans']; 
        $id = $_POST['id'];
    
        
    
        $question = mysqli_real_escape_string($connection,$question);
        $option1 = mysqli_real_escape_string($connection,$option1);
        $option2 = mysqli_real_escape_string($connection,$option2);
        $option3 = mysqli_real_escape_string($connection,$option3);
        $option4 = mysqli_real_escape_string($connection,$option4);
        $correctans = mysqli_real_escape_string($connection,$correctans); 
    
    
        $query = "UPDATE onlineexam7 SET ";
        $query .="question = '$question', ";
        $query .="option1 = '$option1', ";
        $query .="option2 = '$option2', ";
        $query .="option3 = '$option3', ";
        $query .="option4 = '$option4', ";
        $query .="correctans = '$correctans' ";
        $query .="WHERE id = $id ";
    
    
        $result = mysqli_query($connection,$query);
    
        if(!$result){
            die("QUERY FAILED " . mysqli_error($connection));
        }
    }
}

function showAll_7(){
    global $connection;
$query = "SELECT * FROM onlineexam8 ";

$result = mysqli_query($connection,$query);

if(!$result){
   die("QUERY FAILED ") . mysqli_error($connection);
}

while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo "<option id='$id'>$id</option>";
}
}

function UpdateEight(){
    global $connection;
    if(isset($_POST['submit'])){
    
        $question = $_POST['question'];
        $option1 = $_POST['option1'];
        $option2 = $_POST['option2'];
        $option3 = $_POST['option3'];
        $option4 = $_POST['option4'];
        $correctans = $_POST['correctans']; 
        $id = $_POST['id'];
    
        
    
        $question = mysqli_real_escape_string($connection,$question);
        $option1 = mysqli_real_escape_string($connection,$option1);
        $option2 = mysqli_real_escape_string($connection,$option2);
        $option3 = mysqli_real_escape_string($connection,$option3);
        $option4 = mysqli_real_escape_string($connection,$option4);
        $correctans = mysqli_real_escape_string($connection,$correctans); 
    
    
        $query = "UPDATE onlineexam8 SET ";
        $query .="question = '$question', ";
        $query .="option1 = '$option1', ";
        $query .="option2 = '$option2', ";
        $query .="option3 = '$option3', ";
        $query .="option4 = '$option4', ";
        $query .="correctans = '$correctans' ";
        $query .="WHERE id = $id ";
    
    
        $result = mysqli_query($connection,$query);
    
        if(!$result){
            die("QUERY FAILED " . mysqli_error($connection));
        }
    }
}

