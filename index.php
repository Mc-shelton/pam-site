<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>premier accademy of music</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">

</head>

<body id="#top">
    <div id="tt_overlay">

    </div>
    <div id="media_nav">
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="curriculum.html">Curriculum</a></li>
                <li><a href="gallery.html">lessons</a></li>
                <li><a href="gallery.html">library</a></li>
                <li><a href="#contact">contact</a></li>
                <li><a href="#home">log in</a></li>
                <br>
                <br>
                <br>
                <li><a href="#home" href="gallery.html">Journals & Books</a></li>
            </ul>
        </nav>

    </div>
    <button type="button" onclick="show_nav()" id="show_nav">
        <hr>

        <hr>

        <hr>
    </button>
    <div id="reg_strip">
        <button onclick="register()" type="button" id="reg1">Register</button>
        <button onclick="window.location = 'signin.html'" type="button" id="reg">Sign in</button>

        <a onclick="help_()"><img src="images/images-36.webp"></a>
        <div id="help_drop">
            <p style="width: 100%; text-align:center; margin:unset; "><b>Need Help?</b><br> send us a message </p>
            <br>
            <br><br>
            <label for="email_help">Email</label><br>
            <input name="email_help" style="outline: none;" id="email_help" type="email"><br><br>
            <label for="question">Question</label><br>
            <textarea style="max-height: 150px; height:150px; max-width: 170px; width:170px; outline:none;"></textarea><br>
            <button disabled>SEND</button>
            <button onclick="close_disp()">CLOSE</button>

        </div>
        <a onclick="search_()"><img style="border: 1px solid black; width: 17px; height: 17px;" src="images/images-2.png"></a>
        <input type="search" id="searchBar">
        <script>
            var true__ = true

            function help_() {
                if (help_drop.style.display == 'none' || true__) {
                    help_drop.style.display = 'block';
                    true__ = false
                } else {
                    help_drop.style.display = 'none';
                }
            }

            var searchBar = document.getElementById('searchBar');
            var firstTrue = true


            function search_() {

                if (searchBar.style.display == 'none' || firstTrue) {
                    searchBar.style.display = 'block';
                    firstTrue = false;
                } else {
                    searchBar.style.display = 'none';
                }
            }
        </script>

        <a id="spec" href="about.html"><img src="images/pam logo.png">
            <p><span style="color: rgb(0, 47, 255); font-weight: bold;">Premier</span> Academy of Music</p>
        </a>
        <p><a id="a" href="#media" onclick="disabled()">Journals & Books</a></p>
    </div>
    <header id="showcase">

        <div class="overlay"></div>
        <div id="navigation">
            <div id="branding">
                <img src="images/pam logo.png" alt="pam logo">
                <hr style="height: 2px;">
                <h1>PAM</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="curriculum.html">Curriculum</a></li>
                    <li><a href="gallery.html">lessons</a></li>
                    <li><a href="gallery.html">library</a></li>
                    <li><a href="#contact">contact</a></li>
                    <li><a href="signin.html">log in</a></li>
                </ul>
            </nav>


        </div>

        <p id="change_p" style="width: 100%; margin-left: 0; text-align: center;"></p>

        <div id="_boxes">
            <div id="mark"></div>
            <div id="mark1"></div>
            <div id="mark2"></div>
            <div id="mark3"></div>

        </div>

    </header>
    <section id="intake">


        <h2>On-Site & Online First Quarter Intake Ongoing</h2>
        <h5>Call +254 795 595790</h5>
        <button onclick="disp_versity()" type="button">see intaking versities</button>

        <div id="upload_message">
            <div id="Message">
                <?php
                if (isset($_SESSION['status'])) {
                    echo "<script>

                function uploadMessage(){
                    upload_message.style.display = 'block';
                    tt_overlay.style.display = 'block';
                }
                uploadMessage();
                </>";
                    echo "<p>" . $_SESSION['status'] . "</p>";
                    unset($_SESSION['status']);
                }
                ?>
            </div>
            <button onclick="close_disp()" type="button">close</button>
        </div>

        <div id="int_versity">
            <div id="list">
                <p>no intaking versities at the moment</p>
            </div>
            <button onclick="register()" type="button" style="color: grey;" disabled>register</button>
            <button onclick="close_disp()" type="button">close</button>
        </div>


        <div id="reg_form">
            <form action="register.php" method="POST" onsubmit="return checked()">
                <fieldset>
                    <legend><img src="images/pam logo.png" style="display: flex;margin-top: 40px;height: 100px;" alt=""></legend>
                    <h2>REGISTRATION FORM</h2>

                    <h5>STUDENT PROFILE</h5>
                    <p style="text-align: left;">
                        <label for="Name">First Name
                            <input name="First_Name" type="text" maxlength="30" required>
                            &nbsp; &nbsp; &nbsp; Last Name <input type="text" name="Last_Name" required></label> <br><br>
                        <label for="gender">
                            Gender <select name="gender" id="gender" required>
                                <option selected disabled>~select gender~</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </label> <br><br>
                        TEL No. <input type="number" name="telephone" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email Address: <input type="email" name="email" placeholder="example@gmail.com" required><br> <br>
                        Present Residence;<input type="text" name="res_presnt" required><br><br> Permanent Residence <input type="text" name="res_perm" required><br><br>
                        Nationality: <input type="text" name="nationality" id="nationality" required><br><br>
                        Date of Birth; <input type="date" name="DOB" required><br><br>
                        Marital Status: <select name="mar_status" id="mar_status">
                            <option selected disabled>~select status~</option>
                            <option value="Maried" required>Maried</option>
                            <option value="Single">Single</option>
                            <option value="Divorsed">Divorsed</option>
                            <option value="Widow">widow</option>
                            <option value="Widower">widower</option>
                        </select><br><br>
                        Learning Center (versity applying from): <select name="institution" id="institution" required>
                            <option selected disabled>~select institution~</option>
                            <option value="MMU">Multimedia University</option>
                            <option value="UON">University of Nairobi</option>
                            <option value="JKUAT">Jomo Kenyatta University</option>
                            <option value="TUK">Technical University of Kenya</option>
                            <option value="null"></option>
                            <option value="null"></option>
                            <option value="null">private lessons</option>
                        </select><br><br>
                        Are you a student currently?<br>
                        No <input value="No" name="student" type="radio" onchange="drop_no()" required>
                        Yes <input value="Yes" type="radio" name="student" onchange="drop_yes()" required> <br><br>

                    <p id="student_inst" style="text-align: left;padding-left: 40px;">

                        Name of Institution <input type="text" name="stud_inst"><br><br>
                        Year/Level of Study <input type="text" name="stud_level"><br>
                    </p>

                    <script>
                        var student_inst = document.getElementById('student_inst');
                        var optional = document.getElementsByName('student');

                        student_inst.style.display = 'none';

                        function drop_yes() {
                            if (student_inst.style.display == 'none') {
                                student_inst.style.display = 'block';
                            }
                        }

                        function drop_no() {
                            if (student_inst.style.display == 'block'); {
                                student_inst.style.display = 'none';


                            }

                        }

                        console.log(optional)
                        if (optional == 'Yes') {
                            student_inst.style.display = 'none';
                        }
                    </script>
                    </p>
                    <button type="submit">submit</button>
                    <button onclick="close_disp()" type="button">close</button>
                </fieldset>
            </form>
        </div>
    </section>

    <section id="about">

        <button type="button"><a href="about.html">request more info</a></button>
        <div class="title">
            <p><span style="font-weight: 100;color: purple;">something</span> about us</p>
        </div>

        <div id="about_pic"></div>

        <div id="about_state">
            <h3>History</h3>
            <p>Premier Academy of Music is a christian based institution that
                teaches on music as a whole, whose objective is to make sure
                our future world has got enough mucitions who will use music,
                as a tool to move the world. for more about Premier Academy
                of music, please visit our about page.
                <br>
                <br>
                Established in more thatn 10 universities, including Multimedia University of Kenya
            </p>
            <hr>

            <h3>Mission</h3>
            <p>To provide transformative music educationthat unleashes potential and empowers music
                lovers with the skills, sself-awareness and courage to pursure therir
                happiness in music and textrandom text

            </p>

        </div>

        <div id="adress">

            <div class="vertical_bar">
                <nav>
                    <ul>
                        <li><a href="#home"><img src="images/facebook-logo-in-circular-button-outlined-social-symbol_318-70175.jpg">
                            </a></li>
                        <li><a href="#home"><img src="images/twitter_bird.png"></a></li>
                        <li><a href="#home"><img src="images/th.jfif"></a></li>
                    </ul>
                </nav>
            </div>
            <img style="border-radius: 50%;width: 70px;height: 70px;margin-left: 70px;" src="images/images-34.webp">
            <h5>Phone</h5>
            <p style="margin-top:-20px; font-size: 10px;">+254 795 595790<br>+254 718 764027 <br>+254 700 691474</p>
            <h5>Email</h5>
            <p style="margin-top:-20px; font-size: 10px;">premierschool@gmail.com</p>
            <h5>Location</h5>
            <p style="margin-top:-20px; font-size: 10px;">P.0. box 200<br>Nairobi, Kenya</p>

        </div>


    </section>

    <section class="boxes">
        <div class="container">
            <div class="box">
                <h1>A Music School</h1>
                <p><i>ages 4-99</i></p>
                <img src="images/french-classical-music.jpg" />
                <p>5TH PAM joint meeting</p>
            </div>

            <div class="paragraph"> Want Violin Lessons and its too expensive you cannot afford?
                well Premier Academy of Music is here for you
                <br>
                <br>
                We offer a convenient course on violin, in three distinctions, beginners, intermediate, and advanced stage.
                <br>
                <br>
                The school also allows you to opt for private, or on campus lessons as you will consider convenient for you.
            </div>
            <button type="submit" class="box_button">learn more</button>
            <div class="testimony">
                <p style="margin-top: 0px;font-size: 30px;"><i><b>"</b></i></p>
                <p style="margin-top: -30px;"><i>I joined as an amurture, leave alone a beginner,
                        but now a year later i feel like i should be the one teachig the advanced team. this is how much and fast I have grown in PAM
                        <br>
                        <br>
                        <span style="font-size: 10px;">~Carlos .</span>
                    </i>
                </p>
            </div>
        </div>

        <div class="container" style="margin-top: 20px;">
            <div class="box">
                <h1>ABRSM Sylabus</h1>
                <p><i>ages 4-99</i></p>
                <img src="images/images-35.webp" />
                <p>5TH PAM joint meeting</p>
            </div>

            <div class="paragraph">One on one intruction is available for piano, violin, cello flute,
                saxophone, guitar, and voice.
                <br>
                <br>
                we have students learning just for fun and students who excell
                in certificat of Merit, ABRSM and competitions.
                <br>
                <br>
                Our experinced and nurturing teachers have a proven track record helping
                students reach their musicsl goals.
            </div>
            <button type="submit" class="box_button">learn more</button>
            <div class="testimony">
                <p style="margin-top: 0px;font-size: 30px;"><i><b>"</b></i></p>
                <p style="margin-top: -30px;"><i>Obvious musical talents asid, our teacher is remarkably patient, comasssionate, and
                        creative when it comes to teaching... We are so glad we
                        found PAM. We refer all of our friends to PAM
                        <br>
                        <br>
                        <span style="font-size: 10px;">~Stephen L.</span>
                    </i>
                </p>
            </div>
        </div>

        <div class="container" style="margin-top: 20px;">
            <div class="box">
                <h1>Vocal Community</h1>
                <p><i>ages 4-99</i></p>
                <img src="images/singer-579923__340.webp" />
                <p>5TH PAM joint meeting</p>
            </div>

            <div class="paragraph">

                One thing that holds our name, is our vocal community. In this large family, we have a students from various campuses,
                who just come together to sing
                <br>
                <br>
                Beside this, the school also offer quality vocal trainings.
                <br>
                <br>
                These vocal trainings are offered both on private and on campus venues as would be convenient for students
            </div>
            <button type="submit" class="box_button">learn more</button>
            <div class="testimony">
                <p style="margin-top: 0px;font-size: 30px;"><i><b>"</b></i></p>
                <p style="margin-top: -30px;"><i>
                        I like vocal singing, but of all communities ive found, PAM remains to be not only the best, but home
                        <br>
                        <br>
                        <span style="font-size: 10px;">~ Shelton O.</span>
                    </i>
                </p>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section id="newsletter">
        <div class="container" style="border:none;">
            <h3>Subscribe To Our Newsletter And Get The Lattest Updates</h3>
            <form action="#javascript">
                <input type="email" placeholder="Enter email..." />
                <button type="submit" class="button_1">Send</button>
            </form>
            <br>

        </div>
    </section>
    <br>
    <br>
    <br>
    <section id="gallery">
        <div class="gallery_box" onclick="frame()">
            <p style="color: rgb(230, 63, 2);font-weight: bold; margin-top: 0;letter-spacing: 5px; padding: 0;">|music</p>
            <p style="text-transform: uppercase;text-align: center; font-weight: bold; font-size: 14px;">by the PAM staff</p>
            <div class="inner">
                <div class="vr"></div>
                <h5 style="margin: 0;margin-left: 7px; color: rgb(0, 110, 255);">YouTube</h5>
                <p style="margin-top: 0;margin-left: 7px; font-size: 12px;"><span style="font-size: 12px; font-weight: bold;">
                        Today While The Sun Shines</span>
                    <br>
                    <br>
                    This was performed by the PAM staff and recorded on a PAM excucutive meeting on 7th of February 2021.
                </p>

                <a href="#youtube">
                    <div class="place_pic">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/gU3KRYHYtSY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                </a>
            </div>
        </div>

        <div class="gallery_box">
            <p style="color: rgb(230, 63, 2);font-weight: bold; margin-top: 0;letter-spacing: 5px; padding: 0;">|music</p>
            <p style="text-transform: uppercase;text-align: center; font-weight: bold; font-size: 14px;">by the PAM Orchestra</p>
            <div class="inner">
                <div class="vr"></div>
                <h5 style="margin: 0;margin-left: 7px; color: rgb(0, 110, 255);">YouTube</h5>
                <p style="margin-top: 0;margin-left: 7px; font-size: 12px;"><span style="font-size: 12px; font-weight: bold;">
                        I Vow to Thee my Country (Piano and Violin)</span>
                    <br>
                    <br>
                    This is a live performance during the PAM Joint session at the Technical University
                    of Kenya on the 7th of February 2021.
                </p>

                <a href="#youtube">
                    <div class="place_pic">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/RHc6s2MYFgs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                </a>
            </div>
        </div>

        <div class="gallery_box">
            <p style="color: rgb(230, 63, 2);font-weight: bold; margin-top: 0;letter-spacing: 5px; padding: 0;">|music</p>
            <p style="text-transform: uppercase;text-align: center; font-weight: bold; font-size: 14px;">by the PAM Orchestra</p>
            <div class="inner">
                <div class="vr"></div>
                <h5 style="margin: 0;margin-left: 7px; color: rgb(0, 110, 255);">YouTube</h5>
                <p style="margin-top: 0;margin-left: 7px; font-size: 12px;"><span style="font-size: 12px; font-weight: bold;">
                        I Vow to Thee my Country (Piano and Violin)</span>
                    <br>
                    <br>This was performed by The PAM Orchestra
                    Piano - Bill Eddy Violin - Baruch Cheleket - Nicasio Njiru Guitar- George Onkoba

                </p>

                <a href="#youtube">
                    <div class="place_pic">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/c-T5nurTA-g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                </a>
            </div>

        </div>

        <div class="gallery_box">
            <p style="color: rgb(230, 63, 2);font-weight: bold; margin-top: 0;letter-spacing: 5px; padding: 0;">|music</p>
            <p style="text-transform: uppercase;text-align: center; font-weight: bold; font-size: 14px;">by the PAM Media Dep</p>
            <div class="inner">
                <div class="vr"></div>
                <h5 style="margin: 0;margin-left: 7px; color: rgb(0, 110, 255);">YouTube</h5>
                <p style="margin-top: 0;margin-left: 7px; font-size: 12px;"><span style="font-size: 12px; font-weight: bold;">
                        PAM Promotion Video</span>
                    <br>
                    <br>
                    do you love music? PAM is the solution
                    Be it singing playing instruments and all the music stuff you could. Its you golden opportunity
                </p>
                <a href="#youtube">
                    <div class="place_pic">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/M_q97QxbxmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                </a>
            </div>

        </div>
        <div class="gallery_box">
            <p style="color: rgb(230, 63, 2);font-weight: bold; margin-top: 0;letter-spacing: 5px; padding: 0;">|music</p>
            <p style="text-transform: uppercase;text-align: center; font-weight: bold; font-size: 14px;">The PAM joint pic</p>
            <div class="inner">
                <div class="vr"></div>

                <a href="#youtube">
                    <div class="place_pic" style="border:1px solid grey; height:200px; margin-top:25px; background: url('images/IMG-20210213-WA0014.jpg') 0 0; background-size: cover;">

                    </div>
                </a>
            </div>

        </div>
        <div class="gallery_box">
            <p style="color: rgb(230, 63, 2);font-weight: bold; margin-top: 0;letter-spacing: 5px; padding: 0;">|music</p>
            <p style="text-transform: uppercase;text-align: center; font-weight: bold; font-size: 14px;">by the PAM Orchestra</p>
            <div class="inner">
                <div class="vr"></div>
                <a href="#youtube">
                    <div class="place_pic" style="border:1px solid grey; height:200px; margin-top:25px; background: url('images/boy-984293__340.webp') 0 0; background-size: cover;">

                    </div>
                </a>
            </div>
        </div>
    </section>

    <footer id="contact" class="boxes">
        <div class="container">
            <div class="box_1">

                <p>P.O BOX 200032002 Nairobi, Technical university of kenya.
                    <br>
                    <br>
                    into@premieracademy.com
                    <br>
                    +254 795 595790
                    <br>
                    +254 718 764027
                    <br>
                    +254 700 691474

                </p>
            </div>
            <form action="index.php" method="POST" class="box" style="float: left;">
                <h4>Comment:</h4>
                <input type="text" name="comment" class="text" placeholder="share with us..." />
                <input type="email" name="comm_email" class="email" placeholder="Enter your Email..">
                <button type="submit" class="button">SEND</button>
            </form>
            <?php
            $comm_email = $_POST['comm_email'];
            $comment = $_POST['comment'];
            $to = 'sheltonnito@gmail.com';
            $body = '';

            $body .= 'from:' . $comm_email . '\r\n';
            $body .= 'message:' . $comment . '\r\n';

            mail($to, 'test', $body)
            ?>
        </div>
        <div class="vertical_bar">
            <nav>
                <ul>
                    <li><a href="#home"><img src="images/facebook-logo-in-circular-button-outlined-social-symbol_318-70175.jpg">
                        </a></li>
                    <li><a href="#home"><img src="images/twitter_bird.png"></a></li>
                    <li><a href="#home"><img src="images/th.jfif"></a></li>
                </ul>
            </nav>
        </div>
        <div class="top"><a href="#top">back to top</a></div>
        <br>
        <br>
        <br>
        <p>copyright©2021 | premieracademyofmusic | all rights reserved</p>
    </footer>
