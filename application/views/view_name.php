<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form id="myForm">    
<!-- <form method="post" action="<?php echo ('controller_name/addImages'); ?>" enctype="multipart/form-data" class="col s12">     -->
        <div>  
            <span>More Images</span>
            <input required type="file" name="files[]" id="files" multiple>  
        </div>
        <input type="submit" id="submit" value="Submit photos">
    </form>   



<script>

    const myForm = document.getElementById("myForm");
    const files = document.getElementById("files");

    myForm.addEventListener("submit", e => {
    e.preventDefault();

    const endpoint = "controller_name/addImages";
    const formData = new FormData();

    console.log(files.files[0])

    formData.append("files", files.files[0]);

    debugger;

    fetch(endpoint, {
    method: "post",
    body: formData 
    })

    });

    </script>
</body>
</html>