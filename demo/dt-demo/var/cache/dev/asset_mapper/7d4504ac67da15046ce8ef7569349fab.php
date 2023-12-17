O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:93:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/serialize.js";s:10:"publicPath";s:99:"/assets/@survos/api-grid/node_modules/locutus/php/var/serialize-987b03d922fa670ea76c0d7c4fdcc2ad.js";s:23:"publicPathWithoutDigest";s:66:"/assets/@survos/api-grid/node_modules/locutus/php/var/serialize.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:4243:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function serialize(mixedValue) {
  //  discuss at: https://locutus.io/php/serialize/
  // original by: Arpad Ray (mailto:arpad@php.net)
  // improved by: Dino
  // improved by: Le Torbi (https://www.letorbi.de/)
  // improved by: Kevin van Zonneveld (https://kvz.io/)
  // bugfixed by: Andrej Pavlovic
  // bugfixed by: Garagoth
  // bugfixed by: Russell Walker (https://www.nbill.co.uk/)
  // bugfixed by: Jamie Beck (https://www.terabit.ca/)
  // bugfixed by: Kevin van Zonneveld (https://kvz.io/)
  // bugfixed by: Ben (https://benblume.co.uk/)
  // bugfixed by: Codestar (https://codestarlive.com/)
  // bugfixed by: idjem (https://github.com/idjem)
  //    input by: DtTvB (https://dt.in.th/2008-09-16.string-length-in-bytes.html)
  //    input by: Martin (https://www.erlenwiese.de/)
  //      note 1: We feel the main purpose of this function should be to ease
  //      note 1: the transport of data between php & js
  //      note 1: Aiming for PHP-compatibility, we have to translate objects to arrays
  //   example 1: serialize(['Kevin', 'van', 'Zonneveld'])
  //   returns 1: 'a:3:{i:0;s:5:"Kevin";i:1;s:3:"van";i:2;s:9:"Zonneveld";}'
  //   example 2: serialize({firstName: 'Kevin', midName: 'van'})
  //   returns 2: 'a:2:{s:9:"firstName";s:5:"Kevin";s:7:"midName";s:3:"van";}'
  //   example 3: serialize( {'ü': 'ü', '四': '四', '𠜎': '𠜎'})
  //   returns 3: 'a:3:{s:2:"ü";s:2:"ü";s:3:"四";s:3:"四";s:4:"𠜎";s:4:"𠜎";}'

  var val = void 0,
      key = void 0,
      okey = void 0;
  var ktype = '';
  var vals = '';
  var count = 0;

  var _utf8Size = function _utf8Size(str) {
    return ~-encodeURI(str).split(/%..|./).length;
  };

  var _getType = function _getType(inp) {
    var match = void 0;
    var key = void 0;
    var cons = void 0;
    var types = void 0;
    var type = typeof inp === 'undefined' ? 'undefined' : _typeof(inp);

    if (type === 'object' && !inp) {
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
      for (key in types) {
        if (cons === types[key]) {
          type = types[key];
          break;
        }
      }
    }
    return type;
  };

  var type = _getType(mixedValue);

  switch (type) {
    case 'function':
      val = '';
      break;
    case 'boolean':
      val = 'b:' + (mixedValue ? '1' : '0');
      break;
    case 'number':
      val = (Math.round(mixedValue) === mixedValue ? 'i' : 'd') + ':' + mixedValue;
      break;
    case 'string':
      val = 's:' + _utf8Size(mixedValue) + ':"' + mixedValue + '"';
      break;
    case 'array':
    case 'object':
      val = 'a';
      /*
      if (type === 'object') {
        var objname = mixedValue.constructor.toString().match(/(\w+)\(\)/);
        if (objname === undefined) {
          return;
        }
        objname[1] = serialize(objname[1]);
        val = 'O' + objname[1].substring(1, objname[1].length - 1);
      }
      */

      for (key in mixedValue) {
        if (mixedValue.hasOwnProperty(key)) {
          ktype = _getType(mixedValue[key]);
          if (ktype === 'function') {
            continue;
          }

          okey = key.match(/^[0-9]+$/) ? parseInt(key, 10) : key;
          vals += serialize(okey) + serialize(mixedValue[key]);
          count++;
        }
      }
      val += ':' + count + ':{' + vals + '}';
      break;
    case 'undefined':
    default:
      // Fall-through
      // if the JS object has a property which contains a null value,
      // the string cannot be unserialized by PHP
      val = 'N';
      break;
  }
  if (type !== 'object' && type !== 'array') {
    val += ';';
  }

  return val;
};
//# sourceMappingURL=serialize.js-f1c5175a25ab7607473d6cf32f17b136.map";s:6:"digest";s:32:"987b03d922fa670ea76c0d7c4fdcc2ad";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/serialize.js.map";s:10:"publicPath";s:103:"/assets/@survos/api-grid/node_modules/locutus/php/var/serialize.js-f1c5175a25ab7607473d6cf32f17b136.map";s:23:"publicPathWithoutDigest";s:70:"/assets/@survos/api-grid/node_modules/locutus/php/var/serialize.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"f1c5175a25ab7607473d6cf32f17b136";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:62:"@survos/api-grid/node_modules/locutus/php/var/serialize.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:58:"@survos/api-grid/node_modules/locutus/php/var/serialize.js";}