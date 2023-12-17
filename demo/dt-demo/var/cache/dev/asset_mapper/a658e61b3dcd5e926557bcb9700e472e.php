O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:90:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/log1p.js";s:10:"publicPath";s:96:"/assets/@survos/api-grid/node_modules/locutus/php/math/log1p-d643b0cea4b1c90db6cde82e8100a0ec.js";s:23:"publicPathWithoutDigest";s:63:"/assets/@survos/api-grid/node_modules/locutus/php/math/log1p.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:714:"'use strict';

module.exports = function log1p(x) {
  //  discuss at: https://locutus.io/php/log1p/
  // original by: Brett Zamir (https://brett-zamir.me)
  // improved by: Robert Eisele (https://www.xarg.org/)
  //      note 1: Precision 'n' can be adjusted as desired
  //   example 1: log1p(1e-15)
  //   returns 1: 9.999999999999995e-16

  var ret = 0;
  // degree of precision
  var n = 50;

  if (x <= -1) {
    // JavaScript style would be to return Number.NEGATIVE_INFINITY
    return '-INF';
  }
  if (x < 0 || x > 1) {
    return Math.log(1 + x);
  }
  for (var i = 1; i < n; i++) {
    ret += Math.pow(-x, i) / i;
  }

  return -ret;
};
//# sourceMappingURL=log1p.js-460b6c5162273e635032413a32a750f4.map";s:6:"digest";s:32:"d643b0cea4b1c90db6cde82e8100a0ec";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/log1p.js.map";s:10:"publicPath";s:100:"/assets/@survos/api-grid/node_modules/locutus/php/math/log1p.js-460b6c5162273e635032413a32a750f4.map";s:23:"publicPathWithoutDigest";s:67:"/assets/@survos/api-grid/node_modules/locutus/php/math/log1p.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"460b6c5162273e635032413a32a750f4";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:59:"@survos/api-grid/node_modules/locutus/php/math/log1p.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:55:"@survos/api-grid/node_modules/locutus/php/math/log1p.js";}