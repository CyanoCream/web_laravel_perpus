<!-- Modal edit -->
<div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('update.pivot',['book_schools' => $row->id ])}}" method="post">
          @csrf
          <label for="book">Pilih Buku</label>
          <select name="book" class="form-select mb-2" aria-label="Default select example">
                @foreach($book as $b)
                <option value="{{$b->id}}">{{$b->name}}</option>
                @endforeach
            </select>
            <label for="book">Pilih Sekolah</label>
            <select name="school" class="form-select mt-2" aria-label="Default select example">
               @foreach($schools as $s)
                <option value="{{$s->id}}">{{$s->name}}</option>
                @endforeach
            </select>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
      </div>
    </div>
  </div>