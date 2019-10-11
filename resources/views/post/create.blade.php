@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
          <h2>Post baru</h2>

          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <form action="{{ route('post.store') }}" method="POST">
            @csrf

            <div class="form-group row">
              <div class="col-md-12">
                <strong>Judul:</strong>
                <input type="text" name="judul" class="form-control" placeholder="Judul">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <strong>Isi:</strong>
                <textarea class="form-control" rows="5" name="isi" placeholder="Isi post"></textarea>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <a href="{{ route('post.index') }}" class="btn btn-secondary">Kembali</a>
              </div>
              <div class="col-md-6 text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection