O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/str_repeat.js";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_repeat-e0566db5f440b45ad40efc500ee5a317.js";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_repeat.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:688:"'use strict';

module.exports = function str_repeat(input, multiplier) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/str_repeat/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // improved by: Jonas Raoni Soares Silva (https://www.jsfromhell.com)
  // improved by: Ian Carter (https://euona.com/)
  //   example 1: str_repeat('-=', 10)
  //   returns 1: '-=-=-=-=-=-=-=-=-=-='

  var y = '';
  while (true) {
    if (multiplier & 1) {
      y += input;
    }
    multiplier >>= 1;
    if (multiplier) {
      input += input;
    } else {
      break;
    }
  }
  return y;
};
//# sourceMappingURL=str_repeat.js-8f341560c0dbe83be58102e87df5f278.map";s:6:"digest";s:32:"e0566db5f440b45ad40efc500ee5a317";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:102:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/str_repeat.js.map";s:10:"publicPath";s:108:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_repeat.js-8f341560c0dbe83be58102e87df5f278.map";s:23:"publicPathWithoutDigest";s:75:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_repeat.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"8f341560c0dbe83be58102e87df5f278";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:67:"@survos/api-grid/node_modules/locutus/php/strings/str_repeat.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/php/strings/str_repeat.js";}