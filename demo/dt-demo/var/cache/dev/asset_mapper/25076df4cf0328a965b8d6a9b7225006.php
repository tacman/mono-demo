O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_flip.js";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_flip-5f17d6039d9e07c31329b8aa5161e473.js";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_flip.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:660:""use strict";

module.exports = function array_flip(trans) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_flip/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // improved by: Pier Paolo Ramon (https://www.mastersoup.com/)
  // improved by: Brett Zamir (https://brett-zamir.me)
  //   example 1: array_flip( {a: 1, b: 1, c: 2} )
  //   returns 1: {1: 'b', 2: 'c'}

  var key = void 0;
  var tmpArr = {};

  for (key in trans) {
    if (!trans.hasOwnProperty(key)) {
      continue;
    }
    tmpArr[trans[key]] = key;
  }

  return tmpArr;
};
//# sourceMappingURL=array_flip.js-62c38e3101d5b8712792686c4b63efa2.map";s:6:"digest";s:32:"5f17d6039d9e07c31329b8aa5161e473";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_flip.js.map";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_flip.js-62c38e3101d5b8712792686c4b63efa2.map";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_flip.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"62c38e3101d5b8712792686c4b63efa2";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/array/array_flip.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/php/array/array_flip.js";}