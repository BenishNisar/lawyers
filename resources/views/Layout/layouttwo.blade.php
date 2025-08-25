<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Qadeer & Zaheer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('Dashboard_assets/img/logo.png') }}" rel="icon">
  <link href="{{ asset('Dashboard_assets/img/logo.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('Dashboard_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset  ('Dashboard_assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset ('Dashboard_assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="'{{ asset ('Dashboard_assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset ('Dashboard_assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset ('Dashboard_assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset  ('Dashboard_assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->


  <link href="{{asset('Dashboard_assets/css/style.css')}}" rel="stylesheet">
  <style>
    /* Change navbar item color to black */
    .navbar-nav .nav-item {
        color: black; /* Change to black */
    }

    /* Change navbar item hover color */
    .navbar-nav .nav-item:hover {
        color: #333; /* A slightly darker shade on hover */
    }

    /* Change sub-item color to grey */
    .navbar-nav .nav-item .dropdown-menu .dropdown-item {
        color: grey; /* Change sub-item color to grey */
    }

    /* Change sub-item hover color */
    .navbar-nav .nav-item .dropdown-menu .dropdown-item:hover {
        color: white; /* Change to white on hover for contrast */
        background-color: gray; /* Background color on hover */
    }

    /* Additional styles for the page */
    body {
        padding: 20px;
    }

    .content {
        text-align: center;
        margin-top: 50px;
    }
/* notifications */
.notifications::-webkit-scrollbar {
        width: 6px;
    }

    .notifications::-webkit-scrollbar-thumb {
        background-color: #ccc;
        border-radius: 10px;
    }

    .notifications::-webkit-scrollbar-thumb:hover {
        background-color: #999;
    }
/* darkmode */
    :root {
    --main-bg: #ffffff;
    --main-text: #000000;
    --card-bg: #f9f9f9;
    --nav-bg: #ffffff;
  }

  body.dark-mode {
    --main-bg: #121212;
    --main-text: #e0e0e0;
    --card-bg: #1e1e1e;
    --nav-bg: #1c1c1c;
  }

  body {
    background-color: var(--main-bg);
    color: var(--main-text);
    transition: all 0.3s ease-in-out;
  }

  .header,
  .sidebar,
  .dropdown-menu,
  .table,
  .table th,
  .table td,
  .view-card,
  .category-view-card,
  .navbar,
  .nav-item a,
  .form-control {
    background-color: var(--card-bg) !important;
    color: var(--main-text) !important;
  }

  .nav-link,
  .nav-item i,
  .nav-item span {
    color: var(--main-text) !important;
  }

  .dark-toggle-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #b10937;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 50px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    z-index: 9999;
    transition: 0.3s;
  }
  .dark-toggle-btn:hover {
    background-color: #86092b;
  }


</style>

</head>
@stack('styles')

<body>

<!-- ======= Header ======= -->
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <img  src="{{ asset('Dashboard_assets/img/logo.png') }}" alt="Logo">
        </a>

        <i style="font-size:22px;" class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <!-- Search Icon -->
<!-- Search Icon -->
<!-- Search Icon -->
<li class="nav-item position-relative">
    <a id="searchToggle" class="nav-link nav-icon search-bar-toggle" href="#" style="color: darkgray; font-size: 15px;">
        <i class="bi bi-search"></i>
    </a>

    <!-- Search Box Dropdown -->
    <div id="searchBoxWrapper" style="position: absolute; top: 35px; right: 0; background: #fff; border: 1px solid #ddd; padding: 10px; display: none; z-index: 999; width: 250px; border-radius: 5px;">
        <input type="text" id="blogSearch" class="form-control" placeholder="Search blogs...">
        <ul id="searchResults" class="list-group mt-2" style="max-height: 200px; overflow-y: auto;"></ul>
    </div>
</li>




<!-- End Search Icon -->


            <!-- Notification Icon -->
<!-- Notification Icon -->
<li class="nav-item dropdown">
    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown" style="color:#f71381;" title="Notifications">
        <i class="bi bi-bell"></i>
        @if(count($notifications) > 0)
            <span class="badge bg-danger badge-number">{{ count($notifications) }}</span>
        @endif
    </a>

    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications"
        style="max-height: 300px; overflow-y: auto;">

        <li class="dropdown-header">
            You have {{ count($notifications) }} new contact messages
        </li>
        <li><hr class="dropdown-divider"></li>

        @forelse($notifications as $note)
            <li class="notification-item">
                <i class="bi bi-person-circle text-primary"></i>
                <div>
                    <h6>{{ $note->name }}</h6>
                    <p>{{ Str::limit($note->message, 30) }}</p>
                    <small class="text-muted">{{ $note->created_at->diffForHumans() }}</small>
                </div>
            </li>
            <li><hr class="dropdown-divider"></li>
        @empty
            <li class="notification-item">
                <p class="text-center m-2">No new notifications</p>
            </li>
        @endforelse
    </ul>
</li>



            <!-- End Notification Icon -->

            <!-- New Icon -->
        <!-- New Icon -->
<li class="nav-item dropdown">
    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown" title="Quick Actions">
        <i class="bi bi-plus-circle" style="color: darkgray;"></i>
    </a>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <li><a class="dropdown-item" href="{{ route('Dashboard.admin.blog.add') }}"><i class="bi bi-journal-plus me-2"></i> Add Blog</a></li>
        <li><a class="dropdown-item" href="{{ route('Dashboard.admin.users.add') }}"><i class="bi bi-person-plus me-2"></i> Add User</a></li>
        <li><a class="dropdown-item" href="{{ route('Dashboard.admin.category.add') }}"><i class="bi bi-tags me-2"></i> Add Category</a></li>
    </ul>
</li>

            <!-- End New Icon -->
<!-- Profile Icon -->
<li class="nav-item dropdown pe-3">
    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" style="color: darkgray; transition: none; font-size: 15px;">
        @if(auth()->user() && auth()->user()->profile_img)
            <img src="{{ asset(auth()->user()->profile_img) }}" alt="Profile Image" class="rounded-circle" width="40" height="40">
        @else
            <i class="bi bi-person-circle"></i> <!-- Default icon if no profile image -->
        @endif
        <span class="d-none d-md-block ps-2">{{ auth()->check() ? auth()->user()->firstname : 'Guest' }}</span>
    </a><!-- End Profile Icon -->

    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
            @if(auth()->user() && auth()->user()->profile_img)
            <img src="{{ asset(auth()->user()->profile_img) }}" alt="Profile Image" class="rounded-circle" width="80" height="80">
        @else
            <i class="bi bi-person-circle" style="font-size: 80px; color: gray;"></i>
        @endif
            <h6>{{ auth()->check() ? auth()->user()->firstname : 'Guest' }}</h6>
            <span>{{ auth()->check() ? auth()->user()->email : 'Not Logged In' }}</span>
        </li>
        <li><hr class="dropdown-divider"></li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ asset('/profile') }}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
            </a>
        </li>
        <li><hr class="dropdown-divider"></li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ asset('/account_settings') }}">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
            </a>
        </li>
        <li><hr class="dropdown-divider"></li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ asset('/need_help') }}">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
            </a>
        </li>
        <li><hr class="dropdown-divider"></li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
            </a>
        </li>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </ul><!-- End Profile Dropdown Items -->
