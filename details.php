<!DOCTYPE html>
<html>
    <head>
        <style>
            section{
                text-align: center;
                font-size: 12px;
                font-family: times new roman;
            }
            body{
                background-color: rgb(187, 127, 255);
            }
        </style>
    <title> my portifolia</title>
    <nav style="height="20px""> 
 <a href="index.php"><button>home</button><a>
     <a href="fredproject.phps" > <button style="float:right;">project</  <button></a> 
      <a href="skills.php"><button >skills</button></a>
        <hr>
    </nav>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$database="my project fred";
$conn= new mysqli($servername,$username,$password,$database);
$result=mysqli_query($conn, "select*from contanct");
while($row=mysqli_fetch_array($result))
{
echo $row["phone_number"].$row["adress"].$row["email"]."<br>";
}
?>
    <h1 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font: size 17px;text-align:center ;color:rgb(26, 172, 230)"> contact details</h1>
    <section>
    <h2> location</h2>
    <pre> ms Hazel stay at lilongwe near anew lilongwe bridge
        my office is near the district commisioner office
        bandawe
        p.o box 188
        dedza
    </pre>

        </section>
        <section>
    <h2>phones number and emails
    </h2>
    <p> whatsapp number:
        0880050326
        0888699023</p>
        <br>
        <p> my emails:
          kusaukaHazel@gmail.com   
        </p>
    </section>
      <section>      
    <h2> fill your details in this form contact with me</h2>
    <form>
        <label> surname</label>
        <br>
        <input type="text">
        <br>
        <label> first name</label>
        <br>
        <input type="text">
        <br>
        <label> date of birth</label>
        <br>
        <input type="number">
        <br>
        <label>district</label>
        <br>
        <input type="text">
        <br>
        <label> enter your phone number</label>
        <br>
        <input type="number">
        <br>
        <input type="submit">
    </form>
    <hr>
    <p> thank you for contact ms Hazel you problem will be held accordingly</p>

            
</body> 
</html>