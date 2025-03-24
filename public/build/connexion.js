"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["connexion"],{

/***/ "./assets/connexion.js":
/*!*****************************!*\
  !*** ./assets/connexion.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_from_entries_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.from-entries.js */ "./node_modules/core-js/modules/es.object.from-entries.js");
/* harmony import */ var core_js_modules_es_object_from_entries_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_from_entries_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _styles_connexion_css__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./styles/connexion.css */ "./assets/styles/connexion.css");






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
function switchForm(type) {
  var forms = document.getElementById('forms');
  var loginTab = document.getElementById('loginTab');
  var registerTab = document.getElementById('registerTab');
  if (type === 'register') {
    forms.classList.add('register');
    registerTab.classList.add('bg-primary', 'text-white');
    registerTab.classList.remove('text-gray-600');
    loginTab.classList.remove('bg-primary', 'text-white');
    loginTab.classList.add('text-gray-600');
  } else {
    forms.classList.remove('register');
    loginTab.classList.add('bg-primary', 'text-white');
    loginTab.classList.remove('text-gray-600');
    registerTab.classList.remove('bg-primary', 'text-white');
    registerTab.classList.add('text-gray-600');
  }
}
function togglePassword(button) {
  var input = button.parentElement.querySelector('input');
  var icon = button.querySelector('i');
  if (input.type === 'password') {
    input.type = 'text';
    icon.classList.remove('ri-eye-line');
    icon.classList.add('ri-eye-off-line');
  } else {
    input.type = 'password';
    icon.classList.remove('ri-eye-off-line');
    icon.classList.add('ri-eye-line');
  }
}
document.getElementById('profilePicture').addEventListener('change', function (e) {
  var file = e.target.files[0];
  if (file) {
    var reader = new FileReader();
    reader.onload = function (e) {
      var container = document.querySelector('.border-dashed');
      container.innerHTML = "\n                <img src=\"".concat(e.target.result, "\" class=\"w-32 h-32 rounded-full mx-auto mb-2 object-cover\">\n                <p class=\"text-sm text-gray-600\">Cliquez pour changer la photo</p>\n            ");
    };
    reader.readAsDataURL(file);
  }
});
document.querySelectorAll('form').forEach(function (form) {
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(form);
    var data = Object.fromEntries(formData);
    console.log('Form submitted:', data);
  });
});

/***/ }),

