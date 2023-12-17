O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:109:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/funchand/call_user_func_array.js";s:10:"publicPath";s:115:"/assets/@survos/api-grid/node_modules/locutus/php/funchand/call_user_func_array-7524a6db0e2b72011f82b18f698dc0f0.js";s:23:"publicPathWithoutDigest";s:82:"/assets/@survos/api-grid/node_modules/locutus/php/funchand/call_user_func_array.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2567:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function call_user_func_array(cb, parameters) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/call_user_func_array/
  // original by: Thiago Mata (https://thiagomata.blog.com)
  //  revised by: Jon Hohle
  // improved by: Brett Zamir (https://brett-zamir.me)
  // improved by: Diplom@t (https://difane.com/)
  // improved by: Brett Zamir (https://brett-zamir.me)
  //      note 1: Depending on the `cb` that is passed,
  //      note 1: this function can use `eval` and/or `new Function`.
  //      note 1: The `eval` input is however checked to only allow valid function names,
  //      note 1: So it should not be unsafer than uses without eval (seeing as you can)
  //      note 1: already pass any function to be executed here.
  //   example 1: call_user_func_array('isNaN', ['a'])
  //   returns 1: true
  //   example 2: call_user_func_array('isNaN', [1])
  //   returns 2: false

  var $global = typeof window !== 'undefined' ? window : global;
  var func = void 0;
  var scope = null;

  var validJSFunctionNamePattern = /^[_$a-zA-Z\xA0-\uFFFF][_$a-zA-Z0-9\xA0-\uFFFF]*$/;

  if (typeof cb === 'string') {
    if (typeof $global[cb] === 'function') {
      func = $global[cb];
    } else if (cb.match(validJSFunctionNamePattern)) {
      func = new Function(null, 'return ' + cb)(); // eslint-disable-line no-new-func
    }
  } else if (Object.prototype.toString.call(cb) === '[object Array]') {
    if (typeof cb[0] === 'string') {
      if (cb[0].match(validJSFunctionNamePattern)) {
        func = eval(cb[0] + "['" + cb[1] + "']"); // eslint-disable-line no-eval
      }
    } else {
      func = cb[0][cb[1]];
    }

    if (typeof cb[0] === 'string') {
      if (typeof $global[cb[0]] === 'function') {
        scope = $global[cb[0]];
      } else if (cb[0].match(validJSFunctionNamePattern)) {
        scope = eval(cb[0]); // eslint-disable-line no-eval
      }
    } else if (_typeof(cb[0]) === 'object') {
      scope = cb[0];
    }
  } else if (typeof cb === 'function') {
    func = cb;
  }

  if (typeof func !== 'function') {
    throw new Error(func + ' is not a valid function');
  }

  return func.apply(scope, parameters);
};
//# sourceMappingURL=call_user_func_array.js-871391d857a14270e4d8a48c45e68ec0.map";s:6:"digest";s:32:"7524a6db0e2b72011f82b18f698dc0f0";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:113:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/funchand/call_user_func_array.js.map";s:10:"publicPath";s:119:"/assets/@survos/api-grid/node_modules/locutus/php/funchand/call_user_func_array.js-871391d857a14270e4d8a48c45e68ec0.map";s:23:"publicPathWithoutDigest";s:86:"/assets/@survos/api-grid/node_modules/locutus/php/funchand/call_user_func_array.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"871391d857a14270e4d8a48c45e68ec0";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:78:"@survos/api-grid/node_modules/locutus/php/funchand/call_user_func_array.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:74:"@survos/api-grid/node_modules/locutus/php/funchand/call_user_func_array.js";}