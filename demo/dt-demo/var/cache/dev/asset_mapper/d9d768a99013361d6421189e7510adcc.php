O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_rand.js";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_rand-9216b9a49aed702422ea46ddde9c8b38.js";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_rand.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:986:"'use strict';

module.exports = function array_rand(array, num) {
  // eslint-disable-line camelcase
  //       discuss at: https://locutus.io/php/array_rand/
  //      original by: Waldo Malqui Silva (https://waldo.malqui.info)
  // reimplemented by: Rafał Kukawski
  //        example 1: array_rand( ['Kevin'], 1 )
  //        returns 1: '0'

  // By using Object.keys we support both, arrays and objects
  // which phpjs wants to support
  var keys = Object.keys(array);

  if (typeof num === 'undefined' || num === null) {
    num = 1;
  } else {
    num = +num;
  }

  if (isNaN(num) || num < 1 || num > keys.length) {
    return null;
  }

  // shuffle the array of keys
  for (var i = keys.length - 1; i > 0; i--) {
    var j = Math.floor(Math.random() * (i + 1)); // 0 ≤ j ≤ i

    var tmp = keys[j];
    keys[j] = keys[i];
    keys[i] = tmp;
  }

  return num === 1 ? keys[0] : keys.slice(0, num);
};
//# sourceMappingURL=array_rand.js-0bd68168fbf3a6af9f045f496ee19e9f.map";s:6:"digest";s:32:"9216b9a49aed702422ea46ddde9c8b38";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_rand.js.map";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_rand.js-0bd68168fbf3a6af9f045f496ee19e9f.map";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_rand.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"0bd68168fbf3a6af9f045f496ee19e9f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/array/array_rand.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/php/array/array_rand.js";}