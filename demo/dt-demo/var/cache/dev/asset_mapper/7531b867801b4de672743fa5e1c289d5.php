O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:90:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/hypot.js";s:10:"publicPath";s:96:"/assets/@survos/api-grid/node_modules/locutus/php/math/hypot-ac2e2e229e6540dfb174bd2dfdcb70ec.js";s:23:"publicPathWithoutDigest";s:63:"/assets/@survos/api-grid/node_modules/locutus/php/math/hypot.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:544:""use strict";

module.exports = function hypot(x, y) {
  //  discuss at: https://locutus.io/php/hypot/
  // original by: Onno Marsman (https://twitter.com/onnomarsman)
  // imprived by: Robert Eisele (https://www.xarg.org/)
  //   example 1: hypot(3, 4)
  //   returns 1: 5
  //   example 2: hypot([], 'a')
  //   returns 2: null

  x = Math.abs(x);
  y = Math.abs(y);

  var t = Math.min(x, y);
  x = Math.max(x, y);
  t = t / x;

  return x * Math.sqrt(1 + t * t) || null;
};
//# sourceMappingURL=hypot.js-656f1a6fc6cde5e4a9034fcf99e87fb9.map";s:6:"digest";s:32:"ac2e2e229e6540dfb174bd2dfdcb70ec";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/hypot.js.map";s:10:"publicPath";s:100:"/assets/@survos/api-grid/node_modules/locutus/php/math/hypot.js-656f1a6fc6cde5e4a9034fcf99e87fb9.map";s:23:"publicPathWithoutDigest";s:67:"/assets/@survos/api-grid/node_modules/locutus/php/math/hypot.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"656f1a6fc6cde5e4a9034fcf99e87fb9";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:59:"@survos/api-grid/node_modules/locutus/php/math/hypot.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:55:"@survos/api-grid/node_modules/locutus/php/math/hypot.js";}