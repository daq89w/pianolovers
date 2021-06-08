<?php
    //Start the session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Saturday Getaway</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
<?php
    $servername = "sql200.epizy.com";
    $username = "epiz_28395127";
    $password = "w3n44CCHQutE6qM";
    $dbname = "epiz_28395127_testing";

    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    $event_cnt = 0;
    $event = "SELECT eventname, date FROM MyEvents ORDER BY date ASC";
    $getevent = $conn->query($event);
    if ($getevent->num_rows > 0){    
        while($row = $getevent->fetch_assoc()){
            $event_arr[$event_cnt] = $row["eventname"];
            $event_data_arr[$event_cnt] = $row["date"];
            $event_cnt = $event_cnt + 1; 
        }
    }
?>

<div class="main-content">
    <a href="index.php"><img src="img/logo_trim.png" class="logo"></a><br>

        <svg viewBox="0 0 800 800" fill="none" xmlns="http://www.w3.org/2000/svg" class="pianosvg">
        <path d="M1.00001 1H860V244.958H1.00001V1Z" fill="black"/>
        <path d="M435 567.755C306.888 794.76 1.00001 670.396 1 423.042L1.00001 244.958H860V366.193C636.5 381.812 554 356.896 435 567.755Z" fill="black"/>
        <path d="M860 244.958V1H1.00001V244.958M860 244.958H1.00001M860 244.958V366.193C636.5 381.812 554 356.896 435 567.755C306.888 794.76 1.00001 670.396 1 423.042L1.00001 244.958" stroke="black"/>
        </svg>

    <div class="header">
        <b class="titlefont">Saturday Getaway</b>
    </div>

    <div class="content">



        <div class="container">


            <div class="container-sub" onmouseover="mouseOver0()" onmouseout="mouseOut0()">
                <div class="event-info">
                    <?php   
                            if($event_arr[0] === null){
                                echo "<b>Event coming soon...</b>";
                            }else{
                                echo $event_data_arr[0]."</br>"; 
                                echo $event_arr[0]."</br>"; 
                        
                                $query[0] = "SELECT id FROM $event_arr[0]";
                                $result[0] = mysqli_query($conn, $query[0]);
                                $row[0] = mysqli_num_rows($result[0]);
                                echo "Attendance: ".$row[0]."</br>";                                 
                            }
                    ?>
                </div>
                <?php
                    if($event_arr[0] !== null){
                        echo 
                        "<form method='POST' action = 'form_event.php'>
                        <input type='hidden' name='eventnum' value='0'>
                        <input type='submit' value='Sign-Up' class='signuplogo' id='signuplogo0'>
                        </form>"; 
                    }
                ?>
                <img src = "img/bronte_park_trim.png" class="eventpic">
            </div>
        </div>

        <div class="container">
            <div class = "container-sub" onmouseover="mouseOver1()" onmouseout="mouseOut1()">
                <div class = "event-info">
                    <?php 
                            if($event_arr[1] === null){
                                echo "<b>Event coming soon...</b>";
                            }else{
                                echo $event_data_arr[1]."</br>";
                                echo $event_arr[1]."</br>";
                     
                                $query[1] = "SELECT id FROM $event_arr[1]";
                                $result[1] = mysqli_query($conn, $query[1]);
                                $row[1] = mysqli_num_rows($result[1]);
                                echo "Attendance: ".$row[1]."</br>";                                 
                            }
                    ?>
                </div>
                <?php
                    if($event_arr[1] !== null){
                        echo 
                        "<form method='POST' action = 'form_event.php'>
                        <input type='hidden' name='eventnum' value='1'>
                        <input type='submit' value='Sign-Up' class='signuplogo' id='signuplogo1'>
                        </form>";
                    }
                ?>
                
                <img src="img/central_island_trim.png" class="eventpic">
            </div>
        </div>

        <div class="container">
            <div class = "container-sub" onmouseover="mouseOver2()" onmouseout="mouseOut2()">
                <div class="event-info">
                    <?php 
                            if($event_arr[2] === null){
                                echo "<b>Event coming soon...</b>";
                            }else{
                                echo $event_data_arr[2]."</br>";
                                echo $event_arr[2]."</br>";
                        
                                $query[2] = "SELECT id FROM $event_arr[2]";
                                $result[2] = mysqli_query($conn, $query[2]);
                                $row[2] = mysqli_num_rows($result[2]);
                                echo "Attendance: ".$row[2]."</br>";                                 
                            }
                    ?>
                </div>
                <?php
                    if($event_arr[2] !== null){
                        echo 
                        "<form method='POST' action = 'form_event.php'>
                        <input type='hidden' name='eventnum' value='2'>
                        <input type='submit' value='Sign-Up' class='signuplogo' id='signuplogo2'>
                        </form>";
                    }
                ?>
                <img src="img/woodbine_trim.png" class="eventpic">
            </div>
        </div>

        <div class="container">
            <div class = "container-sub" onmouseover="mouseOver3()" onmouseout="mouseOut3()">
                <div class="event-info">
                    <?php
                            if($event_arr[3] === null){
                                echo "<b>Event coming soon...</b>";
                            }else{
                                echo $event_data_arr[3]."</br>";
                                echo $event_arr[3]."</br>";
                            
                                $query[3] = "SELECT id FROM $event_arr[3]";
                                $result[3] = mysqli_query($conn, $query[3]);
                                $row[3] = mysqli_num_rows($result[3]);
                                echo "Attendance: ".$row[3]."</br>";                                 
                            }
                    ?>
                </div> 
                <?php   
                    if($event_arr[3] !== null){
                        echo 
                        "<form method='POST' action = 'form_event.php'>
                        <input type='hidden' name='eventnum' value='3'>
                        <input type='submit' value='Sign-Up' class='signuplogo' id='signuplogo3'>
                        </form>";
                    }
                ?>
                
                <img src ="img/meadow_trim.png" class="eventpic">
            </div>
        </div>
    </div>
</div>

<script>
    function mouseOver0(){
        document.getElementById('signuplogo0').style.display = "block";
    }
    function mouseOut0(){
        document.getElementById('signuplogo0').style.display = "none";
    }

    function mouseOver1(){
        document.getElementById('signuplogo1').style.display = "block";
    }
    function mouseOut1(){
        document.getElementById('signuplogo1').style.display = "none";
    }

    function mouseOver2(){
        document.getElementById('signuplogo2').style.display = "block";
    }
    function mouseOut2(){
        document.getElementById('signuplogo2').style.display = "none";
    }

    function mouseOver3(){
        document.getElementById('signuplogo3').style.display = "block";
    }
    function mouseOut3(){
        document.getElementById('signuplogo3').style.display = "none";
    }
</script>
</body>
</html>