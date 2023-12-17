O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/var_export.js";s:10:"publicPath";s:100:"/assets/@survos/api-grid/node_modules/locutus/php/var/var_export-feaf32a991ee6c4a24cbc163a6eaee15.js";s:23:"publicPathWithoutDigest";s:67:"/assets/@survos/api-grid/node_modules/locutus/php/var/var_export.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:5277:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function var_export(mixedExpression, boolReturn) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/var_export/
  // original by: Philip Peterson
  // improved by: johnrembo
  // improved by: Brett Zamir (https://brett-zamir.me)
  //    input by: Brian Tafoya (https://www.premasolutions.com/)
  //    input by: Hans Henrik (https://hanshenrik.tk/)
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  // bugfixed by: simivar (https://github.com/simivar)
  // bugfixed by: simivar (https://github.com/simivar)
  // bugfixed by: simivar (https://github.com/simivar)
  //   example 1: var_export(null)
  //   returns 1: null
  //   example 2: var_export({0: 'Kevin', 1: 'van', 2: 'Zonneveld'}, true)
  //   returns 2: "array (\n  0 => 'Kevin',\n  1 => 'van',\n  2 => 'Zonneveld',\n)"
  //   example 3: var data = 'Kevin'
  //   example 3: var_export(data, true)
  //   returns 3: "'Kevin'"
  //   example 4: var_export({0: 'Kevin', 1: 'van', 'lastName': 'Zonneveld'}, true)
  //   returns 4: "array (\n  0 => 'Kevin',\n  1 => 'van',\n  'lastName' => 'Zonneveld',\n)"
  //   example 5: var_export([], true)
  //   returns 5: "array (\n)"
  //   example 6: var_export({ test: [ 'a', 'b' ] }, true)
  //   returns 6: "array (\n  'test' =>\n  array (\n    0 => 'a',\n    1 => 'b',\n  ),\n)"

  var echo = require('../strings/echo');
  var retstr = '';
  var iret = '';
  var value = void 0;
  var cnt = 0;
  var x = [];
  var i = 0;
  var funcParts = [];
  // We use the last argument (not part of PHP) to pass in
  // our indentation level
  var idtLevel = arguments[2] || 2;
  var innerIndent = '';
  var outerIndent = '';
  var getFuncName = function getFuncName(fn) {
    var name = /\W*function\s+([\w$]+)\s*\(/.exec(fn);
    if (!name) {
      return '(Anonymous)';
    }
    return name[1];
  };

  var _isNormalInteger = function _isNormalInteger(string) {
    var number = Math.floor(Number(string));
    return number !== Infinity && String(number) === string && number >= 0;
  };

  var _makeIndent = function _makeIndent(idtLevel) {
    return new Array(idtLevel + 1).join(' ');
  };
  var __getType = function __getType(inp) {
    var i = 0;
    var match = void 0;
    var types = void 0;
    var cons = void 0;
    var type = typeof inp === 'undefined' ? 'undefined' : _typeof(inp);
    if (type === 'object' && inp && inp.constructor && getFuncName(inp.constructor) === 'LOCUTUS_Resource') {
      return 'resource';
    }
    if (type === 'function') {
      return 'function';
    }
    if (type === 'object' && !inp) {
      // Should this be just null?
      return 'null';
    }
    if (type === 'object') {
      if (!inp.constructor) {
        return 'object';
      }
      cons = inp.constructor.toString();
      match = cons.match(/(\w+)\(/);
      if (match) {
        cons = match[1].toLowerCase();
      }
      types = ['boolean', 'number', 'string', 'array'];
      for (i = 0; i < types.length; i++) {
        if (cons === types[i]) {
          type = types[i];
          break;
        }
      }
    }
    return type;
  };
  var type = __getType(mixedExpression);

  if (type === null) {
    retstr = 'NULL';
  } else if (type === 'array' || type === 'object') {
    outerIndent = _makeIndent(idtLevel - 2);
    innerIndent = _makeIndent(idtLevel);
    for (i in mixedExpression) {
      value = ' ';
      var subtype = __getType(mixedExpression[i]);
      if (subtype === 'array' || subtype === 'object') {
        value = '\n';
      }
      value += var_export(mixedExpression[i], 1, idtLevel + 2);
      i = _isNormalInteger(i) ? i : '\'' + i + '\'';
      x[cnt++] = innerIndent + i + ' =>' + value;
    }
    if (x.length > 0) {
      iret = x.join(',\n') + ',\n';
    }
    retstr = outerIndent + 'array (\n' + iret + outerIndent + ')';
  } else if (type === 'function') {
    funcParts = mixedExpression.toString().match(/function .*?\((.*?)\) \{([\s\S]*)\}/);

    // For lambda functions, var_export() outputs such as the following:
    // '\000lambda_1'. Since it will probably not be a common use to
    // expect this (unhelpful) form, we'll use another PHP-exportable
    // construct, create_function() (though dollar signs must be on the
    // variables in JavaScript); if using instead in JavaScript and you
    // are using the namespaced version, note that create_function() will
    // not be available as a global
    retstr = "create_function ('" + funcParts[1] + "', '" + funcParts[2].replace(/'/g, "\\'") + "')";
  } else if (type === 'resource') {
    // Resources treated as null for var_export
    retstr = 'NULL';
  } else {
    retstr = typeof mixedExpression !== 'string' ? mixedExpression : "'" + mixedExpression.replace(/(["'])/g, '\\$1').replace(/\0/g, '\\0') + "'";
  }

  if (!boolReturn) {
    echo(retstr);
    return null;
  }

  return retstr;
};
//# sourceMappingURL=var_export.js-0774fd464b1cf1a6b9c43f768f355817.map";s:6:"digest";s:32:"feaf32a991ee6c4a24cbc163a6eaee15";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/var_export.js.map";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/php/var/var_export.js-0774fd464b1cf1a6b9c43f768f355817.map";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/php/var/var_export.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"0774fd464b1cf1a6b9c43f768f355817";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/php/var/var_export.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:59:"@survos/api-grid/node_modules/locutus/php/var/var_export.js";}