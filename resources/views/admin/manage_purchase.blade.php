<!--manage Purchase -->
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-copy"></i>
    <p>
        Purchase
      <i class="fas fa-angle-left right"></i>
      {{-- <span class="badge badge-info right">6</span> --}}
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
        <a href="{{ url('purchases') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Purchase Add</p>
        </a>
      </li>
    <li class="nav-item">
      <a href="{{ url('purchaseinvoice') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Purchase Invoice</p>
      </a>
    </li>
  </ul>
</li>
<!--/manage Purchase -->
