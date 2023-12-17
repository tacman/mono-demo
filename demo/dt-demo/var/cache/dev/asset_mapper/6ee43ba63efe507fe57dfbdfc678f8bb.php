O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:91:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/decbin.js";s:10:"publicPath";s:97:"/assets/@survos/api-grid/node_modules/locutus/php/math/decbin-0ffe2aa42de7b0514b2b9b7574725730.js";s:23:"publicPathWithoutDigest";s:64:"/assets/@survos/api-grid/node_modules/locutus/php/math/decbin.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:703:""use strict";

module.exports = function decbin(number) {
  //  discuss at: https://locutus.io/php/decbin/
  // original by: Enrique Gonzalez
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  // improved by: https://stackoverflow.com/questions/57803/how-to-convert-decimal-to-hex-in-javascript
  //    input by: pilus
  //    input by: nord_ua
  //   example 1: decbin(12)
  //   returns 1: '1100'
  //   example 2: decbin(26)
  //   returns 2: '11010'
  //   example 3: decbin('26')
  //   returns 3: '11010'

  if (number < 0) {
    number = 0xFFFFFFFF + number + 1;
  }
  return parseInt(number, 10).toString(2);
};
//# sourceMappingURL=decbin.js-9296137205e04dd7c6571bed4caab8f2.map";s:6:"digest";s:32:"0ffe2aa42de7b0514b2b9b7574725730";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/decbin.js.map";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/math/decbin.js-9296137205e04dd7c6571bed4caab8f2.map";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/math/decbin.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"9296137205e04dd7c6571bed4caab8f2";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/math/decbin.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:56:"@survos/api-grid/node_modules/locutus/php/math/decbin.js";}