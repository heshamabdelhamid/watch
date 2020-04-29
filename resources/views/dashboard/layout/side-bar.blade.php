<div class="sidebar" data-color="purple" data-background-color="black" data-image="/assets/img/sidebar-2.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{ is_active('admin') }}">
        <a class="nav-link" href="{{ Route('admin')}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item {{ is_active('users') }}  ">
          <a class="nav-link" href="{{ Route('users.index')}}">
            <i class="fa fa-users"></i>
            <p>Users</p>
          </a>
        </li>

        <li class="nav-item {{ is_active('categories') }}  ">
          <a class="nav-link" href="{{ Route('categories.index')}}">
            <i class="fa fa-users"></i>
            <p>Categories</p>
          </a>
        </li>

        <li class="nav-item {{ is_active('skills') }}  ">
          <a class="nav-link" href="{{ Route('skills.index')}}">
            <i class="fa fa-users"></i>
            <p>Skills</p>
          </a>
        </li>

        <li class="nav-item {{ is_active('pages') }}  ">
          <a class="nav-link" href="{{ Route('tags.index')}}">
            <i class="fa fa-users"></i>
            <p>Tags</p>
          </a>
        </li>

        <li class="nav-item {{ is_active('pages') }}  ">
          <a class="nav-link" href="{{ Route('pages.index')}}">
            <i class="fa fa-users"></i>
            <p>Pages</p>
          </a>
        </li>
        <!-- your sidebar here -->
      </ul>
    </div>
  </div>