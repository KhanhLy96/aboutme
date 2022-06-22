<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/template/admin/inc/leftbar.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/template/admin/inc/header.php';
?>

<div class="container-fluid py-4">
    <h6>Welcome to Admin site of <a href="http://ly.local/">Aboutme! </a> (@^^@).</h6>
    <img width="1000px" height="500px" style="vertical-align: text-top" src="../template/admin/assets/img/bg-pricing.jpg">

</div>

<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/template/admin/inc/footer.php';
?>










































































<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="../template/admin/assets/js/material-dashboard.min.js?v=3.0.4"></script>
  </body>

</html>
