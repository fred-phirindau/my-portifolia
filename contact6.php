<!DOCTYPE html>
<html>
    <head>
        <style>
            section{
                text-align: center;
                font-size: 12px;
                font-family: times new roman;
            }
            a button{
                border-radius:50%;

            }
            body{
                background-color:greenyellow;
            }
            div{
                background-color:black;
           
     }
     #tym{
        float:right;
     }
        </style>
    <title> my portifolia</title>
    <div>
 <a href="index5.php"><button id="tym">home</button></a>
     <a href="fredproject.php" > <button>project  <button></a> 
      <a href="skills6.php"><button >skills</button></a>
        <hr>
     </div>
     <script>
        function validate()
        {
            var name=document.myform.name.value;
            var password=document.myform.password.value;
            var surname=document.myform.surname.value;
            if(name==null|| name=="")
            {
                alert("name can`t be blank");
                return false;
           
            }
else if(password.length<5)
{
    alert("password must be atleast 6 CHaracter");
    return false;
}
else if(surname==null||surname=="")
{
alert("please enter you surname");
return false;
}


        }
     </script>
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
    <pre> ms fred stay at lilongwe near anew lilongwe bridge
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
          fredndaupri@gmail.com   
        </p>
    </section>
      <section>      
    <h2> fill your details in this form contact with me</h2>
    <form name="myform" action="hello.php" onsubmit="return validate()">
        <label> surname</label>
        <br>
        <input type="text" name="surname">
        <br>
        <label> first name</label>
        <br>
        <input type="text" name="name">
        <br>
        <label> date of birth</label>
        <br>
        <input type="number">
        <br>
        <label>district</label>
        <br>
        <input type="text">
        <br>
        <label > enter your phone number</label>
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit">
    </form>
    <hr>
    <p> thank you for contact fred you problem will be held accordingly</p>

            
</body> 
</html>