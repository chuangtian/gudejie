@extends('layoutsweb.default')

@section('content')
<div id="banners" class="banners igpage">
    <div class="content_inner">
        <svg>
            <symbol id="s-text">
                <text text-anchor="middle">
                    <tspan x="50%" y="70" fill="transparent">IG PAGE</tspan>
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
                    <tspan x="50%" y="80" fill="transparent">IG PAGE</tspan>
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
        <h2>营造品牌忠诚度</h2>
    </div>

    <button href="contact')}}" style="position: absolute;left: 50%; bottom: 0;z-index: 5;webkit-transform: translate(-50%, 50%); transform: translate(-50%, 50%);">免费咨询</button>
    <div class="overlay" style="background: url({{ asset('images/instagram.jpg')}}) no-repeat center center"></div>
</div>
<div id="about" class="section about">
    <br />
    <h2 style="color:#e40061;font-weight:100;font-size:36">IG帐号代管经营</h2>
    <h3 style="font-size:18">迎合更多元的内容，创造更夯社群热度</h3>
    <div class="mobile-slider igpage">
        <div id="items" class="items">
            <div class="item">
                <div class="icon"></div>
                <h3>多面向囊括各年龄</h3>
                <p>持续扩散可触及的年龄层，向下扎根更深刻的品牌互动过程
                    。</p>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>视觉强烈印象打造</h3>
                <p>深耕社群，透过素材设计、限动排版、互动式发文等方式，引起网友热烈讨论。</p>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>口碑的再扩散</h3>
                <p>素人见证的转传、爱心度满点的贴文，每一次的点击与互动都代表著更多的曝光，瞬间营造出全社群疯传的口碑热度。</p>
            </div>
        </div>
    </div>
    <ul id="about-btn" class="slider-btns">
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

<div class="spliter pink">
    <div class="txt">
        <h3>完美无缝衔接最夯平台</h3>
        <p><span>更丰富的经营手法，彻底翻转粉丝思维</span>打造不同媒体的差异化，不仅有机会找到潜在爱好族群，更可深化品牌个性来贴近粉丝的生活。</p>
    </div>
    <div class="icon">
        <div class="item" style="padding-top:60px;margin-bottom:-1px">
            <img src="{{ asset('images/ig4.png')}}" width="556"/>
        </div>
    </div>
</div>
<div class="spliter reverse bg5">
    <div class="txt pink">
        <h3>更完整的品牌扩散度</h3>
        <p><span>再年轻的族群，也帮你一网打尽</span>交给专业打造优质素材、精心设计的互动内容，获得各年龄层的好感度，强化品牌印象到下个世代。</p>
    </div>
    <div class="icon">
        <div class="item" style="padding:50px 0">
            <img src="{{ asset('images/igpage3.png')}}" width="350"/>
        </div>
    </div>
</div>

@endsection