<div class="row">
    <div class="form-group col-12">
        <label for="name" class="required">Nome </label>
        <input type="text" required autofocus class="form-control" name="name" id="name" value="{{ old('name', $category->name) }}">
    </div>
</div>