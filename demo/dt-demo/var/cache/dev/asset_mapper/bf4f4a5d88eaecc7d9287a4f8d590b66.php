O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:91:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/is_nan.js";s:10:"publicPath";s:97:"/assets/@survos/api-grid/node_modules/locutus/php/math/is_nan-b3fbd5ca73aafd8a122d5752c14bfe75.js";s:23:"publicPathWithoutDigest";s:64:"/assets/@survos/api-grid/node_modules/locutus/php/math/is_nan.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1313:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function is_nan(val) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/is_nan/
  // original by: Onno Marsman (https://twitter.com/onnomarsman)
  //    input by: Robin
  //   example 1: is_nan(NaN)
  //   returns 1: true
  //   example 2: is_nan(0)
  //   returns 2: false

  var warningType = '';

  if (typeof val === 'number' && isNaN(val)) {
    return true;
  }

  // Some errors for maximum PHP compatibility
  if ((typeof val === 'undefined' ? 'undefined' : _typeof(val)) === 'object') {
    warningType = Object.prototype.toString.call(val) === '[object Array]' ? 'array' : 'object';
  } else if (typeof val === 'string' && !val.match(/^[+-]?\d/)) {
    // simulate PHP's behaviour: '-9a' doesn't give a warning, but 'a9' does.
    warningType = 'string';
  }
  if (warningType) {
    throw new Error('Warning: is_nan() expects parameter 1 to be double, ' + warningType + ' given');
  }

  return false;
};
//# sourceMappingURL=is_nan.js-64811b75fc8a3c64880f9e605c6f893a.map";s:6:"digest";s:32:"b3fbd5ca73aafd8a122d5752c14bfe75";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/is_nan.js.map";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/math/is_nan.js-64811b75fc8a3c64880f9e605c6f893a.map";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/math/is_nan.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"64811b75fc8a3c64880f9e605c6f893a";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/math/is_nan.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:56:"@survos/api-grid/node_modules/locutus/php/math/is_nan.js";}