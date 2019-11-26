@extends('layoutsweb.default')

@section('content')
    <div id="banners" class="banners youtube">
    <div class="content_inner">
        <svg>
            <symbol id="s-text">
                <text text-anchor="middle">
                    <tspan x="50%" y="70" fill="transparent">YOUTUBE</tspan>
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
                    <tspan x="50%" y="80" fill="transparent">YOUTUBE</tspan>
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
        <h2>世界第一的影音平台</h2>
    </div>

    <button href="{{ url('/contact') }}">免费咨询</button>
    <div class="overlay"></div>
</div>
<div class="spliter bg3">
    <div class="txt red">
        <h3>精准投递</h3>
        <p>YouTube是世界第一的影音平台，透过将广告依不同的分类，投递给适合的人，透过分类：年龄性别、观众兴趣、观看习惯、节目类型等，将精准行销发挥到极致。</p>
    </div>
    <div class="icon">
        <div class="item" style="padding:30px 0">
            <img src="{{ asset('images/youtube1.png')}}" width="500"/>
        </div>
    </div>
</div>
<div class="spliter red reverse">
    <div class="txt">
        <h3>片头影音广告</h3>
        <p><span>TrueView In-stream Video</span>系统会在YouTube拨放前或拨放期间放送广告。</p>
    </div>
    <div class="icon">
        <div class="item" style="padding-top:20px">
            <img src="{{ asset('images/youtube3.png')}}" width="550"/>
        </div>
    </div>
</div>
<div class="spliter">
    <div class="txt red">
        <h3>展示型广告</h3>
        <p><span>A 搜寻结果页</span>显示在YouTube搜寻结果上方或旁边，採观看计费，观众在搜寻相关影片时看到您的广告。</p>
        <p><span>B 影片观看页</span>YouTube观赏页面中，观众在观看影片时看到您的广告。</p>
    </div>
    <div class="icon">
        <div class="item" style="padding-top:20px">
            <img src="{{ asset('images/youtube4.png')}}" width="782"/>
        </div>
    </div>
</div>
@endsection

