O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_column.js";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_column-e4fee932fc7882d4ae1c362626a27241.js";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_column.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:3694:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function array_column(input, ColumnKey) {
  var IndexKey = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : null;
  // eslint-disable-line camelcase
  //   discuss at: https://locutus.io/php/array_column/
  //   original by: Enzo Dañobeytía
  //   example 1: array_column([{name: 'Alex', value: 1}, {name: 'Elvis', value: 2}, {name: 'Michael', value: 3}], 'name')
  //   returns 1: {0: "Alex", 1: "Elvis", 2: "Michael"}
  //   example 2: array_column({0: {name: 'Alex', value: 1}, 1: {name: 'Elvis', value: 2}, 2: {name: 'Michael', value: 3}}, 'name')
  //   returns 2: {0: "Alex", 1: "Elvis", 2: "Michael"}
  //   example 3: array_column([{name: 'Alex', value: 1}, {name: 'Elvis', value: 2}, {name: 'Michael', value: 3}], 'name', 'value')
  //   returns 3: {1: "Alex", 2: "Elvis", 3: "Michael"}
  //   example 4: array_column([{name: 'Alex', value: 1}, {name: 'Elvis', value: 2}, {name: 'Michael', value: 3}], null, 'value')
  //   returns 4: {1: {name: 'Alex', value: 1}, 2: {name: 'Elvis', value: 2}, 3: {name: 'Michael', value: 3}}

  if (input !== null && ((typeof input === 'undefined' ? 'undefined' : _typeof(input)) === 'object' || Array.isArray(input))) {
    var newarray = [];
    if ((typeof input === 'undefined' ? 'undefined' : _typeof(input)) === 'object') {
      var temparray = [];
      var _iteratorNormalCompletion = true;
      var _didIteratorError = false;
      var _iteratorError = undefined;

      try {
        for (var _iterator = Object.keys(input)[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
          var key = _step.value;

          temparray.push(input[key]);
        }
      } catch (err) {
        _didIteratorError = true;
        _iteratorError = err;
      } finally {
        try {
          if (!_iteratorNormalCompletion && _iterator.return) {
            _iterator.return();
          }
        } finally {
          if (_didIteratorError) {
            throw _iteratorError;
          }
        }
      }

      input = temparray;
    }
    if (Array.isArray(input)) {
      var _iteratorNormalCompletion2 = true;
      var _didIteratorError2 = false;
      var _iteratorError2 = undefined;

      try {
        for (var _iterator2 = input.keys()[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
          var _key = _step2.value;

          if (IndexKey && input[_key][IndexKey]) {
            if (ColumnKey) {
              newarray[input[_key][IndexKey]] = input[_key][ColumnKey];
            } else {
              newarray[input[_key][IndexKey]] = input[_key];
            }
          } else {
            if (ColumnKey) {
              newarray.push(input[_key][ColumnKey]);
            } else {
              newarray.push(input[_key]);
            }
          }
        }
      } catch (err) {
        _didIteratorError2 = true;
        _iteratorError2 = err;
      } finally {
        try {
          if (!_iteratorNormalCompletion2 && _iterator2.return) {
            _iterator2.return();
          }
        } finally {
          if (_didIteratorError2) {
            throw _iteratorError2;
          }
        }
      }
    }
    return Object.assign({}, newarray);
  }
};
//# sourceMappingURL=array_column.js-7fd83e760818e11b95ed47f611134547.map";s:6:"digest";s:32:"e4fee932fc7882d4ae1c362626a27241";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:102:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_column.js.map";s:10:"publicPath";s:108:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_column.js-7fd83e760818e11b95ed47f611134547.map";s:23:"publicPathWithoutDigest";s:75:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_column.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"7fd83e760818e11b95ed47f611134547";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:67:"@survos/api-grid/node_modules/locutus/php/array/array_column.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/php/array/array_column.js";}