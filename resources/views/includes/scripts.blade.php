<!-- JQuery -->
<script src="{{asset('js/jquery-3.5.0.min.js')}}"></script>
<!-- LightBox -->
<script src="{{asset('js/lightbox.js')}}"></script>
<!-- Main Script -->
<script src="{{asset('js/script.js')}}"></script>
<!-- Script for dark and light mode toggle -->
<script>
    // Theme Style
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
        $("link[title]").attr("href", "{{asset('css/light_style.css')}}");
        $(".lx-theme-style a").text("Dark Mode");
    } else {
        $("link[title]").attr("href", "{{asset('css/dark_style.css')}}");
        $(".lx-theme-style a").text("Light Mode");
    }

    // Toggle the theme on click
    $(".lx-theme-style a").on("click", function() {
        if ($("link[title]").attr("href") !== "{{asset('css/light_style.css')}}") {
            $("link[title]").attr("href", "{{asset('css/light_style.css')}}");
            $(this).text("Dark Mode");
            localStorage.setItem('theme', 'light'); // Store the user's theme preference in localStorage
        } else {
            $("link[title]").attr("href", "{{asset('css/dark_style.css')}}");
            $(this).text("Light Mode");
            localStorage.setItem('theme', 'dark'); // Store the user's theme preference in localStorage
        }
    });

    // Listen for changes to the system theme preference
    if (window.matchMedia) {
        window.matchMedia('(prefers-color-scheme: dark)').addListener(function(e) {
            if (e.matches) {
                // Apply the dark theme
                $("link[title]").attr("href", "{{asset('css/dark_style.css')}}");
                $(".lx-theme-style a").text("Light Mode");
                localStorage.setItem('theme', 'dark'); // Store the user's theme preference in localStorage
            } else {
                // Apply the light theme
                $("link[title]").attr("href", "{{asset('css/light_style.css')}}");
                $(".lx-theme-style a").text("Dark Mode");
                localStorage.setItem('theme', 'light'); // Store the user's theme preference in localStorage
            }
        });
    }
</script>