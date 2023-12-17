O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:89:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/fmod.js";s:10:"publicPath";s:95:"/assets/@survos/api-grid/node_modules/locutus/php/math/fmod-15fee7a4a66e4a4c619952568ff77c68.js";s:23:"publicPathWithoutDigest";s:62:"/assets/@survos/api-grid/node_modules/locutus/php/math/fmod.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1035:"'use strict';

module.exports = function fmod(x, y) {
  //  discuss at: https://locutus.io/php/fmod/
  // original by: Onno Marsman (https://twitter.com/onnomarsman)
  //    input by: Brett Zamir (https://brett-zamir.me)
  // bugfixed by: Kevin van Zonneveld (https://kvz.io)
  //   example 1: fmod(5.7, 1.3)
  //   returns 1: 0.5

  var tmp = void 0;
  var tmp2 = void 0;
  var p = 0;
  var pY = 0;
  var l = 0.0;
  var l2 = 0.0;

  tmp = x.toExponential().match(/^.\.?(.*)e(.+)$/);
  p = parseInt(tmp[2], 10) - (tmp[1] + '').length;
  tmp = y.toExponential().match(/^.\.?(.*)e(.+)$/);
  pY = parseInt(tmp[2], 10) - (tmp[1] + '').length;

  if (pY > p) {
    p = pY;
  }

  tmp2 = x % y;

  if (p < -100 || p > 20) {
    // toFixed will give an out of bound error so we fix it like this:
    l = Math.round(Math.log(tmp2) / Math.log(10));
    l2 = Math.pow(10, l);

    return (tmp2 / l2).toFixed(l - p) * l2;
  } else {
    return parseFloat(tmp2.toFixed(-p));
  }
};
//# sourceMappingURL=fmod.js-6c2c881d6e64874a8f62fb379a9faa57.map";s:6:"digest";s:32:"15fee7a4a66e4a4c619952568ff77c68";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:93:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/fmod.js.map";s:10:"publicPath";s:99:"/assets/@survos/api-grid/node_modules/locutus/php/math/fmod.js-6c2c881d6e64874a8f62fb379a9faa57.map";s:23:"publicPathWithoutDigest";s:66:"/assets/@survos/api-grid/node_modules/locutus/php/math/fmod.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"6c2c881d6e64874a8f62fb379a9faa57";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:58:"@survos/api-grid/node_modules/locutus/php/math/fmod.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:54:"@survos/api-grid/node_modules/locutus/php/math/fmod.js";}