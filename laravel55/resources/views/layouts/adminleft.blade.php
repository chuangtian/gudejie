  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li  class="{{ ($xd==5) ? 'active' : '' }}"><a href="{{ route('gconfig') }}"><i class="fa fa-envelope"></i> <span>邮件配置</span></a></li>
        <li  class="{{ ($xd==4) ? 'active' : '' }}"><a href="{{ route('gdepositAccount') }}"><i class="fa fa-gears"></i> <span>存款账户</span></a></li>
        <li  class="{{ ($xd==1) ? 'active' : '' }}"><a href="{{ route('admin') }}"><i class="fa fa-list"></i> <span>修改存款状态</span></a></li>
        <li  class="{{ ($xd==6) ? 'active' : '' }}"><a href="{{ route('adminlist') }}"><i class="fa fa-list"></i> <span>存款列表</span></a></li>
        <li  class="{{ ($xd==3) ? 'active' : '' }}"><a href="{{ route('withdrawal') }}"><i class="fa fa-list"></i> <span>修改取款状态</span></a></li>
        <li  class="{{ ($xd==7) ? 'active' : '' }}"><a href="{{ route('withdrawallist') }}"><i class="fa fa-list"></i> <span>取款列表</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
           