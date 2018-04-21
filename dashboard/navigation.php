<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <div class="user-profile">
            <p>Hello {person}</p>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo FULL_URL ?>/#"><span data-feather="home"></span> Dashboard <span class="sr-only">(current)</span></a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="<?php echo FULL_URL ?>dashboard/product"><span data-feather="shopping-cart"></span> Products</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="<?php echo FULL_URL ?>dashboard/integration"><span data-feather="layers"></span> Integrations</a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"><span>Resources</span> <a class="d-flex align-items-center text-muted" href="#"></a></h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo FULL_URL ?>dashboard/quickstart"><span data-feather="file-text"></span> Quickstart</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="<?php echo FULL_URL ?>dashboard/learn"><span data-feather="file-text"></span> Learn Marketing</a>
            </li>  
        </ul>
    </div>
</nav>