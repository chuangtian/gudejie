@extends('layouts.default')

@section('content')

  <!-- 内容包装器。 包含页面内容 -->
  <div class="content-wrapper">
   

    <!-- 内容标题（页面标题） -->
    <section class="content-header">
      <h1>
        
        用户
      </h1>
     
    </section>

    <!-- 主要内容 -->
    <section class="content container-fluid">
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <a  href="{{ route('user_add') }}"><button type="button" class="btn btn-primary">Add</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>用户名</th>
                  <!--<th>E-mail</th>-->
                <!-- <th>添加日期</th>-->
                <!-- <th>修改日期</th>-->
{{--                  <th>权限</th>--}}
                  <td>操作</td>
                </tr>
                </thead>
                <tbody>
                  @foreach($book as $key=>$book)
                      <tr>
                        <!--<td>{{$book->name}}</td>-->
                        <td>{{$book->email}}</td>
                        <!--<td>{{$book->created_at}}</td>-->
                         <!--<td>{{$book->updated_at}}</td>-->
                        <td>
                          <a href="{{ route('user_edit') }}?id={{$book->id}}">
                             <span class="fa fa-edit"></span>
                          </a>
                          <a href="{{ route('user_delete') }}?id={{$book->id}}"  onClick="delcfm()">
                            <span class="fa fa-trash"></span>
                          </a>
                        </td>
                      </tr>
                  @endforeach
                 
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script language="javascript"> 
  function delcfm() { 
    if (!confirm("确认删除？")) {
      window.event.returnValue = false; 
    } 
  } 
</script> 

@endsection
