<?php

// echo "Estou dentro de ListaPessoa.php"


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

    .gem_thumb {
      width: 200px;
      /* height: 200px !important; */
      /* If you define height, the img-fluid wont work */
      /* height auto ensures that the image respect the width so it keeps the aspect ratio */
      /* with img_fluid it will always be 200px of widht but height adjust its value to show the image */
    }

    #tableMobile {
        display: none;
      }


    @media only screen and (max-width: 1200px) {

      #tableDesktop {
        display: none;

      }

      #tableMobile {
        display: flex;
      }

    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>



<body data-bs-theme="dark">

  <header>
    <div class="h4 pb-2 mb-4 text-danger border-bottom border-danger m-3 user-select-none d-flex">
      Stones List <span class="shake-on-hover">💎</span>
      <button class="btn btn-light ms-auto" onclick="changeColorPage()">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
          <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708" />
        </svg>
      </button>
    </div>
  </header>

  <main>
    <section class="container-fluid">
      <article class="container-fluid">

        <div class="container-fluid d-flex justify-content-center align-items-center">
          <button type="button" class="btn btn-light m-3" onclick="redirectToMainPage(event)">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
  <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
</svg>
          </button>

          <button type="button" class="btn btn-primary m-3" onclick="window.location.href='/stones/form';">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-r-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.5 4.002V12h1.335V8.924H8.52L9.98 12h1.52L9.856 8.701c.828-.299 1.495-1.101 1.495-2.238 0-1.488-1.03-2.461-2.74-2.461zm1.335 1.09v2.777h1.549c.995 0 1.573-.463 1.573-1.36 0-.913-.596-1.417-1.537-1.417z"/>
</svg>
                    </button>
        </div>

        <!-- Desktop -->
        <div class="rounded-3 border border-primary border border-primary p-2 mb-2 border-opacity-50" id="tableDesktop">
          <table class="table text-break text-center text-wrap">
            <thead>
              <tr>
                <th scope="col"><h4>ID</h4></th>
                <th scope="col"><h4>Denomination</h4></th>
                <th scope="col"><h4>Color</h4></th>
                <th scope="col"><h4>Weight</h4></th>
                <th scope="col"><h4>Weight Type</h4></th>
                <th scope="col"><h4>Region</h4></th>
                <th scope="col"><h4>Preview</h4></th>
                <th scope="col"><h4>Actions</h4></th>
              </tr>
            </thead>
            <tbody>
              <!-- <tr>
                        <th scope="row">1</th>
                        <td>Diamond</td>
                        <td>Color</td>
                        <td>Weight</td>
                        <td>Weight Type</td>
                        <td>Region</td>
                        <td>
                            <button class="btn btn-outline-danger">Delete 🗑</button>
                            <button class="btn btn-outline-warning">Edit ✏</button>
                        </td>
                      </tr> -->
              <?php foreach ($model->rows as $item): ?>
                <tr>
                  <th scope="row"><?= $item->id ?></th>
                  <td><?= $item->denomination_stone ?></td>
                  <td><?= $item->color_stone ?></td>
                  <td><?= $item->weight_stone ?></td>
                  <td><?= $item->weight_stone_type ?></td>
                  <td><?= $item->region_stone ?></td>
                  <td><img src="<?= $item->image_stone ?>" alt="" srcset="" class="object-fit-cover border rounded img-thumbnail gem_thumb"></td>
                  <td>
                    <button class="btn btn-danger m-1" onclick="questionDelete(<?= $item->id ?>)">🗑</button>
                    <button class="btn btn-warning m-1" onclick="window.location.href='/stones/form?id=<?= $item->id ?>';">✏</button>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>

        <!-- Mobile -->
        <div class="rounded-3 border border-primary border border-primary p-2 mb-2 border-opacity-50 flex-column" id="tableMobile">
        <?php foreach ($model->rows as $item): ?>
          <div class="table text-break text-center text-wrap d-flex justify-content-center align-items-center flex-column">
            <img src="<?= $item->image_stone ?>" alt="" srcset="" class="object-fit-cover border rounded img-thumbnail gem_thumb">
            <h4>ID</h4>
            <p><?= $item->id ?></p>
            <h4>Denomination</h4>
            <p><?= $item->denomination_stone ?></p>
            <h4>Color</h4>
            <p><?= $item->color_stone ?></p>
            <h4>Weight</h4>
            <p><?= $item->weight_stone ?></p>
            <h4>Weight Type</h4>
            <p><?= $item->weight_stone_type ?></p>
            <h4>Region</h4>
            <p><?= $item->region_stone ?></p>
            <div class="d-flex justify-content-center align-items-center flex-row">
              <button class="btn btn-danger m-1" onclick="questionDelete(<?= $item->id ?>)">🗑</button>
              <button class="btn btn-warning m-1" onclick="window.location.href='/stones/form?id=<?= $item->id ?>';">✏</button>
            </div>
          </div>
          <?php endforeach ?>
        </div>

      </article>
    </section>
  </main>

  <footer></footer>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary visually-hidden" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="modalDeleteTrigger">
    Launch static backdrop modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">🗑</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete this element?
        </div>
        <div class="modal-footer">


        </div>
      </div>
    </div>
  </div>



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
    function questionDelete(id) {
      const modalButton = document.getElementById('modalDeleteTrigger')
      const modalFooter = document.querySelector("#staticBackdrop .modal-footer");

      modalFooter.innerHTML = ""

      const closeButton = document.createElement("button");
      closeButton.setAttribute("type", "button");
      closeButton.classList.add("btn", "btn-danger");
      closeButton.setAttribute("data-bs-dismiss", "modal");
      closeButton.innerHTML = "";
      modalFooter.appendChild(closeButton);

      const newButton = document.createElement("button");
      newButton.setAttribute("type", "button");
      newButton.classList.add("btn", "btn-success");
      newButton.innerText = "";
      newButton.onclick = function() {
        window.location.href = `/stones/delete?id=${id}`;
      };
      modalFooter.appendChild(newButton);
      modalButton.click()
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