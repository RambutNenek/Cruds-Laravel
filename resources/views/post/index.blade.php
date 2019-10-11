@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">

      @if ($pesan = Session::get('pesan'))
      <div class="alert alert-success">
        <p>{{ $pesan }}</p>
      </div>
      @endif

      <div class="card">
        <div class="card-body">
          <div class="float-left">
            <h2>Daftar Konten</h2>
          </div>

          <div class="float-right">
            <a class="btn btn-primary" href="{{ route('post.create') }}"> Post baru</a>
          </div>

          <table class="table table-striped">

            <thead>
              <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Isi</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              @foreach($post as $k=>$data)
              <tr>
                <td>{{ $post->firstItem() + $k }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ str_limit($data->isi, $limit = 250, $end = '...') }}</td>
                <td>
                  <div class="btn-group" role="group">
                    <button id="aksiGroup" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Aksi
                    </button>
                    <div class="dropdown-menu" aria-labelledby="aksiGroup">
                      <a class="btn btn-info dropdown-item" href="{{ route('post.show',$data->id) }}">Detail</a>
                      <a class="btn btn-warning dropdown-item" href="{{ route('post.edit',$data->id) }}">Edit</a>
                      <form action="{{ route('post.destroy',$data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
					 <input type="hidden" name="judul" value="{{ $data->judul }}">
                        <button type="submit" class="btn btn-danger dropdown-item">Hapus</button>
                      </form>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>

          </table>

          {!! $post->links() !!}

        </div>
      </div>
    </div>
  </div>
  @endsection