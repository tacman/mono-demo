O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/pcre/preg_replace.js";s:10:"publicPath";s:103:"/assets/@survos/api-grid/node_modules/locutus/php/pcre/preg_replace-8174db79911a9aa75411892594711156.js";s:23:"publicPathWithoutDigest";s:70:"/assets/@survos/api-grid/node_modules/locutus/php/pcre/preg_replace.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1246:"'use strict';

module.exports = function preg_replace(pattern, replacement, string) {
  // eslint-disable-line camelcase
  //   original by: rony2k6 (https://github.com/rony2k6)
  //   example 1: preg_replace('/xmas/i', 'Christmas', 'It was the night before Xmas.')
  //   returns 1: "It was the night before Christmas."
  //   example 2: preg_replace('/xmas/ig', 'Christmas', 'xMas: It was the night before Xmas.')
  //   returns 2: "Christmas: It was the night before Christmas."
  //   example 3: preg_replace('\/(\\w+) (\\d+), (\\d+)\/i', '$11,$3', 'April 15, 2003')
  //   returns 3: "April1,2003"
  //   example 4: preg_replace('/[^a-zA-Z0-9]+/', '', 'The Development of code . http://www.')
  //   returns 4: "TheDevelopmentofcodehttpwww"
  //   example 5: preg_replace('/[^A-Za-z0-9_\\s]/', '', 'D"usseldorfer H"auptstrasse')
  //   returns 5: "Dusseldorfer Hauptstrasse"
  var _flag = pattern.substr(pattern.lastIndexOf(pattern[0]) + 1);
  _flag = _flag !== '' ? _flag : 'g';
  var _pattern = pattern.substr(1, pattern.lastIndexOf(pattern[0]) - 1);
  var regex = new RegExp(_pattern, _flag);
  var result = string.replace(regex, replacement);

  return result;
};
//# sourceMappingURL=preg_replace.js-71111d78d4e40b334af8ab41a4683dd0.map";s:6:"digest";s:32:"8174db79911a9aa75411892594711156";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/pcre/preg_replace.js.map";s:10:"publicPath";s:107:"/assets/@survos/api-grid/node_modules/locutus/php/pcre/preg_replace.js-71111d78d4e40b334af8ab41a4683dd0.map";s:23:"publicPathWithoutDigest";s:74:"/assets/@survos/api-grid/node_modules/locutus/php/pcre/preg_replace.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"71111d78d4e40b334af8ab41a4683dd0";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:66:"@survos/api-grid/node_modules/locutus/php/pcre/preg_replace.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:62:"@survos/api-grid/node_modules/locutus/php/pcre/preg_replace.js";}