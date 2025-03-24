"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");



// import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */


// jquery
var $ = __webpack_require__(/*! jquery */ "../node_modules/jquery/dist/jquery.js");
window.jQuery = $;
window.$ = $;

// // importer bootstrap
// import 'bootstrap';
// import 'bootstrap/dist/css/bootstrap.css';

tailwind.config = {
  theme: {
    extend: {
      colors: {
        primary: '#FF6B6B',
        secondary: '#4ECDC4'
      },
      borderRadius: {
        'none': '0px',
        'sm': '4px',
        DEFAULT: '8px',
        'md': '12px',
        'lg': '16px',
        'xl': '20px',
        '2xl': '24px',
        '3xl': '32px',
        'full': '9999px',
        'button': '8px'
      }
    }
  }
};
document.getElementById('searchToggle').addEventListener('click', function () {
  document.getElementById('searchBar').classList.toggle('hidden');
});
document.getElementById('userMenu').addEventListener('click', function () {
  document.getElementById('userDropdown').classList.toggle('hidden');
});
document.addEventListener('click', function (event) {
  var userMenu = document.getElementById('userMenu');
  var userDropdown = document.getElementById('userDropdown');
  if (!userMenu.contains(event.target) && !userDropdown.classList.contains('hidden')) {
    userDropdown.classList.add('hidden');
  }
});
var favoriteButtons = document.querySelectorAll('.ri-heart-line');
favoriteButtons.forEach(function (button) {
  button.addEventListener('click', function () {
    this.classList.toggle('ri-heart-line');
    this.classList.toggle('ri-heart-fill');
    this.classList.toggle('text-primary');
  });
});

