@extends('layoutsweb.default')

@section('content')
<div id="banners" class="banners about">
    <div class="content_inner">
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
    </div>
    <button href="contact')}}">免费咨询</button>
    <div class="overlay"></div>
</div>
<div id="about" class="section about">
    <div class="mobile-slider about about_inner">
        <div id="items" class="items">
            <div class="item">
                <div class="icon"></div>
                <h3>资深的行销顾问</h3>
                <p>7年的品牌经验，加上专业的行销团队，我们所有顾问皆为Google双认证合格，并通过一年以上长期培训的能力。</p>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>多年的操作经验</h3>
                <p>由专业的讲师带领团队，累积近10年广告操作经验，受到许多中小企业的支持与肯定。</p>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>客製化媒体整合</h3>
                <p>依照需求量身打造属于自己的行销祕笈。</p>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>精准的预算规划</h3>
                <p>搭配Google Analytics观察投资报酬率，并精准将预算做筛选，成效好的部分加强规划。</p>
            </div>
            <div class="item">
                <div class="icon"></div>
                <h3>热情的诚实服务</h3>
                <p>提供专属广告后台，资讯最透明，报表最诚实，绝不赚取广告差价。</p>
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
</div>

<div class="compares">
    <div class="compare">
        <div>
            <div></div>
            <div>成效/花费<br />明细资讯</div>
            <div>顾问资历</div>
            <div>亲身经验</div>
        </div>
        <div>
            <div class="title check">谷德网络科技行销</div>
            <div>● 价格透明<br />● 细项资讯公开<br />● 业界唯一广告后台开放透明</div>
            <div>● 业界资深7年以上操作经验顾问<br />● 三大媒体顾问专业分工<br />● Google双认证把关</div>
            <div>● 最大优势品牌端起家<br />● 对于品牌瞭若指掌<br />● 以品牌经营获利角度操作</div>
        </div>
    </div>
    <div class="compare">
        <div>
            <div></div>
            <div>成效/花费<br />明细资讯</div>
            <div>顾问资历</div>
            <div>亲身经验</div>
        </div>
        <div>
            <div class="title">其他家数位行销</div>
            <div>● 服务费内扣<br />● 广告费用赚差价<br />● 花费细项不明确<br />● 不提供广告后台</div>
            <div>● 操作资历经验不均<br />● 无专业分工</div>
            <div>● 无品牌经营经验</div>
        </div>
    </div>
</div>

<div id="timeline" class="section timeline">
    <h2>Timeline</h2>
    <div class="group-line">
        <ul id="pan" class="group">
            <li><h3>2018</h3><p>公司团队倍数成长</p></li><li><h3>2017</h3><p>客户满意度大幅成长</p></li><li><h3>2016</h3><p>全方位数位行销媒体资源</p></li><li><h3>2015</h3><p>专业认证授课讲师</p></li><li><h3>2013</h3><p>Google核心合作伙伴</p></li><li><h3>2011</h3><p>海外广告部门成立</p></li><li><h3>2009</h3><p>自家品牌成立跨足领域</p></li>            </ul>
        <div id='panprev' class="arrow"></div>
        <div id='pannext' class="arrow next"></div>
    </div>

</div>

<div class="section service">
    <div class="member">
        <div>
            <h3>行销规划顾问</h3>
            <p>● 客户网站适用性评估<br />● 分析行销优势及搭配媒体<br />● 建议预算及预估成效</p>
        </div>
        <div>
            <h3>广告优化师</h3>
            <p>● 关键字字组建议<br />● 标题及文案最佳化<br />● 图像素材优化</p>
        </div>
        <div>
            <h3>帐户分析师</h3>
            <p>● 专人管理维护帐户<br />● 定期提供帐户报表<br />● 优化建议及文案调整<br />● 其他专业谘询</p>
        </div>
        <div>
            <h3>专业设计美编</h3>
            <p>● 专业小编撰写贴文<br />● 调整素材并优化<br />● 协助製作广告素材</p>
        </div>
    </div>
    <div id="board" class="board"></div>
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