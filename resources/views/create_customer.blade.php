<form action="" method="post" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" name="name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email">
    </div>
    <div class="form-group">
        <label for="occupation">Pekerjaan</label>
        <input type="text" name="occupation">
    </div>
    <div class="form-group">
        <button type="submit" name="comment" class="btn btn-primary">
            Simpan Data Konsumen
        </button>
    </div>
</form>