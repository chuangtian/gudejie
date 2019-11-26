@extends('layoutsweb.default')

@section('content')
  <div class="banners">
    <div class="content">
        <svg>
            <symbol id="s-text">
                <text text-anchor="middle">
                    <tspan x="50%" y="70" fill="transparent">行业动态</tspan>
                </text>
            </symbol>
            <g class="g-ants">
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
            </g>
            <symbol id="s-text2">
                <text text-anchor="middle">
                    <tspan x="50%" y="80" fill="transparent">行业动态</tspan>
                </text>
            </symbol>
            <g class="m-ants">
                <use xlink:href="#s-text2" class="text-copy"></use>
                <use xlink:href="#s-text2" class="text-copy"></use>
                <use xlink:href="#s-text2" class="text-copy"></use>
                <use xlink:href="#s-text2" class="text-copy"></use>
                <use xlink:href="#s-text2" class="text-copy"></use>
            </g>
        </svg>
        <h2>讲座与活动讯息</h2>
    </div>
    <canvas class="anim" id="anim"></canvas>

</div>
<div class="section news-index">
    <div id="filter" class="filter">
        @if ($cat==7)
            <div cat="7" class="active" >行销讲座</div>
            <div  cat="6" class=""   >消息活动</div>
        @else
            <div cat="7" class="" >行销讲座</div>
            <div  cat="6" class="active" >消息活动</div>
        @endif
    </div>


        <div id="news" class="news news_inner">


            <div class="news">
                @foreach($data as $key=>$value)
                    <div cat="{{$value->type}}" class="new mode1 overdue">
                        <a>
                            <div class="thumb"><img src="{{ asset($value->image)}}" alt="谷德网络科技行销"/></div>
                            @if ($value->type==7)
                                <div class="type">行销讲座</div>
                            @else
                                <div class="type">消息活动</div>
                            @endif
                            <div class="name">
                                <h3>{{$value->date}}</h3>
                                <p>{{$value->title}}</p>
                                <p class="brief">{{$value->data}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach

        </div>
    </div>
</div>

@endsection

