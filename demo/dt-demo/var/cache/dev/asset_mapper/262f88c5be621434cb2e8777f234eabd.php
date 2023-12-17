O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:93:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/shuffle.js";s:10:"publicPath";s:99:"/assets/@survos/api-grid/node_modules/locutus/php/array/shuffle-bbf0860243c0ad3ca35f88d64449d42e.js";s:23:"publicPathWithoutDigest";s:66:"/assets/@survos/api-grid/node_modules/locutus/php/array/shuffle.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1377:"'use strict';

module.exports = function shuffle(inputArr) {
  //  discuss at: https://locutus.io/php/shuffle/
  // original by: Jonas Raoni Soares Silva (https://www.jsfromhell.com)
  //  revised by: Kevin van Zonneveld (https://kvz.io)
  //  revised by: Brett Zamir (https://brett-zamir.me)
  // improved by: Brett Zamir (https://brett-zamir.me)
  //   example 1: var $data = {5:'a', 2:'3', 3:'c', 4:5, 'q':5}
  //   example 1: ini_set('locutus.sortByReference', true)
  //   example 1: shuffle($data)
  //   example 1: var $result = $data.q
  //   returns 1: 5

  var valArr = [];
  var k = '';
  var i = 0;
  var sortByReference = false;
  var populateArr = [];

  for (k in inputArr) {
    // Get key and value arrays
    if (inputArr.hasOwnProperty(k)) {
      valArr.push(inputArr[k]);
      if (sortByReference) {
        delete inputArr[k];
      }
    }
  }
  valArr.sort(function () {
    return 0.5 - Math.random();
  });

  var iniVal = (typeof require !== 'undefined' ? require('../info/ini_get')('locutus.sortByReference') : undefined) || 'on';
  sortByReference = iniVal === 'on';
  populateArr = sortByReference ? inputArr : populateArr;

  for (i = 0; i < valArr.length; i++) {
    // Repopulate the old array
    populateArr[i] = valArr[i];
  }

  return sortByReference || populateArr;
};
//# sourceMappingURL=shuffle.js-e42518c0777557010a6d906d75ee4ff2.map";s:6:"digest";s:32:"bbf0860243c0ad3ca35f88d64449d42e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/shuffle.js.map";s:10:"publicPath";s:103:"/assets/@survos/api-grid/node_modules/locutus/php/array/shuffle.js-e42518c0777557010a6d906d75ee4ff2.map";s:23:"publicPathWithoutDigest";s:70:"/assets/@survos/api-grid/node_modules/locutus/php/array/shuffle.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"e42518c0777557010a6d906d75ee4ff2";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:62:"@survos/api-grid/node_modules/locutus/php/array/shuffle.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:58:"@survos/api-grid/node_modules/locutus/php/array/shuffle.js";}