<!-- Sales Report -->
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-table"></i>
    <p>
      Sales Report
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>

  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ url('sales_summary') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Sales Summary</p>
      </a>
    </li>
    
    <li class="nav-item">
      <a href="{{ url('pro_wise_sales') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Product Wise Sales</p>
      </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('all_sales') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>All Sales</p>
        </a>
      </li>
  </ul>
</li>
<!-- /Sales Report-->


<!-- Purchase Report -->
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-table"></i>
    <p>
      Purchase Report
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="pages/tables/simple.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Purchase Summary</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/tables/data.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Purchase Statistics</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('pro_wise_purchase') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Product Wise Purchase</p>
      </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('all_purchase') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>All Purchase</p>
        </a>
      </li>
  </ul>
</li>
<!-- /Purchase Report-->

<li class="nav-item">
      <a href="{{ url('branch_wise_report') }}" class="nav-link">
         <i class="nav-icon fas fa-table"></i>
        <p>Branch Wise Report</p>
      </a>
 </li>

<!-- Stock Report -->
<li class="nav-item has-treeview">
  <a href="{{ url('report') }}" class="nav-link">
    <i class="nav-icon fas fa-table"></i>
    <p>
      Stock Report
    
    </p>
  </a>
  {{-- <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="pages/tables/simple.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Simple Tables</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/tables/data.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>DataTables</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/tables/jsgrid.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>jsGrid</p>
      </a>
    </li>
  </ul> --}}
</li>
<!-- /Stock Report-->
