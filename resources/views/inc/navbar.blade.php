<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">{{config("app.name")}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route("about")}}">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/services">services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/post">blog</a>
            </li>
            <li class="nav-item navbar-right">
                <a class="nav-link" href="/post/create">Create Post</a>
            </li>
          </ul>
          
        </div>
      </nav>