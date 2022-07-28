<!DOCTYPE html>
<html>
    <head>
        <title>
            Boot Up Terrafiles.net
        </title>
        <style>
@import url('https://fonts.googleapis.com/css2?family=Inter&family=Kdam+Thmor+Pro&display=swap');
.top {
    font-family: 'Inter', sans-serif;
    color: white;
    font-size: 40px;
    text-align: center;
    color: skyblue;
}
.top p {
    position: relative;
    top: -42.6px;
    font-size: 60px;
    animation: pulsate 3s ease-out;
    animation-iteration-count: infinite; 
    opacity: 0.5;
}
@keyframes pulsate {
    0% { 
        opacity: 0;
    }
    50% { 
        opacity: 1.5;
    }
    100% { 
        opacity: 0;
    }
}
.time {
    color: red;
    position: relative;
    top: 5px;
}
.date {
  color: blue;
    position: relative;
    top: -64px;  
}
body {
    background: url("https://www.drodd.com/images10/beach-pictures3.jpg");
}
        </style>
    </head>
    <body>
        <div class="top">
            <h1>
              Terrafiles.net
            </h1>
            <p>
              Press any key or Click or Tap on the screen to continue.
            </p>
            <div class="date" id="time">
                <?php
                echo("It Is " . date("y/m/d"));
            ?>
            <div class="time">
                <?php
                 echo(date("g:i A")." PT")
                ?>
            </div>
            </div>
        </div>
        <script>
       document.addEventListener("keydown", e => {
         document.location.replace("https://terrafiles.net/index.html");
       })
       window.addEventListener('pointerdown', function onFirstPointer(e) {
                    document.location.replace("https://terrafiles.net/index.html");
       })
</script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </body>
</html>