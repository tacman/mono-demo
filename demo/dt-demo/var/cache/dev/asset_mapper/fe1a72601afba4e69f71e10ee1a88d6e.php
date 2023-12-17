O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/substr.js";s:10:"publicPath";s:100:"/assets/@survos/api-grid/node_modules/locutus/php/strings/substr-06092442398cd2c403c846cdd02fd41b.js";s:23:"publicPathWithoutDigest";s:67:"/assets/@survos/api-grid/node_modules/locutus/php/strings/substr.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2212:"'use strict';

module.exports = function substr(input, start, len) {
  //  discuss at: https://locutus.io/php/substr/
  // original by: Martijn Wieringa
  // bugfixed by: T.Wild
  // improved by: Onno Marsman (https://twitter.com/onnomarsman)
  // improved by: Brett Zamir (https://brett-zamir.me)
  //  revised by: Theriault (https://github.com/Theriault)
  //  revised by: Rafał Kukawski
  //      note 1: Handles rare Unicode characters if 'unicode.semantics' ini (PHP6) is set to 'on'
  //   example 1: substr('abcdef', 0, -1)
  //   returns 1: 'abcde'
  //   example 2: substr(2, 0, -6)
  //   returns 2: false
  //   example 3: ini_set('unicode.semantics', 'on')
  //   example 3: substr('a\uD801\uDC00', 0, -1)
  //   returns 3: 'a'
  //   example 4: ini_set('unicode.semantics', 'on')
  //   example 4: substr('a\uD801\uDC00', 0, 2)
  //   returns 4: 'a\uD801\uDC00'
  //   example 5: ini_set('unicode.semantics', 'on')
  //   example 5: substr('a\uD801\uDC00', -1, 1)
  //   returns 5: '\uD801\uDC00'
  //   example 6: ini_set('unicode.semantics', 'on')
  //   example 6: substr('a\uD801\uDC00z\uD801\uDC00', -3, 2)
  //   returns 6: '\uD801\uDC00z'
  //   example 7: ini_set('unicode.semantics', 'on')
  //   example 7: substr('a\uD801\uDC00z\uD801\uDC00', -3, -1)
  //   returns 7: '\uD801\uDC00z'
  //        test: skip-3 skip-4 skip-5 skip-6 skip-7

  var _php_cast_string = require('../_helpers/_phpCastString'); // eslint-disable-line camelcase

  input = _php_cast_string(input);

  var ini_get = require('../info/ini_get'); // eslint-disable-line camelcase
  var multibyte = ini_get('unicode.semantics') === 'on';

  if (multibyte) {
    input = input.match(/[\uD800-\uDBFF][\uDC00-\uDFFF]|[\s\S]/g) || [];
  }

  var inputLength = input.length;
  var end = inputLength;

  if (start < 0) {
    start += end;
  }

  if (typeof len !== 'undefined') {
    if (len < 0) {
      end = len + end;
    } else {
      end = len + start;
    }
  }

  if (start > inputLength || start < 0 || start > end) {
    return false;
  }

  if (multibyte) {
    return input.slice(start, end).join('');
  }

  return input.slice(start, end);
};
//# sourceMappingURL=substr.js-f7e8ca36625d99c03753c5d166e70ded.map";s:6:"digest";s:32:"06092442398cd2c403c846cdd02fd41b";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/substr.js.map";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/php/strings/substr.js-f7e8ca36625d99c03753c5d166e70ded.map";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/php/strings/substr.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"f7e8ca36625d99c03753c5d166e70ded";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/php/strings/substr.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:59:"@survos/api-grid/node_modules/locutus/php/strings/substr.js";}