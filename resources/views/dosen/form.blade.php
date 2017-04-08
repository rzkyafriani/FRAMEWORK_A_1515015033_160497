<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="nip">NIP</label>
	<div class="col-sm-10">
		{!! Form::text('nip',null,['class'=>'form-control','placeholder'=>"NIP"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat">Alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"Alamat"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
		</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" >Password</label>
	<div class="col-sm-10">
		{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
		</div>
</div>

