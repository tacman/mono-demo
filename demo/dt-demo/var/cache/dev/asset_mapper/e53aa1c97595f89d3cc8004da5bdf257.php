O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:90:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/prev.js";s:10:"publicPath";s:96:"/assets/@survos/api-grid/node_modules/locutus/php/array/prev-64bb26cb3add752e79a73a40a2a8249d.js";s:23:"publicPathWithoutDigest";s:63:"/assets/@survos/api-grid/node_modules/locutus/php/array/prev.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1463:"'use strict';

module.exports = function prev(arr) {
  //  discuss at: https://locutus.io/php/prev/
  // original by: Brett Zamir (https://brett-zamir.me)
  //      note 1: Uses global: locutus to store the array pointer
  //   example 1: var $transport = ['foot', 'bike', 'car', 'plane']
  //   example 1: prev($transport)
  //   returns 1: false

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
  var arrpos = pointers.indexOf(arr);
  var cursor = pointers[arrpos + 1];
  if (pointers.indexOf(arr) === -1 || cursor === 0) {
    return false;
  }
  if (Object.prototype.toString.call(arr) !== '[object Array]') {
    var ct = 0;
    for (var k in arr) {
      if (ct === cursor - 1) {
        pointers[arrpos + 1] -= 1;
        return arr[k];
      }
      ct++;
    }
    // Shouldn't reach here
  }
  if (arr.length === 0) {
    return false;
  }
  pointers[arrpos + 1] -= 1;
  return arr[pointers[arrpos + 1]];
};
//# sourceMappingURL=prev.js-dbc053d469159a7970c6962d4da291d8.map";s:6:"digest";s:32:"64bb26cb3add752e79a73a40a2a8249d";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/prev.js.map";s:10:"publicPath";s:100:"/assets/@survos/api-grid/node_modules/locutus/php/array/prev.js-dbc053d469159a7970c6962d4da291d8.map";s:23:"publicPathWithoutDigest";s:67:"/assets/@survos/api-grid/node_modules/locutus/php/array/prev.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"dbc053d469159a7970c6962d4da291d8";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:59:"@survos/api-grid/node_modules/locutus/php/array/prev.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:55:"@survos/api-grid/node_modules/locutus/php/array/prev.js";}