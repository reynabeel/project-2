<div>
    <div class="container">
     <div class="row">
        <div class="col-3">
        <div class="card">
  <div class="card-header">
    Status
  </div>
  <div class="card-body">
  Komentar<br/>
         <input type="text" class="form-control" wire:model='txtkomentar'/>
         <br/>
         <input type="submit" class="btn btn-primary" value="KIRIM" wire:click='simpan'/>
  </div>
</div>
        </div>
        <div class="col-9">
            <div class="card">
        <div class="card-header">
    Kiriman saya
  </div>
  <div class="card-body">
    Saya :<br />
    <p>
        <i>
            {{ $txtkomentar }}
        </i>
    </p>
  </div>
       @foreach ($isi_komentar as $item)
        saya :<br/>
        <p>
            <i>
                {{ $item->isi_komentar }}
            </i>
        </p>
        <hr/>
        @endforeach

        </div>
     </div>
     </div>


    </div>
</div>
</div>
