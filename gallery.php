<!DOCTYPE html>
<html>
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
* {
   box-sizing: border-box;
}
.outer-grid {
   display: flex;
   flex-wrap: wrap;
   padding:131px;;
}
.inner-grid {
   flex: 25%;
   max-width: 25%;
   padding: 0 4px;
}
.inner-grid img {
   margin-top: 8px;
   width: 100%;
   padding: 10px;
}
@media screen and (max-width: 800px) {
   .inner-grid {
      flex: 50%;
      max-width: 50%;
   }
}
@media screen and (max-width: 600px) {
   .inner-grid {
      flex: 100%;
      max-width: 100%;
   }
}
</style>
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
<div class="outer-grid">
<div class="inner-grid">
<img src="https://images.pexels.com/photos/1083822/pexels-photo-1083822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
<img src="https://images.pexels.com/photos/1083822/pexels-photo-1083822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
<img src="https://images.pexels.com/photos/1083822/pexels-photo-1083822.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
</div>
<div class="inner-grid">
<img src="https://images.pexels.com/photos/3805102/pexels-photo-3805102.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
<img src="https://images.pexels.com/photos/3805102/pexels-photo-3805102.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
<img src="https://images.pexels.com/photos/3805102/pexels-photo-3805102.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
</div>
<div class="inner-grid">
<img src="https://images.pexels.com/photos/3863778/pexels-photo-3863778.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
<img src="https://images.pexels.com/photos/3863778/pexels-photo-3863778.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
<img src="https://images.pexels.com/photos/3863778/pexels-photo-3863778.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>

</div><div class="inner-grid">
<img src="https://images.pexels.com/photos/3863778/pexels-photo-3863778.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
<img src="https://images.pexels.com/photos/3863778/pexels-photo-3863778.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>
<img src="https://images.pexels.com/photos/3863778/pexels-photo-3863778.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"/>

</div>
</div>
</body>
</html>