@extends('layout.index')
@section('content')
<div class="content">

      <div class="d-flex align-items-stretch">
        <div class="sidebar py-3" id="sidebar">
          <h6 class="sidebar-heading">Main</h6>
          <ul class="list-unstyled">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted active" href="index.html">
                        <svg class="svg-icon svg-icon-md me-3">
                          <use xlink:href="icons/orion-svg-sprite.57a86639.svg#real-estate-1"> </use>
                        </svg><span class="sidebar-link-title">Dashboard</span></a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#cmsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse"> 
                        <svg class="svg-icon svg-icon-md me-3">
                          <use xlink:href="icons/orion-svg-sprite.57a86639.svg#reading-1"> </use>
                        </svg><span class="sidebar-link-title">CMS </span></a>
                  <ul class="sidebar-menu list-unstyled collapse " id="cmsDropdown">
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="cms-post.html">Posts</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="cms-post-new.html">Add new post</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="cms-category.html">Categories</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="cms-media.html">Media library</a></li>
                  </ul>
                </li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#widgetsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse"> 
                        <svg class="svg-icon svg-icon-md me-3">
                          <use xlink:href="icons/orion-svg-sprite.57a86639.svg#statistic-1"> </use>
                        </svg><span class="sidebar-link-title">Widgets </span></a>
                  <ul class="sidebar-menu list-unstyled collapse " id="widgetsDropdown">
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="widgets-stats.html">Stats</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="widgets-data.html">Data</a></li>
                  </ul>
                </li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#e-commerceDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse"> 
                        <svg class="svg-icon svg-icon-md me-3">
                          <use xlink:href="icons/orion-svg-sprite.57a86639.svg#delivery-truck-1"> </use>
                        </svg><span class="sidebar-link-title">E-commerce </span></a>
                  <ul class="sidebar-menu list-unstyled collapse " id="e-commerceDropdown">
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="e-commerce-products.html">Products</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="e-commerce-product-new.html">Products - New</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="e-commerce-orders.html">Orders</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="e-commerce-order.html">Order - Detail</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="e-commerce-customers.html">Customers</a></li>
                  </ul>
                </li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#pagesDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse"> 
                        <svg class="svg-icon svg-icon-md me-3">
                          <use xlink:href="icons/orion-svg-sprite.57a86639.svg#paper-stack-1"> </use>
                        </svg><span class="sidebar-link-title">Pages </span></a>
                  <ul class="sidebar-menu list-unstyled collapse " id="pagesDropdown">
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="pages-profile.html">Profile</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="pages-pricing.html">Pricing table</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="pages-contacts.html">Contacts</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="pages-invoice.html">Invoice</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="pages-knowledge-base.html">Knowledge base</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="pages-knowledge-base-topic.html">Knowledge base - Topic</a></li>
                  </ul>
                </li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#userDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse"> 
                        <svg class="svg-icon svg-icon-md me-3">
                          <use xlink:href="icons/orion-svg-sprite.57a86639.svg#man-1"> </use>
                        </svg><span class="sidebar-link-title">User </span></a>
                  <ul class="sidebar-menu list-unstyled collapse " id="userDropdown">
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="login.html">Login page</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="register.html">Register</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="login-2.html">Login v.2 <span class="badge bg-info ms-2 text-decoration-none">New</span></a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="register-2.html">Register v.2 <span class="badge bg-info ms-2 text-decoration-none">New</span></a></li>
                  </ul>
                </li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#componentsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse"> 
                        <svg class="svg-icon svg-icon-md me-3">
                          <use xlink:href="icons/orion-svg-sprite.57a86639.svg#sorting-1"> </use>
                        </svg><span class="sidebar-link-title">Components </span></a>
                  <ul class="sidebar-menu list-unstyled collapse " id="componentsDropdown">
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="components-cards.html">Cards</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="components-calendar.html">Calendar</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="components-gallery.html">Gallery</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="components-loading-buttons.html">Loading buttons</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="components-map.html">Maps</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="components-notifications.html">Notifications</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="components-preloader.html">Preloaders</a></li>
                  </ul>
                </li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#chartsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse"> 
                        <svg class="svg-icon svg-icon-md me-3">
                          <use xlink:href="icons/orion-svg-sprite.57a86639.svg#pie-chart-1"> </use>
                        </svg><span class="sidebar-link-title">Charts </span></a>
                  <ul class="sidebar-menu list-unstyled collapse " id="chartsDropdown">
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="charts.html">Charts</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="charts-gauge-sparkline.html">Gauge + Sparkline</a></li>
                  </ul>
                </li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#formsDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse"> 
                        <svg class="svg-icon svg-icon-md me-3">
                          <use xlink:href="icons/orion-svg-sprite.57a86639.svg#file-storage-1"> </use>
                        </svg><span class="sidebar-link-title">Forms </span></a>
                  <ul class="sidebar-menu list-unstyled collapse " id="formsDropdown">
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="forms.html">Basic forms</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="forms-advanced.html">Advanced forms</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="forms-dropzone.html">Files upload</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="forms-texteditor.html">Text editor</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="forms-validation.html">Validation</a></li>
                  </ul>
                </li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#tablesDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse"> 
                        <svg class="svg-icon svg-icon-md me-3">
                          <use xlink:href="icons/orion-svg-sprite.57a86639.svg#grid-1"> </use>
                        </svg><span class="sidebar-link-title">Tables </span></a>
                  <ul class="sidebar-menu list-unstyled collapse " id="tablesDropdown">
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="tables.html">Bootstrap tables</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="tables-datatable.html">Datatable</a></li>
                  </ul>
                </li>
          </ul>
          <h6 class="sidebar-heading">Docs</h6>
          <ul class="list-unstyled">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="docs/introduction.html">
                        <svg class="svg-icon svg-icon-md me-3">
                          <use xlink:href="icons/orion-svg-sprite.57a86639.svg#angle-brackets-1"> </use>
                        </svg><span class="sidebar-link-title">Introduction</span></a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="docs/directory-structure.html">
                        <svg class="svg-icon svg-icon-md me-3">
                          <use xlink:href="icons/orion-svg-sprite.57a86639.svg#table-content-1"> </use>
                        </svg><span class="sidebar-link-title">Directory structure</span></a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="docs/gulp.html">
                        <svg class="svg-icon svg-icon-md me-3">
                          <use xlink:href="icons/orion-svg-sprite.57a86639.svg#keyboard-1"> </use>
                        </svg><span class="sidebar-link-title">Gulp.js</span></a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#cssDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse"> 
                        <svg class="svg-icon svg-icon-md me-3">
                          <use xlink:href="icons/orion-svg-sprite.57a86639.svg#design-1"> </use>
                        </svg><span class="sidebar-link-title">CSS </span></a>
                  <ul class="sidebar-menu list-unstyled collapse " id="cssDropdown">
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="docs/components-theme.html">CSS Components</a></li>
                    <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="docs/customizing-css.html">Customizing CSS</a></li>
                  </ul>
                </li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="docs/credits.html">
                        <svg class="svg-icon svg-icon-md me-3">
                          <use xlink:href="icons/orion-svg-sprite.57a86639.svg#star-medal-1"> </use>
                        </svg><span class="sidebar-link-title">Credits</span></a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted" href="docs/changelog.html">
                        <svg class="svg-icon svg-icon-md me-3">
                          <use xlink:href="icons/orion-svg-sprite.57a86639.svg#new-1"> </use>
                        </svg><span class="sidebar-link-title">Changelog</span></a></li>
          </ul>
        </div>
        <div class="page-holder bg-gray-100">
          <div class="container-fluid px-lg-4 px-xl-5">
            <section class="mb-3 mb-lg-5">
              <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card-widget h-100">
                    <div class="card-widget-body">
                      <div class="dot me-3 bg-indigo"></div>
                      <div class="text">
                        <h6 class="mb-0">Data consumed</h6><span class="text-gray-500">145,14 GB</span>
                      </div>
                    </div>
                    <div class="icon text-white bg-indigo"><i class="fas fa-server"></i></div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card-widget h-100">
                    <div class="card-widget-body">
                      <div class="dot me-3 bg-green"></div>
                      <div class="text">
                        <h6 class="mb-0">Open cases</h6><span class="text-gray-500">32</span>
                      </div>
                    </div>
                    <div class="icon text-white bg-green"><i class="far fa-clipboard"></i></div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card-widget h-100">
                    <div class="card-widget-body">
                      <div class="dot me-3 bg-blue"></div>
                      <div class="text">
                        <h6 class="mb-0">Work orders</h6><span class="text-gray-500">400</span>
                      </div>
                    </div>
                    <div class="icon text-white bg-blue"><i class="fa fa-dolly-flatbed"></i></div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card-widget h-100">
                    <div class="card-widget-body">
                      <div class="dot me-3 bg-red"></div>
                      <div class="text">
                        <h6 class="mb-0">New invoices</h6><span class="text-gray-500">123</span>
                      </div>
                    </div>
                    <div class="icon text-white bg-red"><i class="fas fa-receipt"></i></div>
                  </div>
                </div>
              </div>
            </section>
            <section class="mb-4 mb-lg-5">
              <h2 class="section-heading section-heading-ms mb-4 mb-lg-5">Finances 💰</h2>
              <div class="row">
                <div class="col-lg-7 mb-4 mb-lg-0">
                  <div class="card h-100">
                    <div class="card-header">
                      <h4 class="card-heading">Your Account Balance</h4>
                    </div>
                    <div class="card-body">
                      <div class="chart-holder w-100">
                        <canvas id="lineChart1"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 mb-4 mb-lg-0">
                  <div class="h-50 pb-4 pb-lg-2">
                    <div class="card h-100">
                      <div class="card-body d-flex">
                        <div class="row w-100 align-items-center">
                          <div class="col-sm-5 mb-4 mb-sm-0">
                            <h2 class="mb-0 d-flex align-items-center"><span>86.4</span><span class="dot bg-green d-inline-block ms-3"></span></h2><span class="text-muted text-uppercase small">Work hours</span>
                            <hr><small class="text-muted">Hours worked this month</small>
                          </div>
                          <div class="col-sm-7">
                            <canvas id="pieChartHome1"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="h-50 pt-lg-2">
                    <div class="card h-100">
                      <div class="card-body d-flex">
                        <div class="row w-100 align-items-center">
                          <div class="col-sm-5 mb-4 mb-sm-0">
                            <h2 class="mb-0 d-flex align-items-center"><span>325</span><span class="dot bg-indigo d-inline-block ms-3"></span></h2><span class="text-muted text-uppercase small">Tasks Completed</span>
                            <hr><small class="text-muted">Tasks Completed this months</small>
                          </div>
                          <div class="col-sm-7">
                            <canvas id="pieChartHome2"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="mb-4 mb-lg-5">
              <h2 class="section-heading section-heading-ms mb-4 mb-lg-5">Usage 📈   </h2>
              <div class="row">
                <div class="col-lg-5 mb-4 mb-lg-0">
                  <div class="h-50 pb-4 pb-lg-2">
                    <div class="card h-100">
                      <div class="card-body d-flex">
                        <div class="row w-100 align-items-center">
                          <div class="col-sm-5 mb-4 mb-sm-0">
                            <h2 class="mb-0 d-flex align-items-center"><span>86%</span><span class="dot bg-pink d-inline-block ms-3"></span></h2><span class="text-muted text-uppercase small">Monthly Usage</span>
                            <hr><small class="text-muted">Monthly allowed usage</small>
                          </div>
                          <div class="col-sm-7">
                            <canvas id="pieChartHome3"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="h-50 pt-lg-2">
                    <div class="card h-100">
                      <div class="card-body d-flex">
                        <div class="row w-100 align-items-center">
                          <div class="col-sm-5 mb-4 mb-sm-0">
                            <h2 class="mb-0 d-flex align-items-center"><span>$126,41</span><span class="dot bg-green d-inline-block ms-3"></span></h2><span class="text-muted text-uppercase small">All Income</span>
                            <hr><small class="text-muted">Lorem ipsum dolor sit</small>
                          </div>
                          <div class="col-sm-7">
                            <canvas id="pieChartHome4"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-heading">Your referrals</h4>
                    </div>
                    <div class="card-body">
                      <div class="chart-holder">
                        <canvas id="lineChart2"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="mb-4 mb-lg-5">
              <h2 class="section-heading section-heading-ms mb-4 mb-lg-5">Linked Cards 💳 </h2>
              <div class="row text-dark">
                <div class="col-md-6 col-xl-4 mb-4">
                  <div class="card credit-card bg-hover-gradient-indigo">
                    <div class="credict-card-content">
                      <div class="h1 mb-3 mb-lg-1"><i class="fab fa-cc-visa"></i></div>
                      <div class="credict-card-bottom">
                        <div class="text-uppercase flex-shrink-0 me-1 mb-1">
                          <div class="fw-bold">Card Number</div><small class="text-gray-500">1245 1478 1362 6985</small>
                        </div>
                        <h4 class="mb-1">$417.78</h4>
                      </div>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4">
                  <div class="card credit-card bg-hover-gradient-blue">
                    <div class="credict-card-content">
                      <div class="h1 mb-3 mb-lg-1"><i class="fab fa-cc-mastercard"></i></div>
                      <div class="credict-card-bottom">
                        <div class="text-uppercase flex-shrink-0 me-1 mb-1">
                          <div class="fw-bold">Card Number</div><small class="text-gray-500">1245 1478 1362 6985</small>
                        </div>
                        <h4 class="mb-1">$224.17</h4>
                      </div>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4 mb-4">
                  <div class="card credit-card bg-hover-gradient-green">
                    <div class="credict-card-content">
                      <div class="h1 mb-3 mb-lg-1"><i class="fab fa-cc-discover"></i></div>
                      <div class="credict-card-bottom">
                        <div class="text-uppercase flex-shrink-0 me-1 mb-1">
                          <div class="fw-bold">Card Number</div><small class="text-gray-500">1245 1478 1362 6985</small>
                        </div>
                        <h4 class="mb-1">$568.00</h4>
                      </div>
                    </div><a class="stretched-link" href="#"></a>
                  </div>
                </div>
              </div>
            </section>
            <section class="mb-4 mb-lg-5">
              <h2 class="section-heading section-heading-ms mb-4 mb-lg-5">Updates 🆕 </h2>
              <div class="row">
                <div class="col-lg-7 col-xl-6 mb-5 mb-lg-0">   
                  <div class="card h-100"> 
                    <div class="card-header">
                      <h4 class="card-heading">Transaction history</h4>
                    </div>
                    <div class="card-body">
                      <p class="text-gray-500 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                        <div class="left d-flex align-items-center">
                          <div class="icon icon-lg shadow me-3 text-gray-700"><i class="fab fa-dropbox"></i></div>
                          <div class="text">
                            <h6 class="mb-0 d-flex align-items-center"> <span>Dropbox Inc.</span><span class="dot dot-sm ms-2 bg-indigo"></span></h6><small class="text-gray-500">Account renewal</small>
                          </div>
                        </div>
                        <div class="right ms-5 ms-sm-0 ps-3 ps-sm-0">
                          <h5>-$20</h5>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                        <div class="left d-flex align-items-center">
                          <div class="icon icon-lg shadow me-3 text-gray-700"><i class="fab fa-apple"></i></div>
                          <div class="text">
                            <h6 class="mb-0 d-flex align-items-center"> <span>App Store.</span><span class="dot dot-sm ms-2 bg-green"></span></h6><small class="text-gray-500">Software cost</small>
                          </div>
                        </div>
                        <div class="right ms-5 ms-sm-0 ps-3 ps-sm-0">
                          <h5>-$20</h5>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                        <div class="left d-flex align-items-center">
                          <div class="icon icon-lg shadow me-3 text-gray-700"><i class="fas fa-shopping-basket"></i></div>
                          <div class="text">
                            <h6 class="mb-0 d-flex align-items-center"> <span>Supermarket.</span><span class="dot dot-sm ms-2 bg-blue"></span></h6><small class="text-gray-500">Shopping</small>
                          </div>
                        </div>
                        <div class="right ms-5 ms-sm-0 ps-3 ps-sm-0">
                          <h5>-$20</h5>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                        <div class="left d-flex align-items-center">
                          <div class="icon icon-lg shadow me-3 text-gray-700"><i class="fab fa-android"></i></div>
                          <div class="text">
                            <h6 class="mb-0 d-flex align-items-center"> <span>Play Store.</span><span class="dot dot-sm ms-2 bg-red"></span></h6><small class="text-gray-500">Software cost</small>
                          </div>
                        </div>
                        <div class="right ms-5 ms-sm-0 ps-3 ps-sm-0">
                          <h5>-$20</h5>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                        <div class="left d-flex align-items-center">
                          <div class="icon icon-lg shadow me-3 text-gray-700"><i class="fab fa-dropbox"></i></div>
                          <div class="text">
                            <h6 class="mb-0 d-flex align-items-center"> <span>Dropbox Inc.</span><span class="dot dot-sm ms-2 bg-primary"></span></h6><small class="text-gray-500">Account renewal</small>
                          </div>
                        </div>
                        <div class="right ms-5 ms-sm-0 ps-3 ps-sm-0">
                          <h5>-$20</h5>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                        <div class="left d-flex align-items-center">
                          <div class="icon icon-lg shadow me-3 text-gray-700"><i class="fab fa-apple"></i></div>
                          <div class="text">
                            <h6 class="mb-0 d-flex align-items-center"> <span>App Store.</span><span class="dot dot-sm ms-2 bg-blue"></span></h6><small class="text-gray-500">Software cost</small>
                          </div>
                        </div>
                        <div class="right ms-5 ms-sm-0 ps-3 ps-sm-0">
                          <h5>-$20</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 col-xl-6">
                  <div class="row h-100">
                    <div class="col-xxl-6">
                      <div class="card-widget mb-4">
                        <div class="card-widget-body">
                          <div class="dot me-3 bg-indigo"></div>
                          <div class="text">
                            <h6 class="mb-0">Completed cases</h6><span class="text-gray-500">127 new cases</span>
                          </div>
                        </div>
                        <div class="icon text-white bg-indigo"><i class="fas fa-clipboard-check"></i></div>
                      </div>
                    </div>
                    <div class="col-xxl-6">
                      <div class="card-widget mb-4">
                        <div class="card-widget-body">
                          <div class="dot me-3 bg-green"></div>
                          <div class="text">
                            <h6 class="mb-0">New Quotes</h6><span class="text-gray-500">214 new quotes</span>
                          </div>
                        </div>
                        <div class="icon text-white bg-green"><i class="fas fa-dollar-sign"></i></div>
                      </div>
                    </div>
                    <div class="col-xxl-6">
                      <div class="card-widget mb-4">
                        <div class="card-widget-body">
                          <div class="dot me-3 bg-blue"></div>
                          <div class="text">
                            <h6 class="mb-0">New clients</h6><span class="text-gray-500">25 new clients</span>
                          </div>
                        </div>
                        <div class="icon text-white bg-blue"><i class="fas fa-user-friends"></i></div>
                      </div>
                    </div>
                    <div class="col-12 order-xxl-1">
                      <div class="card h-100">
                        <div class="card-body">
                          <h2 class="mb-0 d-flex align-items-center"><span>86.4</span><span class="dot bg-red d-inline-block ms-3"></span></h2><span class="text-muted">Daily Profile Visitors</span>
                          <div class="chart-holder w-100">
                            <canvas id="lineChart3"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="mb-4">
              <h2 class="section-heading section-heading-ms mb-4 mb-lg-5">People 👩‍💻</h2>
              <div class="row">
                <div class="col-sm-6 col-xl-12"><a class="message card px-5 py-3 mb-4 bg-hover-gradient-primary text-decoration-none text-reset" href="#">
                    <div class="row">
                      <div class="col-xl-3 d-flex align-items-center flex-column flex-xl-row text-center text-md-left"><strong class="h5 mb-0">24<sup class="text-xs text-gray-500 font-weight-normal ms-1">Apr</sup></strong><img class="avatar avatar-md p-1 mx-3 my-2 my-xl-0" src="https://d19m59y37dris4.cloudfront.net/bubbly/1-2/img/avatar-1.jpg" alt="..." style="max-width: 3rem">
                        <h6 class="mb-0">Jason Maxwell</h6>
                      </div>
                      <div class="col-xl-9 d-flex align-items-center flex-column flex-xl-row text-center text-md-left">
                        <div class="bg-gray-200 rounded-pill px-4 py-1 me-0 me-xl-3 mt-3 mt-xl-0 text-sm text-dark exclude">User testing</div>
                        <p class="mb-0 mt-3 mt-lg-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                      </div>
                    </div></a></div>
                <div class="col-sm-6 col-xl-12"><a class="message card px-5 py-3 mb-4 bg-hover-gradient-primary text-decoration-none text-reset" href="#">
                    <div class="row">
                      <div class="col-xl-3 d-flex align-items-center flex-column flex-xl-row text-center text-md-left"><strong class="h5 mb-0">24<sup class="text-xs text-gray-500 font-weight-normal ms-1">Nov</sup></strong><img class="avatar avatar-md p-1 mx-3 my-2 my-xl-0" src="https://d19m59y37dris4.cloudfront.net/bubbly/1-2/img/avatar-2.jpg" alt="..." style="max-width: 3rem">
                        <h6 class="mb-0">Sam Andy</h6>
                      </div>
                      <div class="col-xl-9 d-flex align-items-center flex-column flex-xl-row text-center text-md-left">
                        <div class="bg-gray-200 rounded-pill px-4 py-1 me-0 me-xl-3 mt-3 mt-xl-0 text-sm text-dark exclude">Web Developer</div>
                        <p class="mb-0 mt-3 mt-lg-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                      </div>
                    </div></a></div>
                <div class="col-sm-6 col-xl-12"><a class="message card px-5 py-3 mb-4 bg-hover-gradient-primary text-decoration-none text-reset" href="#">
                    <div class="row">
                      <div class="col-xl-3 d-flex align-items-center flex-column flex-xl-row text-center text-md-left"><strong class="h5 mb-0">17<sup class="text-xs text-gray-500 font-weight-normal ms-1">Aug</sup></strong><img class="avatar avatar-md p-1 mx-3 my-2 my-xl-0" src="https://d19m59y37dris4.cloudfront.net/bubbly/1-2/img/avatar-3.jpg" alt="..." style="max-width: 3rem">
                        <h6 class="mb-0">Margret Peter</h6>
                      </div>
                      <div class="col-xl-9 d-flex align-items-center flex-column flex-xl-row text-center text-md-left">
                        <div class="bg-gray-200 rounded-pill px-4 py-1 me-0 me-xl-3 mt-3 mt-xl-0 text-sm text-dark exclude">Analysis Agent</div>
                        <p class="mb-0 mt-3 mt-lg-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                      </div>
                    </div></a></div>
                <div class="col-sm-6 col-xl-12"><a class="message card px-5 py-3 mb-4 bg-hover-gradient-primary text-decoration-none text-reset" href="#">
                    <div class="row">
                      <div class="col-xl-3 d-flex align-items-center flex-column flex-xl-row text-center text-md-left"><strong class="h5 mb-0">15<sup class="text-xs text-gray-500 font-weight-normal ms-1">Sep</sup></strong><img class="avatar avatar-md p-1 mx-3 my-2 my-xl-0" src="https://d19m59y37dris4.cloudfront.net/bubbly/1-2/img/avatar-4.jpg" alt="..." style="max-width: 3rem">
                        <h6 class="mb-0">Jason Doe</h6>
                      </div>
                      <div class="col-xl-9 d-flex align-items-center flex-column flex-xl-row text-center text-md-left">
                        <div class="bg-gray-200 rounded-pill px-4 py-1 me-0 me-xl-3 mt-3 mt-xl-0 text-sm text-dark exclude">User testing</div>
                        <p class="mb-0 mt-3 mt-lg-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                      </div>
                    </div></a></div>
              </div>
            </section>
          </div> 
</div>

@stop
