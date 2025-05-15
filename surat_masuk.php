<?php include 'header.php'; ?>
<div class="body-wrapper">
    <!--  Header Start -->
    <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item d-block d-xl-none">
                    <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-bell"></i>
                        <div class="notification bg-primary rounded-circle"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
                        <div class="message-body">
                            <a href="javascript:void(0)" class="dropdown-item">
                                Item 1
                            </a>
                            <a href="javascript:void(0)" class="dropdown-item">
                                Item 2
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                    <li class="nav-item dropdown">
                        <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="./assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                            <div class="message-body">
                                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-user fs-6"></i>
                                    <p class="mb-0 fs-3">My Profile</p>
                                </a>
                                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-mail fs-6"></i>
                                    <p class="mb-0 fs-3">My Account</p>
                                </a>
                                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-list-check fs-6"></i>
                                    <p class="mb-0 fs-3">My Task</p>
                                </a>
                                <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--  Header End -->
    <div class="body-wrapper-inner">
        <div class="container-fluid">
            <!--  Row 1 -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Surat Table</h4>
                                    <p class="card-subtitle">
                                        Data Surat
                                    </p>
                                </div>
                                <div class="ms-auto mt-3 mt-md-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Cari Surat...">
                                        <span class="input-group-text"><i class="ti ti-search"></i></span>
                                    </div>
                                </div>
                                <div class="ms-auto mt-3 mt-md-0">
                                    <a href="tambah_surat.php" class="badge bg-primary"><i class="ti ti-plus"></i>Tambah Surat</a>
                                </div>
                            </div>
                            <div class="table-responsive mt-4">
                                <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="px-0 text-muted">
                                                No
                                            </th>
                                            <th scope="col" class="px-0 text-muted">No Surat</th>
                                            <th scope="col" class="px-0 text-muted">Nama File</th>
                                            <th scope="col" class="px-0 text-muted">Kategori</th>
                                            <th scope="col" class="px-0 text-muted">Keterangan</th>
                                            <th scope="col" class="px-0 text-muted">Waktu Upload</th>
                                            <th scope="col" class="px-0 text-muted">
                                                Opsi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="px-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3">
                                                        <span class="text-muted">1</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-0">123456789</td>
                                            <td class="px-0">Surat Undangan</td>
                                            <td class="px-0">Surat Masuk</td>
                                            <td class="px-0">Surat Undangan</td>
                                            <td class="px-0">2025-05-16</td>
                                            <td class="px-0">
                                                <a href="download.php" class="badge bg-warning"><i class="ti ti-download"></i>Download</a>
                                                <a href="preview.php" class="badge bg-warning"><i class="ti ti-eye"></i>Preview</a>
                                                <a href="delete.php" class="badge bg-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="ti ti-trash"></i>Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php'; ?>