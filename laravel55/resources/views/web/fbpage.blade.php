@extends('layoutsweb.default')

@section('content')
<div id="banners" class="banners fbpage">
    <div class="content_inner">
        <svg>
            <symbol id="s-text">
                <text text-anchor="middle">
                    <tspan x="50%" y="70" fill="transparent">FB PAGE</tspan>
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
                    <tspan x="50%" y="80" fill="transparent">FB PAGE</tspan>
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
        <h2>打造铁粉经济</h2>
    </div>

    <button href="contact')}}">免费咨询</button>
    <div class="overlay"></div>
</div>
<div id="about" class="section about">
    <br />
    <h2 style="color:#f4c672;font-weight:100;font-size:36">粉丝团经营代管</h2>
    <h3 style="font-size:18">内容为王的时代来临，打造铁粉经济吧！</h3>
    <div class="mobile-slider fbpage">
        <div id="items" class="items">
            <div class="item">
                <div class="icon"></div>
                <h3>品牌信任感</h3>
                <p>持续运作且拥有丰富内容的粉丝团，可建立网友对品牌的信任感。</p>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>议题带动迴响</h3>
                <p>炒热氛围，透过互动式的图片及文案风格，引发网友积极讨论。</p>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>口碑行销</h3>
                <p>网友的无偿分享，为粉丝团带来更多品牌曝光，为口碑行销的必要途径。</p>
            </div>
        </div>
    </div>
    <ul id="about-btn" class="slider-btns">
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

<div class="spliter yellow bg4">
    <div class="txt">
        <h3>最健康的品牌状态</h3>
        <p><span>让广告成为必要但不再是唯一的命脉</span>
            透过优质的经营创造高黏著度、高关注度，获得均值以上的触及率，极大化品牌曝光。</p>
    </div>
    <div class="icon">
        <div class="item" style="padding:50px 0">
            <img src="../images/fbpage2.png" width="640"/>
        </div>
    </div>
</div>
<div class="spliter reverse bg2">
    <div class="txt yellow">
        <h3>粉丝经营铁则</h3>
        <p><span>分众沟通，潜在需求需要被提醒</span>
            每项产品、服务都有著无限可能，透过多元化的素材、文案沟通方向，与对的人说对的话，惟有遵循此铁则，方能将品牌的格局做大。</p>
    </div>
    <div class="icon">
        <div class="item" style="padding:50px 0">
            <img src="../images/fbpage3.png" width="350"/>
        </div>
    </div>
</div>
@endsection


