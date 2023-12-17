O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/datetime/checkdate.js";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/checkdate-cf6e905c721382b563936e9066efd82e.js";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/checkdate.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:680:""use strict";

module.exports = function checkdate(m, d, y) {
  //  discuss at: https://locutus.io/php/checkdate/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // improved by: Pyerre
  // improved by: Theriault (https://github.com/Theriault)
  //   example 1: checkdate(12, 31, 2000)
  //   returns 1: true
  //   example 2: checkdate(2, 29, 2001)
  //   returns 2: false
  //   example 3: checkdate(3, 31, 2008)
  //   returns 3: true
  //   example 4: checkdate(1, 390, 2000)
  //   returns 4: false

  return m > 0 && m < 13 && y > 0 && y < 32768 && d > 0 && d <= new Date(y, m, 0).getDate();
};
//# sourceMappingURL=checkdate.js-e038690174c6ee531359ac99c27e5b3b.map";s:6:"digest";s:32:"cf6e905c721382b563936e9066efd82e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:102:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/datetime/checkdate.js.map";s:10:"publicPath";s:108:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/checkdate.js-e038690174c6ee531359ac99c27e5b3b.map";s:23:"publicPathWithoutDigest";s:75:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/checkdate.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"e038690174c6ee531359ac99c27e5b3b";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:67:"@survos/api-grid/node_modules/locutus/php/datetime/checkdate.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/php/datetime/checkdate.js";}