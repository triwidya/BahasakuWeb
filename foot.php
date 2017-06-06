
 </footer>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script defer src="js/index.js"></script>

  <style>
  .footer {
    width: 1000px;
  }

  .mdl-mini-footer {
    padding-left: 230px;
  }
  </style>

  <!-- Fungsi Progress dialog sejarah -->
<body>
  <dialog id="dialog1" class="mdl-dialog">
    <h3 class="mdl-dialog__title">Tambah Deskripsi Bahasa</h3>
    <div class="mdl-dialog__content">
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
        </div>
    </div>
  </dialog>


  <!-- Fungsi Progress dialog keluarga -->
  <dialog id="dialog2" class="mdl-dialog" style="height:390px">
    <h3 class="mdl-dialog__title">Tambah Kamus</h3>
    <div class="mdl-dialog__content">
      <td><input type="name" class="form-control" id="txtBahasaKeluarga" placeholder="Bahasa Indoesia">
      <div style="padding:10px"></div>
      <input type="name" class="form-control" id="txtDaerahKeluarga" placeholder="Bahasa Daerah">
      <div class="pic-section">
        <div style="padding-top: 10px" >
          <input type="submit" id="btnInput" class="mdl-button mdl-button--raised mdl-button--colored" value="Simpan" data-dismiss="modal">
        </div>
      </div>
      <div class="mdl-dialog__actions">
        <div style="padding-left: 150px">
          <button type="button" class="mdl-button mdl-button--raised mdl-button--colored">Close</button>
        </div>
      </div>
    </div>
  </dialog>

  <!-- Fungsi Progress dialog Angka -->

  <dialog id="dialog3" class="mdl-dialog" style="height:390px">
    <h3 class="mdl-dialog__title">Tambah Kamus</h3>
    <div class="mdl-dialog__content">
      <input type="name" class="form-control" id="txtBahasaKeluarga" placeholder="Bahasa Indoesia">
      <div style="padding:10px"></div>
      <input type="name" class="form-control" id="txtDaerahKeluarga" placeholder="Bahasa Daerah">
      <div class="pic-section">
        <div style="padding-top: 10px" >
          <input type="submit" id="btnInput" class="mdl-button mdl-button--raised mdl-button--colored" value="SimpanSS" data-dismiss="modal">
        </div>
      </div>
      <div class="mdl-dialog__actions">
        <div style="padding-left: 150px">
          <button type="button" class="mdl-button mdl-button--raised mdl-button--colored">Close</button>
        </div>
      </div>
    </div>
  </dialog>

  <!-- Fungsi Progress dialog percakapan -->

  <dialog id="dialog4" class="mdl-dialog" style="height:390px">
    <h3 class="mdl-dialog__title">Tambah Kamus</h3>
    <div class="mdl-dialog__content">
      <input type="name" class="form-control" id="txtBahasaKeluarga" placeholder="Bahasa Indoesia">
      <div style="padding:10px"></div>
      <input type="name" class="form-control" id="txtDaerahKeluarga" placeholder="Bahasa Daerah">
      <div class="pic-section">
        <div style="padding-top: 10px" >
          <input type="submit" id="btnInput" class="mdl-button mdl-button--raised mdl-button--colored" value="Simpan" data-dismiss="modal">
        </div>
      </div>
      <div class="mdl-dialog__actions">
        <div style="padding-left: 150px">
          <button type="button" class="mdl-button mdl-button--raised mdl-button--colored">Close</button>
        </div>
      </div>
    </div>
  </dialog>

  <!-- Fungsi Progress dialog tambah bahasa -->
  <dialog id="dialog5" class="mdl-dialog" style="height:336px">
    <h3 class="mdl-dialog__title">Tambah Bahasa</h3>
    <div class="mdl-dialog__content">
      <form>
        <div style="padding:px"></div>
      <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label">
        <select class="mdl-selectfield__select" id="provinsi" name="Provisi" style="padding:5px">
          <option value=""></option>
          <option value="option1">Sumatera utara</option>
          <option value="option2">option 2</option>
          <option value="option3">option 3</option>
          <option value="option4">option 4</option>
          <option value="option5">option 5</option>
        </select>
        <label class="mdl-selectfield__label" for="professsion2">Pilih Provinsi</label>
      </div>
    </form>
      <div style="padding:10px"></div>
      <input type="name" class="form-control" id="txtDaerahKeluarga" placeholder="Bahasa Daerah">
      <div class="pic-section">
        <div style="padding-top: 10px" >
          <input type="submit" id="btnInput" class="mdl-button mdl-button--raised mdl-button--colored" value="Simpan" data-dismiss="modal">
        </div>
      </div>
      <div class="mdl-dialog__actions">
        <div style="padding-left: 150px">
          <button type="button" class="mdl-button mdl-button--raised mdl-button--colored">Close</button>
        </div>
      </div>
    </div>
  </dialog>

  <!-- Fungsi Progress dialog edit bahasa -->
  <dialog id="dialog6" class="mdl-dialog" style="height:336px">
    <h3 class="mdl-dialog__title">Edit Bahasa</h3>
    <div class="mdl-dialog__content">
      <form>
        <div style="padding:px"></div>
      <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label">
        <select class="mdl-selectfield__select" id="provinsi" name="Provisi" style="padding:5px">
          <option value=""></option>
          <option value="option1">Sumatera utara</option>
          <option value="option2">option 2</option>
          <option value="option3">option 3</option>
          <option value="option4">option 4</option>
          <option value="option5">option 5</option>
        </select>
        <label class="mdl-selectfield__label" for="professsion2">Pilih Provinsi</label>
      </div>
    </form>
      <div style="padding:10px"></div>
      <input type="name" class="form-control" id="txtDaerahKeluarga" placeholder="Bahasa Daerah">
      <div class="pic-section">
        <div style="padding-top: 10px" >
          <input type="submit" id="btnInput" class="mdl-button mdl-button--raised mdl-button--colored" value="Simpan" data-dismiss="modal">
        </div>
      </div>
      <div class="mdl-dialog__actions">
        <div style="padding-left: 150px">
          <button type="button" class="mdl-button mdl-button--raised mdl-button--colored">Close</button>
        </div>
      </div>
    </div>
  </dialog>
</body>


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
