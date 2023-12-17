O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:90:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/expm1.js";s:10:"publicPath";s:96:"/assets/@survos/api-grid/node_modules/locutus/php/math/expm1-21ae9791e2c5a08323da388cb7db1b27.js";s:23:"publicPathWithoutDigest";s:63:"/assets/@survos/api-grid/node_modules/locutus/php/math/expm1.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:480:""use strict";

module.exports = function expm1(x) {
  //  discuss at: https://locutus.io/php/expm1/
  // original by: Brett Zamir (https://brett-zamir.me)
  // improved by: Robert Eisele (https://www.xarg.org/)
  //      note 1: Precision 'n' can be adjusted as desired
  //   example 1: expm1(1e-15)
  //   returns 1: 1.0000000000000007e-15

  return x < 1e-5 && x > -1e-5 ? x + 0.5 * x * x : Math.exp(x) - 1;
};
//# sourceMappingURL=expm1.js-a3508ab0709f3d45606f334c41c79fe4.map";s:6:"digest";s:32:"21ae9791e2c5a08323da388cb7db1b27";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/expm1.js.map";s:10:"publicPath";s:100:"/assets/@survos/api-grid/node_modules/locutus/php/math/expm1.js-a3508ab0709f3d45606f334c41c79fe4.map";s:23:"publicPathWithoutDigest";s:67:"/assets/@survos/api-grid/node_modules/locutus/php/math/expm1.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"a3508ab0709f3d45606f334c41c79fe4";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:59:"@survos/api-grid/node_modules/locutus/php/math/expm1.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:55:"@survos/api-grid/node_modules/locutus/php/math/expm1.js";}