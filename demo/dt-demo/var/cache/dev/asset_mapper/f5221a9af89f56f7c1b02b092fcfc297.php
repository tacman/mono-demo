O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:92:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/var_dump.js";s:10:"publicPath";s:98:"/assets/@survos/api-grid/node_modules/locutus/php/var/var_dump-a88c1a9f7a571dba4ff04e5325f71f02.js";s:23:"publicPathWithoutDigest";s:65:"/assets/@survos/api-grid/node_modules/locutus/php/var/var_dump.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:5515:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function var_dump() {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/var_dump/
  // original by: Brett Zamir (https://brett-zamir.me)
  // improved by: Zahlii
  // improved by: Brett Zamir (https://brett-zamir.me)
  //      note 1: For returning a string, use var_export() with the second argument set to true
  //        test: skip-all
  //   example 1: var_dump(1)
  //   returns 1: 'int(1)'

  var echo = require('../strings/echo');
  var output = '';
  var padChar = ' ';
  var padVal = 4;
  var lgth = 0;
  var i = 0;

  var _getFuncName = function _getFuncName(fn) {
    var name = /\W*function\s+([\w$]+)\s*\(/.exec(fn);
    if (!name) {
      return '(Anonymous)';
    }
    return name[1];
  };

  var _repeatChar = function _repeatChar(len, padChar) {
    var str = '';
    for (var _i = 0; _i < len; _i++) {
      str += padChar;
    }
    return str;
  };
  var _getInnerVal = function _getInnerVal(val, thickPad) {
    var ret = '';
    if (val === null) {
      ret = 'NULL';
    } else if (typeof val === 'boolean') {
      ret = 'bool(' + val + ')';
    } else if (typeof val === 'string') {
      ret = 'string(' + val.length + ') "' + val + '"';
    } else if (typeof val === 'number') {
      if (parseFloat(val) === parseInt(val, 10)) {
        ret = 'int(' + val + ')';
      } else {
        ret = 'float(' + val + ')';
      }
    } else if (typeof val === 'undefined') {
      // The remaining are not PHP behavior because these values
      // only exist in this exact form in JavaScript
      ret = 'undefined';
    } else if (typeof val === 'function') {
      var funcLines = val.toString().split('\n');
      ret = '';
      for (var _i2 = 0, fll = funcLines.length; _i2 < fll; _i2++) {
        ret += (_i2 !== 0 ? '\n' + thickPad : '') + funcLines[_i2];
      }
    } else if (val instanceof Date) {
      ret = 'Date(' + val + ')';
    } else if (val instanceof RegExp) {
      ret = 'RegExp(' + val + ')';
    } else if (val.nodeName) {
      // Different than PHP's DOMElement
      switch (val.nodeType) {
        case 1:
          if (typeof val.namespaceURI === 'undefined' || val.namespaceURI === 'https://www.w3.org/1999/xhtml') {
            // Undefined namespace could be plain XML, but namespaceURI not widely supported
            ret = 'HTMLElement("' + val.nodeName + '")';
          } else {
            ret = 'XML Element("' + val.nodeName + '")';
          }
          break;
        case 2:
          ret = 'ATTRIBUTE_NODE(' + val.nodeName + ')';
          break;
        case 3:
          ret = 'TEXT_NODE(' + val.nodeValue + ')';
          break;
        case 4:
          ret = 'CDATA_SECTION_NODE(' + val.nodeValue + ')';
          break;
        case 5:
          ret = 'ENTITY_REFERENCE_NODE';
          break;
        case 6:
          ret = 'ENTITY_NODE';
          break;
        case 7:
          ret = 'PROCESSING_INSTRUCTION_NODE(' + val.nodeName + ':' + val.nodeValue + ')';
          break;
        case 8:
          ret = 'COMMENT_NODE(' + val.nodeValue + ')';
          break;
        case 9:
          ret = 'DOCUMENT_NODE';
          break;
        case 10:
          ret = 'DOCUMENT_TYPE_NODE';
          break;
        case 11:
          ret = 'DOCUMENT_FRAGMENT_NODE';
          break;
        case 12:
          ret = 'NOTATION_NODE';
          break;
      }
    }
    return ret;
  };

  var _formatArray = function _formatArray(obj, curDepth, padVal, padChar) {
    if (curDepth > 0) {
      curDepth++;
    }

    var basePad = _repeatChar(padVal * (curDepth - 1), padChar);
    var thickPad = _repeatChar(padVal * (curDepth + 1), padChar);
    var str = '';
    var val = '';

    if ((typeof obj === 'undefined' ? 'undefined' : _typeof(obj)) === 'object' && obj !== null) {
      if (obj.constructor && _getFuncName(obj.constructor) === 'LOCUTUS_Resource') {
        return obj.var_dump();
      }
      lgth = 0;
      for (var someProp in obj) {
        if (obj.hasOwnProperty(someProp)) {
          lgth++;
        }
      }
      str += 'array(' + lgth + ') {\n';
      for (var key in obj) {
        var objVal = obj[key];
        if ((typeof objVal === 'undefined' ? 'undefined' : _typeof(objVal)) === 'object' && objVal !== null && !(objVal instanceof Date) && !(objVal instanceof RegExp) && !objVal.nodeName) {
          str += thickPad;
          str += '[';
          str += key;
          str += '] =>\n';
          str += thickPad;
          str += _formatArray(objVal, curDepth + 1, padVal, padChar);
        } else {
          val = _getInnerVal(objVal, thickPad);
          str += thickPad;
          str += '[';
          str += key;
          str += '] =>\n';
          str += thickPad;
          str += val;
          str += '\n';
        }
      }
      str += basePad + '}\n';
    } else {
      str = _getInnerVal(obj, thickPad);
    }
    return str;
  };

  output = _formatArray(arguments[0], 0, padVal, padChar);
  for (i = 1; i < arguments.length; i++) {
    output += '\n' + _formatArray(arguments[i], 0, padVal, padChar);
  }

  echo(output);

  // Not how PHP does it, but helps us test:
  return output;
};
//# sourceMappingURL=var_dump.js-ed34f7cdc011a105debfcdccf5f0d460.map";s:6:"digest";s:32:"a88c1a9f7a571dba4ff04e5325f71f02";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/var_dump.js.map";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/php/var/var_dump.js-ed34f7cdc011a105debfcdccf5f0d460.map";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/php/var/var_dump.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"ed34f7cdc011a105debfcdccf5f0d460";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/php/var/var_dump.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:57:"@survos/api-grid/node_modules/locutus/php/var/var_dump.js";}