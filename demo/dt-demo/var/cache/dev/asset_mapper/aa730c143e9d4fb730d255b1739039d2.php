O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:89:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/rand.js";s:10:"publicPath";s:95:"/assets/@survos/api-grid/node_modules/locutus/php/math/rand-700c1143b9f73ec3e2d66abbdd015834.js";s:23:"publicPathWithoutDigest";s:62:"/assets/@survos/api-grid/node_modules/locutus/php/math/rand.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:761:"'use strict';

module.exports = function rand(min, max) {
  //  discuss at: https://locutus.io/php/rand/
  // original by: Leslie Hoare
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  //      note 1: See the commented out code below for a version which
  //      note 1: will work with our experimental (though probably unnecessary)
  //      note 1: srand() function)
  //   example 1: rand(1, 1)
  //   returns 1: 1

  var argc = arguments.length;
  if (argc === 0) {
    min = 0;
    max = 2147483647;
  } else if (argc === 1) {
    throw new Error('Warning: rand() expects exactly 2 parameters, 1 given');
  }
  return Math.floor(Math.random() * (max - min + 1)) + min;
};
//# sourceMappingURL=rand.js-ff31ff7de058bea7cab64d7a87b2a1f7.map";s:6:"digest";s:32:"700c1143b9f73ec3e2d66abbdd015834";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:93:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/rand.js.map";s:10:"publicPath";s:99:"/assets/@survos/api-grid/node_modules/locutus/php/math/rand.js-ff31ff7de058bea7cab64d7a87b2a1f7.map";s:23:"publicPathWithoutDigest";s:66:"/assets/@survos/api-grid/node_modules/locutus/php/math/rand.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"ff31ff7de058bea7cab64d7a87b2a1f7";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:58:"@survos/api-grid/node_modules/locutus/php/math/rand.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:54:"@survos/api-grid/node_modules/locutus/php/math/rand.js";}