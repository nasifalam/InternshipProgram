




<h1>Create Program</h1>


<form action="/create/user" method="POST">
@csrf
<div class="form-group">
  <label for="BuildingU Program Type">name</label>
  <input type="text" class="form-control" id="name" name="name" value="">
</div>
  <div class="form-group">
    <label for="Program Title">email</label>
    <input type="email" class="form-control" id="email" name="email" value="">
  </div>
  <div class="form-group">
    <label for="Program Area">pass</label>
    <input type="password" class="form-control" id="password" name="password" value="">
  </div>
  <div class="form-group">
    <label for="Program Skillset">role</label>
    <input type="text" class="form-control" id="role" name="role" value="">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Save</button>
</form>
