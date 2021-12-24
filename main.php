  function unzip_folder($src,$dst){
    //extract zip file
    // Create new zip class
    $zip = new ZipArchive; 
    // Add zip filename which need
    // to unzip
    $zip->open($src);
    // Extracts to current directory
    $zip->extractTo($dst);

    $zip->close(); 

  }


$src = "zipme.zip";
$dst = "unzip";
unzip_folder($src,$dst);
