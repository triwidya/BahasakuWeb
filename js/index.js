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
            panelChild.style = 'cursor:pointer';
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
var title, konten;
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
        konten = childSnapshot.val().deskripsiBahasas;
        title = childSnapshot.val().titleBahasas;
        document.getElementById("keterangan").innerHTML = konten;
        document.getElementById("judul").innerHTML = title;
      });
    });
    $("#table_keluarga").empty();
    $("#table_angka").empty();
    $("#table_percakapan").empty();
    firebase.database().ref('/Bahasa/' + bahasa + "/Keluarga/").once('value', function(snapshot) {
      snapshot.forEach(function(childSnapshot) {
          var style;
          if(childSnapshot.val().audioUrl){
              style = "background: green;color: white;";
          } else {
              style = "";
          }
          $("#table_keluarga").prepend("<tr><td class=\"mdl-data-table__cell--non-numeric\">" + childSnapshot.val().bahasaIndonesia + "</td><td>" + childSnapshot.val().bahasaDaerah + "</td><td><span class=\"mdl-chip mdl-chip--contact\" style=\"cursor:pointer; "+ style +"\"><button id=\"menuUploadAudioKeluarga\" value=\""+childSnapshot.key+"\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect\"><i class=\"material-icons\">&#xE2C3;</i></button><span class=\"mdl-chip__text\">Audio</span></span></td><td><span class=\"mdl-chip mdl-chip--contact\"  style=\"cursor:pointer\"><button id=\"menuEditKeluarga\" value=\""+childSnapshot.key+"\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect\"><i class=\"material-icons\">edit</i></button><span class=\"mdl-chip__text\">Edit</span></span></td><td><span class=\"mdl-chip mdl-chip--contact\" style=\"cursor:pointer\"><button id=\"menuDeleteKeluarga\" value=\""+childSnapshot.key+"\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect\"><i class=\"material-icons\">delete</i></button><span class=\"mdl-chip__text\">Delete</span></span></td></tr>");
      });
    });
    firebase.database().ref('/Bahasa/' + bahasa + "/Angka/").once('value', function(snapshot) {
      snapshot.forEach(function(childSnapshot) {
          var style;
          if(childSnapshot.val().audioUrl){
              style = "background: green;color: white;";
          } else {
              style = "";
          }
          $("#table_angka").prepend("<tr><td class=\"mdl-data-table__cell--non-numeric\">" + childSnapshot.val().bahasaIndonesia + "</td><td>" + childSnapshot.val().bahasaDaerah + "</td><td><span class=\"mdl-chip mdl-chip--contact\" style=\"cursor:pointer; "+ style +"\"><button id=\"menuUploadAudioAngka\" value=\""+childSnapshot.key+"\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect\"><i class=\"material-icons\">&#xE2C3;</i></button><span class=\"mdl-chip__text\">Audio</span></span></td><td><span class=\"mdl-chip mdl-chip--contact\"  style=\"cursor:pointer\"><button id=\"menuEditAngka\" value=\""+childSnapshot.key+"\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect\"><i class=\"material-icons\">edit</i></button><span class=\"mdl-chip__text\">Edit</span></span></td><td><span class=\"mdl-chip mdl-chip--contact\" style=\"cursor:pointer\"><button id=\"menuDeleteAngka\" value=\""+childSnapshot.key+"\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect\"><i class=\"material-icons\">delete</i></button><span class=\"mdl-chip__text\">Delete</span></span></td></tr>");
      });
    });
    firebase.database().ref('/Bahasa/' + bahasa + "/Percakapan/").once('value', function(snapshot) {
      snapshot.forEach(function(childSnapshot) {
          var style;
          if(childSnapshot.val().audioUrl){
              style = "background: green;color: white;";
          } else {
              style = "";
          }
          $("#table_percakapan").prepend("<tr><td class=\"mdl-data-table__cell--non-numeric\">" + childSnapshot.val().bahasaIndonesia + "</td><td>" + childSnapshot.val().bahasaDaerah + "</td><td><span class=\"mdl-chip mdl-chip--contact\" style=\"cursor:pointer; "+ style +"\"><button id=\"menuUploadAudioPercakapan\" value=\""+childSnapshot.key+"\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect\"><i class=\"material-icons\">&#xE2C3;</i></button><span class=\"mdl-chip__text\">Audio</span></span></td><td><span class=\"mdl-chip mdl-chip--contact\"  style=\"cursor:pointer\"><button id=\"menuEditPercakapan\" value=\""+childSnapshot.key+"\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect\"><i class=\"material-icons\">edit</i></button><span class=\"mdl-chip__text\">Edit</span></span></td><td><span class=\"mdl-chip mdl-chip--contact\" style=\"cursor:pointer\"><button id=\"menuDeletePercakapan\" value=\""+childSnapshot.key+"\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect\"><i class=\"material-icons\">delete</i></button><span class=\"mdl-chip__text\">Delete</span></span></td></tr>");
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
       $('#txtJudulSejarah').val(title);
       $('#txtKontenSejarah').val(konten);
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
  });
}());

