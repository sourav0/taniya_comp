<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="final.css">
    <style>
        body{
      background: url(pp.jpg);
      background-size: cover;
      margin: 0px;
      padding: 0px;
      color: white;
      font-family: 'Baloo Bhai 2', cursive;
  }

      </style>
</head>
<body>
    <header class="header">
        <div class="left">
             <!-- left  box for logo -->
             <img src="lg.jpg" alt="loading.....">
             <div id="ss">Singh Fitness Club</div>
        </div>
        <div class="right">
             <!-- mid box for navegation bar -->
             <ul class="navbar">
                 <li><a href="http://localhost/php/home.php" class="active">Home</a></li>
                 <li><a href="http://localhost/php/insert.php" >Contact Us</a></li>
                 <li><a href="http://localhost/php/gallery.php" > Gallery</li>
                <li><a href="http://localhost/php/feedback.php" >feedback</a></li>
             </ul>
        </div>
    </header>
    <div class="container">  
        <form > 
    <center>  <h1> Feedback</h1> </center>  
    <hr>  
    <div class="frm-grp">
    <label> Firstname </label>   
  <input type="text" name="firstname" placeholder= "Firstname" size="15" required >   
  </div>
  <div class="frm-grp">
  <label> Lastname: </label>    
  <input type="text" name="lastname" placeholder="Lastname" size="15"required />   
  </div>
  <div class="frm-grp">
    <label> E-mail: </label>    
    <input type="email" name="email" placeholder="E-mail" size="15"required />   
    </div>
    <div class="form-group">
        <label >Feed Back:</label>
        <textarea id="tarea" name="tarea" placeholder="Enter your Feedback"required >
 </textarea>
</div>
            <div class="frm-grp">
            <button type="submit" class="s1">Submit</button>  
            </div>      
         </form>
</body>
</html>