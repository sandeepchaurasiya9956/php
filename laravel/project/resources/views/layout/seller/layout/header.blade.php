<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
    <div class="d-flex align-items-center">
        <i class="fas fa-align-left primary-text fs-4 me3" id="menu-toggle"></i>
        <h2 class="fs-2 m-0">Dashboard</h2>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
             <li class="nav-item-dropdown">
                 <a href="#" class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     <i class="fas fa-user me-2"></i>
                     <?php if(session()->has('user.sessiondata')): ?>
                        {{session()->get('user.sessiondata')->email}}
                     <?php endif; ?>
                 </a>
                 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li class="dropdown-item" href="#">Profile</li>
                     <li class="dropdown-item" href="#">Settings</li>
                     <li class="dropdown-item" href="#">Logout</li>
                 </ul>
             </li>
         </ul>
     </div>
</nav>