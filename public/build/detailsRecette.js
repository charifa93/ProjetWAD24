"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["detailsRecette"],{

/***/ "./assets/detailsRecette.js":
/*!**********************************!*\
  !*** ./assets/detailsRecette.js ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_array_fill_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.array.fill.js */ "./node_modules/core-js/modules/es.array.fill.js");
/* harmony import */ var core_js_modules_es_array_fill_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_fill_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.join.js */ "./node_modules/core-js/modules/es.array.join.js");
/* harmony import */ var core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_string_trim_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.string.trim.js */ "./node_modules/core-js/modules/es.string.trim.js");
/* harmony import */ var core_js_modules_es_string_trim_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_trim_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var _styles_detailsRecette_css__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./styles/detailsRecette.css */ "./assets/styles/detailsRecette.css");










document.getElementById('servingsButton').addEventListener('click', function () {
  document.getElementById('servingsDropdown').classList.toggle('hidden');
});
document.addEventListener('click', function (event) {
  var servingsButton = document.getElementById('servingsButton');
  var servingsDropdown = document.getElementById('servingsDropdown');
  if (!servingsButton.contains(event.target) && !servingsDropdown.classList.contains('hidden')) {
    servingsDropdown.classList.add('hidden');
  }
});
document.querySelectorAll('.ingredient-checkbox').forEach(function (checkbox) {
  checkbox.addEventListener('change', function () {
    var checkIcon = this.nextElementSibling.querySelector('.ri-check-line');
    if (this.checked) {
      checkIcon.classList.remove('hidden');
      this.nextElementSibling.classList.add('bg-primary/10', 'border-primary');
    } else {
      checkIcon.classList.add('hidden');
      this.nextElementSibling.classList.remove('bg-primary/10', 'border-primary');
    }
  });
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
var ratingStars = document.querySelectorAll('[data-rating]');
var currentRating = 0;
ratingStars.forEach(function (star) {
  star.addEventListener('mouseover', function () {
    var rating = parseInt(this.dataset.rating);
    updateStars(rating, 'hover');
  });
  star.addEventListener('mouseout', function () {
    updateStars(currentRating, 'current');
  });
  star.addEventListener('click', function () {
    currentRating = parseInt(this.dataset.rating);
    updateStars(currentRating, 'current');
  });
});
function updateStars(rating, type) {
  ratingStars.forEach(function (star) {
    var starRating = parseInt(star.dataset.rating);
    if (type === 'hover') {
      if (starRating <= rating) {
        star.classList.remove('ri-star-line');
        star.classList.add('ri-star-fill');
      } else {
        star.classList.remove('ri-star-fill');
        star.classList.add('ri-star-line');
      }
    } else {
      if (starRating <= rating) {
        star.classList.remove('ri-star-line');
        star.classList.add('ri-star-fill');
      } else {
        star.classList.remove('ri-star-fill');
        star.classList.add('ri-star-line');
      }
    }
  });
}
document.getElementById('commentForm').addEventListener('submit', function (e) {
  e.preventDefault();
  if (currentRating === 0) {
    var ratingError = document.createElement('div');
    ratingError.className = 'text-red-500 text-sm mt-2';
    ratingError.textContent = 'Veuillez sélectionner une note';
    this.querySelector('.flex-1').appendChild(ratingError);
    setTimeout(function () {
      return ratingError.remove();
    }, 3000);
    return;
  }
  var comment = this.querySelector('textarea').value.trim();
  if (!comment) {
    var commentError = document.createElement('div');
    commentError.className = 'text-red-500 text-sm mt-2';
    commentError.textContent = 'Veuillez écrire un commentaire';
    this.querySelector('.flex-1').appendChild(commentError);
    setTimeout(function () {
      return commentError.remove();
    }, 3000);
    return;
  }
  var newComment = document.createElement('div');
  newComment.className = 'flex items-start gap-4';
  newComment.innerHTML = "\n        <img src=\"https://public.readdy.ai/ai/img_res/eb28e1ada4a5df4b32971245ea3c79cf.jpg\" alt=\"User\" class=\"w-10 h-10 rounded-full\">\n        <div class=\"flex-1\">\n          <div class=\"flex items-center mb-2\">\n            <h3 class=\"font-medium mr-2\">Vous</h3>\n            <div class=\"flex text-yellow-400\">\n              ".concat(Array(currentRating).fill('<i class="ri-star-fill"></i>').join(''), "\n              ").concat(Array(5 - currentRating).fill('<i class="ri-star-line"></i>').join(''), "\n            </div>\n          </div>\n          <p class=\"text-gray-600 mb-2\">").concat(comment, "</p>\n          <div class=\"flex items-center text-sm text-gray-500\">\n            <span>\xC0 l'instant</span>\n            <button class=\"ml-4 hover:text-primary\">R\xE9pondre</button>\n          </div>\n        </div>\n      ");
  var commentsContainer = document.querySelector('.space-y-6');
  commentsContainer.insertBefore(newComment, commentsContainer.firstChild);
  this.querySelector('textarea').value = '';
  currentRating = 0;
  updateStars(0, 'current');
  var successMessage = document.createElement('div');
  successMessage.className = 'text-green-500 text-sm mt-2';
  successMessage.textContent = 'Votre commentaire a été publié';
  this.querySelector('.flex-1').appendChild(successMessage);
  setTimeout(function () {
    return successMessage.remove();
  }, 3000);
});

/***/ }),

