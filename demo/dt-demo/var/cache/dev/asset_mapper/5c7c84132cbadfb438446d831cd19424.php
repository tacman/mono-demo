O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:106:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_walk_recursive.js";s:10:"publicPath";s:112:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_walk_recursive-8311e73572e651affe9ffe654cb06036.js";s:23:"publicPathWithoutDigest";s:79:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_walk_recursive.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1688:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function array_walk_recursive(array, funcname, userdata) {
  // eslint-disable-line camelcase
  // original by: Hugues Peccatte
  //      note 1: Only works with user-defined functions, not built-in functions like void()
  //   example 1: array_walk_recursive([3, 4], function () {}, 'userdata')
  //   returns 1: true
  //   example 2: array_walk_recursive([3, [4]], function () {}, 'userdata')
  //   returns 2: true
  //   example 3: array_walk_recursive([3, []], function () {}, 'userdata')
  //   returns 3: true

  if (!array || (typeof array === 'undefined' ? 'undefined' : _typeof(array)) !== 'object') {
    return false;
  }

  if (typeof funcname !== 'function') {
    return false;
  }

  for (var key in array) {
    // apply "funcname" recursively only on arrays
    if (Object.prototype.toString.call(array[key]) === '[object Array]') {
      var funcArgs = [array[key], funcname];
      if (arguments.length > 2) {
        funcArgs.push(userdata);
      }
      if (array_walk_recursive.apply(null, funcArgs) === false) {
        return false;
      }
      continue;
    }
    try {
      if (arguments.length > 2) {
        funcname(array[key], key, userdata);
      } else {
        funcname(array[key], key);
      }
    } catch (e) {
      return false;
    }
  }

  return true;
};
//# sourceMappingURL=array_walk_recursive.js-a5d74f9fd1193cc672f5a64009ff4157.map";s:6:"digest";s:32:"8311e73572e651affe9ffe654cb06036";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:110:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_walk_recursive.js.map";s:10:"publicPath";s:116:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_walk_recursive.js-a5d74f9fd1193cc672f5a64009ff4157.map";s:23:"publicPathWithoutDigest";s:83:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_walk_recursive.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"a5d74f9fd1193cc672f5a64009ff4157";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:75:"@survos/api-grid/node_modules/locutus/php/array/array_walk_recursive.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:71:"@survos/api-grid/node_modules/locutus/php/array/array_walk_recursive.js";}