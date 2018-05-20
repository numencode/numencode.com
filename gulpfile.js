var elixir = require('laravel-elixir');

elixir(function(mix) {

    mix.sass('numencode.scss', 'public/assets/css');

    mix.webpack(['numencode.js'],
        'public/assets/js/numencode.js',
        'resources/assets/js/'
    );

    mix.version(['assets/css/numencode.css', 'assets/js/numencode.js']);
});
