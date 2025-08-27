@extends('Layout.layouttwo')

@section('AdminContent')
<div class="container mt-4">
  <div class="form-container" style="background:#fff;border:1px solid #a41414;padding:20px;border-radius:10px;">
    <h1 class="text-center" style="font-size:23px;font-weight:bolder;">Edit Contact Setting</h1>

    @if($errors->any())
      <div class="alert alert-danger mt-3">
        <ul class="mb-0">
          @foreach($errors->all() as $e) <li>{{ $e }}</li> @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('Dashboard.admin.contact-settings.update', $setting->id) }}" method="POST">
      @csrf @method('PUT')

      <div class="row">
        <div class="col-md-6 mb-3">
          <label class="form-label">Note (optional)</label>
          <input type="text" name="note" class="form-control" value="{{ old('note', $setting->note) }}">
        </div>

        <div class="col-md-12 mb-3">
          <label class="form-label">Address</label>
          <textarea name="address" rows="3" class="form-control" required>{{ old('address', $setting->address) }}</textarea>
        </div>

        <div class="col-md-6 mb-3">
          <label class="form-label">Phones (one per line)</label>
          <textarea name="phones" rows="6" class="form-control">{{ old('phones', implode("\n", $setting->phones ?? [])) }}</textarea>
        </div>

        <div class="col-md-6 mb-3">
          <label class="form-label">Emails (one per line)</label>
          <textarea name="emails" rows="6" class="form-control">{{ old('emails', implode("\n", $setting->emails ?? [])) }}</textarea>
        </div>
      </div>

      <div class="d-flex justify-content-end mt-2">
        <a href="{{ route('Dashboard.admin.contact-settings.index') }}" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-danger ms-2">Update</button>
      </div>
    </form>
  </div>
</div>
@endsection
