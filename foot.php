
      </main>
    </div>
  </body>
  <footer>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script defer src="js/index.js"></script>
  </footer>
  </div>
  <dialog id="dialog" class="mdl-dialog">
    <h3 class="mdl-dialog__title">Tambah Deskripsi Bahasa</h3>
    <div class="mdl-dialog__content">
      <p>
        <div class="row col-sm-12">
            <input type="name" class="form-control" id="txtJudulSejarah" placeholder="Judul Deskripsi">
              <div class="mdl-textfield mdl-js-textfield">
                <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" ></textarea>
                <label class="mdl-textfield__label" for="sample5">Deskripsi Bahasa</label>
              </div>
              <div class="pic-section">
                  <button type="button" id="upload-button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                    <i class="material-icons">&#xE439;</i>
                  </button>
                 <div style="margin:auto;padding:1em;">
                  <img src="" id="profile-pic" />
                 </div>
              <div>
            <input type="submit" id="btnInput" class="btn btn-primary" value="Update" data-dismiss="modal">
              </div>
            </div>
          <div class="mdl-dialog__actions">
            <button type="button" class="mdl-button">Close</button>
        </div>
      </p>
    </div>
  </dialog>

  <!-- Tambah Kamus Keluarga  -->
  <div>
  <dialog id="dialog-keluarga" class="mdl-dialog">
    <h3 class="mdl-dialog__title">Tambah Deskripsi Bahasa</h3>
    <div class="mdl-dialog__content">
      <p>
        <div class="row col-sm-12">
            <input type="name" class="form-control" id="txtJudulSejarah" placeholder="Judul Deskripsi">
              <div class="mdl-textfield mdl-js-textfield">
                <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" ></textarea>
                <label class="mdl-textfield__label" for="sample5">Deskripsi Bahasa</label>
              </div>
              <div class="pic-section">
                  <button type="button" id="upload-button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                    Upload <i class="material-icons">&#xE87C;</i>
                  </button>
                 <div style="margin:auto;padding:4em;">
                  <img src="" id="profile-pic" />
                 </div>
              <div>
            <input type="submit" id="btnInput" class="btn btn-primary" value="Update" data-dismiss="modal">
              </div>
            </div>
          <div class="mdl-dialog__actions">
            <button type="button" class="mdl-button">Close</button>
        </div>
      </p>
    </div>
  </dialog>
</div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://api.filestackapi.com/filestack.js"></script>
    <script>
      filepicker.setKey("AynkfxksOQNSa83fviAQKz");
      let handler = '';
      $('#upload-button').on('click', function() {
        filepicker.pick (
          {
            mimetype: 'image/*',
            container: 'modal',
            services: ['COMPUTER'],
            openTo: 'COMPUTER'
          },
          function (Blob) {
            console.log(JSON.stringify(Blob));
            handler = Blob.url.substring(Blob.url.lastIndexOf('/') + 1);
            $('#profile-pic').attr('src', `https://process.filestackapi.com/crop_faces=mode:fill/rounded_corners=radius:${$('.mdl-js-slider').val()}/${handler}`);
          },
          function (FPError) {
            console.log(FPError.toString());
          }
        );
      });
      $('.mdl-js-slider').on('change', function() {
        if(handler !== '') {
          $('#profile-pic').attr('src', `https://process.filestackapi.com/crop_faces=mode:fill/rounded_corners=radius:${$(this).val()}/${handler}`);
        }
      })
      const postToServer = profile => {
        return fetch('/profiles', {
          headers: new Headers({
            'Content-Type': 'application/json'
          }),
          method: 'POST',
          body: JSON.stringify(profile)
        })
        .then(response => response.json());
      };
      const save = () => {
        const profile = {
          img: $('#profile-pic').attr('src'),
          name: $('#name').val(),
          description: $('#description').val()
        };
        console.log(profile);
        postToServer(profile);
      };
    </script>

</html>
