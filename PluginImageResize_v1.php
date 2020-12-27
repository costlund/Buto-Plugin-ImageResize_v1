<?php
class PluginImageResize_v1{
  /**
   * Resize to width.
   * @param string $filename
   * @param int $newwidth
   * @return null
   */
  public function rezise_to_width($filename, $newwidth){
    /**
     * Get current size.
     */
    list($width, $height) = getimagesize($filename);
    /**
     * Set new height.
     */
    $newheight = round($newwidth / $width * $height);
    /**
     * Load.
     */
    $thumb = imagecreatetruecolor($newwidth, $newheight);
    $source = imagecreatefromjpeg($filename);
    /**
     * Resize.
     */
    imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    /**
     * Save.
     */
    imagejpeg($thumb, $filename);
    /**
     * 
     */
    return null;
  }
}
