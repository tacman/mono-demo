O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_combine.js";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_combine-4704e2539d5c52fb67f8e447574f4ccf.js";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_combine.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1470:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function array_combine(keys, values) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_combine/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // improved by: Brett Zamir (https://brett-zamir.me)
  //   example 1: array_combine([0,1,2], ['kevin','van','zonneveld'])
  //   returns 1: {0: 'kevin', 1: 'van', 2: 'zonneveld'}

  var newArray = {};
  var i = 0;

  // input sanitation
  // Only accept arrays or array-like objects
  // Require arrays to have a count
  if ((typeof keys === 'undefined' ? 'undefined' : _typeof(keys)) !== 'object') {
    return false;
  }
  if ((typeof values === 'undefined' ? 'undefined' : _typeof(values)) !== 'object') {
    return false;
  }
  if (typeof keys.length !== 'number') {
    return false;
  }
  if (typeof values.length !== 'number') {
    return false;
  }
  if (!keys.length) {
    return false;
  }

  // number of elements does not match
  if (keys.length !== values.length) {
    return false;
  }

  for (i = 0; i < keys.length; i++) {
    newArray[keys[i]] = values[i];
  }

  return newArray;
};
//# sourceMappingURL=array_combine.js-508537e1a9f03516399e185fd626686f.map";s:6:"digest";s:32:"4704e2539d5c52fb67f8e447574f4ccf";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_combine.js.map";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_combine.js-508537e1a9f03516399e185fd626686f.map";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_combine.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"508537e1a9f03516399e185fd626686f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/array/array_combine.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/array/array_combine.js";}