// Fungsi Progress dialog keluarga
(function () {
    var dialogButton = document.querySelector('.dialog-button-keluarga');
    var dialog = document.querySelector('#dialog2');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
        $('#btnInputKeluarga').val('ADD');
        dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
  });
}());

// Fungsi Progress dialog upload audio
(function () {
    var dialog = document.querySelector('#dialog7');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
  });
}());

var keyEdit;
$('#btnInputKeluarga').click(function() {
    var key
    if($('#btnInputKeluarga').val() == "ADD"){
        key = firebase.database().ref('/Bahasa/'+ selectedBahasa +'/Keluarga').push().key;
    } else if($('#btnInputKeluarga').val() == "EDIT") {
        key = keyEdit;
    }
    const bahasaIndonesia = $('#txtBahasaKeluarga').val().trim();
    const bahasaDaerah = $('#txtDaerahKeluarga').val().trim();
    manageData(key, "Keluarga", bahasaIndonesia, bahasaDaerah);
});

var group;
$(document).ready(function(){
    $(document).on("click", "#menuDeleteKeluarga", function() {
        firebase.database().ref().child('Bahasa').child(selectedBahasa).child('Keluarga').child($(this).val()).remove();
    });
    $(document).on("click", "#menuEditKeluarga", function() {
        firebase.database().ref('/Bahasa/' + selectedBahasa + '/Keluarga/' + $(this).val()).once('value').then(function(snapshot) {
            $('#txtBahasaKeluarga').val(snapshot.val().bahasaIndonesia);
            $('#txtDaerahKeluarga').val(snapshot.val().bahasaDaerah);
        });
        keyEdit = $(this).val();
        $('#btnInputKeluarga').val('EDIT');
        var dialog = document.querySelector('#dialog2');
        dialog.showModal();
    });
    $(document).on("click", "#menuUploadAudioKeluarga", function() {
        keyEdit = $(this).val();
        var dialog = document.querySelector('#dialog7');
        firebase.database().ref('/Bahasa/' + selectedBahasa + '/Keluarga/' + $(this).val()).once('value').then(function(snapshot) {
            if(snapshot.val().audioUrl){
                $("#player").attr("src", snapshot.val().audioUrl);
            } else {
                $("#player").attr("src", "");
            }
        });
        group = "Keluarga";
        dialog.showModal();
    });
});

// Fungsi Progress dialog angka
(function () {
    var dialogButton = document.querySelector('.dialog-button-angka');
    var dialog = document.querySelector('#dialog3');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
      $('#btnInputAngka').val('ADD');
      dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
  });
}());

$('#btnInputAngka').click(function() {
    var key
    if($('#btnInputAngka').val() == "ADD"){
        key = firebase.database().ref('/Bahasa/'+ selectedBahasa +'/Angka').push().key;
    } else if($('#btnInputAngka').val() == "EDIT") {
        console.log("EDIT");
        key = keyEdit;
    }
    const bahasaIndonesia = $('#txtBahasaAngka').val().trim();
    const bahasaDaerah = $('#txtDaerahAngka').val().trim();
    manageData(key, "Angka", bahasaIndonesia, bahasaDaerah);
});

$(document).ready(function(){
    $(document).on("click", "#menuDeleteAngka", function() {
        firebase.database().ref().child('Bahasa').child(selectedBahasa).child('Angka').child($(this).val()).remove();
    });
    $(document).on("click", "#menuEditAngka", function() {
        firebase.database().ref('/Bahasa/' + selectedBahasa + '/Angka/' + $(this).val()).once('value').then(function(snapshot) {
            $('#txtBahasaAngka').val(snapshot.val().bahasaIndonesia);
            $('#txtDaerahAngka').val(snapshot.val().bahasaDaerah);
        });
        keyEdit = $(this).val();
        $('#btnInputAngka').val('EDIT');
        var dialog = document.querySelector('#dialog3');
        dialog.showModal();
    });
    $(document).on("click", "#menuUploadAudioAngka", function() {
        keyEdit = $(this).val();
        var dialog = document.querySelector('#dialog7');
        firebase.database().ref('/Bahasa/' + selectedBahasa + '/Angka/' + $(this).val()).once('value').then(function(snapshot) {
            if(snapshot.val().audioUrl){
                $("#player").attr("src", snapshot.val().audioUrl);
            } else {
                $("#player").attr("src", "");
            }
        });
        group = "Angka";
        dialog.showModal();
    });
});
// Fungsi Progress dialog percakapan
(function () {
    var dialogButton = document.querySelector('.dialog-button-percakapan');
    var dialog = document.querySelector('#dialog4');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialogButton.addEventListener('click', function() {
      $('#btnInputPercakapan').val('ADD');
      dialog.showModal();
    });
    dialog.querySelector('button:not([disabled])')
    .addEventListener('click', function() {
      dialog.close();
  });
}());

$('#btnInputPercakapan').click(function() {
    var key
    if($('#btnInputPercakapan').val() == "ADD"){
        key = firebase.database().ref('/Bahasa/'+ selectedBahasa +'/Percakapan').push().key;
    } else if($('#btnInputPercakapan').val() == "EDIT") {
        console.log("EDIT");
        key = keyEdit;
    }
    const bahasaIndonesia = $('#txtBahasaPercakapan').val().trim();
    const bahasaDaerah = $('#txtDaerahPercakapan').val().trim();
    manageData(key, "Percakapan", bahasaIndonesia, bahasaDaerah);
});

