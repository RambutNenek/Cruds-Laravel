
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
          <h2>{{ $post->judul }}</h2>
          <p>{{ $post->isi }}</p>

          <div class="form-group row">
            <div class="col-md-6">
              <a href="{{ route('post.index') }}" class="btn">Kembali</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection