"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["showRecette"],{

/***/ "./assets/showRecette.js":
/*!*******************************!*\
  !*** ./assets/showRecette.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _styles_showRecette_css__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./styles/showRecette.css */ "./assets/styles/showRecette.css");





function setupSaisonRecetteHandler(_ref) {
  var LinkSelector = _ref.LinkSelector,
    divResultatsId = _ref.divResultatsId,
    showBtnId = _ref.showBtnId,
    ListId = _ref.ListId;
  var links = document.querySelectorAll(LinkSelector);
  var divResultats = document.getElementById(divResultatsId);
  var showBtn = document.getElementById(showBtnId);
  var list = document.getElementById(ListId);

  // Gérer l'affichage des listes (saison/type de plat/origines)
  showBtn.addEventListener('click', function () {
    if (list.style.display === "none" || list.style.display === "") {
      list.style.display = "block"; // Afficher la liste
    } else {
      list.style.display = "none"; // Masquer la liste
    }
  });

  // Gérer les clics sur les liens
  links.forEach(function (link) {
    link.addEventListener('click', function (event) {
      event.preventDefault(); // Empêcher le comportement par défaut du lien

      var valeur = this.getAttribute('data-valeur') || '';

      // Vider le contenu précédent et afficher un message de chargement
      divResultats.innerHTML = '<p>Chargement des recettes...</p>';
      var idParent = event.target.parentElement.id;

      // Construire l'URL en fonction des filtres (saison et/ou type de plat)
      var url = '/gestion/recettes/afficher';
      url += "/".concat(idParent, "/").concat(valeur); // Seule la saison

      console.log(url);

      // Utiliser Axios pour faire une requête AJAX
      axios.get(url).then(function (response) {
        var recettes = response.data; // Données en JSON
        divResultats.innerHTML = ''; // Vider le contenu précédent

        // Vérifier si des recettes sont trouvées
        if (recettes.length > 0) {
          recettes.forEach(function (recette) {
            var recetteItem = document.createElement('div');
            recetteItem.classList.add('recette-item');
            recetteItem.innerHTML = "<img src=\"".concat(recette.image, "\" alt=\"Image de la recette\" class=\"recette-image\">\n                            <h2>").concat(recette.titre, "</h2>\n                            <h3>").concat(recette.utilisateur.nom, "</h3>");
            divResultats.appendChild(recetteItem);
          });
        } else {
          divResultats.innerHTML = '<p>Aucune recette trouvée pour cette sélection.</p>';
        }
      })["catch"](function (error) {
        console.error('Erreur lors de la requête:', error);
        divResultats.innerHTML = '<p>Une erreur est survenue lors du chargement des recettes.</p>';
      });
    });
  });
}
setupSaisonRecetteHandler({
  LinkSelector: '.saison-link',
  divResultatsId: 'divResultats',
  showBtnId: 'showSaisonsBtn',
  ListId: 'saison'
});
setupSaisonRecetteHandler({
  LinkSelector: '.typeDePlat-link',
  divResultatsId: 'divResultats',
  showBtnId: 'showPlatsBtn',
  ListId: 'typeDePlat'
});
setupSaisonRecetteHandler({
  LinkSelector: '.origine-link',
  divResultatsId: 'divResultats',
  showBtnId: 'showOriginesBtn',
  ListId: 'origine'
});
setupSaisonRecetteHandler({
  LinkSelector: '.preparation-link',
  divResultatsId: 'divResultats',
  showBtnId: 'showPreparationsBtn',
  ListId: 'preparation'
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// document.getElementById('userMenu').addEventListener('click', function() {
//     document.getElementById('userDropdown').classList.toggle('hidden');
//     });

//     document.addEventListener('click', function(event) {
//     const userMenu = document.getElementById('userMenu');
//     const userDropdown = document.getElementById('userDropdown');
//     if (!userMenu.contains(event.target) && !userDropdown.classList.contains('hidden')) {
//     userDropdown.classList.add('hidden');
//     }
//     });
var favoriteButtons = document.querySelectorAll('.ri-heart-line');
favoriteButtons.forEach(function (button) {
  button.addEventListener('click', function () {
    this.classList.toggle('ri-heart-line');
    this.classList.toggle('ri-heart-fill');
    this.classList.toggle('text-primary');
  });
});

/***/ }),

