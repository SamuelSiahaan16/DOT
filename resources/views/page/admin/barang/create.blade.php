<x-adminLayout title="Tambah Barang">
    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Tambah Barang</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Tambah Barang</li>
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
                    <h5 class="mb-0 text-white">Tambah Barang</h5>
                </div>
                <form id="form_simpan">
                    <div>
                        <div class="card-body">
                            <h5>Barang Info</h5>
                            <div class="row pt-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama Barang"
                                            value="{{ $barang->nama }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" rows="3"
                                            placeholder="Deskripsi Barang" value="{{ $barang->deskripsi }}"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Harga</label>
                                        <input type="number" name="harga" class="form-control"
                                            placeholder="Harga Barang" value="{{ $barang->harga }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Kategori</label>
                                        <select name="kategori_id" class="form-control form-select">
                                            <option value="">-- Pilih Kategori --</option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="card-body border-top">
                            @if($barang->id)
                            <button type="submit" id="button_simpan"
                                onclick="handle_upload('#button_simpan','#form_simpan','{{route('barang.update',$barang->id)}}','PATCH', '/barang');"
                                class="btn btn-success rounded-pill px-4">
                                Update
                            </button>
                            @else
                            <button type="submit" id="button_simpan"
                                onclick="handle_upload('#button_simpan','#form_simpan','{{route('barang.store')}}','POST', '/barang');"
                                class="btn btn-success rounded-pill px-4">
                                Simpan
                            </button>
                            @endif
                            <a type="button" href="{{ route('barang') }}"
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