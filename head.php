<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script src="https://www.gstatic.com/firebasejs/4.1.0/firebase.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <style>
      .demo-layout-transparent {
        background: #455A64 center / cover;

      }
      .demo-layout-transparent .mdl-layout__header, .mdl-layout__drawer-button {
        color: white;
        background: #394a52;
      }


     .mdl-layout__header-row{
       padding: 20px;
       height: 20px;
       width: 16px;
     }

     .mdl-layout__header {
       padding: 10px;
       background: #455A64;

     }

     .mdl-layout-title {
       line-height: 13px !important;
       padding: 60px;
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
                </style>
                <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect dialog-button-bahasa">
                  <i class="material-icons">add</i>
                </button>
                <nav id="menu" class="mdl-navigation">
                </nav>
              </div>
      <main class="mdl-layout__content" style="padding : 16px">
