<!-- Manage Employees -->
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-table"></i>
    <p>
      Manage Employees
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="pages/tables/simple.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Departments</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/tables/data.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Designation</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('employees') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Employees</p>
      </a>
    </li>
  </ul>
</li>
<!-- /Manage Employees -->

<!-- Manage Branch -->
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-table"></i>
    <p>
      Manage Branch
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
        <a href="{{ url('branches') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>All Branches</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/tables/data.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p> Sales Target</p>
      </a>
    </li>

  </ul>
</li>
<!-- /Manage Branch -->
<!--CRM -->
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-table"></i>
    <p>
     CRM
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
        <a href="{{ url('customers') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Manage Customer</p>
      </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('suppliers') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Manage Suppliers</p>
      </a>
    </li>

  </ul>
</li>
<!-- /CRM -->