</li><!-- End Profile Nav -->


            <!-- Logout Icon -->
            <li class="nav-item">
                <a class="nav-link nav-icon" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: darkgray; transition: none; font-size: 15px;" title="Logout">
                    <i class="bi bi-box-arrow-right"></i>
                </a>
            </li><!-- End Logout Icon -->
        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->




 <!-- ======= Sidebar ======= -->
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" >

    <ul class="sidebar-nav" id="sidebar-nav" >

        <li  class="nav-item" >
            <a  class="nav-link"  href="{{ asset("dashboard") }}">
                <i class="fas fa-hard-hat"></i>

              <span>Dashboard</span>
            </a>
          </li><!-- End Dashboard Nav -->
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
                <i  class="fas fa-users"></i>
                <span>Users Manage</span>
              <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="users-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                <a  href="{{ asset('users') }}">
                  <i class="bi bi-circle"></i><span>Users </span>
                </a>
              </li>


              <li>
                <a href="{{ asset('roles') }}">
                  <i class="bi bi-circle"></i><span>Role</span>
                </a>
              </li>





            </ul>
          </li>








      <li class="nav-item" >
        <a class="nav-link collapsed" data-bs-target="#articles-nav" data-bs-toggle="collapse" href="#">
            <i class="fas fa-exclamation-triangle"></i>
            <span>Articles</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="articles-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a  href="{{ asset('/blog') }}">
              <i class="bi bi-circle"></i><span >Blogs</span>
            </a>
          </li>
          <li>
            <a  href="{{ asset('/category') }}">
              <i class="bi bi-circle"></i><span >Categories</span>
            </a>
          </li>


        </ul>
      </li><!-- End Components Nav -->


      {{-- <li class="nav-item" >
        <a   class="nav-link collapsed" data-bs-target="#services-nav" data-bs-toggle="collapse" href="#">
            <i style="font-size: 12px; font-weight:bolder; color:rgba(12, 12, 12, 0.829);" class="fas fa-exclamation-triangle"></i>
            <span style="font-size: 12px; font-weight:bolder; color:rgba(12, 12, 12, 0.829);">Services</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="services-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">

            <li>
            <a  href="{{ asset('corporates') }}">
              <i class="bi bi-circle"></i><span >Corporate</span>
            </a>
          </li>



        </ul>
      </li> --}}

          <li class="nav-item">
            <a href="{{ asset('contactus') }}" class="nav-link collapsed" >
                <i class="fas fa-phone-alt"></i>
                <span>Contact</span>
            </a>
        </li>

        {{-- <li class="nav-item">
            <a href="{{ asset('officedetails') }}" style="color:black" class="nav-link collapsed" >
                <i class="fas fa-building" style="color:#b10937;"></i>

                <span>Links Station - Office Details</span>
            </a>
        </li> --}}











    </ul>

