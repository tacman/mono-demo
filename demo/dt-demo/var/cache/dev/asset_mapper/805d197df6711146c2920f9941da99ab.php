O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:92:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/mt_rand.js";s:10:"publicPath";s:98:"/assets/@survos/api-grid/node_modules/locutus/php/math/mt_rand-6d3a99ae4eb1433f5565d1fd400c3264.js";s:23:"publicPathWithoutDigest";s:65:"/assets/@survos/api-grid/node_modules/locutus/php/math/mt_rand.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:741:"'use strict';

module.exports = function mt_rand(min, max) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/mt_rand/
  // original by: Onno Marsman (https://twitter.com/onnomarsman)
  // improved by: Brett Zamir (https://brett-zamir.me)
  //    input by: Kongo
  //   example 1: mt_rand(1, 1)
  //   returns 1: 1

  var argc = arguments.length;
  if (argc === 0) {
    min = 0;
    max = 2147483647;
  } else if (argc === 1) {
    throw new Error('Warning: mt_rand() expects exactly 2 parameters, 1 given');
  } else {
    min = parseInt(min, 10);
    max = parseInt(max, 10);
  }
  return Math.floor(Math.random() * (max - min + 1)) + min;
};
//# sourceMappingURL=mt_rand.js-c134f43d488804f86bf4c2f046da8f58.map";s:6:"digest";s:32:"6d3a99ae4eb1433f5565d1fd400c3264";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/mt_rand.js.map";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/php/math/mt_rand.js-c134f43d488804f86bf4c2f046da8f58.map";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/php/math/mt_rand.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"c134f43d488804f86bf4c2f046da8f58";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/php/math/mt_rand.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:57:"@survos/api-grid/node_modules/locutus/php/math/mt_rand.js";}