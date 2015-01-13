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
    file_put_contents($filepath, $append, FILE_APPEND);
  }
  
  public static function read_from_file($filepath) {
    return file_get_contents($filepath);
  }
  
}
?>