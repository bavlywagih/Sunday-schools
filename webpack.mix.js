let laravelMix = require("laravel-mix");

laravelMix.minify('resources/css/app.css', 'public/css/app.css');
laravelMix.copyDirectory('vendor/tinymce/tinymce', 'public/js/tinymce');
laravelMix.js("./resources/js/app.js", "./public/js/app.js");
