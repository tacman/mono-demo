O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_slice.js";s:10:"publicPath";s:103:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_slice-0666491e01f0decd77fd0f842a2ed71c.js";s:23:"publicPathWithoutDigest";s:70:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_slice.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1998:"'use strict';

module.exports = function array_slice(arr, offst, lgth, preserveKeys) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_slice/
  // original by: Brett Zamir (https://brett-zamir.me)
  //    input by: Brett Zamir (https://brett-zamir.me)
  // bugfixed by: Kevin van Zonneveld (https://kvz.io)
  //      note 1: Relies on is_int because !isNaN accepts floats
  //   example 1: array_slice(["a", "b", "c", "d", "e"], 2, -1)
  //   returns 1: [ 'c', 'd' ]
  //   example 2: array_slice(["a", "b", "c", "d", "e"], 2, -1, true)
  //   returns 2: {2: 'c', 3: 'd'}

  var isInt = require('../var/is_int');

  /*
    if ('callee' in arr && 'length' in arr) {
      arr = Array.prototype.slice.call(arr);
    }
  */

  var key = '';

  if (Object.prototype.toString.call(arr) !== '[object Array]' || preserveKeys && offst !== 0) {
    // Assoc. array as input or if required as output
    var lgt = 0;
    var newAssoc = {};
    for (key in arr) {
      lgt += 1;
      newAssoc[key] = arr[key];
    }
    arr = newAssoc;

    offst = offst < 0 ? lgt + offst : offst;
    lgth = lgth === undefined ? lgt : lgth < 0 ? lgt + lgth - offst : lgth;

    var assoc = {};
    var start = false;
    var it = -1;
    var arrlgth = 0;
    var noPkIdx = 0;

    for (key in arr) {
      ++it;
      if (arrlgth >= lgth) {
        break;
      }
      if (it === offst) {
        start = true;
      }
      if (!start) {
        continue;
      }++arrlgth;
      if (isInt(key) && !preserveKeys) {
        assoc[noPkIdx++] = arr[key];
      } else {
        assoc[key] = arr[key];
      }
    }
    // Make as array-like object (though length will not be dynamic)
    // assoc.length = arrlgth;
    return assoc;
  }

  if (lgth === undefined) {
    return arr.slice(offst);
  } else if (lgth >= 0) {
    return arr.slice(offst, offst + lgth);
  } else {
    return arr.slice(offst, lgth);
  }
};
//# sourceMappingURL=array_slice.js-969bada61b97fbdaea996d232bdd5620.map";s:6:"digest";s:32:"0666491e01f0decd77fd0f842a2ed71c";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_slice.js.map";s:10:"publicPath";s:107:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_slice.js-969bada61b97fbdaea996d232bdd5620.map";s:23:"publicPathWithoutDigest";s:74:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_slice.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"969bada61b97fbdaea996d232bdd5620";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:66:"@survos/api-grid/node_modules/locutus/php/array/array_slice.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:62:"@survos/api-grid/node_modules/locutus/php/array/array_slice.js";}