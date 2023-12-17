O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/levenshtein.js";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/strings/levenshtein-395f45e49ec12915551e169d7bb7029d.js";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/strings/levenshtein.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2353:"'use strict';

module.exports = function levenshtein(s1, s2, costIns, costRep, costDel) {
  //       discuss at: https://locutus.io/php/levenshtein/
  //      original by: Carlos R. L. Rodrigues (https://www.jsfromhell.com)
  //      bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  //       revised by: Andrea Giammarchi (https://webreflection.blogspot.com)
  // reimplemented by: Brett Zamir (https://brett-zamir.me)
  // reimplemented by: Alexander M Beedie
  // reimplemented by: Rafał Kukawski (https://blog.kukawski.pl)
  //        example 1: levenshtein('Kevin van Zonneveld', 'Kevin van Sommeveld')
  //        returns 1: 3
  //        example 2: levenshtein("carrrot", "carrots")
  //        returns 2: 2
  //        example 3: levenshtein("carrrot", "carrots", 2, 3, 4)
  //        returns 3: 6

  // var LEVENSHTEIN_MAX_LENGTH = 255 // PHP limits the function to max 255 character-long strings

  costIns = costIns == null ? 1 : +costIns;
  costRep = costRep == null ? 1 : +costRep;
  costDel = costDel == null ? 1 : +costDel;

  if (s1 === s2) {
    return 0;
  }

  var l1 = s1.length;
  var l2 = s2.length;

  if (l1 === 0) {
    return l2 * costIns;
  }
  if (l2 === 0) {
    return l1 * costDel;
  }

  // Enable the 3 lines below to set the same limits on string length as PHP does
  // if (l1 > LEVENSHTEIN_MAX_LENGTH || l2 > LEVENSHTEIN_MAX_LENGTH) {
  //   return -1;
  // }

  var split = false;
  try {
    split = !'0'[0];
  } catch (e) {
    // Earlier IE may not support access by string index
    split = true;
  }

  if (split) {
    s1 = s1.split('');
    s2 = s2.split('');
  }

  var p1 = new Array(l2 + 1);
  var p2 = new Array(l2 + 1);

  var i1 = void 0,
      i2 = void 0,
      c0 = void 0,
      c1 = void 0,
      c2 = void 0,
      tmp = void 0;

  for (i2 = 0; i2 <= l2; i2++) {
    p1[i2] = i2 * costIns;
  }

  for (i1 = 0; i1 < l1; i1++) {
    p2[0] = p1[0] + costDel;

    for (i2 = 0; i2 < l2; i2++) {
      c0 = p1[i2] + (s1[i1] === s2[i2] ? 0 : costRep);
      c1 = p1[i2 + 1] + costDel;

      if (c1 < c0) {
        c0 = c1;
      }

      c2 = p2[i2] + costIns;

      if (c2 < c0) {
        c0 = c2;
      }

      p2[i2 + 1] = c0;
    }

    tmp = p1;
    p1 = p2;
    p2 = tmp;
  }

  c0 = p1[l2];

  return c0;
};
//# sourceMappingURL=levenshtein.js-f7f7cf2d53d3d06f322f92cc08bcc563.map";s:6:"digest";s:32:"395f45e49ec12915551e169d7bb7029d";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/levenshtein.js.map";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/strings/levenshtein.js-f7f7cf2d53d3d06f322f92cc08bcc563.map";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/strings/levenshtein.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"f7f7cf2d53d3d06f322f92cc08bcc563";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/strings/levenshtein.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/strings/levenshtein.js";}