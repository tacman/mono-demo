O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:109:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_replace_recursive.js";s:10:"publicPath";s:115:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_replace_recursive-f697374bf22efd626f0e709e3129ce57.js";s:23:"publicPathWithoutDigest";s:82:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_replace_recursive.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1742:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function array_replace_recursive(arr) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_replace_recursive/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: array_replace_recursive({'citrus' : ['orange'], 'berries' : ['blackberry', 'raspberry']}, {'citrus' : ['pineapple'], 'berries' : ['blueberry']})
  //   returns 1: {citrus : ['pineapple'], berries : ['blueberry', 'raspberry']}

  var i = 0;
  var p = '';
  var argl = arguments.length;
  var retObj = void 0;

  if (argl < 2) {
    throw new Error('There should be at least 2 arguments passed to array_replace_recursive()');
  }

  // Although docs state that the arguments are passed in by reference,
  // it seems they are not altered, but rather the copy that is returned
  // So we make a copy here, instead of acting on arr itself
  if (Object.prototype.toString.call(arr) === '[object Array]') {
    retObj = [];
    for (p in arr) {
      retObj.push(arr[p]);
    }
  } else {
    retObj = {};
    for (p in arr) {
      retObj[p] = arr[p];
    }
  }

  for (i = 1; i < argl; i++) {
    for (p in arguments[i]) {
      if (retObj[p] && _typeof(retObj[p]) === 'object') {
        retObj[p] = array_replace_recursive(retObj[p], arguments[i][p]);
      } else {
        retObj[p] = arguments[i][p];
      }
    }
  }

  return retObj;
};
//# sourceMappingURL=array_replace_recursive.js-4774fd5d2b87b6fe645c026c9cb60615.map";s:6:"digest";s:32:"f697374bf22efd626f0e709e3129ce57";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:113:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_replace_recursive.js.map";s:10:"publicPath";s:119:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_replace_recursive.js-4774fd5d2b87b6fe645c026c9cb60615.map";s:23:"publicPathWithoutDigest";s:86:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_replace_recursive.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"4774fd5d2b87b6fe645c026c9cb60615";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:78:"@survos/api-grid/node_modules/locutus/php/array/array_replace_recursive.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:74:"@survos/api-grid/node_modules/locutus/php/array/array_replace_recursive.js";}