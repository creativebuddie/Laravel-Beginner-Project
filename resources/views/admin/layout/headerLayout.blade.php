<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ url('adminUsers/create') }}">Create</a></li>
      <li><a href="{{ url('adminUsers/show') }}">Show</a></li>
      <li><a href="{{ url('adminProduct/create') }}">Add Product</a></li>
      <li><a href="{{ url('adminProduct/show') }}">Manage Product</a></li>
      <li><a href="{{ url('adminCategory/create') }}">Add Category</a></li>
      <li><a href="{{ url('adminCategory/show') }}">Manage Category</a></li>
    </ul>
  </div>
</nav>
