O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/is_unicode.js";s:10:"publicPath";s:100:"/assets/@survos/api-grid/node_modules/locutus/php/var/is_unicode-41277885fbfba6b01f86de6566701e9a.js";s:23:"publicPathWithoutDigest";s:67:"/assets/@survos/api-grid/node_modules/locutus/php/var/is_unicode.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1359:"'use strict';

module.exports = function is_unicode(vr) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/is_unicode/
  // original by: Brett Zamir (https://brett-zamir.me)
  //      note 1: Almost all strings in JavaScript should be Unicode
  //   example 1: is_unicode('We the peoples of the United Nations...!')
  //   returns 1: true

  if (typeof vr !== 'string') {
    return false;
  }

  // If surrogates occur outside of high-low pairs, then this is not Unicode
  var arr = [];
  var highSurrogate = '[\uD800-\uDBFF]';
  var lowSurrogate = '[\uDC00-\uDFFF]';
  var highSurrogateBeforeAny = new RegExp(highSurrogate + '([\\s\\S])', 'g');
  var lowSurrogateAfterAny = new RegExp('([\\s\\S])' + lowSurrogate, 'g');
  var singleLowSurrogate = new RegExp('^' + lowSurrogate + '$');
  var singleHighSurrogate = new RegExp('^' + highSurrogate + '$');

  while ((arr = highSurrogateBeforeAny.exec(vr)) !== null) {
    if (!arr[1] || !arr[1].match(singleLowSurrogate)) {
      // If high not followed by low surrogate
      return false;
    }
  }
  while ((arr = lowSurrogateAfterAny.exec(vr)) !== null) {
    if (!arr[1] || !arr[1].match(singleHighSurrogate)) {
      // If low not preceded by high surrogate
      return false;
    }
  }

  return true;
};
//# sourceMappingURL=is_unicode.js-87771b14c40781dc34de4c8b3255fdc5.map";s:6:"digest";s:32:"41277885fbfba6b01f86de6566701e9a";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/is_unicode.js.map";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/php/var/is_unicode.js-87771b14c40781dc34de4c8b3255fdc5.map";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/php/var/is_unicode.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"87771b14c40781dc34de4c8b3255fdc5";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/php/var/is_unicode.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:59:"@survos/api-grid/node_modules/locutus/php/var/is_unicode.js";}