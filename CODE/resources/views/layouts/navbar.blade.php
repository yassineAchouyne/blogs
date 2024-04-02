 <header class="">
     <nav class="navbar navbar-expand-lg">
         <div class="container">
             <a class="navbar-brand" href="index.html">
                 <h2>UP Blog<em>.</em></h2>
             </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarResponsive">
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                         <a class="nav-link" href="/">Home </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="">About Us</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="">Blog Entries</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="">Post Details</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="">Contact Us</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" id="show">Login</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
 </header>



 <!-- Modal -->
 <div class="model-tog">
     <div class="main">
         <input type="checkbox" id="chk" aria-hidden="true">

         <div class="signup">
             <form class="">
                 <label for="chk" aria-hidden="true">Sign up</label>
                 <input type="text" class="searchText" name="txt" placeholder="User name" required="">
                 <input type="email" name="email" placeholder="Email" required="">
                 <input type="password" name="pswd" placeholder="Password" required="">
                 <button>Sign up</button>
             </form>
         </div>

         <div class="login">
             <form>
                 <label for="chk" aria-hidden="true">Login</label>
                 <input type="email" name="email" placeholder="Email" required="">
                 <input type="password" name="pswd" placeholder="Password" required="">
                 <button>Login</button>
             </form>
         </div>
         <img src="img/retirer.png" id="close" />
     </div>
 </div>



 <style>
     .model-tog {
         position: fixed;
         z-index: 9999;
         display: flex;
         justify-content: center;
         align-items: center;
         width: 100%;
         height: 100vh;
         display: none;
     }

     .model-tog img {
         position: absolute;
         top: 3px;
         right: 3px;
     }

     .main {
         width: 350px;
         height: 500px;
         background: red;
         overflow: hidden;
         background-color: #f7f7f7;
         border-radius: 10px;
         box-shadow: 5px 20px 50px #000;
         position: relative;
     }

     #chk {
         display: none;
     }

     .signup {
         position: relative;
         width: 100%;
         height: 100%;
     }

     .main label {
         color: #f48840;
         font-size: 2.3em;
         justify-content: center;
         display: flex;
         margin: 60px;
         font-weight: bold;
         cursor: pointer;
         transition: .5s ease-in-out;
     }

     .main input {
         width: 60%;
         height: 40px;
         background: #e0dede;
         justify-content: center;
         display: flex;
         margin: 20px auto;
         padding: 10px;
         border: none;
         outline: none;
         border-radius: 5px;
     }

     .main button {
         width: 60%;
         height: 40px;
         margin: 10px auto;
         justify-content: center;
         display: block;
         color: #fff;
         background: #f48840;
         font-size: 1em;
         font-weight: bold;
         margin-top: 20px;
         outline: none;
         border: none;
         border-radius: 5px;
         transition: .2s ease-in;
         cursor: pointer;
     }

     .main button:hover {
         background: #f48840ed;
     }

     .login {
         height: 460px;
         background: #eee;
         border-radius: 60% / 10%;
         transform: translateY(-180px);
         transition: .8s ease-in-out;
     }

     .login label {
         color: #f48840;
         transform: scale(.6);
     }

     #chk:checked~.login {
         transform: translateY(-500px);
     }

     #chk:checked~.login label {
         transform: scale(1);
     }

     #chk:checked~.signup label {
         transform: scale(.6);
     }
 </style>


 <script>
     document.getElementById('close').addEventListener('click', function() {
         document.getElementsByClassName('model-tog')[0].style.display = "none";
     });
     document.getElementById('show').addEventListener('click', function() {
         document.getElementsByClassName('model-tog')[0].style.display = "flex";
     });
 </script>