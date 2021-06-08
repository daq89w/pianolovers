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
    <link rel="stylesheet" href="container.css">
    <link rel="stylesheet" href="link.css">
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
    
    
    <svg viewBox="0 0 1100 1100" fill="none" xmlns="http://www.w3.org/2000/svg" class="pianosvg">
    <g filter="url(#filter0_di)">
    <path d="M1.50001 568V333.5V0.5H1074V441C1059.5 476.5 665.5 349 583.5 709.5C501.5 1070 -11.5 1057 1.50001 568Z" fill="black"/>
    <path d="M1.50001 568V333.5V0.5H1074V441C1059.5 476.5 665.5 349 583.5 709.5C501.5 1070 -11.5 1057 1.50001 568Z" fill="url(#paint0_linear)"/>
    <path d="M1.50001 568V333.5V0.5H1074V441C1059.5 476.5 665.5 349 583.5 709.5C501.5 1070 -11.5 1057 1.50001 568Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="bevel"/>
    </g>
    <defs>
    <filter id="filter0_di" x="0.757202" y="0" width="1093.74" height="980.457" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
    <feOffset dx="10" dy="10"/>
    <feGaussianBlur stdDeviation="5"/>
    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0"/>
    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
    <feOffset dx="5" dy="10"/>
    <feGaussianBlur stdDeviation="2"/>
    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
    <feColorMatrix type="matrix" values="0 0 0 0 0.875 0 0 0 0 0.864062 0 0 0 0 0.864062 0 0 0 0.25 0"/>
    <feBlend mode="normal" in2="shape" result="effect2_innerShadow"/>
    </filter>
    <linearGradient id="paint0_linear" x1="1124.5" y1="1115.5" x2="530.5" y2="392" gradientUnits="userSpaceOnUse">
    <stop stop-color="white"/>
    <stop offset="1" stop-color="white" stop-opacity="0"/>
    </linearGradient>
    </defs>
    </svg>

    <div class="header">
        <a href="index.php"><img src="img/logo_trim.png" class="logo"></a><br>
        <b class="titlefont">Saturday Getaway</b>
    </div>


     <div class="flexbox-container">
        <div class="flexbox-item flexbox-item-1">
            <div class="link-container" onmouseover="mouseOver0()" onmouseout="mouseOut0()">
                <div class="link-text-style">
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
                <img src = "img/bronte_park_trim.png" class="link-image-style">
            </div>       
        </div>
        <div class="flexbox-item flexbox-item-2">
            <div class = "link-container" onmouseover="mouseOver1()" onmouseout="mouseOut1()">
                <div class = "link-text-style">
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
                
                <img src="img/central_island_trim.png" class="link-image-style">
            </div>        
        </div>
    </div>   
    <div class="flexbox-container">
        <div class="flexbox-item flexbox-item-1">
            <div class = "link-container" onmouseover="mouseOver2()" onmouseout="mouseOut2()">
                <div class="link-text-style">
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
                <img src="img/woodbine_trim.png" class="link-image-style">
            </div>        
        </div>
        <div class="flexbox-item flexbox-item-2">
            <div class = "link-container" onmouseover="mouseOver3()" onmouseout="mouseOut3()">
                <div class="link-text-style">
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
                
                <img src ="img/meadow_trim.png" class="link-image-style">
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