</body>

<script>
    let firstMenuClickToggle = true
    var media_nav = document.getElementById('media_nav');
    var hr1 = document.getElementsByTagName('hr');

    function show_nav() {
        if (media_nav.style.display == 'none' || firstMenuClickToggle) {
            firstMenuClickToggle = false
            media_nav.style.display = 'block';
            hr1[0].style.display = 'none';
            hr1[1].style.transform = 'rotateZ(45deg)';
            hr1[2].style.transform = 'rotateZ(-45deg)';
            hr1[2].style.marginTop = '-8px';
            document.getElementById('show_nav').style.border = 'none';
            document.getElementById('show_nav').style.marginTop = '60px';

        } else {
            media_nav.style.display = "none";
            hr1[0].style.display = 'block';
            hr1[1].style.transform = 'rotateZ(0deg)';
            hr1[2].style.transform = 'rotateZ(0deg)';
            hr1[2].style.marginTop = '0px';
            document.getElementById('show_nav').style.border = '0';
            document.getElementById('show_nav').style.marginTop = '50px';
        }

    }

    window.onscroll = function() {
        myfunction()
    }

    function myfunction() {
        media_nav.style.display = 'none';
        hr1[0].style.display = 'block';
        hr1[1].style.transform = 'rotateZ(0deg)';
        hr1[2].style.transform = 'rotateZ(0deg)';
        hr1[2].style.marginTop = '0px';
        document.getElementById('show_nav').style.border = '0';
        document.getElementById('show_nav').style.marginTop = '50px';

    }

    var showback = document.getElementById('showcase')
    var change = document.getElementById('change_p')
    var mark = document.getElementById("mark")
    var mark1 = document.getElementById("mark1")
    var mark2 = document.getElementById("mark2")
    var mark3 = document.getElementById("mark3")

    var slideIndex = 0;
    showSlides();

    function showSlides() {
        slideIndex++;

        if (slideIndex > 4) {
            slideIndex = 1;
        }

        if (slideIndex == 1) {
            showback.style.background = " url('images/piano-1239729__340.webp') no-repeat"
            showback.style.backgroundPosition = "-50px 0"
            showback.style.backgroundSize = "cover"
            change.innerHTML = "<i>~ ear learning for your soul ~</i>"
            mark.style.background = 'white'
            mark1.style.background = 'rgba(255, 255, 255, 0.4)'
            mark2.style.background = 'rgba(255, 255, 255, 0.4)'
            mark3.style.background = 'rgba(255, 255, 255, 0.4)'

            if (window.screen.width > 600) {
                showback.style.backgroundPosition = "0 -200px"
            }
        }

        if (slideIndex == 2) {
            showback.style.background = "url('images/gettyimages-1182084116-612x612.jpg')no-repeat"
            showback.style.backgroundPosition = "-50px 0"
            showback.style.backgroundSize = "cover"
            mark.style.background = 'rgba(255, 255, 255, 0.4)'
            mark1.style.background = 'white'
            mark2.style.background = 'rgba(255, 255, 255, 0.4)'
            mark3.style.background = 'rgba(255, 255, 255, 0.4)'


            change.innerHTML = "<i>~ best qualified tutors ~</i>"
            if (window.screen.width > 600) {
                showback.style.backgroundPosition = "0 -200px"
            }
        }

        if (slideIndex == 3) {
            showback.style.background = "url('images/french-classical-music.jpg')no-repeat"
            showback.style.backgroundPosition = "0 0"
            showback.style.backgroundSize = "cover"
            change.innerHTML = "<i>~ best violin lessons ~</i>"
            mark.style.background = 'rgba(255, 255, 255, 0.4)'
            mark1.style.background = 'rgba(255, 255, 255, 0.4)'
            mark2.style.background = 'white'
            mark3.style.background = 'rgba(255, 255, 255, 0.4)'

            if (window.screen.width > 600) {
                showback.style.backgroundPosition = "0 0"
            }

        }

        if (slideIndex == 4) {
            showback.style.background = "url('images/gettyimages-EED_013-612x612.jpg')no-repeat"
            showback.style.backgroundPosition = "-50px 0"
            showback.style.backgroundSize = "cover"
            change.innerHTML = "<i>~ best environment for kids ~</i>"
            mark.style.background = 'rgba(255, 255, 255, 0.4)'
            mark1.style.background = 'rgba(255, 255, 255, 0.4)'
            mark2.style.background = 'rgba(255, 255, 255, 0.4)'
            mark3.style.background = 'white'

            if (window.screen.width > 600) {
                showback.style.backgroundPosition = "0 -200px"
            }
        }

        setTimeout(showSlides, 7000); // Change image every 2 seconds
    }

    //intaking versities list and registration form
    var doc_body = document.getElementsByTagName('body');
    var tt_overlay = document.getElementById('tt_overlay');
    var int_versity = document.getElementById('int_versity');
    var upload_message = document.getElementById('upload_message');
    var reg_form = document.getElementById('reg_form');
    var help_drop = document.getElementById('help_drop')

    function disp_versity() {
        int_versity.style.display = 'block';
        tt_overlay.style.display = 'block';
    }

    function close_disp() {
        int_versity.style.display = 'none';
        tt_overlay.style.display = 'none';
        reg_form.style.display = 'none';
        help_drop.style.display = 'none'
        upload_message.style.display = 'none';
    }

    function register() {
        int_versity.style.display = 'none';
        tt_overlay.style.display = 'block';
        reg_form.style.display = 'block';

    }
    //disabled pages
    function disabled() {
        alert('sorry, this site is locked')

    }

    //form logic
    function checked() {

    }

    function sign_in() {

    }
</script>

</html>