O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:88:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/max.js";s:10:"publicPath";s:94:"/assets/@survos/api-grid/node_modules/locutus/php/math/max-32b55a2f2f31c6abaa36956c7a643fd6.js";s:23:"publicPathWithoutDigest";s:61:"/assets/@survos/api-grid/node_modules/locutus/php/math/max.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:3330:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function max() {
  //  discuss at: https://locutus.io/php/max/
  // original by: Onno Marsman (https://twitter.com/onnomarsman)
  //  revised by: Onno Marsman (https://twitter.com/onnomarsman)
  // improved by: Jack
  //      note 1: Long code cause we're aiming for maximum PHP compatibility
  //   example 1: max(1, 3, 5, 6, 7)
  //   returns 1: 7
  //   example 2: max([2, 4, 5])
  //   returns 2: 5
  //   example 3: max(0, 'hello')
  //   returns 3: 0
  //   example 4: max('hello', 0)
  //   returns 4: 'hello'
  //   example 5: max(-1, 'hello')
  //   returns 5: 'hello'
  //   example 6: max([2, 4, 8], [2, 5, 7])
  //   returns 6: [2, 5, 7]

  var ar = void 0;
  var retVal = void 0;
  var i = 0;
  var n = 0;
  var argv = arguments;
  var argc = argv.length;
  var _obj2Array = function _obj2Array(obj) {
    if (Object.prototype.toString.call(obj) === '[object Array]') {
      return obj;
    } else {
      var _ar = [];
      for (var _i in obj) {
        if (obj.hasOwnProperty(_i)) {
          _ar.push(obj[_i]);
        }
      }
      return _ar;
    }
  };
  var _compare = function _compare(current, next) {
    var i = 0;
    var n = 0;
    var tmp = 0;
    var nl = 0;
    var cl = 0;

    if (current === next) {
      return 0;
    } else if ((typeof current === 'undefined' ? 'undefined' : _typeof(current)) === 'object') {
      if ((typeof next === 'undefined' ? 'undefined' : _typeof(next)) === 'object') {
        current = _obj2Array(current);
        next = _obj2Array(next);
        cl = current.length;
        nl = next.length;
        if (nl > cl) {
          return 1;
        } else if (nl < cl) {
          return -1;
        }
        for (i = 0, n = cl; i < n; ++i) {
          tmp = _compare(current[i], next[i]);
          if (tmp === 1) {
            return 1;
          } else if (tmp === -1) {
            return -1;
          }
        }
        return 0;
      }
      return -1;
    } else if ((typeof next === 'undefined' ? 'undefined' : _typeof(next)) === 'object') {
      return 1;
    } else if (isNaN(next) && !isNaN(current)) {
      if (current === 0) {
        return 0;
      }
      return current < 0 ? 1 : -1;
    } else if (isNaN(current) && !isNaN(next)) {
      if (next === 0) {
        return 0;
      }
      return next > 0 ? 1 : -1;
    }

    if (next === current) {
      return 0;
    }

    return next > current ? 1 : -1;
  };

  if (argc === 0) {
    throw new Error('At least one value should be passed to max()');
  } else if (argc === 1) {
    if (_typeof(argv[0]) === 'object') {
      ar = _obj2Array(argv[0]);
    } else {
      throw new Error('Wrong parameter count for max()');
    }
    if (ar.length === 0) {
      throw new Error('Array must contain at least one element for max()');
    }
  } else {
    ar = argv;
  }

  retVal = ar[0];
  for (i = 1, n = ar.length; i < n; ++i) {
    if (_compare(retVal, ar[i]) === 1) {
      retVal = ar[i];
    }
  }

  return retVal;
};
//# sourceMappingURL=max.js-5f9cf22635cab97cc752b715d271ae83.map";s:6:"digest";s:32:"32b55a2f2f31c6abaa36956c7a643fd6";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:92:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/max.js.map";s:10:"publicPath";s:98:"/assets/@survos/api-grid/node_modules/locutus/php/math/max.js-5f9cf22635cab97cc752b715d271ae83.map";s:23:"publicPathWithoutDigest";s:65:"/assets/@survos/api-grid/node_modules/locutus/php/math/max.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"5f9cf22635cab97cc752b715d271ae83";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:57:"@survos/api-grid/node_modules/locutus/php/math/max.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:53:"@survos/api-grid/node_modules/locutus/php/math/max.js";}