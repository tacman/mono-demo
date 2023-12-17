O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:91:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/print_r.js";s:10:"publicPath";s:97:"/assets/@survos/api-grid/node_modules/locutus/php/var/print_r-5a276313ac18c70e730e69f74ae45a7a.js";s:23:"publicPathWithoutDigest";s:64:"/assets/@survos/api-grid/node_modules/locutus/php/var/print_r.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2289:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function print_r(array, returnVal) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/print_r/
  // original by: Michael White (https://getsprink.com)
  // improved by: Ben Bryan
  // improved by: Brett Zamir (https://brett-zamir.me)
  // improved by: Kevin van Zonneveld (https://kvz.io)
  //    input by: Brett Zamir (https://brett-zamir.me)
  //   example 1: print_r(1, true)
  //   returns 1: '1'

  var echo = require('../strings/echo');

  var output = '';
  var padChar = ' ';
  var padVal = 4;

  var _repeatChar = function _repeatChar(len, padChar) {
    var str = '';
    for (var i = 0; i < len; i++) {
      str += padChar;
    }
    return str;
  };
  var _formatArray = function _formatArray(obj, curDepth, padVal, padChar) {
    if (curDepth > 0) {
      curDepth++;
    }

    var basePad = _repeatChar(padVal * curDepth, padChar);
    var thickPad = _repeatChar(padVal * (curDepth + 1), padChar);
    var str = '';

    if ((typeof obj === 'undefined' ? 'undefined' : _typeof(obj)) === 'object' && obj !== null && obj.constructor) {
      str += 'Array\n' + basePad + '(\n';
      for (var key in obj) {
        if (Object.prototype.toString.call(obj[key]) === '[object Array]') {
          str += thickPad;
          str += '[';
          str += key;
          str += '] => ';
          str += _formatArray(obj[key], curDepth + 1, padVal, padChar);
        } else {
          str += thickPad;
          str += '[';
          str += key;
          str += '] => ';
          str += obj[key];
          str += '\n';
        }
      }
      str += basePad + ')\n';
    } else if (obj === null || obj === undefined) {
      str = '';
    } else {
      // for our "resource" class
      str = obj.toString();
    }

    return str;
  };

  output = _formatArray(array, 0, padVal, padChar);

  if (returnVal !== true) {
    echo(output);
    return true;
  }
  return output;
};
//# sourceMappingURL=print_r.js-9b367286a87ffeee3004417b42f4e15c.map";s:6:"digest";s:32:"5a276313ac18c70e730e69f74ae45a7a";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/print_r.js.map";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/var/print_r.js-9b367286a87ffeee3004417b42f4e15c.map";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/var/print_r.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"9b367286a87ffeee3004417b42f4e15c";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/var/print_r.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:56:"@survos/api-grid/node_modules/locutus/php/var/print_r.js";}