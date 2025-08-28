import $ from 'jquery';
import './bootstrap';

window.$ = $;
window.jQuery = $;

/* import 'datatables.net-bs5';
import 'datatables.net-bs5/css/dataTables.bootstrap5.css';
import 'datatables.net-plugins/i18n/es-ES.mjs'; */
/*
  Add custom scripts here
*/

import.meta.glob([
  '../assets/img/**',
  // '../assets/json/**',
  '../assets/vendor/fonts/**'
]);
