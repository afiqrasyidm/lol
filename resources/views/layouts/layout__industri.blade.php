@extends('layouts.layout')

@section('contentSideBar')
<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATION</li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-dashboard"></i> <span>Tugas Akhir</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('mahasiswa/pengajuan-topik') }}"><i class="fa fa-angle-right"></i>Pengajuan Topik</a></li>
      <li><a href="{{ route('mahasiswa/pengajuan-permohonan-ta') }}"><i class="fa fa-angle-right"></i>Pengajuan Permohonan</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-dashboard"></i> <span>Bimbingan</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ route('mahasiswa/pengajuan-pembimbing-ta') }}"><i class="fa fa-angle-right"></i>Pengajuan Pembimbingan TA</a></li>
      <li><a href=""><i class="fa fa-angle-right"></i>Jadwal Bimbingan</a></li>
      <li><a href=""><i class="fa fa-angle-right"></i>Log Bimbingan</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-dashboard"></i> <span>Sidang</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href=""><i class="fa fa-angle-right"></i>Pengajuan Permohonan Sidang</a></li>
      <li><a href=""><i class="fa fa-angle-right"></i>Jadwal Sidang</a></li>
      <li><a href=""><i class="fa fa-angle-right"></i>Hasil Sidang</a></li>
    </ul>
  </li>
  
  <li class="treeview">
    <a href="{{ asset ('#' )  }}">
      <i class="fa fa-dashboard"></i> <span>Pengumuman</span>
    </a>
  </li>
</ul>
@endsection