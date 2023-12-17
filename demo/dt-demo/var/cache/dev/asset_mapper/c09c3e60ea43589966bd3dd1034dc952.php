O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:91:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/count.js";s:10:"publicPath";s:97:"/assets/@survos/api-grid/node_modules/locutus/php/array/count-859ab9839cf1bc3fb01cc65304664f50.js";s:23:"publicPathWithoutDigest";s:64:"/assets/@survos/api-grid/node_modules/locutus/php/array/count.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1218:"'use strict';

module.exports = function count(mixedVar, mode) {
  //  discuss at: https://locutus.io/php/count/
  // original by: Kevin van Zonneveld (https://kvz.io)
  //    input by: Waldo Malqui Silva (https://waldo.malqui.info)
  //    input by: merabi
  // bugfixed by: Soren Hansen
  // bugfixed by: Olivier Louvignes (https://mg-crea.com/)
  // improved by: Brett Zamir (https://brett-zamir.me)
  //   example 1: count([[0,0],[0,-4]], 'COUNT_RECURSIVE')
  //   returns 1: 6
  //   example 2: count({'one' : [1,2,3,4,5]}, 'COUNT_RECURSIVE')
  //   returns 2: 6

  var key = void 0;
  var cnt = 0;

  if (mixedVar === null || typeof mixedVar === 'undefined') {
    return 0;
  } else if (mixedVar.constructor !== Array && mixedVar.constructor !== Object) {
    return 1;
  }

  if (mode === 'COUNT_RECURSIVE') {
    mode = 1;
  }
  if (mode !== 1) {
    mode = 0;
  }

  for (key in mixedVar) {
    if (mixedVar.hasOwnProperty(key)) {
      cnt++;
      if (mode === 1 && mixedVar[key] && (mixedVar[key].constructor === Array || mixedVar[key].constructor === Object)) {
        cnt += count(mixedVar[key], 1);
      }
    }
  }

  return cnt;
};
//# sourceMappingURL=count.js-eee058ca666e546729f34c69d9b60e46.map";s:6:"digest";s:32:"859ab9839cf1bc3fb01cc65304664f50";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/count.js.map";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/array/count.js-eee058ca666e546729f34c69d9b60e46.map";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/array/count.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"eee058ca666e546729f34c69d9b60e46";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/array/count.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:56:"@survos/api-grid/node_modules/locutus/php/array/count.js";}