O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/htmlentities.js";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/strings/htmlentities-70e0feaf5508a0da3dd47380cb6a950d.js";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/strings/htmlentities.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1745:"'use strict';

module.exports = function htmlentities(string, quoteStyle, charset, doubleEncode) {
  //  discuss at: https://locutus.io/php/htmlentities/
  // original by: Kevin van Zonneveld (https://kvz.io)
  //  revised by: Kevin van Zonneveld (https://kvz.io)
  //  revised by: Kevin van Zonneveld (https://kvz.io)
  // improved by: nobbler
  // improved by: Jack
  // improved by: Rafał Kukawski (https://blog.kukawski.pl)
  // improved by: Dj (https://locutus.io/php/htmlentities:425#comment_134018)
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  //    input by: Ratheous
  //      note 1: function is compatible with PHP 5.2 and older
  //   example 1: htmlentities('Kevin & van Zonneveld')
  //   returns 1: 'Kevin &amp; van Zonneveld'
  //   example 2: htmlentities("foo'bar","ENT_QUOTES")
  //   returns 2: 'foo&#039;bar'

  var getHtmlTranslationTable = require('../strings/get_html_translation_table');
  var hashMap = getHtmlTranslationTable('HTML_ENTITIES', quoteStyle);

  string = string === null ? '' : string + '';

  if (!hashMap) {
    return false;
  }

  if (quoteStyle && quoteStyle === 'ENT_QUOTES') {
    hashMap["'"] = '&#039;';
  }

  doubleEncode = doubleEncode === null || !!doubleEncode;

  var regex = new RegExp('&(?:#\\d+|#x[\\da-f]+|[a-zA-Z][\\da-z]*);|[' + Object.keys(hashMap).join('')
  // replace regexp special chars
  .replace(/([()[\]{}\-.*+?^$|/\\])/g, '\\$1') + ']', 'g');

  return string.replace(regex, function (ent) {
    if (ent.length > 1) {
      return doubleEncode ? hashMap['&'] + ent.substr(1) : ent;
    }

    return hashMap[ent];
  });
};
//# sourceMappingURL=htmlentities.js-5709252bd717af983974219b190a5014.map";s:6:"digest";s:32:"70e0feaf5508a0da3dd47380cb6a950d";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:104:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/htmlentities.js.map";s:10:"publicPath";s:110:"/assets/@survos/api-grid/node_modules/locutus/php/strings/htmlentities.js-5709252bd717af983974219b190a5014.map";s:23:"publicPathWithoutDigest";s:77:"/assets/@survos/api-grid/node_modules/locutus/php/strings/htmlentities.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"5709252bd717af983974219b190a5014";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:69:"@survos/api-grid/node_modules/locutus/php/strings/htmlentities.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/strings/htmlentities.js";}