import './bootstrap';

$ = window.$ = window.jQuery = require( "jquery" );

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


jQuery(document).ready(function($)){
   setTimeout(function () {
    $('#status-message').slideUp('slow')
    }, 2000);
}
