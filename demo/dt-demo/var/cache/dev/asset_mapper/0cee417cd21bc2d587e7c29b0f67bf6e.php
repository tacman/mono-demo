O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:91:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/dechex.js";s:10:"publicPath";s:97:"/assets/@survos/api-grid/node_modules/locutus/php/math/dechex-500c1b0a508d989637dcec8e3c1b3b67.js";s:23:"publicPathWithoutDigest";s:64:"/assets/@survos/api-grid/node_modules/locutus/php/math/dechex.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:682:""use strict";

module.exports = function dechex(number) {
  //  discuss at: https://locutus.io/php/dechex/
  // original by: Philippe Baumann
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  // improved by: https://stackoverflow.com/questions/57803/how-to-convert-decimal-to-hex-in-javascript
  //    input by: pilus
  //   example 1: dechex(10)
  //   returns 1: 'a'
  //   example 2: dechex(47)
  //   returns 2: '2f'
  //   example 3: dechex(-1415723993)
  //   returns 3: 'ab9dc427'

  if (number < 0) {
    number = 0xFFFFFFFF + number + 1;
  }
  return parseInt(number, 10).toString(16);
};
//# sourceMappingURL=dechex.js-570b16a9ea12cfd1fb9acbbc52bf762c.map";s:6:"digest";s:32:"500c1b0a508d989637dcec8e3c1b3b67";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/dechex.js.map";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/math/dechex.js-570b16a9ea12cfd1fb9acbbc52bf762c.map";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/math/dechex.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"570b16a9ea12cfd1fb9acbbc52bf762c";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/math/dechex.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:56:"@survos/api-grid/node_modules/locutus/php/math/dechex.js";}