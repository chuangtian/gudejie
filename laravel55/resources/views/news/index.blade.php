@extends('layouts.default')

@section('content')

    <!-- 内容包装器。 包含页面内容 -->
    <div class="content-wrapper">


        <!-- 内容标题（页面标题） -->
        <section class="content-header">
            <h1>
                行业动态
            </h1>

        </section>

        <!-- 主要内容 -->
        <section class="content container-fluid">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <a  href="{{ route('new_add') }}?xd={{$xd}}&type={{$type}}"><button type="button" class="btn btn-primary">Add</button></a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>id</th>
{{--                                        <th>type</th>--}}
                                        <th>date</th>
                                        <th>title</th>
                                        <th>data</th>
                                        <th>添加时间</th>
                                        <th>修改时间</th>
                                        <td>操作</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($news as $key=>$value)
                                            <tr>
                                                <td>{{$value->id}}</td>
                                                <td>{{$value->date}}</td>
                                                <td>{{$value->title}}</td>
                                                <td>{{$value->data}}</td>
                                                <td>{{$value->create_at}}</td>
                                                <td>{{$value->update_at}}</td>
                                                <td>
{{--                                                    <a href="{{ route('newsDel') }}?id={{$value->id}}&type={{$type}}">--}}
{{--                                                        <span class="fa fa-edit"></span>--}}
{{--                                                    </a>--}}
                                                    <a href="{{ route('newsDel') }}?id={{$value->id}}&type={{$type}}"  onClick="delcfm()">
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
