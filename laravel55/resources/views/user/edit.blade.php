@extends('layouts.default')

@section('content')

  <!-- 内容包装器。 包含页面内容 -->
  <div class="content-wrapper">
    
   
    <!-- 主要内容 -->
    <section class="content container-fluid">

      <!--------------------------
        | 您的页面内容在这里 |
        -------------------------->

        <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">修改用户</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal"  method="post" action="{{ route('user_edit_editff') }}">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="hidden" name="id" id="id" value="{{$book->id}}">
               {{ csrf_field() }}
                        <!--
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$book->name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">用户名</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{$book->email}}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">密码</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">确认密码</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                    </div>
              </div>
              
              <!-- /.box-footer -->
            </form>
          </div>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
