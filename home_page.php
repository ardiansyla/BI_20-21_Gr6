<!DOCTYPE html>
<html manifest="demo.appcache">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./assets/css/reset.css" type="text/css">
        <link rel="stylesheet" href="./assets/css/home-page-style.css" type="text/css">
        <link rel="stylesheet" href="./assets/css/login-page-style.css" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>AlgoTech</title>
    </head>
    <script src="./assets/script/validations.js"></script>
    <script src="./assets/script/home-page.js"></script>
    <script>
            if (typeof(Storage) !== "undefined") {
                localStorage.setItem("localEmri", "Ardi");
                sessionStorage.setItem("sessionEmri", "Ardi");
            } else {
                document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
            }
            $(document).ready(function(){
                let hiddenn = false;
                $("#divi").hide()
                
                $(window).scroll(function(){
                    if(!hiddenn){
                        if($(this).scrollTop()>=100){
                            $("#divi").show()
                        } else if($(this).scrollTop()<=100){
                            $("#divi").hide()
                        }
                    }
                });
                
                $("#fshehi").click(function(){
                    hiddenn = true;
                    $("#divi").fadeOut();
                })
            });
            
    </script>
    <body id="my-img" onload="changeimage(5)">
        <div id="divi" style="position: fixed; right: 20px;">
            <a href="login.php" target="_blank" class="footerSubmitButton stylesBtn">LOG IN</a> 
            <a href="signup.php" target="_blank" class="footerSubmitButton stylesBtn">SIGN UP</a>
            <input id="fshehi" type="button" value="Fshehi" class="footerSubmitButton">
        </div>
       <div class="container"> 
            <header id="headeri">
                <div>
                    <p>
                        <a href="home_page.php" class="footerSubmitButton stylesBtn"> HOMEPAGE</a>  |  
                        <a href="products.php" class="footerSubmitButton stylesBtn">PRODUCTS</a>  |  
                        <a href="aboutUs.php" class="footerSubmitButton stylesBtn">ABOUT US</a>  |  
                        <a href="login.php" target="_blank" class="footerSubmitButton stylesBtn">LOG IN</a>  |  
                        <a href="signup.php" target="_blank" class="footerSubmitButton stylesBtn">SIGN UP</a>
                    </p>
                    
                </div>
                <div class="icons">
                    <a
                     href="https://www.linkedin.com/"
                     target="”_blank”"
                     class="icon icon--linkedin"
                   ></a>
                   <a
                     href="https://www.twitter.com/"
                     target="”_blank”"
                     class="icon icon--twitter"
                   ></a>
                   <a
                     href="https://www.pinterest.com/"
                     target="”_blank”"
                     class="icon icon--pinterest"
                   ></a>
                   <a
                     href="mailto:ardianbsyla@gmail.com?subject = Feedback&body = Message"
                     target="”_blank”"
                     class="icon icon--google-plus"
                   ></a>
                   <a href="https://rss.app/" target="”_blank”" class="icon icon--rss"></a>   
                 </div>
            </header>
            <section class="start-section">
                <div id="dark-back">
                    <div class="after-head">
                        <h2>AlgoTech</h2>
                        <p>Pajisuni me kompjuterin m&#235; t&#235; mir&#235;</p>
                        <input type="text" style="margin-left: 355px; border-radius: 0px;" class="text-button" name="search" placeholder="Kërkoni këtu...">
                        <input type="button" value="Search" class="search-btn" name="submit-search-btn">
                    </div>
                    <div class="img-div">
                        <div class="mySlide fade" id="slide1" style="display: block;">
                            <img src="./assets/images/desktop-setup-art.jpg" alt="desktop setup" width="960" height="340">
                        </div>
                        <div class="mySlide fade" id="slide2">
                            <img src="./assets/images/desktop-setup2.jpg" alt="desktop setup" width="960" height="340">
                        </div>
                        <div class="mySlide fade" id="slide3">
                            <img src="./assets/images/desktop.jpg" alt="desktop setup" width="960" height="340">
                        </div>
                        <div class="mySlide fade" id="slide4">
                            <img src="./assets/images/desktop-monitors-4.jpg" alt="desktop setup" width="960" height="340">
                        </div>
                        <div class="mySlide fade" id="slide5">
                            <img src="./assets/images/desktop-5.jpg" alt="desktop setup" width="960" height="340">
                        </div>
                    </div>
                </div>
                <div class="scroll-img">
                    <div class="rectangle" id="rec1" onclick="currentSlide(1)" style="background-color: #ffffff;"></div>
                    <div class="rectangle" id="rec2" onclick="currentSlide(2)"></div>
                    <div class="rectangle" id="rec3" onclick="currentSlide(3)"></div>
                    <div class="rectangle" id="rec4" onclick="currentSlide(4)"></div>
                    <div class="rectangle" id="rec5" onclick="currentSlide(5)"></div>
                </div>
                <section class="st-section">
                    <section class="nd-section">
                        <section class="rd-section">
                            <div class="you-here">
                                <p style="margin-left: 30px;">Ju jeni në &nbsp; >> &nbsp; <a id="a-here" href="home_page.php"> HOMEPAGE</a></p>
                            </div>
                            <div>
                                <h1 class="welcome-title"> MIRË SE VINI NË ALGOTECH</h1>
                                <p class="description"> <span><b>AlgoTech</b></span> është dyqani më i madh online në Kosovë, Shqipëri dhe rajon për produkte teknologjike, me mbi <span style="font-weight: bold;"> 60.000 </span> produkte nga brendet më të njohura botërore.</p>
                                <hr class="hr-after-title">
                                <div class="outer-div">
                                    <div class="left-div">
                                        <div>
                                            <p class="header-say"> Çfarë flasin të tjerët për ne</p>
                                            <p class="sayings"> <img src="./assets/images/thonjezat.jpg" alt="thonjezat"> <b>Elon Musk</b> &nbsp; - &nbsp; <mark><abbr title="Chief Executive Officer">CEO</abbr></mark></p>
                                            <span class="auth-say">Produket që i punojmë në kompanitë tona si SpaceX, Tesla përbëhen nga pjesët që ne i blejmë nga AlgoTech. Në këtë mënyrë ne jemi të sigurtë që fluturaket tona të shkojnë në destinacionin e duhur në hapësirë.</span>
                                        </div>
                                        <div>
                                            <p class="sayings"> <img src="./assets/images/thonjezat.jpg" alt="thonjezat"> <b>Bill Gates</b> &nbsp; - &nbsp; <mark><abbr title="Chief Executive Officer">CEO</abbr></mark></p>
                                            <span class="auth-say">Të gjitha produktet në AlgoTech janë origjinale dhe me garancion nga prodhuesi. Ndërkohë, të gjitha porositë e bëra vijnë me transport falas në gjithë Kosovën, deri tek adresa juaj.</span>
                                        </div>
                                    </div>
                                    <div class="right-div" >
                                        <div class="ekipi-div">
                                            <p class="header-say" >Takoni ekipin tonë</p>
                                            <div style="display: flex;">
                                                <p class="p-img"><a href="./assets/images/Ardi.jpg" class="imageClick"><img src="./assets/images/Ardi.jpg" width="110" height="110" alt="foto" style="margin-right: 5px;"></a>
                                                    <div style="display: block;">
                                                        <p class="ekipi-name">Ardian Syla</p>
                                                        <p style="color: #868686;">Ardian Syla është student i Shkencave Kompjuterike në Fakultetin e Shkencave Matematike Natyrore në Universitetin e Prishtinës. Poashtu tani ka një kohë që është i angazhuar si Full Stack Web Developer.</p>
                                                    </div> 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="ekipi-div">
                                            <div style="display: flex;">
                                                <p class="p-img"><a href="./assets/images/Zuckerberg.jpg" class="imageClick"><img src="./assets/images/Zuckerberg.jpg" width="110" height="110" alt="foto" style="margin-right: 5px;"></a>
                                                    <div style="display: block;">
                                                        <p class="ekipi-name">Mark Zuckerberg</p>
                                                        <p style="color: #868686;">Mark Zuckerberg është një sipërmarrës amerikan i teknologjisë. Është i njohur si bashkëthemeluesi dhe drejtori ekzkutiv i Facebook dhe tani ka shprehur dëshirën e tij të flaktë që të marrë pjesë në projektin tonë.</p>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="second-hr">
                                <table class="mb-table">
                                    <tr>
                                        <td class="last-work">
                                            <p class="last-work-head"> Punët e fundit</p>
                                            <p class="wb-br">Së fundi kanë ardhur shumë produkte cilësore nga brendet më të mëdha. </p>
                                        </td>
                                        <td class="table-td">
                                            <img src="./assets/images/Computer0.jpg" width="210" height="140" alt="kompjuter" class="mb-ten">
                                            <p class="mb-ten">Laptop Lenovo IdeaPad 5 14IIL05, 14'', Intel Core i7, 16GB RAM, 1TB SSD, Intel Iris Plus Graphics, i hirtë</p>
                                            <a href="./product.php"> Shikoni më shumë</a>
                                        </td>
                                        <td class="table-td">
                                            <img src="./assets/images/Ora0.jpg" class="mb-ten" width="120" height="140" alt="kompjuter" style="margin-left: 30px;">
                                            <p class="mb-ten">Orë Apple Watch Series 6, 40mm, Sport Band, Gold, Pink Sand, rezistente nga uji në thellësi 50m</p>
                                            <a href="./product.php"> Shikoni më shumë</a>
                                        </td>
                                        <td class="table-td">
                                            <img src="./assets/images/Karrige0.jpg" width="100" height="140" alt="kompjuter" class="mb-ten" style="margin-left: 35px;">
                                            <p class="mb-ten">Karrigë CZC Fortress GX500, e zezë/kuqe, Gaming, Zbritje 30% vetëm sot</p>
                                            <a href="./product.php"> Shikoni më shumë</a>
                                        </td>
                                    </tr>
                                </table>
                                <div class="twitter-div">
                                    <img src="./assets/images/twitterPage.jpg" alt="twiiterImageOfLogo">
                                    <p>Mund të na gjeni edhe në llogarinë tonë në <u><i>Twitter</i></u>, ku mund të shikoni postimet tona në mënyrë që të njoftoheni me kohë për produktet me zbritje.</p>
                                </div>
                            </div>
                        </section>
                    </section>
                </section>
            </section>
            <footer class="footerDiv">
                <div class="st-footer-div">
                    <address>
                        <p class="headParagraph">KONTAKTI</p>
                        <p>Algo Tech</p>
                        <p>Rr.Zahir Pajaziti, 10000</p>
                        <p>Kosova</p>
                        <p>42000</p>
                        <p>Tel: +383 (0) 44 123 123</p>
                        <p>Fax: +383 (0) 44 123 123</p>
                        <p>Email: ardianbsyla@gmail.com</p>
                    </address>
                    <div>   
                        <p class="headParagraph">LINQE TE SHPEJTA</p>
                        <p><a href="http://www.facebook.com">Facebook</a></p><hr>
                        <p><a href="http://www.twitter.com">Twitter</a></p><hr>
                        <p><a href="http://www.linkedin.com">Linkedin</a></p><hr>
                        <p><a href="http://www.youtube.com">Youtube</a></p><hr>
                    </div>
                    <div>
                        <p class="headParagraph">NGA FAQJA</p>
                        <p><b>Zbritje në Algo Tech</b></p>
                        <p>Postuar nga Gashi.</p>
                        <p class="notif-p">Këtë javë kemi zbritje të madhe në Algo Tech. Zbritja përfshinë shumë produkte të shumë kërkuara.</p>
                        <a class="notif-a" href="./aboutUs.php">Lexoni më shumë >></a>
                    </div>
                    <div>
                        <p class="headParagraph">MERRNI NJOFTIMET TONA</p>
                        <form name="contactForm" method="post" onsubmit="return validateContactForm()">
                            <input type="text" name="emri" placeholder=" Emri:" class="text-button">
                            <p id="nameContactValidation"></p>
                            <input   name="email"  placeholder=" Email:" class="text-button" style="margin-top: 15px;">
                            <p id="emailContactValidation"></p>
                            <input type="submit" value="DËRGO" class="footerSubmitButton">
                            <a href="#headeri" class="footerSubmitButton kthehu-btn" >KTHEHU</a>
                        </form>
                    </div>
                </div>
                <div class="last-footer-div">
                    <p>Copyright &copy; 2020 - All Rights Reserved - Algo Tech</p>
                </div>
            </footer>
        </div>
    </body>
</html>
