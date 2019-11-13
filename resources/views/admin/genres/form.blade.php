<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name:</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="name"value="{{ isset($genre) ? $genre->name : '' }}">
    </div>
</div>