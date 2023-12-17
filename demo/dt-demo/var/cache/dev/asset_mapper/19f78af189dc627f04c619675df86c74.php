O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:111:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/htmlspecialchars_decode.js";s:10:"publicPath";s:117:"/assets/@survos/api-grid/node_modules/locutus/php/strings/htmlspecialchars_decode-850e0414bc1914eabce91630260969fc.js";s:23:"publicPathWithoutDigest";s:84:"/assets/@survos/api-grid/node_modules/locutus/php/strings/htmlspecialchars_decode.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2553:"'use strict';

module.exports = function htmlspecialchars_decode(string, quoteStyle) {
  // eslint-disable-line camelcase
  //       discuss at: https://locutus.io/php/htmlspecialchars_decode/
  //      original by: Mirek Slugen
  //      improved by: Kevin van Zonneveld (https://kvz.io)
  //      bugfixed by: Mateusz "loonquawl" Zalega
  //      bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  //      bugfixed by: Brett Zamir (https://brett-zamir.me)
  //      bugfixed by: Brett Zamir (https://brett-zamir.me)
  //         input by: ReverseSyntax
  //         input by: Slawomir Kaniecki
  //         input by: Scott Cariss
  //         input by: Francois
  //         input by: Ratheous
  //         input by: Mailfaker (https://www.weedem.fr/)
  //       revised by: Kevin van Zonneveld (https://kvz.io)
  // reimplemented by: Brett Zamir (https://brett-zamir.me)
  //        example 1: htmlspecialchars_decode("<p>this -&gt; &quot;</p>", 'ENT_NOQUOTES')
  //        returns 1: '<p>this -> &quot;</p>'
  //        example 2: htmlspecialchars_decode("&amp;quot;")
  //        returns 2: '&quot;'

  var optTemp = 0;
  var i = 0;
  var noquotes = false;

  if (typeof quoteStyle === 'undefined') {
    quoteStyle = 2;
  }
  string = string.toString().replace(/&lt;/g, '<').replace(/&gt;/g, '>');
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
      // Resolve string input to bitwise e.g. 'PATHINFO_EXTENSION' becomes 4
      if (OPTS[quoteStyle[i]] === 0) {
        noquotes = true;
      } else if (OPTS[quoteStyle[i]]) {
        optTemp = optTemp | OPTS[quoteStyle[i]];
      }
    }
    quoteStyle = optTemp;
  }
  if (quoteStyle & OPTS.ENT_HTML_QUOTE_SINGLE) {
    // PHP doesn't currently escape if more than one 0, but it should:
    string = string.replace(/&#0*39;/g, "'");
    // This would also be useful here, but not a part of PHP:
    // string = string.replace(/&apos;|&#x0*27;/g, "'");
  }
  if (!noquotes) {
    string = string.replace(/&quot;/g, '"');
  }
  // Put this in last place to avoid escape being double-decoded
  string = string.replace(/&amp;/g, '&');

  return string;
};
//# sourceMappingURL=htmlspecialchars_decode.js-1173294a4eaf07bef3756664b85babb2.map";s:6:"digest";s:32:"850e0414bc1914eabce91630260969fc";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:115:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/htmlspecialchars_decode.js.map";s:10:"publicPath";s:121:"/assets/@survos/api-grid/node_modules/locutus/php/strings/htmlspecialchars_decode.js-1173294a4eaf07bef3756664b85babb2.map";s:23:"publicPathWithoutDigest";s:88:"/assets/@survos/api-grid/node_modules/locutus/php/strings/htmlspecialchars_decode.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"1173294a4eaf07bef3756664b85babb2";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:80:"@survos/api-grid/node_modules/locutus/php/strings/htmlspecialchars_decode.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:76:"@survos/api-grid/node_modules/locutus/php/strings/htmlspecialchars_decode.js";}