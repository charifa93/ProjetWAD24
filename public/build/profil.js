"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["profil"],{

/***/ "./assets/profil.js":
/*!**************************!*\
  !*** ./assets/profil.js ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _styles_profil_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./styles/profil.css */ "./assets/styles/profil.css");



function openImageUpload(type) {
  var input = document.createElement('input');
  input.type = 'file';
  input.accept = 'image/*';
  input.onchange = function (e) {
    var file = e.target.files[0];
    if (file) {
      var reader = new FileReader();
      reader.onload = function (e) {
        if (type === 'profile') {
          document.querySelector('.profile-image').src = e.target.result;
        } else if (type === 'banner') {
          document.querySelector('.profile-banner').style.backgroundImage = "url(".concat(e.target.result, ")");
        }
      };
      reader.readAsDataURL(file);
    }
  };
  input.click();
}
function openEditProfileModal() {
  var modal = document.createElement('div');
  modal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';
  modal.innerHTML = "\n    <div class=\"bg-white rounded-lg p-6 w-full max-w-lg\">\n    <div class=\"flex justify-between items-center mb-6\">\n    <h3 class=\"text-lg font-semibold\">Modifier le profil</h3>\n    <button onclick=\"this.closest('.fixed').remove()\" class=\"text-gray-400 hover:text-gray-600\">\n    <i class=\"ri-close-line text-xl\"></i>\n    </button>\n    </div>\n    <form id=\"editProfileForm\" class=\"space-y-4\">\n    <div>\n    <label class=\"block text-sm font-medium text-gray-700 mb-1\">Nom d'utilisateur</label>\n    <input type=\"text\" value=\"Sophie Martin\" class=\"w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\">\n    </div>\n    <div>\n    <label class=\"block text-sm font-medium text-gray-700 mb-1\">Bio</label>\n    <textarea class=\"w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\" rows=\"4\">Passionn\xE9e de cuisine fran\xE7aise et m\xE9diterran\xE9enne. J'aime partager mes recettes et d\xE9couvrir de nouvelles saveurs.</textarea>\n    </div>\n    <div>\n    <label class=\"block text-sm font-medium text-gray-700 mb-1\">Email</label>\n    <input type=\"email\" value=\"sophie.martin@email.com\" class=\"w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\">\n    </div>\n    <div class=\"flex justify-end space-x-3\">\n    <button type=\"button\" onclick=\"this.closest('.fixed').remove()\" class=\"px-4 py-2 text-gray-600 hover:text-gray-800 !rounded-button\">Annuler</button>\n    <button type=\"submit\" class=\"bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 !rounded-button\">Enregistrer</button>\n    </div>\n    </form>\n    </div>\n    ";
  document.body.appendChild(modal);
  document.getElementById('editProfileForm').addEventListener('submit', function (e) {
    e.preventDefault();
    modal.remove();
    showSuccessMessage('Profil mis à jour avec succès');
  });
}
function showSuccessMessage(message) {
  var successMessage = document.createElement('div');
  successMessage.className = 'fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg transform transition-transform duration-300';
  successMessage.textContent = message;
  document.body.appendChild(successMessage);
  setTimeout(function () {
    successMessage.remove();
  }, 3000);
}
function addShoppingItem() {
  var modal = document.createElement('div');
  modal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';
  modal.innerHTML = "\n    <div class=\"bg-white rounded-lg p-6 w-full max-w-md\">\n    <div class=\"flex justify-between items-center mb-6\">\n    <h3 class=\"text-lg font-semibold\">Ajouter un article</h3>\n    <button onclick=\"this.closest('.fixed').remove()\" class=\"text-gray-400 hover:text-gray-600\">\n    <i class=\"ri-close-line text-xl\"></i>\n    </button>\n    </div>\n    <form id=\"addItemForm\" class=\"space-y-4\">\n    <div>\n    <label class=\"block text-sm font-medium text-gray-700 mb-1\">Article</label>\n    <input type=\"text\" placeholder=\"Nom de l'article\" class=\"w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\">\n    </div>\n    <div>\n    <label class=\"block text-sm font-medium text-gray-700 mb-1\">Quantit\xE9</label>\n    <input type=\"text\" placeholder=\"Ex: 500g, 2L, 3 pi\xE8ces\" class=\"w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\">\n    </div>\n    <div class=\"flex justify-end space-x-3\">\n    <button type=\"submit\" class=\"bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 !rounded-button\">Ajouter</button>\n    <button type=\"button\" onclick=\"this.closest('.fixed').remove()\" class=\"px-4 py-2 text-gray-600 hover:text-gray-800 !rounded-button\">Annuler</button>\n    </div>\n    </form>\n    </div>\n    ";
  document.body.appendChild(modal);
  document.getElementById('addItemForm').addEventListener('submit', function (e) {
    e.preventDefault();
    var shoppingList = document.getElementById('shoppingList');
    var newItem = document.createElement('div');
    newItem.className = 'flex items-center justify-between p-3 bg-gray-50 rounded-lg';
    newItem.innerHTML = "\n    <div class=\"flex items-center space-x-3\">\n    <input type=\"checkbox\" class=\"rounded text-primary focus:ring-primary\">\n    <span>".concat(e.target.elements[0].value, " (").concat(e.target.elements[1].value, ")</span>\n    </div>\n    <button class=\"text-gray-400 hover:text-gray-600\" onclick=\"removeShoppingItem(this)\">\n    <i class=\"ri-delete-bin-line\"></i>\n    </button>\n    ");
    shoppingList.prepend(newItem);
    modal.remove();
    showSuccessMessage('Article ajouté à la liste');
  });
}
function removeShoppingItem(button) {
  button.closest('.flex').remove();
  showSuccessMessage('Article supprimé de la liste');
}

/***/ }),

/***/ "./assets/styles/profil.css":
/*!**********************************!*\
  !*** ./assets/styles/profil.css ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./node_modules/core-js/internals/array-method-has-species-support.js":
/*!****************************************************************************!*\
  !*** ./node_modules/core-js/internals/array-method-has-species-support.js ***!
  \****************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var fails = __webpack_require__(/*! ../internals/fails */ "./node_modules/core-js/internals/fails.js");
var wellKnownSymbol = __webpack_require__(/*! ../internals/well-known-symbol */ "./node_modules/core-js/internals/well-known-symbol.js");
var V8_VERSION = __webpack_require__(/*! ../internals/environment-v8-version */ "./node_modules/core-js/internals/environment-v8-version.js");

var SPECIES = wellKnownSymbol('species');

module.exports = function (METHOD_NAME) {
  // We can't use this feature detection in V8 since it causes
  // deoptimization and serious performance degradation
  // https://github.com/zloirock/core-js/issues/677
  return V8_VERSION >= 51 || !fails(function () {
    var array = [];
    var constructor = array.constructor = {};
    constructor[SPECIES] = function () {
      return { foo: 1 };
    };
    return array[METHOD_NAME](Boolean).foo !== 1;
  });
};


/***/ }),

/***/ "./node_modules/core-js/internals/array-slice.js":
/*!*******************************************************!*\
  !*** ./node_modules/core-js/internals/array-slice.js ***!
  \*******************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var uncurryThis = __webpack_require__(/*! ../internals/function-uncurry-this */ "./node_modules/core-js/internals/function-uncurry-this.js");

module.exports = uncurryThis([].slice);


/***/ }),

/***/ "./node_modules/core-js/internals/create-property.js":
/*!***********************************************************!*\
  !*** ./node_modules/core-js/internals/create-property.js ***!
  \***********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var DESCRIPTORS = __webpack_require__(/*! ../internals/descriptors */ "./node_modules/core-js/internals/descriptors.js");
var definePropertyModule = __webpack_require__(/*! ../internals/object-define-property */ "./node_modules/core-js/internals/object-define-property.js");
var createPropertyDescriptor = __webpack_require__(/*! ../internals/create-property-descriptor */ "./node_modules/core-js/internals/create-property-descriptor.js");

