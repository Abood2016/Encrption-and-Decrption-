 <div class="sidebar" data-color="purple" data-background-color="white">
    
      <div class="logo">
        <a href="" class="simple-text logo-mini">
          InOrder
         
        </a>
        <a href="">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  {{ is_active('home') }} ">
            <a class="nav-link" href="{{route('dashboard.index')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item  {{ is_active('posts') }} ">
            <a class="nav-link" href="{{route('posts.index')}}">
              <i class="material-icons">list</i>
              <p>Post <span class="badge badge-danger">{{\App\Models\Post::count()}}</span></p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>