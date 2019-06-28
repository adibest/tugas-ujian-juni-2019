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

       <li class="treeview {{ Request::is('admin/categories') || Request::is('admin/categories/*') || Request::is('admin/products') || Request::is('admin/products/*') ? 'active' : '' }}">
         <a href="#">
           <i class="fa fa-home"></i> <span>Products</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li class="{{ Request::is('admin/categories') || Request::is('admin/categories/*') ? 'active' : '' }}">
             <a href="{{ route('categories.index') }}"><i class="fa fa-circle-o"></i> Categories</a>
           </li>
           <li class="{{ Request::is('admin/item') || Request::is('admin/item/*') ? 'active' : '' }}">
             <a href="{{route('item.index')}}"><i class="fa fa-circle-o"></i> Items</a>
           </li>
         </ul>
       </li>

       <li class="{{ Request::is('admin/rentals') || Request::is('admin/rentals/*') ? 'active' : '' }}">
         <a href="{{ route('rentals.index') }}"><i class="fa fa-shopping-cart"></i> <span>Rental</span></a>
       </li>

       <li class="{{ Request::is('admin/return') || Request::is('admin/return/*') ? 'active' : '' }}">
         <a href="{{route('return.index')}}"><i class="fa fa-undo"></i> <span>Returns</span></a>
       </li>

       <li class="{{ Request::is('admin/payments') || Request::is('admin/payments/*') ? 'active' : '' }}">
         <a href="{{ route('payments.index') }}"><i class="fa fa-cc-visa"></i> <span>Payments</span></a>
       </li>

       <li class="{{ Request::is('admin/user') || Request::is('admin/user/*') ? 'active' : '' }}">
         <a href="{{ route('user.index') }}"><i class="fa fa-users"></i> <span>Users</span></a>
       </li>

     </ul>
   </section>
   <!-- /.sidebar -->
 </aside>

    </section>
    <!-- /.sidebar -->
  </aside>
