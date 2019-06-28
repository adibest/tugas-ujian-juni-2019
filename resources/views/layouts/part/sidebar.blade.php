 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
     <!-- Sidebar user panel -->
     <div class="user-panel">
       <div class="pull-left image">
         <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
       </div>
       <div class="pull-left info">
         <p>Alexander Pierce</p>
         <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
       </div>
     </div>
     <!-- search form -->
     <form action="#" method="get" class="sidebar-form">
       <div class="input-group">
         <input type="text" name="q" class="form-control" placeholder="Search...">
         <span class="input-group-btn">
               <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                 <i class="fa fa-search"></i>
               </button>
             </span>
       </div>
     </form>
     <!-- /.search form -->
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu" data-widget="tree">
       <li class="header">MAIN NAVIGATION</li>
       <li class="{{ Request::is('admin/dashboard') || Request::is('admin/dashboard/*') ? 'active' : '' }}">
         <a href="{{ url('/admin/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
       </li>

       <li class="{{ Request::is('admin/authors') || Request::is('admin/authors/*') ? 'active' : '' }}">
         <a href="{{ route('authors.index') }}"><i class="fa fa-shopping-cart"></i> <span>Author</span></a>
       </li>

       <li class="{{ Request::is('admin/return') || Request::is('admin/return/*') ? 'active' : '' }}">
         <a href=""><i class="fa fa-undo"></i> <span>Returns</span></a>
       </li>

       <li class="{{ Request::is('admin/payments') || Request::is('admin/payments/*') ? 'active' : '' }}">
         <a href=""><i class="fa fa-cc-visa"></i> <span>Payments</span></a>
       </li>

       <li class="{{ Request::is('admin/user') || Request::is('admin/user/*') ? 'active' : '' }}">
         <a href=""><i class="fa fa-users"></i> <span>Users</span></a>
       </li>

     </ul>
   </section>
   <!-- /.sidebar -->
 </aside>

    </section>
    <!-- /.sidebar -->
  </aside>
