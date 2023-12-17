O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strspn.js";s:10:"publicPath";s:100:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strspn-015eddea4466bed3121ed8c33d3ad921.js";s:23:"publicPathWithoutDigest";s:67:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strspn.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1035:""use strict";

module.exports = function strspn(str1, str2, start, lgth) {
  //  discuss at: https://locutus.io/php/strspn/
  // original by: Valentina De Rosa
  // improved by: Brett Zamir (https://brett-zamir.me)
  //   example 1: strspn('42 is the answer, what is the question ...', '1234567890')
  //   returns 1: 2
  //   example 2: strspn('foo', 'o', 1, 2)
  //   returns 2: 2

  var found = void 0;
  var stri = void 0;
  var strj = void 0;
  var j = 0;
  var i = 0;

  start = start ? start < 0 ? str1.length + start : start : 0;
  lgth = lgth ? lgth < 0 ? str1.length + lgth - start : lgth : str1.length - start;
  str1 = str1.substr(start, lgth);

  for (i = 0; i < str1.length; i++) {
    found = 0;
    stri = str1.substring(i, i + 1);
    for (j = 0; j <= str2.length; j++) {
      strj = str2.substring(j, j + 1);
      if (stri === strj) {
        found = 1;
        break;
      }
    }
    if (found !== 1) {
      return i;
    }
  }

  return i;
};
//# sourceMappingURL=strspn.js-784191bde28389b8a1a4792a34a2d0b6.map";s:6:"digest";s:32:"015eddea4466bed3121ed8c33d3ad921";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strspn.js.map";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strspn.js-784191bde28389b8a1a4792a34a2d0b6.map";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strspn.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"784191bde28389b8a1a4792a34a2d0b6";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/php/strings/strspn.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:59:"@survos/api-grid/node_modules/locutus/php/strings/strspn.js";}