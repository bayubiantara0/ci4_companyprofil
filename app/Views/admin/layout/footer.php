<script>
    // Tinymce

    tinymce.init({
        selector: '.konten',
        menubar: true,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | bold italic strikethrough forecolor backcolor | link image | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat code',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
</script>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>/template/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>/template/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>/template/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>/template/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url() ?>/template/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>/template/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>/template/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>/template/admin/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>/template/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>/template/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>/template/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>/template/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/template/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>/template/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>/template/admin/dist/js/pages/dashboard.js"></script>
<script>
    $(function() {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
</script>
</body>

</html>