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
            const nav_link = document.createElement('a');
            nav_link.id = snapChild.val();
            nav_link.className = 'mdl-navigation__link';
            const text = document.createTextNode(snapChild.val());
            nav_link.appendChild(text);
            panelChild.appendChild(nav_link);
            panel.appendChild(panelChild);
            // console.log(snapChild.val());
        });
        menu.appendChild(panel);
    });

    dbRefObject.on('child_changed', snap =>{
        console.log(snap.key);
    });

    dbRefObject.once("value", function(snap) {
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
    });
}());
