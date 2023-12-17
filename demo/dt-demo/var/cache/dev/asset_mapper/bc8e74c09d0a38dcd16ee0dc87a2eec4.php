O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/localeconv.js";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/php/strings/localeconv-9c59ffd26df4d221c0cf2b6e52b3f801.js";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/php/strings/localeconv.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1477:"'use strict';

module.exports = function localeconv() {
  //  discuss at: https://locutus.io/php/localeconv/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: setlocale('LC_ALL', 'en_US')
  //   example 1: localeconv()
  //   returns 1: {decimal_point: '.', thousands_sep: '', positive_sign: '', negative_sign: '-', int_frac_digits: 2, frac_digits: 2, p_cs_precedes: 1, p_sep_by_space: 0, n_cs_precedes: 1, n_sep_by_space: 0, p_sign_posn: 1, n_sign_posn: 1, grouping: [], int_curr_symbol: 'USD ', currency_symbol: '$', mon_decimal_point: '.', mon_thousands_sep: ',', mon_grouping: [3, 3]}

  var setlocale = require('../strings/setlocale');

  var arr = {};
  var prop = '';

  // ensure setup of localization variables takes place, if not already
  setlocale('LC_ALL', 0);

  var $global = typeof window !== 'undefined' ? window : global;
  $global.$locutus = $global.$locutus || {};
  var $locutus = $global.$locutus;
  $locutus.php = $locutus.php || {};

  // Make copies
  for (prop in $locutus.php.locales[$locutus.php.localeCategories.LC_NUMERIC].LC_NUMERIC) {
    arr[prop] = $locutus.php.locales[$locutus.php.localeCategories.LC_NUMERIC].LC_NUMERIC[prop];
  }
  for (prop in $locutus.php.locales[$locutus.php.localeCategories.LC_MONETARY].LC_MONETARY) {
    arr[prop] = $locutus.php.locales[$locutus.php.localeCategories.LC_MONETARY].LC_MONETARY[prop];
  }

  return arr;
};
//# sourceMappingURL=localeconv.js-6ac97feeb7eb6f569d72fac5b3c56063.map";s:6:"digest";s:32:"9c59ffd26df4d221c0cf2b6e52b3f801";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:102:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/localeconv.js.map";s:10:"publicPath";s:108:"/assets/@survos/api-grid/node_modules/locutus/php/strings/localeconv.js-6ac97feeb7eb6f569d72fac5b3c56063.map";s:23:"publicPathWithoutDigest";s:75:"/assets/@survos/api-grid/node_modules/locutus/php/strings/localeconv.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"6ac97feeb7eb6f569d72fac5b3c56063";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:67:"@survos/api-grid/node_modules/locutus/php/strings/localeconv.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/php/strings/localeconv.js";}