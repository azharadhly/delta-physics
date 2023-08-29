<!-- Main Footer -->
<footer class="main-footer" >
  <!-- To the right -->
  <div class="float-right d-none d-sm-inline">
  </div>
  <!-- Default to the left -->
  <strong>Designed & Developed by <a href="https://adhyazhar.000webhostapp.com"style="color:#008374;">Adhly Azhar</a>.</strong>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= asset('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= asset('assets/js/adminlte.min.js') ?>"></script>
<!-- Summernote -->
<script src="<?= asset('assets/plugins/summernote/summernote-bs4.min.js') ?>"></script>

<!-- Page specific script -->
<script>
  $(function() {
    // Summernote
    $('#summernote').summernote()
  })
</script>
</body>

</html>