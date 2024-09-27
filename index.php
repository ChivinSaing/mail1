<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<?php 

    if(!empty($_POST["btn_save"]))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $position = $_POST["position"];
        $subject = $_POST["subject"];
        $to_email =['chivinsaing24@gmail.com'];

        $mailHeader = "Name ". $name . "Email " . $email . "Position " . $position . " Subject " . $subject;
        if(mail($to_email.$name.$mailHeader)){
            $message = " Your Information success... ";
        }
    }
?>
<body>
    <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-4">
        <form action="" method="post" name="emailcontact" class="p-2">
            <input type="text" class="form-control mt-2" require name="name" placeholder="Full name*">
            <input type="email" class="form-control mt-2" require name="email" placeholder="Email*">
            <input type="text" class="form-control mt-2" require name="position" placeholder="Position*">
            <input type="text" class="form-control mt-2" require name="subject" placeholder="Subject*">
            <button type="submit" class="btn btn-primary mt-4" require name="btn_save">Submit</button>
        </form>
    </div>
</body>
</html>