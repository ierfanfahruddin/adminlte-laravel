<div class="p2">
    <div class="form-group">
        <label class="form-label" for="nip">Nip</label>
        <input class="form-control" type="text" name="nip" id="nip">
    </div>
    <div class="form-group">
        <label class="form-label" for="nama_pegawai">Nama Pegawai</label>
        <input class="form-control" type="text" name="nama_pegawai" id="nama_pegawai">
    </div>
    <div class="form-group">
        <label class="form-label" for="kode_jabatan">Kode Jabatan</label>
        <select name="kode_jabatan" id="kode_jabatan">
            @foreach($kodejabatan as $row)
            <option value="{{$row->kode_jabatan}}">{{$row->nama_jabatan}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label class="form-label" for="kode_golongan">Kode Golongan</label>
        <select name="kode_golongan" id="kode_golongan">
            @foreach($kodegolongan as $row)
            <option value="{{$row->kode_golongan}}">{{$row->nama_golongan}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label class="form-label" for="status">Status</label>
        <select name="status" id="status">
            <option value="Menikah">Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
        </select>
    </div>
    <div class="form-group">
        <label class="form-label" for="jumlah_anak">Jumlah Anak</label>
        <select name="jumlah_anak" id="jumlah_anak">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
    </div>
    <button class="btn btn-primary" onclick="store()">Submit</button>
</div>