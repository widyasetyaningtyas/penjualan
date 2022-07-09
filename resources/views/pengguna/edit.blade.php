@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
      	<div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('pengguna/update/'.$pengguna->id_user)}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" value="{{$pengguna->username}}" class="form-control" id="username" name="username" placeholder="Masukan Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" value="{{$pengguna->password}}" class="form-control" id="password" name="password" placeholder="Masukan Password">
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Level</label>
                    <select name="level" class="form-control" id="level" value="{{$pengguna->level}}" placeholder="Level">
                      <option>--pilih--</option>
                      <option value="Admin">Admin</option>
                      <option value="Pengguna">Pengguna</option>
                    </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              	<button type="submit" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-primary pull-right">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
</section>
@endsection