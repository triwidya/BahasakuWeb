(function () {
      // Initialize Firebase
    var config = {
        apiKey: "AIzaSyCRGfgFz2V6NO4gJwHTXQknQdWEJvup7jU",
        authDomain: "bahasaku-a7af4.firebaseapp.com",
        databaseURL: "https://bahasaku-a7af4.firebaseio.com",
        projectId: "bahasaku-a7af4",
        storageBucket: "bahasaku-a7af4.appspot.com",
        messagingSenderId: "578157537660"
    };
    firebase.initializeApp(config);

    const dbRefObject = firebase.database().ref().child('Provinsi');
    const menu = document.getElementById('menu');

    dbRefObject.on('child_added', snap => {
        const btn = document.createElement('button');
        btn.id = snap.key.trim().replace(/ /g, "_");
        btn.type = 'button';
        btn.className = 'accordion';
        const text = document.createTextNode(snap.key.slice(9));
        btn.appendChild(text);
        menu.appendChild(btn);

        const dbRefObjectChild = firebase.database().ref().child('Provinsi').child(snap.key);

        const subMenu = document.getElementById(snap.key.trim().replace(/ /g, "_"));
        const panel = document.createElement('div');
        panel.className = 'panel';
        dbRefObjectChild.on('child_added', snapChild => {
            const panelChild = document.createElement('p');
            panelChild.className = 'sub_menu';
            panelChild.id = snapChild.val();
            const nav_link = document.createElement('a');
            nav_link.id = snapChild.val();
            nav_link.className = 'mdl-navigation__link';
            const text = document.createTextNode(snapChild.val());
            nav_link.appendChild(text);
            panelChild.appendChild(nav_link);
            panel.appendChild(panelChild);
        });
        menu.appendChild(panel);
    });

    dbRefObject.on('child_changed', snap =>{
        console.log(snap.key);
    });

    dbRefObject.once("value", function(snap) {
        var acc = document.getElementsByClassName("accordion");
        for (var i = 0; i < acc.length; i++) {
            acc[i].onclick = function(){
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            }
        }

        var sub_menu = document.getElementsByClassName("sub_menu");
        for (var i = 0; i < acc.length; i++) {
            sub_menu[i].onclick = function(){
                setData(this.id);
            }
        }

    });
}());

var selectedBahasa;
function setData(bahasa) {
    selectedBahasa = bahasa;
    firebase.database().ref('/Bahasa/' + bahasa + "/Sejarah/").once('value', function(snapshot) {
      snapshot.forEach(function(childSnapshot) {
        var storage = firebase.storage();
        var pathReference = storage.refFromURL('gs://bahasaku-a7af4.appspot.com/Photos/'+bahasa);

        pathReference.getDownloadURL().then(function(url) {
            document.getElementById("latar").style.background = "url('" + url +"') #46B6AC";
        }).catch(function(error) {
          // Handle any errors
        });

        var childKey = childSnapshot.key;
        document.getElementById("keterangan").innerHTML = childSnapshot.val().deskripsiBahasas;
        document.getElementById("judul").innerHTML = childSnapshot.val().titleBahasas;
      });
    });
    $("#table_keluarga").empty();
    $("#table_angka").empty();
    $("#table_percakapan").empty();
    firebase.database().ref('/Bahasa/' + bahasa + "/Keluarga/").once('value', function(snapshot) {
      snapshot.forEach(function(childSnapshot) {
          console.log(childSnapshot.val().bahasaDaerah + " || " + childSnapshot.val().bahasaIndonesia);
          $("#table_keluarga").prepend("<tr><td class=\"mdl-data-table__cell--non-numeric\">" + childSnapshot.val().bahasaIndonesia + "</td><td>" + childSnapshot.val().bahasaDaerah + "</td><td><span class=\"mdl-chip mdl-chip--contact\"><button class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect\"><i class=\"material-icons\">&#xE2C3;</i></button><span class=\"mdl-chip__text\">Audio</span></span></td></tr>");
      });
    });
    firebase.database().ref('/Bahasa/' + bahasa + "/Angka/").once('value', function(snapshot) {
      snapshot.forEach(function(childSnapshot) {
          console.log(childSnapshot.val().bahasaDaerah + " || " + childSnapshot.val().bahasaIndonesia);
          $("#table_angka").prepend("<tr><td class=\"mdl-data-table__cell--non-numeric\">" + childSnapshot.val().bahasaIndonesia + "</td><td>" + childSnapshot.val().bahasaDaerah + "</td><td><span class=\"mdl-chip mdl-chip--contact\"><button class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect\"><i class=\"material-icons\">&#xE2C3;</i></button><span class=\"mdl-chip__text\">Audio</span></span></td></tr>");
      });
    });
    firebase.database().ref('/Bahasa/' + bahasa + "/Percakapan/").once('value', function(snapshot) {
      snapshot.forEach(function(childSnapshot) {
          console.log(childSnapshot.val().bahasaDaerah + " || " + childSnapshot.val().bahasaIndonesia);
          $("#table_percakapan").prepend("<tr><td class=\"mdl-data-table__cell--non-numeric\">" + childSnapshot.val().bahasaIndonesia + "</td><td>" + childSnapshot.val().bahasaDaerah + "</td><td><span class=\"mdl-chip mdl-chip--contact\"><button class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect\"><i class=\"material-icons\">&#xE2C3;</i></button><span class=\"mdl-chip__text\">Audio</span></span></td></tr>");
      });
    });
}
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}

