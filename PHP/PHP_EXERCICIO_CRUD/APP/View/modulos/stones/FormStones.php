<?php

// echo "Estou dentro de FormPessoa.php"

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stones Form</title>
    <style>
        /* http://meyerweb.com/eric/tools/css/reset/ 
       v2.0 | 20110126
       License: none (public domain)
    */
    
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }
    
        /* HTML5 display-role reset for older browsers */
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }
    
        body {
            line-height: 1;
        }
    
        ol,
        ul {
            list-style: none;
        }
    
        blockquote,
        q {
            quotes: none;
        }
    
        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }
    
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }
    
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
    
        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
    
        header,
        footer {
            width: 100%;
            height: 100px;
            flex-shrink: 0;
        }
    
        main {
             display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
        }

        .shake-on-hover:hover {
      transform: rotate(60deg);
      animation-iteration-count: 1;  
    }
 
    .shake-on-hover {
      display: inline-block;
      transition: transform 0.5s ease-in-out; 
    }

    .gem_thumb{
    width: 200px;
    /* height: 200px !important; */
    /* If you define height, the img-fluid wont work */
    /* height auto ensures that the image respect the width so it keeps the aspect ratio */
    /* with img_fluid it will always be 200px of widht but height adjust its value to show the image */
   }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>



<body data-bs-theme="dark">




    
    <header>
        <div class="h4 pb-2 mb-4 text-danger border-bottom border-danger m-3 user-select-none d-flex" >
            Stones Form <span class="shake-on-hover">💎</span>
            <button class="btn btn-light ms-auto" onclick="changeColorPage()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
                    <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708"/>
                    </svg>
            </button>
          </div>
    </header>

    <main>
        <section class="container-fluid">
            <article class="container-fluid">
                <form class="rounded-3 border border-primary border border-primary p-2 mb-2 border-opacity-50" action="/stones/form/save" method="post">
                <input type="number" class="visually-hidden" id="id" name="id" value="<?= $model->id ?>">
                    <div class="m-3">
                      <label for="denomination_stone" class="form-label mt-3">Denomination</label>
                      <input type="text" class="form-control" id="denomination_stone" name="denomination_stone" value="<?= $model->denomination_stone ?>" required>
                    </div>
                    <div class="m-3">
                      <label for="color_stone" class="form-label">Color</label>
                      <input type="text" class="form-control" id="color_stone" name="color_stone" value="<?= $model->color_stone ?>" required>
                    </div>
                    <div class="m-3">
                      <label for="weight_stone" class="form-label">Weight</label>
                      <input type="number" step="any" class="form-control" id="weight_stone" name="weight_stone" value="<?= $model->weight_stone ?>" required>
                      <select class="form-select mt-3" id="weight_stone_type" name="weight_stone_type" aria-label="weight_stone_type">
                        <option selected id="mg" name="mg">Milligram (mg)</option>
                        <option id="g" name="g">Gram (g)</option>
                        <option id="kg" name="kg">Kilogram (kg)</option>     
                      </select>
                    </div>
                    <div class="m-3">
                        <label for="region_stone" class="form-label">Region</label>
                        <input type="text" class="form-control" id="region_stone" name="region_stone" value="<?= $model->region_stone ?>" required>
                      </div>
                      <div class="m-3">
                        <label for="image_stone" class="form-label">Upload Image</label>
                        <input type="file" class="form-control" id="image_stone" name="image_stone" accept="image/*" onchange="previewImage(event)" required>
                      </div>
                      <div class="m-3 d-flex justify-content-center align-items-center">
                        <img src="<?= $model->image_stone ?>" alt="" srcset="" class="object-fit-cover border rounded img-thumbnail" id="image_preview" name="image_preview">
                        <input type="text" class="visually-hidden" id="source_img_database" name="source_img_database">
                      </div>
                      <div class="container-fluid d-flex justify-content-center">
                        <button type="button" class="btn btn-primary m-3" id="submitCheckInputForm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy2-fill" viewBox="0 0 16 16">
  <path d="M12 2h-2v3h2z"/>
  <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v13A1.5 1.5 0 0 0 1.5 16h13a1.5 1.5 0 0 0 1.5-1.5V2.914a1.5 1.5 0 0 0-.44-1.06L14.147.439A1.5 1.5 0 0 0 13.086 0zM4 6a1 1 0 0 1-1-1V1h10v4a1 1 0 0 1-1 1zM3 9h10a1 1 0 0 1 1 1v5H2v-5a1 1 0 0 1 1-1"/>
