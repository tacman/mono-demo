O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_search.js";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_search-480e1630f0c7bfacb8f629916259b601.js";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_search.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1880:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function array_search(needle, haystack, argStrict) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_search/
  // original by: Kevin van Zonneveld (https://kvz.io)
  //    input by: Brett Zamir (https://brett-zamir.me)
  // bugfixed by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Reynier de la Rosa (https://scriptinside.blogspot.com.es/)
  //        test: skip-all
  //   example 1: array_search('zonneveld', {firstname: 'kevin', middle: 'van', surname: 'zonneveld'})
  //   returns 1: 'surname'
  //   example 2: array_search('3', {a: 3, b: 5, c: 7})
  //   returns 2: 'a'

  var strict = !!argStrict;
  var key = '';

  if ((typeof needle === 'undefined' ? 'undefined' : _typeof(needle)) === 'object' && needle.exec) {
    // Duck-type for RegExp
    if (!strict) {
      // Let's consider case sensitive searches as strict
      var flags = 'i' + (needle.global ? 'g' : '') + (needle.multiline ? 'm' : '') + (
      // sticky is FF only
      needle.sticky ? 'y' : '');
      needle = new RegExp(needle.source, flags);
    }
    for (key in haystack) {
      if (haystack.hasOwnProperty(key)) {
        if (needle.test(haystack[key])) {
          return key;
        }
      }
    }
    return false;
  }

  for (key in haystack) {
    if (haystack.hasOwnProperty(key)) {
      if (strict && haystack[key] === needle || !strict && haystack[key] == needle) {
        // eslint-disable-line eqeqeq
        return key;
      }
    }
  }

  return false;
};
//# sourceMappingURL=array_search.js-7e944a244384bf016bf36544955ac667.map";s:6:"digest";s:32:"480e1630f0c7bfacb8f629916259b601";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:102:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_search.js.map";s:10:"publicPath";s:108:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_search.js-7e944a244384bf016bf36544955ac667.map";s:23:"publicPathWithoutDigest";s:75:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_search.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"7e944a244384bf016bf36544955ac667";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:67:"@survos/api-grid/node_modules/locutus/php/array/array_search.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/php/array/array_search.js";}