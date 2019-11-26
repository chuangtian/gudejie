@extends('layoutsweb.default')

@section('content')
   <div id="banners" class="banners facebook">
    <div class="content_inner">
        <svg>
            <symbol id="s-text">
                <text text-anchor="middle">
                    <tspan x="50%" y="70" fill="transparent">FACEBOOK</tspan>
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
                    <tspan x="50%" y="80" fill="transparent">FACEBOOK</tspan>
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
        <h2>最受欢迎的社群平台</h2>
    </div>

    <button href="contact')}}">免费咨询</button>
    <div class="overlay"></div>
</div>
<div id="about" class="section about">
    <div class="mobile-slider facebook">
        <div id="items" class="items">
            <div class="item">
                <div class="icon"></div>
                <h3>找粉丝</h3>
                <p>● 提升高相关粉丝人数<br />● 建筑品牌信任的基底</p>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>贴文互动</h3>
                <p>● 透过议题引导网友留言分享<br />● 在互动传播中打造病毒式扩散</p>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>APP广告</h3>
                <p>● 提升应用程式下载数<br />● 锁定 装置／型号／使用环境</p>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>导流量</h3>
                <p>● 透过行动呼吁将网友导入外站<br />● 提升 名单、会员、营业额</p>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>Instagram</h3>
                <p>● 经营品牌的必备神器<br />● 透过强烈视觉埋下印象的种子</p>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>影音收视</h3>
                <p>● 深度沟通产品／服务内容<br />● 观看10秒才收费不花冤枉钱</p>
            </div>
        </div>
    </div>
    <ul id="about-btn" class="slider-btns">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

<div class="spliter blue">
    <div class="txt">
        <h3>社群优势</h3>
        <p>● 引爆话题，一夕成名<br />● 粉丝互动，倾听真实声音<br />● 24小时都在滑，超高黏著度<br />● 客户服务平台，即时解决问题<br />● 第二个官网，同步展示新资讯</p>
    </div>
    <div class="icon">
        <div class="item" style="margin-top:20px;margin-bottom:-1px">
            <img src="../images/facebook2.png" width="703"/>
        </div>
    </div>
</div>
<div class="spliter reverse bg2">
    <div class="txt blue">
        <h3>以人为本的精准行销</h3>
        <p>针对Facebook登入的动作，将每一用户区别为独特个体；并透过性别、兴趣、装置、地区、行为等数据，将广告投放给潜在客群。<br /><br />
            而以「人」为单位的投放方式，即便跨装置、跨媒体，也能够精准追踪。</p>
    </div>
    <div class="icon">
        <div class="item" style="padding:80px 80px 50px 0">
            <img src="../images/facebook3.png" width="385"/>
        </div>
    </div>
</div>
@endsection

