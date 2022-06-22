<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/template/aboutme/inc/header.php';
    include_once $_SERVER['DOCUMENT_ROOT'].'/util/DBconnect.php';
?>

    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
                <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="template/aboutme/img/<?php echo $arProfile['picture'];?>" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4"><?php echo $arProfile['job'];?></h3>
                    <p><?php echo $arProfile['content'];?></p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2"><h6>Name: <span class="text-secondary"><?php echo $arProfile['fullname'];?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Birthday: <span class="text-secondary"><?php echo $arProfile['birthday'];?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Degree: <span class="text-secondary"><?php echo $arProfile['degree'];?>
						</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary"><?php echo $arProfile['experience'];?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Phone: <span class="text-secondary"><?php echo '+'.$arProfile['phone'];?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary"><?php echo $arProfile['mail'];?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Address: <span class="text-secondary"><?php echo $arProfile['address'];?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Job: <span class="text-secondary"><?php echo $arProfile['job'];?></span></h6></div>
                    </div>
                    <a href="" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Qualification Start -->
    <div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
                <h1 class="position-absolute text-uppercase text-primary">Education & Expericence</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="mb-4">My Education</h3>
                    <?php
                    $query="SELECT * FROM quality WHERE type=1";
                    $result=$mysqli->query($query);
                    while($arQuality1=mysqli_fetch_assoc($result)){
                    ?>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo $arQuality1['description']; ?></h5>
                            <p class="mb-2"><strong><?php echo $arQuality1['place']; ?></strong> | <small><?php echo $arQuality1['time']; ?></small></p>
                            <p><?php echo $arQuality1['detail']; ?></p>
                        </div>
                    </div>
                    <?php
                    };
                    ?>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">My Education</h3>
                    <?php
                    $query="SELECT * FROM quality WHERE type=2";
                    $result=$mysqli->query($query);
                    while($arQuality2=mysqli_fetch_assoc($result)){
                        ?>
                        <div class="border-left border-primary pt-2 pl-4 ml-2">
                            <div class="position-relative mb-4">
                                <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                                <h5 class="font-weight-bold mb-1"><?php echo $arQuality2['description']; ?></h5>
                                <p class="mb-2"><strong><?php echo $arQuality2['place']; ?></strong> | <small><?php echo $arQuality2['time']; ?></small></p>
                                <p><?php echo $arQuality2['detail']; ?></p>
                            </div>
                        </div>
                        <?php
                    };
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Qualification End -->

<!--Skill Start -->
<div class="container-fluid py-5" id="skill">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
            <h1 class="position-absolute text-uppercase text-primary">My Skills</h1>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">HTML</h6>
                        <h6 class="font-weight-bold">95%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">CSS</h6>
                        <h6 class="font-weight-bold">85%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">PHP</h6>
                        <h6 class="font-weight-bold">90%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">Javascript</h6>
                        <h6 class="font-weight-bold">90%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">Angular JS</h6>
                        <h6 class="font-weight-bold">95%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">Wordpress</h6>
                        <h6 class="font-weight-bold">85%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Skill End -->
    <!-- Skill Start -->
    <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Skills</h1>
            </div>
            <?php
            $query="SELECT * FROM skill";
            $result=$mysqli->query($query);
            while($arSkill=mysqli_fetch_assoc($result)){
            ?>
            <div class="row align-items-center">
                <?php
                    if($arSkill['id']%2!=0){
                ?>
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $arSkill['skill'];?></h6>
                            <h6 class="font-weight-bold"><?php echo $arSkill['level'];?></h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="<?php echo $arSkill['level'];?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <?php } else{?>
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $arSkill['skill'];?></h6>
                            <h6 class="font-weight-bold"><?php echo $arSkill['level'];?></h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="<?php echo $arSkill['level'];?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php }; ?>
        </div>
    </div>
    <!-- Skill End -->

    <!-- Services Start -->
<div class="container-fluid pt-5" id="service">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Project</h1>
            <h1 class="position-absolute text-uppercase text-primary">My Projects</h1>
        </div>
        <?php
        $query="SELECT * FROM project";
        $result=$mysqli->query($query);
        while($arProject=mysqli_fetch_assoc($result)){
            ?>
            <div class="row pb-3">
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-laptop-code service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0"><?php echo $arProject['name'];?></h4>
                    </div>
                    <p><?php echo $arProject['description'];?></p>
                    <a class="border-bottom border-primary text-decoration-none" href="<?php echo $arProject['detail'];?>">Read More</a>
                </div>
            </div>
        <?php }; ?>
    </div>
</div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid pt-5 pb-3" id="portfolio">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Portfolio</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">Anime</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Movie</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">Actor</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <?php
                $query="SELECT * FROM portfolio WHERE category LIKE 'anime'";
                $result=$mysqli->query($query);
                while($arAnime=mysqli_fetch_assoc($result)){

                ?>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img style="width: 300px; height: 200px;" class="img-fluid rounded w-100" src="template/aboutme/img/<?php  echo $arAnime['picture']; ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="template/aboutme/img/<?php  echo $arAnime['picture']; ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php }; ?>

                <?php
                $query="SELECT * FROM portfolio WHERE category LIKE 'movie' ";
                $result=$mysqli->query($query);
                while($arMovie=mysqli_fetch_assoc($result)){

                ?>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img style="width: 300px; height: 200px;" class="img-fluid rounded w-100" src="template/aboutme/img/<?php  echo $arMovie['picture']; ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="template/aboutme/img/<?php  echo $arMovie['picture']; ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php };?>

                <?php
                $query="SELECT * FROM portfolio WHERE category = 'actor' ";
                $result=$mysqli->query($query);
                while($arActor=mysqli_fetch_assoc($result)){
                ?>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img style="width: 300px; height: 200px;" class="img-fluid rounded w-100" src="template/aboutme/img/<?php echo $arActor['picture']; ?>" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="template/aboutme/img/<?php echo $arActor['picture']; ?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php };?>

            </div>
        </div>
    </div>
    <!-- Portfolio End -->
REVIEW

    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
                <h1 class="position-absolute text-uppercase text-primary">Contact Me</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form text-center">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/template/aboutme/inc/footer.php';
?>