/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_internals_array-species-create_js-node_modules_core-js_internals-fc1c90","vendors-node_modules_jquery_dist_jquery_js-node_modules_core-js_modules_es_array_for-each_js--241070"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDMEI7O0FBRzFCO0FBQ0EsSUFBTUEsQ0FBQyxHQUFHQyxtQkFBTyxDQUFFLHFEQUFRLENBQUM7QUFDNUJDLE1BQU0sQ0FBQ0MsTUFBTSxHQUFHSCxDQUFDO0FBQ2pCRSxNQUFNLENBQUNGLENBQUMsR0FBR0EsQ0FBQzs7QUFFWjtBQUNBO0FBQ0E7O0FBR0lJLFFBQVEsQ0FBQ0MsTUFBTSxHQUFHO0VBQ2RDLEtBQUssRUFBRTtJQUNIQyxNQUFNLEVBQUU7TUFDSkMsTUFBTSxFQUFFO1FBQ0pDLE9BQU8sRUFBRSxTQUFTO1FBQ2xCQyxTQUFTLEVBQUU7TUFDZixDQUFDO01BQ0RDLFlBQVksRUFBRTtRQUNWLE1BQU0sRUFBRSxLQUFLO1FBQ2IsSUFBSSxFQUFFLEtBQUs7UUFDWEMsT0FBTyxFQUFFLEtBQUs7UUFDZCxJQUFJLEVBQUUsTUFBTTtRQUNaLElBQUksRUFBRSxNQUFNO1FBQ1osSUFBSSxFQUFFLE1BQU07UUFDWixLQUFLLEVBQUUsTUFBTTtRQUNiLEtBQUssRUFBRSxNQUFNO1FBQ2IsTUFBTSxFQUFFLFFBQVE7UUFDaEIsUUFBUSxFQUFFO01BQ2Q7SUFDSjtFQUNKO0FBQ0osQ0FBQztBQUNKQyxRQUFRLENBQUNDLGNBQWMsQ0FBQyxjQUFjLENBQUMsQ0FBQ0MsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFlBQVc7RUFDN0VGLFFBQVEsQ0FBQ0MsY0FBYyxDQUFDLFdBQVcsQ0FBQyxDQUFDRSxTQUFTLENBQUNDLE1BQU0sQ0FBQyxRQUFRLENBQUM7QUFDL0QsQ0FBQyxDQUFDO0FBQ0NKLFFBQVEsQ0FBQ0MsY0FBYyxDQUFDLFVBQVUsQ0FBQyxDQUFDQyxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsWUFBVztFQUNyRUYsUUFBUSxDQUFDQyxjQUFjLENBQUMsY0FBYyxDQUFDLENBQUNFLFNBQVMsQ0FBQ0MsTUFBTSxDQUFDLFFBQVEsQ0FBQztBQUNsRSxDQUFDLENBQUM7QUFFRkosUUFBUSxDQUFDRSxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsVUFBU0csS0FBSyxFQUFFO0VBQ25ELElBQU1DLFFBQVEsR0FBR04sUUFBUSxDQUFDQyxjQUFjLENBQUMsVUFBVSxDQUFDO0VBQ3BELElBQU1NLFlBQVksR0FBR1AsUUFBUSxDQUFDQyxjQUFjLENBQUMsY0FBYyxDQUFDO0VBQzVELElBQUksQ0FBQ0ssUUFBUSxDQUFDRSxRQUFRLENBQUNILEtBQUssQ0FBQ0ksTUFBTSxDQUFDLElBQUksQ0FBQ0YsWUFBWSxDQUFDSixTQUFTLENBQUNLLFFBQVEsQ0FBQyxRQUFRLENBQUMsRUFBRTtJQUNwRkQsWUFBWSxDQUFDSixTQUFTLENBQUNPLEdBQUcsQ0FBQyxRQUFRLENBQUM7RUFDcEM7QUFDQSxDQUFDLENBQUM7QUFDRixJQUFNQyxlQUFlLEdBQUdYLFFBQVEsQ0FBQ1ksZ0JBQWdCLENBQUMsZ0JBQWdCLENBQUM7QUFDbkVELGVBQWUsQ0FBQ0UsT0FBTyxDQUFDLFVBQUFDLE1BQU0sRUFBSTtFQUNsQ0EsTUFBTSxDQUFDWixnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsWUFBVztJQUM1QyxJQUFJLENBQUNDLFNBQVMsQ0FBQ0MsTUFBTSxDQUFDLGVBQWUsQ0FBQztJQUN0QyxJQUFJLENBQUNELFNBQVMsQ0FBQ0MsTUFBTSxDQUFDLGVBQWUsQ0FBQztJQUN0QyxJQUFJLENBQUNELFNBQVMsQ0FBQ0MsTUFBTSxDQUFDLGNBQWMsQ0FBQztFQUNyQyxDQUFDLENBQUM7QUFDRixDQUFDLENBQUM7Ozs7Ozs7Ozs7O0FDL0RWIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL2FwcC5jc3M/M2ZiYSJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBpbXBvcnQgJy4vYm9vdHN0cmFwLmpzJztcclxuLypcclxuICogV2VsY29tZSB0byB5b3VyIGFwcCdzIG1haW4gSmF2YVNjcmlwdCBmaWxlIVxyXG4gKlxyXG4gKiBUaGlzIGZpbGUgd2lsbCBiZSBpbmNsdWRlZCBvbnRvIHRoZSBwYWdlIHZpYSB0aGUgaW1wb3J0bWFwKCkgVHdpZyBmdW5jdGlvbixcclxuICogd2hpY2ggc2hvdWxkIGFscmVhZHkgYmUgaW4geW91ciBiYXNlLmh0bWwudHdpZy5cclxuICovXHJcbmltcG9ydCAnLi9zdHlsZXMvYXBwLmNzcyc7XHJcblxyXG5cclxuLy8ganF1ZXJ5XHJcbmNvbnN0ICQgPSByZXF1aXJlICgnanF1ZXJ5Jyk7XHJcbndpbmRvdy5qUXVlcnkgPSAkO1xyXG53aW5kb3cuJCA9ICQ7XHJcblxyXG4vLyAvLyBpbXBvcnRlciBib290c3RyYXBcclxuLy8gaW1wb3J0ICdib290c3RyYXAnO1xyXG4vLyBpbXBvcnQgJ2Jvb3RzdHJhcC9kaXN0L2Nzcy9ib290c3RyYXAuY3NzJztcclxuXHJcblxyXG4gICAgdGFpbHdpbmQuY29uZmlnID0ge1xyXG4gICAgICAgIHRoZW1lOiB7XHJcbiAgICAgICAgICAgIGV4dGVuZDoge1xyXG4gICAgICAgICAgICAgICAgY29sb3JzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgcHJpbWFyeTogJyNGRjZCNkInLFxyXG4gICAgICAgICAgICAgICAgICAgIHNlY29uZGFyeTogJyM0RUNEQzQnXHJcbiAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAgYm9yZGVyUmFkaXVzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgJ25vbmUnOiAnMHB4JyxcclxuICAgICAgICAgICAgICAgICAgICAnc20nOiAnNHB4JyxcclxuICAgICAgICAgICAgICAgICAgICBERUZBVUxUOiAnOHB4JyxcclxuICAgICAgICAgICAgICAgICAgICAnbWQnOiAnMTJweCcsXHJcbiAgICAgICAgICAgICAgICAgICAgJ2xnJzogJzE2cHgnLFxyXG4gICAgICAgICAgICAgICAgICAgICd4bCc6ICcyMHB4JyxcclxuICAgICAgICAgICAgICAgICAgICAnMnhsJzogJzI0cHgnLFxyXG4gICAgICAgICAgICAgICAgICAgICczeGwnOiAnMzJweCcsXHJcbiAgICAgICAgICAgICAgICAgICAgJ2Z1bGwnOiAnOTk5OXB4JyxcclxuICAgICAgICAgICAgICAgICAgICAnYnV0dG9uJzogJzhweCdcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgIH07XHJcblx0ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3NlYXJjaFRvZ2dsZScpLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oKSB7XHJcblx0ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3NlYXJjaEJhcicpLmNsYXNzTGlzdC50b2dnbGUoJ2hpZGRlbicpO1xyXG5cdH0pO1xyXG4gICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3VzZXJNZW51JykuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpIHtcclxuICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndXNlckRyb3Bkb3duJykuY2xhc3NMaXN0LnRvZ2dsZSgnaGlkZGVuJyk7XHJcbiAgICAgICAgfSk7XHJcbiAgICAgICAgXHJcbiAgICAgICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbihldmVudCkge1xyXG4gICAgICAgIGNvbnN0IHVzZXJNZW51ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3VzZXJNZW51Jyk7XHJcbiAgICAgICAgY29uc3QgdXNlckRyb3Bkb3duID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3VzZXJEcm9wZG93bicpO1xyXG4gICAgICAgIGlmICghdXNlck1lbnUuY29udGFpbnMoZXZlbnQudGFyZ2V0KSAmJiAhdXNlckRyb3Bkb3duLmNsYXNzTGlzdC5jb250YWlucygnaGlkZGVuJykpIHtcclxuICAgICAgICB1c2VyRHJvcGRvd24uY2xhc3NMaXN0LmFkZCgnaGlkZGVuJyk7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIH0pO1xyXG4gICAgICAgIGNvbnN0IGZhdm9yaXRlQnV0dG9ucyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5yaS1oZWFydC1saW5lJyk7XHJcbiAgICAgICAgZmF2b3JpdGVCdXR0b25zLmZvckVhY2goYnV0dG9uID0+IHtcclxuICAgICAgICBidXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpIHtcclxuICAgICAgICB0aGlzLmNsYXNzTGlzdC50b2dnbGUoJ3JpLWhlYXJ0LWxpbmUnKTtcclxuICAgICAgICB0aGlzLmNsYXNzTGlzdC50b2dnbGUoJ3JpLWhlYXJ0LWZpbGwnKTtcclxuICAgICAgICB0aGlzLmNsYXNzTGlzdC50b2dnbGUoJ3RleHQtcHJpbWFyeScpO1xyXG4gICAgICAgIH0pO1xyXG4gICAgICAgIH0pO1xyXG5cclxuIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbIiQiLCJyZXF1aXJlIiwid2luZG93IiwialF1ZXJ5IiwidGFpbHdpbmQiLCJjb25maWciLCJ0aGVtZSIsImV4dGVuZCIsImNvbG9ycyIsInByaW1hcnkiLCJzZWNvbmRhcnkiLCJib3JkZXJSYWRpdXMiLCJERUZBVUxUIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImFkZEV2ZW50TGlzdGVuZXIiLCJjbGFzc0xpc3QiLCJ0b2dnbGUiLCJldmVudCIsInVzZXJNZW51IiwidXNlckRyb3Bkb3duIiwiY29udGFpbnMiLCJ0YXJnZXQiLCJhZGQiLCJmYXZvcml0ZUJ1dHRvbnMiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9yRWFjaCIsImJ1dHRvbiJdLCJzb3VyY2VSb290IjoiIn0=