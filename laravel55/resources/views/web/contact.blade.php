@include('layoutsweb.head')

<div class="banners contact">
    <div class="overlay"></div>
</div>

<div class="consultant">
    <div class="contact hideOnPc">
        <div class="info">
            <h2>GET<br />ON TRACK</h2>
            <br />
            <h3>海外广告都一样？交给谷德网络科技，很不一样！<br />欢迎与我们交流讨论！ </h3>
        </div>
    </div>
    <div class="form">
        <form>
            <fieldset>
                <div class="label name">
                    <h3>姓名 / Name</h3>
                    <input type="text" id="name" name="name"/>
                </div>
                <div class="label phone">
                    <h3>电话 / Phone</h3>
                    <input type="text" id="phone" name="phone"/>
                </div>
                <div class="label">
                    <h3>电子邮件 / Email</h3>
                    <input type="text" id="email" name="email"/>
                </div>
                <div class="label">
                    <h3>公司名称 / Company</h3>
                    <input type="text" id="company" name="company"/>
                </div>
                <div class="label">
                    <h3>公司网址 / URL</h3>
                    <input type="text" id="web" name="web"/>
                </div>
                <br /><br />
                <!--                <div class="label stable name">-->
                <!--                    <h3>公司地区 / City</h3>-->
                <!--                    <select id="city-drop" onChange="pickCity()">-->
                <!--                        <option value="0">请选择</option>-->
                <!--                    </select>-->
                <!--                </div>-->
                <!--                <div id="other" class="label other">-->
                <!--                    <h3>其他地区 / Other</h3>-->
                <!--                    <input type="text" id="othercity" name="othercity"/>-->
                <!--                </div>-->
                <div class="label stable">
                    <h3>想询问的产品 / AD</h3>
                    <div id="ads" class="ads">
                        <div class="ad red">Google</div>
                        <div class="ad red">Youtube</div>
                        <div class="ad blue">Facebook</div>
                        <div class="ad yellow">粉丝团代管</div>
                        <div class="ad pink">Instagram</div>
                        <div class="ad green">整合行销</div>
                    </div>
                    <input type="hidden" id="ad" name="ad"/>
                </div>
                <div class="label">
                    <h3>询问内容 / Message</h3>
                    <textarea class="AutoHeight" id="msg" name="msg"></textarea>
                </div>
            </fieldset>
        </form>
        <div id="ok">送出</div>
        <div id="spinner" class="fa fa-spinner fa-pulse fa-2x fa-fw"></div>
        <br /><br />
    </div>
    <div class="contact">
        <div class="info">
            <div class="hideOnMobile">
                <h2>关于谷德</h2>
                <br />
                <h3>谷德网络由Google认证讲师带领团队，累积近10年操作以及自创品牌经验，成员皆具备Google、FB、Yahoo操作Know-how，并通过一年以上长期培训。我们专精网络广告投递及成效分析，随时为企业掌握消费者与商机</h3>
            </div>
            <!--            <h3>关于谷德</h3>-->
            <!--            <p>谷德网络由Google认证讲师带领团队，累积近10年操作以及自创品牌经验，成员皆具备Google、FB、Yahoo操作Know-how，并通过一年以上长期培训。我们专精网络广告投递及成效分析，随时为企业掌握消费者与商机</p>-->
            <!--            <br /><br />-->
            <button href=".{{url('/about')}}" class="green">关于我们</button>
            <br />
            <button href=".{{url('/contact')}}">免费咨询</button>

            <div>
                <div>
                    <h3>海外广告</h3>
                    <a href=".{{url('/google')}}">Google</a>
                    <a href=".{{url('/youtube')}}">Bing</a>
                    <a href=".{{url('/facebook')}}">Yahoo!</a>
                    <a href=".{{url('/fbpage')}}">Tiktok</a>
                    <a href=".{{url('/ig')}}">Facebook</a>
                    <a href=".{{url('/ig')}}">Yandex</a>
                    <br /><br />
                    <h3>重要连结</h3>
                    <a href=".{{url('/cases')}}">成功案例</a>
                    <a href=".{{url('/news/7')}}">行业动态</a>
                    <a href=".{{url('/about')}}">专业团队</a>
                    <!--<a href="lecturers')}}">认证讲师</a>-->
                </div>
                <div>
                    <h3>联系方式</h3>
                    <a href="tel:0227772268">Tel : 0755-0000000</a><br />
                    <a>Mob :  15017937878</a><br />
                    <a href="mailto:zeric@goodvl.com">szeric@goodvl.com</a><br />
                    <a href="https://j.map.baidu.com/d0/tEo" target="_blank">深圳南山高新南七路虚拟大学园R2栋</a>
                    <br /><br />
                    <!--                <a class="fb" href="https://www.facebook.com/TrackerAD" target="_blank"></a>-->
                    <!--                <a class="ig" href="#"></a>-->
                </div>
                <!--            <div class="certificate">-->
                <!--                <img title="Google Partner" src="../images/c1.jpg" width="130"/>-->
                <!--                <img title="Google Adwords Certified Partner" src="../images/c2.gif" width="80"/>-->
                <!--                <img title="Google Analytics Certified Partner" src="../images/c3.jpg" width="80"/>-->
                <!--            </div>-->
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    /* <![CDATA[ */
    /*
    var google_conversion_id = 857372252;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    */
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/857372252/?guid=ON&amp;script=0"/>
    </div>
</noscript>
</body>

</html>

