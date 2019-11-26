@extends('layoutsweb.default')

@section('content')
    <div id="banners" class="banners google">
    <div class="content_inner">
        <svg>
            <symbol id="s-text">
                <text text-anchor="middle">
                    <tspan x="50%" y="70" fill="transparent">GOOGLE</tspan>
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
                    <tspan x="50%" y="80" fill="transparent">GOOGLE</tspan>
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
        <h2>多元化的广告为其特色</h2>
    </div>

    <button href="contact')}}">免费咨询</button>
    <div class="overlay"></div>
</div>
<div id="about" class="section about">
    <div class="mobile-slider google">
        <div id="items" class="items">
            <div class="item">
                <div class="icon"></div>
                <p>Google全世界使用者破20亿人次，透过关键字广告更精准投放！</p>
            </div>
            <div class="item">
                <div class="icon"></div>
                <p>结合文字、图像、影音等多样化形式，透过超过2万种多媒体联播网，让广告涵盖度更广！</p>
            </div>
            <div class="item">
                <div class="icon"></div>
                <p>依个人喜好及习惯投放广告，随时能够调整预算，配合不同的广告宣传！</p>
            </div>
        </div>
    </div>
    <ul id="about-btn" class="slider-btns">
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

<div class="spliter red bg1">
    <div class="txt">
        <h3>关键字搜寻广告</h3>
        <p>透过关键字广告，针对所有搜寻关键字的人，将广告投递他们的面前。在广告额外资讯中，更可以加入更多关于你的资讯，包括联络方式、地址、甚至是自己设定的应用程式。</p>
    </div>
    <div class="icon">
        <div class="item" style="padding-top:60px;margin-bottom:-1px">
            <img src="../images/google4.png" width="556"/>
        </div>
    </div>
</div>
<div class="spliter reverse">
    <div class="txt red">
        <h3>多媒体联播网</h3>
        <p>透过Google联播网能够同时曝光在各大网站，让适合的人接收到适合的广告。可以自由设定不同的广告格式，不管是文字式还是图像式皆可供选择。</p>
        <br /><br />
        <img src="../images/attach1.png" height="149"/>
    </div>
    <div class="icon">
        <div class="item" style="padding:30px 0">
            <img src="../images/google5.png" width="584"/>
        </div>
    </div>
</div>
<div class="spliter red verticle">
    <div class="txt">
        <h3>提供多种比对技术</h3>
    </div>
    <div class="icon">
        <div class="item" style="">
            <img src="../images/google7.png" width="948"/>
        </div>
    </div>
    <div class="other">
        <div class="item">
            <div class="icon"></div>
            <h3>指定网站</h3>
            <p>直接刊登网站到指定网站，锁定目标TA。</p>
        </div>
        <div class="item">
            <div class="icon"></div>
            <h3>主题定位</h3>
            <p>针对服务产品相关的网站，进行分类投递，让服务资讯与联播网息息相关。</p>
        </div>
        <div class="item">
            <div class="icon"></div>
            <h3>内文比对</h3>
            <p>将广告投放在相似性高的网站，类似置入性行销。</p>
        </div>
        <div class="item">
            <div class="icon"></div>
            <h3>兴趣行销</h3>
            <p>根据网友的网路使用习惯以及兴趣偏好。</p>
        </div>
        <div class="item">
            <div class="icon"></div>
            <h3>再行销</h3>
            <p>针对到过网站者设定特定符码，将广告不断投放。</p>
        </div>
    </div>
</div>


<script>
    $(document).ready(
        function(){

            donghua($('#board'), 1);
            function donghua(o, r) {
                o.animate({ top: (r < 0 ? '-' : '+') + "=30px"}, 1000, function () { donghua($(this), -1 * r) });
            }
        }
    );
</script>
    @endsection