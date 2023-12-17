O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:90:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/is_int.js";s:10:"publicPath";s:96:"/assets/@survos/api-grid/node_modules/locutus/php/var/is_int-2425ce79d6890d6c769dab40b1972166.js";s:23:"publicPathWithoutDigest";s:63:"/assets/@survos/api-grid/node_modules/locutus/php/var/is_int.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:983:""use strict";

module.exports = function is_int(mixedVar) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/is_int/
  // original by: Alex
  // improved by: Kevin van Zonneveld (https://kvz.io)
  // improved by: WebDevHobo (https://webdevhobo.blogspot.com/)
  // improved by: Rafał Kukawski (https://blog.kukawski.pl)
  //  revised by: Matt Bradley
  // bugfixed by: Kevin van Zonneveld (https://kvz.io)
  //      note 1: 1.0 is simplified to 1 before it can be accessed by the function, this makes
  //      note 1: it different from the PHP implementation. We can't fix this unfortunately.
  //   example 1: is_int(23)
  //   returns 1: true
  //   example 2: is_int('23')
  //   returns 2: false
  //   example 3: is_int(23.5)
  //   returns 3: false
  //   example 4: is_int(true)
  //   returns 4: false

  return mixedVar === +mixedVar && isFinite(mixedVar) && !(mixedVar % 1);
};
//# sourceMappingURL=is_int.js-d9a67e2479723cc99d0d25af840c0be0.map";s:6:"digest";s:32:"2425ce79d6890d6c769dab40b1972166";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/is_int.js.map";s:10:"publicPath";s:100:"/assets/@survos/api-grid/node_modules/locutus/php/var/is_int.js-d9a67e2479723cc99d0d25af840c0be0.map";s:23:"publicPathWithoutDigest";s:67:"/assets/@survos/api-grid/node_modules/locutus/php/var/is_int.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"d9a67e2479723cc99d0d25af840c0be0";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:59:"@survos/api-grid/node_modules/locutus/php/var/is_int.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:55:"@survos/api-grid/node_modules/locutus/php/var/is_int.js";}