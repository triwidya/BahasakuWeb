<?php include 'head.php'; ?>

<div class="mdl-grid">
  <div class="">
    <div class="sejarah-card-square mdl-card mdl-shadow--2dp">
      <div id="latar" class="mdl-card__title mdl-card--expand">
        <h2 id="judul" class="mdl-card__title-text">Tidak Ada Judul Untuk Di tampilkan</h2>
      </div>
      <div id="keterangan" class="mdl-card__supporting-text">
        Tidak Ada Sejarah Untuk Di Tampilkan
      </div>
      <div class="mdl-card__menu">
        <button type="button" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect dialog-button">
          <i class="material-icons">add</i>
        </button>
      </div>
    </div>
  </div>
  <div class="">
  <div style="padding : 0 0 20px 0">
    <div class="kamus-card-wide mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Keluarga</h2>
      </div>

      <table class="mdl-data-table mdl-js-data-table mdl-cell mdl-cell--12-col">
        <thead>
          <tr>
            <td>Bahasa Indonesia</td>
            <td>Bahasa Daerah</td>
            <td>Menu</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
        </thead>
        <tbody id="table_keluarga">
        </tbody>
      </table>
      <div class="mdl-card__menu">
        <button type="button" id="btnSejarah" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect dialog-button-keluarga">
          <i class="material-icons">add</i>
        </button>
      </div>
    </div>
  </div>

  <div style="padding : 20px 0">
    <div class="kamusAngka-card-wide mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Angka</h2>
      </div>

      <table class="mdl-data-table mdl-js-data-table mdl-cell mdl-cell--12-col">
        <thead>
          <tr>
            <th>Bahasa Indonesia</th>
            <th>Bahasa Daerah</th>
            <th>Menu</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody id="table_angka">
        </tbody>
      </table>
      <div class="mdl-card__menu">
        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect dialog-button-angka">
          <i class="material-icons">add</i>
        </button>
      </div>
    </div>
  </div>

  <div style="padding : 20px 0">
    <div  style="padding : 20px 0" class="kamusPercakapan-card-wide mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Percakapan</h2>
      </div>
      <table class="mdl-data-table mdl-js-data-table mdl-cell mdl-cell--12-col">
        <thead>
          <tr>
            <th>Bahasa Indonesia</th>
            <th>Bahasa Daerah</th>
            <th>Menu</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody id="table_percakapan">
        </tbody>
      </table>
      <div class="mdl-card__menu">
        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect dialog-button-percakapan">
          <i class="material-icons">add</i>
        </button>
      </div>
    </div>
  </div>
</div>
<?php include 'foot.php'; ?>
