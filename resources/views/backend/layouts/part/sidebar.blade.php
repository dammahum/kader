<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
  <nav class="navbar navbar-expand-sm navbar-default">
    <div id="main-menu" class="main-menu collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active">
            <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
        </li>
        <li class="menu-title">Master</li><!-- /.menu-title -->
        <li class="menu-item-has-children dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="menu-icon fa fa-sign-in"></i>Master</a>
          <ul class="sub-menu children dropdown-menu">

              <li>
                <i class="fa fa-users"></i>
                <a href="{{ route('kader.index') }}">Data Kader</a>
              </li>

              <li>
                <i class="fa fa-suitcase"></i>
                <a href="{{ route('statuspekerjaan.index') }}">Status Pekerjaan</a>
              </li>

              <li>
                <i class="fa fa-heart"></i>
                <a href="{{ route('statuspernikahan.index') }}">Status Pernikahan</a>
              </li>

              <li>
                <i class="fa fa-book"></i>
                <a href="{{ route('daftarkeahlian.index') }}">Daftar Keahlian</a>
              </li>

              <li>
                <i class="fa fa-thumbs-up"></i>
                <a href="{{ route('amaljamai.index') }}">Amal Jamai</a>
              </li>

              <li>
                <i class="fa fa-level-up"></i>
                <a href="{{ route('jenjangtarbiyah.index') }}">Jenjang Tarbiyah</a>
              </li>

              <li>
                <i class="fa fa-briefcase"></i>
                <a href="{{ route('jenisusaha.index') }}">Jenis Usaha</a>
              </li>

              <li>
                <i class="fa fa-book"></i>
                <a href="{{ route('daftarkitab.index') }}">Daftar Kitab</a>
              </li>

          </ul>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="menu-icon fa fa-table"></i>Tables</a>
          <ul class="sub-menu children dropdown-menu">
              <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
              <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
          </ul>
        </li>
        <li class="menu-item-has-children dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-th"></i>Forms</a>
          <ul class="sub-menu children dropdown-menu">
            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>
</aside>
<!-- /#left-panel -->	