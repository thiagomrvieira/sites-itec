    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
              <!-- <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
              </div> -->
              
              {{-- <div class="sidebar-brand-text mx-3">Gov. Alagoas</div> --}}
              <div class="sidebar-brand-text mx-3">
                <img src="{{asset('img/texto-branco.png')}}" height="45">
              </div>
              
            </a>
      
            <!-- Divider -->
            <!-- <hr class="sidebar-divider my-0"> -->
      
            <!-- Nav Item - Dashboard -->
            <!-- <li class="nav-item active">
              <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
            </li> -->
      
            <!-- Divider -->
            <hr class="sidebar-divider">
      
            <!-- Heading -->
            <div class="sidebar-heading">
              Conteúdo
            </div>
      
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-newspaper"></i>
                <span>Notícias</span>
              </a>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Opções:</h6>
                  <a class="collapse-item" href="/noticias">Listar notícias</a>
                  <a class="collapse-item" href="/noticias/novo">Criar notícia</a>
                  <a class="collapse-item" href="/noticias/categorias">Categorias</a>
                  
                </div>
              </div>
            </li>

            <!-- Nav Item - fotos -->
            <li class="nav-item">
              <a class="nav-link" href="/fotos">
                <i class="far fa-images"></i>
                <span>Fotos</span></a>
            </li>

            <!-- Nav Item - Videos -->
            <li class="nav-item">
              <a class="nav-link" href="/videos">
                <i class="fab fa-youtube"></i>
                <span>Vídeos</span></a>
            </li>
      
            <!-- Divider -->
            <hr class="sidebar-divider">
      
            <!-- Heading -->
            <div class="sidebar-heading">
              Componentes
            </div>
      
            <!-- Nav Item - Banners Collapse Menu -->
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-sign"></i>
                <span>Banners</span>
              </a>
              <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Opções:</h6>
                  <a class="collapse-item" href="/banners">Listar banners</a>
                  <a class="collapse-item" href="/banners/novo">Criar banner</a>
                </div>
              </div>
            </li>
  
            <!-- Nav Item - Programas -->
            <li class="nav-item">
              <a class="nav-link" href="/programas">
                <i class="fas fa-tasks"></i>
                <span>Programas do governo</span></a>
            </li>

            <!-- Nav Item - SIC -->
            <li class="nav-item">
              <a class="nav-link" href="/sic">
              <i class="fas fa-exclamation-circle"></i>
              <span> Serviço de informação ao cidadão</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            
            <div class="sidebar-heading">
              Configuração global
            </div>

            <!-- Nav Item - SIC -->
            <li class="nav-item">
              <a class="nav-link" href="/definicoes">
              <i class="fas fa-cog"></i>
              <span> Definições do site </span></a>
            </li>
    
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
      
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
      
          </ul>
          <!-- End of Sidebar -->