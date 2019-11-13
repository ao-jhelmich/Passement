<div class="form-group row">
    <label class="col-sm-2 col-form-label">Name:</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" name="name" value="{{ isset($artist) ? $artist->name : '' }}">
    </div>
</div>