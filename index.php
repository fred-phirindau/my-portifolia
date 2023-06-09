<!DOCTYPE html>
    
<html>
        
<head>
    
        <a href="fredproject.php"> <button style="float: rig;">project</button></a>
        <a href="skills.php"><button style="float: right;">skills</button></a>
        <a href="details.php"><button>contacts</button></a> 
        <hr> 
        <style>
          img{
            background-image: green;
        
          }
          body{
            background-color:yellow;

          }
          p{
            text-align :center;
            color:skyblue;
          
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
?>
  <script>
    function givetime()    {
      const time=new Date().gethours();
let greeting;      
if(time<0)
      {
       greeting =  document.write(" goodmornig");
      }
      else{
       greeting= document.write("good everning");
         
      }
}

</script>

<h1 style="text-align: center;"> my Home page</h1>
<P > welcome to real website designer </P>
<p> fred phiri is website designer he started design  website since 1999</p>

  <input type="button" onclick="givetime()"  float="right">
  <input type="button" onclick="givetime()"S>
</body>
</html>