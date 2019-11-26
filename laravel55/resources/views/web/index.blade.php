@extends('layoutsweb.default')

@section('content')
  <div id="banners" class="banners index">
    <div id="target" class="target"></div>
    <div class="content">
        <svg>
            <symbol id="s-text">
                <text text-anchor="middle">
                    <tspan x="50%" y="85" fill="transparent">BULLET</tspan>
                    <tspan dx="10" fill="transparent">matters</tspan>
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
                    <tspan x="50%" y="57" fill="transparent">BULLET</tspan>
                    <tspan x="50%" dy="60" fill="transparent">matters</tspan>
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
        <p>精确缜密地规划您的广告预算</p>
        <button href="{{url('/contact')}}">免费咨询</button>
    </div>

    <div class="linechart"></div>
    <div id="broadcast" class="broadcast index">
        <div class="bc mode1 overdue">
            <div class="title">行业动态</div>
            <div class="type">行销讲座</div>
            <div class="name"><a href="{{url('/news/7')}}"><h3>2018.06</h3>
                    <p>从Google搜寻，一秒解析2018搜寻新趋势！</p>
                </a>
            </div>
        </div><div class="bc mode1 overdue">
            <div class="title">行业动态</div>
            <div class="type">行销讲座</div>
            <div class="name"><a href="{{url('/news/7')}}"><h3>2018.04</h3>
                    <p>你没试过的FB行销，讯息机器人世代新登场！</p>
                </a>
            </div>
        </div><div class="bc mode1 overdue">
            <div class="title">行业动态</div>
            <div class="type">行销讲座</div>
            <div class="name"><a href="{{url('/news/7')}}"><h3>2017.07</h3>
                    <p>走在潮流前─2017第三季行销趋势！</p>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="section news-index">
    <h2>行业动态</h2>
    <h3>讲座与活动讯息</h3>
    <div class="news"><div class="new mode1 overdue"><a href="{{url('/news/7')}}"><div class="type">行销讲座</div><div class="name"><h3>2018.06</h3><p>从Google搜寻，一秒解析2018搜寻新趋势！</p></div></a></div><div class="new mode1 overdue"><a href="{{url('news/7')}}"><div class="type">行销讲座</div><div class="name"><h3>2018.04</h3><p>你没试过的FB行销，讯息机器人世代新登场！</p></div></a></div><div class="new mode1 overdue"><a href="{{url('/news/7')}}news')}}"><div class="type">行销讲座</div><div class="name"><h3>2017.07</h3><p>走在潮流前─2017第三季行销趋势！</p></div></a></div></div>
</div>
<div class="split-line"></div>
<div id="about" class="section about">
    <h2>One View</h2>
    <h3>我们总是站在您的品牌获利角度思考</h3>
    <div class="mobile-slider about">
        <div id="items" class="items">
            <div class="item">
                <div class="icon"></div>
                <h3>资深行销顾问</h3>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>7年优化经验</h3>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>海外整合营销专家</h3>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>精准预算规划</h3>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>热情专业服务</h3>
            </div>
        </div>
    </div>
    <ul id="about-btn" class="slider-btns">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <button  href="{{url('/about')}}" class="green">关于谷德</button>
</div>
<div id="cases" class="section cases">
    <h2>Case</h2>
    <h3>欢迎加入谷德的成功案例行列</h3>

    <div class="showcase">
        <div class="cover">
            <a href="{{url('/')}}">
                <img src="{{ asset('manager/upload/case/b89882f23716.png') }}" alt="谷德网络科技行销"/>
            </a>
        </div>
        <div class="info"><div class="tags"><div class="gg">Google</div><div class="fb">Facebook</div></div><br /><h3>OneBoy</h3><br /><p>稳定ROAS 5~6 以上<br />
                持续带入大量新客</p></div>
    </div>
    <ul id="case-btn" class="slider-btns">
        <li></li>
    </ul>
    <br /><br />
    <button  href="{{url('/cases')}}" class="yellow">更多案例</button>
</div>
@endsection