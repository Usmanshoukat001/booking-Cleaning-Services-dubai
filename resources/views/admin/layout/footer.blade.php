     <!-- Footer -->
     <footer class="content-footer footer bg-footer-theme">
      <div class="container-xxl">
        <div
          class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
          <div class="mb-2 mb-md-0">
            Copyright ©
            <script>
              document.write(new Date().getFullYear());
            </script>
            , by <span class="text-danger">
            <a href="/" target="_blank" class="footer-link fw-medium">THELMACLEANING</a> 
           
          </div>
        </div>
      </div>
    </footer>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>

<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->
<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset('public/admin_asset/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/node-waves/node-waves.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/hammer/hammer.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/i18n/i18n.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/js/menu.js')}}"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('public/admin_asset/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('public/admin_asset/assets/js/main.js')}}"></script>

<!-- Page JS -->
<script src="{{asset('public/admin_asset/assets/js/app-logistics-dashboard.js')}}"></script>
@yield('userList')
</body>
</html>
