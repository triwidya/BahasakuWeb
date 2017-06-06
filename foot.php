
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
          <label for="comment">Deskripsi:</label>
          <textarea class="form-control" rows="5" id="txtKontenSejarah"></textarea>
          <div class="row col-sm-12">
            <progress class="col-sm-12" value="0" max="100" id="uploader">0%</progress>
          </div>
          <input type="file" id="btnUpload" value="upload">
          <div class="mdl-dialog__actions">
            <button type="button" class="mdl-button">Close</button>
            <button type="button" id="btnInputSejarah" class="mdl-button">ADD</button>
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
      <div class="mdl-dialog__actions">
        <div style="padding-left: 150px">
          <button type="button" class="mdl-button mdl-button--raised mdl-button--colored">Close</button>
          <input type="submit" id="btnInputKeluarga" class="mdl-button mdl-button--raised mdl-button--colored" value="Update" data-dismiss="modal">
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
      <div class="mdl-dialog__actions">
        <div style="padding-left: 150px">
          <button type="button" class="mdl-button mdl-button--raised mdl-button--colored">Close</button>
          <input type="submit" id="btnInputAngka" class="mdl-button mdl-button--raised mdl-button--colored" value="Update" data-dismiss="modal">
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
      <div class="mdl-dialog__actions">
        <div style="padding-left: 150px">
          <button type="button" class="mdl-button mdl-button--raised mdl-button--colored">Close</button>
          <input type="submit" id="btnInputPercakapan" class="mdl-button mdl-button--raised mdl-button--colored" value="Update" data-dismiss="modal">
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

  <!-- Fungsi Progress dialog audio -->

  <dialog id="dialog7" class="mdl-dialog">
    <h3 class="mdl-dialog__title">Tambah Audio</h3>
    <div class="mdl-dialog__content">
      <audio class="row mdl-cell mdl-cell--12-col" id="player" controls>
        Your browser does not support the audio element.
      </audio>
      <div class="row col-sm-12">
        <progress class="mdl-cell mdl-cell--12-col" value="0" max="100" id="uploaderAudio">0%</progress>
      </div>
      <input type="file" id="btnUploadAudio" value="upload">
      <div class="mdl-dialog__actions">
        <div style="padding-left: 150px">
          <button type="button" class="mdl-button mdl-button--raised mdl-button--colored">Close</button>
        </div>
      </div>
    </div>
  </dialog>

</html>