module.exports = function (object, key, value) {
  if (DESCRIPTORS) definePropertyModule.f(object, key, createPropertyDescriptor(0, value));
  else object[key] = value;
};


/***/ }),

/***/ "./node_modules/core-js/internals/does-not-exceed-safe-integer.js":
/*!************************************************************************!*\
  !*** ./node_modules/core-js/internals/does-not-exceed-safe-integer.js ***!
  \************************************************************************/
/***/ ((module) => {


var $TypeError = TypeError;
var MAX_SAFE_INTEGER = 0x1FFFFFFFFFFFFF; // 2 ** 53 - 1 == 9007199254740991

module.exports = function (it) {
  if (it > MAX_SAFE_INTEGER) throw $TypeError('Maximum allowed index exceeded');
  return it;
};


/***/ }),

/***/ "./node_modules/core-js/internals/environment.js":
/*!*******************************************************!*\
  !*** ./node_modules/core-js/internals/environment.js ***!
  \*******************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


/* global Bun, Deno -- detection */
var globalThis = __webpack_require__(/*! ../internals/global-this */ "./node_modules/core-js/internals/global-this.js");
var userAgent = __webpack_require__(/*! ../internals/environment-user-agent */ "./node_modules/core-js/internals/environment-user-agent.js");
var classof = __webpack_require__(/*! ../internals/classof-raw */ "./node_modules/core-js/internals/classof-raw.js");

var userAgentStartsWith = function (string) {
  return userAgent.slice(0, string.length) === string;
};

module.exports = (function () {
  if (userAgentStartsWith('Bun/')) return 'BUN';
  if (userAgentStartsWith('Cloudflare-Workers')) return 'CLOUDFLARE';
  if (userAgentStartsWith('Deno/')) return 'DENO';
  if (userAgentStartsWith('Node.js/')) return 'NODE';
  if (globalThis.Bun && typeof Bun.version == 'string') return 'BUN';
  if (globalThis.Deno && typeof Deno.version == 'object') return 'DENO';
  if (classof(globalThis.process) === 'process') return 'NODE';
  if (globalThis.window && globalThis.document) return 'BROWSER';
  return 'REST';
})();


/***/ }),

/***/ "./node_modules/core-js/internals/function-apply.js":
/*!**********************************************************!*\
  !*** ./node_modules/core-js/internals/function-apply.js ***!
  \**********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var NATIVE_BIND = __webpack_require__(/*! ../internals/function-bind-native */ "./node_modules/core-js/internals/function-bind-native.js");

var FunctionPrototype = Function.prototype;
var apply = FunctionPrototype.apply;
var call = FunctionPrototype.call;

// eslint-disable-next-line es/no-reflect -- safe
module.exports = typeof Reflect == 'object' && Reflect.apply || (NATIVE_BIND ? call.bind(apply) : function () {
  return call.apply(apply, arguments);
});


/***/ }),

/***/ "./node_modules/core-js/internals/schedulers-fix.js":
/*!**********************************************************!*\
  !*** ./node_modules/core-js/internals/schedulers-fix.js ***!
  \**********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var globalThis = __webpack_require__(/*! ../internals/global-this */ "./node_modules/core-js/internals/global-this.js");
var apply = __webpack_require__(/*! ../internals/function-apply */ "./node_modules/core-js/internals/function-apply.js");
var isCallable = __webpack_require__(/*! ../internals/is-callable */ "./node_modules/core-js/internals/is-callable.js");
var ENVIRONMENT = __webpack_require__(/*! ../internals/environment */ "./node_modules/core-js/internals/environment.js");
var USER_AGENT = __webpack_require__(/*! ../internals/environment-user-agent */ "./node_modules/core-js/internals/environment-user-agent.js");
var arraySlice = __webpack_require__(/*! ../internals/array-slice */ "./node_modules/core-js/internals/array-slice.js");
var validateArgumentsLength = __webpack_require__(/*! ../internals/validate-arguments-length */ "./node_modules/core-js/internals/validate-arguments-length.js");

var Function = globalThis.Function;
// dirty IE9- and Bun 0.3.0- checks
var WRAP = /MSIE .\./.test(USER_AGENT) || ENVIRONMENT === 'BUN' && (function () {
  var version = globalThis.Bun.version.split('.');
  return version.length < 3 || version[0] === '0' && (version[1] < 3 || version[1] === '3' && version[2] === '0');
})();

// IE9- / Bun 0.3.0- setTimeout / setInterval / setImmediate additional parameters fix
// https://html.spec.whatwg.org/multipage/timers-and-user-prompts.html#timers
// https://github.com/oven-sh/bun/issues/1633
module.exports = function (scheduler, hasTimeArg) {
  var firstParamIndex = hasTimeArg ? 2 : 1;
  return WRAP ? function (handler, timeout /* , ...arguments */) {
    var boundArgs = validateArgumentsLength(arguments.length, 1) > firstParamIndex;
    var fn = isCallable(handler) ? handler : Function(handler);
    var params = boundArgs ? arraySlice(arguments, firstParamIndex) : [];
    var callback = boundArgs ? function () {
      apply(fn, this, params);
    } : fn;
    return hasTimeArg ? scheduler(callback, timeout) : scheduler(callback);
  } : scheduler;
};


/***/ }),

/***/ "./node_modules/core-js/internals/validate-arguments-length.js":
/*!*********************************************************************!*\
  !*** ./node_modules/core-js/internals/validate-arguments-length.js ***!
  \*********************************************************************/
/***/ ((module) => {


var $TypeError = TypeError;

module.exports = function (passed, required) {
  if (passed < required) throw new $TypeError('Not enough arguments');
  return passed;
};


/***/ }),

/***/ "./node_modules/core-js/modules/es.array.concat.js":
/*!*********************************************************!*\
  !*** ./node_modules/core-js/modules/es.array.concat.js ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {


var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var fails = __webpack_require__(/*! ../internals/fails */ "./node_modules/core-js/internals/fails.js");
var isArray = __webpack_require__(/*! ../internals/is-array */ "./node_modules/core-js/internals/is-array.js");
var isObject = __webpack_require__(/*! ../internals/is-object */ "./node_modules/core-js/internals/is-object.js");
var toObject = __webpack_require__(/*! ../internals/to-object */ "./node_modules/core-js/internals/to-object.js");
var lengthOfArrayLike = __webpack_require__(/*! ../internals/length-of-array-like */ "./node_modules/core-js/internals/length-of-array-like.js");
var doesNotExceedSafeInteger = __webpack_require__(/*! ../internals/does-not-exceed-safe-integer */ "./node_modules/core-js/internals/does-not-exceed-safe-integer.js");
var createProperty = __webpack_require__(/*! ../internals/create-property */ "./node_modules/core-js/internals/create-property.js");
var arraySpeciesCreate = __webpack_require__(/*! ../internals/array-species-create */ "./node_modules/core-js/internals/array-species-create.js");
var arrayMethodHasSpeciesSupport = __webpack_require__(/*! ../internals/array-method-has-species-support */ "./node_modules/core-js/internals/array-method-has-species-support.js");
var wellKnownSymbol = __webpack_require__(/*! ../internals/well-known-symbol */ "./node_modules/core-js/internals/well-known-symbol.js");
var V8_VERSION = __webpack_require__(/*! ../internals/environment-v8-version */ "./node_modules/core-js/internals/environment-v8-version.js");

var IS_CONCAT_SPREADABLE = wellKnownSymbol('isConcatSpreadable');

// We can't use this feature detection in V8 since it causes
// deoptimization and serious performance degradation
// https://github.com/zloirock/core-js/issues/679
var IS_CONCAT_SPREADABLE_SUPPORT = V8_VERSION >= 51 || !fails(function () {
  var array = [];
  array[IS_CONCAT_SPREADABLE] = false;
  return array.concat()[0] !== array;
});

