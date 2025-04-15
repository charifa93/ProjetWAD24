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


/***/ }),

/***/ "./node_modules/core-js/internals/add-to-unscopables.js":
/*!**************************************************************!*\
  !*** ./node_modules/core-js/internals/add-to-unscopables.js ***!
  \**************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var wellKnownSymbol = __webpack_require__(/*! ../internals/well-known-symbol */ "./node_modules/core-js/internals/well-known-symbol.js");
var create = __webpack_require__(/*! ../internals/object-create */ "./node_modules/core-js/internals/object-create.js");
var defineProperty = (__webpack_require__(/*! ../internals/object-define-property */ "./node_modules/core-js/internals/object-define-property.js").f);

var UNSCOPABLES = wellKnownSymbol('unscopables');
var ArrayPrototype = Array.prototype;

// Array.prototype[@@unscopables]
// https://tc39.es/ecma262/#sec-array.prototype-@@unscopables
if (ArrayPrototype[UNSCOPABLES] === undefined) {
  defineProperty(ArrayPrototype, UNSCOPABLES, {
    configurable: true,
    value: create(null)
  });
}

// add a key to Array.prototype[@@unscopables]
module.exports = function (key) {
  ArrayPrototype[UNSCOPABLES][key] = true;
};


/***/ }),

/***/ "./node_modules/core-js/internals/iterate.js":
/*!***************************************************!*\
  !*** ./node_modules/core-js/internals/iterate.js ***!
  \***************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var bind = __webpack_require__(/*! ../internals/function-bind-context */ "./node_modules/core-js/internals/function-bind-context.js");
var call = __webpack_require__(/*! ../internals/function-call */ "./node_modules/core-js/internals/function-call.js");
var anObject = __webpack_require__(/*! ../internals/an-object */ "./node_modules/core-js/internals/an-object.js");
var tryToString = __webpack_require__(/*! ../internals/try-to-string */ "./node_modules/core-js/internals/try-to-string.js");
var isArrayIteratorMethod = __webpack_require__(/*! ../internals/is-array-iterator-method */ "./node_modules/core-js/internals/is-array-iterator-method.js");
var lengthOfArrayLike = __webpack_require__(/*! ../internals/length-of-array-like */ "./node_modules/core-js/internals/length-of-array-like.js");
var isPrototypeOf = __webpack_require__(/*! ../internals/object-is-prototype-of */ "./node_modules/core-js/internals/object-is-prototype-of.js");
var getIterator = __webpack_require__(/*! ../internals/get-iterator */ "./node_modules/core-js/internals/get-iterator.js");
var getIteratorMethod = __webpack_require__(/*! ../internals/get-iterator-method */ "./node_modules/core-js/internals/get-iterator-method.js");
var iteratorClose = __webpack_require__(/*! ../internals/iterator-close */ "./node_modules/core-js/internals/iterator-close.js");

var $TypeError = TypeError;

var Result = function (stopped, result) {
  this.stopped = stopped;
  this.result = result;
};

var ResultPrototype = Result.prototype;

module.exports = function (iterable, unboundFunction, options) {
  var that = options && options.that;
  var AS_ENTRIES = !!(options && options.AS_ENTRIES);
  var IS_RECORD = !!(options && options.IS_RECORD);
  var IS_ITERATOR = !!(options && options.IS_ITERATOR);
  var INTERRUPTED = !!(options && options.INTERRUPTED);
  var fn = bind(unboundFunction, that);
  var iterator, iterFn, index, length, result, next, step;

  var stop = function (condition) {
    if (iterator) iteratorClose(iterator, 'normal', condition);
    return new Result(true, condition);
  };

  var callFn = function (value) {
    if (AS_ENTRIES) {
      anObject(value);
      return INTERRUPTED ? fn(value[0], value[1], stop) : fn(value[0], value[1]);
    } return INTERRUPTED ? fn(value, stop) : fn(value);
  };

  if (IS_RECORD) {
    iterator = iterable.iterator;
  } else if (IS_ITERATOR) {
    iterator = iterable;
  } else {
    iterFn = getIteratorMethod(iterable);
    if (!iterFn) throw new $TypeError(tryToString(iterable) + ' is not iterable');
    // optimisation for array iterators
    if (isArrayIteratorMethod(iterFn)) {
      for (index = 0, length = lengthOfArrayLike(iterable); length > index; index++) {
        result = callFn(iterable[index]);
        if (result && isPrototypeOf(ResultPrototype, result)) return result;
      } return new Result(false);
    }
    iterator = getIterator(iterable, iterFn);
  }

  next = IS_RECORD ? iterable.next : iterator.next;
  while (!(step = call(next, iterator)).done) {
    try {
      result = callFn(step.value);
    } catch (error) {
      iteratorClose(iterator, 'throw', error);
    }
    if (typeof result == 'object' && result && isPrototypeOf(ResultPrototype, result)) return result;
  } return new Result(false);
};


