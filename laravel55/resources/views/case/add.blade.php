@extends('layouts.default')

@section('content')

    <!-- 内容包装器。 包含页面内容 -->
    <div class="content-wrapper">


        <!-- 内容标题（页面标题） -->
        <section class="content-header">
            <h1>
                添加案例
            </h1>

        </section>

        <!-- 主要内容 -->
        <section class="content container-fluid">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <form role="form"   method="POST" action="{{ route('caseAddff') }}"  enctype="multipart/form-data" >
                                {{ csrf_field() }}
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
                                    <div class="form-group">
                                        <label>产品(Google,Bing,Yahoo,Tiktok,Facebook,Yandex)。多个产品用,隔开</label>
                                        <input type="text" class="form-control" name="canpin" placeholder="Google,Bing">
                                    </div>
                                    <!-- input states -->
                                    <div class="container_box">
                                        <div class="form-group input-group">
                                            <label class="input-group-addon" for="inputSuccess"><i class="fa fa-check"></i> 产品分析</label>
                                            <input type="text" class="form-control" id="inputSuccess" name="fenxi[]" placeholder="Enter ...">
                                            <span class="input-group-addon fenxi"><i class="fa glyphicon-plus"></i></span>
                                        </div>
                                    </div>
                                    <div class="container_box2">
                                        <div class="form-group input-group">
                                            <label class="input-group-addon" for="inputWarning"><i class="fa fa-bell-o"></i> 操作技巧</label>
                                            <input type="text" class="form-control" id="inputWarning" name="jiqiao[]" placeholder="Enter ...">
                                            <span class="input-group-addon jiqiao"><i class="fa glyphicon-plus"></i></span>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <a href="{{url()->previous()}}"> <button type="button" class="btn btn-default">取消</button></a>
                                        <button type="submit" class="btn btn-info pull-right">提交</button>
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

<script>
    $(".fenxi").click(function(){
        $('.container_box').append('  <div class="form-group input-group"> <label class="input-group-addon" for="inputSuccess"><i class="fa fa-check"></i> 产品分析</label>\n' +
            '                                <input type="text" class="form-control" id="inputSuccess" name="fenxi[]" placeholder="Enter ...">\n' +
            '                                \n' +
            '                            </div>')
    });
    $(".jiqiao").click(function(){
        $('.container_box2').append('  <div class="form-group input-group"><label class="input-group-addon" for="inputWarning"><i class="fa fa-bell-o"></i> 操作技巧</label>\n' +
            '                                <input type="text" class="form-control" id="inputWarning" name="jiqiao[]" placeholder="Enter ...">\n' +
            '                                \n' +
            '                            </div>')
    });

</script>

@endsection
