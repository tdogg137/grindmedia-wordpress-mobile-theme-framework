<?php
/**
 * GalleryView
 * 
 * Building out the front-end functionality utilizing NextGen Gallery plugin.
 *
 * PHP Version 5.3
 *
 * @package   PhotoGallery
 * @author    Tito To <tito@grindmedia.com>
 * @copyright 2011 Grind Networks
 * @access    public
 * @throws    Exception
 * 
 * // initilize GalleryView
 * $gallery = new GalleryView(gallery_id);
 * 
 * // Print out JSON of photos
 * $gallery->output();
 */
class GalleryView
{
	
	private $_galleryId  = NULL;
	private $_photos = array();

	// Class Initialization Methods //----------------------------------------------------------------------------------

	/**
	 * constructor
	 *
	 * Initilizes class and call _setGalleryArr
	 *
	 * @param int $id
	 * 
	 * @return void
	 */
	public function __construct($id)
	{
		$this->_galleryId = $id;
		$this->_setGalleryArr();
	}

	/**
	 * _setGalleryArr
	 *
	 * @return void 
	 */
	private function _setGalleryArr()
	{
		  global $wpdb;
		  $final = array();
		  
		  // Get the pictures
		  if ($this->_galleryId) 
		  {
		  
		    try {
		    	 $this->_photos = $wpdb->get_results("SELECT t.*, tt.* FROM $wpdb->nggallery AS t INNER JOIN $wpdb->nggpictures AS tt ON t.gid = tt.galleryid WHERE t.gid = '$this->_galleryId' AND tt.exclude != 1 ORDER BY tt.sortorder ASC");
		    } catch (Exception $e) {
		    	throw new Exception('No photos found for this Gallery!');
		    }
		    
		    foreach($this->_photos as $k => $photo) 
		    {
		      $aux = array();
		      $aux["id"] = $k;
		      $aux["title"] = $photo->alttext; // $photo->alttext;
		      $aux["desc"]  = stripslashes($photo->description);
                      $aux["desc"] = ( !empty($aux["desc"]) ) ? substr($aux["desc"], 0, 79) : $aux["desc"];
		      $aux["link"]  = SITE_URL . "/" . $photo->path ."/" . $photo->filename;
		      $aux["img"]   = SITE_URL . "/" . $photo->path ."/" . $photo->filename;
		      $aux["thumb"] = SITE_URL . "/" . $photo->path ."/thumbs/thumbs_" . $photo->filename;
		      
		      $final[] = $aux;
		    }
		    $this->_photos = $final;
		  }	    
	}
		
	/**
	 * output
	 *
	 * @param string $format
	 * @return string
	 */
	public function output($format = 'json')
	{     
		switch($format) 
		{
			case 'xml':
				break;
			case 'json':
			default:
				return json_encode($this->_photos);
				break;		
		}	
	}
}