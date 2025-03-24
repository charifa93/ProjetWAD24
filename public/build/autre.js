"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["autre"],{

/***/ "./assets/autre.js":
/*!*************************!*\
  !*** ./assets/autre.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _styles_autre_css__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./styles/autre.css */ "./assets/styles/autre.css");






document.addEventListener('DOMContentLoaded', function () {
  var divResultats = document.getElementById("divResultats");
  var form = document.getElementById('form_recherche');
  var recipesPerPage = 10; // Number of recipes to display per page
  var currentPage = 1;
  var recettes = [];
  form.addEventListener('input', function () {
    console.log(event.target.value);
    divResultats.innerHTML = '<p>Chargement des recettes...</p>';
    var url = '/gestion/recettes/recherche/ajax';
    var formData = new FormData(form);
    axios.post(url, formData).then(function (response) {
      recettes = response.data; // Save the fetched recipes
      currentPage = 1; // Reset to first page
      displayRecipes();
    })["catch"](function (error) {
      console.error('Erreur lors de la requête:', error);
      divResultats.innerHTML = '<p>Une erreur est survenue lors du chargement des recettes.</p>';
    });
  });
  function displayRecipes() {
    divResultats.innerHTML = ''; // Clear previous results

    // Calculate the number of pages
    var totalPages = Math.ceil(recettes.length / recipesPerPage);
    var startIndex = (currentPage - 1) * recipesPerPage;
    var endIndex = startIndex + recipesPerPage;

    // Create a row to hold the recipe cards
    var row = document.createElement('div');
    row.classList.add('row', 'row-cols-1', 'row-cols-md-3', 'g-4');

    // Display recipes for the current page
    recettes.slice(startIndex, endIndex).forEach(function (recette) {
      var col = document.createElement('div');
      col.classList.add('col');
      var card = "\n                <div class=\"recipe-card\">\n                    <div class=\"recipe-image\">\n                        <img src=\"".concat(recette.image, "\" alt=\"").concat(recette.titre, "\">\n                    </div>\n                    <div class=\"recipe-info\">\n                        <div class=\"recipe-title\">").concat(recette.titre, "</div>\n                        <div class=\"user-icon\">\n                            <img src=\"").concat(recette.utilisateur.photo, "\" alt=\"").concat(recette.utilisateur.nom, "\">\n                        </div>\n                        <div class=\"recipe-icons\">\n                            <div>\n                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-clock\" viewBox=\"0 0 16 16\">\n                                    <path d=\"M8 3.5a.5.5 0 0 1 .5.5v4h3a.5.5 0 0 1 0 1H8a.5.5 0 0 1-.5-.5V4a.5.5 0 0 1 .5-.5z\" />\n                                    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm0-1A7 7 0 1 1 8 1a7 7 0 0 1 0 14z\" />\n                                </svg>\n                                <div class=\"icon-text\">").concat(recette.tempsDePreparation, "</div>\n                            </div>\n                            <div>\n                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-clock-history\" viewBox=\"0 0 16 16\">\n                                    <path d=\"M8.515 3.5a.5.5 0 0 1 .5.5v3.794l2.847 1.447a.5.5 0 0 1-.514.858l-3.1-1.576a.5.5 0 0 1-.238-.433V4a.5.5 0 0 1 .5-.5z\" />\n                                    <path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm0-1A7 7 0 1 1 8 1a7 7 0 0 1 0 14z\" />\n                                </svg>\n                                <div class=\"icon-text\">").concat(recette.tempsDeCuison, "</div>\n                            </div>\n                            <div>\n                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-people-fill\" viewBox=\"0 0 16 16\">\n                                    <path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.216.85A2.785 2.785 0 0 1 3.5 8h9a2.785 2.785 0 0 1 .716.85A2.478 2.478 0 0 1 14 10.5v.577c0 .19-.112.36-.281.445L8.833 14H7.167l-4.886-2.478A.502.502 0 0 1 2 11.078V10.5c0-.89.37-1.682.784-2.15z\" />\n                                </svg>\n                                <div class=\"icon-text\">").concat(recette.nombrePortions, "</div>\n                            </div>\n                        </div>\n                        <div class=\"stars\">\n                            ").concat(recette.difficulte == 1 ? '&#9733;&#9734;&#9734;&#9734;&#9734;' : recette.difficulte == 2 ? '&#9733;&#9733;&#9734;&#9734;&#9734;' : recette.difficulte == 3 ? '&#9733;&#9733;&#9733;&#9734;&#9734;' : recette.difficulte == 4 ? '&#9733;&#9733;&#9733;&#9733;&#9734;' : recette.difficulte == 5 ? '&#9733;&#9733;&#9733;&#9733;&#9733;' : '&#9734;&#9734;&#9734;&#9734;&#9734;', "\n                            (").concat(recette.difficulte, " notes)\n                        </div>\n                    </div>\n                </div>");
      col.innerHTML = card;
      row.appendChild(col);
    });
    divResultats.appendChild(row);
    addPagination(totalPages);
  }
  function addPagination(totalPages) {
    var pagination = document.createElement('nav');
    pagination.classList.add('pagination');
    var _loop = function _loop(i) {
      var pageItem = document.createElement('a');
      pageItem.classList.add('page-link');
      pageItem.textContent = i;
      pageItem.href = '#';

      // Click event to change page
      pageItem.addEventListener('click', function (event) {
        event.preventDefault();
        currentPage = i;
        displayRecipes();
      });
      pagination.appendChild(pageItem);
    };
    for (var i = 1; i <= totalPages; i++) {
      _loop(i);
    }
    divResultats.appendChild(pagination);
  }
});

