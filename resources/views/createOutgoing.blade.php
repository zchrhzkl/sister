@extends('master') @section('page_title', 'Create Incoming Mail') @section('content')

<div class="uk-section">
  <h3>Welcome back, Username</h3>
</div>

<div class="uk-section">
  <div class="uk-container">
    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-text-center" uk-grid>
      <div>
        <div class="uk-card uk-card-secondary uk-card-body">
          <p class="uk-card-title uk-text-bold uk-text-large">1000</p>
          <p>Unprocessed Incoming Mail</p>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-primary uk-card-body">
          <p class="uk-card-title uk-text-bold">1000</p>
          <p>Unprocessed Outgoing Mail</p>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-secondary uk-card-body">
          <p class="uk-card-title uk-text-bold">1000</p>
          <p>Total Mail</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
