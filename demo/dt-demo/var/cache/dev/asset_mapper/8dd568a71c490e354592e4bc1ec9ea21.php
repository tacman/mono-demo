O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/similar_text.js";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/strings/similar_text-3a66357100169ce71b07b4fb48faafed.js";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/strings/similar_text.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1964:"'use strict';

module.exports = function similar_text(first, second, percent) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/similar_text/
  // original by: Rafał Kukawski (https://blog.kukawski.pl)
  // bugfixed by: Chris McMacken
  // bugfixed by: Jarkko Rantavuori original by findings in stackoverflow (https://stackoverflow.com/questions/14136349/how-does-similar-text-work)
  // improved by: Markus Padourek (taken from https://www.kevinhq.com/2012/06/php-similartext-function-in-javascript_16.html)
  //   example 1: similar_text('Hello World!', 'Hello locutus!')
  //   returns 1: 8
  //   example 2: similar_text('Hello World!', null)
  //   returns 2: 0

  if (first === null || second === null || typeof first === 'undefined' || typeof second === 'undefined') {
    return 0;
  }

  first += '';
  second += '';

  var pos1 = 0;
  var pos2 = 0;
  var max = 0;
  var firstLength = first.length;
  var secondLength = second.length;
  var p = void 0;
  var q = void 0;
  var l = void 0;
  var sum = void 0;

  for (p = 0; p < firstLength; p++) {
    for (q = 0; q < secondLength; q++) {
      for (l = 0; p + l < firstLength && q + l < secondLength && first.charAt(p + l) === second.charAt(q + l); l++) {// eslint-disable-line max-len
        // @todo: ^-- break up this crazy for loop and put the logic in its body
      }
      if (l > max) {
        max = l;
        pos1 = p;
        pos2 = q;
      }
    }
  }

  sum = max;

  if (sum) {
    if (pos1 && pos2) {
      sum += similar_text(first.substr(0, pos1), second.substr(0, pos2));
    }

    if (pos1 + max < firstLength && pos2 + max < secondLength) {
      sum += similar_text(first.substr(pos1 + max, firstLength - pos1 - max), second.substr(pos2 + max, secondLength - pos2 - max));
    }
  }

  if (!percent) {
    return sum;
  }

  return sum * 200 / (firstLength + secondLength);
};
//# sourceMappingURL=similar_text.js-9a346dff13b0f32d88405d367a9dae2f.map";s:6:"digest";s:32:"3a66357100169ce71b07b4fb48faafed";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:104:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/similar_text.js.map";s:10:"publicPath";s:110:"/assets/@survos/api-grid/node_modules/locutus/php/strings/similar_text.js-9a346dff13b0f32d88405d367a9dae2f.map";s:23:"publicPathWithoutDigest";s:77:"/assets/@survos/api-grid/node_modules/locutus/php/strings/similar_text.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"9a346dff13b0f32d88405d367a9dae2f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:69:"@survos/api-grid/node_modules/locutus/php/strings/similar_text.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/strings/similar_text.js";}