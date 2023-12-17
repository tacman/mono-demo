O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:106:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/html_entity_decode.js";s:10:"publicPath";s:112:"/assets/@survos/api-grid/node_modules/locutus/php/strings/html_entity_decode-ec0b242667dba0dd77f5d586be61c530.js";s:23:"publicPathWithoutDigest";s:79:"/assets/@survos/api-grid/node_modules/locutus/php/strings/html_entity_decode.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1540:"'use strict';

module.exports = function html_entity_decode(string, quoteStyle) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/html_entity_decode/
  // original by: john (https://www.jd-tech.net)
  //    input by: ger
  //    input by: Ratheous
  //    input by: Nick Kolosov (https://sammy.ru)
  // improved by: Kevin van Zonneveld (https://kvz.io)
  // improved by: marc andreu
  //  revised by: Kevin van Zonneveld (https://kvz.io)
  //  revised by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  // bugfixed by: Fox
  //   example 1: html_entity_decode('Kevin &amp; van Zonneveld')
  //   returns 1: 'Kevin & van Zonneveld'
  //   example 2: html_entity_decode('&amp;lt;')
  //   returns 2: '&lt;'

  var getHtmlTranslationTable = require('../strings/get_html_translation_table');
  var tmpStr = '';
  var entity = '';
  var symbol = '';
  tmpStr = string.toString();

  var hashMap = getHtmlTranslationTable('HTML_ENTITIES', quoteStyle);
  if (hashMap === false) {
    return false;
  }

  // @todo: &amp; problem
  // https://locutus.io/php/get_html_translation_table:416#comment_97660
  delete hashMap['&'];
  hashMap['&'] = '&amp;';

  for (symbol in hashMap) {
    entity = hashMap[symbol];
    tmpStr = tmpStr.split(entity).join(symbol);
  }
  tmpStr = tmpStr.split('&#039;').join("'");

  return tmpStr;
};
//# sourceMappingURL=html_entity_decode.js-c4101dea71429064fd792bd762fe65d4.map";s:6:"digest";s:32:"ec0b242667dba0dd77f5d586be61c530";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:110:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/html_entity_decode.js.map";s:10:"publicPath";s:116:"/assets/@survos/api-grid/node_modules/locutus/php/strings/html_entity_decode.js-c4101dea71429064fd792bd762fe65d4.map";s:23:"publicPathWithoutDigest";s:83:"/assets/@survos/api-grid/node_modules/locutus/php/strings/html_entity_decode.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"c4101dea71429064fd792bd762fe65d4";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:75:"@survos/api-grid/node_modules/locutus/php/strings/html_entity_decode.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:71:"@survos/api-grid/node_modules/locutus/php/strings/html_entity_decode.js";}