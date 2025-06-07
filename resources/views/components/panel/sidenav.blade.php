 <div class="dash-nav dash-nav-dark ">
     <header>
         <a href="#!" class="menu-toggle">
             <i class="fas fa-bars"></i>
         </a>
         <a href="index.html" class="spur-logo"><i class="fas fa-bolt"></i> <span>Spur</span></a>
     </header>
     @if (Auth::user()->hasRole('superAdmin'))
         <x-panel.sidenav.superadmin />
     @endif
 </div>
