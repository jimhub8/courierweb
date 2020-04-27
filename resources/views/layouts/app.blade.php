<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/storage/logo/boxleo_logo.png" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Boxleo') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{--  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">  --}}
    {{--  <link rel="stylesheet" href="https://fonts.google.com/specimen/Montserrat?selection.family=Montserrat">  --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/dgady.css') }}" rel="stylesheet">
    {{--  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"> --}}
    {{-- <script src="{{ asset('js/tinymce.js') }}" defer></script> --}}
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    @yield('style')
</head>

<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script>
        new WOW().init();
    </script>

    {{--  <script type="text/javascript">
        (function () {
                var options = {
                facebook: "2023562267763809", // Facebook page ID
                whatsapp: "+254743332743", // WhatsApp number
                call_to_action: "Message us", // Call to action
                button_color: "#000000", // Color of button
                position: "right", // Position may be 'right' or 'left'
                order: "facebook,whatsapp", // Order of buttons
                };
                var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
                var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
                })();
    </script>  --}}
    {{-- <script src="{{ asset('js/wow.js') }}" defer></script> --}}


    <script type="text/javascript">
        window.$crisp=[];window.CRISP_WEBSITE_ID="f666e3e6-f0b6-44c4-8bf0-2b9a5d9c6911";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();
    </script>


    <script>
        var editor_config = {
          path_absolute : "/",
          selector: "textarea.my-editor",
          plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
          relative_urls: false,
          file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
              cmsURL = cmsURL + "&type=Images";
            } else {
              cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
              file : cmsURL,
              title : 'Filemanager',
              width : x * 0.8,
              height : y * 0.8,
              resizable : "yes",
              close_previous : "no"
            });
          }
        };

        tinymce.init(editor_config);
    </script>
    <script src="{{ asset('theme/js/jquery.js') }}" defer></script>
    <script src="{{ asset('theme/js/dgady.js') }}" defer></script>
    {{-- <script src="{{ asset('js/tinymce.js') }}" defer></script> --}}
    {{-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> --}}

</body>

</html>
