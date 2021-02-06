@csrf

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $model->name }}" />
</div>

<div class="form-group">
    <input type="submit" class="btn btn-default" value="Submit" />
</div>

