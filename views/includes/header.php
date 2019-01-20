<section>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
          <a class="navbar-brand" href="#">Société Test</a>
          <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
              &#9776;
          </button>
          <div class="collapse navbar-collapse" id="exCollapsingNavbar">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Service</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">More</a></li>
              </ul>
              <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                  <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
                  <li class="dropdown order-1">
                  <?php if(isset($_SESSION['username'])): ?>
                   <span>Session </span><button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle"><?=  $_SESSION['username'];?> <span class="caret"></span></button>
                  <?php	endif; ?>    
                      <ul class="dropdown-menu dropdown-menu-right mt-2">
                        <li class="px-3 py-2">
                        <a class="dropdown-item" href="/campaign-oop/logout.php">Déconnecter</a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </div>
  </nav>
</section>