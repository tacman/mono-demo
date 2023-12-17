O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:104:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_count_values.js";s:10:"publicPath";s:110:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_count_values-10191d348afad8039e1cb4d93b447ec8.js";s:23:"publicPathWithoutDigest";s:77:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_count_values.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2003:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function array_count_values(array) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_count_values/
  // original by: Ates Goral (https://magnetiq.com)
  // improved by: Michael White (https://getsprink.com)
  // improved by: Kevin van Zonneveld (https://kvz.io)
  //    input by: sankai
  //    input by: Shingo
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  //   example 1: array_count_values([ 3, 5, 3, "foo", "bar", "foo" ])
  //   returns 1: {3:2, 5:1, "foo":2, "bar":1}
  //   example 2: array_count_values({ p1: 3, p2: 5, p3: 3, p4: "foo", p5: "bar", p6: "foo" })
  //   returns 2: {3:2, 5:1, "foo":2, "bar":1}
  //   example 3: array_count_values([ true, 4.2, 42, "fubar" ])
  //   returns 3: {42:1, "fubar":1}

  var tmpArr = {};
  var key = '';
  var t = '';

  var _getType = function _getType(obj) {
    // Objects are php associative arrays.
    var t = typeof obj === 'undefined' ? 'undefined' : _typeof(obj);
    t = t.toLowerCase();
    if (t === 'object') {
      t = 'array';
    }
    return t;
  };

  var _countValue = function _countValue(tmpArr, value) {
    if (typeof value === 'number') {
      if (Math.floor(value) !== value) {
        return;
      }
    } else if (typeof value !== 'string') {
      return;
    }

    if (value in tmpArr && tmpArr.hasOwnProperty(value)) {
      ++tmpArr[value];
    } else {
      tmpArr[value] = 1;
    }
  };

  t = _getType(array);
  if (t === 'array') {
    for (key in array) {
      if (array.hasOwnProperty(key)) {
        _countValue.call(this, tmpArr, array[key]);
      }
    }
  }

  return tmpArr;
};
//# sourceMappingURL=array_count_values.js-340a04a935cfe91c74b7e179cf2d3d39.map";s:6:"digest";s:32:"10191d348afad8039e1cb4d93b447ec8";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:108:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_count_values.js.map";s:10:"publicPath";s:114:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_count_values.js-340a04a935cfe91c74b7e179cf2d3d39.map";s:23:"publicPathWithoutDigest";s:81:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_count_values.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"340a04a935cfe91c74b7e179cf2d3d39";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:73:"@survos/api-grid/node_modules/locutus/php/array/array_count_values.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:69:"@survos/api-grid/node_modules/locutus/php/array/array_count_values.js";}