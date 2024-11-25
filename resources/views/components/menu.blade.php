<div class="menu">
  <div class="menu-nav">
    <header>
      <a href="">
        <img src="{{ asset('images/maxresdefault.jpg') }}" alt="logo" width="150">
      </a>
    </header>

    <nav class="menu-nav-list">
      <a href="" class="menu-nav-item">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
          </svg>
        </div>
        Home
      </a>
      <a href="{{route('news.index')}}" class="menu-nav-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
          <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
          <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
        </svg>
        Notícias
      </a>
    </nav>
  </div>
</div>

<style>
  body {
    font-size: 1rem;
    font-weight: 500;
    background-color: #e9edf4;
    font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI",
    Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  }

  a {
    color: white;
    text-decoration: none;
  }
  .menu {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }

  .menu-nav header {
    min-height: 84px;
    padding: 8px 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: -webkit-box;
  }

  .menu-nav {
    position: fixed;
    overflow: auto;
    min-width: 200px;
    background-color: black;
    left: 0;
    top: 0;
    bottom: 0;
  }

  .menu-nav a {
    color: white;
}

  .menu-nav-list {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }

  .menu-nav-item {
    padding: 6px 20px 6px 60px;
    display: flex;
    align-items: center;
    letter-spacing: 0.01em;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
  }
</style>