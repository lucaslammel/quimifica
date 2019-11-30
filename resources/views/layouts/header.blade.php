<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="/">Quim<span style="text-color:green">I</span><span style="text-color: red">Fica</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      </li>
      <li class="nav-item">
        <div class="container">
        <div class="dropdown">Conteúdo
        <div class="dropdown-content">
          <p><a href="/publicacao">Visualizar Conteúdos</a></p>
          <p><a href="/publicacao/create">Criar Conteúdos</a></p>
          </div>
        </div>
        </div>
      </li>
      <li class="nav-item">
          <div class="container">
          <div class="dropdown">Publicação
        <div class="dropdown-content">
          <p><a href="/publicacao">Visualizar Publicações</a></p>
          <p><a href="/publicacao/create">Criar Publicações</a></p>
          </div>
        </div>
        </div>
      </li>
    </ul>
    @guest
			<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
			<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
			@else
			<ul>
				<a>{{ Auth::user()->name }}</a>
            </ul>
            <ul>
					<a class="" href="{{ route('logout') }}"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
			</div>
		</ul>
		@endguest
  </div>
</nav>