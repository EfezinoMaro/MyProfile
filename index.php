<?php include 'sentMail.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >MaziTech-Innovative Creations</title>
    <link rel="shortcut icon" href="Mazicon.png " type="image/x-icon">
    <script src="Js-Script.js" async></script>
    <link href="Main.css" rel="stylesheet">
    <link href="Responsive (_Phone size_).css" rel="stylesheet">
    <link href="Responsive(_Tab-size).css" rel="stylesheet">
    <link href="Responsive(Laptop-size).css" rel="stylesheet">
</head>
<body>
    <main>

            <!-- NAVIGATION BAR-NAVIGATION BAR  -->

        <nav>
            <!-- <div class="times"></div> -->
            <div id="logos">
                <img src="mazi tech.png">
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#ABOUT-SECTION">About</a></li>
                <li><a href="#RESUME-SECTION">Resume</a></li>
                <li><a href="#PORTFOLIO-SECTION">Portfolio</a></li>
                <li><a href="#CONTACT-SECTION">Contact</a></li>
                <li id="real" ><a id="Hiring" onclick="openHire()"><b>+</b> Hire Me</a></li>
            </ul>

            
            <div id="phone">
                <div id="ddtimes" onclick="openNav()"><div class="times"></div></div>
                <div class="hire" onclick="openHire()"><b>+ </b> Hire Me</div>
            </div>
        </nav>
        <ul id="Sidenav">
            <li><a onclick="closeNav()" href="#"><span>&#127968; </span> Home</a></li>
            <li><a onclick="closeNav()" href="#ABOUT-SECTION"><span>&#128100; </span> About</a></li>
            <li><a onclick="closeNav()" href="#RESUME-SECTION"><span>&#128194; </span> Resume</a></li>
            <li><a onclick="closeNav()" href="#PORTFOLIO-SECTION"><span>&#128188; </span> Portfolio</a></li>
            <li><a onclick="closeNav()" href="#CONTACT-SECTION"><span>&phone; </span> Contact</a></li>
            <div class="close" onclick="closeNav()"><span>&times;</span></div>
        </ul>

            <!-- END OF NAVIGATION -->
            <!-- START OF SECTIONS -->
        <div class="section">
            <div id="HOME-SECTION">
                <div id="home-txt">
                    <p>HELLO , I'M<br><span>EFEZINO MARO</span><br>WEB PROGRAMMER</p>
                    <div class="CV-SLOT">
                        <a href="My CV-RESUME.pdf" target="_blank" download="Efezino's CV">GET MY CV </a><br>
                        <a href="https://github.com/EfezinoMaro" target="_blank"><img src="github2.png"></a>
                        <a href="https://twitter.com/_PrinceAAA" target="_blank"><img src="twitter2.png"></a>
                        <a href="https://instagram.com/_say_warri" target="_blank"><img src="instagram.png"></a>
                        <a href="https://linkedin.com/in/efezino-maro-54200a225" target="_blank"><img src="linkedin2.png"></a>
                    </div>
                </div>
                <div id="home-img">
                    <img src="Mebw.png">
                </div>
                <div id="Hirecontent">
                    <h4 id="close" onclick="closeHire()">&timesbar;</h4>
                    <form action="#">
                        <input type="text" placeholder="&#128100;  Full Name" required>
                        <input type="email" placeholder="&#9993;  Email Address" required>
                        <input type="tel" placeholder="&#9990;  Phone Number">
                        <input type="datetime" placeholder="&#128467;  Desired Date(MM/DD/YY)" required>
                        <select>
                            <option disabled selected aria-required="true"><span>&#128188; </span> Select Service</option>
                            <option>Graphics</option>
                            <option>Website Creation</option>
                            <option>Online Tutoring</option>
                            <option>App Design</option>
                            <option>Web Maintenance</option>
                            <option>Painting</option>
                        </select><br><br>
                        <button>SUBMIT<i>&#x2794;</i></button>
                    </form>
                </div>
            </div>
            <div id="ABOUT-SECTION">
                <h2>WHO AM I ?</h2>
                <div id="div">
                    <h6>- SOME WORDS ABOUT ME  -</h6>
                    <p>My name is <a href="https://linkedin.com/in/efezino-maro-54200a225" target="_blank">Efezino Elvis Maro</a> the CEO of <a href="index.html"><b>Mazzi-Technology Enterprise</b></a>, i'm a well-rounded Website designer with
                        two(2) years of experience working as an Intern devoloper since January 2022. My main focus is creating content that not only inspires others 
                        but also functions as a powerful marketing tool to increase sales & help to grow buisness. I believe that creativity in the workplace is the key
                        to success. I'm currently studying in The Niger Delta University(NDU) Bayelsa,Nigeria to obtain my Bsc(Eng).
                        One thing I enjoy most is to meet new people and learn about their lifestyle and tend to make most
                        people feel comfortable. I find this skill advantageous when kicking off projects with new clients.
                        
                        <br><br>

                        I consider myself a ‘forever student,’ eager to build on my academic foundations in Technology, Engineering, Science and stay updated
                        with the latest digital marketing strategies through continued coursework and professional development.
                        I'm currently working as a freelance developer and i am always interested in challenges, Connect with me via <a href="princemaro228@gmail.com" target="_blank">princemaro228@gmail.com.</a></p>
                </div>
                <div class="first">
                    <h4>_ WHY CHOOSE ME ? _</h4>
                    <div class="abtme1">
                        <img src="Bulb.jpg">
                        <h6><u>Creative Ideas</u></h6>
                        <p>
                            I'm aiming to leverage a proven knowledge of
                            methods design and productivity improvement 
                            skills to successfully fill the web programmer role.
                            i have better ideas, latest design & development tools to help grow your business and 
                            leveraged mastery of HTML,CSS and Javascript 
                            to build top-quality code for diverse projects..
                        </p>
                    </div>
                    <div class="abtme2">
                        <img src="Graet-team.jpg">
                        <h6><u>Great Team</u></h6>
                        <p>
                            I've built a thriving team that
                            loves sharing their thoughts,ideas and opinions.
                            Ensuring no-one is above 
                            anyone else and allowing everyone to feel 
                            as though they can contribute freely. My Team has provided 
                            guidance to less-experienced Web developer personnel. </p>
                    </div>
                    <div class="abtme3">
                        <img src="Online.jpg">
                        <h6><u>Online Support</u></h6>
                        <p>When a problem occurs or when Clients have some questions
                             about the product or service.
                             I,m always available and always ready to help 24/6. You can also contact me via email or Social media Platforms</p>
                    </div>
                </div>
            </div>
            <div id="RESUME-SECTION">
                <h2>MY RESUME</h2>
                <h5>High Skilled Provides High Quality</h5>
                

                <div id="slides">
                    <h1>_ CODING SKILLS _</h1>
                    <p>HTML5</p>
                    <div class="cover">
                      <div class="skills html">93%</div>
                    </div>
                    <p>CSS3</p>
                    <div class="cover">
                      <div class="skills css">95%</div>
                    </div>
                    
                    <p>JavaScript</p>
                    <div class="cover">
                      <div class="skills js">65%</div>
                    </div>
                    
                    <p>Python</p>
                    <div class="cover">
                      <div class="skills python">78%</div>
                    </div>
                    <p>PHP</p>
                    <div class="cover">
                      <div class="skills php">56%</div>
                    </div>
                </div>
                <div id="sliders">
                    <h4>_DESIGN SKILLS_</h4>
                    <div class="progress-wrap">
                        <h3>Graphics</h3>
                        <div class="progress" >
                            <div class="progress-bar1">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-wrap">
                        <h3>3D Animation</h3>
                        <div class="progress" >
                            <div class="progress-bar2">
                                <span>64%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-wrap">
                        <h3>Product Design</h3>
                        <div class="progress" >
                            <div class="progress-bar3">
                                <span>65%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-wrap">
                        <h3>Photo-Editing</h3>
                        <div class="progress" >
                            <div class="progress-bar4">
                                <span>89%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-wrap">
                        <h3>UI/UX</h3>
                        <div class="progress" >
                            <div class="progress-bar5">
                                <span>73%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="works">
                        <div class="work1">
                            <span>57<sup>+</sup></span>
                            <p>Projects</p>
                        </div>
                        <div class="work1">
                            <span>53<sup>+</sup></span>
                            <p>Completed Projects</p>

                        </div>
                        <div class="work1">
                            <span>218<sup>+</sup></span>
                            <p>Satisfied Clients</p>

                        </div>
                        <div class="work1">
                            <span>2<sup>+</sup></span>
                            <p>Awards</p>

                        </div>
                </div>  
                <div class="Edu">
                    <div class="edubox">
                        <h1><span ><img src="Gcap.png" width="30px"style="margin-right: 5px;"></span>EDUCATION</h1>
                        <h6>Marine Engineering</h6>
                        <p>Currently studying in the Niger Delta 
                            University,Yenegoa, Since 2021 - Present
                            aiming to boost my intellectual capability 
                            and to aquiring more advanced knowledge,
                            I'm expecting to be graduated by the year 2027 
                            as i'm on a Five-year degree Course,Looking
                            forward to acheiving my degree ( Bsc(Eng)).
                        </p>
                    </div>
                    <div class="expbox">
                        <h1><span ><img src="Experience.png" width="30px"style="margin-right: 5px;"></span>EXPERIENCE</h1>
                        <h6>Worked@LearnHub Africa</h6>
                        <p>During the period of my stay as a Freelancer at
                            Learnhub,I have been able to; develop custom websites
                            to meet individual client needs,Provide guidance to
                            young and less experienced techies,Perform various
                            websites updates, i've also 
                            collaborated with web content editors to facilitate 
                            website maintanance.I can be relied upon to help
                            your business/organization/company to achieve it's
                            goals.
                        </p>
                    </div>
                    <div class="awardbox">
                        <h1><span ><img src="Award.png" width="25px"style="margin-right: 5px;"></span>AWARDS</h1>
                        <h6>Course Completion Award</h6>
                        <p>I've earned a couple of awards/certificates
                            which includes; Course Completion of Introduction 
                            to Machine Learning(Awarded by Global AI Hub),
                            Course Completion of Mastery of Front-End 
                            Development i.e HTML5, CSS3 & Javascript (Awarded by
                            Learnhub Africa) and a few more yet to come.
                            Working Effortlessly to acheive more of these.
                        </p>
                    </div>
                </div>
            </div>
            <div id="PORTFOLIO-SECTION">
               <h5>MY PORTFOLIO</h5>
               <h2>Check my Recent Work I Provide for my Clients. </h2>
               
                <div id="myBtnContainer">
                    <button class="btn active" onclick="filterSelection('all')"> ALL</button>
                    <button class="btn" onclick="filterSelection('nature')">WEBSITES</button>
                    <button class="btn" onclick="filterSelection('cars')"> GRAPHICS</button>
                    <button class="btn" onclick="filterSelection('people')">APP DESIGN</button>
                </div>
        
                <!-- Portfolio Gallery Grid -->
                <div class="row">
                    <div class="column nature">
                        <div class="content">
                            <img src="web1.jpg" alt="Mountains" style="width:100%">
                            <span><a href="web1.jpg" target="_blank">&roplus;</a></span>
                        </div>
                    </div>
                    <div class="column nature">
                        <div class="content">
                            <img src="web2.jpg" alt="Lights" style="width:100%">
                            <span><a href="web2.jpg" target="_blank">&roplus;</a></span>
                        </div>
                    </div>
                    <div class="column nature">
                        <div class="content">
                            <img src="web4.jpg" alt="Nature" style="width:100%">
                            <span><a href="web4.jpg" target="_blank">&roplus;</a></span>
                        </div>
                    </div>
            
                    <div class="column cars">
                        <div class="content">
                            <img src="web6.jpg" alt="Car" style="width:100%">
                            <span><a href="web6.jpg" target="_blank">&roplus;</a></span>
                        </div>
                    </div>
                    <div class="column cars">
                        <div class="content">
                            <img src="web7.jpg" alt="Car" style="width:100%">
                            <span><a href="web7.jpg" target="_blank">&roplus;</a></span>
                        </div>
                    </div>
                    <div class="column cars">
                        <div class="content">
                            <img src="web1.jpg" alt="Car" style="width:100%">
                            <span><a href="web1.jpg" target="_blank">&roplus;</a></span>
                        </div>
                    </div>
        
                    <div class="column people">
                        <div class="content">
                            <img src="web2.jpg" alt="Car" style="width:100%">
                            <span><a href="web1.jpg" target="_blank">&roplus;</a></span>
                        </div>
                    </div>
                    <div class="column people">
                        <div class="content">
                            <img src="web7.jpg" alt="Car" style="width:100%">
                            <span><a href="web1.jpg" target="_blank">&roplus;</a></span>
                        </div>
                    </div>
                    <div class="column people">
                        <div class="content">
                            <img src="web6.jpg" alt="Car" style="width:100%">
                            <span><a href="web1.jpg" target="_blank">&roplus;</a></span>
                        </div>
                    </div>
                </div>
              <!-- END GRID -->
            </div>
            <div id="CONTACT-SECTION">
                <h5>CONTACT</h5>
                <h3>Get in Touch</h3>
                <form action="Mail index.php" method="post">
                    <input type="text" name="name" placeholder="Surname x Firstname">
                    <input type="email" name="email" placeholder="abcdef123456@gmail.com">
                    <textarea placeholder="message" name="subject"></textarea>
                    <button id="submit" name="submit" data-submit="...Sending">SEND<span>&#128229;</span></button>
                </form>
                <!-- <div>   -->
                <div class="intouch">
                    <p><span>&#127968;</span>Block G12, Enerhen road Warri,Nigeria.</p>
                    <p><span>&phone;</span><a href="tel:+2349153055012">+2349153055012</a></p>
                    <p><span><img src="whatsapp.png " width="30px"></span><a id="up" href="https://wa.me/09045485819" target="_blank">+2349045485819</a></p>
                    <p><span id="mailicon">&#9993;</span><a href="mailto:princemaro228@gmail.com">princemaro228@gmail.com</a></p>
                </div>
            </div>
            <footer>
                Copyright<span>&copy;</span>2022 <a href="#">Maro </a>|| All Rights Reseverd.
            </footer>
        </div>

        <!-- END OF SECTIONS -->
        <!-- START OF FOOTER -->
        <footer>

        </footer>
        <!-- END OF FOOTER -->
    </main>
</body>
<script>
    
       //SIDEBAR

function openNav() {
    document.getElementById("Sidenav").style.width="100%";
}

function closeNav() {
    document.getElementById("Sidenav").style.width = "0%";
}
     //HIREME
function openHire() {
    document.getElementById("Hirecontent").style.height ="100vh";
}
function closeHire() {
    document.getElementById("Hirecontent").style.height ="0vh";
}
// function changeColor(){
//     document.getElementById("NAV").style.backgroundColor="blue";
// }

// function closeHire() {
//     document.getElementById("Sidenav").style.height = "0%";
// }

     //FILTERSELECTION FOR BLOG 

filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</html>