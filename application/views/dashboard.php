<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@kursus12Desain</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>templates/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>templates/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()?>templates/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="<?php echo base_url()?>templates/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()?>templates/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a class="site_title"><i class="fa fa-instagram"></i> <span>Kursus12Design</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                
              </div>
              <div class="profile_info">
                <img style="margin-left: 40px" src="<?php echo base_url()?>gambar/ish.png" width="120">
                
              </div>
            </div>
            <!-- /menu profile quick info -->



            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  
                </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>

              </div>
              <center>
                  <span>Username <?php echo ucfirst($this->session->userdata('username')); ?></span>
                </center>



              <ul class="nav navbar-nav navbar-right">
                  

               

                <li><?php echo anchor('login/logout','Logout');?></i></li>
                

                
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <marquee> Selamat Datang Sebagai Kepala Sekolah KURSUS12DESIGN !!! Selamat Datang Sebagai Kepala Sekolah KURSUS12DESIGN !!! Selamat Datang Sebagai Kepala Sekolah KURSUS12DESIGN !!! Selamat Datang Sebagai Kepala Sekolah KURSUS12DESIGN !!! Selamat Datang Sebagai Kepala Sekolah KURSUS12DESIGN !!! Selamat Datang Sebagai Kepala Sekolah KURSUS12DESIGN !!! Selamat Datang Sebagai Kepala Sekolah KURSUS12DESIGN !!! Selamat Datang Sebagai Kepala Sekolah KURSUS12DESIGN !!! Selamat Datang Sebagai Kepala Sekolah KURSUS12DESIGN !!! Selamat Datang Sebagai Kepala Sekolah KURSUS12DESIGN !!! Selamat Datang Sebagai Kepala Sekolah KURSUS12DESIGN !!! Selamat Datang Sebagai Kepala Sekolah KURSUS12DESIGN !!!</marquee>
          <div class="">
              <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Murid </h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">ID </th>
                            <th class="column-title">NAMA MURID</th>
                            <th class="column-title">KELAS </th>
                            <th class="column-title">PASSWORD </th>
                            <th class="column-title">ACTION </th>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                         <?php
                           foreach ($siswa as $siswa ) {
                           ?>
                            <td><?php echo $siswa->id; ?></td>
                            <td><?php echo $siswa->nama; ?></td>
                            <td><?php echo $siswa->kelas; ?></td>
                            <td><?php echo $siswa->password; ?></td>
                            <td>
                            <a href="<?php echo base_url();?>index.php/beranda/linkeditdata/<?php echo $siswa->id; ?>"><span class="glyphicon glyphicon-pencil"> Ubah Data</span></a>
                            <p>   </p>
                            <a href="<?php echo base_url();?>index.php/beranda/deletesiswa/<?php echo $siswa->id ?>"><span class="glyphicon glyphicon-remove"> Hapus</span></a>
                            </td>  
                            </tr>   
                           <?php
                           }
                           ?>
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                      <center>
                      <button>
                          <a href="<?php echo base_url();?>index.php/beranda/linktambahdata">
                          <span class="glyphicon glyphicon-plus">Tambah Murid</span>
                          </a>
                          </button></center>
                    </div>
                  </div>
                </div>
              </div>


              <br><br><br>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Guru</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">ID </th>
                            <th class="column-title">NAMA GURU </th>
                            <th class="column-title">MAPEL </th>
                            <th class="column-title">JUMLAH JAM </th>
                            <th class="column-title">GAJI </th>
                            <th class="column-title">ACTION </th>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                         <?php
                           foreach ($guru as $guru ) {
                           ?>
                            <td><?php echo $guru->guru_id; ?></td>
                            <td><?php echo $guru->nama; ?></td>
                            <td><?php echo $guru->mapel; ?></td>
                            <td><?php echo $guru->jam; ?></td>
                            <td><?php echo $guru->gaji; ?></td>
                            <td>
                            <a href="<?php echo base_url();?>index.php/beranda/linkeditdataguru/<?php echo $guru->guru_id; ?>"><span class="glyphicon glyphicon-pencil"> Ubah Data</span></a>
                            <p>   </p>
                            <a href="<?php echo base_url();?>index.php/beranda/deleteguru/<?php echo $guru->guru_id ?>"><span class="glyphicon glyphicon-remove"> Hapus</span></a>
                            </td>  
                            </tr>   
                           <?php
                           }
                           ?>
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                      <center>
                      <button>
                          <a href="<?php echo base_url();?>index.php/beranda/linktambahdataguru">
                          <span class="glyphicon glyphicon-plus">Tambah Guru</span>
                          </a>
                          </button></center>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url()?>templates//vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url()?>templates/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()?>templates/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url()?>templates/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url()?>templates/vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>templates/build/js/custom.min.js"></script>
  </body>
</html>