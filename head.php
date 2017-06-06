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
    body {
      background: #455A64
    }
      .demo-layout-transparent {
        background: #455A64;

      }
      .demo-layout-transparent .mdl-layout__header, .mdl-layout__drawer-button {
        color: white;
        background: #394a52;
      }

     .mdl-layout-title {
       line-height: 13px !important;
       padding: 30px;
     }
    .mdh-expandable-search {
       margin: 0 20px;
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

     .mdl-chip {
          height: 32px;
          font-family: "Roboto","Helvetica","Arial",sans-serif;
          line-height: 32px;
          padding: 0 12px;
          border: 0;
          border-radius: 16px;
          background-color: #dedede;
          display: inline-block;
          color: rgba(0,0,0,.87);
          margin: 2px 8px;
          font-size: 0;
          white-space: nowrap;
      }

      header {
  position: relative;
  background-color: #394a52;
  height: 56px;
  box-shadow: 0 6px 25px rgba(0,0,0,0.26);
}

.add-button {
  position: absolute;
  right: 38px;
  bottom: 24px;
  width: 56px;
  height: 56px;
  overflow: visible;
  -webkit-transition: transform .4s cubic-bezier(.58,-0.37,.45,1.46),
    color 0s ease .4s,font-size .2s;
  -moz-transition: transform .4s cubic-bezier(.58,-0.37,.45,1.46),
    color 0s ease .4s,font-size .2s;
  transition: transform .4s cubic-bezier(.58,-0.37,.45,1.46),
    color 0s ease .4s,font-size .2s;
  text-align: center;
  line-height: 56px;
  font-size: 28px;
  color: rgba(255,255,255,1);
}

.add-button:before {
  position: relative;
  z-index: 100;
  content:"+";

}



.add-button:hover {

  color: rgba(255,255,255,0);
  transform: rotate(45deg);
}

.sub-button {
  position: absolute;
  display: inline-block;
  background-color:#ff4081;
  color: rgba(255,255,255,0);
  width: 56px;
  height: 56px;
  line-height:48px;
  font-family: "FontAwesome";
  font-size: 40px;
  -webkit-transition: top .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    left .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    bottom .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    right .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    width .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    height .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    transform .1s ease 0s,
    border-radius .2s  ease .2s;
   -moz-transition: top .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    left .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    bottom .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    right .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    width .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    height .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    transform .1s ease 0s,
    border-radius .2s  ease .2s;
   transition: top .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    left .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    bottom .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    right .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    width .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    height .2s cubic-bezier(.58,-0.37,.45,1.46) .2s,
    transform .1s ease 0s,
    border-radius .2s  ease .2s;
}

.tl {
  top: 0;
  left: 0;
  border-radius: 28px 0 0 0;
}

.tr {
  top: 0;
  right: 0;
  border-radius: 0 28px 0 0;
}

.bl {
  bottom: 0;
  left: 0;
  border-radius: 0 0 0 28px;
}

.br {
  bottom: 0;
  right: 0;
  border-radius: 0 0 28px 0;
}


.tl:before {
}

.tr:before {
}

.bl:before {
}

.br:before {
}


.add-button:hover .sub-button {
  width: 48px;
  height: 48px;
  transform: rotate(-45deg);

  color: rgba(255,255,255,1);
  -webkit-transition: top .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    left .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    bottom .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    right .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    width .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    height .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    color .3s ease .8s,
    transform .3s ease .8s,
    border-radius .4s  ease .6s;
   -moz-transition: top .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    left .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    bottom .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    right .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    width .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    height .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    color .3s ease .8s,
    transform .3s ease .8s,
    border-radius .4s  ease .6s;
   transition: top .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    left .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    bottom .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    right .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    width .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    height .4s cubic-bezier(.58,-0.37,.45,1.46) .4s,
    color .3s ease .8s,
    transform .3s ease .8s,
    border-radius .4s  ease .6s;
}

.add-button:hover .tl {
  top: -25px;
  left: -25px;
  border-radius: 28px;
}

.add-button:hover .tr {
  top: -25px;
  right: -25px;
  border-radius: 28px;
}

.add-button:hover .bl {
  bottom: -25px;
  left: -25px;
  border-radius: 28px;
}

.add-button:hover .br {
  bottom: -25px;
  right: -25px;
  border-radius: 28px;
}



    </style>
  </head>
  <body>
    <div class="demo-layout-transparent mdl-layout mdl-js-layout">
      <header class="mdl-layout__header mdl-layout__header--transparent">

        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">BahasaKu</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <nav class="mdl-navigation">          <!-- Search -->
                    <div class="mdh-expandable-search mdl-cell--hide-phone">
                      <i class="material-icons">search</i>
                      <form action="#">
                        <input type="text" placeholder="Search" size="18">
                      </form>
                    </div>

            <!-- LOGOUT -->
            <button type="button" id="btnLogout" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect dialog-button-logout">
              <i class="material-icons">exit_to_app</i>
            </button>
          </nav>
        </div>
      </header>
        <div class="mdl-layout__drawer">
          <span class="mdl-layout-title">BahasaKu</span>

              <nav id="menu" class="mdl-navigation">
                <header>
                  <div class="add-button">
                    <!-- <div class="sub-button tl" id="addBahasa">
                      <i class="material-icons">add</i>
                    </div> -->
                    <div class="sub-button tr" id="editBahasa">
                      <i class="material-icons">edit</i>
                    </div>
                    <div class="sub-button bl" id="deleteBahasa">
                      <i class="material-icons">delete</i>
                    </div>
                    <div class="sub-button br" id="addBahasa">
                      <i class="material-icons">add</i>
                    </div>
                  </div>
                </div>

                </header>

              </nav>
            </div>


      <main class="mdl-layout__content" style="padding : 76px">
    <!-- END COPYRIGHT -->
