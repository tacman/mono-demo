O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:89:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/end.js";s:10:"publicPath";s:95:"/assets/@survos/api-grid/node_modules/locutus/php/array/end-994731041a394e0265fed0bf721aeba8.js";s:23:"publicPathWithoutDigest";s:62:"/assets/@survos/api-grid/node_modules/locutus/php/array/end.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1726:"'use strict';

module.exports = function end(arr) {
  //  discuss at: https://locutus.io/php/end/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Legaev Andrey
  //  revised by: J A R
  //  revised by: Brett Zamir (https://brett-zamir.me)
  // improved by: Kevin van Zonneveld (https://kvz.io)
  // improved by: Kevin van Zonneveld (https://kvz.io)
  //      note 1: Uses global: locutus to store the array pointer
  //   example 1: end({0: 'Kevin', 1: 'van', 2: 'Zonneveld'})
  //   returns 1: 'Zonneveld'
  //   example 2: end(['Kevin', 'van', 'Zonneveld'])
  //   returns 2: 'Zonneveld'

  var $global = typeof window !== 'undefined' ? window : global;
  $global.$locutus = $global.$locutus || {};
  var $locutus = $global.$locutus;
  $locutus.php = $locutus.php || {};
  $locutus.php.pointers = $locutus.php.pointers || [];
  var pointers = $locutus.php.pointers;

  var indexOf = function indexOf(value) {
    for (var i = 0, length = this.length; i < length; i++) {
      if (this[i] === value) {
        return i;
      }
    }
    return -1;
  };

  if (!pointers.indexOf) {
    pointers.indexOf = indexOf;
  }
  if (pointers.indexOf(arr) === -1) {
    pointers.push(arr, 0);
  }
  var arrpos = pointers.indexOf(arr);
  if (Object.prototype.toString.call(arr) !== '[object Array]') {
    var ct = 0;
    var val = void 0;
    for (var k in arr) {
      ct++;
      val = arr[k];
    }
    if (ct === 0) {
      // Empty
      return false;
    }
    pointers[arrpos + 1] = ct - 1;
    return val;
  }
  if (arr.length === 0) {
    return false;
  }
  pointers[arrpos + 1] = arr.length - 1;
  return arr[pointers[arrpos + 1]];
};
//# sourceMappingURL=end.js-3129930af76f268d0b97d11b1b79238e.map";s:6:"digest";s:32:"994731041a394e0265fed0bf721aeba8";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:93:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/end.js.map";s:10:"publicPath";s:99:"/assets/@survos/api-grid/node_modules/locutus/php/array/end.js-3129930af76f268d0b97d11b1b79238e.map";s:23:"publicPathWithoutDigest";s:66:"/assets/@survos/api-grid/node_modules/locutus/php/array/end.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"3129930af76f268d0b97d11b1b79238e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:58:"@survos/api-grid/node_modules/locutus/php/array/end.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:54:"@survos/api-grid/node_modules/locutus/php/array/end.js";}