<!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © kidsschool.com 2026</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Kids School <a href="#" target="_blank">Pawan's</a>Code & Lab</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('admin_assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('admin_assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('admin_assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('admin_assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin_assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin_assets/js/misc.js')}}"></script>
    <script src="{{asset('admin_assets/js/settings.js')}}"></script>
    <script src="{{asset('admin_assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('admin_assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <script>
        @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}",
            // Modal Styling
            confirmButtonColor: '#10B981', // Success Green
            background: 'rgb(106 119 120)', // Light Gray Background
            color: '#111827',      
            borderRadius: '15px'
        });
    @endif

    // Error Alert
    @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ session('error') }}",
            // Modal Styling
            confirmButtonColor: '#EF4444', // Error Red
            background: 'rgb(106 119 120)', // Light Gray Background
            color: '#111827',      
            borderRadius: '15px'
        });
    @endif
    // Success Alert
   
</script>
  </body>
</html>