var isConcatSpreadable = function (O) {
  if (!isObject(O)) return false;
  var spreadable = O[IS_CONCAT_SPREADABLE];
  return spreadable !== undefined ? !!spreadable : isArray(O);
};

var FORCED = !IS_CONCAT_SPREADABLE_SUPPORT || !arrayMethodHasSpeciesSupport('concat');

// `Array.prototype.concat` method
// https://tc39.es/ecma262/#sec-array.prototype.concat
// with adding support of @@isConcatSpreadable and @@species
$({ target: 'Array', proto: true, arity: 1, forced: FORCED }, {
  // eslint-disable-next-line no-unused-vars -- required for `.length`
  concat: function concat(arg) {
    var O = toObject(this);
    var A = arraySpeciesCreate(O, 0);
    var n = 0;
    var i, k, length, len, E;
    for (i = -1, length = arguments.length; i < length; i++) {
      E = i === -1 ? O : arguments[i];
      if (isConcatSpreadable(E)) {
        len = lengthOfArrayLike(E);
        doesNotExceedSafeInteger(n + len);
        for (k = 0; k < len; k++, n++) if (k in E) createProperty(A, n, E[k]);
      } else {
        doesNotExceedSafeInteger(n + 1);
        createProperty(A, n++, E);
      }
    }
    A.length = n;
    return A;
  }
});


/***/ }),

/***/ "./node_modules/core-js/modules/web.set-interval.js":
/*!**********************************************************!*\
  !*** ./node_modules/core-js/modules/web.set-interval.js ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {


var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var globalThis = __webpack_require__(/*! ../internals/global-this */ "./node_modules/core-js/internals/global-this.js");
var schedulersFix = __webpack_require__(/*! ../internals/schedulers-fix */ "./node_modules/core-js/internals/schedulers-fix.js");

var setInterval = schedulersFix(globalThis.setInterval, true);

// Bun / IE9- setInterval additional parameters fix
// https://html.spec.whatwg.org/multipage/timers-and-user-prompts.html#dom-setinterval
$({ global: true, bind: true, forced: globalThis.setInterval !== setInterval }, {
  setInterval: setInterval
});


/***/ }),

/***/ "./node_modules/core-js/modules/web.set-timeout.js":
/*!*********************************************************!*\
  !*** ./node_modules/core-js/modules/web.set-timeout.js ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {


var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var globalThis = __webpack_require__(/*! ../internals/global-this */ "./node_modules/core-js/internals/global-this.js");
var schedulersFix = __webpack_require__(/*! ../internals/schedulers-fix */ "./node_modules/core-js/internals/schedulers-fix.js");

var setTimeout = schedulersFix(globalThis.setTimeout, true);

// Bun / IE9- setTimeout additional parameters fix
// https://html.spec.whatwg.org/multipage/timers-and-user-prompts.html#dom-settimeout
$({ global: true, bind: true, forced: globalThis.setTimeout !== setTimeout }, {
  setTimeout: setTimeout
});


/***/ }),

