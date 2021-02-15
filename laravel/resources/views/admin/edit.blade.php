

<h1>Edit User</h1>


<form action="/edit" method="POST">
@csrf
<input type="hidden"  id="id" name="id" value="{{$user['id']}}">
<div class="form-group">
  <label for="name">Name</label>
  <input type="text" class="form-control" id="name" name="name" value="{{$user['name']}}">
</div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="{{$user['email']}}">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" value="">
  </div>

  <div class="form-group">
    <label for="role">User Role</label>
    <input type="role" class="form-control" id="role" name="role" value="{{$user['role']}}">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