</svg>
                        </button>
                        <button type="button" class="btn btn-light m-3" onclick="redirectToMainPage(event)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
  <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
</svg>
                        </button>
                        <button type="button" class="btn btn-light m-3" onclick="redirectToListPage(event)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-columns-reverse" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h2a.5.5 0 0 1 0 1h-2A.5.5 0 0 1 0 .5m4 0a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10A.5.5 0 0 1 4 .5m-4 2A.5.5 0 0 1 .5 2h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-4 2A.5.5 0 0 1 .5 4h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m-4 2A.5.5 0 0 1 .5 6h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m-4 2A.5.5 0 0 1 .5 8h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10a.5.5 0 0 1-.5-.5m-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m4 0a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
</svg>
                        </button>
                        <button type="submit" class="btn btn-primary m-3 visually-hidden" id="submitForm"></button>
                    </div>
                    </form>
            </article>
        </section>
    </main>

    <footer></footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>

    <script>
    function redirectToMainPage(event) {
        // Prevent form submission
        event.preventDefault();
        // Redirect to the main page
        window.location.href = '/';
    }
    </script>

<script>
    function redirectToListPage(event) {
        // Prevent form submission
        event.preventDefault();
        // Redirect to the main page
        window.location.href = '/stones';
    }
    </script>

    <script>
        // Embed PHP variable into JavaScript
        var weightTypePHP = "<?= $model->weight_stone_type ?>";
                         
        if (weightTypePHP == "Milligram (mg)") {
            document.getElementById("mg").selected = true;
            }
        else if (weightTypePHP == "Gram (g)") {
            document.getElementById("g").selected = true;
            }
        else{
            document.getElementById("kg").selected = true;
            }
    </script>

    <script>
        document.getElementById('submitCheckInputForm').addEventListener('click', function(){

        document.getElementById('denomination_stone').value = document.getElementById('denomination_stone').value.trim(); 
        document.getElementById('color_stone').value = document.getElementById('color_stone').value.trim(); 
        document.getElementById('region_stone').value = document.getElementById('region_stone').value.trim(); 

        document.getElementById("submitForm").click()
        })
    </script>

    <script>
        function previewImage(event) {
        const file = event.target.files[0];
        const reader = new FileReader();
        
        reader.onload = function(e) {
            const imagePreview = document.getElementById('image_preview');
            const sourceDataBaseImg = document.getElementById('source_img_database');
            imagePreview.src = e.target.result;
            sourceDataBaseImg.value = e.target.result;
            imagePreview.style.display = 'block';
            imagePreview.classList.add('gem_thumb')
        };
        
        if (file) {
            reader.readAsDataURL(file);
        }
        
    }  
    </script>

    <script>
        var exist_image = "<?= $model->image_stone ?>"

        if(exist_image){
            const imagePreview = document.getElementById('image_preview');
            const sourceDataBaseImg = document.getElementById('source_img_database');
            imagePreview.src = exist_image;
            sourceDataBaseImg.value = exist_image;
            imagePreview.style.display = 'block';
            imagePreview.classList.add('gem_thumb')
            document.getElementById('image_stone').required = false
        }
    </script>
</body>

</html>

<script>
    function changeColorPage() {
        if (document.body.getAttribute('data-bs-theme') == "dark") {
            document.body.setAttribute('data-bs-theme', 'light');
            const newTheme = 'light'
            localStorage.setItem('theme', newTheme);


            const darkButtons = document.querySelectorAll('.btn-light')
            darkButtons.forEach(element => {
                element.classList.remove('btn-light')
                element.classList.add('btn-dark')
            });
        } else {
            document.body.setAttribute('data-bs-theme', 'dark');
            const newTheme = 'dark'
            localStorage.setItem('theme', newTheme);


            const lightButtons = document.querySelectorAll('.btn-dark')
            lightButtons.forEach(element => {
                element.classList.remove('btn-dark')
                element.classList.add('btn-light')
            });
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        const savedTheme = localStorage.getItem('theme');
        document.body.setAttribute('data-bs-theme', savedTheme);

        if (savedTheme == 'dark') {

            document.body.setAttribute('data-bs-theme', 'dark');

            const lightButtons = document.querySelectorAll('.btn-dark')
            lightButtons.forEach(element => {
                element.classList.remove('btn-dark')
                element.classList.add('btn-light')
            });

        } else {
            document.body.setAttribute('data-bs-theme', 'light');

            const darkButtons = document.querySelectorAll('.btn-light')
            darkButtons.forEach(element => {
                element.classList.remove('btn-light')
                element.classList.add('btn-dark')
            });
        }

    });
</script>