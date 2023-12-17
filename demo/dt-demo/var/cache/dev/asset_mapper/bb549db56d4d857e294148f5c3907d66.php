O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:89:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/key.js";s:10:"publicPath";s:95:"/assets/@survos/api-grid/node_modules/locutus/php/array/key-8e95c8cf9fd41dbb8c216df1aef1b6d2.js";s:23:"publicPathWithoutDigest";s:62:"/assets/@survos/api-grid/node_modules/locutus/php/array/key.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1457:"'use strict';

module.exports = function key(arr) {
  //  discuss at: https://locutus.io/php/key/
  // original by: Brett Zamir (https://brett-zamir.me)
  //    input by: Riddler (https://www.frontierwebdev.com/)
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  //      note 1: Uses global: locutus to store the array pointer
  //   example 1: var $array = {fruit1: 'apple', 'fruit2': 'orange'}
  //   example 1: key($array)
  //   returns 1: 'fruit1'

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
  var cursor = pointers[pointers.indexOf(arr) + 1];
  if (Object.prototype.toString.call(arr) !== '[object Array]') {
    var ct = 0;
    for (var k in arr) {
      if (ct === cursor) {
        return k;
      }
      ct++;
    }
    // Empty
    return false;
  }
  if (arr.length === 0) {
    return false;
  }

  return cursor;
};
//# sourceMappingURL=key.js-6bdbd188f33ed0d2edffc1da2634b70b.map";s:6:"digest";s:32:"8e95c8cf9fd41dbb8c216df1aef1b6d2";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:93:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/key.js.map";s:10:"publicPath";s:99:"/assets/@survos/api-grid/node_modules/locutus/php/array/key.js-6bdbd188f33ed0d2edffc1da2634b70b.map";s:23:"publicPathWithoutDigest";s:66:"/assets/@survos/api-grid/node_modules/locutus/php/array/key.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"6bdbd188f33ed0d2edffc1da2634b70b";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:58:"@survos/api-grid/node_modules/locutus/php/array/key.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:54:"@survos/api-grid/node_modules/locutus/php/array/key.js";}