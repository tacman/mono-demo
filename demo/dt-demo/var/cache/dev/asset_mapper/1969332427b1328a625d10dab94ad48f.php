O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:89:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/empty.js";s:10:"publicPath";s:95:"/assets/@survos/api-grid/node_modules/locutus/php/var/empty-eacd09de598e81a4719cd249380bdc91.js";s:23:"publicPathWithoutDigest";s:62:"/assets/@survos/api-grid/node_modules/locutus/php/var/empty.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1667:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function empty(mixedVar) {
  //  discuss at: https://locutus.io/php/empty/
  // original by: Philippe Baumann
  //    input by: Onno Marsman (https://twitter.com/onnomarsman)
  //    input by: LH
  //    input by: Stoyan Kyosev (https://www.svest.org/)
  // bugfixed by: Kevin van Zonneveld (https://kvz.io)
  // improved by: Onno Marsman (https://twitter.com/onnomarsman)
  // improved by: Francesco
  // improved by: Marc Jansen
  // improved by: Rafał Kukawski (https://blog.kukawski.pl)
  //   example 1: empty(null)
  //   returns 1: true
  //   example 2: empty(undefined)
  //   returns 2: true
  //   example 3: empty([])
  //   returns 3: true
  //   example 4: empty({})
  //   returns 4: true
  //   example 5: empty({'aFunc' : function () { alert('humpty'); } })
  //   returns 5: false

  var undef = void 0;
  var key = void 0;
  var i = void 0;
  var len = void 0;
  var emptyValues = [undef, null, false, 0, '', '0'];

  for (i = 0, len = emptyValues.length; i < len; i++) {
    if (mixedVar === emptyValues[i]) {
      return true;
    }
  }

  if ((typeof mixedVar === 'undefined' ? 'undefined' : _typeof(mixedVar)) === 'object') {
    for (key in mixedVar) {
      if (mixedVar.hasOwnProperty(key)) {
        return false;
      }
    }
    return true;
  }

  return false;
};
//# sourceMappingURL=empty.js-7a7d0f948d43895b55bb7a3bc7fa1085.map";s:6:"digest";s:32:"eacd09de598e81a4719cd249380bdc91";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:93:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/empty.js.map";s:10:"publicPath";s:99:"/assets/@survos/api-grid/node_modules/locutus/php/var/empty.js-7a7d0f948d43895b55bb7a3bc7fa1085.map";s:23:"publicPathWithoutDigest";s:66:"/assets/@survos/api-grid/node_modules/locutus/php/var/empty.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"7a7d0f948d43895b55bb7a3bc7fa1085";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:58:"@survos/api-grid/node_modules/locutus/php/var/empty.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:54:"@survos/api-grid/node_modules/locutus/php/var/empty.js";}