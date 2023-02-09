<li class="menu-header">Dashboard</li>
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('home') }}">
        <i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
    </a>
</li>
<li class="menu-header">Sensors</li>
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('Temperature') }}">
        <i class="fas fa-temperature-high"></i><span>Temperature</span>
    </a>
</li>
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('Humidity') }}">
        <i class="fas fa-humidity"></i><span>Humidity</span>
    </a>
</li>
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('Water Quality') }}">
        <i class="fas fa-sprinkler"></i><span>Water Quality</span>
    </a>
</li>
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('Water Levels') }}">
        <i class="fas fa-sprinkler"></i><span>Water Level</span>
    </a>
</li>
<li class="menu-header">Sensor Configuration</li>
<li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Configurations</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="layout-default.html">Active Configuration</a></li>
        <li><a class="nav-link" href="{{ route('Sensors Configuration') }}">All In One</a></li>
        <li><a class="nav-link" href="layout-transparent.html">Temperature Configuration</a></li>
        <li><a class="nav-link" href="layout-top-navigation.html">Humidity Configuration</a></li>
        <li><a class="nav-link" href="layout-transparent.html">Lights Configuration</a></li>
        <li><a class="nav-link" href="layout-top-navigation.html">Water Level Configuration</a></li>
        <li><a class="nav-link" href="layout-transparent.html">CO2 Configuration</a></li>
    </ul>
</li>
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('Configuration History') }}">
        <i class="fas fa-cogs"></i><span>Configuration History</span>
    </a>
</li>
<li class="menu-header">Management</li>
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('Users') }}">
        <i class="fas fa-users"></i><span>Users</span>
    </a>
</li>
