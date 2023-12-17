O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/str_getcsv.js";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_getcsv-7ed0eb8027c282673fec0ef568bdc856.js";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_getcsv.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2228:"'use strict';

module.exports = function str_getcsv(input, delimiter, enclosure, escape) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/str_getcsv/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: str_getcsv('"abc","def","ghi"')
  //   returns 1: ['abc', 'def', 'ghi']
  //   example 2: str_getcsv('"row2""cell1","row2cell2","row2cell3"', null, null, '"')
  //   returns 2: ['row2"cell1', 'row2cell2', 'row2cell3']

  /*
  // These test cases allowing for missing delimiters are not currently supported
    str_getcsv('"row2""cell1",row2cell2,row2cell3', null, null, '"');
    ['row2"cell1', 'row2cell2', 'row2cell3']
     str_getcsv('row1cell1,"row1,cell2",row1cell3', null, null, '"');
    ['row1cell1', 'row1,cell2', 'row1cell3']
     str_getcsv('"row2""cell1",row2cell2,"row2""""cell3"');
    ['row2"cell1', 'row2cell2', 'row2""cell3']
     str_getcsv('row1cell1,"row1,cell2","row1"",""cell3"', null, null, '"');
    ['row1cell1', 'row1,cell2', 'row1","cell3'];
     Should also test newlines within
  */

  var i = void 0;
  var inpLen = void 0;
  var output = [];
  var _backwards = function _backwards(str) {
    // We need to go backwards to simulate negative look-behind (don't split on
    // an escaped enclosure even if followed by the delimiter and another enclosure mark)
    return str.split('').reverse().join('');
  };
  var _pq = function _pq(str) {
    // preg_quote()
    return String(str).replace(/([\\.+*?[^\]$(){}=!<>|:])/g, '\\$1');
  };

  delimiter = delimiter || ',';
  enclosure = enclosure || '"';
  escape = escape || '\\';
  var pqEnc = _pq(enclosure);
  var pqEsc = _pq(escape);

  input = input.replace(new RegExp('^\\s*' + pqEnc), '').replace(new RegExp(pqEnc + '\\s*$'), '');

  // PHP behavior may differ by including whitespace even outside of the enclosure
  input = _backwards(input).split(new RegExp(pqEnc + '\\s*' + _pq(delimiter) + '\\s*' + pqEnc + '(?!' + pqEsc + ')', 'g')).reverse();

  for (i = 0, inpLen = input.length; i < inpLen; i++) {
    output.push(_backwards(input[i]).replace(new RegExp(pqEsc + pqEnc, 'g'), enclosure));
  }

  return output;
};
//# sourceMappingURL=str_getcsv.js-5fc729d5bc0ef87ef79ee1c36f51b85f.map";s:6:"digest";s:32:"7ed0eb8027c282673fec0ef568bdc856";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:102:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/str_getcsv.js.map";s:10:"publicPath";s:108:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_getcsv.js-5fc729d5bc0ef87ef79ee1c36f51b85f.map";s:23:"publicPathWithoutDigest";s:75:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_getcsv.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"5fc729d5bc0ef87ef79ee1c36f51b85f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:67:"@survos/api-grid/node_modules/locutus/php/strings/str_getcsv.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/php/strings/str_getcsv.js";}