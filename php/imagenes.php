



  

 

        <?php



          $imagefile = 'baterias.jpg';

          /**
           * Opens new image
           *
           * @param $filename
           */
          function icreate($filename)
          {
            $isize = getimagesize($filename);
            if ($isize['mime']=='jpeg')
              return imagecreatefromjpeg($filename);
            elseif ($isize['mime']=='png')
              return imagecreatefrompng($filename);
            /* Add as many formats as you can */
          }

          /**
           * Resize maintaining aspect ratio
           *
           * @param $image
           * @param $width
           */
          function resizeAspectW($image, $width)
          {
            $aspect = imagesx($image) / imagesy($image);
            $height = $width / $aspect;
            $new = imageCreateTrueColor($width, $height);

            imagecopyresampled($new, $image, 0, 0, 0, 0, $width, $height, imagesx($image), imagesy($image));
            return $new;
          }

          /**
           * Resize maintaining aspect ratio
           *
           * @param $image
           * @param $height
           */
          function resizeAspectH($image, $height)
          {
            $aspect = imagesx($image) / imagesy($image);
            $width = $height * $aspect;
            $new = imageCreateTrueColor($width, $height);

            imagecopyresampled($new, $image, 0, 0, 0, 0, $width, $height, imagesx($image), imagesy($image));
            return $new;
          }

          $imgh = icreate($imagefile);
          $imgr = resizeAspectH($imgh, 520);

        // header('Content-type: jpeg');
          imagejpeg($imgr);
		      
	       ?>

     
        
     