@extends('layouts.default')

@section('content')

    <!-- 内容包装器。 包含页面内容 -->
    <div class="content-wrapper">


        <!-- 内容标题（页面标题） -->
        <section class="content-header">
            <h1>
                问询列表
            </h1>

        </section>

        <!-- 主要内容 -->
        <section class="content container-fluid">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>名字</th>
                                        <th>电话</th>
                                        <th>邮箱</th>
                                        <th>公司</th>
                                        <th>网址</th>
                                        <th>产品</th>
                                        <th>留言</th>
                                        <th>时间</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key=>$value)
                                        <tr>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->phone}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->company}}</td>
                                            <td>{{$value->web}}</td>
                                            <td>{{$value->ad}}</td>
                                            <td>{{$value->msg}}</td>
                                            <td>{{$value->create_at}}</td>
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


@endsection
