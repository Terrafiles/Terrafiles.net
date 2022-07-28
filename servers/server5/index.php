<?php
date_default_timezone_set("America/Los_Angeles");

session_start();

if (isset($_GET['logout'])) {
    //Simple exit message
    $logout_message = "<div class='msgln'><span class='left-info'>User <b class='user-name-left'>" . $_SESSION['name'] . "</b> has left the chat session.</span><br></div>";
    file_put_contents("log.html", $logout_message, FILE_APPEND | LOCK_EX);
    
    session_destroy();
    header("Location: index.php"); //Redirect the user
}

if (isset($_POST['enter'])) {
    if ($_POST['name'] != "") {
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
    } else {
        echo '<span class="error">Please type in a name</span>';
    }
}

function loginForm()
{
    echo
    '<div class="sidenav">
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
  <a href="https://terrafiles.net/servers/mainchat">Main Chat</a>
  <a href="https://terrafiles.net/servers/server1">General</a>
  <a href="https://terrafiles.net/servers/server2/">Memes</a>
  <a href="https://terrafiles.net/servers/server3">Random</a>
  <a href="https://terrafiles.net/servers/server4">Spam</a>
  <a href="https://terrafiles.net/servers/server5">Bug Report</a> 
</div>
    <div id="loginform">
    <form action="index.php" method="post">
      <p class="jkjaksasjakskaska">Enter Your Name</p>
      <label for="name">Name &mdash;</label>
      <input type="text" name="name" id="name" maxlength="25" />
      <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
  </div>';
}

?>

<!DOCTYPE html>
<html lang=”en-US”>

<head>
    <meta charset="utf-8" />

    <title>Chat</title>
    <link rel="apple-touch-icon" href="favicon.ico">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Quicksand:wght@300&family=Readex+Pro:wght@200&family=Roboto:wght@500&display=swap');
    </style>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="Terrafiles Chat">
    <style>
body {
  font-family: 'Readex Pro', sans-serif;
}

.sidenav {
  height: 100%;
  width: 280px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}
.sidenav a {
   padding: 15px 15px 15px 32px;
  text-decoration: none;
  font-size: 27.8px;
  color: #818181;
  display: block;
  transition: 0.7s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#exit {
    background: skyblue;
    -webkit-border-radius: 28;
    -moz-border-radius: 28;
    border-radius: 28px;
    text-align: center;
    font-family: Arial;
    color: #ffffff;
    font-size: 20px;
    padding: 10px 10px 10px 10px;
    text-decoration: none;
}
 .br {
     margin-bottom: 1px;
        }
#exit:hover {
    background: skyblue;
    text-decoration: none
}
#chatbox {
    text-align: center;
    margin: none;
    border: none;
    overflow: auto;
    position: relative;
    left: 10px;
    padding: none;
}

.msgln {
    font-size: 19px;
    font-family: 'Quicksand', sans-serif;
    color: white;
    position: relative;
    top: -100px;
    left: -35px;
}
.clear {
    color: purple;
}
.help {
    border: 2px solid skyblue;
    height: 435.500px;
    color: white;
}
.help h1 {
    color: white; 
}
.help hr {
    background-color: blue;
}
.sub {
    font-size: 19px;
    color: red;
}
.user-name-clear {
    color: blue;
    font-weight: 1000;
}

.user-name {
    padding: 3px;
    background-clip: content-box;
    box-shadow: inset 0 0 0 15px #0096C7;
    border-radius: 25px;
    font-weight: 2000;
}

#name {
    position: relative;
    left: 460.9999999999999999999999999999999999999999999999999999999999999999999999px;
    right: 100px;
    top: 100px;
    /* fonts */
    font-family: 'Quicksand', sans-serif;
    font-size: 20px;
    content: 30px;
    color: blue;
}

