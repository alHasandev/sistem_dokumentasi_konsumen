<form action="update" class="form" method="post" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" value="{{ $customer->id }}">
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" name="name" value="{{ $customer->name }}">
    </div>
    <div class="form-group">
        <label for="name">Email</label>
        <input type="text" name="email" value="{{ $customer->email }}">
    </div>
    <div class="form-group">
        <label for="name">Pekerjaan</label>
        <input type="text" name="occupation" value="{{ $customer->occupation }}">
    </div>
    <div class="form-group">
        <button type="submit" name="comment" class="btn btn primary">Edit Data Konsumen</button>
    </div>
</form>