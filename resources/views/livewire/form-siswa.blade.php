<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{$event ? "Update Data" : "Save Data"}}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <!-- form start -->
                        <form id="quickForm" wire:submit.prevent="submit">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" wire:model="nama" class="form-control" id="nama"
                                        placeholder="Masukan Nama">

                                    <br>
                                    @error('nama')
                                    <span class="text-xs text-red-700" id="passwordHelp">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select wire:model="kelas" class="form-control select2bs4"
                                                style="width: 100%;">
                                                <option>Pilih Kelas</option>
                                                <option value="X">X</option>
                                                <option value="XI">XI</option>
                                                <option value="XII">XII</option>
                                            </select>
                                            <br>

                                            @error('kelas')
                                            <span class="text-xs text-red-700" id="passwordHelp">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <select wire:model="jurusan" class="form-control select2bs4"
                                                style="width: 100%;">
                                                <option>Pilih Jurusan</option>
                                                <option value="TSM">TSM</option>
                                                <option value="RPL">RPL</option>
                                                <option value="TKJ">TKJ</option>
                                            </select>
                                            <br>

                                            @error('jurusan')
                                            <span class="text-xs text-red-700" id="passwordHelp">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card" style="margin-top: 20px;">
                                        <div class="card-header">
                                            <h3 class="card-title"><b>Status Tanggungan</b></h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group clearfix row">
                                                <div class="col-md-6">
                                                    <div class="icheck-primary d-inline">
                                                        <input wire:model="seragam" type="checkbox" id="seragam">
                                                        <label for="seragam">
                                                            Lunas Seragam
                                                        </label>

                                                        <br>
                                                        @error('seragam')
                                                        <span class="text-xs text-red-700" id="passwordHelp">
                                                            {{ $message }}
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="icheck-primary d-inline">
                                                        <input wire:model="magang" type="checkbox" id="magang">
                                                        <label for="magang">
                                                            Lunas Magang
                                                        </label>

                                                        <br>
                                                        @error('magang')
                                                        <span class="text-xs text-red-700" id="passwordHelp">
                                                            {{ $message }}
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group clearfix row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" wire:model="total_seragam" class="form-control"
                                                        placeholder="Masukan Total Bayar Seragam">

                                                    <br>
                                                    @error('total_seragam')
                                                    <span class="text-xs text-red-700" id="passwordHelp">
                                                        {{ $message }}
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" wire:model="total_magang" class="form-control"
                                                        placeholder="Masukan Total Bayar Magang">

                                                    <br>
                                                    @error('total_magang')
                                                    <span class="text-xs text-red-700" id="passwordHelp">
                                                        {{ $message }}
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
