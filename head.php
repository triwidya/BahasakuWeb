<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="css/index.css">
    <style>
      .demo-layout-transparent {
        background: #455A64 center / cover;

      }
      .demo-layout-transparent .mdl-layout__header, .mdl-layout__drawer-button {
        /* This background is dark, so we set text to white. Use 87% black instead if
           your background is light. */
        color: white;
      }


     .mdl-layout__header-row{
       padding: 16px;
       height: 18px;
       width: 16px;
     }

     .mdl-layout__header {
       padding: 10px;
       background: #455A64;

     }

     .mdl-layout-title {
       padding: 16px;
       height: 20px
     }
    .mdh-expandable-search {
       margin: 0 50px;
       align-items: center;
       justify-content: center;
     }

     .mdh-expandable-search form {
       max-width: 600px;
     }

     .mdh-expandable-search,
     .mdh-expandable-search form,
     .mdh-expandable-search input {
       /* Cross browser flex-grow */
       -webkit-box-flex: 1;
       -webkit-flex-grow: 1;
       -ms-flex-positive: 1;
       flex-grow: 1;
     }

     .mdh-expandable-search,
     .mdh-expandable-search form {
       /* Cross browser inline-flex */
       display: -webkit-inline-box;
       display: -webkit-inline-flex;
       display: -moz-inline-box;
       display: -ms-inline-flexbox;
       display: inline-flex;
     }

     /* Position search icon */
     .mdh-expandable-search .material-icons {
       position: relative;
       right: -40px;
       margin-left: -24px; /* Remove the blank space left behind by the icon being relatively positioned */
     }

     .mdh-expandable-search input {
       outline: none;
       border: none;
       font-size: 16px;
       color: #FFFFFF;
       background-color: #607D8B;
       padding: 0px 35px 0px 70px;
       height: 40px;
       line-height: 40px; /* TODO: This was recommended for cross browser compatability of input height, check if its actually needed in modern browsers */

       border-radius: 5px 5px 5px 5px;
       -moz-border-radius: 5px 5px 5px 5px;
       -webkit-border-radius: 5px 5px 5px 5px;
     }

     .mdh-expandable-search input::-webkit-input-placeholder { /* WebKit browsers */
         color:    #FFFFFF;
     }
     .mdh-expandable-search input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
        color:    #FFFFFF;
        opacity:  1; /* Firefox gives the placeholder a reduced opacity so we have to increase it */
     }
     .mdh-expandable-search input::-moz-placeholder { /* Mozilla Firefox 19+ */
        color:    #FFFFFF;
        opacity:  1; /* Firefox gives the placeholder a reduced opacity so we have to increase it */
     }
     .mdh-expandable-search input:-ms-input-placeholder { /* Internet Explorer 10+ */
        color:    #FFFFFF;
     }


     /* Bug fix: https://github.com/google/material-design-lite/issues/1078
      * To much padding on the left of header when the menu button is hidden */
     @media screen and (min-width: 851px) {
       .mdl-layout__header-row {
         padding: 0 40px 0 40px;
       }
     }

     /* Bug fix for badges being in the wrong location */
     .mdl-badge[data-badge]:after {
       right: -7px;
       top: -8px;
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
            <!-- Displayed on Computer and Tablet -->
          <!-- Search -->
          <div class="mdh-expandable-search mdl-cell--hide-phone">
            <i class="material-icons">search</i>
            <form action="#">
              <input type="text" placeholder="Search" size="18">
            </form>
          </div>

          </div>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
        </div>
      </header>
              <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">BahasaKu</span>
                <nav class="mdl-navigation">

                  <button class="accordion">Sumatera Barat</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Sumatera Selatan</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Sumatera Utara</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Sumatera Aceh</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Bali</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Bangka Belitung</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Banten</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Bengkulu</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">DKI Jakarta</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Gorontalo</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Jambi</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Jawa Tengah</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Jawa Timur</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Kalimantan Barat</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Kalimantan Selatan</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Kalimantan Tengah</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Kalimantan Utara</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Kepulauan Riau</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Lampung</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Maluku</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Maluku Utara</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                  <button class="accordion">Papua</button>
                  <div class="panel">
                    <p><a class="mdl-navigation__link" href="">Bahasa 1</a></p>
                    <p><a class="mdl-navigation__link" href="">Bahasa 2</a></p>
                  </div>

                </nav>
              </div>
      <main class="mdl-layout__content" style="padding : 0 20px">
