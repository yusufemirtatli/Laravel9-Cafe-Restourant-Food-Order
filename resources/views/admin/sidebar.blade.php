<div class="container-scroller">
<!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="/index.html"><img src="/assets/admin/images/logo.svg" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="/index.html"><img src="/assets/admin/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="/assets/admin/images/faces/face15.jpg" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                            <span>Gold Member</span>
                        </div>
                    </div>
                    <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-onepassword  text-info"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-calendar-today text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/admin">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/admin/category">
              <span style="color: #ff3922" class="menu-icon">
                <ion-icon name="apps-outline"></ion-icon>
              </span>
                    <span class="menu-title">Categories</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span style="color: #fffa39" class="menu-icon">
                <ion-icon name="briefcase-outline"></ion-icon>
              </span>
                    <span class="menu-title">Orders</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item menu-items" >
                            <a class="nav-link" href="/pages/ui-features/buttons.html" style="color: #9b1308">
                                <span>

                                </span>
                                <span class="menu-sub-title">New Order</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/ui-features/dropdowns.html" style="color: #999b04">
                                <span>

                                </span>
                                <span class="menu-sub-title">Accepting Order</span>
                            </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="/pages/ui-features/typography.html" style="color: #00ac4a">
                                <span>

                                </span>
                                <span class="menu-sub-title">Completed Order</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/admin/product">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Product</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/admin/comment">
              <span class="menu-icon">
                <ion-icon name="chatbox-outline"></ion-icon>
              </span>
                    <span class="menu-title">Comments</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/admin/social">
              <span style="color: #346bff" class="menu-icon">
                <ion-icon name="share-social-outline"></ion-icon>
              </span>
                    <span class="menu-title">Social Media</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('admin.message.index')}}">
              <span class="menu-icon">
               <ion-icon name="chatbubble-outline"></ion-icon>
              </span>
                    <span class="menu-title">Messages</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/admin/users">
              <span style="color: #6efff2" class="menu-icon">
                <ion-icon name="person-outline"></ion-icon>
              </span>
                    <span class="menu-title">Users</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('admin.faq.index')}}">
              <span style="color: #ffffff" class="menu-icon">
                <ion-icon name="help-outline"></ion-icon>
              </span>
                    <span class="menu-title">FAQ</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/admin/setting">
              <span style="color: #00ac4a" class="menu-icon">
                <ion-icon s name="settings-outline"></ion-icon>
              </span>
                    <span class="menu-title">Settings</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- partial -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
