<div class="form-floating mb-3 mt-3">
    <input type="text" class="form-control" id="title" placeholder="Enter the title" name="title">
    <label for="title">Entez the title</label>
    @error('title')
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
@enderror
</div>
<div class="form-floating mb-3">
    <textarea class="form-control" id="body" placeholder="Enter the description" name="body"></textarea>
    <label for="description">Entez the description</label>
    @error('body')
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
@enderror
</div>
<div class="input-group mb-3">
    <input type="file" class="form-control form-control-lg" id="image" name="image">
    <label class="input-group-text" for="image">Upload</label>
    @error('image')
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
@enderror
</div>
<button type="submit" class="btn btn-success shadow-lg py-3 w-100 bg-gradient">Create</button>