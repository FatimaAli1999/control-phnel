
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style media="screen">

button {
  width: 190px;
  height: 30px;
  display: inline;
}
#range{
  float: right;
}

.slider {
  width: 40%;
  height: 70px;
  margin-left: 450px;
  margin-top: 90px;
}
.contaier {
  margin: 0px;
  padding: 0px;
  height: 450px;
  width: 450px;

}
input[type=range] {
height: 38px;
-webkit-appearance: none;
margin: 10px 0;
width: 100%;
}
input[type=range]:focus {
outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
width: 100%;
height: 10px;
cursor: pointer;
animate: 0.2s;
box-shadow: 1px 1px 1px #000000;
background: #3071A9;
border-radius: 5px;
border: 1px solid #000000;
}
input[type=range]::-webkit-slider-thumb {
box-shadow: 1px 1px 1px #000000;
border: 1px solid #000000;
height: 30px;
width: 15px;
border-radius: 5px;
background: #FFFFFF;
cursor: pointer;
-webkit-appearance: none;
margin-top: -11px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
background: #3071A9;
}
input[type=range]::-moz-range-track {
width: 100%;
height: 10px;
cursor: pointer;
animate: 0.2s;
box-shadow: 1px 1px 1px #000000;
background: #3071A9;
border-radius: 5px;
border: 1px solid #000000;
}
input[type=range]::-moz-range-thumb {
box-shadow: 1px 1px 1px #000000;
border: 1px solid #000000;
height: 30px;
width: 15px;
border-radius: 5px;
background: #FFFFFF;
cursor: pointer;
}
input[type=range]::-ms-track {
width: 100%;
height: 10px;
cursor: pointer;
animate: 0.2s;
background: transparent;
border-color: transparent;
color: transparent;
}
input[type=range]::-ms-fill-lower {
background: #3071A9;
border: 1px solid #000000;
border-radius: 10px;
box-shadow: 1px 1px 1px #000000;
}
input[type=range]::-ms-fill-upper {
background: #3071A9;
border: 1px solid #000000;
border-radius: 10px;
box-shadow: 1px 1px 1px #000000;
}
input[type=range]::-ms-thumb {
margin-top: 1px;
box-shadow: 1px 1px 1px #000000;
border: 1px solid #000000;
height: 30px;
width: 15px;
border-radius: 5px;
background: #FFFFFF;
cursor: pointer;
}
input[type=range]:focus::-ms-fill-lower {
background: #3071A9;
}
input[type=range]:focus::-ms-fill-upper {
background: #3071A9;
}
input[type=submit]{
width : 220px;
height: 30px;
display: inline;
}

.rightWord{
float:right
}
</style>

</head>
<body>

<?php

        $motor1 = $_POST["m1"];
        $motor2 = $_POST["m2"];
        $motor3 = $_POST["m3"];
        $motor4 = $_POST["m4"];
        $motor5 = $_POST["m5"];
        $motor6 = $_POST["m6"];

        $connection = new mysqli("localhost","root","","control");


        if(isset($_POST['save'])){

          echo "<br>";

          $Qu = "";

          $Qu = "select * from motors WHERE 1 ";
          $result = mysqli_query($connection, $Qu);

          $Qu = "INSERT INTO motors (motor1, motor2, motor3, motor4, motor5, motor6)
           VALUES ('$motor1', '$motor2', '$motor3', '$motor4', '$motor5', '$motor6')";
          $result = mysqli_query($connection, $Qu);


      }else if(isset($_POST['on'])) {
          echo "<br>";

          $Qu = "";

          $Qu = "select * from run WHERE 1 ";
          $result = mysqli_query($connection, $Qu);

          $Qu = "INSERT INTO run (isON,isOFF) VALUES (1,0)";
          $result = mysqli_query($connection, $Qu);

      }else if(isset($_POST['off'])) {
          echo "<br>";

          $Qu = "";

          $Qu = "select * from run WHERE 1 ";
          $result = mysqli_query($connection, $Qu);

          $Qu = "INSERT INTO run (isON,isOFF) VALUES (0,1)";
          $result = mysqli_query($connection, $Qu);
      }

    ?>

  <div class="container">
    <div class="slider">
        <h1>Control Panel </h1>

    <form name="m1" id="weight1" method="post">

        <div name="m1">
        <text><b> Motor 1 </b></text>
        <input input="" type="range" name="m1" min="0" max="180"  step="1" onchange="showValue(this)">
        <span id="range">90</span>
        </div>
        <div name="m2" >
        <text><b> Motor 2 </b></text>
        <input input="" type="range" name="m2" min="0" max="180"  step="1" onchange="showValue(this)">
        <span id="range">90</span>
        </div>
        <div name="m3" >
        <text><b> Motor 3 </b></text>
        <input input="" type="range" name="m3" min="0" max="180" step="1" onchange="showValue(this)">
        <span id="range">90</span>
        </div>
        <div name="m4" >
        <text><b> Motor 4 </b></text>
        <input input="" type="range" name="m4" min="0" max="180"  step="1" onchange="showValue(this)">
        <span id="range">90</span>
        </div>
        <div name="m5" >
        <text><b> Motor 5 </b></text>
        <input input="" type="range" name="m5" min="0" max="180"  step="1" onchange="showValue(this)">
        <span id="range">90</span>
        </div>
        <div name="mt6" >
        <text><b> Motor 6 </b></text>
        <input input="" type="range" name="m6" min="0" max="180"  step="1" onchange="showValue(this)">
        <span id="range">90</span>
        </div>
<br></br>
       <button  name="save" type="submit" >SAVE <span></span>
       <button  name="on" type="submit" >ON <span></span>
       <button  name="off" type="submit" >OFF <span></span>

</form>
</div>
</div>

<script type="text/javascript">
    function get_nextsibling(n)
   {
   x=n.nextSibling;
   while (x.nodeType!=1)
     {
     x=x.nextSibling;
     }
   return x;
   }
  function showValue(self)
  {
   get_nextsibling(self).innerHTML=self.value;
  }
  </script>


</body>
</html>
