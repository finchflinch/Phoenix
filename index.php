<!DOCTYPE html>
<html>
<head>
	<title>OPI Finder</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="style.css" type="text/css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="app.js" type="text/javascript"></script>


<style type="text/css">

body{
    font-family: 'Raleway', sans-serif;
    font-size: 20px;
    font-weight: 400;
    color: #777;
    background-image: url('tester.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;

}

h1{

}

    #team .card-2{
    border-radius: 0;
    box-shadow: 5px 5px 15px #000;
    transition: all 0.3s ease-in;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
}

#team .card-2:hover{
    background: #E0E0E0;
    color: #FFF;
    border-radius: 5px;
    border: none;
    box-shadow: 5px 5px 10px #E0E0E0;
}

#team .card-2:hover h3, #team .card-2:hover i{
    color: #FFF;
}


</style>
</head>


<body>
	
        <div class="container my-3 py-5 text-center">
            <div class="row mb-5">
                <div class="col">
                    <h1>Online Personal Identity Finder</h1>
                    <p class="mt-3">   ....~Ph0eNix</p> 
            </div>
        </div>
<br>
<div class="container text-center">
    <div class="col-md-4">
        
	       <form method="POST">
                <div class="form-group">
    				<br><br>
    				<label> Name</label>
    				<input type="name" class="form-control" name="fname" placeholder="Enter First Name"><br>
    				
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email"><br>
                    <label>Date of Birth</label>
                    <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth"><br>
                    <label>Mobile Number</label>
                    <input type="Number" class="form-control" name="dob" placeholder="Mobile Number"><br>
                    <label>Upload Image</label>

                    <div class="input-group">
                        <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            Browse<input type="file" id="imgInp">
                        </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                        <img id='img-upload'/>
                </div>
                <input type="submit" name="submit" value="Submit" onclick="alertmsg()">
                <br>

            </form>
      
    </div>

<script type="text/javascript">

   function alertmsg(){
   	alert("Data is successfully uploaded to server!");
   }


</script>

    <div class="col-md-8">
    <!-- <section id="team">  -->   
        <div class="row" style="padding-right: 1em">
            <img src="test1.jpg">
        </div>
        <br><br><br><br><br><br><br><br><br><br><br>
        <div class="col-md-8 Results"> 
            <button type="submit" onclick="window.location.href = 'result.php';">Show Results</button>
        </div>
    <!-- </section>   -->  
    </div>
</div>
</body>
</html>

<?php             
if(isset($_POST['email']))
{
$data=$_POST['email'];
$fp = fopen('socialscan/data.txt', 'w');
fwrite($fp, $data);
fclose($fp);

shell_exec("python image_crawl.py"); //run image crawler
shell_exec("python p1.py");         //run link crawler
shell_exec("python p2.py");
shell_exec("python p3.py");
}
?>