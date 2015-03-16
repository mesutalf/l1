<!DOCTYPE html>
<html>
  <head>
    @include("layouts.head")
    @include("layouts.scripts")
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      <header class="main-header">
          @include("layouts.header")
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">
            @include("layouts.sidebar")
        </section>
      </aside>
      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <section class="content">
            @yield("evraklistesi")
            @yield("evrakgoster")
            @yield("content")
        </section>
      </div>
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    </div>

  </body>
</html>