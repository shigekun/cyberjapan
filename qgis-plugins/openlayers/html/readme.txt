QGIS OpenLayers Plugin
左上のメニューバーのプラグインから「Pythonプラグインを呼びだす」を選択
プラグインの一覧から「OpenLayers Plugin」を選択し、
「プラグインをインストール」ボタンを押す。



ホームディレクトリ内の
 .qgis/python/plugins/openlayers_plugin/html
に
 cyberjapan.html
 cjp_icon16.png
を保存し、
 .qgis/python/plugins/openlayers_plugin/openlayers_plugin.py
に
    self.olLayerTypeRegistry.add( OlLayerType(self, 'cyberjapan',  'html/cjp_icon.png',  'cyberjapan.html', True) )
を追加する。

