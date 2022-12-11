<!--manage product -->
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-copy"></i>
    <p>
     Product
      <i class="fas fa-angle-left right"></i>
      {{-- <span class="badge badge-info right">6</span> --}}
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
        <a href="{{ url('products') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>product</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('brands') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Brands</p>
      </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('categoris') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>category</p>
      </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('units') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>units</p>
      </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('subcategories') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>sub category</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/layout/fixed-footer.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>variant attributes</p>
      </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('taxs') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Tax</p>
      </a>
    </li>

  </ul>
</li>
<!--/manage product -->

<!--manage stock -->
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-tree"></i>
    <p>
     Manage Stock
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="pages/UI/general.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>New Purchase</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/UI/icons.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Manage Purchase</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/UI/buttons.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Create Requistion</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/UI/sliders.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Pending Requistion</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/UI/modals.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Manage Requistion</p>
      </a>
    </li>
    {{-- <li class="nav-item">
      <a href="pages/UI/navbar.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Navbar & Tabs</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/UI/timeline.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Timeline</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/UI/ribbons.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Ribbons</p>
      </a>
    </li> --}}
  </ul>
</li>
<!--/manage stock -->


