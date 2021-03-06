

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/welcome">PoEEquips</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/welcome">Home</a></li>
      <li><a href="/catalog">Catalog</a></li>
      <li><a href="/about">About</a></li>
      {custom}
        {category}
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="/welcome">User Role<b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <li><a href="/roles/actor/Guest">Guest</a></li>
                <li><a href="/roles/actor/Admin">Admin</a></li>
                <li><a href="/roles/actor/User">User</a></li>
            </ul>
        </li>
    </ul>
  </div>
</nav>
