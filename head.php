<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script src="https://www.gstatic.com/firebasejs/4.1.0/firebase.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <style>
      .demo-layout-transparent {
        background: url('image/background.jpg') center / cover;
      }
      .demo-layout-transparent .mdl-layout__header,
      .demo-layout-transparent .mdl-layout__drawer-button {
        /* This background is dark, so we set text to white. Use 87% black instead if
           your background is light. */
        color: white;
      }
      .mdl-card__menu {
       color: #46B6AC;
     }
    </style>
  </head>
  <body>
    <div class="demo-layout-transparent mdl-layout mdl-js-layout">
      <header class="mdl-layout__header mdl-layout__header--transparent">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">BahasaKu</span>
          <div class="mdl-card__menu">
            <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
              <i class="material-icons">add</i>
            </button>
          </div>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
        </div>
      </header>
              <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">BahasaKu</span>
                <nav id="menu" class="mdl-navigation">

                </nav>
              </div>
      <main class="mdl-layout__content" style="padding : 0 20px">