/***/ "./assets/styles/showRecette.css":
/*!***************************************!*\
  !*** ./assets/styles/showRecette.css ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_internals_array-species-create_js-node_modules_core-js_internals-fc1c90","vendors-node_modules_core-js_modules_es_array_concat_js-node_modules_core-js_modules_es_array-ffb95b"], () => (__webpack_exec__("./assets/showRecette.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoic2hvd1JlY2V0dGUuanMiLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBa0M7QUFFbEMsU0FBU0EseUJBQXlCQSxDQUFBQyxJQUFBLEVBQXNEO0VBQUEsSUFBbkRDLFlBQVksR0FBQUQsSUFBQSxDQUFaQyxZQUFZO0lBQUVDLGNBQWMsR0FBQUYsSUFBQSxDQUFkRSxjQUFjO0lBQUVDLFNBQVMsR0FBQUgsSUFBQSxDQUFURyxTQUFTO0lBQUVDLE1BQU0sR0FBQUosSUFBQSxDQUFOSSxNQUFNO0VBQ2hGLElBQU1DLEtBQUssR0FBR0MsUUFBUSxDQUFDQyxnQkFBZ0IsQ0FBQ04sWUFBWSxDQUFDO0VBQ3JELElBQU1PLFlBQVksR0FBR0YsUUFBUSxDQUFDRyxjQUFjLENBQUNQLGNBQWMsQ0FBQztFQUM1RCxJQUFNUSxPQUFPLEdBQUdKLFFBQVEsQ0FBQ0csY0FBYyxDQUFDTixTQUFTLENBQUM7RUFDbEQsSUFBTVEsSUFBSSxHQUFHTCxRQUFRLENBQUNHLGNBQWMsQ0FBQ0wsTUFBTSxDQUFDOztFQUU1QztFQUNBTSxPQUFPLENBQUNFLGdCQUFnQixDQUFDLE9BQU8sRUFBRSxZQUFZO0lBQzFDLElBQUlELElBQUksQ0FBQ0UsS0FBSyxDQUFDQyxPQUFPLEtBQUssTUFBTSxJQUFJSCxJQUFJLENBQUNFLEtBQUssQ0FBQ0MsT0FBTyxLQUFLLEVBQUUsRUFBRTtNQUM1REgsSUFBSSxDQUFDRSxLQUFLLENBQUNDLE9BQU8sR0FBRyxPQUFPLENBQUMsQ0FBRTtJQUNuQyxDQUFDLE1BQU07TUFDSEgsSUFBSSxDQUFDRSxLQUFLLENBQUNDLE9BQU8sR0FBRyxNQUFNLENBQUMsQ0FBRTtJQUNsQztFQUNKLENBQUMsQ0FBQzs7RUFFRjtFQUNBVCxLQUFLLENBQUNVLE9BQU8sQ0FBQyxVQUFVQyxJQUFJLEVBQUU7SUFDMUJBLElBQUksQ0FBQ0osZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFVBQVVLLEtBQUssRUFBRTtNQUM1Q0EsS0FBSyxDQUFDQyxjQUFjLENBQUMsQ0FBQyxDQUFDLENBQUU7O01BRXpCLElBQUlDLE1BQU0sR0FBRyxJQUFJLENBQUNDLFlBQVksQ0FBQyxhQUFhLENBQUMsSUFBSSxFQUFFOztNQUVoRDtNQUNIWixZQUFZLENBQUNhLFNBQVMsR0FBRyxtQ0FBbUM7TUFFNUQsSUFBSUMsUUFBUSxHQUFHTCxLQUFLLENBQUNNLE1BQU0sQ0FBQ0MsYUFBYSxDQUFDQyxFQUFFOztNQUU1QztNQUNBLElBQUlDLEdBQUcsR0FBRyw0QkFBNEI7TUFDdENBLEdBQUcsUUFBQUMsTUFBQSxDQUFRTCxRQUFRLE9BQUFLLE1BQUEsQ0FBSVIsTUFBTSxDQUFFLENBQUMsQ0FBRTs7TUFFbENTLE9BQU8sQ0FBQ0MsR0FBRyxDQUFDSCxHQUFHLENBQUM7O01BRWhCO01BQ0FJLEtBQUssQ0FBQ0MsR0FBRyxDQUFDTCxHQUFHLENBQUMsQ0FBQ00sSUFBSSxDQUFDLFVBQUFDLFFBQVEsRUFBSTtRQUN4QixJQUFNQyxRQUFRLEdBQUdELFFBQVEsQ0FBQ0UsSUFBSSxDQUFDLENBQUU7UUFDakMzQixZQUFZLENBQUNhLFNBQVMsR0FBRyxFQUFFLENBQUMsQ0FBRTs7UUFFOUI7UUFDQSxJQUFJYSxRQUFRLENBQUNFLE1BQU0sR0FBRyxDQUFDLEVBQUU7VUFDckJGLFFBQVEsQ0FBQ25CLE9BQU8sQ0FBQyxVQUFBc0IsT0FBTyxFQUFJO1lBQ3hCLElBQU1DLFdBQVcsR0FBR2hDLFFBQVEsQ0FBQ2lDLGFBQWEsQ0FBQyxLQUFLLENBQUM7WUFDakRELFdBQVcsQ0FBQ0UsU0FBUyxDQUFDQyxHQUFHLENBQUMsY0FBYyxDQUFDO1lBRXpDSCxXQUFXLENBQUNqQixTQUFTLGlCQUFBTSxNQUFBLENBQWdCVSxPQUFPLENBQUNLLEtBQUssK0ZBQUFmLE1BQUEsQ0FDNUNVLE9BQU8sQ0FBQ00sS0FBSyw2Q0FBQWhCLE1BQUEsQ0FDYlUsT0FBTyxDQUFDTyxXQUFXLENBQUNDLEdBQUcsVUFBTztZQUdwQ3JDLFlBQVksQ0FBQ3NDLFdBQVcsQ0FBQ1IsV0FBVyxDQUFDO1VBQ3pDLENBQUMsQ0FBQztRQUNOLENBQUMsTUFBTTtVQUNIOUIsWUFBWSxDQUFDYSxTQUFTLEdBQUcscURBQXFEO1FBQ2xGO01BQ0osQ0FBQyxDQUFDLFNBQ0ksQ0FBQyxVQUFBMEIsS0FBSyxFQUFJO1FBQ1puQixPQUFPLENBQUNtQixLQUFLLENBQUMsNEJBQTRCLEVBQUVBLEtBQUssQ0FBQztRQUNsRHZDLFlBQVksQ0FBQ2EsU0FBUyxHQUFHLGlFQUFpRTtNQUM5RixDQUFDLENBQUM7SUFDVixDQUFDLENBQUM7RUFDTixDQUFDLENBQUM7QUFDTjtBQUdBdEIseUJBQXlCLENBQUM7RUFBQ0UsWUFBWSxFQUFFLGNBQWM7RUFBQ0MsY0FBYyxFQUFFLGNBQWM7RUFBQ0MsU0FBUyxFQUFFLGdCQUFnQjtFQUFDQyxNQUFNLEVBQUU7QUFBUSxDQUFDLENBQUM7QUFDcklMLHlCQUF5QixDQUFDO0VBQUNFLFlBQVksRUFBRSxrQkFBa0I7RUFBQ0MsY0FBYyxFQUFFLGNBQWM7RUFBQ0MsU0FBUyxFQUFFLGNBQWM7RUFBQ0MsTUFBTSxFQUFFO0FBQVksQ0FBQyxDQUFDO0FBQzNJTCx5QkFBeUIsQ0FBQztFQUFDRSxZQUFZLEVBQUUsZUFBZTtFQUFDQyxjQUFjLEVBQUUsY0FBYztFQUFDQyxTQUFTLEVBQUUsaUJBQWlCO0VBQUNDLE1BQU0sRUFBRTtBQUFTLENBQUMsQ0FBQztBQUN4SUwseUJBQXlCLENBQUM7RUFBQ0UsWUFBWSxFQUFFLG1CQUFtQjtFQUFDQyxjQUFjLEVBQUUsY0FBYztFQUFDQyxTQUFTLEVBQUUscUJBQXFCO0VBQUNDLE1BQU0sRUFBRTtBQUFhLENBQUMsQ0FBQzs7QUFFcEo7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0ksSUFBTTRDLGVBQWUsR0FBRzFDLFFBQVEsQ0FBQ0MsZ0JBQWdCLENBQUMsZ0JBQWdCLENBQUM7QUFDbkV5QyxlQUFlLENBQUNqQyxPQUFPLENBQUMsVUFBQWtDLE1BQU0sRUFBSTtFQUNsQ0EsTUFBTSxDQUFDckMsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFlBQVc7SUFDNUMsSUFBSSxDQUFDNEIsU0FBUyxDQUFDVSxNQUFNLENBQUMsZUFBZSxDQUFDO0lBQ3RDLElBQUksQ0FBQ1YsU0FBUyxDQUFDVSxNQUFNLENBQUMsZUFBZSxDQUFDO0lBQ3RDLElBQUksQ0FBQ1YsU0FBUyxDQUFDVSxNQUFNLENBQUMsY0FBYyxDQUFDO0VBQ3JDLENBQUMsQ0FBQztBQUNGLENBQUMsQ0FBQzs7Ozs7Ozs7Ozs7QUMzRk4iLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvc2hvd1JlY2V0dGUuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9zaG93UmVjZXR0ZS5jc3M/NmEwNiJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgJy4vc3R5bGVzL3Nob3dSZWNldHRlLmNzcyc7XHJcblxyXG5mdW5jdGlvbiBzZXR1cFNhaXNvblJlY2V0dGVIYW5kbGVyKHsgTGlua1NlbGVjdG9yLCBkaXZSZXN1bHRhdHNJZCwgc2hvd0J0bklkLCBMaXN0SWQgfSkge1xyXG4gICAgY29uc3QgbGlua3MgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKExpbmtTZWxlY3Rvcik7XHJcbiAgICBjb25zdCBkaXZSZXN1bHRhdHMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChkaXZSZXN1bHRhdHNJZCk7XHJcbiAgICBjb25zdCBzaG93QnRuID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoc2hvd0J0bklkKTtcclxuICAgIGNvbnN0IGxpc3QgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChMaXN0SWQpO1xyXG5cclxuICAgIC8vIEfDqXJlciBsJ2FmZmljaGFnZSBkZXMgbGlzdGVzIChzYWlzb24vdHlwZSBkZSBwbGF0L29yaWdpbmVzKVxyXG4gICAgc2hvd0J0bi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcclxuICAgICAgICBpZiAobGlzdC5zdHlsZS5kaXNwbGF5ID09PSBcIm5vbmVcIiB8fCBsaXN0LnN0eWxlLmRpc3BsYXkgPT09IFwiXCIpIHtcclxuICAgICAgICAgICAgbGlzdC5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiOyAgLy8gQWZmaWNoZXIgbGEgbGlzdGVcclxuICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICBsaXN0LnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjsgIC8vIE1hc3F1ZXIgbGEgbGlzdGVcclxuICAgICAgICB9XHJcbiAgICB9KTtcclxuXHJcbiAgICAvLyBHw6lyZXIgbGVzIGNsaWNzIHN1ciBsZXMgbGllbnNcclxuICAgIGxpbmtzLmZvckVhY2goZnVuY3Rpb24gKGxpbmspIHtcclxuICAgICAgICBsaW5rLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGV2ZW50KSB7XHJcbiAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7ICAvLyBFbXDDqmNoZXIgbGUgY29tcG9ydGVtZW50IHBhciBkw6lmYXV0IGR1IGxpZW5cclxuXHJcbiAgICAgICAgICAgIGxldCB2YWxldXIgPSB0aGlzLmdldEF0dHJpYnV0ZSgnZGF0YS12YWxldXInKSB8fCAnJzsgIFxyXG4gICAgICAgIFxyXG4gICAgICAgICAgICAgICAvLyBWaWRlciBsZSBjb250ZW51IHByw6ljw6lkZW50IGV0IGFmZmljaGVyIHVuIG1lc3NhZ2UgZGUgY2hhcmdlbWVudFxyXG4gICAgICAgICAgICBkaXZSZXN1bHRhdHMuaW5uZXJIVE1MID0gJzxwPkNoYXJnZW1lbnQgZGVzIHJlY2V0dGVzLi4uPC9wPic7XHJcblxyXG4gICAgICAgICAgICBsZXQgaWRQYXJlbnQgPSBldmVudC50YXJnZXQucGFyZW50RWxlbWVudC5pZDtcclxuXHJcbiAgICAgICAgICAgIC8vIENvbnN0cnVpcmUgbCdVUkwgZW4gZm9uY3Rpb24gZGVzIGZpbHRyZXMgKHNhaXNvbiBldC9vdSB0eXBlIGRlIHBsYXQpXHJcbiAgICAgICAgICAgIGxldCB1cmwgPSAnL2dlc3Rpb24vcmVjZXR0ZXMvYWZmaWNoZXInO1xyXG4gICAgICAgICAgICB1cmwgKz0gYC8ke2lkUGFyZW50fS8ke3ZhbGV1cn1gOyAgLy8gU2V1bGUgbGEgc2Fpc29uXHJcblxyXG4gICAgICAgICAgICBjb25zb2xlLmxvZyh1cmwpO1xyXG5cclxuICAgICAgICAgICAgLy8gVXRpbGlzZXIgQXhpb3MgcG91ciBmYWlyZSB1bmUgcmVxdcOqdGUgQUpBWFxyXG4gICAgICAgICAgICBheGlvcy5nZXQodXJsKS50aGVuKHJlc3BvbnNlID0+IHtcclxuICAgICAgICAgICAgICAgICAgICBjb25zdCByZWNldHRlcyA9IHJlc3BvbnNlLmRhdGE7ICAvLyBEb25uw6llcyBlbiBKU09OXHJcbiAgICAgICAgICAgICAgICAgICAgZGl2UmVzdWx0YXRzLmlubmVySFRNTCA9ICcnOyAgLy8gVmlkZXIgbGUgY29udGVudSBwcsOpY8OpZGVudFxyXG5cclxuICAgICAgICAgICAgICAgICAgICAvLyBWw6lyaWZpZXIgc2kgZGVzIHJlY2V0dGVzIHNvbnQgdHJvdXbDqWVzXHJcbiAgICAgICAgICAgICAgICAgICAgaWYgKHJlY2V0dGVzLmxlbmd0aCA+IDApIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgcmVjZXR0ZXMuZm9yRWFjaChyZWNldHRlID0+IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbnN0IHJlY2V0dGVJdGVtID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICByZWNldHRlSXRlbS5jbGFzc0xpc3QuYWRkKCdyZWNldHRlLWl0ZW0nKTtcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICByZWNldHRlSXRlbS5pbm5lckhUTUwgPSBgPGltZyBzcmM9XCIke3JlY2V0dGUuaW1hZ2V9XCIgYWx0PVwiSW1hZ2UgZGUgbGEgcmVjZXR0ZVwiIGNsYXNzPVwicmVjZXR0ZS1pbWFnZVwiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGgyPiR7cmVjZXR0ZS50aXRyZX08L2gyPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGgzPiR7cmVjZXR0ZS51dGlsaXNhdGV1ci5ub219PC9oMz5gO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgXHJcblxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgZGl2UmVzdWx0YXRzLmFwcGVuZENoaWxkKHJlY2V0dGVJdGVtKTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgZGl2UmVzdWx0YXRzLmlubmVySFRNTCA9ICc8cD5BdWN1bmUgcmVjZXR0ZSB0cm91dsOpZSBwb3VyIGNldHRlIHPDqWxlY3Rpb24uPC9wPic7XHJcbiAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgfSlcclxuICAgICAgICAgICAgICAgIC5jYXRjaChlcnJvciA9PiB7XHJcbiAgICAgICAgICAgICAgICAgICAgY29uc29sZS5lcnJvcignRXJyZXVyIGxvcnMgZGUgbGEgcmVxdcOqdGU6JywgZXJyb3IpO1xyXG4gICAgICAgICAgICAgICAgICAgIGRpdlJlc3VsdGF0cy5pbm5lckhUTUwgPSAnPHA+VW5lIGVycmV1ciBlc3Qgc3VydmVudWUgbG9ycyBkdSBjaGFyZ2VtZW50IGRlcyByZWNldHRlcy48L3A+JztcclxuICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH0pO1xyXG4gICAgfSk7XHJcbn1cclxuXHJcblxyXG5zZXR1cFNhaXNvblJlY2V0dGVIYW5kbGVyKHtMaW5rU2VsZWN0b3I6ICcuc2Fpc29uLWxpbmsnLGRpdlJlc3VsdGF0c0lkOiAnZGl2UmVzdWx0YXRzJyxzaG93QnRuSWQ6ICdzaG93U2Fpc29uc0J0bicsTGlzdElkOiAnc2Fpc29uJ30pO1xyXG5zZXR1cFNhaXNvblJlY2V0dGVIYW5kbGVyKHtMaW5rU2VsZWN0b3I6ICcudHlwZURlUGxhdC1saW5rJyxkaXZSZXN1bHRhdHNJZDogJ2RpdlJlc3VsdGF0cycsc2hvd0J0bklkOiAnc2hvd1BsYXRzQnRuJyxMaXN0SWQ6ICd0eXBlRGVQbGF0J30pO1xyXG5zZXR1cFNhaXNvblJlY2V0dGVIYW5kbGVyKHtMaW5rU2VsZWN0b3I6ICcub3JpZ2luZS1saW5rJyxkaXZSZXN1bHRhdHNJZDogJ2RpdlJlc3VsdGF0cycsc2hvd0J0bklkOiAnc2hvd09yaWdpbmVzQnRuJyxMaXN0SWQ6ICdvcmlnaW5lJ30pO1xyXG5zZXR1cFNhaXNvblJlY2V0dGVIYW5kbGVyKHtMaW5rU2VsZWN0b3I6ICcucHJlcGFyYXRpb24tbGluaycsZGl2UmVzdWx0YXRzSWQ6ICdkaXZSZXN1bHRhdHMnLHNob3dCdG5JZDogJ3Nob3dQcmVwYXJhdGlvbnNCdG4nLExpc3RJZDogJ3ByZXBhcmF0aW9uJ30pO1xyXG5cclxuLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy9cclxuXHJcbi8vIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd1c2VyTWVudScpLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oKSB7XHJcbi8vICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndXNlckRyb3Bkb3duJykuY2xhc3NMaXN0LnRvZ2dsZSgnaGlkZGVuJyk7XHJcbi8vICAgICB9KTtcclxuICAgIFxyXG4vLyAgICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbihldmVudCkge1xyXG4vLyAgICAgY29uc3QgdXNlck1lbnUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndXNlck1lbnUnKTtcclxuLy8gICAgIGNvbnN0IHVzZXJEcm9wZG93biA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd1c2VyRHJvcGRvd24nKTtcclxuLy8gICAgIGlmICghdXNlck1lbnUuY29udGFpbnMoZXZlbnQudGFyZ2V0KSAmJiAhdXNlckRyb3Bkb3duLmNsYXNzTGlzdC5jb250YWlucygnaGlkZGVuJykpIHtcclxuLy8gICAgIHVzZXJEcm9wZG93bi5jbGFzc0xpc3QuYWRkKCdoaWRkZW4nKTtcclxuLy8gICAgIH1cclxuLy8gICAgIH0pO1xyXG4gICAgY29uc3QgZmF2b3JpdGVCdXR0b25zID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLnJpLWhlYXJ0LWxpbmUnKTtcclxuICAgIGZhdm9yaXRlQnV0dG9ucy5mb3JFYWNoKGJ1dHRvbiA9PiB7XHJcbiAgICBidXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpIHtcclxuICAgIHRoaXMuY2xhc3NMaXN0LnRvZ2dsZSgncmktaGVhcnQtbGluZScpO1xyXG4gICAgdGhpcy5jbGFzc0xpc3QudG9nZ2xlKCdyaS1oZWFydC1maWxsJyk7XHJcbiAgICB0aGlzLmNsYXNzTGlzdC50b2dnbGUoJ3RleHQtcHJpbWFyeScpO1xyXG4gICAgfSk7XHJcbiAgICB9KTtcclxuIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbInNldHVwU2Fpc29uUmVjZXR0ZUhhbmRsZXIiLCJfcmVmIiwiTGlua1NlbGVjdG9yIiwiZGl2UmVzdWx0YXRzSWQiLCJzaG93QnRuSWQiLCJMaXN0SWQiLCJsaW5rcyIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvckFsbCIsImRpdlJlc3VsdGF0cyIsImdldEVsZW1lbnRCeUlkIiwic2hvd0J0biIsImxpc3QiLCJhZGRFdmVudExpc3RlbmVyIiwic3R5bGUiLCJkaXNwbGF5IiwiZm9yRWFjaCIsImxpbmsiLCJldmVudCIsInByZXZlbnREZWZhdWx0IiwidmFsZXVyIiwiZ2V0QXR0cmlidXRlIiwiaW5uZXJIVE1MIiwiaWRQYXJlbnQiLCJ0YXJnZXQiLCJwYXJlbnRFbGVtZW50IiwiaWQiLCJ1cmwiLCJjb25jYXQiLCJjb25zb2xlIiwibG9nIiwiYXhpb3MiLCJnZXQiLCJ0aGVuIiwicmVzcG9uc2UiLCJyZWNldHRlcyIsImRhdGEiLCJsZW5ndGgiLCJyZWNldHRlIiwicmVjZXR0ZUl0ZW0iLCJjcmVhdGVFbGVtZW50IiwiY2xhc3NMaXN0IiwiYWRkIiwiaW1hZ2UiLCJ0aXRyZSIsInV0aWxpc2F0ZXVyIiwibm9tIiwiYXBwZW5kQ2hpbGQiLCJlcnJvciIsImZhdm9yaXRlQnV0dG9ucyIsImJ1dHRvbiIsInRvZ2dsZSJdLCJzb3VyY2VSb290IjoiIn0=