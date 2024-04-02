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
                         <a class="nav-link" data-toggle="modal" data-target="#exampleModalToggle">Login</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
 </header>

 <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 Show a second modal and hide this one with the button below.
             </div>
             <div class="modal-footer">
                 <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
             </div>
         </div>
     </div>
 </div>
