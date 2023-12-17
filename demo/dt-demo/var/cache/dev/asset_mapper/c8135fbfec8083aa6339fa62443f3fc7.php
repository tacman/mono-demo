O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strncmp.js";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strncmp-d65006fd611c4a9b7d808ab3c57eb7f3.js";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strncmp.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:726:"'use strict';

module.exports = function strncmp(str1, str2, lgth) {
  //       discuss at: https://locutus.io/php/strncmp/
  //      original by: Waldo Malqui Silva (https://waldo.malqui.info)
  //         input by: Steve Hilder
  //      improved by: Kevin van Zonneveld (https://kvz.io)
  //       revised by: gorthaur
  // reimplemented by: Brett Zamir (https://brett-zamir.me)
  //        example 1: strncmp('aaa', 'aab', 2)
  //        returns 1: 0
  //        example 2: strncmp('aaa', 'aab', 3 )
  //        returns 2: -1

  var s1 = (str1 + '').substr(0, lgth);
  var s2 = (str2 + '').substr(0, lgth);

  return s1 === s2 ? 0 : s1 > s2 ? 1 : -1;
};
//# sourceMappingURL=strncmp.js-b342c74c8c906574ceeacbab1732cbc7.map";s:6:"digest";s:32:"d65006fd611c4a9b7d808ab3c57eb7f3";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strncmp.js.map";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strncmp.js-b342c74c8c906574ceeacbab1732cbc7.map";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strncmp.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"b342c74c8c906574ceeacbab1732cbc7";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/strings/strncmp.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/strings/strncmp.js";}