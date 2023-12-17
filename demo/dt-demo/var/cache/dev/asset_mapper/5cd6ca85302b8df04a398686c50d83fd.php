O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strpbrk.js";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strpbrk-ef7cd31336f472d24bed281d0d2425dc.js";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strpbrk.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:675:""use strict";

module.exports = function strpbrk(haystack, charList) {
  //  discuss at: https://locutus.io/php/strpbrk/
  // original by: Alfonso Jimenez (https://www.alfonsojimenez.com)
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  //  revised by: Christoph
  // improved by: Brett Zamir (https://brett-zamir.me)
  //   example 1: strpbrk('This is a Simple text.', 'is')
  //   returns 1: 'is is a Simple text.'

  for (var i = 0, len = haystack.length; i < len; ++i) {
    if (charList.indexOf(haystack.charAt(i)) >= 0) {
      return haystack.slice(i);
    }
  }
  return false;
};
//# sourceMappingURL=strpbrk.js-9c4ea2c0bc38fb837cfda45f48fec93c.map";s:6:"digest";s:32:"ef7cd31336f472d24bed281d0d2425dc";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strpbrk.js.map";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strpbrk.js-9c4ea2c0bc38fb837cfda45f48fec93c.map";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strpbrk.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"9c4ea2c0bc38fb837cfda45f48fec93c";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/strings/strpbrk.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/strings/strpbrk.js";}