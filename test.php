<html>
<head>
    <title>Michelangelo</title>
<style>
body {
  background: linear-gradient(rgb(0, 0, 128), rgb(210, 180, 140));
}
.right {
  position: absolute;
  top: 100px;
  right: 80px;
  width: 300px;
  border: none;
  padding: 5px;
}
.center {
  padding: 70px 0;
  text-align: center;
}
* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 12px;
  border: 1px solid grey;
  float: left;
  width: 75%;
  background: #f5f2d0;
  color: #918151;
  border-radius: 12px;
}
form.example button {
  float: left;
  width: 25%;
  padding: 10px;
  background: tan;
  color: white;
  font-size: 12px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
  border-radius: 12px;
}
form.example button:hover {
  background: #918151;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  border-radius: 12px;
}
.nav {
  background-color: #000;
  opacity: 50%;
  overflow: hidden;
  margin: 97px 0px 0px 0px;
  border-radius: 12px;
  border: 1px solid tan;
}

.nav a {
  float: left;
  display: block;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  color: tan;
  border-bottom: 3px solid transparent;
  margin: 0px 60px 0px 60px;
}

.nav a:hover {
  border-bottom: 3px solid tan;
}

.nav a.active {
  border-bottom: 3px solid tan;
}
</style>
</head>
<body>
<div class="nav">
  <a href="#home">Home</a>
  <a href="#product">Products</a>
  <a href="#contact">Contact</a>
  <a href="#about">About Us</a>
</div>
<div class = "center">
<?php

   echo "<font size='50' face='Georgia' color='ffffff'><br><br><br>HELLO WORLD <br><br><font size ='5'> Work in progress";
 

?>
</div>
<div class = "right"> 
    <form class = "example" method="GET" action="search.php">
        <input type="text" name="query" placeholder="Search for an item or brand">
        <button type="submit">Search</button>
    </form>
	</div>
</body>
</html>
