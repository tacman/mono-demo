O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strcoll.js";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strcoll-db245ea6f4650f046816187ae405ec39.js";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strcoll.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:782:"'use strict';

module.exports = function strcoll(str1, str2) {
  //  discuss at: https://locutus.io/php/strcoll/
  // original by: Brett Zamir (https://brett-zamir.me)
  // improved by: Brett Zamir (https://brett-zamir.me)
  //   example 1: strcoll('a', 'b')
  //   returns 1: -1

  var setlocale = require('../strings/setlocale');

  var $global = typeof window !== 'undefined' ? window : global;
  $global.$locutus = $global.$locutus || {};
  var $locutus = $global.$locutus;
  $locutus.php = $locutus.php || {};

  setlocale('LC_ALL', 0); // ensure setup of localization variables takes place

  var cmp = $locutus.php.locales[$locutus.php.localeCategories.LC_COLLATE].LC_COLLATE;

  return cmp(str1, str2);
};
//# sourceMappingURL=strcoll.js-50dcdc8dd72bde40d7d58ac298c2e72a.map";s:6:"digest";s:32:"db245ea6f4650f046816187ae405ec39";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strcoll.js.map";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strcoll.js-50dcdc8dd72bde40d7d58ac298c2e72a.map";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strcoll.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"50dcdc8dd72bde40d7d58ac298c2e72a";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/strings/strcoll.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/strings/strcoll.js";}