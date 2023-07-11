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
<!-- Theme Change-->
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