// Fungsi Progress dialog sejarah
(function () {
    var dialogButton = document.querySelector('.dialog-button');
    var dialog = document.querySelector('#dialog1');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
       dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
  });
}());

// Fungsi Progress dialog keluarga
(function () {
    var dialogButton = document.querySelector('.dialog-button-keluarga');
    var dialog = document.querySelector('#dialog2 ');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
       dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
  });
}());

// Fungsi Progress dialog angka
(function () {
    var dialogButton = document.querySelector('.dialog-button-angka');
    var dialog = document.querySelector('#dialog3 ');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
       dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
  });
}());

// Fungsi Progress dialog percakapan
(function () {
    var dialogButton = document.querySelector('.dialog-button-percakapan');
    var dialog = document.querySelector('#dialog4 ');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
       dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
  });
}());

$('#btnInputKeluarga').click(function() {
  const bahasaIndonesia = $('#txtBahasaKeluarga').val().trim();
  const bahasaDaerah = $('#txtDaerahKeluarga').val().trim();
  firebase.database().ref().child('Bahasa').child(selectedBahasa).child('Keluarga').push().set({
    bahasaDaerah: bahasaDaerah,
    bahasaIndonesia: bahasaIndonesia
  });
});

$('#btnInputAngka').click(function() {
  const bahasaIndonesia = $('#txtBahasaAngka').val().trim();
  const bahasaDaerah = $('#txtDaerahAngka').val().trim();
  firebase.database().ref().child('Bahasa').child(selectedBahasa).child('Angka').push().set({
    bahasaDaerah: bahasaDaerah,
    bahasaIndonesia: bahasaIndonesia
  });
});

$('#btnInputPercakapan').click(function() {
  const bahasaIndonesia = $('#txtBahasaPercakapan').val().trim();
  const bahasaDaerah = $('#txtDaerahPercakapan').val().trim();
  firebase.database().ref().child('Bahasa').child(selectedBahasa).child('Percakapan').push().set({
    bahasaDaerah: bahasaDaerah,
    bahasaIndonesia: bahasaIndonesia
  });
});

$('#btnInputSejarah').click(function() {
    const bahasaTItle = $('#txtJudulSejarah').val().trim();
    const bahasaKonten = $('#txtKontenSejarah').val().trim();
    if(selectedBahasa!=null){
        firebase.database().ref('/Bahasa/' + selectedBahasa + "/Sejarah/").once('value', function(snapshot) {
          snapshot.forEach(function(childSnapshot) {
            var childKey = childSnapshot.key;
            firebase.database().ref().child('Bahasa').child(selectedBahasa).child('Sejarah').child(childKey).set({
              titleBahasas: bahasaTItle,
              deskripsiBahasas: bahasaKonten
            });
          });
        });
    }
});

firebase.database().ref('Bahasa/').on('child_changed', function(data) {
    if(selectedBahasa!=null){
        setData(selectedBahasa);
    }
});