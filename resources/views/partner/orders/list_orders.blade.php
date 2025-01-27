@extends('partner.layouts.dashboard')
@section('content')
<script src="https://kit.fontawesome.com/aa64dc9752.js" crossorigin="anonymous"></script>
<!-- Layout container -->
<div class="layout-page">
  <!-- Navbar -->

  <nav
    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-4" href="{{ url("javascript:void(0)") }}">
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <!-- Search -->
      <div class="navbar-nav align-items-center">
        <div class="nav-item d-flex align-items-center">
          <i class="bx bx-search fs-4 lh-0"></i>
          <input
            type="text"
            class="form-control border-0 shadow-none"
            placeholder="Search..."
            aria-label="Search..." />
        </div>
      </div>
      <!-- /Search -->

      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- Place this tag where you want the button to render. -->


        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="{{ url("javascript:void(0);") }}" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="{{ asset("/../admin/assets/img/avatars/1.png") }}" alt class="w-px-40 h-auto rounded-circle" />
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="{{ url("#") }}">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="{{ asset("/../admin/assets/img/avatars/1.png") }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-semibold d-block">John Doe</span>
                    <small class="text-muted">Admin</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="{{ url("profile.html") }}">
                <i class="bx bx-user me-2"></i>
                <span class="align-middle">My Profile</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="{{ url("#") }}">
                <i class="bx bx-cog me-2"></i>
                <span class="align-middle">Settings</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="{{ url("#") }}">
                <span class="d-flex align-items-center align-middle">
                  <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                  <span class="flex-grow-1 align-middle">Billing</span>
                  <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                </span>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="{{ url("auth-login-basic.html") }}">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Log Out</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ User -->
      </ul>
    </div>
  </nav>

  <!-- / Navbar -->

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y" data-select2-id="22">


      <div class="app-ecommerce" data-select2-id="21">

        <!-- Add Product -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">

          <div class="d-flex flex-column justify-content-center">
            <h4 class="mb-1">Order</h4>
          </div>

        </div>

        <div class="row" data-select2-id="20">

          <!-- First column-->
          <div class="col-12 col-lg-12">
            <!-- Product Information -->
            <div class="card mb-6">
              <div class="card-body">
                <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
              <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css"> -->



                <table id="example" class="table table-striped" style="width:100%">
                  <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Payment Method</th>
                      <th>User ID</th>
                      <th>Name Receiver</th>
                      <th>Price</th>
                      <th>Phone Number</th>
                      <th>Address</th>
                      <th>Status</th>
                      <th>Xem</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)
                    <tr>
                      <td>{{ $order->order_id }}</td>
                      <td>{{ $order->payment_method_id }}</td>
                      <td>{{ $order->user_id }}</td>
                      <td>{{ $order->name_receiver }}</td>
                      <td>${{ number_format($order->price, 2) }}</td>
                      <td>{{ $order->phone_number }}</td>
                      <td>{{ $order->address }}</td>
                      <td>{{ $order->status }}</td>
                      <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="fa-solid fa-eye"></i>
                        </button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Order ID</th>
                      <th>Payment Method</th>
                      <th>User ID</th>
                      <th>Name Receiver</th>
                      <th>Price</th>
                      <th>Phone Number</th>
                      <th>Address</th>
                      <th>Status</th>
                      <th>Xem</th>
                    </tr>
                  </tfoot>
                </table>

                <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
                <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
                <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
                <script>
                  new DataTable('#example');
                </script>
              </div>
            </div>
          </div>
          <!-- /Second column -->
        </div>
      </div>
    </div>
    <!-- / Content -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">info staff</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="modal-body">
              <p><strong>Tên:</strong><br>Nguyễn Quang Cường</p>
              <p><strong>Email:</strong><br>zzcuong445@gmail.com</p>
              <p><strong>Địa chỉ:</strong><br>123 Đường ABC, Phường XYZ</p>
              <p><strong>Chức vụ:</strong><br>Staff</p>
              <p><strong>Trạng thái:</strong><br>Cho phép hoạt động </p>
              <p><strong>Hoạt động từ ngày:</strong><br>24-02-2004 </p>
            </div>

          </div>

        </div>
      </div>
    </div>
    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
      <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>
          , made with ❤️ by
          <a href="https://OneDream.com" target="_blank" class="footer-link fw-bolder">OneDream</a>
        </div>

      </div>
    </footer>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
</div>
@endsection