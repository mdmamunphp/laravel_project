
<!--/manage stock -->
<!-- Expense -->
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-edit"></i>
    <p>
      Expense
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="pages/forms/general.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Expense Category</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/forms/advanced.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>New Expense</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="pages/forms/editors.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Expense List</p>
      </a>
    </li>
    {{-- <li class="nav-item">
      <a href="pages/forms/validation.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Validation</p>
      </a>
    </li> --}}
  </ul>
</li>
<!-- /Expense -->
<!-- Payment -->
<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-table"></i>
    <p>
      Payment
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ url('payment_to_supplier') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Payment To Supplier</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('received_from_customer') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Received From customer</p>
      </a>
    </li>
    {{-- <li class="nav-item">
      <a href="pages/tables/jsgrid.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>jsGrid</p>
      </a>
    </li> --}}
  </ul>
</li>
<!-- /Payment -->
