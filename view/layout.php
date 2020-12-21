<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="<?= CSS_PATH ?>style.css"> -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/datatables2.css">
    <title><?= $result["titrePage"] ?></title>

    
</head>
<body>
    <div id="wrapper">
        <!-- <h4 class="message" style="color:red; background-color:#FFB6C1"><?= App\Session::getFlash("error") ?></h4>
        <h4 class="message" style="color: green; background-color: rgb(214, 250, 214)"><?= App\Session::getFlash("success") ?></h4> -->
        <header>
            <div id="top">
                <div id="logo">
                    <a href='https://.pngtree.com/so/clipart-de-film'><img src="public/img/logo2.png" alt="logo"></a>
                    <a id="titlelogo" href="index.php">CINEPREUMS</a>
                </div>
                <nav id="topnav">
                    <a href="?ctrl=film&method=allFilms">Films</a>
                    <a href="?ctrl=genre&method=allGenres">Genres</a>
                    <a href="?ctrl=acteur&method=allActeurs">Acteurs</a>
                    <a href="?ctrl=realisateur&method=allRealisateurs">Realisateurs</a>
                    <a href="?ctrl=role&method=allRoles">Rôles</a>
                    <a href="?ctrl=trailer&method=allTrailers">Trailers</a>
                </nav>
                <div id="gestion">
                    <span>ADMIN</span>
                </div>
            </div>
            <!-- <nav id="midnav">
                <div id="view">
                    <i class="fas fa-eye"></i>
                </div>
                <div id="midnavlinks">
                </div>
            </nav> -->
        </header>

        <main>
            <div id="page">
                <?= $page ?>
            </div>
        </main>
        
        
        <!-- ------------------ JS ------------------ -->
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
        <script>
            $(document).ready(function(){
            /* ------------------ MESSAGE FLASH ------------------*/
                $(".message").each(function(){
                    if($(this).text().length > 0){
                        $(this).slideDown(500, function(){
                            $(this).delay(3000).slideUp(500)
                        })
                    }
                })
            })
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
        <script src="https://kit.fontawesome.com/b24fd3f3cf.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/104/three.js"></script>
        <script src="public/js/threedimensions.js"></script>
    
        </script>
        <script>
                /*-------------------DATA TABLES--------------------*/    
            $(document).ready( function () {
                $('.tables').DataTable();
            } );
            if(document.getElementsByTagName("table")[0] !== undefined){
                document.getElementsByTagName("table")[0].setAttribute("class", "tables");
            }
        </script>
    </div>
</body>
</html>