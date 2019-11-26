  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->email}}</p>
        <a href="{{ route('user_edit') }}?id={{Auth::user()->id}}">修改密码</a>
        |
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
          退出登陆
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
          {{ csrf_field() }}
        </form>
      </div>
    </div>
      <!-- sidebar: style can be found in sidebar.less -->

      <!-- /.sidebar -->

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <!-- Optionally, you can add icons to the links Auth::id()-->

            <li  class="{{ ($xd==2) ? 'active' : '' }}"><a href="{{ route('user') }}"><i class="fa fa-user"></i> <span>用户</span></a></li>

            <li  class="{{ ($xd==3 or $xd==4 or $xd==5 ) ? 'active' : '' }} treeview"><a href="#"><i class="fa fa-bars"></i> <span>行业动态</span></a>
              <ul class="treeview-menu">
                <li  class="{{ ($xd==4) ? 'active' : '' }}" ><a href="{{ route('news7') }}"><i class="fa fa-circle-o"></i>行销讲座</a></li>
                <li  class="{{ ($xd==5) ? 'active' : '' }}" ><a href="{{ route('news6') }}"><i class="fa fa-circle-o"></i>消息活动</a></li>
              </ul>
            </li>
            <li  class="{{ ($xd==6) ? 'active' : '' }}"><a href="{{ route('case') }}"><i class="fa fa-child"></i> <span>成功案例</span></a></li>
            <li  class="{{ ($xd==7) ? 'active' : '' }}"><a href="{{ route('ad') }}"><i class="fa fa-comment"></i> <span>问询列表</span></a></li>

{{--         @if (Auth::user()->type ==2)--}}
{{--              <li  class="{{ ($xd==2) ? 'active' : '' }}"><a href="{{ route('user') }}"><i class="fa fa-user"></i> <span>用户</span></a></li>--}}
{{--              <li  class="{{ ($xd==3) ? 'active' : '' }}"><a href="{{ route('index') }}"><i class="fa fa-gear"></i> <span>设置</span></a></li>--}}
{{--              <li  class="{{ ($xd==1 or $xd==4 or $xd==5 ) ? 'active' : '' }} treeview"><a href="#"><i class="fa fa-bars"></i> <span>电话管理</span></a>--}}
{{--                <ul class="treeview-menu">--}}
{{--                  <li  class="{{ ($xd==4) ? 'active' : '' }}" ><a href="{{ route('phone') }}"><i class="fa fa-circle-o"></i>号码详情</a></li>--}}
{{--                  <li  class="{{ ($xd==5) ? 'active' : '' }}" ><a href="{{ route('customer') }}"><i class="fa fa-circle-o"></i>客户</a></li>--}}
{{--                </ul>--}}
{{--              </li>--}}
{{--              <li  class="{{ ($xd==6) ? 'active' : '' }}"><a href="{{ route('total') }}"><i class="fa fa-bar-chart"></i> <span>拨打总计</span></a></li>--}}
{{--         @endif--}}
{{--          @if (Auth::user()->type ==1)--}}
{{--              <li  class="{{ ($xd==1 or $xd==4 or $xd==5 ) ? 'active' : '' }} treeview"><a href="#"><i class="fa fa-bars"></i> <span>电话管理</span></a>--}}
{{--                <ul class="treeview-menu">--}}
{{--                  <li  class="{{ ($xd==4) ? 'active' : '' }}" ><a href="{{ route('phone') }}"><i class="fa fa-circle-o"></i>号码详情</a></li>--}}
{{--                  <li  class="{{ ($xd==5) ? 'active' : '' }}" ><a href="{{ route('customer') }}"><i class="fa fa-circle-o"></i>客户</a></li>--}}
{{--                </ul>--}}
{{--              </li>--}}
{{--          @endif--}}
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
           