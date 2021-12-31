<div id="about"> 
<?php session_start()?>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&amp;family=Montserrat&amp;family=Satisfy&amp;display=swap" rel="stylesheet">

    <!-- for mobile -->
    <link rel="stylesheet" href="css/mbl.css">

    <!-- for web -->
    <link rel="stylesheet" href="css/web.css">
    
    <title>Anujit deb</title>
    <style>

      .id01::-webkit-scrollbar {
        display: none;
      }



      body {font-family: Arial, Helvetica, sans-serif;}
      
      /* Full-width input fields */
      input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }
      
      /* Set a style for all buttons */
      button {
        color: white;
        font-size: 1.2rem;
        text-decoration: none;
        text-align: right;
        background-color: rgb(3, 100, 100);
        border-radius: 10px;
        margin: 0px 0px;
        padding: 10px;
        border-width: 2px;
        border-color: white;
        border-style: solid;
        cursor: pointer;
      }
      
      button:hover {
        background-color: black;
        border-radius: 10px;
        opacity: 0.8;
      }
      
      /* Extra styles for the cancel button */
      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
      }
      
      /* Center the image and position the close button */
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
      }
      
      img.avatar {
        width: 40%;
        border-radius: 50%;
      }
      
      .container {
        padding: 16px;
      }
      
      span.psw {
        float: right;
        padding-top: 16px;
      }
      
      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
      }
      
      /* Modal Content/Box */
      .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
      }
      
      /* The Close Button (x) */
      .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
      }
      
      .close:hover,
      .close:focus {
        color: red;
        cursor: pointer;
      }
      
      /* Add Zoom Animation */
      .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
      }
      
      @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)} 
        to {-webkit-transform: scale(1)}
      }
        
      @keyframes animatezoom {
        from {transform: scale(0)} 
        to {transform: scale(1)}
      }
      
      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
           display: block;
           float: none;
        }
        .cancelbtn {
           width: 100%;
        }
      }
      </style>
</head>
<body cz-shortcut-listen="true">
  <div class="sec1">
      <div class="navbar">
          <ul>
              <li class="nav-logo col-2">
                  <img src="image/iconHome.png" id="logo">    
              </li>

              <li class="service col-2" style="margin-left: 30px;">
                  <a href="#" id="serv">Contact Us</a>
                  <div class="menu">
                      <ul class="menu-list">
                          <li class="mnu-1"><a href="https://www.facebook.com/" id="rh"><img class="premium" src="image/facebook (1).png" id="prm"> Facebook</a></li>
                          <li class="mnu-2"><a href="https://mail.google.com/" id="rs"><img class="premium" src="image/gmail.png" id="prm"> Gmail</a></li>
                          <li class="mnu-3"><a href="https://www.whatsapp.com/" id="rm"><img class="premium" src="image/whatsapp.png" id="prm"> WhatsApp</a></li>
                          <li class="mnu-4"><a href="https://twitter.com/" id="hb"><img class="premium" src="image/twitter.png" id="prm"> Twitter</a></li>
                          <li class="mnu-5"><a href="https://telegram.org/" id="rb"><img class="premium" src="image/telegram.png" id="prm"> Telegram</a></li>
                      </ul>
                  </div>
              </li>

              <li class="about col-2" style=" padding-left: 90px; padding-right: 0px;
  margin-left: 20px; margin-top: 10px;
">
<button type="button" onclick="loadDoc()" style="padding-left: 20px; padding-right: 20px;">About</button>
              </li>
  
              <li class="heading col-2" style=" padding-left: 70px; padding-right: 0px;
  margin-left: 0px;
">
                  <h1><b>Home Search</b></h1>
              </li>
  
              <li class="service col-2" style=" padding-left: 150px;
  margin-left: 50px;
