<!--  Import Js Files -->
<script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!--  core files -->
<script src="{{asset('js/admin/app.min.js')}}"></script>
<script src="{{asset('js/admin/app.init.js')}}"></script>
<script src="{{asset('js/admin/app-style-switcher.js')}}"></script>
<script src="{{asset('js/admin/sidebarmenu.js')}}"></script>
<script src="{{asset('js/admin/custom.js')}}"></script>
<!-- Dashboard JS Files -->
<script src="{{asset('js/admin/dashboard.js')}}"></script>
<script src="{{asset('libs/owl.carousel/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('libs/ckeditor/ckeditor.js')}}"></script>

<!-- CKEditor -->
<script>
    ClassicEditor
        .create(document.querySelector('#long_description'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    $(document).ready(function() {
        // Fetch quote
        $.ajax({
            method: 'GET',
            url: '{{ route('get-quote')}}',
            success: function(result) {
                $('#quoteSpan').text(result.quote);
            },
            error: function(jqXHR) {
                console.error('Error: ', jqXHR.responseText);
            }
        });
    });
</script>


<script>
    // Get the user's theme preference from localStorage
    var theme = localStorage.getItem('theme');
    // If the user's theme preference is not set, use the default theme
    if (!theme) {
        // Use the system theme preference if available
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            theme = 'dark';
        } else {
            theme = 'light';
        }
    }
    // Apply the user's theme preference
    if (theme === 'light') {
        $("link[id='themeColors']").attr('href', "{{asset('css/admin/style.min.css')}}");
    } else {
        $("link[id='themeColors']").attr('href', "{{asset('css/admin/style-dark.min.css')}}");

    }
    // Listen for changes to the system theme preference
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function(event) {
        if (event.matches) {
            $("link[id='themeColors']").attr('href', "{{asset('css/admin/style-dark.min.css')}}");
        } else {
            $("link[id='themeColors']").attr('href', "{{asset('css/admin/style.min.css')}}");
        }
    });
</script>
<!-- script to auto focus on the first input field and then move to the next one on keypress -->
<script>
    $(document).ready(function() {
        $('#otp-digit-1').focus();
        $('#otp-digit-1, #otp-digit-2, #otp-digit-3, #otp-digit-4, #otp-digit-5, #otp-digit-6').keyup(function() {
            if (this.value.length == this.maxLength) {
                $(this).next('.form-control').focus();
            }
        });
    });
</script>