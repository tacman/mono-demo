O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/json/json_decode.js";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/php/json/json_decode-5de2d02a46ffd606188c6ff2ca589087.js";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/php/json/json_decode.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:4008:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function json_decode(strJson) {
  // eslint-disable-line camelcase
  //       discuss at: https://phpjs.org/functions/json_decode/
  //      original by: Public Domain (https://www.json.org/json2.js)
  // reimplemented by: Kevin van Zonneveld (https://kevin.vanzonneveld.net)
  //      improved by: T.J. Leahy
  //      improved by: Michael White
  //           note 1: If node or the browser does not offer JSON.parse,
  //           note 1: this function falls backslash
  //           note 1: to its own implementation using eval, and hence should be considered unsafe
  //        example 1: json_decode('[ 1 ]')
  //        returns 1: [1]

  /*
    https://www.JSON.org/json2.js
    2008-11-19
    Public Domain.
    NO WARRANTY EXPRESSED OR IMPLIED. USE AT YOUR OWN RISK.
    See https://www.JSON.org/js.html
  */

  var $global = typeof window !== 'undefined' ? window : global;
  $global.$locutus = $global.$locutus || {};
  var $locutus = $global.$locutus;
  $locutus.php = $locutus.php || {};

  var json = $global.JSON;
  if ((typeof json === 'undefined' ? 'undefined' : _typeof(json)) === 'object' && typeof json.parse === 'function') {
    try {
      return json.parse(strJson);
    } catch (err) {
      if (!(err instanceof SyntaxError)) {
        throw new Error('Unexpected error type in json_decode()');
      }

      // usable by json_last_error()
      $locutus.php.last_error_json = 4;
      return null;
    }
  }

  var chars = ['\0', '\xAD', '\u0600-\u0604', '\u070F', '\u17B4', '\u17B5', '\u200C-\u200F', '\u2028-\u202F', '\u2060-\u206F', '\uFEFF', '\uFFF0-\uFFFF'].join('');
  var cx = new RegExp('[' + chars + ']', 'g');
  var j = void 0;
  var text = strJson;

  // Parsing happens in four stages. In the first stage, we replace certain
  // Unicode characters with escape sequences. JavaScript handles many characters
  // incorrectly, either silently deleting them, or treating them as line endings.
  cx.lastIndex = 0;
  if (cx.test(text)) {
    text = text.replace(cx, function (a) {
      return '\\u' + ('0000' + a.charCodeAt(0).toString(16)).slice(-4);
    });
  }

  // In the second stage, we run the text against regular expressions that look
  // for non-JSON patterns. We are especially concerned with '()' and 'new'
  // because they can cause invocation, and '=' because it can cause mutation.
  // But just to be safe, we want to reject all unexpected forms.
  // We split the second stage into 4 regexp operations in order to work around
  // crippling inefficiencies in IE's and Safari's regexp engines. First we
  // replace the JSON backslash pairs with '@' (a non-JSON character). Second, we
  // replace all simple value tokens with ']' characters. Third, we delete all
  // open brackets that follow a colon or comma or that begin the text. Finally,
  // we look to see that the remaining characters are only whitespace or ']' or
  // ',' or ':' or '{' or '}'. If that is so, then the text is safe for eval.

  var m = /^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\/bfnrt]|u[0-9a-fA-F]{4})/g, '@').replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+-]?\d+)?/g, ']').replace(/(?:^|:|,)(?:\s*\[)+/g, ''));

  if (m) {
    // In the third stage we use the eval function to compile the text into a
    // JavaScript structure. The '{' operator is subject to a syntactic ambiguity
    // in JavaScript: it can begin a block or an object literal. We wrap the text
    // in parens to eliminate the ambiguity.
    j = eval('(' + text + ')'); // eslint-disable-line no-eval
    return j;
  }

  // usable by json_last_error()
  $locutus.php.last_error_json = 4;
  return null;
};
//# sourceMappingURL=json_decode.js-e781bd68b2ed2065a094efd744066734.map";s:6:"digest";s:32:"5de2d02a46ffd606188c6ff2ca589087";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/json/json_decode.js.map";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/json/json_decode.js-e781bd68b2ed2065a094efd744066734.map";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/json/json_decode.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"e781bd68b2ed2065a094efd744066734";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/json/json_decode.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/php/json/json_decode.js";}