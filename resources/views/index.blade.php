<html>
<head>
	<title>Listrik Biru</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link rel="SHORTCUT ICON" href="img/logo/colokan.png">
</head>
<body>
    <header>
        <nav class="mode">
            <div class="nav">
                <div class="logo">
                    <img src="img/qw.png" alt="">
                    <p>
                        <b>Listrik Biru</b>
                    </p>
                </div>
                <div class="menu">
                    <ul>
                        <li><a class="mode" href="#contact">Contact Us</a></li>
                        <li><a class="mode" href="#aboutus">About Us</a></li>
                        <li><a class="mode" href="#voltase">Voltase List</a></li>
                        <li><button class="mode" onclick="result()">Night Mode</button></li>
                    </ul>
                </div>
                
            </div>
        </nav>
    </header>

    <div class="container-1">
        <div class="banner">
            <div class="caption" id="login">
                <h1>Listrik Biru</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod, quibusdam nulla at fugiat magni velit harum dolore odit distinctio obcaecati?</p>
    
                <b><p class="caption-join">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum, perferendis!</p></b>
    
                <button id="btn-info">LOGIN NOW FOR $1</button>
                <p id="info" style="display: none">Lorem ipsum dolor sit amet consectetur adipisicing elit. At voluptatibus eius, praesentium quis suscipit illo et beatae illum repellendus soluta.</p>
    
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non aut eveniet earum vel laudantium provident!.</p>
            </div>
        </div>
    </div>

    <div class="container-2 mode" id="voltase">
        <h1>Discover Your Favorite Voltase</h1>
        <div class="img-container-2">
            <div>
                <img src="img/voltase/1.png"/>
                <p>450 VA<br>Rp70.000,00</p>
            </div>
    
            <div>
                <img src="img/voltase/2.png"/>
                <p>900 VA<br>Rp120.000,00</p>
            </div>
    
            <div>
                <img src="img/voltase/3.png"/>
                <p>1300 VA<br>Rp200.000,00</p>
            </div>
            <div>
                <img src="img/voltase/4.png"/>
                <p>2200 VA<br>Rp230.000,00</p>
            </div>
            <div>
                <img src="img/voltase/5.png"/>
                <p>3500 VA<br>Rp350.000,00</p>
            </div>
        </div>

        <div class="head-container-2" id="aboutus">ABOUT US</div>

        <div class="about-container mode">
            <div class="section-about"> 
                <img src="img/logo/colokan.png"/>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi odit iusto sequi facere ullam dolores error labore repudiandae officiis numquam.</p>
            </div>
    
            <div class="section-about">
                <img src="img/logo/meteran.png"/>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut rerum ratione voluptatibus vero animi commodi nesciunt quae blanditiis fugit beatae.</p>
            </div>
        </div>


        <div class="table-container">

            <!-- @php
                $conn = mysqli_connect("localhost", "root", "", "posttest_framework");
                $sql = "SELECT * FROM pelanggans";
                $result = $conn->query($sql);
            @endphp
            <div class="price-container mode">
                <h3 class="mode">Price List</h3>
                <div class="price-table">
                    <table class="table">
                        <thead class="mode">
                            <tr class="mode">
                                <th scope='col'>ID</th>
                                <th scope='col'>Username</th>
                                <th scope='col'>Nometer</th>
                                <th scope='col'>Nama</th>
                                <th scope='col'>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                while($row = $result-> fetch_assoc()) {
                                    echo "
                                        <tr class='mode'>
                                            <td scope='row'>". $row["id"]."</td>
                                            <td>". $row["username"]."</td>
                                            <td>". $row["nometer"]."</td>
                                            <td>". $row["nama"]."</td>
                                            <td>". $row["alamat"]."</td>
                                        </tr>
                                        ";
                                }
                            @endphp
                        </tbody>
                    </table>
                </div>
            </div> -->


                    <div class="price-container mode">
                        <h3 class="mode">Price List</h3>
                            <div class="price-table">
                                <table class="table">
                                    <thead class="mode">
                                        <tr class="mode">
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Nometer</th>
                                            <th scope="col">Voltase</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pelanggans as $pelanggan)
                                            <tr class="mode">
                                                <th scope="row">{{ $pelanggan->id}}</th>
                                                <td>{{ $pelanggan->nama}}</td>
                                                <td>{{ $pelanggan->nometer}}</td>
                                                <td>{{ $pelanggan->tarif->voltase}}</td>
                                                {{-- Cukup Panggil seperti di atas --}}

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>

        </div>

    </div>


    <footer class="container-3 mode" id="contact">
        <div class="head-container-3">Contact US</div>
        <div class="foo-cont">
            <div class="alamat">
                <h4 class="mode">Location</h4>
                <p class="mode">Camelot Kingdom, Great Britain<br>gemparxsaber@gmail.com<br>Phone: +628 2252 940003</p>
            </div>
            <div class="sosmed">
                <h4 class="mode">Find Us On</h4>
                <div class="circle-container">
                    <div class="circle ig">
                        <a href="https://www.instagram.com/" onclick="return confirm('Click OK untuk Lanjutkan.');"><img src="img/sosmed/instagram.png" alt=""></a>
                    </div>
                    <div class="circle fb">
                        <a href="https://www.facebook.com/" onclick="return confirm('Click OK untuk Lanjutkan.');"><img src="img/sosmed/facebook.png" alt=""></a>
                    </div>
                    <div class="circle wa">
                        <a href="https://www.whatsapp.com/" onclick="return confirm('Click OK untuk Lanjutkan.');"><img src="img/sosmed/whatsapp.png" alt=""></a>
                    </div>
                    <div class="circle tw">
                        <a href="https://www.twitter.com/" onclick="return confirm('Click OK untuk Lanjutkan.');"><img src="img/sosmed/twitter.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="copyright">© 2022 <a href="https://instagram.com/gmpar_p/">Gempar Panggih D. Putra</a>. All rights reserved.</div>
        </div>
    </footer>
    <script src="js/main.js"></script>
    <script src="js/addEvenListener.js"></script>
    <script src="https://kit.fontawesome.com/a374d5ed26.js" crossorigin="anonymous"></script>
</body>
</html>

