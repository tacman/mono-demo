O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:93:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/nl2br.js";s:10:"publicPath";s:99:"/assets/@survos/api-grid/node_modules/locutus/php/strings/nl2br-80dd4813c4c001168d51d4403bf3ca80.js";s:23:"publicPathWithoutDigest";s:66:"/assets/@survos/api-grid/node_modules/locutus/php/strings/nl2br.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1457:"'use strict';

module.exports = function nl2br(str, isXhtml) {
  //  discuss at: https://locutus.io/php/nl2br/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // improved by: Philip Peterson
  // improved by: Onno Marsman (https://twitter.com/onnomarsman)
  // improved by: Atli Þór
  // improved by: Brett Zamir (https://brett-zamir.me)
  // improved by: Maximusya
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  // bugfixed by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Reynier de la Rosa (https://scriptinside.blogspot.com.es/)
  //    input by: Brett Zamir (https://brett-zamir.me)
  //   example 1: nl2br('Kevin\nvan\nZonneveld')
  //   returns 1: 'Kevin<br />\nvan<br />\nZonneveld'
  //   example 2: nl2br("\nOne\nTwo\n\nThree\n", false)
  //   returns 2: '<br>\nOne<br>\nTwo<br>\n<br>\nThree<br>\n'
  //   example 3: nl2br("\nOne\nTwo\n\nThree\n", true)
  //   returns 3: '<br />\nOne<br />\nTwo<br />\n<br />\nThree<br />\n'
  //   example 4: nl2br(null)
  //   returns 4: ''

  // Some latest browsers when str is null return and unexpected null value
  if (typeof str === 'undefined' || str === null) {
    return '';
  }

  // Adjust comment to avoid issue on locutus.io display
  var breakTag = isXhtml || typeof isXhtml === 'undefined' ? '<br ' + '/>' : '<br>';

  return (str + '').replace(/(\r\n|\n\r|\r|\n)/g, breakTag + '$1');
};
//# sourceMappingURL=nl2br.js-20aae8ca0a5683079211a33324bcb90f.map";s:6:"digest";s:32:"80dd4813c4c001168d51d4403bf3ca80";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/nl2br.js.map";s:10:"publicPath";s:103:"/assets/@survos/api-grid/node_modules/locutus/php/strings/nl2br.js-20aae8ca0a5683079211a33324bcb90f.map";s:23:"publicPathWithoutDigest";s:70:"/assets/@survos/api-grid/node_modules/locutus/php/strings/nl2br.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"20aae8ca0a5683079211a33324bcb90f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:62:"@survos/api-grid/node_modules/locutus/php/strings/nl2br.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:58:"@survos/api-grid/node_modules/locutus/php/strings/nl2br.js";}