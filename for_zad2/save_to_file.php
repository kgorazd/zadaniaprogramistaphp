<?php
class FileIO {
  
  public static function save_to_file($content, $filepath) {
    file_put_contents($filepath, $content);
  }
  
  public static function append_to_file($append, $filepath) {
    $content = FileIO::read_from_file($filepath);
    $content .= $append;
    file_put_contents($filepath, $content);
  }
  
  public static function better_append_to_file($append, $filepath) {
//     $content = FileIO::read_from_file($filepath);
//     $content .= $append;
    file_put_contents($filepath, $append, FILE_APPEND);
  }
  
  public static function read_from_file($filepath) {
    return file_get_contents($filepath);
  }
  
// $file = 'people.txt';
// Open the file to get existing content
// $current = file_get_contents($file);
// Append a new person to the file
// $current .= "John Smith\n";
// Write the contents back to the file
// file_put_contents($file, $current);
  
}
?>