/***/ }),

/***/ "./assets/styles/autre.css":
/*!*********************************!*\
  !*** ./assets/styles/autre.css ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_internals_array-species-create_js-node_modules_core-js_internals-fc1c90","vendors-node_modules_core-js_modules_es_array_concat_js-node_modules_core-js_modules_es_array-0d715a"], () => (__webpack_exec__("./assets/autre.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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LENBQUM7UUFDdEJuRCxXQUFXLEdBQUcrQyxDQUFDO1FBQ2YvQixjQUFjLENBQUMsQ0FBQztNQUNwQixDQUFDLENBQUM7TUFFRjZCLFVBQVUsQ0FBQ0YsV0FBVyxDQUFDSyxRQUFRLENBQUM7SUFDcEMsQ0FBQztJQWRELEtBQUssSUFBSUQsQ0FBQyxHQUFHLENBQUMsRUFBRUEsQ0FBQyxJQUFJN0IsVUFBVSxFQUFFNkIsQ0FBQyxFQUFFO01BQUFELEtBQUEsQ0FBQUMsQ0FBQTtJQUFBO0lBZ0JwQ25ELFlBQVksQ0FBQytDLFdBQVcsQ0FBQ0UsVUFBVSxDQUFDO0VBQ3hDO0FBQ0osQ0FBQyxDQUFDOzs7Ozs7Ozs7OztBQ3hIRiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9hdXRyZS5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL2F1dHJlLmNzcyJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgJy4vc3R5bGVzL2F1dHJlLmNzcyc7XHJcblxyXG5cclxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsIGZ1bmN0aW9uICgpIHtcclxuICAgIGNvbnN0IGRpdlJlc3VsdGF0cyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiZGl2UmVzdWx0YXRzXCIpO1xyXG4gICAgY29uc3QgZm9ybSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdmb3JtX3JlY2hlcmNoZScpO1xyXG4gICAgY29uc3QgcmVjaXBlc1BlclBhZ2UgPSAxMDsgLy8gTnVtYmVyIG9mIHJlY2lwZXMgdG8gZGlzcGxheSBwZXIgcGFnZVxyXG4gICAgbGV0IGN1cnJlbnRQYWdlID0gMTtcclxuICAgIGxldCByZWNldHRlcyA9IFtdO1xyXG5cclxuICAgIGZvcm0uYWRkRXZlbnRMaXN0ZW5lcignaW5wdXQnLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgY29uc29sZS5sb2coZXZlbnQudGFyZ2V0LnZhbHVlKTtcclxuICAgICAgICBkaXZSZXN1bHRhdHMuaW5uZXJIVE1MID0gJzxwPkNoYXJnZW1lbnQgZGVzIHJlY2V0dGVzLi4uPC9wPic7XHJcblxyXG4gICAgICAgIGxldCB1cmwgPSAnL2dlc3Rpb24vcmVjZXR0ZXMvcmVjaGVyY2hlL2FqYXgnO1xyXG4gICAgICAgIGxldCBmb3JtRGF0YSA9IG5ldyBGb3JtRGF0YShmb3JtKTtcclxuXHJcbiAgICAgICAgYXhpb3MucG9zdCh1cmwsIGZvcm1EYXRhKVxyXG4gICAgICAgICAgICAudGhlbihyZXNwb25zZSA9PiB7XHJcbiAgICAgICAgICAgICAgICByZWNldHRlcyA9IHJlc3BvbnNlLmRhdGE7ICAvLyBTYXZlIHRoZSBmZXRjaGVkIHJlY2lwZXNcclxuICAgICAgICAgICAgICAgIGN1cnJlbnRQYWdlID0gMTsgLy8gUmVzZXQgdG8gZmlyc3QgcGFnZVxyXG4gICAgICAgICAgICAgICAgZGlzcGxheVJlY2lwZXMoKTtcclxuICAgICAgICAgICAgfSlcclxuICAgICAgICAgICAgLmNhdGNoKGVycm9yID0+IHtcclxuICAgICAgICAgICAgICAgIGNvbnNvbGUuZXJyb3IoJ0VycmV1ciBsb3JzIGRlIGxhIHJlcXXDqnRlOicsIGVycm9yKTtcclxuICAgICAgICAgICAgICAgIGRpdlJlc3VsdGF0cy5pbm5lckhUTUwgPSAnPHA+VW5lIGVycmV1ciBlc3Qgc3VydmVudWUgbG9ycyBkdSBjaGFyZ2VtZW50IGRlcyByZWNldHRlcy48L3A+JztcclxuICAgICAgICAgICAgfSk7XHJcbiAgICB9KTtcclxuXHJcbiAgICBmdW5jdGlvbiBkaXNwbGF5UmVjaXBlcygpIHtcclxuICAgICAgICBkaXZSZXN1bHRhdHMuaW5uZXJIVE1MID0gJyc7IC8vIENsZWFyIHByZXZpb3VzIHJlc3VsdHNcclxuXHJcbiAgICAgICAgLy8gQ2FsY3VsYXRlIHRoZSBudW1iZXIgb2YgcGFnZXNcclxuICAgICAgICBjb25zdCB0b3RhbFBhZ2VzID0gTWF0aC5jZWlsKHJlY2V0dGVzLmxlbmd0aCAvIHJlY2lwZXNQZXJQYWdlKTtcclxuICAgICAgICBjb25zdCBzdGFydEluZGV4ID0gKGN1cnJlbnRQYWdlIC0gMSkgKiByZWNpcGVzUGVyUGFnZTtcclxuICAgICAgICBjb25zdCBlbmRJbmRleCA9IHN0YXJ0SW5kZXggKyByZWNpcGVzUGVyUGFnZTtcclxuXHJcbiAgICAgICAgLy8gQ3JlYXRlIGEgcm93IHRvIGhvbGQgdGhlIHJlY2lwZSBjYXJkc1xyXG4gICAgICAgIGNvbnN0IHJvdyA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2RpdicpO1xyXG4gICAgICAgIHJvdy5jbGFzc0xpc3QuYWRkKCdyb3cnLCAncm93LWNvbHMtMScsICdyb3ctY29scy1tZC0zJywgJ2ctNCcpO1xyXG5cclxuICAgICAgICAvLyBEaXNwbGF5IHJlY2lwZXMgZm9yIHRoZSBjdXJyZW50IHBhZ2VcclxuICAgICAgICByZWNldHRlcy5zbGljZShzdGFydEluZGV4LCBlbmRJbmRleCkuZm9yRWFjaChyZWNldHRlID0+IHtcclxuICAgICAgICAgICAgY29uc3QgY29sID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcbiAgICAgICAgICAgIGNvbC5jbGFzc0xpc3QuYWRkKCdjb2wnKTtcclxuXHJcbiAgICAgICAgICAgIGNvbnN0IGNhcmQgPSBgXHJcbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwicmVjaXBlLWNhcmRcIj5cclxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwicmVjaXBlLWltYWdlXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIDxpbWcgc3JjPVwiJHtyZWNldHRlLmltYWdlfVwiIGFsdD1cIiR7cmVjZXR0ZS50aXRyZX1cIj5cclxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwicmVjaXBlLWluZm9cIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cInJlY2lwZS10aXRsZVwiPiR7cmVjZXR0ZS50aXRyZX08L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cInVzZXItaWNvblwiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGltZyBzcmM9XCIke3JlY2V0dGUudXRpbGlzYXRldXIucGhvdG99XCIgYWx0PVwiJHtyZWNldHRlLnV0aWxpc2F0ZXVyLm5vbX1cIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJyZWNpcGUtaWNvbnNcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHN2ZyB4bWxucz1cImh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnXCIgd2lkdGg9XCIxNlwiIGhlaWdodD1cIjE2XCIgZmlsbD1cImN1cnJlbnRDb2xvclwiIGNsYXNzPVwiYmkgYmktY2xvY2tcIiB2aWV3Qm94PVwiMCAwIDE2IDE2XCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9XCJNOCAzLjVhLjUuNSAwIDAgMSAuNS41djRoM2EuNS41IDAgMCAxIDAgMUg4YS41LjUgMCAwIDEtLjUtLjVWNGEuNS41IDAgMCAxIC41LS41elwiIC8+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9XCJNOCAxNkE4IDggMCAxIDAgOCAwYTggOCAwIDAgMCAwIDE2em0wLTFBNyA3IDAgMSAxIDggMWE3IDcgMCAwIDEgMCAxNHpcIiAvPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvc3ZnPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJpY29uLXRleHRcIj4ke3JlY2V0dGUudGVtcHNEZVByZXBhcmF0aW9ufTwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzdmcgeG1sbnM9XCJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Z1wiIHdpZHRoPVwiMTZcIiBoZWlnaHQ9XCIxNlwiIGZpbGw9XCJjdXJyZW50Q29sb3JcIiBjbGFzcz1cImJpIGJpLWNsb2NrLWhpc3RvcnlcIiB2aWV3Qm94PVwiMCAwIDE2IDE2XCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9XCJNOC41MTUgMy41YS41LjUgMCAwIDEgLjUuNXYzLjc5NGwyLjg0NyAxLjQ0N2EuNS41IDAgMCAxLS41MTQuODU4bC0zLjEtMS41NzZhLjUuNSAwIDAgMS0uMjM4LS40MzNWNGEuNS41IDAgMCAxIC41LS41elwiIC8+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9XCJNOCAxNkE4IDggMCAxIDAgOCAwYTggOCAwIDAgMCAwIDE2em0wLTFBNyA3IDAgMSAxIDggMWE3IDcgMCAwIDEgMCAxNHpcIiAvPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvc3ZnPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJpY29uLXRleHRcIj4ke3JlY2V0dGUudGVtcHNEZUN1aXNvbn08L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3ZnIHhtbG5zPVwiaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmdcIiB3aWR0aD1cIjE2XCIgaGVpZ2h0PVwiMTZcIiBmaWxsPVwiY3VycmVudENvbG9yXCIgY2xhc3M9XCJiaSBiaS1wZW9wbGUtZmlsbFwiIHZpZXdCb3g9XCIwIDAgMTYgMTZcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD1cIk04IDhhMyAzIDAgMSAwIDAtNiAzIDMgMCAwIDAgMCA2em0tNS4yMTYuODVBMi43ODUgMi43ODUgMCAwIDEgMy41IDhoOWEyLjc4NSAyLjc4NSAwIDAgMSAuNzE2Ljg1QTIuNDc4IDIuNDc4IDAgMCAxIDE0IDEwLjV2LjU3N2MwIC4xOS0uMTEyLjM2LS4yODEuNDQ1TDguODMzIDE0SDcuMTY3bC00Ljg4Ni0yLjQ3OEEuNTAyLjUwMiAwIDAgMSAyIDExLjA3OFYxMC41YzAtLjg5LjM3LTEuNjgyLjc4NC0yLjE1elwiIC8+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zdmc+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cImljb24tdGV4dFwiPiR7cmVjZXR0ZS5ub21icmVQb3J0aW9uc308L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cInN0YXJzXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAke3JlY2V0dGUuZGlmZmljdWx0ZSA9PSAxID8gJyYjOTczMzsmIzk3MzQ7JiM5NzM0OyYjOTczNDsmIzk3MzQ7JyA6XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmVjZXR0ZS5kaWZmaWN1bHRlID09IDIgPyAnJiM5NzMzOyYjOTczMzsmIzk3MzQ7JiM5NzM0OyYjOTczNDsnIDpcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmVjZXR0ZS5kaWZmaWN1bHRlID09IDMgPyAnJiM5NzMzOyYjOTczMzsmIzk3MzM7JiM5NzM0OyYjOTczNDsnIDpcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJlY2V0dGUuZGlmZmljdWx0ZSA9PSA0ID8gJyYjOTczMzsmIzk3MzM7JiM5NzMzOyYjOTczMzsmIzk3MzQ7JyA6XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmVjZXR0ZS5kaWZmaWN1bHRlID09IDUgPyAnJiM5NzMzOyYjOTczMzsmIzk3MzM7JiM5NzMzOyYjOTczMzsnIDpcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJyYjOTczNDsmIzk3MzQ7JiM5NzM0OyYjOTczNDsmIzk3MzQ7J31cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICgke3JlY2V0dGUuZGlmZmljdWx0ZX0gbm90ZXMpXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgPC9kaXY+YDtcclxuXHJcbiAgICAgICAgICAgIGNvbC5pbm5lckhUTUwgPSBjYXJkO1xyXG4gICAgICAgICAgICByb3cuYXBwZW5kQ2hpbGQoY29sKTtcclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgZGl2UmVzdWx0YXRzLmFwcGVuZENoaWxkKHJvdyk7XHJcbiAgICAgICAgYWRkUGFnaW5hdGlvbih0b3RhbFBhZ2VzKTtcclxuICAgIH1cclxuXHJcbiAgICBmdW5jdGlvbiBhZGRQYWdpbmF0aW9uKHRvdGFsUGFnZXMpIHtcclxuICAgICAgICBjb25zdCBwYWdpbmF0aW9uID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnbmF2Jyk7XHJcbiAgICAgICAgcGFnaW5hdGlvbi5jbGFzc0xpc3QuYWRkKCdwYWdpbmF0aW9uJyk7XHJcblxyXG4gICAgICAgIGZvciAobGV0IGkgPSAxOyBpIDw9IHRvdGFsUGFnZXM7IGkrKykge1xyXG4gICAgICAgICAgICBjb25zdCBwYWdlSXRlbSA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2EnKTtcclxuICAgICAgICAgICAgcGFnZUl0ZW0uY2xhc3NMaXN0LmFkZCgncGFnZS1saW5rJyk7XHJcbiAgICAgICAgICAgIHBhZ2VJdGVtLnRleHRDb250ZW50ID0gaTtcclxuICAgICAgICAgICAgcGFnZUl0ZW0uaHJlZiA9ICcjJztcclxuXHJcbiAgICAgICAgICAgIC8vIENsaWNrIGV2ZW50IHRvIGNoYW5nZSBwYWdlXHJcbiAgICAgICAgICAgIHBhZ2VJdGVtLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGV2ZW50KSB7XHJcbiAgICAgICAgICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAgICAgICAgICAgICAgY3VycmVudFBhZ2UgPSBpO1xyXG4gICAgICAgICAgICAgICAgZGlzcGxheVJlY2lwZXMoKTtcclxuICAgICAgICAgICAgfSk7XHJcblxyXG4gICAgICAgICAgICBwYWdpbmF0aW9uLmFwcGVuZENoaWxkKHBhZ2VJdGVtKTtcclxuICAgICAgICB9XHJcblxyXG4gICAgICAgIGRpdlJlc3VsdGF0cy5hcHBlbmRDaGlsZChwYWdpbmF0aW9uKTtcclxuICAgIH1cclxufSk7XHJcblxyXG4iLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOlsiZG9jdW1lbnQiLCJhZGRFdmVudExpc3RlbmVyIiwiZGl2UmVzdWx0YXRzIiwiZ2V0RWxlbWVudEJ5SWQiLCJmb3JtIiwicmVjaXBlc1BlclBhZ2UiLCJjdXJyZW50UGFnZSIsInJlY2V0dGVzIiwiY29uc29sZSIsImxvZyIsImV2ZW50IiwidGFyZ2V0IiwidmFsdWUiLCJpbm5lckhUTUwiLCJ1cmwiLCJmb3JtRGF0YSIsIkZvcm1EYXRhIiwiYXhpb3MiLCJwb3N0IiwidGhlbiIsInJlc3BvbnNlIiwiZGF0YSIsImRpc3BsYXlSZWNpcGVzIiwiZXJyb3IiLCJ0b3RhbFBhZ2VzIiwiTWF0aCIsImNlaWwiLCJsZW5ndGgiLCJzdGFydEluZGV4IiwiZW5kSW5kZXgiLCJyb3ciLCJjcmVhdGVFbGVtZW50IiwiY2xhc3NMaXN0IiwiYWRkIiwic2xpY2UiLCJmb3JFYWNoIiwicmVjZXR0ZSIsImNvbCIsImNhcmQiLCJjb25jYXQiLCJpbWFnZSIsInRpdHJlIiwidXRpbGlzYXRldXIiLCJwaG90byIsIm5vbSIsInRlbXBzRGVQcmVwYXJhdGlvbiIsInRlbXBzRGVDdWlzb24iLCJub21icmVQb3J0aW9ucyIsImRpZmZpY3VsdGUiLCJhcHBlbmRDaGlsZCIsImFkZFBhZ2luYXRpb24iLCJwYWdpbmF0aW9uIiwiX2xvb3AiLCJpIiwicGFnZUl0ZW0iLCJ0ZXh0Q29udGVudCIsImhyZWYiLCJwcmV2ZW50RGVmYXVsdCJdLCJzb3VyY2VSb290IjoiIn0=