// Fungsi Progress dialog tambah bahasa
(function () {
    var dialogButton = document.querySelector('.dialog-button-add-bahasa');
    var dialog = document.querySelector('#dialog5  ');
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

// Fungsi Progress dialog edit bahasa
(function () {
    var dialogButton = document.querySelector('.dialog-button-edit-bahasa');
    var dialog = document.querySelector('#dialog6');
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

$(document).ready(function(){
    $(document).on("click", "#menuDeletePercakapan", function() {
        firebase.database().ref().child('Bahasa').child(selectedBahasa).child('Percakapan').child($(this).val()).remove();
    });
    $(document).on("click", "#menuEditPercakapan", function() {
        firebase.database().ref('/Bahasa/' + selectedBahasa + '/Percakapan/' + $(this).val()).once('value').then(function(snapshot) {
            $('#txtBahasaPercakapan').val(snapshot.val().bahasaIndonesia);
            $('#txtDaerahPercakapan').val(snapshot.val().bahasaDaerah);
        });
        keyEdit = $(this).val();
        $('#btnInputPercakapan').val('EDIT');
        var dialog = document.querySelector('#dialog4');
        dialog.showModal();
    });
    $(document).on("click", "#menuUploadAudioPercakapan", function() {
        keyEdit = $(this).val();
        var dialog = document.querySelector('#dialog7');
        firebase.database().ref('/Bahasa/' + selectedBahasa + '/Percakapan/' + $(this).val()).once('value').then(function(snapshot) {
            if(snapshot.val().audioUrl){
                $("#player").attr("src", snapshot.val().audioUrl);
            } else {
                $("#player").attr("src", "");
            }
        });
        group = "Percakapan";
        dialog.showModal();
    });
});

$('#btnInputSejarah').click(function() {
    if(selectedBahasa!=null){
        var isi = false;
        console.log(firebase.database().ref('/Bahasa/' + selectedBahasa + "/Sejarah/"));
        firebase.database().ref('/Bahasa/' + selectedBahasa + "/Sejarah/").once('value', function(snapshot) {
          snapshot.forEach(function(childSnapshot) {
            var childKey = childSnapshot.key;
            console.log(childKey);
            saveSejarah(childKey);
            isi = true;
          });
        });
        if(!isi){
            var childKey = firebase.database().ref('/Bahasa/' + selectedBahasa + "/Sejarah/").push().key;
            saveSejarah(childKey);
        }
    }
});

function saveSejarah(key) {
    const bahasaTItle = $('#txtJudulSejarah').val().trim();
    const bahasaKonten = $('#txtKontenSejarah').val().trim();
    firebase.database().ref().child('Bahasa').child(selectedBahasa).child('Sejarah').child(key).set({
      titleBahasas: bahasaTItle,
      deskripsiBahasas: bahasaKonten
    });
    setData(selectedBahasa);
}

$(document).ready(function(){
    var uploader = document.getElementById('uploader');
    var fileButton = document.getElementById('btnUpload');
    fileButton.addEventListener('change', function(e) {
        var file = e.target.files[0];
        var storageRef = firebase.storage().refFromURL('gs://bahasaku-a7af4.appspot.com/Photos/'+ selectedBahasa );
        console.log(storageRef);
        var task = storageRef.put(file);
        console.log(task);
        task.on('state_changed',
            function progress(snapshot) {
                var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                uploader.value = progress;
            },
            function error(err) {

            },
            function complete() {
                setData(selectedBahasa);
            }
        );
    });
    var uploaderAudio = document.getElementById('uploaderAudio');
    var fileButtonAudio = document.getElementById('btnUploadAudio');
    fileButtonAudio.addEventListener('change', function(e) {
        var file = e.target.files[0];
        var storageRef = firebase.storage().refFromURL('gs://bahasaku-a7af4.appspot.com/Audios/'+ keyEdit);
        console.log(storageRef);
        var task = storageRef.put(file);
        console.log(task);
        task.on('state_changed',
            function progress(snapshot) {
                var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                uploaderAudio.value = progress;
            },
            function error(err) {

            },
            function complete() {
                var audioURL = task.snapshot.downloadURL;
                var updates = {};
                updates['/Bahasa/' + selectedBahasa + '/' + group + '/' + keyEdit + '/audioUrl'] = audioURL;
                firebase.database().ref().update(updates);
            }
        );
    });
});

//untuk update atau tambah data
function manageData(key, group, bahasaIndonesia, bahasaDaerah) {
  firebase.database().ref().child('Bahasa').child(selectedBahasa).child(group).child(key).set({
    bahasaDaerah: bahasaDaerah,
    bahasaIndonesia: bahasaIndonesia
  });
}

firebase.database().ref('Bahasa/').on('child_changed', function(data) {
    if(selectedBahasa!=null){
        setData(selectedBahasa);
    }
});
