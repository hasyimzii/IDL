<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">IDLe</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                @foreach($kategoris as $kategori)
                    <li class=""><a href="{{ route('kompetisi.index', ['kategori' => $kategori->kategori]) }}">{{ $kategori->nama_kategori }}</a></li>
                @endforeach
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>