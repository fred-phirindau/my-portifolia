<!DOCTYPE html>
<htmlhead >
    <title> my portifolia</title>
    <nav style="height="20px""> 
 <a href="index.php"><button  border-radius="15px">home</button><a>
        

        <a href="details.php">  <button style="float:right;">contacts</button></a>
        <a href="skills.php"><button >skills</button></a>
        <hr>
    </nav>
    <style>
       p {
        text-align: center;
        font: size 15px;
        color:rgb(255, 0, 102)     
       
    }
    h1{
        text-align:center;
        color:blue;
    }
    body{
        background-color: rgb(2, 24, 84);
    }
    </style>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$database="my project fred";
$conn= new mysqli($servername,$username,$password,$database);
$result=mysqli_query($conn, "select*from project");
while($row=mysqli_fetch_array($result))
{
echo $row["name"].$row["yearofpublication"]."<br>";
}
?>

    <h1 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font: size 17px;text-align:center ;color:rgb(26, 172, 230)"> my projects</h1>
    <p> one of my project i designed aunt juliet website</p>
    
    </p>
    <br>
    <center><img src="Screenshot (1).png" height="400px" ></center>
    <div>
        <h1> i designed mr josepH website</h1>
       <center><img src="Screenshot (5).png" height="400px"></center>
    </div>
    <hr>
  <p> designing and implementing website is my habits so hire me to complish you you work</p> 
</body> 
</html>