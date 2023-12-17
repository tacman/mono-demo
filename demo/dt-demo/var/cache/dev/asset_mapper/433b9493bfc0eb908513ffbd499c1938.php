O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:91:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/reset.js";s:10:"publicPath";s:97:"/assets/@survos/api-grid/node_modules/locutus/php/array/reset-ff9d589bae7e443dbd25dc63f15d2489.js";s:23:"publicPathWithoutDigest";s:64:"/assets/@survos/api-grid/node_modules/locutus/php/array/reset.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1500:"'use strict';

module.exports = function reset(arr) {
  //  discuss at: https://locutus.io/php/reset/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Legaev Andrey
  //  revised by: Brett Zamir (https://brett-zamir.me)
  //      note 1: Uses global: locutus to store the array pointer
  //   example 1: reset({0: 'Kevin', 1: 'van', 2: 'Zonneveld'})
  //   returns 1: 'Kevin'

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
    for (var k in arr) {
      if (pointers.indexOf(arr) === -1) {
        pointers.push(arr, 0);
      } else {
        pointers[arrpos + 1] = 0;
      }
      return arr[k];
    }
    // Empty
    return false;
  }
  if (arr.length === 0) {
    return false;
  }
  pointers[arrpos + 1] = 0;
  return arr[pointers[arrpos + 1]];
};
//# sourceMappingURL=reset.js-aed64416038ed382ca8d4e1787b5e598.map";s:6:"digest";s:32:"ff9d589bae7e443dbd25dc63f15d2489";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/reset.js.map";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/array/reset.js-aed64416038ed382ca8d4e1787b5e598.map";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/array/reset.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"aed64416038ed382ca8d4e1787b5e598";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/array/reset.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:56:"@survos/api-grid/node_modules/locutus/php/array/reset.js";}