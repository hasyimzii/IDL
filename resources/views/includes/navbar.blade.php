<nav class="navbar navbar-light navbar-expand-md fixed-top bg-dark">
  <div class="container-fluid"><a class="navbar-brand" href="/"><img id="brand-logo" src="{{ asset('assets/img/logo_idle.png') }}" style="width: 92px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
      <div
          class="collapse navbar-collapse" id="navcol-1">
          <ul class="nav navbar-nav ml-auto">
              <!-- <li class="nav-item" role="presentation"><a style="color: #54b77a;" class="nav-link active navitem" href="#about">About</a></li> -->
              <li class="nav-item" role="presentation"><a style="color: #54b77a;" class="nav-link active navitem" href="/#berita">Berita</a></li>
              <li class="nav-item dropdown"><a style="color: #54b77a;" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Bidang Lomba</a>
                  <div class="dropdown-menu" role="menu">
                    @foreach($kategoris as $kategori)
                    <a class="dropdown-item" role="presentation" href="{{ route('kompetisi.index', ['kategori' => $kategori->kategori]) }}">{{ $kategori->nama_kategori }}</a>
                    @endforeach
                  </div>
              </li>
              <li class="nav-item" role="presentation"><a style="color: #54b77a;" class="nav-link active navitem" href="/faq">FAQ</a></li>
          </ul>
  		</div>
  	</div>
</nav>