<script>
    $(document).ready(
        function(){
            //email
            $("#ok").click(function(e){
                validateMail();
            });

            $("#phone_no").keydown(function (e) {
                // Allow: backspace, delete, tab, escape and enter
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                    (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: home, end, left, right, down, up
                    (e.keyCode >= 35 && e.keyCode <= 40)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || (e.keyCode > 57 && e.keyCode != 189 && e.keyCode != 190)))
                    && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
                // 如果使用者输入-，先判断现在的值有没有-，如果有，就不允许输入
                if (e.keyCode == 189 && /-/g.test(this.value)) {
                    //e.preventDefault();
                }
                // 如果使用者输入.，先判断现在的值有没有.，如果有，就不允许输入
                if (e.keyCode == 190 && /\./g.test(this.value)) {
                    //e.preventDefault();
                }
            });

            $('#phone_no').keyup(function () {
                if (/[^0-9\-]/g.test(this.value)) {
                    this.value = this.value.replace(/[^0-9\-]/g, '');
                }
            });
        }
    );



    var isEmail = function(email){
        if (email=="") return true;
        reEmail=/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/
        return reEmail.test(email);
    }

    var validateMail = function(){

        var $mistake=0;
        var $fromtop = 100;
        var $boddy = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');

        //reset
        $('.label').removeClass("wrong");


        if(!$('input[name="name"]').val()){
            $('input[name="name"]').parent().addClass("wrong");
            if($mistake==0){
                $boddy.animate({scrollTop: $('input[name="name"]').eq(0).offset().top-$fromtop}, 600);
                $('input[name="name"]').focus();
            }
            $mistake+=1;
        }

        if(!$('input[name="phone"]').val()){
            $('input[name="phone"]').parent().addClass("wrong");
            //return alert('请输入连络电话！');
            if($mistake==0){
                $boddy.animate({scrollTop: $('input[name="phone"]').eq(0).offset().top-$fromtop}, 600);
                $('input[name="phone"]').focus();
            }
            $mistake+=1;
        }

        if(!$('input[name="email"]').val()){
            $('input[name="email"]').parent().addClass("wrong");
            //return alert('请输入电子邮件！');
            if($mistake==0){
                $boddy.animate({scrollTop: $('input[name="email"]').eq(0).offset().top-$fromtop}, 600);
                $('input[name="email"]').focus();
            }
            $mistake+=1;
        }

        if(!isEmail($('input[name="email"]').val())){
            $('input[name="email"]').parent().addClass("wrong");
            //return alert('电子邮件格式错误！');
            if($mistake==0){
                $boddy.animate({scrollTop: $('input[name="email"]').eq(0).offset().top-$fromtop}, 600);
                $('input[name="email"]').focus();
            }
            $mistake+=1;
        }

        if(!$('input[name="company"]').val()){
            $('input[name="company"]').parent().addClass("wrong");
            if($mistake==0){
                $boddy.animate({scrollTop: $('input[name="company"]').eq(0).offset().top-$fromtop}, 600);
                $('input[name="company"]').focus();
            }
            $mistake+=1;
        }
        if(!$('input[name="web"]').val()){
            $('input[name="web"]').parent().addClass("wrong");
            if($mistake==0){
                $boddy.animate({scrollTop: $('input[name="web"]').eq(0).offset().top-$fromtop}, 600);
                $('input[name="web"]').focus();
            }
            $mistake+=1;
        }

        var cityVal = $("#city-drop > option:selected").val();
        if(cityVal==0){
            $('#city-drop').parent().addClass("wrong");
            if($mistake==0){
                $boddy.animate({scrollTop: $('#city-drop').eq(0).offset().top-$fromtop}, 600);
            }
            $mistake+=1;
        }else if(cityVal=="other"){
            if(!$('input[name="othercity"]').val()){
                $('input[name="othercity"]').parent().addClass("wrong");
                if($mistake==0){
                    $boddy.animate({scrollTop: $('input[name="othercity"]').eq(0).offset().top-$fromtop}, 600);
                    $('input[name="othercity"]').focus();
                }
                $mistake+=1;
            }

        }

        if(!$('input[name="ad"]').val()){
            $('#ads').parent().addClass("wrong");
            if($mistake==0){
                $boddy.animate({scrollTop: $('#ads').eq(0).offset().top-$fromtop}, 600);
            }
            $mistake+=1;
        }

        if(!$('textarea[name="msg"]').val()){
            $('textarea[name="msg"]').parent().addClass("wrong");
            if($mistake==0){
                $boddy.animate({scrollTop: $('textarea[name="msg"]').eq(0).offset().top-$fromtop}, 600);
                $('textarea[name="msg"]').focus();
            }
            $mistake+=1;
        }




        if($mistake>0){
            //return alert('请确认填写资料格式正确');
        }else{
            $("#ok").hide();
            $("#spinner").show();
            //
            var link = "{{ route('sendEmail') }}";

            var jqxhr = $.get(link, {
                name:$("#name").val(),
                phone:$("#phone").val(),
                email:$("#email").val(),
                company:$("#company").val(),
                area:$("#city-drop > option:selected").val(),
                othercity:$("#othercity").val(),
                web:$("#web").val(),
                ad:$("#ad").val(),
                msg:$("#msg").val(),
                // 'g-recaptcha-response':grecaptcha.getResponse()
            }, function(data) {
                alert( "发送成功" );

            })

                .fail(function() {
                    alert("错误发生，请再试一次。");
                    $("#ok").show();
                    $("#spinner").hide();
                    e.preventDefault();
                })
                .always(function() {
                    location.reload();
                    //pending(false);
                });

            jqxhr.always(function() {

            });

        }
    }
</script>
