O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:90:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/bc/bcscale.js";s:10:"publicPath";s:96:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcscale-091cfb47427d66e67af135e5166b1a63.js";s:23:"publicPathWithoutDigest";s:63:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcscale.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:530:"'use strict';

module.exports = function bcscale(scale) {
  //  discuss at: https://locutus.io/php/bcscale/
  // original by: lmeyrick (https://sourceforge.net/projects/bcmath-js/)
  //   example 1: bcscale(1)
  //   returns 1: true

  var _bc = require('../_helpers/_bc');
  var libbcmath = _bc();

  scale = parseInt(scale, 10);
  if (isNaN(scale)) {
    return false;
  }
  if (scale < 0) {
    return false;
  }
  libbcmath.scale = scale;

  return true;
};
//# sourceMappingURL=bcscale.js-b9a51b21e0b95f808f1f9cf526b15c66.map";s:6:"digest";s:32:"091cfb47427d66e67af135e5166b1a63";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/bc/bcscale.js.map";s:10:"publicPath";s:100:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcscale.js-b9a51b21e0b95f808f1f9cf526b15c66.map";s:23:"publicPathWithoutDigest";s:67:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcscale.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"b9a51b21e0b95f808f1f9cf526b15c66";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:59:"@survos/api-grid/node_modules/locutus/php/bc/bcscale.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:55:"@survos/api-grid/node_modules/locutus/php/bc/bcscale.js";}