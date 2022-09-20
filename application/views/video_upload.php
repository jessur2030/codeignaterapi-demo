<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video File upload</title>
</head>
<body>

<h1>Video File upload</h1>

<form action="upload/upload_video_file" method="post" enctype="multipart/form-data">


<input type="file" name="video_file" id="video_file" accept="video/mp4,video/x-m4v,video/*" multiple> 
<button type="submit">Upload</button>

</form>
    
</body>
</html>