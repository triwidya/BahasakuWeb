
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
        <select class="mdl-selectfield__select" id="listProvinsiAdd" name="Provisi" style="padding:5px">
            <option value="">Pilih Provinsi</option>
            <option value="Provinsi Aceh">Provinsi Aceh</option>
            <option value="Provinsi Bali">Provinsi Bali</option>
            <option value="Provinsi Bangka Belitung">Provinsi Bangka Belitung</option>
            <option value="Provinsi Banten">Provinsi Banten</option>
            <option value="Provinsi Bengkulu">Provinsi Bengkulu</option>
            <option value="Provinsi DKI Jakarta">Provinsi DKI Jakarta</option>
            <option value="Provinsi Gorontalo">Provinsi Gorontalo</option>
            <option value="Provinsi Jambi">Provinsi Jambi</option>
            <option value="Provinsi Jawa Barat">Provinsi Jawa Barat</option>
            <option value="Provinsi Jawa Tengah">Provinsi Jawa Tengah</option>
            <option value="Provinsi Jawa Timur">Provinsi Jawa Timur</option>
            <option value="Provinsi Kalimantan Barat">Provinsi Kalimantan Barat</option>
            <option value="Provinsi Kalimantan Selatan">Provinsi Kalimantan Selatan</option>
            <option value="Provinsi Kalimantan Tengah">Provinsi Kalimantan Tengah</option>
            <option value="Provinsi Kalimantan Timur">Provinsi Kalimantan Timur</option>
            <option value="Provinsi Kalimantan Utara">Provinsi Kalimantan Utara</option>
            <option value="Provinsi Kepulauan Riau">Provinsi Kepulauan Riau</option>
            <option value="Provinsi Lampung">Provinsi Lampung</option>
            <option value="Provinsi Maluku">Provinsi Maluku</option>
            <option value="Provinsi Papua">Provinsi Papua</option>
            <option value="Provinsi Sulawesi Selatan">Provinsi Sulawesi Selatan</option>
            <option value="Provinsi Sulawesi Tenggara">Provinsi Sulawesi Tenggara</option>
            <option value="Provinsi Sumatera Barat">Provinsi Sumatera Barat</option>
            <option value="Provinsi Sumatera Utara">Provinsi Sumatera Utara</option>
            <option value="Provinsi Yogyakarta">Provinsi Yogyakarta</option>
        </select>
      </div>
    </form>
      <div style="padding:10px"></div>
      <input type="name" class="form-control" id="txtBahasa" placeholder="Bahasa Daerah">
      <div class="mdl-dialog__actions">
        <div style="padding-left: 150px">
          <button type="button" class="mdl-button mdl-button--raised mdl-button--colored">Close</button>
          <input type="submit" id="btnInputBahasa" class="mdl-button mdl-button--raised mdl-button--colored" value="Simpan" data-dismiss="modal">
        </div>
      </div>
    </div>
  </dialog>

  <!-- Fungsi Progress dialog edit bahasa -->
  <dialog id="dialog6" class="mdl-dialog" style="height:336px">
    <h3 class="mdl-dialog__title">Delete Bahasa</h3>
    <div class="mdl-dialog__content">
      <form>
        <div style="padding:px"></div>
      <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label">
        <select class="mdl-selectfield__select" id="listBahasaEdit" name="Provisi" style="padding:5px">
          <option value="">Pilih Provinsi</option>
        </select>
        <select class="mdl-selectfield__select" id="listBahasaDetailEdit" name="Provisi" style="padding:5px">
          <option value="">Pilih Provinsi</option>
        </select>
      </div>
    </form>
      <div class="mdl-dialog__actions">
        <div style="padding-left: 150px">
          <button type="button" class="mdl-button mdl-button--raised mdl-button--colored">Close</button>
          <input type="submit" id="btnDeleteData" class="mdl-button mdl-button--raised mdl-button--colored" value="Delete" data-dismiss="modal">
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
