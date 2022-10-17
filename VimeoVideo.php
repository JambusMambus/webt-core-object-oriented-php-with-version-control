<?php

require_once 'Video.php';

class VimeoVideo extends Video{
    public function __construct($name, $src){
        $id = explode(".com/",$src);
        $id = $id[1];
        
        $html = '<iframe src="https://player.vimeo.com/video/'.$id.'?h=c6db007fe5&color=ef0800&title=0&byline=0&portrait=0" 
            width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
            </iframe>';
            
    
        parent:: __construct($name, $src, $html);
    }
}
