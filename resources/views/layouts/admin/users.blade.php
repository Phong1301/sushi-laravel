@extends('layouts.admin.inc.master')

@section('content')

    {{-- add new user modal start --}}
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="add_user_form" enctype="multipart/form-data">
        @csrf
        <div class="modal-body p-4 bg-light">
          <div class="my-2">
            <label for="username">Full Name</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Full Name" required>
          </div>
          <div class="my-2">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
          </div>
          <div class="my-2">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="add_user_btn" class="btn btn-primary">Add User</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- add new user modal end --}}

{{-- edit user modal start --}}
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="edit_user_form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="emp_id" id="emp_id">
          <div class="my-2">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
          </div>
          <div class="my-2">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
          </div>
          <div class="my-2">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="edit_user_btn" class="btn btn-success">Update User</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- edit user modal end --}}


  <div class="container">
    <div class="row my-5">
      <div class="col-lg-12">
        <div class="card shadow">
          <div class="card-header bg-primary d-flex justify-content-between align-items-center">
            <h3 class="text-light mt-1">Manage Users</h3>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addUserModal">
                <i class="bi-plus-circle me-2"></i>
                Add New User
            </button>
          </div>
          <div class="card-body" id="show_all_users">
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection