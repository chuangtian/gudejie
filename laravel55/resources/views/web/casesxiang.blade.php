@extends('layoutsweb.default')

@section('content')
<div id="cases" class="section cases case_inner">
    <div class="showcase">
        <div class="cover">
            <a><img src="{{asset($data->image)}}" alt="翠克數位行銷"/></a>
        </div>
        <div class="info">
            <div class="tags">
                @foreach($data->name as $key2=>$value2)
                    <div class="{{$value2}}">{{$value2}}</div>
                @endforeach
            </div>
            <br />
            <h3>{{$data->title}}</h3>
            <br />
            <p>{{$data->data}}</p>
        </div>

    </div>
    <ul id="case-btn" class="slider-btns">
        <li></li>
    </ul>
</div><div class="section blog">
    <div id="content" class="content"><p><font color="#cd4400"><strong>产业分析</strong></font></p>
        @foreach($fenxi as $value)
            <p>&bull;{{$value->data}}</p>
        @endforeach

        <p>&nbsp;</p>

        <p><font color="#cd4400"><strong>操作技巧</strong></font></p>
        @foreach($jiqiao as $value)
            <p>&bull;{{$value->data}}</p>
        @endforeach

    </div>
</div>
@endsection