</aside><!-- End Sidebar-->


  <main id="main" class="main">

    @yield('AdminContent')
  </main>

<!-- Dark Mode Button -->
<button class="dark-toggle-btn" onclick="toggleDarkMode()">
    <i class="fas fa-moon"></i> Toggle Mode
  </button>

    {{-- <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
          &copy; Copyright <strong><span>© 2025 All Rights Reserved | Designed with ❤️ by </span></strong>Links Station
        </div>


      </footer><!-- End Footer --> --}}

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="{{ asset ('Dashboard_assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
      <script src="{{ asset ('Dashboard_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset  ('Dashboard_assets/vendor/chart.js/chart.umd.js')}}"></script>
      <script src="{{ asset ('Dashboard_assets/vendor/echarts/echarts.min.js')}}"></script>
      <script src="{{ asset('Dashboard_assets/vendor/quill/quill.js')}}"></script>
      <script src=  "{{ asset( 'Dashboard_assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
      <script src="{{asset  ('Dashboard_assets/vendor/tinymce/tinymce.min.js')}}"></script>
      <script src="{{ asset ('Dashboard_assets/vendor/php-email-form/validate.js')}}"></script>
      {{-- search --}}
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <!-- Template Main JS File -->
      <script src="{{ asset('Dashboard_assets/js/main.js')}}"></script>

      @stack('scripts')

    </body>
    <script>
        $('#searchToggle').on('click', function (e) {
            e.preventDefault();
            $('#searchBoxWrapper').toggle();
            $('#blogSearch').focus();
        });

        $('#blogSearch').on('keyup', function () {
            let query = $(this).val();

            if (query.length > 1) {
                $.ajax({
                    url: '{{ route("blog.search") }}',
                    method: 'GET',
                    data: { q: query },
                    success: function (data) {
                        let results = data.map(blog => `
                            <li class="list-group-item">
                                <a href="{{ route('Dashboard.admin.blog.index') }}?highlight=${blog.id}" style="text-decoration:none;">
                                    ${blog.title}
                                </a>
                            </li>
                        `);
                        $('#searchResults').html(results.join(''));
                    }
                });
            } else {
                $('#searchResults').empty();
            }
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.querySelector('.search-input');
        const rows = document.querySelectorAll('table tbody tr');

        searchInput.addEventListener('keyup', function () {
            const value = this.value.toLowerCase();

            rows.forEach(row => {
                const rowText = row.innerText.toLowerCase();
                row.style.display = rowText.includes(value) ? '' : 'none';
            });
        });
    });


    // darkmodehere

    function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
    localStorage.setItem('darkMode', document.body.classList.contains('dark-mode'));
  }

  // Load mode preference
  window.onload = function () {
    if (localStorage.getItem('darkMode') === 'true') {
      document.body.classList.add('dark-mode');
    }
  };
</script>



    </html>

