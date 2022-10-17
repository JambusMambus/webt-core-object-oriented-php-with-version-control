<?php
require_once 'Video.php';

class YouTubeVideo extends Video{
    public function __construct($name, $src){
        $id = explode("=",$src);
        $id = $id[1];
        
        $html = '<iframe width="560" height="315" 
        src="https://www.youtube.com/embed/'.$id.'" 
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
        clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>';
    
        parent:: __construct($name, $src, $html);
    }
}