O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:104:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/htmlspecialchars.js";s:10:"publicPath";s:110:"/assets/@survos/api-grid/node_modules/locutus/php/strings/htmlspecialchars-63e0e2ed92281a4cb0ffa22c397a83c0.js";s:23:"publicPathWithoutDigest";s:77:"/assets/@survos/api-grid/node_modules/locutus/php/strings/htmlspecialchars.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2479:"'use strict';

module.exports = function htmlspecialchars(string, quoteStyle, charset, doubleEncode) {
  //       discuss at: https://locutus.io/php/htmlspecialchars/
  //      original by: Mirek Slugen
  //      improved by: Kevin van Zonneveld (https://kvz.io)
  //      bugfixed by: Nathan
  //      bugfixed by: Arno
  //      bugfixed by: Brett Zamir (https://brett-zamir.me)
  //      bugfixed by: Brett Zamir (https://brett-zamir.me)
  //       revised by: Kevin van Zonneveld (https://kvz.io)
  //         input by: Ratheous
  //         input by: Mailfaker (https://www.weedem.fr/)
  //         input by: felix
  // reimplemented by: Brett Zamir (https://brett-zamir.me)
  //           note 1: charset argument not supported
  //        example 1: htmlspecialchars("<a href='test'>Test</a>", 'ENT_QUOTES')
  //        returns 1: '&lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;'
  //        example 2: htmlspecialchars("ab\"c'd", ['ENT_NOQUOTES', 'ENT_QUOTES'])
  //        returns 2: 'ab"c&#039;d'
  //        example 3: htmlspecialchars('my "&entity;" is still here', null, null, false)
  //        returns 3: 'my &quot;&entity;&quot; is still here'

  var optTemp = 0;
  var i = 0;
  var noquotes = false;
  if (typeof quoteStyle === 'undefined' || quoteStyle === null) {
    quoteStyle = 2;
  }
  string = string || '';
  string = string.toString();

  if (doubleEncode !== false) {
    // Put this first to avoid double-encoding
    string = string.replace(/&/g, '&amp;');
  }

  string = string.replace(/</g, '&lt;').replace(/>/g, '&gt;');

  var OPTS = {
    ENT_NOQUOTES: 0,
    ENT_HTML_QUOTE_SINGLE: 1,
    ENT_HTML_QUOTE_DOUBLE: 2,
    ENT_COMPAT: 2,
    ENT_QUOTES: 3,
    ENT_IGNORE: 4
  };
  if (quoteStyle === 0) {
    noquotes = true;
  }
  if (typeof quoteStyle !== 'number') {
    // Allow for a single string or an array of string flags
    quoteStyle = [].concat(quoteStyle);
    for (i = 0; i < quoteStyle.length; i++) {
      // Resolve string input to bitwise e.g. 'ENT_IGNORE' becomes 4
      if (OPTS[quoteStyle[i]] === 0) {
        noquotes = true;
      } else if (OPTS[quoteStyle[i]]) {
        optTemp = optTemp | OPTS[quoteStyle[i]];
      }
    }
    quoteStyle = optTemp;
  }
  if (quoteStyle & OPTS.ENT_HTML_QUOTE_SINGLE) {
    string = string.replace(/'/g, '&#039;');
  }
  if (!noquotes) {
    string = string.replace(/"/g, '&quot;');
  }

  return string;
};
//# sourceMappingURL=htmlspecialchars.js-9b3ba6c42ea307794a945c0d088748b6.map";s:6:"digest";s:32:"63e0e2ed92281a4cb0ffa22c397a83c0";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:108:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/htmlspecialchars.js.map";s:10:"publicPath";s:114:"/assets/@survos/api-grid/node_modules/locutus/php/strings/htmlspecialchars.js-9b3ba6c42ea307794a945c0d088748b6.map";s:23:"publicPathWithoutDigest";s:81:"/assets/@survos/api-grid/node_modules/locutus/php/strings/htmlspecialchars.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"9b3ba6c42ea307794a945c0d088748b6";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:73:"@survos/api-grid/node_modules/locutus/php/strings/htmlspecialchars.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:69:"@survos/api-grid/node_modules/locutus/php/strings/htmlspecialchars.js";}