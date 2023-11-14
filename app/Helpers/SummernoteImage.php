<?php 

   function SummernoteImage($data){
    
    $content =$data; 
    libxml_use_internal_errors(true);
    $dom = new \DomDocument();
    $previously = libxml_use_internal_errors(true);
    $dom->loadHtml($content,LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    //unset($xmlErrors);
    //$xmlErrors = libxml_get_errors();
    //libxml_clear_errors();
    //libxml_use_internal_errors($previously);
    $imageFile = $dom->getElementsByTagName('img');


    foreach($imageFile as $item => $image){
        $data = $image->getAttribute('src');

        if (strpos($data, ';') === false) {
          continue;
         }
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $imgeData = base64_decode($data);
        $image_name="/summerImage/img/" . time().$item.'.png';
        $path = public_path() . $image_name;
        file_put_contents($path, $imgeData);
        //return getcwd();
        $image->removeAttribute('src');
        $image->setAttribute('src', $image_name);
     }

    $content = $dom->saveHTML();
    return $content;
  }


  function imageSize($image,$path){
     $data = getimagesize($image);
      $width=$data[0];
      $height=$data[1];
       if($width >= $height){
        $imageName = time().'.'.$image->extension(); 
        $image->move($path, $imageName);
        return $imageName;
       }else{
        $imageName="";
        return $imageName;
       }  
}
