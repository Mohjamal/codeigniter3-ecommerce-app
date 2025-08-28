  <body data-sidebar="colored">
      <!-- <body data-layout="horizontal" data-topbar="dark"> -->

      <!-- Begin page -->
      <div id="layout-wrapper">
          <header id="page-topbar">
              <div class="navbar-header">
                  <div class="d-flex">
                      <!-- LOGO -->
                      <div class="navbar-brand-box">
                          <a href="index.html" class="logo logo-dark">
                              <span class="logo-sm">
                                  <img
                                      src="assets/dashboard/images/logo-dark.png"
                                      alt="logo-sm-dark"
                                      height="24" />
                              </span>
                              <span class="logo-lg">
                                  <img
                                      src="assets/dashboard/images/logo-sm-dark.png"
                                      alt="logo-dark"
                                      height="25" />
                              </span>
                          </a>

                          <a href="index.html" class="logo logo-light">
                              <span class="logo-sm">
                                  <img
                                      src="assets/dashboard/images/logo-light.png"
                                      alt="logo-sm-light"
                                      height="24" />
                              </span>
                              <span class="logo-lg">
                                  <img
                                      src="assets/dashboard/images/logo-sm-light.png"
                                      alt="logo-light"
                                      height="25" />
                              </span>
                          </a>
                      </div>

                      <button
                          type="button"
                          class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn"
                          id="vertical-menu-btn">
                          <i class="ri-menu-2-line align-middle"></i>
                      </button>

                      <!-- start page title -->
                      <div class="page-title-box align-self-center d-none d-md-block">
                          <h4 class="page-title mb-0">Dashboard</h4>
                      </div>
                      <!-- end page title -->
                  </div>

                  <div class="d-flex">
                      <!-- App Search-->
                      <form class="app-search d-none d-lg-block">
                          <div class="position-relative">
                              <input
                                  type="text"
                                  class="form-control"
                                  placeholder="Search..." />
                              <span class="ri-search-line"></span>
                          </div>
                      </form>

                      <div class="dropdown d-inline-block d-lg-none ms-2">
                          <button
                              type="button"
                              class="btn header-item noti-icon waves-effect"
                              id="page-header-search-dropdown"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <i class="ri-search-line"></i>
                          </button>
                          <div
                              class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                              aria-labelledby="page-header-search-dropdown">
                              <form class="p-3">
                                  <div class="mb-3 m-0">
                                      <div class="input-group">
                                          <input
                                              type="text"
                                              class="form-control"
                                              placeholder="Search ..." />
                                          <div class="input-group-append">
                                              <button class="btn btn-primary" type="submit">
                                                  <i class="ri-search-line"></i>
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>

                      <div class="dropdown d-none d-sm-inline-block">
                          <button
                              type="button"
                              class="btn header-item waves-effect"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <img
                                  class=""
                                  src="assets/dashboard/images/flags/us.jpg"
                                  alt="Header Language"
                                  height="16" />
                          </button>
                          <div class="dropdown-menu dropdown-menu-end">
                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                                  <img
                                      src="assets/dashboard/images/flags/spain.jpg"
                                      alt="user-image"
                                      class="me-1"
                                      height="12" />
                                  <span class="align-middle">Spanish</span>
                              </a>

                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                                  <img
                                      src="assets/dashboard/images/flags/germany.jpg"
                                      alt="user-image"
                                      class="me-1"
                                      height="12" />
                                  <span class="align-middle">German</span>
                              </a>

                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                                  <img
                                      src="assets/dashboard/images/flags/italy.jpg"
                                      alt="user-image"
                                      class="me-1"
                                      height="12" />
                                  <span class="align-middle">Italian</span>
                              </a>

                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                                  <img
                                      src="assets/dashboard/images/flags/russia.jpg"
                                      alt="user-image"
                                      class="me-1"
                                      height="12" />
                                  <span class="align-middle">Russian</span>
                              </a>
                          </div>
                      </div>

                      <div class="dropdown d-none d-lg-inline-block ms-1">
                          <button
                              type="button"
                              class="btn header-item noti-icon waves-effect"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <i class="ri-apps-2-line"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                              <div class="px-lg-2">
                                  <div class="row g-0">
                                      <div class="col">
                                          <a class="dropdown-icon-item" href="#">
                                              <img
                                                  src="assets/dashboard/images/brands/github.png"
                                                  alt="Github" />
                                              <span>GitHub</span>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a class="dropdown-icon-item" href="#">
                                              <img
                                                  src="assets/dashboard/images/brands/bitbucket.png"
                                                  alt="bitbucket" />
                                              <span>Bitbucket</span>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a class="dropdown-icon-item" href="#">
                                              <img
                                                  src="assets/dashboard/images/brands/dribbble.png"
                                                  alt="dribbble" />
                                              <span>Dribbble</span>
                                          </a>
                                      </div>
                                  </div>

                                  <div class="row g-0">
                                      <div class="col">
                                          <a class="dropdown-icon-item" href="#">
                                              <img
                                                  src="assets/dashboard/images/brands/dropbox.png"
                                                  alt="dropbox" />
                                              <span>Dropbox</span>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a class="dropdown-icon-item" href="#">
                                              <img
                                                  src="assets/dashboard/images/brands/mail_chimp.png"
                                                  alt="mail_chimp" />
                                              <span>Mail Chimp</span>
                                          </a>
                                      </div>
                                      <div class="col">
                                          <a class="dropdown-icon-item" href="#">
                                              <img src="assets/dashboard/images/brands/slack.png" alt="slack" />
                                              <span>Slack</span>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="dropdown d-none d-lg-inline-block ms-1">
                          <button
                              type="button"
                              class="btn header-item noti-icon waves-effect"
                              data-toggle="fullscreen">
                              <i class="ri-fullscreen-line"></i>
                          </button>
                      </div>

                      <div class="dropdown d-inline-block">
                          <button
                              type="button"
                              class="btn header-item noti-icon waves-effect"
                              id="page-header-notifications-dropdown"
                              data-bs-toggle="dropdown"
                              aria-expanded="false">
                              <i class="ri-notification-3-line"></i>
                              <span class="noti-dot"></span>
                          </button>
                          <div
                              class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                              aria-labelledby="page-header-notifications-dropdown">
                              <div class="p-3">
                                  <div class="row align-items-center">
                                      <div class="col">
                                          <h6 class="m-0">Notifications</h6>
                                      </div>
                                      <div class="col-auto">
                                          <a href="#!" class="small"> View All</a>
                                      </div>
                                  </div>
                              </div>
                              <div data-simplebar style="max-height: 230px">
                                  <a href="#" class="text-reset notification-item">
                                      <div class="d-flex">
                                          <div class="avatar-xs me-3">
                                              <span
                                                  class="avatar-title bg-primary rounded-circle font-size-16">
                                                  <i class="ri-shopping-cart-line"></i>
                                              </span>
                                          </div>
                                          <div class="flex-1">
                                              <h6 class="mb-1">Your order is placed</h6>
                                              <div class="font-size-12 text-muted">
                                                  <p class="mb-1">
                                                      If several languages coalesce the grammar
                                                  </p>
                                                  <p class="mb-0">
                                                      <i class="mdi mdi-clock-outline"></i> 3 min ago
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                  </a>
                                  <a href="#" class="text-reset notification-item">
                                      <div class="d-flex">
                                          <img
                                              src="assets/dashboard/images/users/avatar-3.jpg"
                                              class="me-3 rounded-circle avatar-xs"
                                              alt="user-pic" />
                                          <div class="flex-1">
                                              <h6 class="mb-1">James Lemire</h6>
                                              <div class="font-size-12 text-muted">
                                                  <p class="mb-1">
                                                      It will seem like simplified English.
                                                  </p>
                                                  <p class="mb-0">
                                                      <i class="mdi mdi-clock-outline"></i> 1 hours ago
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                  </a>
                                  <a href="#" class="text-reset notification-item">
                                      <div class="d-flex">
                                          <div class="avatar-xs me-3">
                                              <span
                                                  class="avatar-title bg-success rounded-circle font-size-16">
                                                  <i class="ri-checkbox-circle-line"></i>
                                              </span>
                                          </div>
                                          <div class="flex-1">
                                              <h6 class="mb-1">Your item is shipped</h6>
                                              <div class="font-size-12 text-muted">
                                                  <p class="mb-1">
                                                      If several languages coalesce the grammar
                                                  </p>
                                                  <p class="mb-0">
                                                      <i class="mdi mdi-clock-outline"></i> 3 min ago
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                  </a>

                                  <a href="#" class="text-reset notification-item">
                                      <div class="d-flex">
                                          <img
                                              src="assets/dashboard/images/users/avatar-4.jpg"
                                              class="me-3 rounded-circle avatar-xs"
                                              alt="user-pic" />
                                          <div class="flex-1">
                                              <h6 class="mb-1">Salena Layfield</h6>
                                              <div class="font-size-12 text-muted">
                                                  <p class="mb-1">
                                                      As a skeptical Cambridge friend of mine occidental.
                                                  </p>
                                                  <p class="mb-0">
                                                      <i class="mdi mdi-clock-outline"></i> 1 hours ago
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                  </a>
                              </div>
                              <div class="p-2 border-top">
                                  <div class="d-grid">
                                      <a
                                          class="btn btn-sm btn-link font-size-14 text-center"
                                          href="javascript:void(0)">
                                          <i class="mdi mdi-arrow-right-circle me-1"></i> View
                                          More..
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="dropdown d-inline-block">
                          <button
                              type="button"
                              class="btn header-item noti-icon right-bar-toggle waves-effect">
                              <i class="ri-settings-2-line"></i>
                          </button>
                      </div>
                  </div>
              </div>
          </header>

          <!-- ========== Left Sidebar Start ========== -->
          <div class="vertical-menu">
              <!-- LOGO -->
              <div class="navbar-brand-box">
                  <a href="index.html" class="logo logo-dark">
                      <span class="logo-sm">
                          <img
                              src="assets/dashboard/images/logo-sm-dark.png"
                              alt="logo-sm-dark"
                              height="24" />
                      </span>
                      <span class="logo-lg">
                          <img
                              src="assets/dashboard/images/logo-dark.png"
                              alt="logo-dark"
                              height="22" />
                      </span>
                  </a>

                  <a href="index.html" class="logo logo-light">
                      <span class="logo-sm">
                          <img
                              src="assets/dashboard/images/logo-sm-light.png"
                              alt="logo-sm-light"
                              height="24" />
                      </span>
                      <span class="logo-lg">
                          <img
                              src="assets/dashboard/images/logo-light.png"
                              alt="logo-light"
                              height="22" />
                      </span>
                  </a>
              </div>

              <button
                  type="button"
                  class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn"
                  id="vertical-menu-btn">
                  <i class="ri-menu-2-line align-middle"></i>
              </button>

              <div data-simplebar class="vertical-scroll">
                  <!--- Sidemenu -->
                  <div id="sidebar-menu">
                      <div
                          class="dropdown mx-3 sidebar-user user-dropdown select-dropdown">
                          <button
                              type="button"
                              class="btn btn-light w-100 waves-effect waves-light border-0"
                              id="page-header-user-dropdown"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <span class="d-flex align-items-center">
                                  <div class="flex-shrink-0">
                                      <div class="avatar-xs rounded-circle flex-shrink-0">
                                          <div
                                              class="avatar-title border bg-light text-primary rounded-circle text-uppercase user-sort-name">
                                              R
                                          </div>
                                      </div>
                                  </div>
                                  <div class="flex-grow-1 ms-2 text-start">
                                      <h6 class="mb-1 fw-medium user-name-text">Reporting</h6>
                                      <p class="font-size-13 text-muted user-name-sub-text mb-0">
                                          Team Reporting
                                      </p>
                                  </div>
                                  <div class="flex-shrink-0 text-end">
                                      <i class="mdi mdi-chevron-down font-size-16"></i>
                                  </div>
                              </span>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end w-100">
                              <!-- item-->
                              <a
                                  class="dropdown-item d-flex align-items-center px-3"
                                  href="#">
                                  <div class="flex-shrink-0 me-2">
                                      <div class="avatar-xs rounded-circle flex-shrink-0">
                                          <div
                                              class="avatar-title border rounded-circle text-uppercase dropdown-sort-name">
                                              C
                                          </div>
                                      </div>
                                  </div>
                                  <div class="flex-grow-1">
                                      <h6 class="mb-0 dropdown-name">CRM</h6>
                                      <p class="text-muted font-size-13 mb-0 dropdown-sub-desc">
                                          Designer Team
                                      </p>
                                  </div>
                              </a>
                              <a
                                  class="dropdown-item d-flex align-items-center px-3"
                                  href="#">
                                  <div class="flex-shrink-0 me-2">
                                      <div class="avatar-xs rounded-circle flex-shrink-0">
                                          <div
                                              class="avatar-title border rounded-circle text-uppercase dropdown-sort-name">
                                              A
                                          </div>
                                      </div>
                                  </div>
                                  <div class="flex-grow-1">
                                      <h6 class="mb-0 dropdown-name">Application Design</h6>
                                      <p class="text-muted font-size-13 mb-0 dropdown-sub-desc">
                                          Flutter Devs
                                      </p>
                                  </div>
                              </a>

                              <a
                                  class="dropdown-item d-flex align-items-center px-3"
                                  href="#">
                                  <div class="flex-shrink-0 me-2">
                                      <div class="avatar-xs rounded-circle flex-shrink-0">
                                          <div
                                              class="avatar-title border rounded-circle text-uppercase dropdown-sort-name">
                                              E
                                          </div>
                                      </div>
                                  </div>
                                  <div class="flex-grow-1">
                                      <h6 class="mb-0 dropdown-name">Ecommerce</h6>
                                      <p class="text-muted font-size-13 mb-0 dropdown-sub-desc">
                                          Developer Team
                                      </p>
                                  </div>
                              </a>

                              <a
                                  class="dropdown-item d-flex align-items-center px-3"
                                  href="#">
                                  <div class="flex-shrink-0 me-2">
                                      <div class="avatar-xs rounded-circle flex-shrink-0">
                                          <div
                                              class="avatar-title border rounded-circle text-uppercase dropdown-sort-name">
                                              R
                                          </div>
                                      </div>
                                  </div>
                                  <div class="flex-grow-1">
                                      <h6 class="mb-0 dropdown-name">Reporting</h6>
                                      <p class="text-muted font-size-13 mb-0 dropdown-sub-desc">
                                          Team Reporting
                                      </p>
                                  </div>
                              </a>

                              <a
                                  class="btn btn-sm btn-link font-size-14 text-center w-100"
                                  href="javascript:void(0)">
                                  View More..
                              </a>
                          </div>
                      </div>
                      <!-- Left Menu Start -->
                      <ul class="metismenu list-unstyled" id="side-menu">
                          <li class="menu-title">Menu</li>

                          <li>
                              <a href="dashboard" class="waves-effect">
                                  <i class="uim uim-airplay"></i><span class="badge rounded-pill bg-success float-end">3</span>
                                  <span>Dashboard</span>
                              </a>
                          </li>

                          <li>
                              <a href="category" class="waves-effect">
                                  <i class="uim uim-airplay"></i>
                                  <span>Category</span>
                              </a>
                          </li>

                          <li>
                              <a href="settings/pincode" class="waves-effect">
                                  <i class="uim uim-airplay"></i>
                                  <span>Pincode</span>
                              </a>
                          </li>

                      </ul>
                  </div>
                  <!-- Sidebar -->
              </div>

              <div class="dropdown px-3 sidebar-user sidebar-user-info">
                  <button
                      type="button"
                      class="btn w-100 px-0 border-0"
                      id="page-header-user-dropdown"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false">
                      <span class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                              <img
                                  src="assets/dashboard/images/users/avatar-2.jpg"
                                  class="img-fluid header-profile-user rounded-circle"
                                  alt="" />
                          </div>

                          <div class="flex-grow-1 ms-2 text-start">
                              <span class="ms-1 fw-medium user-name-text">Steven Deese</span>
                          </div>

                          <div class="flex-shrink-0 text-end">
                              <i class="mdi mdi-dots-vertical font-size-16"></i>
                          </div>
                      </span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                      <!-- item-->
                      <a class="dropdown-item" href="pages-profile.html"><i
                              class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i>
                          <span class="align-middle">Profile</span></a>
                      <a class="dropdown-item" href="apps-chat.html"><i
                              class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i>
                          <span class="align-middle">Messages</span></a>
                      <a class="dropdown-item" href="pages-faq.html"><i
                              class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i>
                          <span class="align-middle">Help</span></a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="pages-profile.html"><i
                              class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i>
                          <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                      <a class="dropdown-item" href="#"><span class="badge bg-primary mt-1 float-end">New</span><i
                              class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i>
                          <span class="align-middle">Settings</span></a>
                      <a class="dropdown-item" href="auth-lock-screen.html"><i
                              class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i>
                          <span class="align-middle">Lock screen</span></a>
                  </div>
              </div>
          </div>
          <!-- Left Sidebar End -->