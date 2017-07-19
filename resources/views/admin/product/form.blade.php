<div class="form-group">
    <label>Title</label>
    {!! Form::text('title', null, [ 'class' => 'form-control', 'placeholder' => "Title"]) !!}
</div>
<div class="form-group">
    <label>Category</label>
    {!! Form::select('category_id', $categories, null, ["class" => "form-control"]) !!}
</div>
<div class="form-group">
    <label>Price</label>
    {!! Form::text('price', null, [ 'class' => 'form-control', 'placeholder' => "Price"]) !!}
</div>
<div class="form-group">
    <label>Thumbnail</label>
    {!! Form::file('thumbnail', ["class" => "form-control"]) !!}
</div>
<button type="submit" class="btn btn-primary">Save</button>