/***/ "./assets/styles/connexion.css":
/*!*************************************!*\
  !*** ./assets/styles/connexion.css ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_internals_array-species-create_js-node_modules_core-js_internals-fc1c90","vendors-node_modules_core-js_internals_add-to-unscopables_js-node_modules_core-js_internals_c-c6a7e6","vendors-node_modules_core-js_modules_es_array_iterator_js-node_modules_core-js_modules_es_obj-4728b2"], () => (__webpack_exec__("./assets/connexion.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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SUFBTUMsSUFBSSxHQUFHRCxDQUFDLENBQUNFLE1BQU0sQ0FBQ0MsS0FBSyxDQUFDLENBQUMsQ0FBQztFQUM5QixJQUFJRixJQUFJLEVBQUU7SUFDTixJQUFNRyxNQUFNLEdBQUcsSUFBSUMsVUFBVSxDQUFDLENBQUM7SUFDL0JELE1BQU0sQ0FBQ0UsTUFBTSxHQUFHLFVBQVNOLENBQUMsRUFBRTtNQUN4QixJQUFNTyxTQUFTLEdBQUdyQixRQUFRLENBQUNXLGFBQWEsQ0FBQyxnQkFBZ0IsQ0FBQztNQUMxRFUsU0FBUyxDQUFDQyxTQUFTLG1DQUFBQyxNQUFBLENBQ0hULENBQUMsQ0FBQ0UsTUFBTSxDQUFDUSxNQUFNLHVLQUU5QjtJQUNMLENBQUM7SUFDRE4sTUFBTSxDQUFDTyxhQUFhLENBQUNWLElBQUksQ0FBQztFQUM5QjtBQUNKLENBQUMsQ0FBQztBQUVGZixRQUFRLENBQUMwQixnQkFBZ0IsQ0FBQyxNQUFNLENBQUMsQ0FBQ0MsT0FBTyxDQUFDLFVBQUFDLElBQUksRUFBSTtFQUM5Q0EsSUFBSSxDQUFDZixnQkFBZ0IsQ0FBQyxRQUFRLEVBQUUsVUFBU0MsQ0FBQyxFQUFFO0lBQ3hDQSxDQUFDLENBQUNlLGNBQWMsQ0FBQyxDQUFDO0lBQ2xCLElBQU1DLFFBQVEsR0FBRyxJQUFJQyxRQUFRLENBQUNILElBQUksQ0FBQztJQUNuQyxJQUFNSSxJQUFJLEdBQUdDLE1BQU0sQ0FBQ0MsV0FBVyxDQUFDSixRQUFRLENBQUM7SUFDekNLLE9BQU8sQ0FBQ0MsR0FBRyxDQUFDLGlCQUFpQixFQUFFSixJQUFJLENBQUM7RUFDeEMsQ0FBQyxDQUFDO0FBQ04sQ0FBQyxDQUFDOzs7Ozs7Ozs7OztBQ2pGRiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9jb25uZXhpb24uanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9jb25uZXhpb24uY3NzPzBhNzEiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL3N0eWxlcy9jb25uZXhpb24uY3NzJztcclxuXHJcbnRhaWx3aW5kLmNvbmZpZyA9IHtcclxuICAgIHRoZW1lOiB7XHJcbiAgICAgICAgZXh0ZW5kOiB7XHJcbiAgICAgICAgICAgIGNvbG9yczoge1xyXG4gICAgICAgICAgICAgICAgcHJpbWFyeTogJyNGRjZCNkInLFxyXG4gICAgICAgICAgICAgICAgc2Vjb25kYXJ5OiAnIzRFQ0RDNCdcclxuICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgYm9yZGVyUmFkaXVzOiB7XHJcbiAgICAgICAgICAgICAgICAnbm9uZSc6ICcwcHgnLFxyXG4gICAgICAgICAgICAgICAgJ3NtJzogJzRweCcsXHJcbiAgICAgICAgICAgICAgICBERUZBVUxUOiAnOHB4JyxcclxuICAgICAgICAgICAgICAgICdtZCc6ICcxMnB4JyxcclxuICAgICAgICAgICAgICAgICdsZyc6ICcxNnB4JyxcclxuICAgICAgICAgICAgICAgICd4bCc6ICcyMHB4JyxcclxuICAgICAgICAgICAgICAgICcyeGwnOiAnMjRweCcsXHJcbiAgICAgICAgICAgICAgICAnM3hsJzogJzMycHgnLFxyXG4gICAgICAgICAgICAgICAgJ2Z1bGwnOiAnOTk5OXB4JyxcclxuICAgICAgICAgICAgICAgICdidXR0b24nOiAnOHB4J1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG59XHJcblxyXG5mdW5jdGlvbiBzd2l0Y2hGb3JtKHR5cGUpIHtcclxuICAgIGNvbnN0IGZvcm1zID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Zvcm1zJyk7XHJcbiAgICBjb25zdCBsb2dpblRhYiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsb2dpblRhYicpO1xyXG4gICAgY29uc3QgcmVnaXN0ZXJUYWIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgncmVnaXN0ZXJUYWInKTtcclxuICAgIGlmICh0eXBlID09PSAncmVnaXN0ZXInKSB7XHJcbiAgICAgICAgZm9ybXMuY2xhc3NMaXN0LmFkZCgncmVnaXN0ZXInKTtcclxuICAgICAgICByZWdpc3RlclRhYi5jbGFzc0xpc3QuYWRkKCdiZy1wcmltYXJ5JywgJ3RleHQtd2hpdGUnKTtcclxuICAgICAgICByZWdpc3RlclRhYi5jbGFzc0xpc3QucmVtb3ZlKCd0ZXh0LWdyYXktNjAwJyk7XHJcbiAgICAgICAgbG9naW5UYWIuY2xhc3NMaXN0LnJlbW92ZSgnYmctcHJpbWFyeScsICd0ZXh0LXdoaXRlJyk7XHJcbiAgICAgICAgbG9naW5UYWIuY2xhc3NMaXN0LmFkZCgndGV4dC1ncmF5LTYwMCcpO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgICBmb3Jtcy5jbGFzc0xpc3QucmVtb3ZlKCdyZWdpc3RlcicpO1xyXG4gICAgICAgIGxvZ2luVGFiLmNsYXNzTGlzdC5hZGQoJ2JnLXByaW1hcnknLCAndGV4dC13aGl0ZScpO1xyXG4gICAgICAgIGxvZ2luVGFiLmNsYXNzTGlzdC5yZW1vdmUoJ3RleHQtZ3JheS02MDAnKTtcclxuICAgICAgICByZWdpc3RlclRhYi5jbGFzc0xpc3QucmVtb3ZlKCdiZy1wcmltYXJ5JywgJ3RleHQtd2hpdGUnKTtcclxuICAgICAgICByZWdpc3RlclRhYi5jbGFzc0xpc3QuYWRkKCd0ZXh0LWdyYXktNjAwJyk7XHJcbiAgICB9XHJcbn1cclxuXHJcbmZ1bmN0aW9uIHRvZ2dsZVBhc3N3b3JkKGJ1dHRvbikge1xyXG4gICAgY29uc3QgaW5wdXQgPSBidXR0b24ucGFyZW50RWxlbWVudC5xdWVyeVNlbGVjdG9yKCdpbnB1dCcpO1xyXG4gICAgY29uc3QgaWNvbiA9IGJ1dHRvbi5xdWVyeVNlbGVjdG9yKCdpJyk7XHJcbiAgICBcclxuICAgIGlmIChpbnB1dC50eXBlID09PSAncGFzc3dvcmQnKSB7XHJcbiAgICAgICAgaW5wdXQudHlwZSA9ICd0ZXh0JztcclxuICAgICAgICBpY29uLmNsYXNzTGlzdC5yZW1vdmUoJ3JpLWV5ZS1saW5lJyk7XHJcbiAgICAgICAgaWNvbi5jbGFzc0xpc3QuYWRkKCdyaS1leWUtb2ZmLWxpbmUnKTtcclxuICAgIH0gZWxzZSB7XHJcbiAgICAgICAgaW5wdXQudHlwZSA9ICdwYXNzd29yZCc7XHJcbiAgICAgICAgaWNvbi5jbGFzc0xpc3QucmVtb3ZlKCdyaS1leWUtb2ZmLWxpbmUnKTtcclxuICAgICAgICBpY29uLmNsYXNzTGlzdC5hZGQoJ3JpLWV5ZS1saW5lJyk7XHJcbiAgICB9XHJcbn1cclxuXHJcbmRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdwcm9maWxlUGljdHVyZScpLmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsIGZ1bmN0aW9uKGUpIHtcclxuICAgIGNvbnN0IGZpbGUgPSBlLnRhcmdldC5maWxlc1swXTtcclxuICAgIGlmIChmaWxlKSB7XHJcbiAgICAgICAgY29uc3QgcmVhZGVyID0gbmV3IEZpbGVSZWFkZXIoKTtcclxuICAgICAgICByZWFkZXIub25sb2FkID0gZnVuY3Rpb24oZSkge1xyXG4gICAgICAgICAgICBjb25zdCBjb250YWluZXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuYm9yZGVyLWRhc2hlZCcpO1xyXG4gICAgICAgICAgICBjb250YWluZXIuaW5uZXJIVE1MID0gYFxyXG4gICAgICAgICAgICAgICAgPGltZyBzcmM9XCIke2UudGFyZ2V0LnJlc3VsdH1cIiBjbGFzcz1cInctMzIgaC0zMiByb3VuZGVkLWZ1bGwgbXgtYXV0byBtYi0yIG9iamVjdC1jb3ZlclwiPlxyXG4gICAgICAgICAgICAgICAgPHAgY2xhc3M9XCJ0ZXh0LXNtIHRleHQtZ3JheS02MDBcIj5DbGlxdWV6IHBvdXIgY2hhbmdlciBsYSBwaG90bzwvcD5cclxuICAgICAgICAgICAgYDtcclxuICAgICAgICB9XHJcbiAgICAgICAgcmVhZGVyLnJlYWRBc0RhdGFVUkwoZmlsZSk7XHJcbiAgICB9XHJcbn0pO1xyXG5cclxuZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnZm9ybScpLmZvckVhY2goZm9ybSA9PiB7XHJcbiAgICBmb3JtLmFkZEV2ZW50TGlzdGVuZXIoJ3N1Ym1pdCcsIGZ1bmN0aW9uKGUpIHtcclxuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgICAgY29uc3QgZm9ybURhdGEgPSBuZXcgRm9ybURhdGEoZm9ybSk7XHJcbiAgICAgICAgY29uc3QgZGF0YSA9IE9iamVjdC5mcm9tRW50cmllcyhmb3JtRGF0YSk7XHJcbiAgICAgICAgY29uc29sZS5sb2coJ0Zvcm0gc3VibWl0dGVkOicsIGRhdGEpO1xyXG4gICAgfSk7XHJcbn0pOyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJ0YWlsd2luZCIsImNvbmZpZyIsInRoZW1lIiwiZXh0ZW5kIiwiY29sb3JzIiwicHJpbWFyeSIsInNlY29uZGFyeSIsImJvcmRlclJhZGl1cyIsIkRFRkFVTFQiLCJzd2l0Y2hGb3JtIiwidHlwZSIsImZvcm1zIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImxvZ2luVGFiIiwicmVnaXN0ZXJUYWIiLCJjbGFzc0xpc3QiLCJhZGQiLCJyZW1vdmUiLCJ0b2dnbGVQYXNzd29yZCIsImJ1dHRvbiIsImlucHV0IiwicGFyZW50RWxlbWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJpY29uIiwiYWRkRXZlbnRMaXN0ZW5lciIsImUiLCJmaWxlIiwidGFyZ2V0IiwiZmlsZXMiLCJyZWFkZXIiLCJGaWxlUmVhZGVyIiwib25sb2FkIiwiY29udGFpbmVyIiwiaW5uZXJIVE1MIiwiY29uY2F0IiwicmVzdWx0IiwicmVhZEFzRGF0YVVSTCIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJmb3JFYWNoIiwiZm9ybSIsInByZXZlbnREZWZhdWx0IiwiZm9ybURhdGEiLCJGb3JtRGF0YSIsImRhdGEiLCJPYmplY3QiLCJmcm9tRW50cmllcyIsImNvbnNvbGUiLCJsb2ciXSwic291cmNlUm9vdCI6IiJ9