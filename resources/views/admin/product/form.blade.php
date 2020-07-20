<div class="row">
    <div class="form-group col-12">
        <label for="name" class="required">Nome </label>
        <input type="text" required autofocus class="form-control" name="name" id="name" value="{{ old('name', $product->name) }}">
    </div>
    <div class="form-group col-12">
        <label for="price" class="required">Preco</label>
        <input type="number" required  class="form-control" name="price" id="price" value="{{ old('price', $product->price) }}">
    </div>
    <div class="form-group col-12">
        <label for="exampleFormControlTextarea1">Descricao do Produto</label>
        <textarea class="form-control" name="description" id="description"  rows="3">{{old('description',$product->description)}}</textarea>
  </div>
  <div class="form-group col-sm-12">
        <label for="category_id" class="required mt-4">Categoria</label>
        <select name="category_id" class="form-control select2" id="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
</div>