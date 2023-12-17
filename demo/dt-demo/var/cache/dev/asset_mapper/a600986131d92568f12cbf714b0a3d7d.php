O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:91:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/range.js";s:10:"publicPath";s:97:"/assets/@survos/api-grid/node_modules/locutus/php/array/range-d8f0f2e6c89a3f55a976104ce1457ce9.js";s:23:"publicPathWithoutDigest";s:64:"/assets/@survos/api-grid/node_modules/locutus/php/array/range.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1338:""use strict";

module.exports = function range(low, high, step) {
  //  discuss at: https://locutus.io/php/range/
  // original by: Waldo Malqui Silva (https://waldo.malqui.info)
  //   example 1: range ( 0, 12 )
  //   returns 1: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
  //   example 2: range( 0, 100, 10 )
  //   returns 2: [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100]
  //   example 3: range( 'a', 'i' )
  //   returns 3: ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i']
  //   example 4: range( 'c', 'a' )
  //   returns 4: ['c', 'b', 'a']

  var matrix = [];
  var iVal = void 0;
  var endval = void 0;
  var plus = void 0;
  var walker = step || 1;
  var chars = false;

  if (!isNaN(low) && !isNaN(high)) {
    iVal = low;
    endval = high;
  } else if (isNaN(low) && isNaN(high)) {
    chars = true;
    iVal = low.charCodeAt(0);
    endval = high.charCodeAt(0);
  } else {
    iVal = isNaN(low) ? 0 : low;
    endval = isNaN(high) ? 0 : high;
  }

  plus = !(iVal > endval);
  if (plus) {
    while (iVal <= endval) {
      matrix.push(chars ? String.fromCharCode(iVal) : iVal);
      iVal += walker;
    }
  } else {
    while (iVal >= endval) {
      matrix.push(chars ? String.fromCharCode(iVal) : iVal);
      iVal -= walker;
    }
  }

  return matrix;
};
//# sourceMappingURL=range.js-13609624694b0431e858ad20544c1edd.map";s:6:"digest";s:32:"d8f0f2e6c89a3f55a976104ce1457ce9";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/range.js.map";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/array/range.js-13609624694b0431e858ad20544c1edd.map";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/array/range.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"13609624694b0431e858ad20544c1edd";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/array/range.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:56:"@survos/api-grid/node_modules/locutus/php/array/range.js";}