/***/ "./node_modules/core-js/modules/web.timers.js":
/*!****************************************************!*\
  !*** ./node_modules/core-js/modules/web.timers.js ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {


// TODO: Remove this module from `core-js@4` since it's split to modules listed below
__webpack_require__(/*! ../modules/web.set-interval */ "./node_modules/core-js/modules/web.set-interval.js");
__webpack_require__(/*! ../modules/web.set-timeout */ "./node_modules/core-js/modules/web.set-timeout.js");


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_internals_array-species-create_js-node_modules_core-js_internals-fc1c90"], () => (__webpack_exec__("./assets/profil.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QkFBTyxDQUFDLHVGQUE2QjtBQUNyQyxtQkFBTyxDQUFDLHFGQUE0QiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9wcm9maWwuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9wcm9maWwuY3NzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL2ludGVybmFscy9hcnJheS1tZXRob2QtaGFzLXNwZWNpZXMtc3VwcG9ydC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvYXJyYXktc2xpY2UuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvaW50ZXJuYWxzL2NyZWF0ZS1wcm9wZXJ0eS5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvZG9lcy1ub3QtZXhjZWVkLXNhZmUtaW50ZWdlci5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvZW52aXJvbm1lbnQuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvaW50ZXJuYWxzL2Z1bmN0aW9uLWFwcGx5LmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL2ludGVybmFscy9zY2hlZHVsZXJzLWZpeC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvdmFsaWRhdGUtYXJndW1lbnRzLWxlbmd0aC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9tb2R1bGVzL2VzLmFycmF5LmNvbmNhdC5qcyIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9tb2R1bGVzL3dlYi5zZXQtaW50ZXJ2YWwuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvbW9kdWxlcy93ZWIuc2V0LXRpbWVvdXQuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvbW9kdWxlcy93ZWIudGltZXJzLmpzIl0sInNvdXJjZXNDb250ZW50IjpbImltcG9ydCAnLi9zdHlsZXMvcHJvZmlsLmNzcyc7XHJcblxyXG4gICAgZnVuY3Rpb24gb3BlbkltYWdlVXBsb2FkKHR5cGUpIHtcclxuICAgIGNvbnN0IGlucHV0ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnaW5wdXQnKTtcclxuICAgIGlucHV0LnR5cGUgPSAnZmlsZSc7XHJcbiAgICBpbnB1dC5hY2NlcHQgPSAnaW1hZ2UvKic7XHJcbiAgICBpbnB1dC5vbmNoYW5nZSA9IGZ1bmN0aW9uKGUpIHtcclxuICAgIGNvbnN0IGZpbGUgPSBlLnRhcmdldC5maWxlc1swXTtcclxuICAgIGlmIChmaWxlKSB7XHJcbiAgICBjb25zdCByZWFkZXIgPSBuZXcgRmlsZVJlYWRlcigpO1xyXG4gICAgcmVhZGVyLm9ubG9hZCA9IGZ1bmN0aW9uKGUpIHtcclxuICAgIGlmICh0eXBlID09PSAncHJvZmlsZScpIHtcclxuICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5wcm9maWxlLWltYWdlJykuc3JjID0gZS50YXJnZXQucmVzdWx0O1xyXG4gICAgfSBlbHNlIGlmICh0eXBlID09PSAnYmFubmVyJykge1xyXG4gICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnByb2ZpbGUtYmFubmVyJykuc3R5bGUuYmFja2dyb3VuZEltYWdlID0gYHVybCgke2UudGFyZ2V0LnJlc3VsdH0pYDtcclxuICAgIH1cclxuICAgIH07XHJcbiAgICByZWFkZXIucmVhZEFzRGF0YVVSTChmaWxlKTtcclxuICAgIH1cclxuICAgIH07XHJcbiAgICBpbnB1dC5jbGljaygpO1xyXG4gICAgfVxyXG4gICAgZnVuY3Rpb24gb3BlbkVkaXRQcm9maWxlTW9kYWwoKSB7XHJcbiAgICBjb25zdCBtb2RhbCA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2RpdicpO1xyXG4gICAgbW9kYWwuY2xhc3NOYW1lID0gJ2ZpeGVkIGluc2V0LTAgYmctYmxhY2sgYmctb3BhY2l0eS01MCBmbGV4IGl0ZW1zLWNlbnRlciBqdXN0aWZ5LWNlbnRlciB6LTUwJztcclxuICAgIG1vZGFsLmlubmVySFRNTCA9IGBcclxuICAgIDxkaXYgY2xhc3M9XCJiZy13aGl0ZSByb3VuZGVkLWxnIHAtNiB3LWZ1bGwgbWF4LXctbGdcIj5cclxuICAgIDxkaXYgY2xhc3M9XCJmbGV4IGp1c3RpZnktYmV0d2VlbiBpdGVtcy1jZW50ZXIgbWItNlwiPlxyXG4gICAgPGgzIGNsYXNzPVwidGV4dC1sZyBmb250LXNlbWlib2xkXCI+TW9kaWZpZXIgbGUgcHJvZmlsPC9oMz5cclxuICAgIDxidXR0b24gb25jbGljaz1cInRoaXMuY2xvc2VzdCgnLmZpeGVkJykucmVtb3ZlKClcIiBjbGFzcz1cInRleHQtZ3JheS00MDAgaG92ZXI6dGV4dC1ncmF5LTYwMFwiPlxyXG4gICAgPGkgY2xhc3M9XCJyaS1jbG9zZS1saW5lIHRleHQteGxcIj48L2k+XHJcbiAgICA8L2J1dHRvbj5cclxuICAgIDwvZGl2PlxyXG4gICAgPGZvcm0gaWQ9XCJlZGl0UHJvZmlsZUZvcm1cIiBjbGFzcz1cInNwYWNlLXktNFwiPlxyXG4gICAgPGRpdj5cclxuICAgIDxsYWJlbCBjbGFzcz1cImJsb2NrIHRleHQtc20gZm9udC1tZWRpdW0gdGV4dC1ncmF5LTcwMCBtYi0xXCI+Tm9tIGQndXRpbGlzYXRldXI8L2xhYmVsPlxyXG4gICAgPGlucHV0IHR5cGU9XCJ0ZXh0XCIgdmFsdWU9XCJTb3BoaWUgTWFydGluXCIgY2xhc3M9XCJ3LWZ1bGwgcHgtMyBweS0yIGJvcmRlciBib3JkZXItZ3JheS0zMDAgcm91bmRlZC1sZyBmb2N1czpvdXRsaW5lLW5vbmUgZm9jdXM6cmluZy0yIGZvY3VzOnJpbmctcHJpbWFyeVwiPlxyXG4gICAgPC9kaXY+XHJcbiAgICA8ZGl2PlxyXG4gICAgPGxhYmVsIGNsYXNzPVwiYmxvY2sgdGV4dC1zbSBmb250LW1lZGl1bSB0ZXh0LWdyYXktNzAwIG1iLTFcIj5CaW88L2xhYmVsPlxyXG4gICAgPHRleHRhcmVhIGNsYXNzPVwidy1mdWxsIHB4LTMgcHktMiBib3JkZXIgYm9yZGVyLWdyYXktMzAwIHJvdW5kZWQtbGcgZm9jdXM6b3V0bGluZS1ub25lIGZvY3VzOnJpbmctMiBmb2N1czpyaW5nLXByaW1hcnlcIiByb3dzPVwiNFwiPlBhc3Npb25uw6llIGRlIGN1aXNpbmUgZnJhbsOnYWlzZSBldCBtw6lkaXRlcnJhbsOpZW5uZS4gSidhaW1lIHBhcnRhZ2VyIG1lcyByZWNldHRlcyBldCBkw6ljb3V2cmlyIGRlIG5vdXZlbGxlcyBzYXZldXJzLjwvdGV4dGFyZWE+XHJcbiAgICA8L2Rpdj5cclxuICAgIDxkaXY+XHJcbiAgICA8bGFiZWwgY2xhc3M9XCJibG9jayB0ZXh0LXNtIGZvbnQtbWVkaXVtIHRleHQtZ3JheS03MDAgbWItMVwiPkVtYWlsPC9sYWJlbD5cclxuICAgIDxpbnB1dCB0eXBlPVwiZW1haWxcIiB2YWx1ZT1cInNvcGhpZS5tYXJ0aW5AZW1haWwuY29tXCIgY2xhc3M9XCJ3LWZ1bGwgcHgtMyBweS0yIGJvcmRlciBib3JkZXItZ3JheS0zMDAgcm91bmRlZC1sZyBmb2N1czpvdXRsaW5lLW5vbmUgZm9jdXM6cmluZy0yIGZvY3VzOnJpbmctcHJpbWFyeVwiPlxyXG4gICAgPC9kaXY+XHJcbiAgICA8ZGl2IGNsYXNzPVwiZmxleCBqdXN0aWZ5LWVuZCBzcGFjZS14LTNcIj5cclxuICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiIG9uY2xpY2s9XCJ0aGlzLmNsb3Nlc3QoJy5maXhlZCcpLnJlbW92ZSgpXCIgY2xhc3M9XCJweC00IHB5LTIgdGV4dC1ncmF5LTYwMCBob3Zlcjp0ZXh0LWdyYXktODAwICFyb3VuZGVkLWJ1dHRvblwiPkFubnVsZXI8L2J1dHRvbj5cclxuICAgIDxidXR0b24gdHlwZT1cInN1Ym1pdFwiIGNsYXNzPVwiYmctcHJpbWFyeSB0ZXh0LXdoaXRlIHB4LTQgcHktMiByb3VuZGVkLWxnIGhvdmVyOmJnLXByaW1hcnkvOTAgIXJvdW5kZWQtYnV0dG9uXCI+RW5yZWdpc3RyZXI8L2J1dHRvbj5cclxuICAgIDwvZGl2PlxyXG4gICAgPC9mb3JtPlxyXG4gICAgPC9kaXY+XHJcbiAgICBgO1xyXG4gICAgZG9jdW1lbnQuYm9keS5hcHBlbmRDaGlsZChtb2RhbCk7XHJcbiAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZWRpdFByb2ZpbGVGb3JtJykuYWRkRXZlbnRMaXN0ZW5lcignc3VibWl0JywgZnVuY3Rpb24oZSkge1xyXG4gICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAgbW9kYWwucmVtb3ZlKCk7XHJcbiAgICBzaG93U3VjY2Vzc01lc3NhZ2UoJ1Byb2ZpbCBtaXMgw6Agam91ciBhdmVjIHN1Y2PDqHMnKTtcclxuICAgIH0pO1xyXG4gICAgfVxyXG4gICAgZnVuY3Rpb24gc2hvd1N1Y2Nlc3NNZXNzYWdlKG1lc3NhZ2UpIHtcclxuICAgIGNvbnN0IHN1Y2Nlc3NNZXNzYWdlID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcbiAgICBzdWNjZXNzTWVzc2FnZS5jbGFzc05hbWUgPSAnZml4ZWQgYm90dG9tLTQgcmlnaHQtNCBiZy1ncmVlbi01MDAgdGV4dC13aGl0ZSBweC02IHB5LTMgcm91bmRlZC1sZyBzaGFkb3ctbGcgdHJhbnNmb3JtIHRyYW5zaXRpb24tdHJhbnNmb3JtIGR1cmF0aW9uLTMwMCc7XHJcbiAgICBzdWNjZXNzTWVzc2FnZS50ZXh0Q29udGVudCA9IG1lc3NhZ2U7XHJcbiAgICBkb2N1bWVudC5ib2R5LmFwcGVuZENoaWxkKHN1Y2Nlc3NNZXNzYWdlKTtcclxuICAgIHNldFRpbWVvdXQoKCkgPT4ge1xyXG4gICAgc3VjY2Vzc01lc3NhZ2UucmVtb3ZlKCk7XHJcbiAgICB9LCAzMDAwKTtcclxuICAgIH1cclxuICAgIGZ1bmN0aW9uIGFkZFNob3BwaW5nSXRlbSgpIHtcclxuICAgIGNvbnN0IG1vZGFsID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcbiAgICBtb2RhbC5jbGFzc05hbWUgPSAnZml4ZWQgaW5zZXQtMCBiZy1ibGFjayBiZy1vcGFjaXR5LTUwIGZsZXggaXRlbXMtY2VudGVyIGp1c3RpZnktY2VudGVyIHotNTAnO1xyXG4gICAgbW9kYWwuaW5uZXJIVE1MID0gYFxyXG4gICAgPGRpdiBjbGFzcz1cImJnLXdoaXRlIHJvdW5kZWQtbGcgcC02IHctZnVsbCBtYXgtdy1tZFwiPlxyXG4gICAgPGRpdiBjbGFzcz1cImZsZXgganVzdGlmeS1iZXR3ZWVuIGl0ZW1zLWNlbnRlciBtYi02XCI+XHJcbiAgICA8aDMgY2xhc3M9XCJ0ZXh0LWxnIGZvbnQtc2VtaWJvbGRcIj5Bam91dGVyIHVuIGFydGljbGU8L2gzPlxyXG4gICAgPGJ1dHRvbiBvbmNsaWNrPVwidGhpcy5jbG9zZXN0KCcuZml4ZWQnKS5yZW1vdmUoKVwiIGNsYXNzPVwidGV4dC1ncmF5LTQwMCBob3Zlcjp0ZXh0LWdyYXktNjAwXCI+XHJcbiAgICA8aSBjbGFzcz1cInJpLWNsb3NlLWxpbmUgdGV4dC14bFwiPjwvaT5cclxuICAgIDwvYnV0dG9uPlxyXG4gICAgPC9kaXY+XHJcbiAgICA8Zm9ybSBpZD1cImFkZEl0ZW1Gb3JtXCIgY2xhc3M9XCJzcGFjZS15LTRcIj5cclxuICAgIDxkaXY+XHJcbiAgICA8bGFiZWwgY2xhc3M9XCJibG9jayB0ZXh0LXNtIGZvbnQtbWVkaXVtIHRleHQtZ3JheS03MDAgbWItMVwiPkFydGljbGU8L2xhYmVsPlxyXG4gICAgPGlucHV0IHR5cGU9XCJ0ZXh0XCIgcGxhY2Vob2xkZXI9XCJOb20gZGUgbCdhcnRpY2xlXCIgY2xhc3M9XCJ3LWZ1bGwgcHgtMyBweS0yIGJvcmRlciBib3JkZXItZ3JheS0zMDAgcm91bmRlZC1sZyBmb2N1czpvdXRsaW5lLW5vbmUgZm9jdXM6cmluZy0yIGZvY3VzOnJpbmctcHJpbWFyeVwiPlxyXG4gICAgPC9kaXY+XHJcbiAgICA8ZGl2PlxyXG4gICAgPGxhYmVsIGNsYXNzPVwiYmxvY2sgdGV4dC1zbSBmb250LW1lZGl1bSB0ZXh0LWdyYXktNzAwIG1iLTFcIj5RdWFudGl0w6k8L2xhYmVsPlxyXG4gICAgPGlucHV0IHR5cGU9XCJ0ZXh0XCIgcGxhY2Vob2xkZXI9XCJFeDogNTAwZywgMkwsIDMgcGnDqGNlc1wiIGNsYXNzPVwidy1mdWxsIHB4LTMgcHktMiBib3JkZXIgYm9yZGVyLWdyYXktMzAwIHJvdW5kZWQtbGcgZm9jdXM6b3V0bGluZS1ub25lIGZvY3VzOnJpbmctMiBmb2N1czpyaW5nLXByaW1hcnlcIj5cclxuICAgIDwvZGl2PlxyXG4gICAgPGRpdiBjbGFzcz1cImZsZXgganVzdGlmeS1lbmQgc3BhY2UteC0zXCI+XHJcbiAgICA8YnV0dG9uIHR5cGU9XCJzdWJtaXRcIiBjbGFzcz1cImJnLXByaW1hcnkgdGV4dC13aGl0ZSBweC00IHB5LTIgcm91bmRlZC1sZyBob3ZlcjpiZy1wcmltYXJ5LzkwICFyb3VuZGVkLWJ1dHRvblwiPkFqb3V0ZXI8L2J1dHRvbj5cclxuICAgIDxidXR0b24gdHlwZT1cImJ1dHRvblwiIG9uY2xpY2s9XCJ0aGlzLmNsb3Nlc3QoJy5maXhlZCcpLnJlbW92ZSgpXCIgY2xhc3M9XCJweC00IHB5LTIgdGV4dC1ncmF5LTYwMCBob3Zlcjp0ZXh0LWdyYXktODAwICFyb3VuZGVkLWJ1dHRvblwiPkFubnVsZXI8L2J1dHRvbj5cclxuICAgIDwvZGl2PlxyXG4gICAgPC9mb3JtPlxyXG4gICAgPC9kaXY+XHJcbiAgICBgO1xyXG4gICAgZG9jdW1lbnQuYm9keS5hcHBlbmRDaGlsZChtb2RhbCk7XHJcbiAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYWRkSXRlbUZvcm0nKS5hZGRFdmVudExpc3RlbmVyKCdzdWJtaXQnLCBmdW5jdGlvbihlKSB7XHJcbiAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICBjb25zdCBzaG9wcGluZ0xpc3QgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnc2hvcHBpbmdMaXN0Jyk7XHJcbiAgICBjb25zdCBuZXdJdGVtID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcbiAgICBuZXdJdGVtLmNsYXNzTmFtZSA9ICdmbGV4IGl0ZW1zLWNlbnRlciBqdXN0aWZ5LWJldHdlZW4gcC0zIGJnLWdyYXktNTAgcm91bmRlZC1sZyc7XHJcbiAgICBuZXdJdGVtLmlubmVySFRNTCA9IGBcclxuICAgIDxkaXYgY2xhc3M9XCJmbGV4IGl0ZW1zLWNlbnRlciBzcGFjZS14LTNcIj5cclxuICAgIDxpbnB1dCB0eXBlPVwiY2hlY2tib3hcIiBjbGFzcz1cInJvdW5kZWQgdGV4dC1wcmltYXJ5IGZvY3VzOnJpbmctcHJpbWFyeVwiPlxyXG4gICAgPHNwYW4+JHtlLnRhcmdldC5lbGVtZW50c1swXS52YWx1ZX0gKCR7ZS50YXJnZXQuZWxlbWVudHNbMV0udmFsdWV9KTwvc3Bhbj5cclxuICAgIDwvZGl2PlxyXG4gICAgPGJ1dHRvbiBjbGFzcz1cInRleHQtZ3JheS00MDAgaG92ZXI6dGV4dC1ncmF5LTYwMFwiIG9uY2xpY2s9XCJyZW1vdmVTaG9wcGluZ0l0ZW0odGhpcylcIj5cclxuICAgIDxpIGNsYXNzPVwicmktZGVsZXRlLWJpbi1saW5lXCI+PC9pPlxyXG4gICAgPC9idXR0b24+XHJcbiAgICBgO1xyXG4gICAgc2hvcHBpbmdMaXN0LnByZXBlbmQobmV3SXRlbSk7XHJcbiAgICBtb2RhbC5yZW1vdmUoKTtcclxuICAgIHNob3dTdWNjZXNzTWVzc2FnZSgnQXJ0aWNsZSBham91dMOpIMOgIGxhIGxpc3RlJyk7XHJcbiAgICB9KTtcclxuICAgIH1cclxuICAgIGZ1bmN0aW9uIHJlbW92ZVNob3BwaW5nSXRlbShidXR0b24pIHtcclxuICAgIGJ1dHRvbi5jbG9zZXN0KCcuZmxleCcpLnJlbW92ZSgpO1xyXG4gICAgc2hvd1N1Y2Nlc3NNZXNzYWdlKCdBcnRpY2xlIHN1cHByaW3DqSBkZSBsYSBsaXN0ZScpO1xyXG4gICAgfSIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsIid1c2Ugc3RyaWN0JztcbnZhciBmYWlscyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mYWlscycpO1xudmFyIHdlbGxLbm93blN5bWJvbCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy93ZWxsLWtub3duLXN5bWJvbCcpO1xudmFyIFY4X1ZFUlNJT04gPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZW52aXJvbm1lbnQtdjgtdmVyc2lvbicpO1xuXG52YXIgU1BFQ0lFUyA9IHdlbGxLbm93blN5bWJvbCgnc3BlY2llcycpO1xuXG5tb2R1bGUuZXhwb3J0cyA9IGZ1bmN0aW9uIChNRVRIT0RfTkFNRSkge1xuICAvLyBXZSBjYW4ndCB1c2UgdGhpcyBmZWF0dXJlIGRldGVjdGlvbiBpbiBWOCBzaW5jZSBpdCBjYXVzZXNcbiAgLy8gZGVvcHRpbWl6YXRpb24gYW5kIHNlcmlvdXMgcGVyZm9ybWFuY2UgZGVncmFkYXRpb25cbiAgLy8gaHR0cHM6Ly9naXRodWIuY29tL3psb2lyb2NrL2NvcmUtanMvaXNzdWVzLzY3N1xuICByZXR1cm4gVjhfVkVSU0lPTiA+PSA1MSB8fCAhZmFpbHMoZnVuY3Rpb24gKCkge1xuICAgIHZhciBhcnJheSA9IFtdO1xuICAgIHZhciBjb25zdHJ1Y3RvciA9IGFycmF5LmNvbnN0cnVjdG9yID0ge307XG4gICAgY29uc3RydWN0b3JbU1BFQ0lFU10gPSBmdW5jdGlvbiAoKSB7XG4gICAgICByZXR1cm4geyBmb286IDEgfTtcbiAgICB9O1xuICAgIHJldHVybiBhcnJheVtNRVRIT0RfTkFNRV0oQm9vbGVhbikuZm9vICE9PSAxO1xuICB9KTtcbn07XG4iLCIndXNlIHN0cmljdCc7XG52YXIgdW5jdXJyeVRoaXMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZnVuY3Rpb24tdW5jdXJyeS10aGlzJyk7XG5cbm1vZHVsZS5leHBvcnRzID0gdW5jdXJyeVRoaXMoW10uc2xpY2UpO1xuIiwiJ3VzZSBzdHJpY3QnO1xudmFyIERFU0NSSVBUT1JTID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2Rlc2NyaXB0b3JzJyk7XG52YXIgZGVmaW5lUHJvcGVydHlNb2R1bGUgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvb2JqZWN0LWRlZmluZS1wcm9wZXJ0eScpO1xudmFyIGNyZWF0ZVByb3BlcnR5RGVzY3JpcHRvciA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9jcmVhdGUtcHJvcGVydHktZGVzY3JpcHRvcicpO1xuXG5tb2R1bGUuZXhwb3J0cyA9IGZ1bmN0aW9uIChvYmplY3QsIGtleSwgdmFsdWUpIHtcbiAgaWYgKERFU0NSSVBUT1JTKSBkZWZpbmVQcm9wZXJ0eU1vZHVsZS5mKG9iamVjdCwga2V5LCBjcmVhdGVQcm9wZXJ0eURlc2NyaXB0b3IoMCwgdmFsdWUpKTtcbiAgZWxzZSBvYmplY3Rba2V5XSA9IHZhbHVlO1xufTtcbiIsIid1c2Ugc3RyaWN0JztcbnZhciAkVHlwZUVycm9yID0gVHlwZUVycm9yO1xudmFyIE1BWF9TQUZFX0lOVEVHRVIgPSAweDFGRkZGRkZGRkZGRkZGOyAvLyAyICoqIDUzIC0gMSA9PSA5MDA3MTk5MjU0NzQwOTkxXG5cbm1vZHVsZS5leHBvcnRzID0gZnVuY3Rpb24gKGl0KSB7XG4gIGlmIChpdCA+IE1BWF9TQUZFX0lOVEVHRVIpIHRocm93ICRUeXBlRXJyb3IoJ01heGltdW0gYWxsb3dlZCBpbmRleCBleGNlZWRlZCcpO1xuICByZXR1cm4gaXQ7XG59O1xuIiwiJ3VzZSBzdHJpY3QnO1xuLyogZ2xvYmFsIEJ1biwgRGVubyAtLSBkZXRlY3Rpb24gKi9cbnZhciBnbG9iYWxUaGlzID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2dsb2JhbC10aGlzJyk7XG52YXIgdXNlckFnZW50ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2Vudmlyb25tZW50LXVzZXItYWdlbnQnKTtcbnZhciBjbGFzc29mID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2NsYXNzb2YtcmF3Jyk7XG5cbnZhciB1c2VyQWdlbnRTdGFydHNXaXRoID0gZnVuY3Rpb24gKHN0cmluZykge1xuICByZXR1cm4gdXNlckFnZW50LnNsaWNlKDAsIHN0cmluZy5sZW5ndGgpID09PSBzdHJpbmc7XG59O1xuXG5tb2R1bGUuZXhwb3J0cyA9IChmdW5jdGlvbiAoKSB7XG4gIGlmICh1c2VyQWdlbnRTdGFydHNXaXRoKCdCdW4vJykpIHJldHVybiAnQlVOJztcbiAgaWYgKHVzZXJBZ2VudFN0YXJ0c1dpdGgoJ0Nsb3VkZmxhcmUtV29ya2VycycpKSByZXR1cm4gJ0NMT1VERkxBUkUnO1xuICBpZiAodXNlckFnZW50U3RhcnRzV2l0aCgnRGVuby8nKSkgcmV0dXJuICdERU5PJztcbiAgaWYgKHVzZXJBZ2VudFN0YXJ0c1dpdGgoJ05vZGUuanMvJykpIHJldHVybiAnTk9ERSc7XG4gIGlmIChnbG9iYWxUaGlzLkJ1biAmJiB0eXBlb2YgQnVuLnZlcnNpb24gPT0gJ3N0cmluZycpIHJldHVybiAnQlVOJztcbiAgaWYgKGdsb2JhbFRoaXMuRGVubyAmJiB0eXBlb2YgRGVuby52ZXJzaW9uID09ICdvYmplY3QnKSByZXR1cm4gJ0RFTk8nO1xuICBpZiAoY2xhc3NvZihnbG9iYWxUaGlzLnByb2Nlc3MpID09PSAncHJvY2VzcycpIHJldHVybiAnTk9ERSc7XG4gIGlmIChnbG9iYWxUaGlzLndpbmRvdyAmJiBnbG9iYWxUaGlzLmRvY3VtZW50KSByZXR1cm4gJ0JST1dTRVInO1xuICByZXR1cm4gJ1JFU1QnO1xufSkoKTtcbiIsIid1c2Ugc3RyaWN0JztcbnZhciBOQVRJVkVfQklORCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mdW5jdGlvbi1iaW5kLW5hdGl2ZScpO1xuXG52YXIgRnVuY3Rpb25Qcm90b3R5cGUgPSBGdW5jdGlvbi5wcm90b3R5cGU7XG52YXIgYXBwbHkgPSBGdW5jdGlvblByb3RvdHlwZS5hcHBseTtcbnZhciBjYWxsID0gRnVuY3Rpb25Qcm90b3R5cGUuY2FsbDtcblxuLy8gZXNsaW50LWRpc2FibGUtbmV4dC1saW5lIGVzL25vLXJlZmxlY3QgLS0gc2FmZVxubW9kdWxlLmV4cG9ydHMgPSB0eXBlb2YgUmVmbGVjdCA9PSAnb2JqZWN0JyAmJiBSZWZsZWN0LmFwcGx5IHx8IChOQVRJVkVfQklORCA/IGNhbGwuYmluZChhcHBseSkgOiBmdW5jdGlvbiAoKSB7XG4gIHJldHVybiBjYWxsLmFwcGx5KGFwcGx5LCBhcmd1bWVudHMpO1xufSk7XG4iLCIndXNlIHN0cmljdCc7XG52YXIgZ2xvYmFsVGhpcyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9nbG9iYWwtdGhpcycpO1xudmFyIGFwcGx5ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2Z1bmN0aW9uLWFwcGx5Jyk7XG52YXIgaXNDYWxsYWJsZSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1jYWxsYWJsZScpO1xudmFyIEVOVklST05NRU5UID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2Vudmlyb25tZW50Jyk7XG52YXIgVVNFUl9BR0VOVCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9lbnZpcm9ubWVudC11c2VyLWFnZW50Jyk7XG52YXIgYXJyYXlTbGljZSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9hcnJheS1zbGljZScpO1xudmFyIHZhbGlkYXRlQXJndW1lbnRzTGVuZ3RoID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3ZhbGlkYXRlLWFyZ3VtZW50cy1sZW5ndGgnKTtcblxudmFyIEZ1bmN0aW9uID0gZ2xvYmFsVGhpcy5GdW5jdGlvbjtcbi8vIGRpcnR5IElFOS0gYW5kIEJ1biAwLjMuMC0gY2hlY2tzXG52YXIgV1JBUCA9IC9NU0lFIC5cXC4vLnRlc3QoVVNFUl9BR0VOVCkgfHwgRU5WSVJPTk1FTlQgPT09ICdCVU4nICYmIChmdW5jdGlvbiAoKSB7XG4gIHZhciB2ZXJzaW9uID0gZ2xvYmFsVGhpcy5CdW4udmVyc2lvbi5zcGxpdCgnLicpO1xuICByZXR1cm4gdmVyc2lvbi5sZW5ndGggPCAzIHx8IHZlcnNpb25bMF0gPT09ICcwJyAmJiAodmVyc2lvblsxXSA8IDMgfHwgdmVyc2lvblsxXSA9PT0gJzMnICYmIHZlcnNpb25bMl0gPT09ICcwJyk7XG59KSgpO1xuXG4vLyBJRTktIC8gQnVuIDAuMy4wLSBzZXRUaW1lb3V0IC8gc2V0SW50ZXJ2YWwgLyBzZXRJbW1lZGlhdGUgYWRkaXRpb25hbCBwYXJhbWV0ZXJzIGZpeFxuLy8gaHR0cHM6Ly9odG1sLnNwZWMud2hhdHdnLm9yZy9tdWx0aXBhZ2UvdGltZXJzLWFuZC11c2VyLXByb21wdHMuaHRtbCN0aW1lcnNcbi8vIGh0dHBzOi8vZ2l0aHViLmNvbS9vdmVuLXNoL2J1bi9pc3N1ZXMvMTYzM1xubW9kdWxlLmV4cG9ydHMgPSBmdW5jdGlvbiAoc2NoZWR1bGVyLCBoYXNUaW1lQXJnKSB7XG4gIHZhciBmaXJzdFBhcmFtSW5kZXggPSBoYXNUaW1lQXJnID8gMiA6IDE7XG4gIHJldHVybiBXUkFQID8gZnVuY3Rpb24gKGhhbmRsZXIsIHRpbWVvdXQgLyogLCAuLi5hcmd1bWVudHMgKi8pIHtcbiAgICB2YXIgYm91bmRBcmdzID0gdmFsaWRhdGVBcmd1bWVudHNMZW5ndGgoYXJndW1lbnRzLmxlbmd0aCwgMSkgPiBmaXJzdFBhcmFtSW5kZXg7XG4gICAgdmFyIGZuID0gaXNDYWxsYWJsZShoYW5kbGVyKSA/IGhhbmRsZXIgOiBGdW5jdGlvbihoYW5kbGVyKTtcbiAgICB2YXIgcGFyYW1zID0gYm91bmRBcmdzID8gYXJyYXlTbGljZShhcmd1bWVudHMsIGZpcnN0UGFyYW1JbmRleCkgOiBbXTtcbiAgICB2YXIgY2FsbGJhY2sgPSBib3VuZEFyZ3MgPyBmdW5jdGlvbiAoKSB7XG4gICAgICBhcHBseShmbiwgdGhpcywgcGFyYW1zKTtcbiAgICB9IDogZm47XG4gICAgcmV0dXJuIGhhc1RpbWVBcmcgPyBzY2hlZHVsZXIoY2FsbGJhY2ssIHRpbWVvdXQpIDogc2NoZWR1bGVyKGNhbGxiYWNrKTtcbiAgfSA6IHNjaGVkdWxlcjtcbn07XG4iLCIndXNlIHN0cmljdCc7XG52YXIgJFR5cGVFcnJvciA9IFR5cGVFcnJvcjtcblxubW9kdWxlLmV4cG9ydHMgPSBmdW5jdGlvbiAocGFzc2VkLCByZXF1aXJlZCkge1xuICBpZiAocGFzc2VkIDwgcmVxdWlyZWQpIHRocm93IG5ldyAkVHlwZUVycm9yKCdOb3QgZW5vdWdoIGFyZ3VtZW50cycpO1xuICByZXR1cm4gcGFzc2VkO1xufTtcbiIsIid1c2Ugc3RyaWN0JztcbnZhciAkID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2V4cG9ydCcpO1xudmFyIGZhaWxzID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2ZhaWxzJyk7XG52YXIgaXNBcnJheSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1hcnJheScpO1xudmFyIGlzT2JqZWN0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2lzLW9iamVjdCcpO1xudmFyIHRvT2JqZWN0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3RvLW9iamVjdCcpO1xudmFyIGxlbmd0aE9mQXJyYXlMaWtlID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2xlbmd0aC1vZi1hcnJheS1saWtlJyk7XG52YXIgZG9lc05vdEV4Y2VlZFNhZmVJbnRlZ2VyID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2RvZXMtbm90LWV4Y2VlZC1zYWZlLWludGVnZXInKTtcbnZhciBjcmVhdGVQcm9wZXJ0eSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9jcmVhdGUtcHJvcGVydHknKTtcbnZhciBhcnJheVNwZWNpZXNDcmVhdGUgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvYXJyYXktc3BlY2llcy1jcmVhdGUnKTtcbnZhciBhcnJheU1ldGhvZEhhc1NwZWNpZXNTdXBwb3J0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2FycmF5LW1ldGhvZC1oYXMtc3BlY2llcy1zdXBwb3J0Jyk7XG52YXIgd2VsbEtub3duU3ltYm9sID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3dlbGwta25vd24tc3ltYm9sJyk7XG52YXIgVjhfVkVSU0lPTiA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9lbnZpcm9ubWVudC12OC12ZXJzaW9uJyk7XG5cbnZhciBJU19DT05DQVRfU1BSRUFEQUJMRSA9IHdlbGxLbm93blN5bWJvbCgnaXNDb25jYXRTcHJlYWRhYmxlJyk7XG5cbi8vIFdlIGNhbid0IHVzZSB0aGlzIGZlYXR1cmUgZGV0ZWN0aW9uIGluIFY4IHNpbmNlIGl0IGNhdXNlc1xuLy8gZGVvcHRpbWl6YXRpb24gYW5kIHNlcmlvdXMgcGVyZm9ybWFuY2UgZGVncmFkYXRpb25cbi8vIGh0dHBzOi8vZ2l0aHViLmNvbS96bG9pcm9jay9jb3JlLWpzL2lzc3Vlcy82NzlcbnZhciBJU19DT05DQVRfU1BSRUFEQUJMRV9TVVBQT1JUID0gVjhfVkVSU0lPTiA+PSA1MSB8fCAhZmFpbHMoZnVuY3Rpb24gKCkge1xuICB2YXIgYXJyYXkgPSBbXTtcbiAgYXJyYXlbSVNfQ09OQ0FUX1NQUkVBREFCTEVdID0gZmFsc2U7XG4gIHJldHVybiBhcnJheS5jb25jYXQoKVswXSAhPT0gYXJyYXk7XG59KTtcblxudmFyIGlzQ29uY2F0U3ByZWFkYWJsZSA9IGZ1bmN0aW9uIChPKSB7XG4gIGlmICghaXNPYmplY3QoTykpIHJldHVybiBmYWxzZTtcbiAgdmFyIHNwcmVhZGFibGUgPSBPW0lTX0NPTkNBVF9TUFJFQURBQkxFXTtcbiAgcmV0dXJuIHNwcmVhZGFibGUgIT09IHVuZGVmaW5lZCA/ICEhc3ByZWFkYWJsZSA6IGlzQXJyYXkoTyk7XG59O1xuXG52YXIgRk9SQ0VEID0gIUlTX0NPTkNBVF9TUFJFQURBQkxFX1NVUFBPUlQgfHwgIWFycmF5TWV0aG9kSGFzU3BlY2llc1N1cHBvcnQoJ2NvbmNhdCcpO1xuXG4vLyBgQXJyYXkucHJvdG90eXBlLmNvbmNhdGAgbWV0aG9kXG4vLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLWFycmF5LnByb3RvdHlwZS5jb25jYXRcbi8vIHdpdGggYWRkaW5nIHN1cHBvcnQgb2YgQEBpc0NvbmNhdFNwcmVhZGFibGUgYW5kIEBAc3BlY2llc1xuJCh7IHRhcmdldDogJ0FycmF5JywgcHJvdG86IHRydWUsIGFyaXR5OiAxLCBmb3JjZWQ6IEZPUkNFRCB9LCB7XG4gIC8vIGVzbGludC1kaXNhYmxlLW5leHQtbGluZSBuby11bnVzZWQtdmFycyAtLSByZXF1aXJlZCBmb3IgYC5sZW5ndGhgXG4gIGNvbmNhdDogZnVuY3Rpb24gY29uY2F0KGFyZykge1xuICAgIHZhciBPID0gdG9PYmplY3QodGhpcyk7XG4gICAgdmFyIEEgPSBhcnJheVNwZWNpZXNDcmVhdGUoTywgMCk7XG4gICAgdmFyIG4gPSAwO1xuICAgIHZhciBpLCBrLCBsZW5ndGgsIGxlbiwgRTtcbiAgICBmb3IgKGkgPSAtMSwgbGVuZ3RoID0gYXJndW1lbnRzLmxlbmd0aDsgaSA8IGxlbmd0aDsgaSsrKSB7XG4gICAgICBFID0gaSA9PT0gLTEgPyBPIDogYXJndW1lbnRzW2ldO1xuICAgICAgaWYgKGlzQ29uY2F0U3ByZWFkYWJsZShFKSkge1xuICAgICAgICBsZW4gPSBsZW5ndGhPZkFycmF5TGlrZShFKTtcbiAgICAgICAgZG9lc05vdEV4Y2VlZFNhZmVJbnRlZ2VyKG4gKyBsZW4pO1xuICAgICAgICBmb3IgKGsgPSAwOyBrIDwgbGVuOyBrKyssIG4rKykgaWYgKGsgaW4gRSkgY3JlYXRlUHJvcGVydHkoQSwgbiwgRVtrXSk7XG4gICAgICB9IGVsc2Uge1xuICAgICAgICBkb2VzTm90RXhjZWVkU2FmZUludGVnZXIobiArIDEpO1xuICAgICAgICBjcmVhdGVQcm9wZXJ0eShBLCBuKyssIEUpO1xuICAgICAgfVxuICAgIH1cbiAgICBBLmxlbmd0aCA9IG47XG4gICAgcmV0dXJuIEE7XG4gIH1cbn0pO1xuIiwiJ3VzZSBzdHJpY3QnO1xudmFyICQgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZXhwb3J0Jyk7XG52YXIgZ2xvYmFsVGhpcyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9nbG9iYWwtdGhpcycpO1xudmFyIHNjaGVkdWxlcnNGaXggPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvc2NoZWR1bGVycy1maXgnKTtcblxudmFyIHNldEludGVydmFsID0gc2NoZWR1bGVyc0ZpeChnbG9iYWxUaGlzLnNldEludGVydmFsLCB0cnVlKTtcblxuLy8gQnVuIC8gSUU5LSBzZXRJbnRlcnZhbCBhZGRpdGlvbmFsIHBhcmFtZXRlcnMgZml4XG4vLyBodHRwczovL2h0bWwuc3BlYy53aGF0d2cub3JnL211bHRpcGFnZS90aW1lcnMtYW5kLXVzZXItcHJvbXB0cy5odG1sI2RvbS1zZXRpbnRlcnZhbFxuJCh7IGdsb2JhbDogdHJ1ZSwgYmluZDogdHJ1ZSwgZm9yY2VkOiBnbG9iYWxUaGlzLnNldEludGVydmFsICE9PSBzZXRJbnRlcnZhbCB9LCB7XG4gIHNldEludGVydmFsOiBzZXRJbnRlcnZhbFxufSk7XG4iLCIndXNlIHN0cmljdCc7XG52YXIgJCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9leHBvcnQnKTtcbnZhciBnbG9iYWxUaGlzID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2dsb2JhbC10aGlzJyk7XG52YXIgc2NoZWR1bGVyc0ZpeCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9zY2hlZHVsZXJzLWZpeCcpO1xuXG52YXIgc2V0VGltZW91dCA9IHNjaGVkdWxlcnNGaXgoZ2xvYmFsVGhpcy5zZXRUaW1lb3V0LCB0cnVlKTtcblxuLy8gQnVuIC8gSUU5LSBzZXRUaW1lb3V0IGFkZGl0aW9uYWwgcGFyYW1ldGVycyBmaXhcbi8vIGh0dHBzOi8vaHRtbC5zcGVjLndoYXR3Zy5vcmcvbXVsdGlwYWdlL3RpbWVycy1hbmQtdXNlci1wcm9tcHRzLmh0bWwjZG9tLXNldHRpbWVvdXRcbiQoeyBnbG9iYWw6IHRydWUsIGJpbmQ6IHRydWUsIGZvcmNlZDogZ2xvYmFsVGhpcy5zZXRUaW1lb3V0ICE9PSBzZXRUaW1lb3V0IH0sIHtcbiAgc2V0VGltZW91dDogc2V0VGltZW91dFxufSk7XG4iLCIndXNlIHN0cmljdCc7XG4vLyBUT0RPOiBSZW1vdmUgdGhpcyBtb2R1bGUgZnJvbSBgY29yZS1qc0A0YCBzaW5jZSBpdCdzIHNwbGl0IHRvIG1vZHVsZXMgbGlzdGVkIGJlbG93XG5yZXF1aXJlKCcuLi9tb2R1bGVzL3dlYi5zZXQtaW50ZXJ2YWwnKTtcbnJlcXVpcmUoJy4uL21vZHVsZXMvd2ViLnNldC10aW1lb3V0Jyk7XG4iXSwibmFtZXMiOlsib3BlbkltYWdlVXBsb2FkIiwidHlwZSIsImlucHV0IiwiZG9jdW1lbnQiLCJjcmVhdGVFbGVtZW50IiwiYWNjZXB0Iiwib25jaGFuZ2UiLCJlIiwiZmlsZSIsInRhcmdldCIsImZpbGVzIiwicmVhZGVyIiwiRmlsZVJlYWRlciIsIm9ubG9hZCIsInF1ZXJ5U2VsZWN0b3IiLCJzcmMiLCJyZXN1bHQiLCJzdHlsZSIsImJhY2tncm91bmRJbWFnZSIsImNvbmNhdCIsInJlYWRBc0RhdGFVUkwiLCJjbGljayIsIm9wZW5FZGl0UHJvZmlsZU1vZGFsIiwibW9kYWwiLCJjbGFzc05hbWUiLCJpbm5lckhUTUwiLCJib2R5IiwiYXBwZW5kQ2hpbGQiLCJnZXRFbGVtZW50QnlJZCIsImFkZEV2ZW50TGlzdGVuZXIiLCJwcmV2ZW50RGVmYXVsdCIsInJlbW92ZSIsInNob3dTdWNjZXNzTWVzc2FnZSIsIm1lc3NhZ2UiLCJzdWNjZXNzTWVzc2FnZSIsInRleHRDb250ZW50Iiwic2V0VGltZW91dCIsImFkZFNob3BwaW5nSXRlbSIsInNob3BwaW5nTGlzdCIsIm5ld0l0ZW0iLCJlbGVtZW50cyIsInZhbHVlIiwicHJlcGVuZCIsInJlbW92ZVNob3BwaW5nSXRlbSIsImJ1dHRvbiIsImNsb3Nlc3QiXSwic291cmNlUm9vdCI6IiJ9