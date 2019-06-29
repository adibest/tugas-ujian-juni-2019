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
         <a href="{{ route('authors.index') }}"><i class="fa fa-pencil-square-o"></i> <span>Authors</span></a>
       </li>

       <li class="{{ Request::is('admin/books') || Request::is('admin/books/*') ? 'active' : '' }}">
         <a href="{{ route('books.index') }}"><i class="fa fa-book"></i> <span>Books</span></a>
       </li>

       <li class="{{ Request::is('admin/members') || Request::is('admin/members/*') ? 'active' : '' }}">
         <a href="{{ route('members.index') }}"><i class="fa fa-users"></i> <span>Members</span></a>
       </li>

       <li class="{{ Request::is('admin/publishers') || Request::is('admin/publishers/*') ? 'active' : '' }}">
         <a href="{{ route('publishers.index') }}"><i class="fa fa-print"></i> <span>Publishers</span></a>
       </li>

       <li class="{{ Request::is('admin/rents') || Request::is('admin/rents/*') ? 'active' : '' }}">
         <a href="{{ route('rents.index') }}"><i class="fa fa-exchange"></i> <span>Rents</span></a>
       </li>

       <li class="{{ Request::is('admin/type_books') || Request::is('admin/type_books/*') ? 'active' : '' }}">
         <a href="{{ route('type_books.index') }}"><i class="fa fa-tags"></i> <span>Books Type</span></a>
       </li>

       <li class="{{ Request::is('admin/type_members') || Request::is('admin/type_members/*') ? 'active' : '' }}">
         <a href="{{ route('type_members.index') }}"><i class="fa fa-user-plus"></i> <span>Members Type</span></a>
       </li>

     </ul>
   </section>
   <!-- /.sidebar -->
 </aside>

    </section>
    <!-- /.sidebar -->
  </aside>
