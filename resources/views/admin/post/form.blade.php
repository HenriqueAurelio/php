<div class="row">
    <div class="form-group col-12">
        <label for="nome" class="required">Nome </label>
        <input type="text" required autofocus class="form-control" name="nome" id="nome" value="{{ old('nome', $post->nome) }}">
    </div>
    <div class="form-group col-12">
        <label for="nome" class="required">Autor </label>
        <input type="text" required autofocus class="form-control" name="autor" id="autor" value="{{ old('autor', $post->autor) }}">
    </div>
    <div class="form-group col-12">
        <label for="exampleFormControlTextarea1">Texto do Post</label>
        <textarea class="form-control" name="texto" id="texto"  rows="3">{{old('texto',$post->texto)}}</textarea>
  </div>
</div>