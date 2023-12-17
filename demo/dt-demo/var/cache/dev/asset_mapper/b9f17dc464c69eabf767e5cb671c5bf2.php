O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/is_infinite.js";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/php/math/is_infinite-83e3896e0b99112db87785b1b8d85e3f.js";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/php/math/is_infinite.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1409:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function is_infinite(val) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/is_infinite/
  // original by: Onno Marsman (https://twitter.com/onnomarsman)
  //   example 1: is_infinite(Infinity)
  //   returns 1: true
  //   example 2: is_infinite(-Infinity)
  //   returns 2: true
  //   example 3: is_infinite(0)
  //   returns 3: false

  var warningType = '';

  if (val === Infinity || val === -Infinity) {
    return true;
  }

  // Some warnings for maximum PHP compatibility
  if ((typeof val === 'undefined' ? 'undefined' : _typeof(val)) === 'object') {
    warningType = Object.prototype.toString.call(val) === '[object Array]' ? 'array' : 'object';
  } else if (typeof val === 'string' && !val.match(/^[+-]?\d/)) {
    // simulate PHP's behaviour: '-9a' doesn't give a warning, but 'a9' does.
    warningType = 'string';
  }
  if (warningType) {
    var msg = 'Warning: is_infinite() expects parameter 1 to be double, ' + warningType + ' given';
    throw new Error(msg);
  }

  return false;
};
//# sourceMappingURL=is_infinite.js-0d74c8ba8261971356128b3c27ab921e.map";s:6:"digest";s:32:"83e3896e0b99112db87785b1b8d85e3f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/is_infinite.js.map";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/math/is_infinite.js-0d74c8ba8261971356128b3c27ab921e.map";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/math/is_infinite.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"0d74c8ba8261971356128b3c27ab921e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/math/is_infinite.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/php/math/is_infinite.js";}