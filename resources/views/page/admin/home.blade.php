<x-adminLayout>
    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Data</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="../assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4" />
                    </div>
                </div>
            </div>
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
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/profile/user-1.jpg" class="rounded-circle" width="40"
                                    height="40" />
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">Olivia Rhye</h6>
                                    <span class="fw-normal">@rhye</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span
                                class="badge bg-success-subtle text-success fw-semibold fs-2 gap-1 d-inline-flex align-items-center"><i
                                    class="ti ti-circle fs-3"></i>active</span>
                        </td>
                        <td>
                            <p class="mb-0 fw-normal">olivia@ui.com</p>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge text-bg-primary rounded-3 fw-semibold fs-2">Design</span>
                                <span class="badge text-bg-secondary rounded-3 fw-semibold fs-2">Product</span>
                            </div>
                        </td>
                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="ti ti-dots fs-5"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                                class="fs-4 ti ti-plus"></i>Add</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                                class="fs-4 ti ti-edit"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                                class="fs-4 ti ti-trash"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-adminLayout>