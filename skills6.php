<!doctype html>
<html>
    <head><title> my skills</title>
        <style>
            table{
width: 400px;
height: 400px;
     }
     h1{
        text-align:center;
     }
     div{
        background-color:black;
    }
    button{
        border-radius:50%;
    }
    body{
        background-color:blueviolet
    }
        </style>
        <div>
       <a href="index5.php"> <button> Home</button></a>
       <a href="fredproject.php"> <button>project</button></a>
       <a href="contact6.php"> <button> contact</button></a>
        <hr>
        </div>


    </head>
    
</html>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$database="my project fred";
$conn= new mysqli($servername,$username,$password,$database);
$result=mysqli_query($conn, "select*from skills");
while($row=mysqli_fetch_array($result))
{
echo  
"the achievement"."<br>".$row["achievement"]."<br>".$row["language"]."<br>";

}
?>
  

    <h1> the  list of my skills are in the table below</h1>
  <center> <table border="strong" >
        <tr>
            <th>
                name of skills
            </th>
            <th>
                where i gain the skill
            </th>
            <th> the beneficially of my skills</th>
        </tr>
        <tr>
            <td>
                programing in c
            </td>
            <td>mzuzu unirvesity</td>
            <td>kukusi company</td>
        </tr>
        <tr>
            <td> programing in python</td>
            <td> mzuzu unirvesity</td>
            <td> tikombo company</td>
        </tr>
        <td> programing in java</td>
        <td>mzuzu university</td>
        <td>4 years</td>
    </table>
    <center>
        <section> 
            <pre> Hello malawians am fred pHiri a website designer and developer  
                lets do bussiness in malawi just know about me  i started designing  websites since
                2018 wHen istarted scH00ling at mzuzu university we were given alot of projects witcH makes
                me to again alot of skills

            </pre>
        </section>
        <hr>
        <p> for more information you can contact me into my email frendaupHiri @gmail.com or my pne number wHicH is 0983340295 or </p>


</body>

</html>