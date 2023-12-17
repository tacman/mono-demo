O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:91:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/ksort.js";s:10:"publicPath";s:97:"/assets/@survos/api-grid/node_modules/locutus/php/array/ksort-8afc6b556d849f2efccb2753dd26fef7.js";s:23:"publicPathWithoutDigest";s:64:"/assets/@survos/api-grid/node_modules/locutus/php/array/ksort.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:4211:"'use strict';

module.exports = function ksort(inputArr, sortFlags) {
  //  discuss at: https://locutus.io/php/ksort/
  // original by: GeekFG (https://geekfg.blogspot.com)
  // improved by: Kevin van Zonneveld (https://kvz.io)
  // improved by: Brett Zamir (https://brett-zamir.me)
  //      note 1: This function deviates from PHP in returning a copy of the array instead
  //      note 1: of acting by reference and returning true; this was necessary because
  //      note 1: IE does not allow deleting and re-adding of properties without caching
  //      note 1: of property position; you can set the ini of "locutus.sortByReference" to true to
  //      note 1: get the PHP behavior, but use this only if you are in an environment
  //      note 1: such as Firefox extensions where for-in iteration order is fixed and true
  //      note 1: property deletion is supported. Note that we intend to implement the PHP
  //      note 1: behavior by default if IE ever does allow it; only gives shallow copy since
  //      note 1: is by reference in PHP anyways
  //      note 1: Since JS objects' keys are always strings, and (the
  //      note 1: default) SORT_REGULAR flag distinguishes by key type,
  //      note 1: if the content is a numeric string, we treat the
  //      note 1: "original type" as numeric.
  //   example 1: var $data = {d: 'lemon', a: 'orange', b: 'banana', c: 'apple'}
  //   example 1: ksort($data)
  //   example 1: var $result = $data
  //   returns 1: {a: 'orange', b: 'banana', c: 'apple', d: 'lemon'}
  //   example 2: ini_set('locutus.sortByReference', true)
  //   example 2: var $data = {2: 'van', 3: 'Zonneveld', 1: 'Kevin'}
  //   example 2: ksort($data)
  //   example 2: var $result = $data
  //   returns 2: {1: 'Kevin', 2: 'van', 3: 'Zonneveld'}

  var i18nlgd = require('../i18n/i18n_loc_get_default');
  var strnatcmp = require('../strings/strnatcmp');

  var tmpArr = {};
  var keys = [];
  var sorter = void 0;
  var i = void 0;
  var k = void 0;
  var sortByReference = false;
  var populateArr = {};

  var $global = typeof window !== 'undefined' ? window : global;
  $global.$locutus = $global.$locutus || {};
  var $locutus = $global.$locutus;
  $locutus.php = $locutus.php || {};
  $locutus.php.locales = $locutus.php.locales || {};

  switch (sortFlags) {
    case 'SORT_STRING':
      // compare items as strings
      sorter = function sorter(a, b) {
        return strnatcmp(b, a);
      };
      break;
    case 'SORT_LOCALE_STRING':
      // compare items as strings, based on the current locale
      // (set with i18n_loc_set_default() as of PHP6)
      var loc = i18nlgd();
      sorter = $locutus.locales[loc].sorting;
      break;
    case 'SORT_NUMERIC':
      // compare items numerically
      sorter = function sorter(a, b) {
        return a + 0 - (b + 0);
      };
      break;
    default:
      // case 'SORT_REGULAR': // compare items normally (don't change types)
      sorter = function sorter(a, b) {
        var aFloat = parseFloat(a);
        var bFloat = parseFloat(b);
        var aNumeric = aFloat + '' === a;
        var bNumeric = bFloat + '' === b;
        if (aNumeric && bNumeric) {
          return aFloat > bFloat ? 1 : aFloat < bFloat ? -1 : 0;
        } else if (aNumeric && !bNumeric) {
          return 1;
        } else if (!aNumeric && bNumeric) {
          return -1;
        }
        return a > b ? 1 : a < b ? -1 : 0;
      };
      break;
  }

  // Make a list of key names
  for (k in inputArr) {
    if (inputArr.hasOwnProperty(k)) {
      keys.push(k);
    }
  }
  keys.sort(sorter);

  var iniVal = (typeof require !== 'undefined' ? require('../info/ini_get')('locutus.sortByReference') : undefined) || 'on';
  sortByReference = iniVal === 'on';
  populateArr = sortByReference ? inputArr : populateArr;

  // Rebuild array with sorted key names
  for (i = 0; i < keys.length; i++) {
    k = keys[i];
    tmpArr[k] = inputArr[k];
    if (sortByReference) {
      delete inputArr[k];
    }
  }
  for (i in tmpArr) {
    if (tmpArr.hasOwnProperty(i)) {
      populateArr[i] = tmpArr[i];
    }
  }

  return sortByReference || populateArr;
};
//# sourceMappingURL=ksort.js-2890c482335fe3f218f0e85d5e21eea2.map";s:6:"digest";s:32:"8afc6b556d849f2efccb2753dd26fef7";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/ksort.js.map";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/array/ksort.js-2890c482335fe3f218f0e85d5e21eea2.map";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/array/ksort.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"2890c482335fe3f218f0e85d5e21eea2";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/array/ksort.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:56:"@survos/api-grid/node_modules/locutus/php/array/ksort.js";}