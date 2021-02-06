@csrf

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $model->name }}" />
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $model->email }}" />
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" value="{{ $model->password }}" />
</div>

@foreach ($roles as $role)
    <div class="checkbox">
        <label>
            <input type="checkbox" 
                   {{-- id="roles" --}}
                   name="roles[]"  
                   value="{{ $role->id }}" 
                   {{ $model->hasRole($role->name) ? 'checked' : ''}}/>
            {{ $role->name }}
        </label>
    </div>
@endforeach

<div class="form-group">
    <input type="submit" class="btn btn-default" value="Submit" />
</div>

