<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name:</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="name" value="{{ isset($album) ? $album->name : '' }}">
    </div>
</div>

<div class="form-group row">
    <label for="img_link" class="col-sm-2 col-form-label">Img url:</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" name="img_link" id="img_link" value="{{ isset($album) ? $album->img_link : '' }}">
    </div>
</div>

<div class="form-group row">
    <label for="artist_id" class="col-sm-2 col-form-label">Artist:</label>

    <div class="col-sm-10">
        <select id="artist_id" name="artist_id" class="custom-select">
            <option>Select artist</option>

            @foreach ($artists as $artist)
                <option value="{{ $artist->id }}" {{ isset($album) ? $album->artist_id == $artist->id ? 'selected' : '' : '' }}>{{ $artist->name }}</option>
            @endforeach
        </select>
    </div>
</div>