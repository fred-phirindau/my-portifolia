<!DOCTYPE html>
<html>
    <head>
    
   
        <style>
            button{
                 border-radius: 50px; ;
            }
            #Hy{
                float:right;
           
            }
            #Hello{
                float:center;
    }
    #you{
        background-color: black;

    }
    Body{
        background-color:greenyellow;
    }
    #kill{
        width: 1000px;
        background:white;
        
        float:center;
    }

        </style>
            <script  type="text/javascript">
                function givedetails()
                {
alert("do you wants my skills ");
                }
                </script>
                
                </head>
    <body>
    <div id="you">
       <a href="contact6.php"> <button id="Hy">contact</button></a>
       <a href="skills6.php"> <button id="Hello">skills</button></a>
       <a href="fredproject.php"> <button> project</button></a>
        <hr>
    
        </div>
<?php
$servername="localhost";
$username="root";
$password="";
$database="my project fred";
$conn=mysqli_connect($servername,$username,$password,$database);
?>

        <script type="text/javascript">
             var day=new Date();
                var Hr=day.getHours();
                if(Hr>=0 && Hr<12)
                {
                    document.write("good morning");

                }

                else if(Hr==12)
                {
                    document.write("good noon");

                }
                else if(Hr>=12 && Hr<=17)
                {
                    document.write("good afternoon");

                }
                else{
                    document.write("good everning");
                }
            
            </script>
   
        </script>
      <center> <input type="text" placeholder="text" id="kill" value="searcH button" onclick="givedetails()"></center>

     <center>  <h1>  Home page of my portifolia</h1>
        <p> am website designer and grapHics designer</p>
     <iframe src="hello.php " height="800px" width="800px">my services</iframe>
     <hr> 
     <h2> for more information you can contact me at fredndaupri@ gmail.com</h2>

     </center>
     <input type="button" value="cick" onclick="greetings()">
    </body>
</html>