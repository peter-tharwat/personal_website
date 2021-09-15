@php 
$preloadedFiles=array();
foreach($files as $file){ 

	$the_path=env('STORAGE_URL'). $file->path . $file->name;
	$preloadedFiles[] = array(
		"name" => $file->name,
		"type" => $file->getMimeType,
		"size" => $file->size,
		"file" =>  $the_path,
		"local" => $the_path,
	);
}echo json_encode($preloadedFiles);
@endphp