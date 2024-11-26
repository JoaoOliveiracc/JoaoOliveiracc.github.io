<x-layout title="Notícias">
  <div class="row">
    @foreach ($news as $new)
    <div class="col-md-4 mb-4">
      <div class="card border-0" style="min-height: 100%;">
        <div class="card-body d-flex flex-column justify-content-between">
          <h5 class="card-title">{{ $new->title }}</h5>
          <p class="card-text">{{ $new->content }}</p>
          <div class="d-flex justify-content-center">
            <a href="" class="btn" style="background-color: #dedede;">Acessar</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</x-layout>
