<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">



        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"></li>
            <!-- Optionally, you can add icons to the links -->
            <li class=""><a href="{{ route('backend.dashboard') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa  fa-book"></i> <span>Form</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" ">Form List</a></li>
                    <li><a href="">Add Form</a></li>

                </ul>
            </li>




            <li class=""><a href="{{ route('backend.general-member.list') }}"><i class="fa fa-anchor"></i> <span>General Member</span></a></li>
            <li class=""><a href="{{ route('backend.designation.index') }}"><i class="fa fa-anchor"></i> <span>Designation</span></a></li>

            <li class="treeview">
                <a href="#"><i class="fa  fa-book"></i> <span>Central Committee</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" {{ route('backend.central-committee.list') }}">Central Committee List</a></li>
                    <li><a href="{{ route('backend.central-committee.add') }}">Add Central Committee</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa  fa-book"></i> <span>District Committee</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" {{ route('backend.district-committee.list') }}">District Committee List</a></li>
                    <li><a href="{{ route('backend.district-committee.add') }}">Add District Committee</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa  fa-book"></i> <span>Departmental Committee</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" {{ route('backend.department-committee.list') }}">Departmental Committee List</a></li>
                    <li><a href="{{ route('backend.department-committee.add') }}">Add Departmental Committee</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa  fa-book"></i> <span>Notice</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" {{ route('backend.notice.list') }}">Notice List</a></li>
                    <li><a href="{{ route('backend.notice.add') }}">Add Notice</a></li>

                </ul>
            </li>





            <li class=""><a href="{{ route('backend.user.list') }}"><i class="fa fa-android"></i> <span>User</span></a></li>


        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
