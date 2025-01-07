<?php
$shpFile = "ZONAS_VALIDAS.shp";  // 输入 SHP 文件
$geoJsonFile = "zonas_validas.geojson";  // 输出 GeoJSON 文件

// 使用 ogr2ogr 进行转换
$command = "ogr2ogr -f GeoJSON $geoJsonFile $shpFile";
exec($command, $output, $return_var);

if ($return_var === 0) {
    echo "✅ Conversión exitosa: $geoJsonFile";
} else {
    echo "❌ Error en la conversión";
}
?>