/***/ }),

/***/ "./node_modules/core-js/modules/es.array.iterator.js":
/*!***********************************************************!*\
  !*** ./node_modules/core-js/modules/es.array.iterator.js ***!
  \***********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var toIndexedObject = __webpack_require__(/*! ../internals/to-indexed-object */ "./node_modules/core-js/internals/to-indexed-object.js");
var addToUnscopables = __webpack_require__(/*! ../internals/add-to-unscopables */ "./node_modules/core-js/internals/add-to-unscopables.js");
var Iterators = __webpack_require__(/*! ../internals/iterators */ "./node_modules/core-js/internals/iterators.js");
var InternalStateModule = __webpack_require__(/*! ../internals/internal-state */ "./node_modules/core-js/internals/internal-state.js");
var defineProperty = (__webpack_require__(/*! ../internals/object-define-property */ "./node_modules/core-js/internals/object-define-property.js").f);
var defineIterator = __webpack_require__(/*! ../internals/iterator-define */ "./node_modules/core-js/internals/iterator-define.js");
var createIterResultObject = __webpack_require__(/*! ../internals/create-iter-result-object */ "./node_modules/core-js/internals/create-iter-result-object.js");
var IS_PURE = __webpack_require__(/*! ../internals/is-pure */ "./node_modules/core-js/internals/is-pure.js");
var DESCRIPTORS = __webpack_require__(/*! ../internals/descriptors */ "./node_modules/core-js/internals/descriptors.js");

var ARRAY_ITERATOR = 'Array Iterator';
var setInternalState = InternalStateModule.set;
var getInternalState = InternalStateModule.getterFor(ARRAY_ITERATOR);

// `Array.prototype.entries` method
// https://tc39.es/ecma262/#sec-array.prototype.entries
// `Array.prototype.keys` method
// https://tc39.es/ecma262/#sec-array.prototype.keys
// `Array.prototype.values` method
// https://tc39.es/ecma262/#sec-array.prototype.values
// `Array.prototype[@@iterator]` method
// https://tc39.es/ecma262/#sec-array.prototype-@@iterator
// `CreateArrayIterator` internal method
// https://tc39.es/ecma262/#sec-createarrayiterator
module.exports = defineIterator(Array, 'Array', function (iterated, kind) {
  setInternalState(this, {
    type: ARRAY_ITERATOR,
    target: toIndexedObject(iterated), // target
    index: 0,                          // next index
    kind: kind                         // kind
  });
// `%ArrayIteratorPrototype%.next` method
// https://tc39.es/ecma262/#sec-%arrayiteratorprototype%.next
}, function () {
  var state = getInternalState(this);
  var target = state.target;
  var index = state.index++;
  if (!target || index >= target.length) {
    state.target = null;
    return createIterResultObject(undefined, true);
  }
  switch (state.kind) {
    case 'keys': return createIterResultObject(index, false);
    case 'values': return createIterResultObject(target[index], false);
  } return createIterResultObject([index, target[index]], false);
}, 'values');

// argumentsList[@@iterator] is %ArrayProto_values%
// https://tc39.es/ecma262/#sec-createunmappedargumentsobject
// https://tc39.es/ecma262/#sec-createmappedargumentsobject
var values = Iterators.Arguments = Iterators.Array;

// https://tc39.es/ecma262/#sec-array.prototype-@@unscopables
addToUnscopables('keys');
addToUnscopables('values');
addToUnscopables('entries');

// V8 ~ Chrome 45- bug
if (!IS_PURE && DESCRIPTORS && values.name !== 'values') try {
  defineProperty(values, 'name', { value: 'values' });
} catch (error) { /* empty */ }


/***/ }),

/***/ "./node_modules/core-js/modules/es.object.from-entries.js":
/*!****************************************************************!*\
  !*** ./node_modules/core-js/modules/es.object.from-entries.js ***!
  \****************************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {


var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var iterate = __webpack_require__(/*! ../internals/iterate */ "./node_modules/core-js/internals/iterate.js");
var createProperty = __webpack_require__(/*! ../internals/create-property */ "./node_modules/core-js/internals/create-property.js");

