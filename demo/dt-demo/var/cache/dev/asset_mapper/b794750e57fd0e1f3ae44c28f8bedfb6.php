O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_fill_keys.js";s:10:"publicPath";s:107:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_fill_keys-033a7a91dace1c144411441aeb7d7feb.js";s:23:"publicPathWithoutDigest";s:74:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_fill_keys.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:663:"'use strict';

module.exports = function array_fill_keys(keys, value) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_fill_keys/
  // original by: Brett Zamir (https://brett-zamir.me)
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  //   example 1: var $keys = {'a': 'foo', 2: 5, 3: 10, 4: 'bar'}
  //   example 1: array_fill_keys($keys, 'banana')
  //   returns 1: {"foo": "banana", 5: "banana", 10: "banana", "bar": "banana"}

  var retObj = {};
  var key = '';

  for (key in keys) {
    retObj[keys[key]] = value;
  }

  return retObj;
};
//# sourceMappingURL=array_fill_keys.js-68927bf90e494457c612450840c86624.map";s:6:"digest";s:32:"033a7a91dace1c144411441aeb7d7feb";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:105:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_fill_keys.js.map";s:10:"publicPath";s:111:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_fill_keys.js-68927bf90e494457c612450840c86624.map";s:23:"publicPathWithoutDigest";s:78:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_fill_keys.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"68927bf90e494457c612450840c86624";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:70:"@survos/api-grid/node_modules/locutus/php/array/array_fill_keys.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:66:"@survos/api-grid/node_modules/locutus/php/array/array_fill_keys.js";}