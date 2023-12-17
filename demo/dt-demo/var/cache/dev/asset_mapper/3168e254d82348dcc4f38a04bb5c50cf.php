O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_product.js";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_product-e758c33e066a92d6feee70e0bd00e0b3.js";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_product.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:635:"'use strict';

module.exports = function array_product(input) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_product/
  // original by: Waldo Malqui Silva (https://waldo.malqui.info)
  //   example 1: array_product([ 2, 4, 6, 8 ])
  //   returns 1: 384

  var idx = 0;
  var product = 1;
  var il = 0;

  if (Object.prototype.toString.call(input) !== '[object Array]') {
    return null;
  }

  il = input.length;
  while (idx < il) {
    product *= !isNaN(input[idx]) ? input[idx] : 0;
    idx++;
  }

  return product;
};
//# sourceMappingURL=array_product.js-1cded2f67714610b5367779e781de397.map";s:6:"digest";s:32:"e758c33e066a92d6feee70e0bd00e0b3";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_product.js.map";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_product.js-1cded2f67714610b5367779e781de397.map";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_product.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"1cded2f67714610b5367779e781de397";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/array/array_product.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/array/array_product.js";}