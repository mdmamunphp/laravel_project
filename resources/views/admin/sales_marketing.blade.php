
<!--manage sales -->
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-chart-pie"></i>
    <p>
       sales
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
        <a href="{{ url('sales') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Sale Add</p>
        </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('Sellinvoice') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Sale Invoice</p>
      </a>
    </li>

     {{-- <li class="nav-item">
        <a href="{{ url('sippings') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Shipping item</p>
      </a>
    </li> --}}
    {{-- <li class="nav-item">
      <a href="pages/charts/inline.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Branches</p>
      </a>
    </li> --}}

  </ul>
</li>
<!--/manage sales -->


