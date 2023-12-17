O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:108:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_intersect_uassoc.js";s:10:"publicPath";s:114:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_intersect_uassoc-ca04fb8ccc415271635edbfffc115bfe.js";s:23:"publicPathWithoutDigest";s:81:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_intersect_uassoc.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2044:"'use strict';

module.exports = function array_intersect_uassoc(arr1) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_intersect_uassoc/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: var $array1 = {a: 'green', b: 'brown', c: 'blue', 0: 'red'}
  //   example 1: var $array2 = {a: 'GREEN', B: 'brown', 0: 'yellow', 1: 'red'}
  //   example 1: array_intersect_uassoc($array1, $array2, function (f_string1, f_string2){var string1 = (f_string1+'').toLowerCase(); var string2 = (f_string2+'').toLowerCase(); if (string1 > string2) return 1; if (string1 === string2) return 0; return -1;})
  //   returns 1: {b: 'brown'}

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
        if (arr[k] === arr1[k1] && cb(k, k1) === 0) {
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
//# sourceMappingURL=array_intersect_uassoc.js-e2a832fb9ced3330661cc2754e996d89.map";s:6:"digest";s:32:"ca04fb8ccc415271635edbfffc115bfe";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:112:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_intersect_uassoc.js.map";s:10:"publicPath";s:118:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_intersect_uassoc.js-e2a832fb9ced3330661cc2754e996d89.map";s:23:"publicPathWithoutDigest";s:85:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_intersect_uassoc.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"e2a832fb9ced3330661cc2754e996d89";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:77:"@survos/api-grid/node_modules/locutus/php/array/array_intersect_uassoc.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:73:"@survos/api-grid/node_modules/locutus/php/array/array_intersect_uassoc.js";}