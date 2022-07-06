<?php
//membuat var session
$user = $_SESSION['MEMBER'];
?>
<!-- ====== Navbar Section Start -->
<div class="
        ud-header
        absolute
        top-0
        left-0
        z-40
        w-full
        flex
        items-center
      ">
  <div class="container">
    <div class="flex -mx-4 items-center justify-between relative">
      <div class="px-4 w-60 max-w-full">
        <a href="index.php?hal=home" class="navbar-logo w-full block py-5">
          <img src="assets/images/logo/logo-white.svg" alt="logo" class="w-full header-logo" />
        </a>
      </div>
      <div class="flex px-4 justify-between items-center w-full">
        <div>
          <button id="navbarToggler" class="
                  block
                  absolute
                  right-4
                  top-1/2
                  -translate-y-1/2
                  lg:hidden
                  focus:ring-2
                  ring-primary
                  px-3
                  py-[6px]
                  rounded-lg
                ">
            <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
            <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
            <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
          </button>
          <nav id="navbarCollapse" class="
                  absolute
                  py-5
                  lg:py-0 lg:px-4
                  xl:px-6
                  bg-white
                  lg:bg-transparent
                  shadow-lg
                  rounded-lg
                  max-w-[250px]
                  w-full
                  lg:max-w-full lg:w-full
                  right-4
                  top-full
                  hidden
                  lg:block lg:static lg:shadow-none
                ">
            <ul class="blcok lg:flex">
              <li class="relative group">
                <a href="index.php?hal=home" class="
                        text-base text-dark
                        lg:text-white
                        lg:group-hover:opacity-70
                        lg:group-hover:text-white
                        group-hover:text-primary
                        py-2
                        lg:py-6 lg:inline-flex lg:px-0
                        flex
                        mx-8
                        lg:mr-0
                      ">
                  Home
                </a>
              </li>
              <li class="relative group">
                <a href="#features" class="
                        ud-menu-scroll
                        text-base text-dark
                        lg:text-white
                        lg:group-hover:opacity-70
                        lg:group-hover:text-white
                        group-hover:text-primary
                        py-2
                        lg:py-6 lg:inline-flex lg:px-0
                        flex
                        mx-8
                        lg:mr-0 lg:ml-7
                        xl:ml-12
                      ">
                  Features
                </a>
              </li>
              <li class="relative group">
                <a href="#about" class="
                        ud-menu-scroll
                        text-base text-dark
                        lg:text-white
                        lg:group-hover:opacity-70
                        lg:group-hover:text-white
                        group-hover:text-primary
                        py-2
                        lg:py-6 lg:inline-flex lg:px-0
                        flex
                        mx-8
                        lg:mr-0 lg:ml-7
                        xl:ml-12
                      ">
                  About
                </a>
              </li>

              <li class="relative group">
                <a href="#team" class="
                        ud-menu-scroll
                        text-base text-dark
                        lg:text-white
                        lg:group-hover:opacity-70
                        lg:group-hover:text-white
                        group-hover:text-primary
                        py-2
                        lg:py-6 lg:inline-flex lg:px-0
                        flex
                        mx-8
                        lg:mr-0 lg:ml-7
                        xl:ml-12
                      ">
                  Team
                </a>
              </li>

              <li class="relative group submenu-item">
                <a href="javascript:void(0)" class="
                        text-base text-dark
                        lg:text-white
                        lg:group-hover:opacity-70
                        lg:group-hover:text-white
                        group-hover:text-primary
                        py-2
                        lg:py-6 lg:inline-flex lg:pl-0 lg:pr-4
                        flex
                        mx-8
                        lg:mr-0 lg:ml-8
                        xl:ml-12
                        relative
                        after:absolute
                        after:w-2
                        after:h-2
                        after:border-b-2
                        after:border-r-2
                        after:border-current
                        after:rotate-45
                        lg:after:right-0
                        after:right-1
                        after:top-1/2
                        after:-translate-y-1/2
                        after:mt-[-2px]
                      ">
                  Additional
                </a>
                <div class="
                        submenu
                        hidden
                        relative
                        lg:absolute
                        w-[250px]
                        top-full
                        lg:top-[110%]
                        left-0
                        rounded-sm
                        lg:shadow-lg
                        p-4
                        lg:block lg:opacity-0 lg:invisible
                        group-hover:opacity-100
                        lg:group-hover:visible lg:group-hover:top-full
                        bg-white
                        transition-[top]
                        duration-300
                      ">
                  <a href="index.php?hal=gudang" class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                    Gudang
                  </a>
                  <a href="index.php?hal=produk" class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                    Produk
                  </a>
                  <a href="index.php?hal=pembelian" class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                    Pembelian
                  </a>
                  <a href="index.php?hal=pemasok" class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                    Pemasok
                  </a>
                  <a href="index.php?hal=detail_pembelian" class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                    Detail Pembelian
                  </a>
                  <a href="index.php?hal=contact" class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                    Contact
                  </a>
                </div>
              </li>
            </ul>
          </nav>
        </div>
        <?php
        if (!isset($user)) { //--------------jika belum login tampil menu login----------------------
        ?>
          <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
            <a href="index.php?hal=login" class="
                  text-base
                  font-medium
                  text-white
                  bg-white bg-opacity-20
                  rounded-lg
                  py-3
                  px-6
                  hover:bg-opacity-100 hover:text-dark
                  signUpBtn
                  duration-300
                  ease-in-out
                ">
              Sign In
            </a>
          </div>
        <?php
        } else { //--------------jika berhasil login tampil data user----------------------    
        ?>
          <li class="relative group submenu-item">
            <a href="javascript:void(0)" class="
                        text-base text-dark
                        lg:text-white
                        lg:group-hover:opacity-70
                        lg:group-hover:text-white
                        group-hover:text-primary
                        py-2
                        lg:py-6 lg:inline-flex lg:pl-0 lg:pr-4
                        flex
                        mx-8
                        lg:mr-0 lg:ml-8
                        xl:ml-12
                        relative
                        after:absolute
                        after:w-2
                        after:h-2
                        after:border-b-2
                        after:border-r-2
                        after:border-current
                        after:rotate-45
                        lg:after:right-0
                        after:right-1
                        after:top-1/2
                        after:-translate-y-1/2
                        after:mt-[-2px]
                      ">
              <?= $user['username'] ?> - <?= $user['role'] ?>
            </a>
            <div class="
                        submenu
                        hidden
                        relative
                        lg:absolute
                        w-[250px]
                        top-full
                        lg:top-[110%]
                        left-0
                        rounded-sm
                        lg:shadow-lg
                        p-4
                        lg:block lg:opacity-0 lg:invisible
                        group-hover:opacity-100
                        lg:group-hover:visible lg:group-hover:top-full
                        bg-white
                        transition-[top]
                        duration-300
                      ">
              <?php
              if ($role == 'admin') {
              ?>
                <a href="index.php?hal=gudang" class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                  Kelola User
                </a>
              <?php
              }
              ?>
              <a href="index.php?hal=produk" class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                Profile
              </a>
              <a href="logout.php" class="
                          block
                          text-sm text-body-color
                          rounded
                          hover:text-primary
                          py-[10px]
                          px-4
                        ">
                Log out
              </a>
            </div>
          </li>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<!-- ====== Navbar Section End -->