/***/ "./assets/styles/detailsRecette.css":
/*!******************************************!*\
  !*** ./assets/styles/detailsRecette.css ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_internals_array-species-create_js-node_modules_core-js_internals-fc1c90","vendors-node_modules_core-js_internals_add-to-unscopables_js-node_modules_core-js_internals_c-c6a7e6","vendors-node_modules_core-js_modules_es_array_concat_js-node_modules_core-js_modules_es_array-f168ce"], () => (__webpack_exec__("./assets/detailsRecette.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QUksQ0FBQ25CLGFBQWEsQ0FBQyxTQUFTLENBQUMsQ0FBQ29CLFdBQVcsQ0FBQ2UsY0FBYyxDQUFDO0VBQ3pEZCxVQUFVLENBQUM7SUFBQSxPQUFNYyxjQUFjLENBQUNqQyxNQUFNLENBQUMsQ0FBQztFQUFBLEdBQUUsSUFBSSxDQUFDO0FBQ2pELENBQUMsQ0FBQzs7Ozs7Ozs7Ozs7QUNoSU4iLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvZGV0YWlsc1JlY2V0dGUuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9kZXRhaWxzUmVjZXR0ZS5jc3MiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL3N0eWxlcy9kZXRhaWxzUmVjZXR0ZS5jc3MnO1xyXG5cclxuXHJcbmRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzZXJ2aW5nc0J1dHRvbicpLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oKSB7XHJcbiAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnc2VydmluZ3NEcm9wZG93bicpLmNsYXNzTGlzdC50b2dnbGUoJ2hpZGRlbicpO1xyXG4gICAgfSk7XHJcbiAgICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKGV2ZW50KSB7XHJcbiAgICBjb25zdCBzZXJ2aW5nc0J1dHRvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzZXJ2aW5nc0J1dHRvbicpO1xyXG4gICAgY29uc3Qgc2VydmluZ3NEcm9wZG93biA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzZXJ2aW5nc0Ryb3Bkb3duJyk7XHJcbiAgICBpZiAoIXNlcnZpbmdzQnV0dG9uLmNvbnRhaW5zKGV2ZW50LnRhcmdldCkgJiYgIXNlcnZpbmdzRHJvcGRvd24uY2xhc3NMaXN0LmNvbnRhaW5zKCdoaWRkZW4nKSkge1xyXG4gICAgc2VydmluZ3NEcm9wZG93bi5jbGFzc0xpc3QuYWRkKCdoaWRkZW4nKTtcclxuICAgIH1cclxuICAgIH0pO1xyXG4gICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmluZ3JlZGllbnQtY2hlY2tib3gnKS5mb3JFYWNoKGNoZWNrYm94ID0+IHtcclxuICAgIGNoZWNrYm94LmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsIGZ1bmN0aW9uKCkge1xyXG4gICAgY29uc3QgY2hlY2tJY29uID0gdGhpcy5uZXh0RWxlbWVudFNpYmxpbmcucXVlcnlTZWxlY3RvcignLnJpLWNoZWNrLWxpbmUnKTtcclxuICAgIGlmICh0aGlzLmNoZWNrZWQpIHtcclxuICAgIGNoZWNrSWNvbi5jbGFzc0xpc3QucmVtb3ZlKCdoaWRkZW4nKTtcclxuICAgIHRoaXMubmV4dEVsZW1lbnRTaWJsaW5nLmNsYXNzTGlzdC5hZGQoJ2JnLXByaW1hcnkvMTAnLCAnYm9yZGVyLXByaW1hcnknKTtcclxuICAgIH0gZWxzZSB7XHJcbiAgICBjaGVja0ljb24uY2xhc3NMaXN0LmFkZCgnaGlkZGVuJyk7XHJcbiAgICB0aGlzLm5leHRFbGVtZW50U2libGluZy5jbGFzc0xpc3QucmVtb3ZlKCdiZy1wcmltYXJ5LzEwJywgJ2JvcmRlci1wcmltYXJ5Jyk7XHJcbiAgICB9XHJcbiAgICB9KTtcclxuICAgIH0pO1xyXG4gICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3VzZXJNZW51JykuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpIHtcclxuICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd1c2VyRHJvcGRvd24nKS5jbGFzc0xpc3QudG9nZ2xlKCdoaWRkZW4nKTtcclxuICAgIH0pO1xyXG4gICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbihldmVudCkge1xyXG4gICAgY29uc3QgdXNlck1lbnUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndXNlck1lbnUnKTtcclxuICAgIGNvbnN0IHVzZXJEcm9wZG93biA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd1c2VyRHJvcGRvd24nKTtcclxuICAgIGlmICghdXNlck1lbnUuY29udGFpbnMoZXZlbnQudGFyZ2V0KSAmJiAhdXNlckRyb3Bkb3duLmNsYXNzTGlzdC5jb250YWlucygnaGlkZGVuJykpIHtcclxuICAgIHVzZXJEcm9wZG93bi5jbGFzc0xpc3QuYWRkKCdoaWRkZW4nKTtcclxuICAgIH1cclxuICAgIH0pO1xyXG4gICAgY29uc3QgcmF0aW5nU3RhcnMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS1yYXRpbmddJyk7XHJcbiAgICBsZXQgY3VycmVudFJhdGluZyA9IDA7XHJcbiAgICByYXRpbmdTdGFycy5mb3JFYWNoKHN0YXIgPT4ge1xyXG4gICAgICBzdGFyLmFkZEV2ZW50TGlzdGVuZXIoJ21vdXNlb3ZlcicsIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIGNvbnN0IHJhdGluZyA9IHBhcnNlSW50KHRoaXMuZGF0YXNldC5yYXRpbmcpO1xyXG4gICAgICAgIHVwZGF0ZVN0YXJzKHJhdGluZywgJ2hvdmVyJyk7XHJcbiAgICAgIH0pO1xyXG4gICAgICBcclxuICAgICAgc3Rhci5hZGRFdmVudExpc3RlbmVyKCdtb3VzZW91dCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIHVwZGF0ZVN0YXJzKGN1cnJlbnRSYXRpbmcsICdjdXJyZW50Jyk7XHJcbiAgICAgIH0pO1xyXG4gICAgICBcclxuICAgICAgc3Rhci5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIGN1cnJlbnRSYXRpbmcgPSBwYXJzZUludCh0aGlzLmRhdGFzZXQucmF0aW5nKTtcclxuICAgICAgICB1cGRhdGVTdGFycyhjdXJyZW50UmF0aW5nLCAnY3VycmVudCcpO1xyXG4gICAgICB9KTtcclxuICAgIH0pO1xyXG4gICAgZnVuY3Rpb24gdXBkYXRlU3RhcnMocmF0aW5nLCB0eXBlKSB7XHJcbiAgICAgIHJhdGluZ1N0YXJzLmZvckVhY2goc3RhciA9PiB7XHJcbiAgICAgICAgY29uc3Qgc3RhclJhdGluZyA9IHBhcnNlSW50KHN0YXIuZGF0YXNldC5yYXRpbmcpO1xyXG4gICAgICAgIGlmICh0eXBlID09PSAnaG92ZXInKSB7XHJcbiAgICAgICAgICBpZiAoc3RhclJhdGluZyA8PSByYXRpbmcpIHtcclxuICAgICAgICAgICAgc3Rhci5jbGFzc0xpc3QucmVtb3ZlKCdyaS1zdGFyLWxpbmUnKTtcclxuICAgICAgICAgICAgc3Rhci5jbGFzc0xpc3QuYWRkKCdyaS1zdGFyLWZpbGwnKTtcclxuICAgICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgIHN0YXIuY2xhc3NMaXN0LnJlbW92ZSgncmktc3Rhci1maWxsJyk7XHJcbiAgICAgICAgICAgIHN0YXIuY2xhc3NMaXN0LmFkZCgncmktc3Rhci1saW5lJyk7XHJcbiAgICAgICAgICB9XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgIGlmIChzdGFyUmF0aW5nIDw9IHJhdGluZykge1xyXG4gICAgICAgICAgICBzdGFyLmNsYXNzTGlzdC5yZW1vdmUoJ3JpLXN0YXItbGluZScpO1xyXG4gICAgICAgICAgICBzdGFyLmNsYXNzTGlzdC5hZGQoJ3JpLXN0YXItZmlsbCcpO1xyXG4gICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgc3Rhci5jbGFzc0xpc3QucmVtb3ZlKCdyaS1zdGFyLWZpbGwnKTtcclxuICAgICAgICAgICAgc3Rhci5jbGFzc0xpc3QuYWRkKCdyaS1zdGFyLWxpbmUnKTtcclxuICAgICAgICAgIH1cclxuICAgICAgICB9XHJcbiAgICAgIH0pO1xyXG4gICAgfVxyXG4gICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2NvbW1lbnRGb3JtJykuYWRkRXZlbnRMaXN0ZW5lcignc3VibWl0JywgZnVuY3Rpb24oZSkge1xyXG4gICAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgIFxyXG4gICAgICBpZiAoY3VycmVudFJhdGluZyA9PT0gMCkge1xyXG4gICAgICAgIGNvbnN0IHJhdGluZ0Vycm9yID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcbiAgICAgICAgcmF0aW5nRXJyb3IuY2xhc3NOYW1lID0gJ3RleHQtcmVkLTUwMCB0ZXh0LXNtIG10LTInO1xyXG4gICAgICAgIHJhdGluZ0Vycm9yLnRleHRDb250ZW50ID0gJ1ZldWlsbGV6IHPDqWxlY3Rpb25uZXIgdW5lIG5vdGUnO1xyXG4gICAgICAgIHRoaXMucXVlcnlTZWxlY3RvcignLmZsZXgtMScpLmFwcGVuZENoaWxkKHJhdGluZ0Vycm9yKTtcclxuICAgICAgICBzZXRUaW1lb3V0KCgpID0+IHJhdGluZ0Vycm9yLnJlbW92ZSgpLCAzMDAwKTtcclxuICAgICAgICByZXR1cm47XHJcbiAgICAgIH1cclxuICAgICAgXHJcbiAgICAgIGNvbnN0IGNvbW1lbnQgPSB0aGlzLnF1ZXJ5U2VsZWN0b3IoJ3RleHRhcmVhJykudmFsdWUudHJpbSgpO1xyXG4gICAgICBpZiAoIWNvbW1lbnQpIHtcclxuICAgICAgICBjb25zdCBjb21tZW50RXJyb3IgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtcclxuICAgICAgICBjb21tZW50RXJyb3IuY2xhc3NOYW1lID0gJ3RleHQtcmVkLTUwMCB0ZXh0LXNtIG10LTInO1xyXG4gICAgICAgIGNvbW1lbnRFcnJvci50ZXh0Q29udGVudCA9ICdWZXVpbGxleiDDqWNyaXJlIHVuIGNvbW1lbnRhaXJlJztcclxuICAgICAgICB0aGlzLnF1ZXJ5U2VsZWN0b3IoJy5mbGV4LTEnKS5hcHBlbmRDaGlsZChjb21tZW50RXJyb3IpO1xyXG4gICAgICAgIHNldFRpbWVvdXQoKCkgPT4gY29tbWVudEVycm9yLnJlbW92ZSgpLCAzMDAwKTtcclxuICAgICAgICByZXR1cm47XHJcbiAgICAgIH1cclxuICAgICAgXHJcbiAgICAgIGNvbnN0IG5ld0NvbW1lbnQgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtcclxuICAgICAgbmV3Q29tbWVudC5jbGFzc05hbWUgPSAnZmxleCBpdGVtcy1zdGFydCBnYXAtNCc7XHJcbiAgICAgIG5ld0NvbW1lbnQuaW5uZXJIVE1MID0gYFxyXG4gICAgICAgIDxpbWcgc3JjPVwiaHR0cHM6Ly9wdWJsaWMucmVhZGR5LmFpL2FpL2ltZ19yZXMvZWIyOGUxYWRhNGE1ZGY0YjMyOTcxMjQ1ZWEzYzc5Y2YuanBnXCIgYWx0PVwiVXNlclwiIGNsYXNzPVwidy0xMCBoLTEwIHJvdW5kZWQtZnVsbFwiPlxyXG4gICAgICAgIDxkaXYgY2xhc3M9XCJmbGV4LTFcIj5cclxuICAgICAgICAgIDxkaXYgY2xhc3M9XCJmbGV4IGl0ZW1zLWNlbnRlciBtYi0yXCI+XHJcbiAgICAgICAgICAgIDxoMyBjbGFzcz1cImZvbnQtbWVkaXVtIG1yLTJcIj5Wb3VzPC9oMz5cclxuICAgICAgICAgICAgPGRpdiBjbGFzcz1cImZsZXggdGV4dC15ZWxsb3ctNDAwXCI+XHJcbiAgICAgICAgICAgICAgJHtBcnJheShjdXJyZW50UmF0aW5nKS5maWxsKCc8aSBjbGFzcz1cInJpLXN0YXItZmlsbFwiPjwvaT4nKS5qb2luKCcnKX1cclxuICAgICAgICAgICAgICAke0FycmF5KDUtY3VycmVudFJhdGluZykuZmlsbCgnPGkgY2xhc3M9XCJyaS1zdGFyLWxpbmVcIj48L2k+Jykuam9pbignJyl9XHJcbiAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICA8cCBjbGFzcz1cInRleHQtZ3JheS02MDAgbWItMlwiPiR7Y29tbWVudH08L3A+XHJcbiAgICAgICAgICA8ZGl2IGNsYXNzPVwiZmxleCBpdGVtcy1jZW50ZXIgdGV4dC1zbSB0ZXh0LWdyYXktNTAwXCI+XHJcbiAgICAgICAgICAgIDxzcGFuPsOAIGwnaW5zdGFudDwvc3Bhbj5cclxuICAgICAgICAgICAgPGJ1dHRvbiBjbGFzcz1cIm1sLTQgaG92ZXI6dGV4dC1wcmltYXJ5XCI+UsOpcG9uZHJlPC9idXR0b24+XHJcbiAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICA8L2Rpdj5cclxuICAgICAgYDtcclxuICAgICAgXHJcbiAgICAgIGNvbnN0IGNvbW1lbnRzQ29udGFpbmVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnNwYWNlLXktNicpO1xyXG4gICAgICBjb21tZW50c0NvbnRhaW5lci5pbnNlcnRCZWZvcmUobmV3Q29tbWVudCwgY29tbWVudHNDb250YWluZXIuZmlyc3RDaGlsZCk7XHJcbiAgICAgIFxyXG4gICAgICB0aGlzLnF1ZXJ5U2VsZWN0b3IoJ3RleHRhcmVhJykudmFsdWUgPSAnJztcclxuICAgICAgY3VycmVudFJhdGluZyA9IDA7XHJcbiAgICAgIHVwZGF0ZVN0YXJzKDAsICdjdXJyZW50Jyk7XHJcbiAgICAgIFxyXG4gICAgICBjb25zdCBzdWNjZXNzTWVzc2FnZSA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2RpdicpO1xyXG4gICAgICBzdWNjZXNzTWVzc2FnZS5jbGFzc05hbWUgPSAndGV4dC1ncmVlbi01MDAgdGV4dC1zbSBtdC0yJztcclxuICAgICAgc3VjY2Vzc01lc3NhZ2UudGV4dENvbnRlbnQgPSAnVm90cmUgY29tbWVudGFpcmUgYSDDqXTDqSBwdWJsacOpJztcclxuICAgICAgdGhpcy5xdWVyeVNlbGVjdG9yKCcuZmxleC0xJykuYXBwZW5kQ2hpbGQoc3VjY2Vzc01lc3NhZ2UpO1xyXG4gICAgICBzZXRUaW1lb3V0KCgpID0+IHN1Y2Nlc3NNZXNzYWdlLnJlbW92ZSgpLCAzMDAwKTtcclxuICAgIH0pOyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiYWRkRXZlbnRMaXN0ZW5lciIsImNsYXNzTGlzdCIsInRvZ2dsZSIsImV2ZW50Iiwic2VydmluZ3NCdXR0b24iLCJzZXJ2aW5nc0Ryb3Bkb3duIiwiY29udGFpbnMiLCJ0YXJnZXQiLCJhZGQiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9yRWFjaCIsImNoZWNrYm94IiwiY2hlY2tJY29uIiwibmV4dEVsZW1lbnRTaWJsaW5nIiwicXVlcnlTZWxlY3RvciIsImNoZWNrZWQiLCJyZW1vdmUiLCJ1c2VyTWVudSIsInVzZXJEcm9wZG93biIsInJhdGluZ1N0YXJzIiwiY3VycmVudFJhdGluZyIsInN0YXIiLCJyYXRpbmciLCJwYXJzZUludCIsImRhdGFzZXQiLCJ1cGRhdGVTdGFycyIsInR5cGUiLCJzdGFyUmF0aW5nIiwiZSIsInByZXZlbnREZWZhdWx0IiwicmF0aW5nRXJyb3IiLCJjcmVhdGVFbGVtZW50IiwiY2xhc3NOYW1lIiwidGV4dENvbnRlbnQiLCJhcHBlbmRDaGlsZCIsInNldFRpbWVvdXQiLCJjb21tZW50IiwidmFsdWUiLCJ0cmltIiwiY29tbWVudEVycm9yIiwibmV3Q29tbWVudCIsImlubmVySFRNTCIsImNvbmNhdCIsIkFycmF5IiwiZmlsbCIsImpvaW4iLCJjb21tZW50c0NvbnRhaW5lciIsImluc2VydEJlZm9yZSIsImZpcnN0Q2hpbGQiLCJzdWNjZXNzTWVzc2FnZSJdLCJzb3VyY2VSb290IjoiIn0=