<x-adminLayout title="Daftar Barang">
    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Data</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="{{ route('barang') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('template/assets//images/breadcrumb/ChatBc.png') }}" alt=""
                            class="img-fluid mb-n4" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="d-sm-flex align-items-center gap-6 pt-8 mb-7">
            <a href="{{ route('barang.create') }}" class="btn d-block btn-primary px-5 py-8 mb-6 mb-sm-0">Tambah
                Barang</a>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive mb-4">
            <table class="table border text-nowrap customize-table mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Nama Barang</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Deskripsi</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Harga</h6>
                        </th>
                        <th>
                            <h6 class="fs-4 fw-semibold mb-0">Kategori</h6>
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($collection as $item)
                    <tr>
                        <td>
                            <p class="mb-0 fw-normal">{{ $item->nama }}</p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal">{{ $item->deskripsi }}</p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal">{{ $item->harga }}</p>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal">{{ $item->product->nama }}</p>
                        </td>
                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="ti ti-dots fs-5"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                            href="{{ route('barang.edit', $item->id) }}"><i
                                                class="fs-4 ti ti-edit"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:;"
                                            onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','POST','{{route('barang.delete',$item->id)}}');"><i
                                                class="fs-4 ti ti-trash"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-adminLayout>