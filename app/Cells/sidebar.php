<div>
    <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link <?= uri_string()=='' ? '' : 'collapsed' ?>" href="/">
          <i class="bi bi-house"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <?php if(session()->get('role') == 'admin') : ?>
        <li class="nav-item">
        <a class="nav-link <?= uri_string()=='produk' ? '' : 'collapsed' ?>" href="produk">
          <i class="bi bi-box"></i>
          <span>Produk</span>
        </a>
        </li><!-- End Dashboard Nav -->
      <?php endif; ?>

      
      <li class="nav-item">
        <a class="nav-link <?= uri_string()=='keranjang' ? '' : 'collapsed' ?>" href="keranjang">
          <i class="bi bi-cart"></i>
          <span>Keranjang</span>
        </a>
      </li><!-- End Dashboard Nav -->

      

    </ul>

  </aside><!-- End Sidebar-->
</div>
