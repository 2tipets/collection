<nav class="side-navbar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar"><img src="images/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title">
      <h1 class="h4">{{ $user->name }}</h1>
      <p>{{ $user->name }}</p>
    </div>
  </div>
  <!-- Sidebar Navidation Menus--><span class="heading">Main menu</span>
  <ul class="list-unstyled">
    <li class="active"> <a href="/collection/public/admin"><i class="icon-home"></i>Home</a></li>

    <li><a href="#collection-menu" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Collection </a>
      <ul id="collection-menu" class="collapse list-unstyled">
        <li>{{ Html::linkAction('AdminController@addCollection', 'Add Collection')}}</li>
        <li>{{ Html::linkAction('AdminController@showCollections', 'Summary')}}</li>
      </ul>
    </li>

    <li><a href="#figure-menu" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Figures </a>
      <ul id="figure-menu" class="collapse list-unstyled">
        <li>{{ Html::linkAction('AdminController@addFigure', 'Add Figure')}}</li>
        <li>{{ Html::linkAction('AdminController@showFigures', 'Summary')}}</li>
      </ul>
    </li>

    <li><a href="#brand-menu" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Brands </a>
      <ul id="brand-menu" class="collapse list-unstyled">
        <li>{{ Html::linkAction('BrandController@create', 'Add Brand')}}</li>
        <li>{{ Html::linkAction('BrandController@showBrands', 'Summary')}}</li>
      </ul>
    </li>

    <li><a href="#franchise-menu" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Franchises </a>
      <ul id="franchise-menu" class="collapse list-unstyled">
        <li>{{ Html::linkAction('FranchiseController@create', 'Add Franchise')}}</li>
        <li>{{ Html::linkAction('FranchiseController@index', 'Summary')}}</li>
      </ul>
    </li>

    <li><a href="#reports-menu" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Reports </a>
      <ul id="reports-menu" class="collapse list-unstyled">
        <li><a href="#">Page</a></li>
        <li><a href="#">Page</a></li>
        <li><a href="#">Page</a></li>
        <li><a href="#">Page</a></li>
      </ul>
    </li>

  </ul>
</nav>