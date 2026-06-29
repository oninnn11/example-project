<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:linear-gradient(135deg,#007BFF,#66B2FF);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.container{
    background:white;
    width:500px;
    padding:40px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 8px 20px rgba(0,0,0,0.2);
    position:relative;
}

h1{
    color:#007BFF;
    margin-bottom:20px;
}

p{
    font-size:22px;
    margin-bottom:40px;
}

button{
    padding:12px 30px;
    font-size:18px;
    border:none;
    border-radius:10px;
    cursor:pointer;
    transition:0.3s;
}

#yesBtn{
    background:#007BFF;
    color:white;
    margin-right:20px;
}

#yesBtn:hover{
    background:#0056b3;
}

#noBtn{
    background:#ff4d4d;
    color:white;
    position:absolute;
    left:280px;
    top:200px;
}

#message{
    margin-top:60px;
    font-size:24px;
    color:green;
    font-weight:bold;
}
</style>

</head>
<body>

<div class="container">

    <h1>Dashboard</h1>

    <p>Do you agree with this decision?</p>

    <button id="yesBtn">Yes</button>
    <button id="noBtn">No</button>

    <div id="message"></div>

</div>

<script>

const noBtn = document.getElementById("noBtn");
const container = document.querySelector(".container");

noBtn.addEventListener("mouseover", function(){

    const maxX = container.clientWidth - noBtn.offsetWidth;
    const maxY = container.clientHeight - noBtn.offsetHeight;

    const randomX = Math.floor(Math.random() * maxX);
    const randomY = Math.floor(Math.random() * maxY);

    noBtn.style.left = randomX + "px";
    noBtn.style.top = randomY + "px";

});

document.getElementById("yesBtn").addEventListener("click", function(){

    document.getElementById("message").innerHTML =
    "🎉 Thank you! You clicked YES.";

});

</script>

</body>
</html>