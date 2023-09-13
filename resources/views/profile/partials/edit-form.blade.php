<div class="mb-3 mt-3">
    <input type="text" class="form-control form-control-lg" id="title" name="title" value="{{ old('title', $article->title) }}">
    @error('title')
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @enderror
</div>
<div class="form-floating mb-3">
    <textarea class="form-control " id="body" name="body">{{ old('body', $article->body) }}</textarea>
</div>
<div class="input-group mb-3">
    <input type="file" class="form-control form-control-lg" id="image" name="image">
    @error('image')
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @enderror
    <label class="input-group-text" for="image">Upload</label>
</div>
<button type="submit" class="mb-3 btn btn-warning bg-gradient py-3 w-100 fw-bold">Save</button>
