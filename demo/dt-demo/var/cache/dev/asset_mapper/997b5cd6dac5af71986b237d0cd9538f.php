O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/is_finite.js";s:10:"publicPath";s:100:"/assets/@survos/api-grid/node_modules/locutus/php/math/is_finite-da31907250f50dc95cc641adf49c4209.js";s:23:"publicPathWithoutDigest";s:67:"/assets/@survos/api-grid/node_modules/locutus/php/math/is_finite.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1396:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function is_finite(val) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/is_finite/
  // original by: Onno Marsman (https://twitter.com/onnomarsman)
  //   example 1: is_finite(Infinity)
  //   returns 1: false
  //   example 2: is_finite(-Infinity)
  //   returns 2: false
  //   example 3: is_finite(0)
  //   returns 3: true

  var warningType = '';

  if (val === Infinity || val === -Infinity) {
    return false;
  }

  // Some warnings for maximum PHP compatibility
  if ((typeof val === 'undefined' ? 'undefined' : _typeof(val)) === 'object') {
    warningType = Object.prototype.toString.call(val) === '[object Array]' ? 'array' : 'object';
  } else if (typeof val === 'string' && !val.match(/^[+-]?\d/)) {
    // simulate PHP's behaviour: '-9a' doesn't give a warning, but 'a9' does.
    warningType = 'string';
  }
  if (warningType) {
    var msg = 'Warning: is_finite() expects parameter 1 to be double, ' + warningType + ' given';
    throw new Error(msg);
  }

  return true;
};
//# sourceMappingURL=is_finite.js-dde5a647c53b865aa90fca188078bf01.map";s:6:"digest";s:32:"da31907250f50dc95cc641adf49c4209";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/is_finite.js.map";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/php/math/is_finite.js-dde5a647c53b865aa90fca188078bf01.map";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/php/math/is_finite.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"dde5a647c53b865aa90fca188078bf01";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/php/math/is_finite.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:59:"@survos/api-grid/node_modules/locutus/php/math/is_finite.js";}