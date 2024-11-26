<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mt-3">
    <label for="title" class="form-label">Título</label>
    <input type="text" class="form-control" name="title">

    <label for="content" class="form-label">Conteúdo</label>
    <textarea name="content" id="" cols="30" rows="8" class="form-control"></textarea>

    <label for="author" class="form-label">Autor</label>
    <input type="text" class="form-control" name="author">

    <label for="dateP" class="form-label">Data de Publicação</label>
    <input type="date" class="form-control" name="published_at">

    <label for="category" class="form-label">Categoria</label>
    <select class="form-control" name="category_id">
      @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->category_name }}</option>
      @endforeach
    </select>
    
    <label for="cover" class="form-label">Capa</label>
    <input type="file" name="cover_image" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary mt-2">Adicionar</button>
</form>

<style>
  @media (min-width: 769px) {
    form {
      width: 60vw;
    }
  }
</style>
