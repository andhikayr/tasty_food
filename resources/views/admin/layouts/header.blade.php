<header>
   <div class="topbar d-flex align-items-center">
      <nav class="navbar navbar-expand">
         <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
         </div>
         <div class="top-menu ms-auto">
            <ul class="navbar-nav align-items-center">
               <li class="nav-item dropdown dropdown-large">
                  <div class="dropdown-menu dropdown-menu-end">
                     <a href="javascript:;">
                        <div class="msg-header">
                           <p class="msg-header-title">Notifications</p>
                           <p class="msg-header-clear ms-auto">Marks all as read</p>
                        </div>
                     </a>
                     <div class="header-notifications-list">
                        
                     </div>
                  </div>
               </li>
               <li class="nav-item dropdown dropdown-large">
                  <div class="dropdown-menu dropdown-menu-end">
                     <a href="javascript:;">
                        <div class="msg-header">
                           <p class="msg-header-title">Messages</p>
                           <p class="msg-header-clear ms-auto">Marks all as read</p>
                        </div>
                     </a>
                     <div class="header-message-list">
                        
                     </div>
                  </div>
               </li>
            </ul>
         </div>
         <div class="user-box dropdown">
            <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
               role="button" data-bs-toggle="dropdown" aria-expanded="false">
               @if(Auth::user()->image)
                  <img src="{{ url('/uploads/profile_image/'.Auth::user()->image) }}" class="user-img" alt="user avatar" style="object-fit: cover;">
               @else
                  <img src="{{ url('/uploads/no_image_profile.png') }}" class="user-img" alt="user avatar" style="object-fit: cover;">
               @endif
               <div class="user-info ps-3">
                  <p class="user-name mb-0">{{ Auth::user()->name }}</p>
               </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
               <li><a class="dropdown-item" href="{{ route('admin.settings') }}"><i class="bx bx-user"></i><span>Ubah Password / Profil</span></a>
               </li>
               <li>
                  <div class="dropdown-divider mb-0"></div>
               </li>
               <li><a class="dropdown-item" href="{{ route('admin.logout') }}"><i
                        class='bx bx-log-out-circle'></i><span>Logout</span></a>
               </li>
            </ul>
         </div>
      </nav>
   </div>
</header>
