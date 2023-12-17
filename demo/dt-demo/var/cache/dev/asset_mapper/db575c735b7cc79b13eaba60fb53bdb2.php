O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/core/transformData.js";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/axios/lib/core/transformData-b16890ba7bf32425681e35730b6d7b0d.js";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/axios/lib/core/transformData.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:770:"'use strict';

import utils from '../utils.js';
import defaults from '../defaults/index.js';
import AxiosHeaders from './AxiosHeaders.js';

/**
 * Transform the data for a request or a response
 *
 * @param {Array|Function} fns A single function or Array of functions
 * @param {?Object} response The response object
 *
 * @returns {*} The resulting transformed data
 */
export default function transformData(fns, response) {
  const config = this || defaults;
  const context = response || config;
  const headers = AxiosHeaders.from(context.headers);
  let data = context.data;

  utils.forEach(fns, function transform(fn) {
    data = fn.call(config, data, headers.normalize(), response ? response.status : undefined);
  });

  headers.normalize();

  return data;
}
";s:6:"digest";s:32:"b16890ba7bf32425681e35730b6d7b0d";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:3:{i:0;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:56:"/assets/@survos/api-grid/node_modules/axios/lib/utils.js";s:16:"assetLogicalPath";s:48:"@survos/api-grid/node_modules/axios/lib/utils.js";s:15:"assetSourcePath";s:83:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/utils.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:1;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:65:"/assets/@survos/api-grid/node_modules/axios/lib/defaults/index.js";s:16:"assetLogicalPath";s:57:"@survos/api-grid/node_modules/axios/lib/defaults/index.js";s:15:"assetSourcePath";s:92:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/defaults/index.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:2;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:68:"/assets/@survos/api-grid/node_modules/axios/lib/core/AxiosHeaders.js";s:16:"assetLogicalPath";s:60:"@survos/api-grid/node_modules/axios/lib/core/AxiosHeaders.js";s:15:"assetSourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/core/AxiosHeaders.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/axios/lib/core/transformData.js";}