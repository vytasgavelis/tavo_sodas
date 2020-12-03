<html>

<head>
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/1.0.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/1.0.0/mdb.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <style>
        .createNewStyle {
            background-color: #55d6aa;
            color: black;
            padding: 40px;
            text-align: center;
        }

        .text-sodas {
            color : #55d6aa;
        }

        .bg-sodas {
            background : #55d6aa;
        }

        .btn-sodas {
            background : #55d6aa;
            color : white;
        }

            nav a {
            transition: 0.3s ease;
            }
            nav a:hover {
            border-top: 4px solid white;
            color : white;
            }
            .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
    color: rgba(255,255,255,1);
}
            .navbar-dark .navbar-nav .nav-link {
            color: rgba(255,255,255,.75);
        }

    </style>
        <script>
$(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready
console.log("document is ready");
  

  $( ".card" ).hover(
  function() {
    $(this).addClass('shadow-lg').css('cursor', 'pointer'); 
  }, function() {
    $(this).removeClass('shadow-lg');
  }
);
$( "#createNew" ).hover(
  function() {
    $(this).addClass('createNewStyle').css('cursor', 'pointer'); 
    $("#plusTemplate").removeClass('text-sodas');
    $("#plusTemplate").addClass('text-light');
    $("#plusTemplateText").removeClass('text-sodas');
    $("#plusTemplateText").addClass('text-light');
  }, function() {
    $("#plusTemplate").removeClass('text-light');
    $("#plusTemplate").addClass('text-sodas');
    $("#plusTemplateText").removeClass('text-light');
    $("#plusTemplateText").addClass('text-sodas');
    $(this).removeClass('createNewStyle');
  }
);
  
// document ready  
});

    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-sodas fixed-top">
        <div class="container">
            <a class="navbar-brand " href="#">Tavo sodas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link text-sodas" href="import_template.html"><svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-file-arrow-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707z" />
                            </svg>Importuoti maketa</a>
                    </li>
                </ul>
                <div class="btn-group dropdown">
                    <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown" aria-expanded="false">
                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9.854-2.854a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </button>
                    <ul class="dropdown-menu p-3 bg-light">
                        Prisijungta kaip : <?php echo $_GET['username']; ?>
                        <!-- Dropdown menu links -->
                        <a class="btn btn-danger w-100 mb-2" style="padding-right:-5px ;" href="login.html">Atsijungti</a>
                    </ul>
                </div>



            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <br>

        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link bg-sodas text-white" aria-current="true" href="#"> <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-bookmark-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                                <path fill-rule="evenodd" d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
                            </svg></a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 hover-shadow text-sodas" id="createNew">
                            <li class="card-img-top d-flex align-items-center justify-content-center h-100">
                                <a class="nav-link  text-sodas" href="create_template.html" id="plusTemplate"><svg width="5em" height="5em"
                                                                                                                   viewBox="0 0 16 16" class="bi bi-bookmark-plus-fill" fill="currentColor"
                                                                                                                   xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 0a2 2 0 0 0-2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4zm4.5 4.5a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z" />
                                    </svg></a><h5 class="card-title" id="plusTemplateText">Sukurti maketą</h5>
                            </li></div>
                    </div>
                    <div class="col">
                        <div class="card h-100 hover-shadow">
                            <img src="https://cdn.jhmrad.com/wp-content/uploads/elegant-ville-noida-extension-greater-apartment_142102.jpg" alt="https://cdn.jhmrad.com/wp-content/uploads/elegant-ville-noida-extension-greater-apartment_142102.jpg" class="card-img-top">
                            <div class="card-body">
                                
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a short card.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 hover-shadow">
                            <img src="https://mdbootstrap.com/img/new/standard/city/043.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to
                                    additional content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 hover-shadow">
                            <img src="https://mdbootstrap.com/img/new/standard/city/044.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 hover-shadow">
                            <img src="https://mdbootstrap.com/img/new/standard/city/041.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 hover-shadow">
                            <img src="https://mdbootstrap.com/img/new/standard/city/042.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a short card.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 hover-shadow">
                            <img src="https://mdbootstrap.com/img/new/standard/city/043.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to
                                    additional content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 hover-shadow">
                            <img src="https://mdbootstrap.com/img/new/standard/city/044.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 hover-shadow">
                            <img src="https://mdbootstrap.com/img/new/standard/city/041.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 hover-shadow">
                            <img src="https://mdbootstrap.com/img/new/standard/city/042.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a short card.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 hover-shadow">
                            <img src="https://mdbootstrap.com/img/new/standard/city/043.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to
                                    additional content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 hover-shadow">
                            <img src="https://mdbootstrap.com/img/new/standard/city/044.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center text-sodas">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item bg-sodas text-white"><a class="page-link bg-sodas text-white" href="#">1</a></li>
                        <li class="page-item"><a class="page-link text-sodas" href="#">2</a></li>
                        <li class="page-item"><a class="page-link text-sodas" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link text-sodas" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>


</body>
<footer class="bg-light text-center text-lg-left ">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color:#e0e0e0;">
        © 2020 Copyright: 
        <a class="text-dark" href="https://github.com/vytasgavelis/tavo_sodas">Tavo sodas</a>
    </div>
    <!-- Copyright -->
</footer>

</html>
