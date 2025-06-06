<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
     <div class="sb-sidenav-menu">
         <div class="nav">
             <div class="sb-sidenav-menu-heading">Core</div>
             <a class="nav-link" href="{{url('/dashboard')}}">
                 <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                 Dashboard
             </a>

             <a class="nav-link" href="{{'/category'}}">
                 <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                 Category
             </a>

             <div class="sb-sidenav-menu-heading">Interface</div>
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProduct" aria-expanded="false" aria-controls="collapseProduct">
                 <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Products
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseProduct" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link" href="{{ url('/product/create') }}">Add Products</a>
                     <a class="nav-link" href="{{ url('/product') }}">View Products</a>
                 </nav>
             </div>
            
             <div class="sb-sidenav-menu-heading">Addons</div>
             <a class="nav-link" href="charts.html">
                 <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                 Charts
             </a>
             <a class="nav-link" href="tables.html">
                 <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                 Tables
             </a>
         </div>
     </div>
     <div class="sb-sidenav-footer">
         <div class="small">Logged in as:</div>
         Start Bootstrap
     </div>
 </nav>
           