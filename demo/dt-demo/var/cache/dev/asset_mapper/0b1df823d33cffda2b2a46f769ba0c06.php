O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/core/dispatchRequest.js";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/axios/lib/core/dispatchRequest-534ffbe37f393f32327442eb878516ca.js";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/axios/lib/core/dispatchRequest.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2181:"'use strict';

import transformData from './transformData.js';
import isCancel from '../cancel/isCancel.js';
import defaults from '../defaults/index.js';
import CanceledError from '../cancel/CanceledError.js';
import AxiosHeaders from './AxiosHeaders.js';
import adapters from "../adapters/adapters.js";

/**
 * Throws a `CanceledError` if cancellation has been requested.
 *
 * @param {Object} config The config that is to be used for the request
 *
 * @returns {void}
 */
function throwIfCancellationRequested(config) {
  if (config.cancelToken) {
    config.cancelToken.throwIfRequested();
  }

  if (config.signal && config.signal.aborted) {
    throw new CanceledError(null, config);
  }
}

/**
 * Dispatch a request to the server using the configured adapter.
 *
 * @param {object} config The config that is to be used for the request
 *
 * @returns {Promise} The Promise to be fulfilled
 */
export default function dispatchRequest(config) {
  throwIfCancellationRequested(config);

  config.headers = AxiosHeaders.from(config.headers);

  // Transform request data
  config.data = transformData.call(
    config,
    config.transformRequest
  );

  if (['post', 'put', 'patch'].indexOf(config.method) !== -1) {
    config.headers.setContentType('application/x-www-form-urlencoded', false);
  }

  const adapter = adapters.getAdapter(config.adapter || defaults.adapter);

  return adapter(config).then(function onAdapterResolution(response) {
    throwIfCancellationRequested(config);

    // Transform response data
    response.data = transformData.call(
      config,
      config.transformResponse,
      response
    );

    response.headers = AxiosHeaders.from(response.headers);

    return response;
  }, function onAdapterRejection(reason) {
    if (!isCancel(reason)) {
      throwIfCancellationRequested(config);

      // Transform response data
      if (reason && reason.response) {
        reason.response.data = transformData.call(
          config,
          config.transformResponse,
          reason.response
        );
        reason.response.headers = AxiosHeaders.from(reason.response.headers);
      }
    }

    return Promise.reject(reason);
  });
}
";s:6:"digest";s:32:"534ffbe37f393f32327442eb878516ca";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:6:{i:0;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:69:"/assets/@survos/api-grid/node_modules/axios/lib/core/transformData.js";s:16:"assetLogicalPath";s:61:"@survos/api-grid/node_modules/axios/lib/core/transformData.js";s:15:"assetSourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/core/transformData.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:1;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:66:"/assets/@survos/api-grid/node_modules/axios/lib/cancel/isCancel.js";s:16:"assetLogicalPath";s:58:"@survos/api-grid/node_modules/axios/lib/cancel/isCancel.js";s:15:"assetSourcePath";s:93:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/cancel/isCancel.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:2;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:65:"/assets/@survos/api-grid/node_modules/axios/lib/defaults/index.js";s:16:"assetLogicalPath";s:57:"@survos/api-grid/node_modules/axios/lib/defaults/index.js";s:15:"assetSourcePath";s:92:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/defaults/index.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:3;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:71:"/assets/@survos/api-grid/node_modules/axios/lib/cancel/CanceledError.js";s:16:"assetLogicalPath";s:63:"@survos/api-grid/node_modules/axios/lib/cancel/CanceledError.js";s:15:"assetSourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/cancel/CanceledError.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:4;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:68:"/assets/@survos/api-grid/node_modules/axios/lib/core/AxiosHeaders.js";s:16:"assetLogicalPath";s:60:"@survos/api-grid/node_modules/axios/lib/core/AxiosHeaders.js";s:15:"assetSourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/core/AxiosHeaders.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:5;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:68:"/assets/@survos/api-grid/node_modules/axios/lib/adapters/adapters.js";s:16:"assetLogicalPath";s:60:"@survos/api-grid/node_modules/axios/lib/adapters/adapters.js";s:15:"assetSourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/adapters/adapters.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/axios/lib/core/dispatchRequest.js";}