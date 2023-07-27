<header class="p-3 bg-success text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="https://www.fiergs.org.br/sites/default/files/styles/scale_sm/public/logos/logo_fiergs.png" style="width:200px;">
      </a>
      @auth
        {{auth()->user()->name}}
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/produtos/lista" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="/produtos/lista" class="nav-link px-2 text-white">Produtos</a></li>
        <li><a href="/categorias/lista" class="nav-link px-2 text-white">Categorias</a></li>

      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="{{ route('produtos-lista')  }}" >
        <input type="search" name="search" class="form-control form-control-dark" placeholder="Busca Produto" aria-label="Busca">
      </form>

      
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <!--div class="text-end" style="float: right;">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Novo Usuário</a>
        </div-->
      @endguest
    </div>
  </div>
</header>
