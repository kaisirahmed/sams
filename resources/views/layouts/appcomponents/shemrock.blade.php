<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Falcon | Dashboard &amp; WebApp Template</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="{{asset('assets/lib/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/datatables-bs4/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.css')}}" rel="stylesheet">  
    <link href="{{asset('assets/lib/leaflet/leaflet.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/leaflet.markercluster/MarkerCluster.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/leaflet.markercluster/MarkerCluster.Default.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/theme.min.css')}}" rel="stylesheet">
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

      <div class="container-fluid" data-layout="container">
        <nav class="navbar navbar-vertical navbar-expand-xl navbar-light navbar-vibrant">
        
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="" data-original-title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div><a class="navbar-brand" href="index.html">
              <div class="d-flex align-items-center py-3"><img class="mr-2" src="assets/img/illustrations/falcon.png" alt="" width="40"><span class="text-sans-serif">falcon</span></div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content perfect-scrollbar scrollbar">
              <ul class="navbar-nav flex-column">
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#home" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="home">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><svg class="svg-inline--fa fa-chart-pie fa-w-17" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-pie" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 544 512" data-fa-i2svg=""><path fill="currentColor" d="M527.79 288H290.5l158.03 158.03c6.04 6.04 15.98 6.53 22.19.68 38.7-36.46 65.32-85.61 73.13-140.86 1.34-9.46-6.51-17.85-16.06-17.85zm-15.83-64.8C503.72 103.74 408.26 8.28 288.8.04 279.68-.59 272 7.1 272 16.24V240h223.77c9.14 0 16.82-7.68 16.19-16.8zM224 288V50.71c0-9.55-8.39-17.4-17.84-16.06C86.99 51.49-4.1 155.6.14 280.37 4.5 408.51 114.83 513.59 243.03 511.98c50.4-.63 96.97-16.87 135.26-44.03 7.9-5.6 8.42-17.23 1.57-24.08L224 288z"></path></svg><!-- <span class="fas fa-chart-pie"></span> --></span><span class="nav-link-text">Home</span></div>
                  </a>
                  <ul class="nav collapse show" id="home" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item active"><a class="nav-link" href="index.html">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="home/dashboard-alt.html">Dashboard alt</a></li>
                    <li class="nav-item"><a class="nav-link" href="home/feed.html">Feed</a></li>
                    <li class="nav-item"><a class="nav-link" href="home/landing.html">Landing</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><svg class="svg-inline--fa fa-copy fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="copy" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M320 448v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V120c0-13.255 10.745-24 24-24h72v296c0 30.879 25.121 56 56 56h168zm0-344V0H152c-13.255 0-24 10.745-24 24v368c0 13.255 10.745 24 24 24h272c13.255 0 24-10.745 24-24V128H344c-13.2 0-24-10.8-24-24zm120.971-31.029L375.029 7.029A24 24 0 0 0 358.059 0H352v96h96v-6.059a24 24 0 0 0-7.029-16.97z"></path></svg><!-- <span class="fas fa-copy"></span> --></span><span class="nav-link-text">Pages</span></div>
                  </a>
                  <ul class="nav collapse" id="pages" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="pages/activity.html">Activity</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/associations.html">Associations</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/billing.html">Billing</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/customer-details.html">Customer details</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/event-detail.html">Event detail</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/event-create.html">Event create</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/events.html">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/faq.html">Faq</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/invoice.html">Invoice</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/invite-people.html">Invite people</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/notifications.html">Notifications</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/people.html">People</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/pricing.html">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/pricing-alt.html">Pricing alt</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/profile.html">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/settings.html">Settings</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/starter.html">Starter</a></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages-errors" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages-errors">Errors</a>
                      <ul class="nav collapse" id="pages-errors" data-parent="#pages">
                        <li class="nav-item"><a class="nav-link" href="pages/errors/404.html">404</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/errors/500.html">500</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="chat.html">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><svg class="svg-inline--fa fa-comments fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"></path></svg><!-- <span class="fas fa-comments"></span> --></span><span class="nav-link-text"> Chat</span></div>
                  </a></li>
                <li class="nav-item"><a class="nav-link" href="kanban.html">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><svg class="svg-inline--fa fa-trello fa-w-14" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="trello" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M392.3 32H56.1C25.1 32 0 57.1 0 88c-.1 0 0-4 0 336 0 30.9 25.1 56 56 56h336.2c30.8-.2 55.7-25.2 55.7-56V88c.1-30.8-24.8-55.8-55.6-56zM197 371.3c-.2 14.7-12.1 26.6-26.9 26.6H87.4c-14.8.1-26.9-11.8-27-26.6V117.1c0-14.8 12-26.9 26.9-26.9h82.9c14.8 0 26.9 12 26.9 26.9v254.2zm193.1-112c0 14.8-12 26.9-26.9 26.9h-81c-14.8 0-26.9-12-26.9-26.9V117.2c0-14.8 12-26.9 26.8-26.9h81.1c14.8 0 26.9 12 26.9 26.9v142.1z"></path></svg><!-- <span class="fab fa-trello"></span> --></span><span class="nav-link-text"> Kanban</span></div>
                  </a></li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#email" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="email">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><svg class="svg-inline--fa fa-envelope-open fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope-open" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 464c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V200.724a48 48 0 0 1 18.387-37.776c24.913-19.529 45.501-35.365 164.2-121.511C199.412 29.17 232.797-.347 256 .003c23.198-.354 56.596 29.172 73.413 41.433 118.687 86.137 139.303 101.995 164.2 121.512A48 48 0 0 1 512 200.724V464zm-65.666-196.605c-2.563-3.728-7.7-4.595-11.339-1.907-22.845 16.873-55.462 40.705-105.582 77.079-16.825 12.266-50.21 41.781-73.413 41.43-23.211.344-56.559-29.143-73.413-41.43-50.114-36.37-82.734-60.204-105.582-77.079-3.639-2.688-8.776-1.821-11.339 1.907l-9.072 13.196a7.998 7.998 0 0 0 1.839 10.967c22.887 16.899 55.454 40.69 105.303 76.868 20.274 14.781 56.524 47.813 92.264 47.573 35.724.242 71.961-32.771 92.263-47.573 49.85-36.179 82.418-59.97 105.303-76.868a7.998 7.998 0 0 0 1.839-10.967l-9.071-13.196z"></path></svg><!-- <span class="fas fa-envelope-open"></span> --></span><span class="nav-link-text">Email</span></div>
                  </a>
                  <ul class="nav collapse" id="email" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="email/inbox.html">Inbox</a></li>
                    <li class="nav-item"><a class="nav-link" href="email/email-detail.html">Email detail</a></li>
                    <li class="nav-item"><a class="nav-link" href="email/compose.html">Compose</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><svg class="svg-inline--fa fa-unlock-alt fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="unlock-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M400 256H152V152.9c0-39.6 31.7-72.5 71.3-72.9 40-.4 72.7 32.1 72.7 72v16c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24v-16C376 68 307.5-.3 223.5 0 139.5.3 72 69.5 72 153.5V256H48c-26.5 0-48 21.5-48 48v160c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zM264 408c0 22.1-17.9 40-40 40s-40-17.9-40-40v-48c0-22.1 17.9-40 40-40s40 17.9 40 40v48z"></path></svg><!-- <span class="fas fa-unlock-alt"></span> --></span><span class="nav-link-text">Authentication</span></div>
                  </a>
                  <ul class="nav collapse" id="authentication" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-basic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-basic">Basic</a>
                      <ul class="nav collapse" id="authentication-basic" data-parent="#authentication">
                        <li class="nav-item"><a class="nav-link" href="authentication/basic/login.html">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/basic/logout.html">Logout</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/basic/register.html">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/basic/forgot-password.html">Forgot password</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/basic/reset-password.html">Reset password</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/basic/confirm-mail.html">Confirm mail</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/basic/lock-screen.html">Lock screen</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-card" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-card">Card</a>
                      <ul class="nav collapse" id="authentication-card" data-parent="#authentication">
                        <li class="nav-item"><a class="nav-link" href="authentication/card/login.html">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/card/logout.html">Logout</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/card/register.html">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/card/forgot-password.html">Forgot password</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/card/reset-password.html">Reset password</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/card/confirm-mail.html">Confirm mail</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/card/lock-screen.html">Lock screen</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-split" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-split">Split</a>
                      <ul class="nav collapse" id="authentication-split" data-parent="#authentication">
                        <li class="nav-item"><a class="nav-link" href="authentication/split/login.html">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/split/logout.html">Logout</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/split/register.html">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/split/forgot-password.html">Forgot password</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/split/reset-password.html">Reset password</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/split/confirm-mail.html">Confirm mail</a></li>
                        <li class="nav-item"><a class="nav-link" href="authentication/split/lock-screen.html">Lock screen</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/wizard.html">Wizard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!" data-toggle="modal" data-target="#authentication-modal">In Modal</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#e-commerce" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="e-commerce">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><svg class="svg-inline--fa fa-cart-plus fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cart-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z"></path></svg><!-- <span class="fas fa-cart-plus"></span> --></span><span class="nav-link-text">E commerce</span></div>
                  </a>
                  <ul class="nav collapse" id="e-commerce" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="e-commerce/product-list.html">Product list</a></li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/product-grid.html">Product grid</a></li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/product-details.html">Product details</a></li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/orders.html">Orders</a></li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/order-details.html">Order details</a></li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/customers.html">Customers</a></li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/shopping-cart.html">Shopping cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/checkout.html">Checkout</a></li>
                  </ul>
                </li>
              </ul>
              <div class="navbar-vertical-divider">
                <hr class="navbar-vertical-hr my-2">
              </div>
              <ul class="navbar-nav flex-column">
                <li class="nav-item"><a class="nav-link" href="widgets.html">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><svg class="svg-inline--fa fa-poll fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="poll" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM160 368c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16V240c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v128zm96 0c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16V144c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v224zm96 0c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16v-64c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v64z"></path></svg><!-- <span class="fas fa-poll"></span> --></span><span class="nav-link-text"> Widgets</span></div>
                  </a></li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><svg class="svg-inline--fa fa-puzzle-piece fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="puzzle-piece" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M519.442 288.651c-41.519 0-59.5 31.593-82.058 31.593C377.409 320.244 432 144 432 144s-196.288 80-196.288-3.297c0-35.827 36.288-46.25 36.288-85.985C272 19.216 243.885 0 210.539 0c-34.654 0-66.366 18.891-66.366 56.346 0 41.364 31.711 59.277 31.711 81.75C175.885 207.719 0 166.758 0 166.758v333.237s178.635 41.047 178.635-28.662c0-22.473-40-40.107-40-81.471 0-37.456 29.25-56.346 63.577-56.346 33.673 0 61.788 19.216 61.788 54.717 0 39.735-36.288 50.158-36.288 85.985 0 60.803 129.675 25.73 181.23 25.73 0 0-34.725-120.101 25.827-120.101 35.962 0 46.423 36.152 86.308 36.152C556.712 416 576 387.99 576 354.443c0-34.199-18.962-65.792-56.558-65.792z"></path></svg><!-- <span class="fas fa-puzzle-piece"></span> --></span><span class="nav-link-text">Components</span></div>
                  </a>
                  <ul class="nav collapse" id="components" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="components/accordion.html">Accordion</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/alerts.html">Alerts</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/avatar.html">Avatar</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/background.html">Background</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/badges.html">Badges</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/breadcrumb.html">Breadcrumb</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/bulk-select.html">Bulk select</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/buttons.html">Buttons</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/cards.html">Cards</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/carousel.html">Carousel</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/collapse.html">Collapse</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/countup.html">Countup</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/dropdowns.html">Dropdowns</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/fancyscroll.html">Fancyscroll</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/fancytab.html">Fancytab</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/forms.html">Forms</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/hoverbox.html">Hoverbox</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/list-group.html">List group</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/modals.html">Modals</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/media-object.html">Media object</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/navs.html">Navs</a></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#components-navbar" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components-navbar">Navbar</a>
                      <ul class="nav collapse" id="components-navbar" data-parent="#components">
                        <li class="nav-item"><a class="nav-link" href="components/navbar/default.html">Default</a></li>
                        <li class="nav-item"><a class="nav-link" href="components/navbar/vertical.html">Vertical</a></li>
                        <li class="nav-item"><a class="nav-link" href="components/navbar/top.html">Top</a></li>
                        <li class="nav-item"><a class="nav-link" href="components/navbar/combo.html">
                            <div class="d-flex align-items-center">Combo<span class="badge badge-pill ml-2 badge-soft-success">New</span></div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/cookie-notice.html">Cookie notice</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/page-headers.html">Page headers</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/pagination.html">Pagination</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/popovers.html">Popovers</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/progress.html">Progress</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/scrollspy.html">Scrollspy</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/sidepanel.html">Sidepanel</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/spinners.html">Spinners</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/tables.html">Tables</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/tabs.html">Tabs</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/toasts.html">Toasts</a></li>
                    <li class="nav-item"><a class="nav-link" href="components/tooltips.html">Tooltips</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#utilities" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="utilities">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><svg class="svg-inline--fa fa-fire fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="fire" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M216 23.86c0-23.8-30.65-32.77-44.15-13.04C48 191.85 224 200 224 288c0 35.63-29.11 64.46-64.85 63.99-35.17-.45-63.15-29.77-63.15-64.94v-85.51c0-21.7-26.47-32.23-41.43-16.5C27.8 213.16 0 261.33 0 320c0 105.87 86.13 192 192 192s192-86.13 192-192c0-170.29-168-193-168-296.14z"></path></svg><!-- <span class="fas fa-fire"></span> --></span><span class="nav-link-text">Utilities</span></div>
                  </a>
                  <ul class="nav collapse" id="utilities" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="utilities/borders.html">Borders</a></li>
                    <li class="nav-item"><a class="nav-link" href="utilities/clearfix.html">Clearfix</a></li>
                    <li class="nav-item"><a class="nav-link" href="utilities/close-icon.html">Close icon</a></li>
                    <li class="nav-item"><a class="nav-link" href="utilities/colors.html">Colors</a></li>
                    <li class="nav-item"><a class="nav-link" href="utilities/display.html">Display</a></li>
                    <li class="nav-item"><a class="nav-link" href="utilities/embed.html">Embed</a></li>
                    <li class="nav-item"><a class="nav-link" href="utilities/figures.html">Figures</a></li>
                    <li class="nav-item"><a class="nav-link" href="utilities/flex.html">Flex</a></li>
                    <li class="nav-item"><a class="nav-link" href="utilities/grid.html">Grid</a></li>
                    <li class="nav-item"><a class="nav-link" href="utilities/sizing.html">Sizing</a></li>
                    <li class="nav-item"><a class="nav-link" href="utilities/spacing.html">Spacing</a></li>
                    <li class="nav-item"><a class="nav-link" href="utilities/stretched-link.html">Stretched link</a></li>
                    <li class="nav-item"><a class="nav-link" href="utilities/typography.html">Typography</a></li>
                    <li class="nav-item"><a class="nav-link" href="utilities/vertical-align.html">Vertical align</a></li>
                    <li class="nav-item"><a class="nav-link" href="utilities/visibility.html">Visibility</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><svg class="svg-inline--fa fa-plug fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plug" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M320,32a32,32,0,0,0-64,0v96h64Zm48,128H16A16,16,0,0,0,0,176v32a16,16,0,0,0,16,16H32v32A160.07,160.07,0,0,0,160,412.8V512h64V412.8A160.07,160.07,0,0,0,352,256V224h16a16,16,0,0,0,16-16V176A16,16,0,0,0,368,160ZM128,32a32,32,0,0,0-64,0v96h64Z"></path></svg><!-- <span class="fas fa-plug"></span> --></span><span class="nav-link-text">Plugins</span></div>
                  </a>
                  <ul class="nav collapse" id="plugins" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="plugins/bootstrap-wizard.html">Bootstrap wizard</a></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins-charts" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins-charts">Charts</a>
                      <ul class="nav collapse" id="plugins-charts" data-parent="#plugins">
                        <li class="nav-item"><a class="nav-link" href="plugins/charts/chart-js.html">Chart js</a></li>
                        <li class="nav-item"><a class="nav-link" href="plugins/charts/echarts.html">Echarts</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/countdown.html">Countdown</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/data-table.html">Data table</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/date-picker.html">Date picker</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/draggable.html">Draggable</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/dropzone.html">Dropzone</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/emojionearea.html">Emojionearea</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/fancybox.html">Fancybox</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/fontawesome.html">Fontawesome</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/inline-player.html">Inline player</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/jquery-validation.html">Jquery validation</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/lightbox.html">Lightbox</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/lottie.html">Lottie</a></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins-map" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins-map">Map</a>
                      <ul class="nav collapse" id="plugins-map" data-parent="#plugins">
                        <li class="nav-item"><a class="nav-link" href="plugins/map/google-map.html">Google map</a></li>
                        <li class="nav-item"><a class="nav-link" href="plugins/map/leaflet-map.html">Leaflet map</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/toastr.html">Toastr</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/owl-carousel.html">Owl carousel</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/perfect-scrollbar.html">Perfect scrollbar</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/progressbar.html">Progressbar</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/raty.html">Raty</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/select2.html">Select2</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/tinymce.html">Tinymce</a></li>
                    <li class="nav-item"><a class="nav-link" href="plugins/typed-text.html">Typed text</a></li>
                  </ul>
                </li>
              </ul>
              <div class="navbar-vertical-divider">
                <hr class="navbar-vertical-hr my-2">
              </div>
              <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#documentation" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="documentation">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><svg class="svg-inline--fa fa-book fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M448 360V24c0-13.3-10.7-24-24-24H96C43 0 0 43 0 96v320c0 53 43 96 96 96h328c13.3 0 24-10.7 24-24v-16c0-7.5-3.5-14.3-8.9-18.7-4.2-15.4-4.2-59.3 0-74.7 5.4-4.3 8.9-11.1 8.9-18.6zM128 134c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm0 64c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm253.4 250H96c-17.7 0-32-14.3-32-32 0-17.6 14.4-32 32-32h285.4c-1.9 17.1-1.9 46.9 0 64z"></path></svg><!-- <span class="fas fa-book"></span> --></span><span class="nav-link-text">Documentation</span></div>
                  </a>
                  <ul class="nav collapse" id="documentation" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="documentation/getting-started.html">Getting started</a></li>
                    <li class="nav-item"><a class="nav-link" href="documentation/file-structure.html">File structure</a></li>
                    <li class="nav-item"><a class="nav-link" href="documentation/customization.html">Customization</a></li>
                    <li class="nav-item"><a class="nav-link" href="documentation/dark-mode.html">Dark mode</a></li>
                    <li class="nav-item"><a class="nav-link" href="documentation/fluid-layout.html">Fluid layout</a></li>
                    <li class="nav-item"><a class="nav-link" href="documentation/gulp.html">Gulp</a></li>
                    <li class="nav-item"><a class="nav-link" href="documentation/RTL.html">RTL</a></li>
                    <li class="nav-item"><a class="nav-link" href="documentation/plugins.html">Plugins</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="changelog.html">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><svg class="svg-inline--fa fa-code-branch fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="code-branch" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M384 144c0-44.2-35.8-80-80-80s-80 35.8-80 80c0 36.4 24.3 67.1 57.5 76.8-.6 16.1-4.2 28.5-11 36.9-15.4 19.2-49.3 22.4-85.2 25.7-28.2 2.6-57.4 5.4-81.3 16.9v-144c32.5-10.2 56-40.5 56-76.3 0-44.2-35.8-80-80-80S0 35.8 0 80c0 35.8 23.5 66.1 56 76.3v199.3C23.5 365.9 0 396.2 0 432c0 44.2 35.8 80 80 80s80-35.8 80-80c0-34-21.2-63.1-51.2-74.6 3.1-5.2 7.8-9.8 14.9-13.4 16.2-8.2 40.4-10.4 66.1-12.8 42.2-3.9 90-8.4 118.2-43.4 14-17.4 21.1-39.8 21.6-67.9 31.6-10.8 54.4-40.7 54.4-75.9zM80 64c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16 7.2-16 16-16zm0 384c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zm224-320c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16 7.2-16 16-16z"></path></svg><!-- <span class="fas fa-code-branch"></span> --></span><span class="nav-link-text"> Changelog</span><span class="badge badge-pill ml-2 badge-soft-primary">v2.7.1</span></div>
                  </a></li>
              </ul>
              <div class="settings px-3 px-xl-0">
                <div class="navbar-vertical-divider px-0">
                  <hr class="navbar-vertical-hr my-3">
                </div><a class="btn btn-sm btn-block btn-purchase mb-3" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/"> Purchase</a>
              </div>
            </div>
          </div>
        </nav>
        
        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand navbar-glass-shadow" style="width: 1101px;">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand mr-1 mr-sm-3" href="index.html">
              <div class="d-flex align-items-center"><img class="mr-2" src="assets/img/illustrations/falcon.png" alt="" width="40"><span class="text-sans-serif">falcon</span></div>
            </a>
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              <li class="nav-item">
                <form class="form-inline search-box"><input class="form-control rounded-pill search-input" type="search" placeholder="Search..." aria-label="Search"><svg class="svg-inline--fa fa-search fa-w-16 position-absolute text-400 search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg><!-- <span class="position-absolute fas fa-search text-400 search-box-icon"></span> --></form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
              <li class="nav-item d-none d-md-block">
                <a class="nav-link px-3 py-0" href="https://prium.github.io/falcon/v3.0.0-alpha3/" target="_blank"><img src="assets/img/logos/bootstrap-5.png" alt="" height="35"></a></li>
              <li class="nav-item">
                <a class="nav-link settings-popover" href="#settings-modal" data-toggle="modal"><span class="ripple"></span><span class="fa-spin position-absolute a-0 d-flex flex-center"><span class="icon-spin position-absolute a-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="e-commerce/shopping-cart.html"><svg class="svg-inline--fa fa-shopping-cart fa-w-18 fs-4" data-fa-transform="shrink-7" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="" style="transform-origin: 0.5625em 0.5em;"><g transform="translate(288 256)"><g transform="translate(0, 0)  scale(0.5625, 0.5625)  rotate(0 0 0)"><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z" transform="translate(-288 -256)"></path></g></g></svg><!-- <span class="fas fa-shopping-cart fs-4" data-fa-transform="shrink-7"></span> --><span class="notification-indicator-number">1</span></a>
              </li>
              <li class="nav-item dropdown dropdown-on-hover">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-bell fa-w-14 fs-4" data-fa-transform="shrink-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.5em;"><g transform="translate(224 256)"><g transform="translate(0, 0)  scale(0.625, 0.625)  rotate(0 0 0)"><path fill="currentColor" d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z" transform="translate(-224 -256)"></path></g></g></svg><!-- <span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span> --></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none" style="max-width: 20rem">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto"><a class="card-link font-weight-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="list-group list-group-flush font-weight-normal fs--1">
                      <div class="list-group-title">NEW</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush bg-200" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl mr-3">
                              <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="">
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                            <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="notification notification-flush bg-200" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl mr-3">
                              <div class="avatar-name rounded-circle"><span>AB</span></div>
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                            <span class="notification-time"><svg class="svg-inline--fa fa-gratipay fa-w-16 mr-1 text-danger" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="gratipay" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm114.6 226.4l-113 152.7-112.7-152.7c-8.7-11.9-19.1-50.4 13.6-72 28.1-18.1 54.6-4.2 68.5 11.9 15.9 17.9 46.6 16.9 61.7 0 13.9-16.1 40.4-30 68.1-11.9 32.9 21.6 22.6 60 13.8 72z"></path></svg><!-- <span class="mr-1 fab fa-gratipay text-danger"></span> -->9hr</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-title">EARLIER</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl mr-3">
                              <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="">
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">The forecast today shows a low of 20℃ in California. See today's weather.</p>
                            <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">🌤️</span>1d</span>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top-0"><a class="card-link d-block" href="pages/notifications.html">View all</a></div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="">
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white rounded-soft py-2">
                    <a class="dropdown-item font-weight-bold text-warning" href="#!"><svg class="svg-inline--fa fa-crown fa-w-20 mr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="crown" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M528 448H112c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h416c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm64-320c-26.5 0-48 21.5-48 48 0 7.1 1.6 13.7 4.4 19.8L476 239.2c-15.4 9.2-35.3 4-44.2-11.6L350.3 85C361 76.2 368 63 368 48c0-26.5-21.5-48-48-48s-48 21.5-48 48c0 15 7 28.2 17.7 37l-81.5 142.6c-8.9 15.6-28.9 20.8-44.2 11.6l-72.3-43.4c2.7-6 4.4-12.7 4.4-19.8 0-26.5-21.5-48-48-48S0 149.5 0 176s21.5 48 48 48c2.6 0 5.2-.4 7.7-.8L128 416h384l72.3-192.8c2.5.4 5.1.8 7.7.8 26.5 0 48-21.5 48-48s-21.5-48-48-48z"></path></svg><!-- <span class="fas fa-crown mr-1"></span> --><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="pages/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages/settings.html">Settings</a>
                    <a class="dropdown-item" href="authentication/basic/logout.html">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          
          <script>
              localStorage.clear();
            // var navbarPosition = localStorage.getItem('navbarPosition');
            // var navbarVertical = document.querySelector('.navbar-vertical');
            // var navbarTopVertical = document.querySelector('.content .navbar-top');
            // var navbarTop = document.querySelector('[data-layout] .navbar-top');
            // var navbarTopCombo = document.querySelector('.content .navbar-top-combo');

            // if (navbarPosition === 'top') {
            //   navbarTop.removeAttribute('style');
            //   navbarTopVertical.parentNode.removeChild(navbarTopVertical);
            //   navbarVertical.parentNode.removeChild(navbarVertical);
            //   navbarTopCombo.parentNode.removeChild(navbarTopCombo);
            // } else if (navbarPosition === 'combo') {
            //   navbarVertical.removeAttribute('style');
            //   navbarTopCombo.removeAttribute('style');
            //   navbarTop.parentNode.removeChild(navbarTop);
            //   navbarTopVertical.parentNode.removeChild(navbarTopVertical);
            // } else {
            //   navbarVertical.removeAttribute('style');
            //   navbarTopVertical.removeAttribute('style');
            //   navbarTop.parentNode.removeChild(navbarTop);
            //   navbarTopCombo.parentNode.removeChild(navbarTopCombo);
            // }
          </script>
          <div class="card mb-3">
            <div class="card-body rounded-soft bg-gradient"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
              <div class="row text-white align-items-center no-gutters">
                <div class="col">
                  <h4 class="text-white mb-0">Today $764.39</h4>
                  <p class="fs--1 font-weight-semi-bold">Yesterday <span class="opacity-50">$684.87</span></p>
                </div>
                <div class="col-auto d-none d-sm-block"><select class="custom-select custom-select-sm mb-3" id="dashboard-chart-select">
                    <option value="all">All Payments</option>
                    <option value="successful" selected="selected">Successful Payments</option>
                    <option value="failed">Failed Payments</option>
                  </select></div>
              </div><canvas class="max-w-100 rounded chartjs-render-monitor" id="chart-line" width="1031" height="238" aria-label="Line chart" role="img" style="display: block; width: 1031px; height: 238px;"></canvas>
            </div>
          </div>
          <div class="card bg-light mb-3">
            <div class="card-body p-3">
              <p class="fs--1 mb-0"><a href="#!"><svg class="svg-inline--fa fa-exchange-alt fa-w-16 mr-2" data-fa-transform="rotate-90" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exchange-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(1, 1)  rotate(90 0 0)"><path fill="currentColor" d="M0 168v-16c0-13.255 10.745-24 24-24h360V80c0-21.367 25.899-32.042 40.971-16.971l80 80c9.372 9.373 9.372 24.569 0 33.941l-80 80C409.956 271.982 384 261.456 384 240v-48H24c-13.255 0-24-10.745-24-24zm488 152H128v-48c0-21.314-25.862-32.08-40.971-16.971l-80 80c-9.372 9.373-9.372 24.569 0 33.941l80 80C102.057 463.997 128 453.437 128 432v-48h360c13.255 0 24-10.745 24-24v-16c0-13.255-10.745-24-24-24z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="fas fa-exchange-alt mr-2" data-fa-transform="rotate-90"></span> -->A payout for <strong>$921.42 </strong>was deposited 13 days ago</a>. Your next deposit is expected on <strong>Tuesday, March 13.</strong></p>
            </div>
          </div>
          <div class="card-deck">
            <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
              <div class="bg-holder bg-card" style="background-image:url(assets/img/illustrations/corner-1.png);"></div>
              <!--/.bg-holder-->
              <div class="card-body position-relative">
                <h6>Customers<span class="badge badge-soft-warning rounded-capsule ml-2">-0.23%</span></h6>
                <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning">58.39k</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">See all<svg class="svg-inline--fa fa-angle-right fa-w-8 ml-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span> --></a>
              </div>
            </div>
            <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
              <div class="bg-holder bg-card" style="background-image:url(assets/img/illustrations/corner-2.png);"></div>
              <!--/.bg-holder-->
              <div class="card-body position-relative">
                <h6>Orders<span class="badge badge-soft-info rounded-capsule ml-2">0.0%</span></h6>
                <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info">73.46k</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">All orders<svg class="svg-inline--fa fa-angle-right fa-w-8 ml-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span> --></a>
              </div>
            </div>
            <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
              <div class="bg-holder bg-card" style="background-image:url(assets/img/illustrations/corner-3.png);"></div>
              <!--/.bg-holder-->
              <div class="card-body position-relative">
                <h6>Revenue<span class="badge badge-soft-success rounded-capsule ml-2">9.54%</span></h6>
                <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif" data-countup="{&quot;count&quot;:43594,&quot;format&quot;:&quot;comma&quot;,&quot;prefix&quot;:&quot;$&quot;}">$43,594</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">Statistics<svg class="svg-inline--fa fa-angle-right fa-w-8 ml-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span> --></a>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <div class="row align-items-center justify-content-between">
                <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                  <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Recent Purchases</h5>
                </div>
                <div class="col-6 col-sm-auto ml-auto text-right pl-0">
                  <div class="d-none" id="purchases-actions">
                    <div class="input-group input-group-sm"><select class="custom-select cus" aria-label="Bulk actions">
                        <option selected="">Bulk actions</option>
                        <option value="Refund">Refund</option>
                        <option value="Delete">Delete</option>
                        <option value="Archive">Archive</option>
                      </select><button class="btn btn-falcon-default btn-sm ml-2" type="button">Apply</button></div>
                  </div>
                  <div id="dashboard-actions"><button class="btn btn-falcon-default btn-sm" type="button"><svg class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.625em;"><g transform="translate(224 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" transform="translate(-224 -256)"></path></g></g></svg><!-- <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span> --><span class="d-none d-sm-inline-block ml-1">New</span></button><button class="btn btn-falcon-default btn-sm mx-2" type="button"><svg class="svg-inline--fa fa-filter fa-w-16" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.625em;"><g transform="translate(256 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span> --><span class="d-none d-sm-inline-block ml-1">Filter</span></button><button class="btn btn-falcon-default btn-sm" type="button"><svg class="svg-inline--fa fa-external-link-alt fa-w-16" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="external-link-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.625em;"><g transform="translate(256 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span> --><span class="d-none d-sm-inline-block ml-1">Export</span></button></div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pt-0">
              <div class="dashboard-data-table">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row mx-1"><div class="col-sm-12 col-md-6 px-3"></div><div class="col-sm-12 col-md-6 px-3"></div></div><div class="table-responsive"><table class="table table-sm table-dashboard fs--1 data-table border-bottom dataTable no-footer" data-options="{&quot;responsive&quot;:false,&quot;pagingType&quot;:&quot;simple&quot;,&quot;lengthChange&quot;:false,&quot;searching&quot;:false,&quot;pageLength&quot;:8,&quot;columnDefs&quot;:[{&quot;targets&quot;:[0,6],&quot;orderable&quot;:false}],&quot;language&quot;:{&quot;info&quot;:&quot;_START_ to _END_ Items of _TOTAL_ — <a href=\&quot;#!\&quot; class=\&quot;font-weight-semi-bold\&quot;> view all <span class=\&quot;fas fa-angle-right\&quot; data-fa-transform=\&quot;down-1\&quot;></span> </a>&quot;},&quot;buttons&quot;:[&quot;copy&quot;,&quot;excel&quot;]}" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                  <thead class="bg-200 text-900">
                    <tr role="row"><th class="no-sort pr-1 align-middle data-table-row-bulk-select sorting_asc" rowspan="1" colspan="1" aria-label="
                        
                      " style="width: 28px;">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select" id="checkbox-bulk-purchases-select" type="checkbox" data-checkbox-body="#purchases" data-checkbox-actions="#purchases-actions" data-checkbox-replaced-element="#dashboard-actions"><label class="custom-control-label" for="checkbox-bulk-purchases-select"></label></div>
                      </th><th class="sort pr-1 align-middle sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 168.203px;">Customer</th><th class="sort pr-1 align-middle sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 182.203px;">Email</th><th class="sort pr-1 align-middle sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending" style="width: 359.203px;">Product</th><th class="sort pr-1 align-middle text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Payment: activate to sort column ascending" style="width: 106.203px;">Payment</th><th class="sort pr-1 align-middle text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 94.2031px;">Amount</th><th class="no-sort pr-1 align-middle data-table-row-action sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 56.2031px;"></th></tr>
                  </thead>
                  <tbody id="purchases">
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                  <tr class="btn-reveal-trigger odd" role="row">
                      <td class="align-middle sorting_1">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-0"><label class="custom-control-label" for="checkbox-0"></label></div>
                      </td>
                      <th class="align-middle"><a href="pages/customer-details.html">Sylvia Plath</a></th>
                      <td class="align-middle">john@gmail.com</td>
                      <td class="align-middle">Slick - Drag &amp; Drop Bootstrap Generator</td>
                      <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<svg class="svg-inline--fa fa-check fa-w-16 ml-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span> --></span></td>
                      <td class="align-middle text-right">$99</td>
                      <td class="align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown0" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> --></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown0">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr><tr class="btn-reveal-trigger even" role="row">
                      <td class="align-middle sorting_1">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-1"><label class="custom-control-label" for="checkbox-1"></label></div>
                      </td>
                      <th class="align-middle"><a href="pages/customer-details.html">Homer</a></th>
                      <td class="align-middle">sylvia@mail.ru</td>
                      <td class="align-middle">Bose SoundSport Wireless Headphones</td>
                      <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<svg class="svg-inline--fa fa-check fa-w-16 ml-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span> --></span></td>
                      <td class="align-middle text-right">$634</td>
                      <td class="align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown1" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> --></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown1">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr><tr class="btn-reveal-trigger odd" role="row">
                      <td class="align-middle sorting_1">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-2"><label class="custom-control-label" for="checkbox-2"></label></div>
                      </td>
                      <th class="align-middle"><a href="pages/customer-details.html">Edgar Allan Poe</a></th>
                      <td class="align-middle">edgar@yahoo.com</td>
                      <td class="align-middle">All-New Fire HD 8 Kids Edition Tablet</td>
                      <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-secondary">Blocked<svg class="svg-inline--fa fa-ban fa-w-16 ml-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ban" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M256 8C119.034 8 8 119.033 8 256s111.034 248 248 248 248-111.034 248-248S392.967 8 256 8zm130.108 117.892c65.448 65.448 70 165.481 20.677 235.637L150.47 105.216c70.204-49.356 170.226-44.735 235.638 20.676zM125.892 386.108c-65.448-65.448-70-165.481-20.677-235.637L361.53 406.784c-70.203 49.356-170.226 44.736-235.638-20.676z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span> --></span></td>
                      <td class="align-middle text-right">$199</td>
                      <td class="align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown2" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> --></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown2">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr><tr class="btn-reveal-trigger even" role="row">
                      <td class="align-middle sorting_1">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-3"><label class="custom-control-label" for="checkbox-3"></label></div>
                      </td>
                      <th class="align-middle"><a href="pages/customer-details.html">William Butler Yeats</a></th>
                      <td class="align-middle">william@gmail.com</td>
                      <td class="align-middle">Apple iPhone XR (64GB)</td>
                      <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<svg class="svg-inline--fa fa-check fa-w-16 ml-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span> --></span></td>
                      <td class="align-middle text-right">$798</td>
                      <td class="align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown3" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> --></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown3">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr><tr class="btn-reveal-trigger odd" role="row">
                      <td class="align-middle sorting_1">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-4"><label class="custom-control-label" for="checkbox-4"></label></div>
                      </td>
                      <th class="align-middle"><a href="pages/customer-details.html">Rabindranath Tagore</a></th>
                      <td class="align-middle">tagore@twitter.com</td>
                      <td class="align-middle">ASUS Chromebook C202SA-YS02 11.6"</td>
                      <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-secondary">Blocked<svg class="svg-inline--fa fa-ban fa-w-16 ml-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ban" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M256 8C119.034 8 8 119.033 8 256s111.034 248 248 248 248-111.034 248-248S392.967 8 256 8zm130.108 117.892c65.448 65.448 70 165.481 20.677 235.637L150.47 105.216c70.204-49.356 170.226-44.735 235.638 20.676zM125.892 386.108c-65.448-65.448-70-165.481-20.677-235.637L361.53 406.784c-70.203 49.356-170.226 44.736-235.638-20.676z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span> --></span></td>
                      <td class="align-middle text-right">$318</td>
                      <td class="align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown4" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> --></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown4">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr><tr class="btn-reveal-trigger even" role="row">
                      <td class="align-middle sorting_1">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-5"><label class="custom-control-label" for="checkbox-5"></label></div>
                      </td>
                      <th class="align-middle"><a href="pages/customer-details.html">Emily Dickinson</a></th>
                      <td class="align-middle">emily@gmail.com</td>
                      <td class="align-middle">Mirari OK to Wake! Alarm Clock &amp; Night-Light</td>
                      <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-warning">Pending<svg class="svg-inline--fa fa-stream fa-w-16 ml-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="stream" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M16 128h416c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16H16C7.16 32 0 39.16 0 48v64c0 8.84 7.16 16 16 16zm480 80H80c-8.84 0-16 7.16-16 16v64c0 8.84 7.16 16 16 16h416c8.84 0 16-7.16 16-16v-64c0-8.84-7.16-16-16-16zm-64 176H16c-8.84 0-16 7.16-16 16v64c0 8.84 7.16 16 16 16h416c8.84 0 16-7.16 16-16v-64c0-8.84-7.16-16-16-16z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ml-1 fas fa-stream" data-fa-transform="shrink-2"></span> --></span></td>
                      <td class="align-middle text-right">$11</td>
                      <td class="align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown5" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> --></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown5">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr><tr class="btn-reveal-trigger odd" role="row">
                      <td class="align-middle sorting_1">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-6"><label class="custom-control-label" for="checkbox-6"></label></div>
                      </td>
                      <th class="align-middle"><a href="pages/customer-details.html">Giovanni Boccaccio</a></th>
                      <td class="align-middle">giovanni@outlook.com</td>
                      <td class="align-middle">Summer Infant Contoured Changing Pad</td>
                      <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<svg class="svg-inline--fa fa-check fa-w-16 ml-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span> --></span></td>
                      <td class="align-middle text-right">$31</td>
                      <td class="align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown6" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> --></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown6">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr><tr class="btn-reveal-trigger even" role="row">
                      <td class="align-middle sorting_1">
                        <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-7"><label class="custom-control-label" for="checkbox-7"></label></div>
                      </td>
                      <th class="align-middle"><a href="pages/customer-details.html">Oscar Wilde</a></th>
                      <td class="align-middle">oscar@hotmail.com</td>
                      <td class="align-middle">Munchkin 6 Piece Fork and Spoon Set</td>
                      <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<svg class="svg-inline--fa fa-check fa-w-16 ml-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span> --></span></td>
                      <td class="align-middle text-right">$43</td>
                      <td class="align-middle white-space-nowrap">
                        <div class="dropdown text-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown7" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> --></button>
                          <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown7">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr></tbody>
                </table></div><div class="row mx-1 align-items-center justify-content-center justify-content-md-between"><div class="col-auto mb-2 mb-sm-0"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">1 to 8 Items of 11 — <a href="#!" class="font-weight-semi-bold"> view all <svg class="svg-inline--fa fa-angle-right fa-w-8" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right" data-fa-transform="down-1"></span> --> </a></div></div><div class="col-auto"><div class="dataTables_paginate paging_simple" id="DataTables_Table_0_paginate"><ul class="pagination pagination-sm"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-lg-4 pr-lg-2">
              <div class="card h-100 bg-gradient">
                <div class="card-header bg-transparent">
                  <h5 class="text-white">Active users right now</h5>
                  <div class="real-time-user display-1 font-weight-normal text-white" data-countup="{&quot;count&quot;:119}">64</div>
                </div>
                <div class="card-body text-white fs--1"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <p class="border-bottom pb-2" style="border-color: rgba(255, 255, 255, 0.15) !important">Page views per second</p><canvas class="max-w-100 chartjs-render-monitor" id="real-time-user" width="309" height="123" style="display: block; width: 309px; height: 123px;"></canvas>
                  <div class="list-group-flush mt-4">
                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1 font-weight-semi-bold border-top-0" style="border-color: rgba(255, 255, 255, 0.15)">
                      <p class="mb-0">Top Active Pages</p>
                      <p class="mb-0">Active Users</p>
                    </div>
                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
                      <p class="mb-0">/bootstrap-themes/</p>
                      <p class="mb-0">3</p>
                    </div>
                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
                      <p class="mb-0">/tags/html5/</p>
                      <p class="mb-0">3</p>
                    </div>
                    <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none" style="border-color: rgba(255, 255, 255, 0.05)">
                      <p class="mb-0">/</p>
                      <p class="mb-0">2</p>
                    </div>
                    <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none" style="border-color: rgba(255, 255, 255, 0.05)">
                      <p class="mb-0">/preview/falcon/dashboard/</p>
                      <p class="mb-0">2</p>
                    </div>
                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
                      <p class="mb-0">/100-best-themes...all-time/</p>
                      <p class="mb-0">1</p>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-right bg-transparent border-top" style="border-color: rgba(255, 255, 255, 0.15) !important"><a class="text-white" href="#!">Real-time report<svg class="svg-inline--fa fa-chevron-right fa-w-10 ml-1 fs--1" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <span class="fa fa-chevron-right ml-1 fs--1"></span> --></a></div>
              </div>
            </div>
            <div class="col-lg-8 pl-lg-2">
              <div class="card h-100 mt-3 mt-lg-0">
                <div class="card-header bg-light d-flex flex-between-center">
                  <h5 class="mb-0">Active users</h5>
                  <div class="dropdown text-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> --></button>
                    <div class="dropdown-menu dropdown-menu-right border py-0">
                      <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Move</a><a class="dropdown-item" href="#!">Resize</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body h-100 p-0">
                  <div class="h-100 bg-white leaflet-container leaflet-fade-anim leaflet-grab leaflet-touch-drag" id="map" style="min-height: 300px; position: relative;" tabindex="0"><div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);"><div class="leaflet-pane leaflet-tile-pane"><div class="leaflet-layer " style="z-index: 1; filter: brightness(101%) contrast(101%) hue-rotate(23deg) saturate(225%); opacity: 1;"><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(0.707107);"><img alt="" role="presentation" src="https://c.basemaps.cartocdn.com/light_all/2/1/1.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(243px, 64px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.basemaps.cartocdn.com/light_all/2/2/1.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(499px, 64px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.basemaps.cartocdn.com/light_all/2/1/2.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(243px, 320px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.basemaps.cartocdn.com/light_all/2/2/2.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(499px, 320px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.basemaps.cartocdn.com/light_all/2/1/0.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(243px, -192px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.basemaps.cartocdn.com/light_all/2/2/0.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(499px, -192px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.basemaps.cartocdn.com/light_all/2/0/1.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-13px, 64px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.basemaps.cartocdn.com/light_all/2/3/1.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(755px, 64px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.basemaps.cartocdn.com/light_all/2/0/2.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-13px, 320px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.basemaps.cartocdn.com/light_all/2/3/2.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(755px, 320px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.basemaps.cartocdn.com/light_all/2/1/3.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(243px, 576px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.basemaps.cartocdn.com/light_all/2/2/3.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(499px, 576px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.basemaps.cartocdn.com/light_all/2/0/0.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-13px, -192px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.basemaps.cartocdn.com/light_all/2/3/0.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(755px, -192px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.basemaps.cartocdn.com/light_all/2/0/3.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-13px, 576px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.basemaps.cartocdn.com/light_all/2/3/3.png" class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(755px, 576px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-shadow-pane"></div><div class="leaflet-pane leaflet-overlay-pane"><svg pointer-events="none" class="leaflet-zoom-animated" width="847" height="491" viewBox="-71 -41 847 491" style="transform: translate3d(-71px, -41px, 0px);"><g></g></svg></div><div class="leaflet-pane leaflet-marker-pane"><div class="leaflet-marker-icon marker-cluster marker-cluster-small leaflet-zoom-animated leaflet-interactive" tabindex="0" style="margin-left: -20px; margin-top: -20px; width: 40px; height: 40px; transform: translate3d(407px, 288px, 0px); z-index: 288;"><div><span>8</span></div></div><div class="leaflet-marker-icon marker-cluster marker-cluster-small leaflet-zoom-animated leaflet-interactive" tabindex="0" style="margin-left: -20px; margin-top: -20px; width: 40px; height: 40px; transform: translate3d(222px, 261px, 0px); z-index: 261;"><div><span>6</span></div></div><div class="leaflet-marker-icon marker-cluster marker-cluster-small leaflet-zoom-animated leaflet-interactive" tabindex="0" style="margin-left: -20px; margin-top: -20px; width: 40px; height: 40px; transform: translate3d(706px, 310px, 0px); z-index: 310;"><div><span>2</span></div></div><div class="leaflet-marker-icon marker-cluster marker-cluster-small leaflet-zoom-animated leaflet-interactive" tabindex="0" style="margin-left: -20px; margin-top: -20px; width: 40px; height: 40px; transform: translate3d(459px, 191px, 0px); z-index: 191;"><div><span>8</span></div></div><div class="leaflet-marker-icon marker-cluster marker-cluster-small leaflet-zoom-animated leaflet-interactive" tabindex="0" style="margin-left: -20px; margin-top: -20px; width: 40px; height: 40px; transform: translate3d(502px, 128px, 0px); z-index: 128;"><div><span>2</span></div></div><div class="leaflet-marker-icon marker-cluster marker-cluster-medium leaflet-zoom-animated leaflet-interactive" tabindex="0" style="margin-left: -20px; margin-top: -20px; width: 40px; height: 40px; transform: translate3d(140px, 104px, 0px); z-index: 104;"><div><span>11</span></div></div><div class="leaflet-marker-icon marker-cluster marker-cluster-medium leaflet-zoom-animated leaflet-interactive" tabindex="0" style="margin-left: -20px; margin-top: -20px; width: 40px; height: 40px; transform: translate3d(205px, 126px, 0px); z-index: 126;"><div><span>26</span></div></div><div class="leaflet-marker-icon marker-cluster marker-cluster-large leaflet-zoom-animated leaflet-interactive" tabindex="0" style="margin-left: -20px; margin-top: -20px; width: 40px; height: 40px; transform: translate3d(352px, 100px, 0px); z-index: 100;"><div><span>100</span></div></div></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"></div><div class="leaflet-proxy leaflet-zoom-animated"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a></div></div></div></div>
                </div>
                <div class="card-footer bg-light">
                  <div class="row justify-content-between">
                    <div class="col-auto"><select class="custom-select custom-select-sm">
                        <option value="week" selected="selected">Last 7 days</option>
                        <option value="month">Last month</option>
                        <option value="year">Last year</option>
                      </select></div>
                    <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="#!"><span class="d-none d-sm-inline-block mr-1">Location</span>overview<svg class="svg-inline--fa fa-chevron-right fa-w-10 ml-1 fs--1" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <span class="fa fa-chevron-right ml-1 fs--1"></span> --></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer>
            <div class="row no-gutters justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none"> 2019 © <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v2.7.1</p>
              </div>
            </div>
          </footer>
        </div>
        <div class="modal fade modal-fixed-right modal-theme overflow-hidden" id="settings-modal" tabindex="-1" aria-labelledby="settings-modal-label" data-options="{&quot;autoShow&quot;:true,&quot;autoShowDelay&quot;:3000,&quot;showOnce&quot;:true}" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-dialog-vertical" role="document">
            <div class="modal-content border-0 vh-100 scrollbar perfect-scrollbar">
              <div class="modal-header modal-header-settings">
                <div class="z-index-1 py-1 flex-grow-1">
                  <h5 class="text-white" id="settings-modal-label"> <svg class="svg-inline--fa fa-palette fa-w-16 mr-2 fs-0" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="palette" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M204.3 5C104.9 24.4 24.8 104.3 5.2 203.4c-37 187 131.7 326.4 258.8 306.7 41.2-6.4 61.4-54.6 42.5-91.7-23.1-45.4 9.9-98.4 60.9-98.4h79.7c35.8 0 64.8-29.6 64.9-65.3C511.5 97.1 368.1-26.9 204.3 5zM96 320c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm32-128c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128-64c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 64c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"></path></svg><!-- <span class="fas fa-palette mr-2 fs-0"></span> -->Settings</h5>
                  <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
                </div><button class="close z-index-1" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body px-card">
                <h5 class="fs-0">Color Scheme</h5>
                <p class="fs--1">Choose the perfect color mode for your app. </p>
                <div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
                  <div class="btn btn-theme-default custom-control custom-radio custom-radio-success active"><label class="cursor-pointer hover-overlay" for="theme-mode-default"><img class="w-100" src="assets/img/generic/falcon-mode-default.jpg" alt=""></label><label class="cursor-pointer mb-0 d-flex justify-content-center pl-3" for="theme-mode-default"><input class="custom-control-input" id="theme-mode-default" type="radio" name="colorScheme" data-mode="DEFAULT" checked="checked" value="theme-mode-default" data-page-url="index.html"><span class="custom-control-label">Light</span></label></div>
                  <div class="btn btn-theme-dark custom-control custom-radio custom-radio-success"><label class="cursor-pointer hover-overlay" for="theme-mode-dark"><img class="w-100" src="assets/img/generic/falcon-mode-dark.jpg" alt=""></label><label class="cursor-pointer mb-0 d-flex justify-content-center pl-3" for="theme-mode-dark"><input class="custom-control-input" id="theme-mode-dark" type="radio" name="colorScheme" data-mode="DEFAULT" value="theme-mode-dark" data-page-url="documentation/dark-mode.html"><span class="custom-control-label">Dark</span></label></div>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                  <div class="media flex-grow-1"><img class="mr-2" src="assets/img/icons/left-arrow-from-left.svg" width="20" alt="">
                    <div class="media-body">
                      <h5 class="fs-0">RTL Mode</h5>
                      <p class="fs--1 mb-0">Switch your language direction </p>
                    </div>
                  </div>
                  <div class="custom-control custom-switch"><input class="custom-control-input" id="mode-rtl" type="checkbox" data-mode="DEFAULT"><label class="custom-control-label" for="mode-rtl"> </label></div>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                  <div class="media flex-grow-1"><img class="mr-2" src="assets/img/icons/arrows-h.svg" width="20" alt="">
                    <div class="media-body">
                      <h5 class="fs-0">Fluid Layout</h5>
                      <p class="fs--1 mb-0">Toggle container layout system </p>
                    </div>
                  </div>
                  <div class="custom-control custom-switch"><input class="custom-control-input" id="mode-fluid" type="checkbox"><label class="custom-control-label" for="mode-fluid"> </label></div>
                </div>
                <hr>
                <div class="media"><img class="mr-2" src="assets/img/icons/paragraph.svg" width="20" alt="">
                  <div class="media-body">
                    <h5 class="fs-0 d-flex align-items-center">Navigation Position <span class="badge badge-pill badge-soft-success fs--2 ml-2">Updated</span></h5>
                    <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
                    <div class="custom-control custom-radio custom-control-inline"><input class="custom-control-input" id="option-navbar-vertical" type="radio" name="navbar" value="vertical" checked="checked"><label class="custom-control-label" for="option-navbar-vertical">Vertical</label></div>
                    <div class="custom-control custom-radio custom-control-inline"><input class="custom-control-input" id="option-navbar-top" type="radio" name="navbar" value="top"><label class="custom-control-label" for="option-navbar-top">Top</label></div>
                    <div class="custom-control custom-radio custom-control-inline mr-0"><input class="custom-control-input" id="option-navbar-combo" type="radio" name="navbar" value="combo"><label class="custom-control-label" for="option-navbar-combo">Combo</label></div>
                  </div>
                </div>
                <hr>
                <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
                <p class="fs--1">Switch between styles for your vertical navbar </p>
                <div class="btn-group-toggle btn-block btn-group-navbar-style" data-toggle="buttons">
                  <div class="btn-group btn-block">
                    <div class="btn p-0 text-left custom-control custom-radio custom-radio-success mr-2"><label class="cursor-pointer w-100" for="navbar-style-transparent"><img class="w-100" src="assets/img/generic/default.png" alt=""></label><label class="cursor-pointer d-flex mb-0 pl-3 ml-2" for="navbar-style-transparent"><input class="custom-control-input" id="navbar-style-transparent" type="radio" name="navbarVertical" value="transparent"><span class="custom-control-label"> Transparent</span></label></div>
                    <div class="btn p-0 text-left custom-control custom-radio custom-radio-success mr-2"><label class="cursor-pointer w-100" for="navbar-style-inverted"><img class="w-100" src="assets/img/generic/inverted.png" alt=""></label><label class="cursor-pointer d-flex mb-0 pl-3 ml-2" for="navbar-style-inverted"><input class="custom-control-input" id="navbar-style-inverted" type="radio" name="navbarVertical" value="inverted"><span class="custom-control-label"> Inverted</span></label></div>
                  </div>
                  <div class="btn-group btn-block mt-3">
                    <div class="btn p-0 text-left custom-control custom-radio custom-radio-success mr-2"><label class="cursor-pointer w-100" for="navbar-style-card"><img class="w-100" src="assets/img/generic/card.png" alt=""></label><label class="cursor-pointer d-flex mb-0 pl-3 ml-2" for="navbar-style-card"><input class="custom-control-input" id="navbar-style-card" type="radio" name="navbarVertical" value="card"><span class="custom-control-label"> Card</span></label></div>
                    <div class="btn p-0 text-left custom-control custom-radio custom-radio-success mr-2 active"><label class="cursor-pointer w-100" for="navbar-style-vibrant"><img class="w-100" src="assets/img/generic/vibrant.png" alt=""></label><label class="cursor-pointer d-flex mb-0 pl-3 ml-2" for="navbar-style-vibrant"><input class="custom-control-input" id="navbar-style-vibrant" type="radio" name="navbarVertical" value="vibrant" checked="checked"><span class="custom-control-label"> Vibrant</span></label></div>
                  </div>
                </div>
                <hr>
                <div class="text-center mt-5"><img class="mb-4" src="assets/img/illustrations/settings.png" alt="" width="120">
                  <h5>Like What You See?</h5>
                  <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="btn btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/">Purchase</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 text-white position-relative modal-shape-header">
                <div class="position-relative z-index-1">
                  <div>
                    <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                    <p class="fs--1 mb-0">Please create your free Falcon account</p>
                  </div>
                </div><button class="close text-white position-absolute t-0 r-0 mt-1 mr-1" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body py-4 px-5">
                <form>
                  <div class="form-group"><label for="modal-auth-name">Name</label><input class="form-control" type="text" id="modal-auth-name"></div>
                  <div class="form-group"><label for="modal-auth-email">Email address</label><input class="form-control" type="email" id="modal-auth-email"></div>
                  <div class="form-row">
                    <div class="form-group col-6"><label for="modal-auth-password">Password</label><input class="form-control" type="password" id="modal-auth-password"></div>
                    <div class="form-group col-6"><label for="modal-auth-confirm-password">Confirm Password</label><input class="form-control" type="password" id="modal-auth-confirm-password"></div>
                  </div>
                  <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="modal-auth-register-checkbox"><label class="custom-control-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div>
                  <div class="form-group"><button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Register</button></div>
                </form>
                <div class="w-100 position-relative mt-5">
                  <hr class="text-300">
                  <div class="position-absolute absolute-centered t-0 px-3 bg-white text-sans-serif fs--1 text-500 text-nowrap">or register with</div>
                </div>
                <div class="form-group mb-0">
                  <div class="row no-gutters">
                    <div class="col-sm-6 pr-sm-1"><a class="btn btn-outline-google-plus btn-sm btn-block mt-2" href="#"><svg class="svg-inline--fa fa-google-plus-g fa-w-20 mr-2" data-fa-transform="grow-8" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google-plus-g" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="" style="transform-origin: 0.625em 0.5em;"><g transform="translate(320 256)"><g transform="translate(0, 0)  scale(1.5, 1.5)  rotate(0 0 0)"><path fill="currentColor" d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z" transform="translate(-320 -256)"></path></g></g></svg><!-- <span class="fab fa-google-plus-g mr-2" data-fa-transform="grow-8"></span> --> google</a></div>
                    <div class="col-sm-6 pl-sm-1"><a class="btn btn-outline-facebook btn-sm btn-block mt-2" href="#"><svg class="svg-inline--fa fa-facebook-square fa-w-14 mr-2" data-fa-transform="grow-8" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.5em;"><g transform="translate(224 256)"><g transform="translate(0, 0)  scale(1.5, 1.5)  rotate(0 0 0)"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z" transform="translate(-224 -256)"></path></g></g></svg><!-- <span class="fab fa-facebook-square mr-2" data-fa-transform="grow-8"></span> --> facebook</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="toast bg-white notice" id="cookie-notice" role="alert" data-options="{&quot;autoShow&quot;:false,&quot;autoShowDelay&quot;:3000,&quot;showOnce&quot;:true,&quot;cookieExpireTime&quot;:7200000}" data-autohide="false" aria-live="assertive" aria-atomic="true">
          <div class="toast-body d-flex justify-content-center px-5">
            <div class="d-lg-flex align-items-center text-center"><button class="close text-shadow-none position-absolute t-0 r-0 p-2 mr-2 mt-2" type="button" data-dismiss="toast" aria-label="Close"><span class="font-weight-medium" aria-hidden="true">×</span></button><img class="mr-2" src="assets/img/icons/cookie.png" width="20" alt="">
              <p class="mb-2 mb-lg-0"> Our site uses cookies. By continuing to use our site, you agree to our <a class="text-underline" href="components/cookie-notice.html">Cookie Policy</a>.</p><button class="btn btn-primary btn-sm ml-3" type="button" data-dismiss="toast" aria-label="Close">Ok, I Understand</button>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

     

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/config.navbar-vertical.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/lib/@fortawesome/all.min.js')}}"></script>
    <script src="{{asset('assets/lib/stickyfilljs/stickyfill.min.js')}}"></script>
    <script src="{{asset('assets/lib/sticky-kit/sticky-kit.min.js')}}"></script>
    <script src="{{asset('assets/lib/is_js/is.min.js')}}"></script>
    <script src="{{asset('assets/lib/lodash/lodash.min.js')}}"></script>
    <script src="{{asset('assets/lib/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <script src="{{asset('assets/lib/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/lib/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/lib/datatables-bs4/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/lib/datatables.net-responsive/dataTables.responsive.js')}}"></script>
    <script src="{{asset('assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.js')}}"></script>
    <script src="{{asset('assets/lib/leaflet/leaflet.js')}}"></script>
    <script src="{{asset('assets/lib/leaflet.markercluster/leaflet.markercluster.js')}}"></script>
    <script src="{{asset('assets/lib/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.min.js')}}"></script>
  </body>

</html>