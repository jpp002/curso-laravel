@csrf

<label for="">Title</label>
<input class="form-control mt-3" type="text" name="title" value="{{ old('title', $category->title) }}">

<label for="">Slug</label>
<input class="form-control mt-3" type="text" name="slug" value="{{ old('slug', $category->slug) }}">

<button class="btn btn-success mt-3" type="submit">Send</button>