">
                  <a href="#" id="serv">Services</a>
                  <div class="menu">
                      <ul class="menu-list">
                          <li class="mnu-1"><a href="rHouse.html" id="rh">Rent House</a></li>
                          <li class="mnu-2"><a href="rSublet.html" id="rs">Rent Sublet</a></li>
                          <li class="mnu-3"><a href="rMess.html" id="rm">Rent Mess</a></li>
                          <li class="mnu-4"><a href="hotelBook.html" id="hb">Hotel Booking</a></li>
                          <li class="mnu-5"><a href="resortBook.html" id="rb">Resort Booking</a></li>
                          <li><a href="<?= empty($_SESSION['isLogged'])? "#":"rentdtls.php" ?>">Buy Home <img class="premium" src="image/crown.png" id="prm"></a></li>
                          <li><a href="<?= empty($_SESSION['isLogged'])? "#":"rentdtls.php" ?>">Sell Home <img class="premium" src="image/crown.png" id="prm"></a></li>
                      </ul>
                  </div>
              </li>
  
              <l class="sign col-2" style=" padding-left: 50px; margin-top: 10px; padding-top: 5px">
                  <?php if(empty($_SESSION['isLogged'])): ?>
                     <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; padding-left: 30px; padding-right: 30px; padding-bottom: 10px; padding-top: 10px;">Login</button>
                  <?php else: ?>
                    <button style="width:auto;  padding-left: 30px; padding-right: 20px; padding-bottom: 10px; padding-top: 10px;" onclick="window.location.href='logout.php'" >Logout</button>
                  <?php endif; ?>

                <div id="id01" class="modal" style="display: none;scroll-behavior: unset; padding-top: 0px; width: 1400px;height: 700px; padding-left: 200px; padding-bottom: 0px; margin-bottom: 200px; padding-right: 200px;">
                  
                  <form class="modal-content animate" action="login.php" method="post" style="margin-top: 20px;" >
                    <div class="imgcontainer">
                      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                      <img src="image/img_avatar2.png" alt="Avatar" class="avatar">
                    </div>
                
                    <div class="container">
                      <label for="uname"><b>Username</b></label>
                      <input type="text" placeholder="Enter Username / email" name="username" required="">
                
                      <label for="psw"><b>Password</b></label>
                      <input type="password" placeholder="Enter Password" name="password" required="">
                        
                      <button type="submit" name="action" value="login" style="-50px">Login/Register</button>
                    </div>
                  </form>
                </div>
                
                
                <script>
                // Get the modal
                var modal = document.getElementById('id01');
                
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
                </script>
              </l>
          </ul>
      </div>
      <div class="mdltxt">
      <h1>Sreach Your Home <img class="downArrow" src="image/down-arrow (1).png" id="dwn"></h1>
      </div>
  </div>

  <div class="app">
      <ul class="hs full">
        <li class="item">
          <div class="homes col-3">
            <a href="rentdtls.php?category=Rent Mess">
              <img class="items" src="image/311-tx_aus_rosedale_275246_0003_1200x_cfit.jpg" id="pich">
              <h3 style="color: white; text-decoration: none;" id="rm">Rent Mess</h3>
            </a>
          </div>
        </li>
        <li class="item">
          <div class="homes col-3">
            <a href="rentdtls.php?category=Rent Sublet">
              <img class="items" src="image/311-tx_aus_rosedale_275246_0149_1200x_cfit.jpg" id="pich">
              <h3 style="color: white; text-decoration: none;" id="rm">Rent Sublet</h3>
            </a>
          </div>
        </li>
        <li class="item">
          <div class="homes col-3">
            <a href="rentdtls.php?category=Rent House">
              <img class="items" src="image/1269-ma_bos_hyde_park_154775_29_1200x_cfit.jpg" id="pich">
              <h3 style="color: white; text-decoration: none;" id="rm">Rent House</h3>
            </a>
          </div>
        </li>
        <li class="item">
          <div class="homes col-3">
            <a href="rentdtls.php?category=Hotel Booking">
              <img class="items" src="image/1269-ma_bos_hyde_park_154775_23_1200x_cfit.jpg" id="pich">
              <h3 style="color: white; text-decoration: none;" id="rm">Hotel Booking</h3>
            </a>
          </div>
        </li>
        <li class="item">
          <div class="homes col-3">
            <a href="rentdtls.php?category=Resort Booking">
              <img class="items" src="image/1269-ma_bos_hyde_park_154775_29_1200x_cfit.jpg" id="pich">
              <h3 style="color: white; text-decoration: none;" id="rm">Resort Booking</h3>
            </a>
          </div>
        </li>
        <li class="item">
          <div class="homes col-3">
            <a href="rentdtls.php?category=Rent Mess">
              <img class="items" src="image/311-tx_aus_rosedale_275246_0003_1200x_cfit.jpg" id="pich">
              <h3 style="color: white; text-decoration: none;" id="rm">Rent Mess</h3>
            </a>
          </div>
        </li>

        <li class="item">
          <div class="homes col-3">
            <a href="rentdtls.php?category=Rent House">
              <img class="items" src="image/1269-ma_bos_hyde_park_154775_23_1200x_cfit.jpg" id="pich">
              <h3 style="color: white; text-decoration: none;" id="rm">Rent House</h3>
            </a>
          </div>
        </li>
        <li class="item">
          <div class="homes col-3">
            <a href="rentdtls.php?category=Resort Booking">
              <img class="items" src="image/311-tx_aus_rosedale_275246_0149_1200x_cfit.jpg" id="pich">
              <h3 style="color: white; text-decoration: none;" id="rm">Resort Booking</h3>
            </a>
          </div>
        </li>
        <li class="item">
          <div class="homes col-3">
            <a href="rentdtls.php?category=Rent House">
              <img class="items" src="image/1269-ma_bos_hyde_park_154775_23_1200x_cfit.jpg" id="pich">
              <h3 style="color: white; text-decoration: none;" id="rm">Rent House</h3>
            </a>
          </div>
        </li>
        <li class="item">
          <div class="homes col-3">
            <a href="rentdtls.php?category=Rent Sublet">
              <img class="items" src="image/1269-ma_bos_hyde_park_154775_32_1200x_cfit.jpg" id="pich">
              <h3 style="color: white; text-decoration: none;" id="rm">Rent Sublet</h3>
            </a>
          </div>
        </li>
      </ul>
    </div>

          <!-- Code injected by live-server -->
          <script type="text/javascript">
          // <![CDATA[  <-- For SVG support
          if ('WebSocket' in window) {
            (function () {
              function refreshCSS() {
                var sheets = [].slice.call(document.getElementsByTagName("link"));
                var head = document.getElementsByTagName("head")[0];
                for (var i = 0; i < sheets.length; ++i) {
                  var elem = sheets[i];
                  var parent = elem.parentElement || head;
                  parent.removeChild(elem);
                  var rel = elem.rel;
                  if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                    var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                    elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                  }
                  parent.appendChild(elem);
                }
              }
              var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
              var address = protocol + window.location.host + window.location.pathname + '/ws';
              var socket = new WebSocket(address);
              socket.onmessage = function (msg) {
                if (msg.data == 'reload') window.location.reload();
                else if (msg.data == 'refreshcss') refreshCSS();
              };
              if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                console.log('Live reload enabled.');
                sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
              }
            })();
          }
          else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
          }
          // ]]>
          </script>
          <div class="copyright">
            <div class="fotter">
                <p class="copyright-text text-center">
                    ©  2021 - Developed by Anujit Deb. All rights reserved.
                </p>
            </div>
          </div>

</body>

<script>
    <?php if(!empty($_SESSION['error'])): ?>
        alert("ERROR: <?= $_SESSION['error'] ?>");
        <?php unset($_SESSION['error'] ) ?>
    <?php elseif(!empty($_SESSION['success'])): ?>
        alert("SUCCESS: <?= $_SESSION['success'] ?>");
        <?php unset($_SESSION['success'] ) ?>
    <?php endif; ?>
</script>
</html>

</div>



<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("about").innerHTML = this.responseText;
  }
  xhttp.open("GET", "about.html");
  xhttp.send();
}
</script>


<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("about").innerHTML = this.responseText;
  }
  xhttp.open("GET", "about.html");
  xhttp.send();
}
</script>


