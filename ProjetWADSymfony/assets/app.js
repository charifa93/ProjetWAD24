// import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';
alert();


// jquery
const $ = require ('jquery');
window.jQuery = $;
window.$ = $;

// importer bootstrap
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.css';

console.log('This log comes from assets/app.js - welcome to webpack! 🎉');