#enter {
    font-family: 'Quicksand', sans-serif;
    font-size: 19px;
    text-align: center;
    color: blue;
    position: relative;
    left: 450.9999999999999999999999999999999999999999999999999999999999999999999999px;
    right: 100px;
    top: 100px;
}

.jkjaksasjakskaska {
    font-family: 'Poppins', sans-serif;
    color: white;
    position: relative;
    font-weight: 1000;
    left: 534.9999999999999999999999999999999999999999999999999999999999999999999999px;
    right: 100px;
    top: 75px;
    font-size: 30.9999999999999999999999999999999px;
    border: none;
    padding: none;
    margin: none;
}
.logout {
    text-align: center;
}
body {
    background-color: #202120;
    overflow-x: hidden;
    overflow-y: auto;
}

.user-name-left {
    color: purple;
    font-weight: bold;
}

.left-info {
    color: red;
}

.sendbutton {
    -moz-box-shadow: inset 0px -3px 7px 0px #29bbff;
    -webkit-box-shadow: inset 0px -3px 7px 0px #29bbff;
    box-shadow: inset 0px -3px 7px 0px #29bbff;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #2dabf9), color-stop(1, #0688fa));
    background: -moz-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
    background: -webkit-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
    background: -o-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
    background: -ms-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
    background: linear-gradient(to bottom, #2dabf9 5%, #0688fa 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2dabf9', endColorstr='#0688fa', GradientType=0);
    background-color: #252625;
    -webkit-border-radius: 42px;
    -moz-border-radius: 42px;
    border-radius: 42px;
    display: inline-block;
    cursor: pointer;
    color: #ffffff;
    font-family: Arial;
    font-size: 15px;
    
    padding: 2px 10px;
    text-decoration: none;
    text-shadow: 0px 1px 0px #263666;
}

.sendbutton:hover {
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #0688fa), color-stop(1, #2dabf9));
    background: -moz-linear-gradient(top, #0688fa 5%, #2dabf9 100%);
    background: -webkit-linear-gradient(top, #0688fa 5%, #2dabf9 100%);
    background: -o-linear-gradient(top, #0688fa 5%, #2dabf9 100%);
    background: -ms-linear-gradient(top, #0688fa 5%, #2dabf9 100%);
    background: linear-gradient(to bottom, #0688fa 5%, #2dabf9 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0688fa', endColorstr='#2dabf9', GradientType=0);
    background-color: #0688fa;
}

.sendbutton:active {
    position: relative;
    top: 1px;
}

#usermsg,
.sendbutton,
#chatbox {
    position: relative;
    left: 150px;
    font-family: 'Readex Pro', sans-serif;
}
#usermsg, .sendbutton {
    font-size: 18px;
    position: relative
    bottom: 100px;
}
.welcome {
    color: skyblue;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
    position: relative;
    font-size: 55px;
    left: 150px;
    top: 50px;
}
.container {
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  justify-content: start;
  align-items: auto;
  align-content: center
}
.container:after {
  display: block;
  content: " placeholder ";
  margin: 18px;
  flex: 999 999 auto;
}
.sendbutton {
  border-radius: 3px;
  transition: background .2s linear;
  background: #00B288;
  height: 33.7px;
  width: 100px;
  overflow: hidden;
  position: relative;
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
  &:after {
    position: absolute;
    background: rgba(black, .2);
    transform: scale(0);
    height: 50px;
    width: 50px;
    margin-left: auto;
    margin-right: auto;
    margin-top: auto;
    margin-bottom: auto;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 2;
    content: '';
    border-radius: 50%;
  }
  &:hover {
    cursor: pointer;
    span {
      transform: translateX(0);
    }
  }
  &:not(:active) {
    &:after {
        animation: ripple .4s cubic-bezier(0.785, 0.135, 0.15, 0.86);
    }
    background: darken(#00B288, 5%);
  }
}

.left {
  float: left;
}
.helptxt {
    font-size: 14.4px;
}
.email {
    color: blue;
    text-decoration: underline;
}
span {
  transform: translateX(-180px);
  transition: transform .2s cubic-bezier(0.785, 0.135, 0.15, 0.86); 
  height: 60px;
  flex-basis: 180px;
  min-width: 180px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}

#toast {
  position: absolute;
  bottom: 20px;
  transform: translateY(15vh);
  transition: transform .2s cubic-bezier(0.785, 0.135, 0.15, 0.86); 
  background: skyblue;
  padding: 5px 10px;
  border-radius: 5px;
}


@keyframes ripple {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(4);
  }
}
.getatt {
    color: red;
}
.item {
  flex: 0 0 auto;
  margin: 18px;
  color: white;
}
.chat-time {
    position: relative;
    left: 230px;
}
#snd {
    position: relative;
    top: -100;
}
</style>
    <noscript>
  <meta http-equiv="refresh" content="0; URL=/Hell.html">
</noscript>

    <meta name=”description" content="This is the offical Terrafiles Chat.">
</head>

<body>
    <?php
    if (!isset($_SESSION['name'])) {
        loginForm();
    } else {
    ?>
    <?php
        $file = "log.html"

        ?>
        <div class="sidenav">
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
  <a href="https://terrafiles.net/servers/server1">General</a>
  <a href="https://terrafiles.net/servers/server2">Memes</a>
  <a href="https://terrafiles.net/servers/server3">Random</a>
  <a href="https://terrafiles.net/servers/server4">Spam</a>
  <a href="https://terrafiles.net/servers/server5">Bug Report</a> 
  <br>
  <div class="help">
    <h1>TerraFiles.net Chat Help:</h1>
    <p class="sub">We will help any problem you have with terrafiles.net chat</p>
    <hr>
    <p class="helptxt">You might be confused with the UI of the chat but its very simple. All you have to do to send a message is, go into go to the textbox, type in your message in the box, press enter on your keyboard or press the send button on the screen, Your Done! Now to change channels all you have to to is go to the sidenav and cilck on the channel you want. It will then Redirect you to the channel then you are done! its that easy. To exit the chat press the Exit Chat button at the top of the screen.
    </p>
  </div>
</div>

    <div id="wrapper">
        <div id="menu">
            <center>
                <p class="welcome">Welcome, <b><?php echo $_SESSION['name']; ?></b></p>
            </center>
        </div>
        <br>
        <div id="chatbox">
            <?php
                if (file_exists("log.html") && filesize("log.html") > 0) {
                    $contents = file_get_contents("log.html");
                    echo $contents;
                }
                ?>
        </div>

        <form name="message" action="" id="snd">
            <center>
                <input name="usermsg" type="text" id="usermsg" maxlength="140" required />
                <button class="sendbutton" id="btn" type="submit">Send!!!</button>
            </center>
        </form>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    // jQuery Document
    $(document).ready(function() {
        $("#btn").click(function() {
            var clientmsg = $("#usermsg").val();
            $.post("post.php", {
                text: clientmsg
            });
            $("#usermsg").val("");
            return false;
        });

        function loadLog() {
            var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height before the request

            $.ajax({
                url: "log.html",
                cache: false,
                success: function(html) {
                    $("#chatbox").html(html); //Insert chat log into the #chatbox div

                    //Auto-scroll			
                    var newscrollHeight = $("#chatbox")[0].scrollHeight -
                        20; //Scroll height after the request
                    if (newscrollHeight > oldscrollHeight) {
                        $("#chatbox").animate({
                            scrollTop: newscrollHeight
                        }, 'normal'); //Autoscroll to bottom of div
                    }
                }
            });
        }

        setInterval(loadLog, 82.8);

        $("#exit").click(function() {
            var exit = confirm("Are you really sure that you want to leave?");
            if (exit == true) {
                window.location = "index.php?logout=true";
            }
        });
    });
    </script>
    
</body>

</html>
<?php
    }
?>