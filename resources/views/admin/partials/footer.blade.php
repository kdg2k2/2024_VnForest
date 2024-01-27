<!-- js -->
<script src="{{ asset('/admin_template/vendors/scripts/core.js') }}"></script>
<script src="{{ asset('/admin_template/vendors/scripts/script.min.js') }}"></script>
<script src="{{ asset('/admin_template/vendors/scripts/process.js') }}"></script>
<script src="{{ asset('/admin_template/vendors/scripts/layout-settings.js') }}"></script>
<script src="{{ asset('/admin_template/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/admin_template/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/admin_template/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/admin_template/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
<!-- buttons for Export datatable -->
<script src="{{ asset('/admin_template/src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/admin_template/src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/admin_template/src/plugins/datatables/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('/admin_template/src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/admin_template/src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('/admin_template/src/plugins/datatables/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('/admin_template/src/plugins/datatables/js/vfs_fonts.js') }}"></script>

<script src="{{ asset('/admin_template/src/plugins/jQuery-Knob-master/jquery.knob.min.js') }}"></script>
<script src="{{ asset('/admin_template/src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('/admin_template/src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/admin_template/vendors/scripts/datatable-setting.js') }}"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const currentPath = window.location.pathname;

    const menuLinks = document.querySelectorAll('.sidebar-menu li');
    menuLinks.forEach(item => {
      const link = item.querySelector('a');
      if (link != null) {
        if (link.getAttribute('href') == currentPath) {
          link.classList.add('active');
          link.parentElement.classList.add('active');
        }
      }
    });
  })

  var numbers = document.querySelectorAll('.number-format');
  numbers.forEach(number => {
    number.textContent = new Intl.NumberFormat('en-US').format(number.textContent);
  });
</script>