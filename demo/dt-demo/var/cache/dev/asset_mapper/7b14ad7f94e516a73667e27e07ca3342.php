O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:106:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_intersect_ukey.js";s:10:"publicPath";s:112:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_intersect_ukey-c2a8b5c82ef4eaa224a1cf81194cd232.js";s:23:"publicPathWithoutDigest";s:79:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_intersect_ukey.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1884:"'use strict';

module.exports = function array_intersect_ukey(arr1) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_intersect_ukey/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: var $array1 = {blue: 1, red: 2, green: 3, purple: 4}
  //   example 1: var $array2 = {green: 5, blue: 6, yellow: 7, cyan: 8}
  //   example 1: array_intersect_ukey ($array1, $array2, function (key1, key2){ return (key1 === key2 ? 0 : (key1 > key2 ? 1 : -1)); })
  //   returns 1: {blue: 1, green: 3}

  var retArr = {};
  var arglm1 = arguments.length - 1;
  var arglm2 = arglm1 - 1;
  var cb = arguments[arglm1];
  // var cb0 = arguments[arglm2]
  var k1 = '';
  var i = 1;
  var k = '';
  var arr = {};

  var $global = typeof window !== 'undefined' ? window : global;

  cb = typeof cb === 'string' ? $global[cb] : Object.prototype.toString.call(cb) === '[object Array]' ? $global[cb[0]][cb[1]] : cb;

  // cb0 = (typeof cb0 === 'string')
  //   ? $global[cb0]
  //   : (Object.prototype.toString.call(cb0) === '[object Array]')
  //     ? $global[cb0[0]][cb0[1]]
  //     : cb0

  arr1keys: for (k1 in arr1) {
    // eslint-disable-line no-labels
    arrs: for (i = 1; i < arglm1; i++) {
      // eslint-disable-line no-labels
      arr = arguments[i];
      for (k in arr) {
        if (cb(k, k1) === 0) {
          if (i === arglm2) {
            retArr[k1] = arr1[k1];
          }
          // If the innermost loop always leads at least once to an equal value,
          // continue the loop until done
          continue arrs; // eslint-disable-line no-labels
        }
      }
      // If it reaches here, it wasn't found in at least one array, so try next value
      continue arr1keys; // eslint-disable-line no-labels
    }
  }

  return retArr;
};
//# sourceMappingURL=array_intersect_ukey.js-f3faaa0f48566c321dc9c9fbd80e26ac.map";s:6:"digest";s:32:"c2a8b5c82ef4eaa224a1cf81194cd232";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:110:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_intersect_ukey.js.map";s:10:"publicPath";s:116:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_intersect_ukey.js-f3faaa0f48566c321dc9c9fbd80e26ac.map";s:23:"publicPathWithoutDigest";s:83:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_intersect_ukey.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"f3faaa0f48566c321dc9c9fbd80e26ac";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:75:"@survos/api-grid/node_modules/locutus/php/array/array_intersect_ukey.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:71:"@survos/api-grid/node_modules/locutus/php/array/array_intersect_ukey.js";}