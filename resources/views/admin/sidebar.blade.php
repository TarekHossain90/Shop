<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{url('/home')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{url('all_team')}}"> <i class="icon-grid"></i>Team </a></li>
                <li><a href="{{url('view_gallary')}}"> <i class="fa fa-bar-chart"></i>Gallary </a></li>
                <li><a href="{{url('all_message')}}"> <i class="icon-padnote"></i>Message </a></li>
                
                <li><a href="{{url('/')}}"> <i class="icon-logout"></i>Logout</a></li>
        </ul>
        
      </nav>