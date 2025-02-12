<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['feedback'])) {
    $email = "reyesajane26.23@gmail.com";
    $name = ($_POST['name']);
    $sender = ($_POST['email']);
    $comment = ($_POST['comment']);
    $suggest = ($_POST['suggest']);

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'SMTP.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = 'malolos.website@gmail.com';
    $mail->Password = 'bawf vwzu yjeh irki';

    $mail->setFrom('malolos.website@gmail.com', 'MalolosWebsite');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'Feedback from ' . $sender;
    $mail->Body = "<h1>Name: $name</12><br>
    <h4>Email: $sender</h4>\n
    <h2>Comment: $comment</h2>\n
    <h2>Suggestion: $suggest</h2>";

    $mail->send();
        
    
} 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Malolos Museum</title>
        <!---CSS LINK--->
        <link rel="stylesheet" href="style/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    </head>

    <body>   
        <header style="background-color: #362406;">
            <div class="container">
                <nav class="navbar navbar-expand-lg linear-border">
                    <a href="#" class="navbar-brand fs-3 ms-3 text-white" style="font-family: 'Batangas', sans-serif;">Museum Website</a>
                    <button class="navbar-toggler border-1 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#FFFFFF" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                        </svg>
                    </button>
                    <div class="collapse navbar-collapse" id="btn">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link mr-3 text-white text-center" href="home.html">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mr-3 text-white text-center" href="exhibit-gallery.html">EXHIBIT GALLERIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mr-3 text-white text-center" href="timeline.html">INTERACTIVE TIMELINE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mr-3 text-white text-center" href="education-and-resources.html">EDUCATION & RESOURCES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mr-3 text-white text-center" href="team.html">TEAM MEMBERS</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header> 

        <div class="container-fluid d-flex justify-content-center align-items-center custom-bg" style="height: calc(100vh - 70px);">
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <img src="https://github.com/Nthnnn26/MalolosMuseum.io/blob/main/assets/team/feedbackbg.png?raw=true" alt="" class="img-fluid linear-border" style="width: 50%;">
                <h1 class="text-white text-center py-3">We'd like to hear from you!</h1>
                <div class="d-flex justify-content-around mt-5">
                    <img src="https://github.com/Nthnnn26/MalolosMuseum.io/blob/main/assets/btn-back.png?raw=true" alt="" class="img-fluid hover-fx feedback-btn" onclick="teamPage()">
                    <img data-bs-toggle="modal" data-bs-target="#modalForward" src="https://github.com/Nthnnn26/MalolosMuseum.io/blob/main/assets/btn-forward.png?raw=true" alt="" class="img-fluid hover-fx feedback-btn">
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalForward" tabindex="-1" role="dialog" aria-labelledby="customModalLabel" aria-hidden="true" data-backdrop="true" data-keyboard="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content text-center align-items-center p-2" style="border-radius: 0px; background-color: #362406; box-shadow: 0 0 20px 10px rgba(204, 153, 0, 0.5);">
                    <div class="modal-header w-100 d-flex justify-content-between align-items-center" style="border: none;">
                        <h1 class="text-white flex-grow-1 py-1">FEEDBACK</h1>
                        <button class="hover-fx bg-transparent" style="border: none;"data-bs-dismiss="modal"><i class="fa fa-times fs-3" aria-hidden="true" style="color: #FFFFFF;"></i></button>              
                    </div>
                    <div class="container d-flex justify-content-center align-items-center">
                        <form action="" method="post" class="large-form">
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label class="control-label text-start text-white" style="width: 100%;">Enter Your Name</label>
                                    <input type="text" class="form-control form-control-lg" name="name" required style="border-radius: 0px;">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="control-label text-white text-start"  style="width: 100%;">Enter Your Email</label>
                                    <input type="email" class="form-control form-control-lg" name="email" required style="border-radius: 0px;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label class="control-label text-start text-white" style="width: 100%;">Comments / Feedback</label>
                                    <textarea class="form-control form-control-lg" rows="4" name="comment" required style="border-radius: 0px;"></textarea>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="control-label text-white text-start"  style="width: 100%;">Suggestions</label>
                                    <textarea class="form-control form-control-lg" rows="4" name="suggest" required style="border-radius: 0px;"></textarea>
                                </div>
                            </div>
                            <button class="mt-3" type="submit" name="feedback" style="background: transparent; border: none;"><img class="img-fluid hover-fx" src="https://github.com/Nthnnn26/MalolosMuseum.io/blob/main/assets/btn-submit.png?raw=true" alt="" style="width: 40%; height: auto;"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <script src="script/main.js"></script>
    </body>
</html>