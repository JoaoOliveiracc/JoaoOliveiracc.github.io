<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mt-3">
    <label for="title" class="form-label">Nome da categoria</label>
    <input type="text" class="form-control" name="category_name">
  </div>
  <button type="submit" class="btn btn-primary mt-2">Adicionar</button>
</form>

<style>
  form {
    width: 40vw;
  }
</style>
