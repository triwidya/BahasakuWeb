<?php include 'head.php'; ?>

<!-- Square card -->
  <style>
      .sejarah-card-square.mdl-card {
        width: 450px;
        height: 520px;
      }
      .sejarah-card-square > .mdl-card__title {
        color: #fff;
        background-repeat: no-repeat !important;
        background-position: center !important;
        background-size: cover !important;
      }

</style>
    <div style="padding-left: 30px">
      <div class="mdl-grid">
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

<!-- Kamus keluarga -->
<!-- Wide card with share menu button -->
  <style>
      .kamus-card-wide.mdl-card {
        width: 700px;
      }
      .kamus-card-wide > .mdl-card__title {
        background: bottom right 15% no-repeat #46B6AC
        height: 20px;
      }
      .kamus-card-wide >
       .mdl-card__menu {
        color: #46B6AC;
  }
      </style>
      <div style="padding-left : 100px">

      <div class="kamus-card-wide mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title">
          <h2 class="mdl-card__title-text">Keluarga</h2>
        </div>
      </style>

  <style>
  .mdl-data-table {
  width: 700px;
}

  }
  </style>
  <div style="padding : 16px" >
  </div>
    <table class="mdl-data-table mdl-js-data-table">
      <thead>
        <tr>
          <td class="mdl-data-table__cell--non-numeric">Bahasa Indonesia</td>
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

<style>
    .kamusAngka-card-wide.mdl-card {
      width: 700px;
    }
    .kamusAngka-card-wide > .mdl-card__title {
      background: bottom right 15% no-repeat #46B6AC
      height: 20px;
    }
    .kamusAngka-card-wide > .mdl-card__menu {
      color: #46B6AC;
    }
</style>
<div style="padding : 20px 0">

<div class="kamusAngka-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Angka</h2>
  </div>
</style>

<style>
    .mdl-data-table{
      width: 700px;

}
</style>
      <div style="height : 30px" >
      </div>
      <table class="mdl-data-table mdl-js-data-table">
        <thead>
          <tr>
            <th class="mdl-data-table__cell--non-numeric">Bahasa Indonesia</th>
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

      <style>
      .kamusPercakapan-card-wide.mdl-card {
        width: 700px;
      }
      .kamusPercakapan-card-wide > .mdl-card__title {
        background: bottom right 15% no-repeat #46B6AC
        height: 20px;
      }
      .kamusPercakapan-card-wide > .mdl-card__menu {
        color: #46B6AC;
      }
      </style>

      <style>
      .mdl-data-table{
        width: 700px;

      }
      </style>

      <div style="padding : 20px 0">

      <div class="kamusPercakapan-card-wide mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title">
          <h2 class="mdl-card__title-text">Percakapan</h2>
        </div>
      </style>

      <div style="height : 30px" >
      </div>
      <table class="mdl-data-table mdl-js-data-table">
        <thead>
          <tr>
            <th class="mdl-data-table__cell--non-numeric">Bahasa Indonesia</th>
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
