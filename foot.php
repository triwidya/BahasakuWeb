  <footer>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script defer src="js/index.js"></script>
  </footer>
  </div>

  <!-- Fungsi Progress dialog sejarah -->

  <dialog id="dialog1" class="mdl-dialog">
    <h3 class="mdl-dialog__title">Tambah Deskripsi Bahasa</h3>
    <div class="mdl-dialog__content">
        <div class="row col-sm-12">
          <input type="name" class="form-control" id="txtJudulSejarah" placeholder="Judul Deskripsi">
          <div class="mdl-textfield mdl-js-textfield">
            <textarea class="mdl-textfield__input" type="text" rows= "3" id="txtKontenSejarah" ></textarea>
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
              <input type="submit" id="btnInputSejarah" class="btn btn-primary" value="Update" data-dismiss="modal">
            </div>
          </div>
          <div class="mdl-dialog__actions">
            <button type="button" class="mdl-button">Close</button>
          </div>
        </div>
    </div>
  </dialog>


  <!-- Fungsi Progress dialog keluarga -->
  <dialog id="dialog2" class="mdl-dialog">
    <h3 class="mdl-dialog__title">Tambah Kamus Keluarga</h3>
    <div class="mdl-dialog__content">
      <input type="name" class="form-control" id="txtBahasaKeluarga" placeholder="Bahasa Indoesia">
      <div style="padding:10px"></div>
      <input type="name" class="form-control" id="txtDaerahKeluarga" placeholder="Bahasa Daerah">
      <div class="pic-section">
        <div style="padding-top: 10px" >
          <input type="submit" id="btnInputKeluarga" class="mdl-button mdl-button--raised mdl-button--colored" value="Update" data-dismiss="modal">
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

  <dialog id="dialog3" class="mdl-dialog">
    <h3 class="mdl-dialog__title">Tambah Kamus Angka</h3>
    <div class="mdl-dialog__content">
      <input type="name" class="form-control" id="txtBahasaAngka" placeholder="Bahasa Indoesia">
      <div style="padding:10px"></div>
      <input type="name" class="form-control" id="txtDaerahAngka" placeholder="Bahasa Daerah">
      <div class="pic-section">
        <div style="padding-top: 10px" >
          <input type="submit" id="btnInputAngka" class="mdl-button mdl-button--raised mdl-button--colored" value="Update" data-dismiss="modal">
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

  <dialog id="dialog4" class="mdl-dialog">
    <h3 class="mdl-dialog__title">Tambah Kamus Percakapan</h3>
    <div class="mdl-dialog__content">
      <input type="name" class="form-control" id="txtBahasaPercakapan" placeholder="Bahasa Indoesia">
      <div style="padding:10px"></div>
      <input type="name" class="form-control" id="txtDaerahPercakapan" placeholder="Bahasa Daerah">
      <div class="pic-section">
        <div style="padding-top: 10px" >
          <input type="submit" id="btnInputPercakapan" class="mdl-button mdl-button--raised mdl-button--colored" value="Update" data-dismiss="modal">
        </div>
      </div>
      <div class="mdl-dialog__actions">
        <div style="padding-left: 150px">
          <button type="button" class="mdl-button mdl-button--raised mdl-button--colored">Close</button>
        </div>
      </div>
    </div>
  </dialog>

</html>
