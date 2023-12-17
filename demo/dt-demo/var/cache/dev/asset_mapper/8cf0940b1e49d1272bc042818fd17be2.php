O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:93:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strtr.js";s:10:"publicPath";s:99:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strtr-0f329a6d1e8d8a313aab3f0bef9c4c20.js";s:23:"publicPathWithoutDigest";s:66:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strtr.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:3147:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function strtr(str, trFrom, trTo) {
  //  discuss at: https://locutus.io/php/strtr/
  // original by: Brett Zamir (https://brett-zamir.me)
  //    input by: uestla
  //    input by: Alan C
  //    input by: Taras Bogach
  //    input by: jpfle
  // bugfixed by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  //   example 1: var $trans = {'hello' : 'hi', 'hi' : 'hello'}
  //   example 1: strtr('hi all, I said hello', $trans)
  //   returns 1: 'hello all, I said hi'
  //   example 2: strtr('äaabaåccasdeöoo', 'äåö','aao')
  //   returns 2: 'aaabaaccasdeooo'
  //   example 3: strtr('ääääääää', 'ä', 'a')
  //   returns 3: 'aaaaaaaa'
  //   example 4: strtr('http', 'pthxyz','xyzpth')
  //   returns 4: 'zyyx'
  //   example 5: strtr('zyyx', 'pthxyz','xyzpth')
  //   returns 5: 'http'
  //   example 6: strtr('aa', {'a':1,'aa':2})
  //   returns 6: '2'

  var krsort = require('../array/krsort');
  var iniSet = require('../info/ini_set');

  var fr = '';
  var i = 0;
  var j = 0;
  var lenStr = 0;
  var lenFrom = 0;
  var sortByReference = false;
  var fromTypeStr = '';
  var toTypeStr = '';
  var istr = '';
  var tmpFrom = [];
  var tmpTo = [];
  var ret = '';
  var match = false;

  // Received replace_pairs?
  // Convert to normal trFrom->trTo chars
  if ((typeof trFrom === 'undefined' ? 'undefined' : _typeof(trFrom)) === 'object') {
    // Not thread-safe; temporarily set to true
    // @todo: Don't rely on ini here, use internal krsort instead
    sortByReference = iniSet('locutus.sortByReference', false);
    trFrom = krsort(trFrom);
    iniSet('locutus.sortByReference', sortByReference);

    for (fr in trFrom) {
      if (trFrom.hasOwnProperty(fr)) {
        tmpFrom.push(fr);
        tmpTo.push(trFrom[fr]);
      }
    }

    trFrom = tmpFrom;
    trTo = tmpTo;
  }

  // Walk through subject and replace chars when needed
  lenStr = str.length;
  lenFrom = trFrom.length;
  fromTypeStr = typeof trFrom === 'string';
  toTypeStr = typeof trTo === 'string';

  for (i = 0; i < lenStr; i++) {
    match = false;
    if (fromTypeStr) {
      istr = str.charAt(i);
      for (j = 0; j < lenFrom; j++) {
        if (istr === trFrom.charAt(j)) {
          match = true;
          break;
        }
      }
    } else {
      for (j = 0; j < lenFrom; j++) {
        if (str.substr(i, trFrom[j].length) === trFrom[j]) {
          match = true;
          // Fast forward
          i = i + trFrom[j].length - 1;
          break;
        }
      }
    }
    if (match) {
      ret += toTypeStr ? trTo.charAt(j) : trTo[j];
    } else {
      ret += str.charAt(i);
    }
  }

  return ret;
};
//# sourceMappingURL=strtr.js-e86337d08b870d390542f434640947fb.map";s:6:"digest";s:32:"0f329a6d1e8d8a313aab3f0bef9c4c20";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strtr.js.map";s:10:"publicPath";s:103:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strtr.js-e86337d08b870d390542f434640947fb.map";s:23:"publicPathWithoutDigest";s:70:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strtr.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"e86337d08b870d390542f434640947fb";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:62:"@survos/api-grid/node_modules/locutus/php/strings/strtr.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:58:"@survos/api-grid/node_modules/locutus/php/strings/strtr.js";}