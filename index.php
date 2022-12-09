<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVP QUOTATION</title>
    <Style>
     body{
    background-color: #ddd;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
a{
    color: #4545fd;
}

.main-block{
    display: table;
    margin: 100px auto 0;
    background-color: #fff;
    width: 100%;
    max-width: 450px;
    border-radius: 5px;
}

.main-block > .header{
    background: #ffffff  center center no-repeat;
        width: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    font-family: Palatino Linotype;
    font-size: 22px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    padding: 40px 0;
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
    color: rgb(148, 74, 142);
}

.main-block > .body{
    padding: 40px 20px;
}
.main-block > .footer{
    border-top: 1px solid #ddd;
}

.main-block > .footer p{
    padding: 10px;
    margin: 0;
    text-align: center;
    font-size: 12px;
}

input[type="text"] {
    background-color: #fff;
    box-sizing: border-box;
    border-radius: 2px;
    color: #333;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    display: block;
    float: none;
    font-size: 16px;
    border: 1px solid #ccc;
    padding: 6px 10px;
    height: 38px;
    width: 100%;
    line-height: 1.3;
    margin: 0 0 5px;
}
.form-control{
    background-color: #fff;
    box-sizing: border-box;
    border-radius: 2px;
    color: #333;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    display: block;
    float: none;
    font-size: 16px;
    border: 1px solid #ccc;
    padding: 6px 10px;
    height: 38px;
    width: 100%;
    line-height: 1.3;
    margin: 0 0 5px;
}

input[type="submit"]{
    background-color: #0a9e00;
    color: #fff;
    padding: 5px 10px;
    border: 0;
    font-size: 15px;
    border-radius: 2px;
    cursor: pointer;
}
input[type="submit"]:hover{
    background-color: #098e00;
}

.frame {
  width: 100%;
  
  text-align: center;
}
button {
  margin: 20px;
}
.custom-btn {
  width: 300px;
  height: 70px;
  color: #fff;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  outline: none;
}

.btn-11 {
  border: none;
  background: #89d8d3;
    background: linear-gradient(0deg,#89d8d3 0%, rgba#89d8d3 100%);
    color: #fff;
    overflow: hidden;
}
.btn-11:hover {
    text-decoration: none;
    color: #fff;
}
.btn-11:before {
    position: absolute;
    content: '';
    display: inline-block;
    top: -180px;
    left: 0;
    width: 30px;
    height: 100%;
    background-color: #fff;
    animation: shiny-btn1 3s ease-in-out infinite;
}
.btn-11:hover{
  opacity: .7;
}
.btn-11:active{
  box-shadow:  4px 4px 6px 0 rgba(255,255,255,.3),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
}

@-webkit-keyframes shiny-btn1 {
    0% { -webkit-transform: scale(0) rotate(45deg); opacity: 0; }
    80% { -webkit-transform: scale(0) rotate(45deg); opacity: 0.5; }
    81% { -webkit-transform: scale(4) rotate(45deg); opacity: 1; }
    100% { -webkit-transform: scale(50) rotate(45deg); opacity: 0; }
}

    </Style>
</head>
<body>
    <div class="main-block">
        <div class="header">
            <img src="logo.png"><br>
            Select Your Product
        </div>
        <div class="body">
        <div class="frame">
        <a href="passive_income.php"><button class="custom-btn btn-11"><h3>Agro Ventures Passive Income Plan</h3></button></a><br>
        <a href="triple_benefit.php"><button class="custom-btn btn-11"><h3>Agro Triple Benefit</h3></button></a>
        <a href="green_gold.php"><button class="custom-btn btn-11"><h3>Green Gold Harvest Plan</h3></button></a>
        </div>
</div>
        <div class="footer">
            
            <p><a href="https://agroventuresplantations.com">Agro Ventures Plantations LTD</a></p>
        </div>
    </div>

</body>
</html>