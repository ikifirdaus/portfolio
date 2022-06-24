<?php
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

function getColumn($column) {
  $data =  DB::select("SELECT COLUMN_NAME as `column`, DATA_TYPE as `type`
  FROM INFORMATION_SCHEMA.COLUMNS
  WHERE TABLE_SCHEMA = '".env('DB_DATABASE')."' AND TABLE_NAME = '".$column."' AND COLUMN_NAME NOT IN ('id','created_at','updated_at');");

  return $data;
}

function getTypeData($type){
  switch ($type) {
    case 'char':
    case 'varchar':
    case 'binary':
      return 'text';
      break;
    case 'text':
    case 'mediumtext':
    case 'longtext':
        return 'textarea';
        break;
    case 'int':
    case 'tinyinteger':
    case 'smallint':
    case 'bigint':
    case 'decimal':
    case 'float':
    case 'double':
    case 'boolean':
          return 'number';
          break;
    case 'date':
          return 'date';
          break;
    case 'datetime':          
          return 'datetimeLocal';
          break;
    case 'time':          
          return 'time';
          break;      
      default:
      return $type;
      break;
  }
}

function saveimage($message, $module){
  $dom = new  \domdocument();
  libxml_use_internal_errors(true);
  $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
  $images = $dom->getElementsByTagName('img');
  
  foreach($images as $img){
    $src = $img->getAttribute('src');

    // if the img source is 'data-url'
    if(preg_match('/data:image/', $src)){
      
      // get the mimetype
      preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
      $mimetype = $groups['mime'];
      
      // Generating a random filename
      $filename = uniqid().date('Ymdhis');
      $filepath = "/upload/$module/desc/$filename.$mimetype";

      // @see http://image.intervention.io/api/
      $image = Image::make($src)
        // resize if required
        /* ->resize(300, 200) */
        ->encode($mimetype, 100) 	// encode file to the specified mimetype
        ->save(public_path($filepath));
      
      $new_src = asset($filepath);
      $img->removeAttribute('src');
      $img->setAttribute('src', $new_src);
    } // <!--endif
  } // <!--endforeach
  
  return $dom->saveHTML();
}

function uploadImage($file, $module, $width = 1000, $height = 470) {
  $filename = date("YmdHis").uniqid().'.webp';
  $image = Image::make($file)
  ->encode('webp', 100)
  ->fit($width, $height)
  ->save(public_path('uploads/'.$module.'/'.$filename));
  return $filename;
}