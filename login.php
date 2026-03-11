<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | DICT Client Statisfaction System</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: linear-gradient(to right, #0038A8, #CE1126);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    overflow: hidden;
    position: relative;
}

/* FLOATING CIRCLES */
.circle {
    position: absolute;
    border-radius: 50%;
    opacity: 0.3;
    animation: float 15s infinite linear;
    pointer-events: none;
}

@keyframes float {
    0% { transform: translateY(100vh) translateX(0) rotate(0deg); }
    50% { transform: translateY(50vh) translateX(50px) rotate(180deg); }
    100% { transform: translateY(-100vh) translateX(0) rotate(360deg); }
}

/* LOGIN CARD */
.login-container {
    background: white;
    padding: 40px;
    width: 100%;
    max-width: 400px;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    text-align: center;
    z-index: 10;
    position: relative;
}

.login-container h2 {
    margin-bottom: 20px;
    color: #0038A8;
}

.form-group {
    text-align: left;
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 8px;
}

.login-btn {
    width: 100%;
    padding: 10px;
    background-color: #FCD116;
    border: none;
    font-weight: bold;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s ease;
}

.login-btn:hover {
    background-color: #ffdb4d;
}

.back-link {
    margin-top: 15px;
    display: block;
    color: #0038A8;
    text-decoration: none;
    font-size: 14px;
}

/* RESPONSIVE */
@media (max-width: 500px) {
    .login-container {
        padding: 30px;
    }
}
/* LOGO */
.login-logo {
    width: 80px;
    height: auto;
    margin-bottom: 15px;
}

/* GRADIENT LINE */
.gradient-line {
    height: 4px;
    width: 200px;
    margin: 0 auto 20px auto;
    border-radius: 2px;
    background: linear-gradient(to right, #0038A8, #CE1126);
}
       /* Background animation - subtle circles */
         .circles{
             position: absolute;
             top: 0;
             left: 0;
             width: 100%;
             height: 100%;
             overflow: hidden;
         }
 
         .circles li{
             position: absolute;
             display: block;
             list-style: none;
             width: 20px;
             height: 20px;
             background: rgba(255, 244, 126, 0.65); /* Theme green with more transparency */
             animation: animate 25s linear infinite;
             bottom: -150px;
         }
 
         .circles li:nth-child(1){
             left: 25%;
             width: 80px;
             height: 80px;
             animation-delay: 0s;
         }
 
         .circles li:nth-child(2){
             left: 10%;
             width: 20px;
             height: 20px;
             animation-delay: 2s;
             animation-duration: 12s;
         }
 
         .circles li:nth-child(3){
             left: 70%;
             width: 20px;
             height: 20px;
             animation-delay: 4s;
         }
 
         .circles li:nth-child(4){
             left: 40%;
             width: 60px;
             height: 60px;
             animation-delay: 0s;
             animation-duration: 18s;
         }
 
         .circles li:nth-child(5){
             left: 65%;
             width: 20px;
             height: 20px;
             animation-delay: 0s;
         }
 
         .circles li:nth-child(6){
             left: 75%;
             width: 110px;
             height: 110px;
             animation-delay: 3s;
         }
 
         .circles li:nth-child(7){
             left: 35%;
             width: 150px;
             height: 150px;
             animation-delay: 7s;
         }
 
         .circles li:nth-child(8){
             left: 50%;
             width: 25px;
             height: 25px;
             animation-delay: 15s;
             animation-duration: 45s;
         }
 
         .circles li:nth-child(9){
             left: 70%;
             width: 15px;
             height: 15px;
             animation-delay: 2s;
             animation-duration: 35s;
         }
 
         .circles li:nth-child(10){
             left: 85%;
             width: 150px;
             height: 150px;
             animation-delay: 0s;
             animation-duration: 11s;
         }
 
         @keyframes animate {
             0%{
                 transform: translateY(0) rotate(0deg);
                 opacity: 1;
                 border-radius: 0;
             }
             100%{
                 transform: translateY(-1000px) rotate(720deg);
                 opacity: 0;
                 border-radius: 50%;
             }
         }
</style>
</head>

<body>
<ul class="circles">
    <li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li>
</ul>
<div class="login-container">
    <!-- LOGO -->
    <img src="img/dictlogo.png" alt="DICT Logo" class="login-logo">

    <!-- GRADIENT LINE -->
    <div class="gradient-line"></div>

    <h2>DICT Digital Client Satisfaction System</h2>

    <form onsubmit="handleLogin(event)">
        <div class="form-group">
            <label>Username</label>
            <input type="text" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" required>
        </div>

        <div class="form-group">
            <label>Region</label>
            <select id="region" required onchange="regionChanged()">
                <option value="1">Region 1</option>
                <option value="2">Region 2</option>
                <option value="3">Region 3</option>
            </select>
        </div>

        <div class="form-group">
            <label>Province</label>
            <select id="province" required>
                <option>Cagayan</option>
                <option>Isabela</option>
                <option>Nueva Vizcaya</option>
                <option>Quirino</option>
            </select>
        </div>

        <button type="submit" class="login-btn">Login</button>
    </form>

    <a href="index.html" class="back-link">← Back to Home</a>
</div>

<script>
function regionChanged() {
    var region = document.getElementById("region").value;
    var province = document.getElementById("province");
    province.innerHTML = "";

    if(region === "2") {
        var provinces = ["Cagayan", "Isabela", "Nueva Vizcaya", "Quirino"];
    } else {
        var provinces = ["Province A", "Province B", "Province C"];
    }

    provinces.forEach(function(p) {
        var option = document.createElement("option");
        option.text = p;
        province.add(option);
    });
}

function handleLogin(event) {
    event.preventDefault();
    alert("Login Successful!");
}
</script>

</body>
</html>