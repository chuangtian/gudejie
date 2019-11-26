@extends('layouts.default')

@section('content')

    <!-- 内容包装器。 包含页面内容 -->
    <div class="content-wrapper">


        <!-- 内容标题（页面标题） -->
        <section class="content-header">
            <h1>
                添加行业动态
            </h1>

        </section>

        <!-- 主要内容 -->
        <section class="content container-fluid">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <form role="form"   method="POST" action="{{ route('addPost') }}"  enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                    <input type="hidden"  name="type" value="{{$type}}" >
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>标题</label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter ...">
                                    </div>
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>内容</label>
                                        <textarea class="form-control" rows="3" name="data" placeholder="Enter ..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">上传图片</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                    <div class="box-footer">
                                        <a href="{{url()->previous()}}"> <button type="button" class="btn btn-default">Cancel</button></a>
                                        <button type="submit" class="btn btn-info pull-right">Sign in</button>
                                    </div>


                                </form>
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



@endsection
