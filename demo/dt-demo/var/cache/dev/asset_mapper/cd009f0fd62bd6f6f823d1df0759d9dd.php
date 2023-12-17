O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:102:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/substr_replace.js";s:10:"publicPath";s:108:"/assets/@survos/api-grid/node_modules/locutus/php/strings/substr_replace-acaa69a683114030c9c3182cc72d8a05.js";s:23:"publicPathWithoutDigest";s:75:"/assets/@survos/api-grid/node_modules/locutus/php/strings/substr_replace.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1274:"'use strict';

module.exports = function substr_replace(str, replace, start, length) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/substr_replace/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: substr_replace('ABCDEFGH:/MNRPQR/', 'bob', 0)
  //   returns 1: 'bob'
  //   example 2: var $var = 'ABCDEFGH:/MNRPQR/'
  //   example 2: substr_replace($var, 'bob', 0, $var.length)
  //   returns 2: 'bob'
  //   example 3: substr_replace('ABCDEFGH:/MNRPQR/', 'bob', 0, 0)
  //   returns 3: 'bobABCDEFGH:/MNRPQR/'
  //   example 4: substr_replace('ABCDEFGH:/MNRPQR/', 'bob', 10, -1)
  //   returns 4: 'ABCDEFGH:/bob/'
  //   example 5: substr_replace('ABCDEFGH:/MNRPQR/', 'bob', -7, -1)
  //   returns 5: 'ABCDEFGH:/bob/'
  //   example 6: substr_replace('ABCDEFGH:/MNRPQR/', '', 10, -1)
  //   returns 6: 'ABCDEFGH://'

  if (start < 0) {
    // start position in str
    start = start + str.length;
  }
  length = length !== undefined ? length : str.length;
  if (length < 0) {
    length = length + str.length - start;
  }

  return [str.slice(0, start), replace.substr(0, length), replace.slice(length), str.slice(start + length)].join('');
};
//# sourceMappingURL=substr_replace.js-6b7eb397f174dde77b8a553aef8dacf7.map";s:6:"digest";s:32:"acaa69a683114030c9c3182cc72d8a05";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:106:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/substr_replace.js.map";s:10:"publicPath";s:112:"/assets/@survos/api-grid/node_modules/locutus/php/strings/substr_replace.js-6b7eb397f174dde77b8a553aef8dacf7.map";s:23:"publicPathWithoutDigest";s:79:"/assets/@survos/api-grid/node_modules/locutus/php/strings/substr_replace.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"6b7eb397f174dde77b8a553aef8dacf7";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:71:"@survos/api-grid/node_modules/locutus/php/strings/substr_replace.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:67:"@survos/api-grid/node_modules/locutus/php/strings/substr_replace.js";}