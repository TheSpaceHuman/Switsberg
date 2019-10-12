@if(session('success-message'))
    <script type="text/javascript">
      $.growl.notice({ title: '', message: "{{ session('success-message') }}" });
    </script>
@endif
@if(session('error-message'))
    <script type="text/javascript">
      $.growl.error({ title: '', message: "{{ session('error-message') }}" });
    </script>
@endif