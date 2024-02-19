<x-adminLayout title="Tambah Barang">
    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Tambah Barang</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="{{ route('kategori') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Tambah Kategori Barang</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('template/assets/images/breadcrumb/ChatBc.png') }}" alt=""
                            class="img-fluid mb-n4" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bg-primary">
                    <h5 class="mb-0 text-white">Tambah Kategori Barang</h5>
                </div>
                <form id="form_simpan">
                    <div>
                        <div class="card-body">
                            <h5>Kategori BarangInfo</h5>
                            <div class="row pt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Kategori</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama Kategori"
                                            value="{{ $kategoriBarang->nama }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            @if($kategoriBarang->id)
                            <button type="submit" id="button_simpan"
                                onclick="handle_upload('#button_simpan','#form_simpan','{{route('kategori.update',$kategoriBarang->id)}}','PATCH', '/kategori');"
                                class="btn btn-success rounded-pill px-4">
                                Update
                            </button>
                            @else
                            <button type="submit" id="button_simpan"
                                onclick="handle_upload('#button_simpan','#form_simpan','{{route('kategori.store')}}','POST', '/kategori');"
                                class="btn btn-success rounded-pill px-4">
                                Simpan
                            </button>
                            @endif
                            <a type="button" href="{{ route('kategori') }}"
                                class="btn bg-danger-subtle text-danger rounded-pill px-4 ms-6">
                                Batal
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-adminLayout>