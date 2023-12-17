O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:92:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/uksort.js";s:10:"publicPath";s:98:"/assets/@survos/api-grid/node_modules/locutus/php/array/uksort-b23096d293a7d0a29d55bb8f73dafa29.js";s:23:"publicPathWithoutDigest";s:65:"/assets/@survos/api-grid/node_modules/locutus/php/array/uksort.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2458:"'use strict';

module.exports = function uksort(inputArr, sorter) {
  //  discuss at: https://locutus.io/php/uksort/
  // original by: Brett Zamir (https://brett-zamir.me)
  // improved by: Brett Zamir (https://brett-zamir.me)
  //      note 1: The examples are correct, this is a new way
  //      note 1: This function deviates from PHP in returning a copy of the array instead
  //      note 1: of acting by reference and returning true; this was necessary because
  //      note 1: IE does not allow deleting and re-adding of properties without caching
  //      note 1: of property position; you can set the ini of "locutus.sortByReference" to true to
  //      note 1: get the PHP behavior, but use this only if you are in an environment
  //      note 1: such as Firefox extensions where for-in iteration order is fixed and true
  //      note 1: property deletion is supported. Note that we intend to implement the PHP
  //      note 1: behavior by default if IE ever does allow it; only gives shallow copy since
  //      note 1: is by reference in PHP anyways
  //   example 1: var $data = {d: 'lemon', a: 'orange', b: 'banana', c: 'apple'}
  //   example 1: uksort($data, function (key1, key2){ return (key1 === key2 ? 0 : (key1 > key2 ? 1 : -1)); })
  //   example 1: var $result = $data
  //   returns 1: {a: 'orange', b: 'banana', c: 'apple', d: 'lemon'}

  var tmpArr = {};
  var keys = [];
  var i = 0;
  var k = '';
  var sortByReference = false;
  var populateArr = {};

  if (typeof sorter === 'string') {
    sorter = this.window[sorter];
  }

  // Make a list of key names
  for (k in inputArr) {
    if (inputArr.hasOwnProperty(k)) {
      keys.push(k);
    }
  }

  // Sort key names
  try {
    if (sorter) {
      keys.sort(sorter);
    } else {
      keys.sort();
    }
  } catch (e) {
    return false;
  }

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
//# sourceMappingURL=uksort.js-dc7dc09e212a713d58cb252299aedd1e.map";s:6:"digest";s:32:"b23096d293a7d0a29d55bb8f73dafa29";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/uksort.js.map";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/php/array/uksort.js-dc7dc09e212a713d58cb252299aedd1e.map";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/php/array/uksort.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"dc7dc09e212a713d58cb252299aedd1e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/php/array/uksort.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:57:"@survos/api-grid/node_modules/locutus/php/array/uksort.js";}