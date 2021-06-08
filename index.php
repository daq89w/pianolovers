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
        <b class="titlefont">Piano Lovers</b>
    </div>

    <div class="flexbox-container">
        <div class="flexbox-item flexbox-item-1">
            <div class="link-container">
                <b class="link-text-style">Mia's Music Studio</b>
                <a href="studio.php"><img src="img/piano.jpg" class = "link-image-style"></a>
            </div>
        </div>
        <div class="flexbox-item flexbox-item-2">
            <div class="link-container">
                <b class="link-text-style">Saturday Getaway</b>
                <a href="saturdaygetaway.php"><img src="img/saturday_getaway.jpg" class = "link-image-style"></a>
            </div>
        </div>
    </div>

</div>



</body>
</html>