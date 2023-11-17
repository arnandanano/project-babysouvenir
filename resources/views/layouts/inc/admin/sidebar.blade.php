<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-pencil-box menu-icon"></i>
          <span class="menu-title">Daftar Nota</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-format-list-checks menu-icon"></i>
          <span class="menu-title">Progres Produksi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-book-open-variant menu-icon"></i>
          <span class="menu-title">Laporan Penjualan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-note-text menu-icon"></i>
          <span class="menu-title">Katalog Produk</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/product/create')}}">Tambah Produk</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/product')}}">Lihat Produk</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#kategori" aria-expanded="false" aria-controls="kategori">
          <i class="mdi mdi-view-list menu-icon"></i>
          <span class="menu-title">Kategori</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="kategori">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/kategori/tambah')}}">Tambah Kategori</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('admin/kategori')}}">Lihat Kategori</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-store menu-icon"></i>
          <span class="menu-title">Stok Bahan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-account-multiple menu-icon"></i>
          <span class="menu-title">User</span>
        </a>
      </li>
    </ul>
  </nav>