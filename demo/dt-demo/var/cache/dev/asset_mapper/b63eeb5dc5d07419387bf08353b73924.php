O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/stripslashes.js";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/strings/stripslashes-c4a6338df089a9eb352a7c4c063b386e.js";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/strings/stripslashes.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1122:"'use strict';

module.exports = function stripslashes(str) {
  //       discuss at: https://locutus.io/php/stripslashes/
  //      original by: Kevin van Zonneveld (https://kvz.io)
  //      improved by: Ates Goral (https://magnetiq.com)
  //      improved by: marrtins
  //      improved by: rezna
  //         fixed by: Mick@el
  //      bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  //      bugfixed by: Brett Zamir (https://brett-zamir.me)
  //         input by: Rick Waldron
  //         input by: Brant Messenger (https://www.brantmessenger.com/)
  // reimplemented by: Brett Zamir (https://brett-zamir.me)
  //        example 1: stripslashes('Kevin\'s code')
  //        returns 1: "Kevin's code"
  //        example 2: stripslashes('Kevin\\\'s code')
  //        returns 2: "Kevin\'s code"

  return (str + '').replace(/\\(.?)/g, function (s, n1) {
    switch (n1) {
      case '\\':
        return '\\';
      case '0':
        return '\0';
      case '':
        return '';
      default:
        return n1;
    }
  });
};
//# sourceMappingURL=stripslashes.js-df6eadedc269f3d23f6788fcf7fba1e3.map";s:6:"digest";s:32:"c4a6338df089a9eb352a7c4c063b386e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:104:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/stripslashes.js.map";s:10:"publicPath";s:110:"/assets/@survos/api-grid/node_modules/locutus/php/strings/stripslashes.js-df6eadedc269f3d23f6788fcf7fba1e3.map";s:23:"publicPathWithoutDigest";s:77:"/assets/@survos/api-grid/node_modules/locutus/php/strings/stripslashes.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"df6eadedc269f3d23f6788fcf7fba1e3";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:69:"@survos/api-grid/node_modules/locutus/php/strings/stripslashes.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/strings/stripslashes.js";}