  <script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('backend/js/sidebar-menu.js') }}"></script>
  <script src="{{ asset('backend/js/quill.min.js') }}"></script>
  <script src="{{ asset('backend/js/data-table.js') }}"></script>
  <script src="{{ asset('backend/js/prism.js') }}"></script>
  <script src="{{ asset('backend/js/clipboard.min.js') }}"></script>
  <script src="{{ asset('backend/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('backend/js/apexcharts.min.js') }}"></script>
  <script src="{{ asset('backend/js/echarts.min.js') }}"></script>
  <script src="{{ asset('backend/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('backend/js/fullcalendar.main.js') }}"></script>
  <script src="{{ asset('backend/js/jsvectormap.min.js') }}"></script>
  <script src="{{ asset('backend/js/world-merc.js') }}"></script>
  <script src="{{ asset('backend/js/custom/apexcharts.js') }}"></script>
  <script src="{{ asset('backend/js/custom/echarts.js') }}"></script>
  <script src="{{ asset('backend/js/custom/maps.js') }}"></script>
  <script src="{{ asset('backend/js/custom/custom.js') }}"></script>

  <script src="{{ asset('backend/tinymce/tinymce.min.js') }}"></script>
  <script type="text/javascript">
      tinymce.init({
          selector: '#tyni',
          plugins: 'advlist autolink lists link charmap preview anchor table image',
          toolbar: 'undo redo | formatselect | ' +
              'bold italic backcolor | alignleft aligncenter ' +
              'alignright alignjustify | bullist numlist outdent indent | ' +
              'removeformat | help | table | link image',
          images_upload_url: "{{url('/admin/upload-image')}}",
          relative_urls: false,
          document_base_url: "{{ url('/') }}",
          automatic_uploads: true,

      })
  </script>
