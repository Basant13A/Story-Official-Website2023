<?php

if(isset($_POST['sub_btn'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "Subscribers_list";
    $conn = mysqli_connect($host, $user, $password, $db);

    $insert = "INSERT INTO Subscribers (Name, Email) VALUES ('$Name', '$Email')";
    if(mysqli_query($conn, $insert)){

       echo "
       <div class='organize'>
        <h3> Subscribed successfully!</h3>
        <a href='Bsmallah.html'> Go back to website</a>
       <div>";

       echo "<style>
         .organize{
            padding:100px 0px 0px 0px;
         width:100%;  
         display:flex; 
         flex-direction: column;
          align-items: center;
          margin-bottom: 0px;
         }
         .organize a{ 
            color: #381a13; 
            border: none; 
            background-color: #bd8f6c; 
            font-size: 1.3em; 
            font-weight: 600; 
            width:200px;
            text-decoration:none;
            text-align:center;
            border-radius: 35px; 
            padding: 0.5em 1em; 
            transition: transform 0.5s ease;
         }

         .organize a:hover{
            background-color:#c18d65;
            cursor: pointer;
            }

         .organize h3 {
            Font-size: 3.5em; 
            font-weight:600;
            color:#381a13;
            margin-bottom: 30px;
         }   

       </style>";  }

      else{
            echo "
       <div class='organize'>
        <h3> Subscription failed :( </h3>
        <a href='Bsmallah.html'> Go back to website</a>
       <div>";

       echo "<style>
       .organize{
       padding:100px 0px 0px 0px;
       width:100%;  
       display:flex; 
       flex-direction: column;
        align-items: center;
        margin-bottom: 0px;
       }
         .organize a{ 
            color: #381a13; 
            border: none; 
            background-color: #bd8f6c; 
            font-size: 1.3em; 
            font-weight: 600; 
            width:200px;
            text-decoration:none;
            text-align:center;
            border-radius: 35px; 
            padding: 0.5em 1em; 
            transition: transform 0.5s ease;
         }

         .organize a:hover{
            background-color:#c18d65;
            cursor: pointer;
            }
            
         .organize h2 {
            Font-size: 3.5em; 
            font-weight:600;
            color:red;
            margin-bottom: 30px;
         }   

       </style>";
    }

    mysqli_close($conn);
}

?>