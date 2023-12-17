O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_pad.js";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_pad-15d570ab05e3467718419a34c6464405.js";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_pad.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1142:"'use strict';

module.exports = function array_pad(input, padSize, padValue) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_pad/
  // original by: Waldo Malqui Silva (https://waldo.malqui.info)
  //   example 1: array_pad([ 7, 8, 9 ], 2, 'a')
  //   returns 1: [ 7, 8, 9]
  //   example 2: array_pad([ 7, 8, 9 ], 5, 'a')
  //   returns 2: [ 7, 8, 9, 'a', 'a']
  //   example 3: array_pad([ 7, 8, 9 ], 5, 2)
  //   returns 3: [ 7, 8, 9, 2, 2]
  //   example 4: array_pad([ 7, 8, 9 ], -5, 'a')
  //   returns 4: [ 'a', 'a', 7, 8, 9 ]

  var pad = [];
  var newArray = [];
  var newLength = void 0;
  var diff = 0;
  var i = 0;

  if (Object.prototype.toString.call(input) === '[object Array]' && !isNaN(padSize)) {
    newLength = padSize < 0 ? padSize * -1 : padSize;
    diff = newLength - input.length;

    if (diff > 0) {
      for (i = 0; i < diff; i++) {
        newArray[i] = padValue;
      }
      pad = padSize < 0 ? newArray.concat(input) : input.concat(newArray);
    } else {
      pad = input;
    }
  }

  return pad;
};
//# sourceMappingURL=array_pad.js-0e72e503cc4fa3e0936f35cc4084f32a.map";s:6:"digest";s:32:"15d570ab05e3467718419a34c6464405";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_pad.js.map";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_pad.js-0e72e503cc4fa3e0936f35cc4084f32a.map";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_pad.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"0e72e503cc4fa3e0936f35cc4084f32a";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/array/array_pad.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/array/array_pad.js";}