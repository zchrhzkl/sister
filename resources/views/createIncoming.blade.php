@extends('master') @section('page_title', 'Create Incoming Mail') @section('content')

<div class="uk-section uk-padding-small uk-text-left">
  <p class="uk-text-left uk-text-meta uk-text-light uk-margin-remove">DASHBOARD \ INCOMING MAIL</p>
  <h3 class="uk-h5 uk-text-muted uk-margin-remove uk-text-secondary">Create Incoming Mail</h3>
  <h3 class="uk-h4 uk-margin-remove uk-text-primary">Zachariah Ezekial | Kominter - Developer</h3>
  <hr>
</div>

<div class="uk-section uk-padding-small">
  <div class="uk-container">
    <div class="uk-card uk-card-body uk-text-left">
      <p class="uk-card-title uk-text-bold uk-text-large">Input Incoming Mail</p>
      <form action="createIncoming/store" method="POST" class="uk-form-stacked uk-grid-small form" uk-grid>
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
        <div class="uk-margin uk-width-1-1">
          <label class="uk-form-label" for="form-stacked-text">Date</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="date">
          </div>
        </div>

        <div class="uk-margin uk-width-1-1">
          <label class="uk-form-label uk-grid-item-match" for="form-stacked-select">Disposition to</label>
          <div class="uk-form-controls">
            <select class="uk-select" id="form-stacked-select">
              <option>KAROMISINTER</option>
              <option disabled>───────DAMKEMAN───────</option>
              <option>KABAG DAMKEMAN</option>
              <option>KAURMIN DAMKEMAN</option>
              <option>PAURMIN DAMKEMAN</option>
              <option>KASUBBAG RENGIAT</option>
              <option>STAFF RENGIAT</option>
              <option>KASUBBAG BEKLAT</option>
              <option>STAFF BEKLAT</option>
              <option>KASUBBAG MONEV</option>
              <option>STAFF MONEV</option>
              <option disabled>───────KEMBANGTAS──────</option>
              <option>KABAG KEMBANGTAS</option>
              <option>KAURMIN KEMBANGTAS</option>
              <option>PAURMIN KEMBANGTAS</option>
              <option>KASUBBAG BANGTAS</option>
              <option>STAFF BANGTAS</option>
              <option>KASUBBAG DIKLAT</option>
              <option>STAFF DIKLAT</option>
            </select>
          </div>
        </div>

        <div class="uk-margin uk-width-1-1">
          <label class="uk-form-label" for="form-stacked-text">Mail Number</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
          </div>
        </div>

        <div class="uk-margin uk-width-1-2">
          <label class="uk-form-label uk-grid-item-match" for="form-stacked-select">Mail Classification</label>
          <div class="uk-form-controls">
            <select class="uk-select" id="form-stacked-select">
              <option>Biasa</option>
              <option>Rahasia</option>
            </select>
          </div>
        </div>

        <div class="uk-margin uk-width-1-2">
          <label class="uk-form-label uk-grid-item-match" for="form-stacked-select">Mail Degree</label>
          <div class="uk-form-controls">
            <select class="uk-select" id="form-stacked-select">
              <option>Biasa</option>
              <option>Kilat</option>
            </select>
          </div>
        </div>

        <div class="uk-margin uk-width-1-1">
          <label class="uk-form-label" for="form-stacked-text">Mail Content</label>
          <div class="uk-form-controls">
            <textarea class="uk-textarea" rows="5"></textarea>
          </div>
        </div>

        <div class="uk-margin uk-width-1-1">
          <label class="uk-form-label" for="form-stacked-text">Mail Status</label>
          <div class="uk-form-controls">
            <textarea class="uk-textarea" rows="5"></textarea>
          </div>
        </div>

        <div class="uk-margin uk-width-1-1" uk-form-custom>
          <label class="uk-form-label" for="form-stacked-text">Attachment</label>
          <input type="file">
          <button class="uk-button uk-button-default uk-width-1-1" type="file"><i class="fas fa-upload"></i></button>
        </div>

        <div class="uk-margin uk-width-1-1">
          <label for="mailAttch" for="form-stacked-text">Mail Attachment</label>
          <input type="file" id="mailAttch" name="myfile" multiple>
          <div id="selectedFiles"></div>

        </div>

        <button class="uk-button uk-button-default uk-button-danger uk-width-1-2" type="reset">Reset</button>
        <button class="uk-button uk-button-default uk-button-primary uk-width-1-2" type="submit">Submit</button>

      </form>
    </div>
  </div>
</div>
@endsection