// `Object.fromEntries` method
// https://github.com/tc39/proposal-object-from-entries
$({ target: 'Object', stat: true }, {
  fromEntries: function fromEntries(iterable) {
    var obj = {};
    iterate(iterable, function (k, v) {
      createProperty(obj, k, v);
    }, { AS_ENTRIES: true });
    return obj;
  }
});


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_internals_array-species-create_js-node_modules_core-js_internals-fc1c90","vendors-node_modules_core-js_internals_create-property_js-node_modules_core-js_internals_obje-317179","vendors-node_modules_core-js_internals_create-iter-result-object_js-node_modules_core-js_inte-d86c6a"], () => (__webpack_exec__("./assets/connexion.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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LGlGQUEwQjs7QUFFcEQ7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsR0FBRztBQUNIO0FBQ0E7QUFDQSxDQUFDO0FBQ0Q7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0osQ0FBQzs7QUFFRDtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0EsbUNBQW1DLGlCQUFpQjtBQUNwRCxFQUFFLGdCQUFnQjs7Ozs7Ozs7Ozs7QUM3REw7QUFDYixRQUFRLG1CQUFPLENBQUMsdUVBQXFCO0FBQ3JDLGNBQWMsbUJBQU8sQ0FBQyx5RUFBc0I7QUFDNUMscUJBQXFCLG1CQUFPLENBQUMseUZBQThCOztBQUUzRDtBQUNBO0FBQ0EsSUFBSSw4QkFBOEI7QUFDbEM7QUFDQTtBQUNBO0FBQ0E7QUFDQSxLQUFLLElBQUksa0JBQWtCO0FBQzNCO0FBQ0E7QUFDQSxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Nvbm5leGlvbi5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL2Nvbm5leGlvbi5jc3M/MGE3MSIsIndlYnBhY2s6Ly8vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvYWRkLXRvLXVuc2NvcGFibGVzLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL2ludGVybmFscy9pdGVyYXRlLmpzIiwid2VicGFjazovLy8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL21vZHVsZXMvZXMuYXJyYXkuaXRlcmF0b3IuanMiLCJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvbW9kdWxlcy9lcy5vYmplY3QuZnJvbS1lbnRyaWVzLmpzIl0sInNvdXJjZXNDb250ZW50IjpbImltcG9ydCAnLi9zdHlsZXMvY29ubmV4aW9uLmNzcyc7XHJcblxyXG50YWlsd2luZC5jb25maWcgPSB7XHJcbiAgICB0aGVtZToge1xyXG4gICAgICAgIGV4dGVuZDoge1xyXG4gICAgICAgICAgICBjb2xvcnM6IHtcclxuICAgICAgICAgICAgICAgIHByaW1hcnk6ICcjRkY2QjZCJyxcclxuICAgICAgICAgICAgICAgIHNlY29uZGFyeTogJyM0RUNEQzQnXHJcbiAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgIGJvcmRlclJhZGl1czoge1xyXG4gICAgICAgICAgICAgICAgJ25vbmUnOiAnMHB4JyxcclxuICAgICAgICAgICAgICAgICdzbSc6ICc0cHgnLFxyXG4gICAgICAgICAgICAgICAgREVGQVVMVDogJzhweCcsXHJcbiAgICAgICAgICAgICAgICAnbWQnOiAnMTJweCcsXHJcbiAgICAgICAgICAgICAgICAnbGcnOiAnMTZweCcsXHJcbiAgICAgICAgICAgICAgICAneGwnOiAnMjBweCcsXHJcbiAgICAgICAgICAgICAgICAnMnhsJzogJzI0cHgnLFxyXG4gICAgICAgICAgICAgICAgJzN4bCc6ICczMnB4JyxcclxuICAgICAgICAgICAgICAgICdmdWxsJzogJzk5OTlweCcsXHJcbiAgICAgICAgICAgICAgICAnYnV0dG9uJzogJzhweCdcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgIH1cclxufVxyXG5cclxuZnVuY3Rpb24gc3dpdGNoRm9ybSh0eXBlKSB7XHJcbiAgICBjb25zdCBmb3JtcyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdmb3JtcycpO1xyXG4gICAgY29uc3QgbG9naW5UYWIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbG9naW5UYWInKTtcclxuICAgIGNvbnN0IHJlZ2lzdGVyVGFiID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3JlZ2lzdGVyVGFiJyk7XHJcbiAgICBpZiAodHlwZSA9PT0gJ3JlZ2lzdGVyJykge1xyXG4gICAgICAgIGZvcm1zLmNsYXNzTGlzdC5hZGQoJ3JlZ2lzdGVyJyk7XHJcbiAgICAgICAgcmVnaXN0ZXJUYWIuY2xhc3NMaXN0LmFkZCgnYmctcHJpbWFyeScsICd0ZXh0LXdoaXRlJyk7XHJcbiAgICAgICAgcmVnaXN0ZXJUYWIuY2xhc3NMaXN0LnJlbW92ZSgndGV4dC1ncmF5LTYwMCcpO1xyXG4gICAgICAgIGxvZ2luVGFiLmNsYXNzTGlzdC5yZW1vdmUoJ2JnLXByaW1hcnknLCAndGV4dC13aGl0ZScpO1xyXG4gICAgICAgIGxvZ2luVGFiLmNsYXNzTGlzdC5hZGQoJ3RleHQtZ3JheS02MDAnKTtcclxuICAgIH0gZWxzZSB7XHJcbiAgICAgICAgZm9ybXMuY2xhc3NMaXN0LnJlbW92ZSgncmVnaXN0ZXInKTtcclxuICAgICAgICBsb2dpblRhYi5jbGFzc0xpc3QuYWRkKCdiZy1wcmltYXJ5JywgJ3RleHQtd2hpdGUnKTtcclxuICAgICAgICBsb2dpblRhYi5jbGFzc0xpc3QucmVtb3ZlKCd0ZXh0LWdyYXktNjAwJyk7XHJcbiAgICAgICAgcmVnaXN0ZXJUYWIuY2xhc3NMaXN0LnJlbW92ZSgnYmctcHJpbWFyeScsICd0ZXh0LXdoaXRlJyk7XHJcbiAgICAgICAgcmVnaXN0ZXJUYWIuY2xhc3NMaXN0LmFkZCgndGV4dC1ncmF5LTYwMCcpO1xyXG4gICAgfVxyXG59XHJcblxyXG5mdW5jdGlvbiB0b2dnbGVQYXNzd29yZChidXR0b24pIHtcclxuICAgIGNvbnN0IGlucHV0ID0gYnV0dG9uLnBhcmVudEVsZW1lbnQucXVlcnlTZWxlY3RvcignaW5wdXQnKTtcclxuICAgIGNvbnN0IGljb24gPSBidXR0b24ucXVlcnlTZWxlY3RvcignaScpO1xyXG4gICAgXHJcbiAgICBpZiAoaW5wdXQudHlwZSA9PT0gJ3Bhc3N3b3JkJykge1xyXG4gICAgICAgIGlucHV0LnR5cGUgPSAndGV4dCc7XHJcbiAgICAgICAgaWNvbi5jbGFzc0xpc3QucmVtb3ZlKCdyaS1leWUtbGluZScpO1xyXG4gICAgICAgIGljb24uY2xhc3NMaXN0LmFkZCgncmktZXllLW9mZi1saW5lJyk7XHJcbiAgICB9IGVsc2Uge1xyXG4gICAgICAgIGlucHV0LnR5cGUgPSAncGFzc3dvcmQnO1xyXG4gICAgICAgIGljb24uY2xhc3NMaXN0LnJlbW92ZSgncmktZXllLW9mZi1saW5lJyk7XHJcbiAgICAgICAgaWNvbi5jbGFzc0xpc3QuYWRkKCdyaS1leWUtbGluZScpO1xyXG4gICAgfVxyXG59XHJcblxyXG5kb2N1bWVudC5nZXRFbGVtZW50QnlJZCgncHJvZmlsZVBpY3R1cmUnKS5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCBmdW5jdGlvbihlKSB7XHJcbiAgICBjb25zdCBmaWxlID0gZS50YXJnZXQuZmlsZXNbMF07XHJcbiAgICBpZiAoZmlsZSkge1xyXG4gICAgICAgIGNvbnN0IHJlYWRlciA9IG5ldyBGaWxlUmVhZGVyKCk7XHJcbiAgICAgICAgcmVhZGVyLm9ubG9hZCA9IGZ1bmN0aW9uKGUpIHtcclxuICAgICAgICAgICAgY29uc3QgY29udGFpbmVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmJvcmRlci1kYXNoZWQnKTtcclxuICAgICAgICAgICAgY29udGFpbmVyLmlubmVySFRNTCA9IGBcclxuICAgICAgICAgICAgICAgIDxpbWcgc3JjPVwiJHtlLnRhcmdldC5yZXN1bHR9XCIgY2xhc3M9XCJ3LTMyIGgtMzIgcm91bmRlZC1mdWxsIG14LWF1dG8gbWItMiBvYmplY3QtY292ZXJcIj5cclxuICAgICAgICAgICAgICAgIDxwIGNsYXNzPVwidGV4dC1zbSB0ZXh0LWdyYXktNjAwXCI+Q2xpcXVleiBwb3VyIGNoYW5nZXIgbGEgcGhvdG88L3A+XHJcbiAgICAgICAgICAgIGA7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIHJlYWRlci5yZWFkQXNEYXRhVVJMKGZpbGUpO1xyXG4gICAgfVxyXG59KTtcclxuXHJcbmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ2Zvcm0nKS5mb3JFYWNoKGZvcm0gPT4ge1xyXG4gICAgZm9ybS5hZGRFdmVudExpc3RlbmVyKCdzdWJtaXQnLCBmdW5jdGlvbihlKSB7XHJcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAgICAgIGNvbnN0IGZvcm1EYXRhID0gbmV3IEZvcm1EYXRhKGZvcm0pO1xyXG4gICAgICAgIGNvbnN0IGRhdGEgPSBPYmplY3QuZnJvbUVudHJpZXMoZm9ybURhdGEpO1xyXG4gICAgICAgIGNvbnNvbGUubG9nKCdGb3JtIHN1Ym1pdHRlZDonLCBkYXRhKTtcclxuICAgIH0pO1xyXG59KTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIndXNlIHN0cmljdCc7XG52YXIgd2VsbEtub3duU3ltYm9sID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3dlbGwta25vd24tc3ltYm9sJyk7XG52YXIgY3JlYXRlID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL29iamVjdC1jcmVhdGUnKTtcbnZhciBkZWZpbmVQcm9wZXJ0eSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9vYmplY3QtZGVmaW5lLXByb3BlcnR5JykuZjtcblxudmFyIFVOU0NPUEFCTEVTID0gd2VsbEtub3duU3ltYm9sKCd1bnNjb3BhYmxlcycpO1xudmFyIEFycmF5UHJvdG90eXBlID0gQXJyYXkucHJvdG90eXBlO1xuXG4vLyBBcnJheS5wcm90b3R5cGVbQEB1bnNjb3BhYmxlc11cbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtYXJyYXkucHJvdG90eXBlLUBAdW5zY29wYWJsZXNcbmlmIChBcnJheVByb3RvdHlwZVtVTlNDT1BBQkxFU10gPT09IHVuZGVmaW5lZCkge1xuICBkZWZpbmVQcm9wZXJ0eShBcnJheVByb3RvdHlwZSwgVU5TQ09QQUJMRVMsIHtcbiAgICBjb25maWd1cmFibGU6IHRydWUsXG4gICAgdmFsdWU6IGNyZWF0ZShudWxsKVxuICB9KTtcbn1cblxuLy8gYWRkIGEga2V5IHRvIEFycmF5LnByb3RvdHlwZVtAQHVuc2NvcGFibGVzXVxubW9kdWxlLmV4cG9ydHMgPSBmdW5jdGlvbiAoa2V5KSB7XG4gIEFycmF5UHJvdG90eXBlW1VOU0NPUEFCTEVTXVtrZXldID0gdHJ1ZTtcbn07XG4iLCIndXNlIHN0cmljdCc7XG52YXIgYmluZCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mdW5jdGlvbi1iaW5kLWNvbnRleHQnKTtcbnZhciBjYWxsID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2Z1bmN0aW9uLWNhbGwnKTtcbnZhciBhbk9iamVjdCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9hbi1vYmplY3QnKTtcbnZhciB0cnlUb1N0cmluZyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy90cnktdG8tc3RyaW5nJyk7XG52YXIgaXNBcnJheUl0ZXJhdG9yTWV0aG9kID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2lzLWFycmF5LWl0ZXJhdG9yLW1ldGhvZCcpO1xudmFyIGxlbmd0aE9mQXJyYXlMaWtlID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2xlbmd0aC1vZi1hcnJheS1saWtlJyk7XG52YXIgaXNQcm90b3R5cGVPZiA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9vYmplY3QtaXMtcHJvdG90eXBlLW9mJyk7XG52YXIgZ2V0SXRlcmF0b3IgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZ2V0LWl0ZXJhdG9yJyk7XG52YXIgZ2V0SXRlcmF0b3JNZXRob2QgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZ2V0LWl0ZXJhdG9yLW1ldGhvZCcpO1xudmFyIGl0ZXJhdG9yQ2xvc2UgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXRlcmF0b3ItY2xvc2UnKTtcblxudmFyICRUeXBlRXJyb3IgPSBUeXBlRXJyb3I7XG5cbnZhciBSZXN1bHQgPSBmdW5jdGlvbiAoc3RvcHBlZCwgcmVzdWx0KSB7XG4gIHRoaXMuc3RvcHBlZCA9IHN0b3BwZWQ7XG4gIHRoaXMucmVzdWx0ID0gcmVzdWx0O1xufTtcblxudmFyIFJlc3VsdFByb3RvdHlwZSA9IFJlc3VsdC5wcm90b3R5cGU7XG5cbm1vZHVsZS5leHBvcnRzID0gZnVuY3Rpb24gKGl0ZXJhYmxlLCB1bmJvdW5kRnVuY3Rpb24sIG9wdGlvbnMpIHtcbiAgdmFyIHRoYXQgPSBvcHRpb25zICYmIG9wdGlvbnMudGhhdDtcbiAgdmFyIEFTX0VOVFJJRVMgPSAhIShvcHRpb25zICYmIG9wdGlvbnMuQVNfRU5UUklFUyk7XG4gIHZhciBJU19SRUNPUkQgPSAhIShvcHRpb25zICYmIG9wdGlvbnMuSVNfUkVDT1JEKTtcbiAgdmFyIElTX0lURVJBVE9SID0gISEob3B0aW9ucyAmJiBvcHRpb25zLklTX0lURVJBVE9SKTtcbiAgdmFyIElOVEVSUlVQVEVEID0gISEob3B0aW9ucyAmJiBvcHRpb25zLklOVEVSUlVQVEVEKTtcbiAgdmFyIGZuID0gYmluZCh1bmJvdW5kRnVuY3Rpb24sIHRoYXQpO1xuICB2YXIgaXRlcmF0b3IsIGl0ZXJGbiwgaW5kZXgsIGxlbmd0aCwgcmVzdWx0LCBuZXh0LCBzdGVwO1xuXG4gIHZhciBzdG9wID0gZnVuY3Rpb24gKGNvbmRpdGlvbikge1xuICAgIGlmIChpdGVyYXRvcikgaXRlcmF0b3JDbG9zZShpdGVyYXRvciwgJ25vcm1hbCcsIGNvbmRpdGlvbik7XG4gICAgcmV0dXJuIG5ldyBSZXN1bHQodHJ1ZSwgY29uZGl0aW9uKTtcbiAgfTtcblxuICB2YXIgY2FsbEZuID0gZnVuY3Rpb24gKHZhbHVlKSB7XG4gICAgaWYgKEFTX0VOVFJJRVMpIHtcbiAgICAgIGFuT2JqZWN0KHZhbHVlKTtcbiAgICAgIHJldHVybiBJTlRFUlJVUFRFRCA/IGZuKHZhbHVlWzBdLCB2YWx1ZVsxXSwgc3RvcCkgOiBmbih2YWx1ZVswXSwgdmFsdWVbMV0pO1xuICAgIH0gcmV0dXJuIElOVEVSUlVQVEVEID8gZm4odmFsdWUsIHN0b3ApIDogZm4odmFsdWUpO1xuICB9O1xuXG4gIGlmIChJU19SRUNPUkQpIHtcbiAgICBpdGVyYXRvciA9IGl0ZXJhYmxlLml0ZXJhdG9yO1xuICB9IGVsc2UgaWYgKElTX0lURVJBVE9SKSB7XG4gICAgaXRlcmF0b3IgPSBpdGVyYWJsZTtcbiAgfSBlbHNlIHtcbiAgICBpdGVyRm4gPSBnZXRJdGVyYXRvck1ldGhvZChpdGVyYWJsZSk7XG4gICAgaWYgKCFpdGVyRm4pIHRocm93IG5ldyAkVHlwZUVycm9yKHRyeVRvU3RyaW5nKGl0ZXJhYmxlKSArICcgaXMgbm90IGl0ZXJhYmxlJyk7XG4gICAgLy8gb3B0aW1pc2F0aW9uIGZvciBhcnJheSBpdGVyYXRvcnNcbiAgICBpZiAoaXNBcnJheUl0ZXJhdG9yTWV0aG9kKGl0ZXJGbikpIHtcbiAgICAgIGZvciAoaW5kZXggPSAwLCBsZW5ndGggPSBsZW5ndGhPZkFycmF5TGlrZShpdGVyYWJsZSk7IGxlbmd0aCA+IGluZGV4OyBpbmRleCsrKSB7XG4gICAgICAgIHJlc3VsdCA9IGNhbGxGbihpdGVyYWJsZVtpbmRleF0pO1xuICAgICAgICBpZiAocmVzdWx0ICYmIGlzUHJvdG90eXBlT2YoUmVzdWx0UHJvdG90eXBlLCByZXN1bHQpKSByZXR1cm4gcmVzdWx0O1xuICAgICAgfSByZXR1cm4gbmV3IFJlc3VsdChmYWxzZSk7XG4gICAgfVxuICAgIGl0ZXJhdG9yID0gZ2V0SXRlcmF0b3IoaXRlcmFibGUsIGl0ZXJGbik7XG4gIH1cblxuICBuZXh0ID0gSVNfUkVDT1JEID8gaXRlcmFibGUubmV4dCA6IGl0ZXJhdG9yLm5leHQ7XG4gIHdoaWxlICghKHN0ZXAgPSBjYWxsKG5leHQsIGl0ZXJhdG9yKSkuZG9uZSkge1xuICAgIHRyeSB7XG4gICAgICByZXN1bHQgPSBjYWxsRm4oc3RlcC52YWx1ZSk7XG4gICAgfSBjYXRjaCAoZXJyb3IpIHtcbiAgICAgIGl0ZXJhdG9yQ2xvc2UoaXRlcmF0b3IsICd0aHJvdycsIGVycm9yKTtcbiAgICB9XG4gICAgaWYgKHR5cGVvZiByZXN1bHQgPT0gJ29iamVjdCcgJiYgcmVzdWx0ICYmIGlzUHJvdG90eXBlT2YoUmVzdWx0UHJvdG90eXBlLCByZXN1bHQpKSByZXR1cm4gcmVzdWx0O1xuICB9IHJldHVybiBuZXcgUmVzdWx0KGZhbHNlKTtcbn07XG4iLCIndXNlIHN0cmljdCc7XG52YXIgdG9JbmRleGVkT2JqZWN0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3RvLWluZGV4ZWQtb2JqZWN0Jyk7XG52YXIgYWRkVG9VbnNjb3BhYmxlcyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9hZGQtdG8tdW5zY29wYWJsZXMnKTtcbnZhciBJdGVyYXRvcnMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXRlcmF0b3JzJyk7XG52YXIgSW50ZXJuYWxTdGF0ZU1vZHVsZSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pbnRlcm5hbC1zdGF0ZScpO1xudmFyIGRlZmluZVByb3BlcnR5ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL29iamVjdC1kZWZpbmUtcHJvcGVydHknKS5mO1xudmFyIGRlZmluZUl0ZXJhdG9yID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2l0ZXJhdG9yLWRlZmluZScpO1xudmFyIGNyZWF0ZUl0ZXJSZXN1bHRPYmplY3QgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvY3JlYXRlLWl0ZXItcmVzdWx0LW9iamVjdCcpO1xudmFyIElTX1BVUkUgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXMtcHVyZScpO1xudmFyIERFU0NSSVBUT1JTID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2Rlc2NyaXB0b3JzJyk7XG5cbnZhciBBUlJBWV9JVEVSQVRPUiA9ICdBcnJheSBJdGVyYXRvcic7XG52YXIgc2V0SW50ZXJuYWxTdGF0ZSA9IEludGVybmFsU3RhdGVNb2R1bGUuc2V0O1xudmFyIGdldEludGVybmFsU3RhdGUgPSBJbnRlcm5hbFN0YXRlTW9kdWxlLmdldHRlckZvcihBUlJBWV9JVEVSQVRPUik7XG5cbi8vIGBBcnJheS5wcm90b3R5cGUuZW50cmllc2AgbWV0aG9kXG4vLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLWFycmF5LnByb3RvdHlwZS5lbnRyaWVzXG4vLyBgQXJyYXkucHJvdG90eXBlLmtleXNgIG1ldGhvZFxuLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1hcnJheS5wcm90b3R5cGUua2V5c1xuLy8gYEFycmF5LnByb3RvdHlwZS52YWx1ZXNgIG1ldGhvZFxuLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1hcnJheS5wcm90b3R5cGUudmFsdWVzXG4vLyBgQXJyYXkucHJvdG90eXBlW0BAaXRlcmF0b3JdYCBtZXRob2Rcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtYXJyYXkucHJvdG90eXBlLUBAaXRlcmF0b3Jcbi8vIGBDcmVhdGVBcnJheUl0ZXJhdG9yYCBpbnRlcm5hbCBtZXRob2Rcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtY3JlYXRlYXJyYXlpdGVyYXRvclxubW9kdWxlLmV4cG9ydHMgPSBkZWZpbmVJdGVyYXRvcihBcnJheSwgJ0FycmF5JywgZnVuY3Rpb24gKGl0ZXJhdGVkLCBraW5kKSB7XG4gIHNldEludGVybmFsU3RhdGUodGhpcywge1xuICAgIHR5cGU6IEFSUkFZX0lURVJBVE9SLFxuICAgIHRhcmdldDogdG9JbmRleGVkT2JqZWN0KGl0ZXJhdGVkKSwgLy8gdGFyZ2V0XG4gICAgaW5kZXg6IDAsICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBuZXh0IGluZGV4XG4gICAga2luZDoga2luZCAgICAgICAgICAgICAgICAgICAgICAgICAvLyBraW5kXG4gIH0pO1xuLy8gYCVBcnJheUl0ZXJhdG9yUHJvdG90eXBlJS5uZXh0YCBtZXRob2Rcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtJWFycmF5aXRlcmF0b3Jwcm90b3R5cGUlLm5leHRcbn0sIGZ1bmN0aW9uICgpIHtcbiAgdmFyIHN0YXRlID0gZ2V0SW50ZXJuYWxTdGF0ZSh0aGlzKTtcbiAgdmFyIHRhcmdldCA9IHN0YXRlLnRhcmdldDtcbiAgdmFyIGluZGV4ID0gc3RhdGUuaW5kZXgrKztcbiAgaWYgKCF0YXJnZXQgfHwgaW5kZXggPj0gdGFyZ2V0Lmxlbmd0aCkge1xuICAgIHN0YXRlLnRhcmdldCA9IG51bGw7XG4gICAgcmV0dXJuIGNyZWF0ZUl0ZXJSZXN1bHRPYmplY3QodW5kZWZpbmVkLCB0cnVlKTtcbiAgfVxuICBzd2l0Y2ggKHN0YXRlLmtpbmQpIHtcbiAgICBjYXNlICdrZXlzJzogcmV0dXJuIGNyZWF0ZUl0ZXJSZXN1bHRPYmplY3QoaW5kZXgsIGZhbHNlKTtcbiAgICBjYXNlICd2YWx1ZXMnOiByZXR1cm4gY3JlYXRlSXRlclJlc3VsdE9iamVjdCh0YXJnZXRbaW5kZXhdLCBmYWxzZSk7XG4gIH0gcmV0dXJuIGNyZWF0ZUl0ZXJSZXN1bHRPYmplY3QoW2luZGV4LCB0YXJnZXRbaW5kZXhdXSwgZmFsc2UpO1xufSwgJ3ZhbHVlcycpO1xuXG4vLyBhcmd1bWVudHNMaXN0W0BAaXRlcmF0b3JdIGlzICVBcnJheVByb3RvX3ZhbHVlcyVcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtY3JlYXRldW5tYXBwZWRhcmd1bWVudHNvYmplY3Rcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtY3JlYXRlbWFwcGVkYXJndW1lbnRzb2JqZWN0XG52YXIgdmFsdWVzID0gSXRlcmF0b3JzLkFyZ3VtZW50cyA9IEl0ZXJhdG9ycy5BcnJheTtcblxuLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1hcnJheS5wcm90b3R5cGUtQEB1bnNjb3BhYmxlc1xuYWRkVG9VbnNjb3BhYmxlcygna2V5cycpO1xuYWRkVG9VbnNjb3BhYmxlcygndmFsdWVzJyk7XG5hZGRUb1Vuc2NvcGFibGVzKCdlbnRyaWVzJyk7XG5cbi8vIFY4IH4gQ2hyb21lIDQ1LSBidWdcbmlmICghSVNfUFVSRSAmJiBERVNDUklQVE9SUyAmJiB2YWx1ZXMubmFtZSAhPT0gJ3ZhbHVlcycpIHRyeSB7XG4gIGRlZmluZVByb3BlcnR5KHZhbHVlcywgJ25hbWUnLCB7IHZhbHVlOiAndmFsdWVzJyB9KTtcbn0gY2F0Y2ggKGVycm9yKSB7IC8qIGVtcHR5ICovIH1cbiIsIid1c2Ugc3RyaWN0JztcbnZhciAkID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2V4cG9ydCcpO1xudmFyIGl0ZXJhdGUgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXRlcmF0ZScpO1xudmFyIGNyZWF0ZVByb3BlcnR5ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2NyZWF0ZS1wcm9wZXJ0eScpO1xuXG4vLyBgT2JqZWN0LmZyb21FbnRyaWVzYCBtZXRob2Rcbi8vIGh0dHBzOi8vZ2l0aHViLmNvbS90YzM5L3Byb3Bvc2FsLW9iamVjdC1mcm9tLWVudHJpZXNcbiQoeyB0YXJnZXQ6ICdPYmplY3QnLCBzdGF0OiB0cnVlIH0sIHtcbiAgZnJvbUVudHJpZXM6IGZ1bmN0aW9uIGZyb21FbnRyaWVzKGl0ZXJhYmxlKSB7XG4gICAgdmFyIG9iaiA9IHt9O1xuICAgIGl0ZXJhdGUoaXRlcmFibGUsIGZ1bmN0aW9uIChrLCB2KSB7XG4gICAgICBjcmVhdGVQcm9wZXJ0eShvYmosIGssIHYpO1xuICAgIH0sIHsgQVNfRU5UUklFUzogdHJ1ZSB9KTtcbiAgICByZXR1cm4gb2JqO1xuICB9XG59KTtcbiJdLCJuYW1lcyI6WyJ0YWlsd2luZCIsImNvbmZpZyIsInRoZW1lIiwiZXh0ZW5kIiwiY29sb3JzIiwicHJpbWFyeSIsInNlY29uZGFyeSIsImJvcmRlclJhZGl1cyIsIkRFRkFVTFQiLCJzd2l0Y2hGb3JtIiwidHlwZSIsImZvcm1zIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImxvZ2luVGFiIiwicmVnaXN0ZXJUYWIiLCJjbGFzc0xpc3QiLCJhZGQiLCJyZW1vdmUiLCJ0b2dnbGVQYXNzd29yZCIsImJ1dHRvbiIsImlucHV0IiwicGFyZW50RWxlbWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJpY29uIiwiYWRkRXZlbnRMaXN0ZW5lciIsImUiLCJmaWxlIiwidGFyZ2V0IiwiZmlsZXMiLCJyZWFkZXIiLCJGaWxlUmVhZGVyIiwib25sb2FkIiwiY29udGFpbmVyIiwiaW5uZXJIVE1MIiwiY29uY2F0IiwicmVzdWx0IiwicmVhZEFzRGF0YVVSTCIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJmb3JFYWNoIiwiZm9ybSIsInByZXZlbnREZWZhdWx0IiwiZm9ybURhdGEiLCJGb3JtRGF0YSIsImRhdGEiLCJPYmplY3QiLCJmcm9tRW50cmllcyIsImNvbnNvbGUiLCJsb2ciXSwic291cmNlUm9vdCI6IiJ9