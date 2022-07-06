<!-- ====== Banner Section Start -->
<div class="
        relative
        z-10
        pt-[120px]
        md:pt-[130px]
        lg:pt-[160px]
        pb-[100px]
        bg-primary
        overflow-hidden
      ">
    <div class="container">
        <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full px-4">
                <div class="text-center">
                    <h1 class="font-semibold text-white text-4xl">Pemasok Page</h1>
                </div>
            </div>
        </div>
    </div>
    <div>
        <span class="absolute top-0 left-0 z-[-1]">
            <svg width="495" height="470" viewBox="0 0 495 470" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="55" cy="442" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
                <circle cx="446" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
                <path d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z" stroke="white" stroke-opacity="0.08" stroke-width="12" />
            </svg>
        </span>
        <span class="absolute top-0 right-0 z-[-1]">
            <svg width="493" height="470" viewBox="0 0 493 470" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="462" cy="5" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
                <circle cx="49" cy="470" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
                <path d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z" stroke="white" stroke-opacity="0.06" stroke-width="13" />
            </svg>
        </span>
    </div>
</div>
<!-- ====== Banner Section End -->

<!-- ====== Team Section Start -->
<section id="team" class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] max-w-[620px]">
                    <span class="font-semibold text-lg text-primary mb-2 block">
                        Our Team
                    </span>
                    <h2 class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[42px]
                  text-dark
                  mb-4
                ">
                        Meet Our Team
                    </h2>
                    <p class="
                  text-lg
                  sm:text-xl
                  leading-relaxed
                  sm:leading-relaxed
                  text-body-color
                ">
                        There are many variations of passages of Lorem Ipsum available
                        but the majority have suffered alteration in some form.
                    </p>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-center -mx-4">
            <!-- Data pemasok -->
            <?php
            //ciptakan object dari class pemasok
            $obj = new Pemasok();
            //panggil fungsi menampilkan data pemasok
            $rs = $obj->getAll();
            //looping data pemasok
            foreach ($rs as $p) {
            ?>
                <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
                    <div class="mb-10 wow fadeInUp" data-wow-delay=".1s">
                        <div class="
                  relative
                  w-[170px]
                  h-170px]
                  rounded-full
                  z-10
                  mx-auto
                  mb-6
                ">
                            <img src="assets/images/team/team-01.png" alt="image" class="w-full rounded-full" />
                            <span class="absolute top-0 left-0 z-[-1]">
                                <svg width="71" height="82" viewBox="0 0 71 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="1.29337" cy="80.7066" r="1.29337" transform="rotate(-90 1.29337 80.7066)" fill="#3056D3" />
                                    <circle cx="12.6747" cy="80.7066" r="1.29337" transform="rotate(-90 12.6747 80.7066)" fill="#3056D3" />
                                    <circle cx="24.0575" cy="80.7066" r="1.29337" transform="rotate(-90 24.0575 80.7066)" fill="#3056D3" />
                                    <circle cx="35.4379" cy="80.7066" r="1.29337" transform="rotate(-90 35.4379 80.7066)" fill="#3056D3" />
                                    <circle cx="46.8197" cy="80.7066" r="1.29337" transform="rotate(-90 46.8197 80.7066)" fill="#3056D3" />
                                    <circle cx="68.807" cy="80.7066" r="1.29337" transform="rotate(-90 68.807 80.7066)" fill="#3056D3" />
                                    <circle cx="57.9443" cy="80.7066" r="1.29337" transform="rotate(-90 57.9443 80.7066)" fill="#3056D3" />
                                    <circle cx="1.29337" cy="69.3249" r="1.29337" transform="rotate(-90 1.29337 69.3249)" fill="#3056D3" />
                                    <circle cx="12.6747" cy="69.3249" r="1.29337" transform="rotate(-90 12.6747 69.3249)" fill="#3056D3" />
                                    <circle cx="24.0575" cy="69.3249" r="1.29337" transform="rotate(-90 24.0575 69.3249)" fill="#3056D3" />
                                    <circle cx="35.4379" cy="69.3249" r="1.29337" transform="rotate(-90 35.4379 69.3249)" fill="#3056D3" />
                                    <circle cx="46.8197" cy="69.325" r="1.29337" transform="rotate(-90 46.8197 69.325)" fill="#3056D3" />
                                    <circle cx="68.807" cy="69.325" r="1.29337" transform="rotate(-90 68.807 69.325)" fill="#3056D3" />
                                    <circle cx="57.9433" cy="69.325" r="1.29337" transform="rotate(-90 57.9433 69.325)" fill="#3056D3" />
                                    <circle cx="1.29337" cy="57.9433" r="1.29337" transform="rotate(-90 1.29337 57.9433)" fill="#3056D3" />
                                    <circle cx="1.29337" cy="24.0568" r="1.29337" transform="rotate(-90 1.29337 24.0568)" fill="#3056D3" />
                                    <circle cx="12.6747" cy="57.9433" r="1.29337" transform="rotate(-90 12.6747 57.9433)" fill="#3056D3" />
                                    <circle cx="12.6747" cy="24.0568" r="1.29337" transform="rotate(-90 12.6747 24.0568)" fill="#3056D3" />
                                    <circle cx="24.0575" cy="57.9433" r="1.29337" transform="rotate(-90 24.0575 57.9433)" fill="#3056D3" />
                                    <circle cx="24.0575" cy="24.0568" r="1.29337" transform="rotate(-90 24.0575 24.0568)" fill="#3056D3" />
                                    <circle cx="35.4379" cy="57.9433" r="1.29337" transform="rotate(-90 35.4379 57.9433)" fill="#3056D3" />
                                    <circle cx="35.4379" cy="24.0568" r="1.29337" transform="rotate(-90 35.4379 24.0568)" fill="#3056D3" />
                                    <circle cx="46.8197" cy="57.9431" r="1.29337" transform="rotate(-90 46.8197 57.9431)" fill="#3056D3" />
                                    <circle cx="46.8197" cy="24.0567" r="1.29337" transform="rotate(-90 46.8197 24.0567)" fill="#3056D3" />
                                    <circle cx="68.807" cy="57.9431" r="1.29337" transform="rotate(-90 68.807 57.9431)" fill="#3056D3" />
                                    <circle cx="68.807" cy="24.0567" r="1.29337" transform="rotate(-90 68.807 24.0567)" fill="#3056D3" />
                                    <circle cx="57.9433" cy="57.9431" r="1.29337" transform="rotate(-90 57.9433 57.9431)" fill="#3056D3" />
                                    <circle cx="57.9443" cy="24.0567" r="1.29337" transform="rotate(-90 57.9443 24.0567)" fill="#3056D3" />
                                    <circle cx="1.29337" cy="46.5615" r="1.29337" transform="rotate(-90 1.29337 46.5615)" fill="#3056D3" />
                                    <circle cx="1.29337" cy="12.6751" r="1.29337" transform="rotate(-90 1.29337 12.6751)" fill="#3056D3" />
                                    <circle cx="12.6747" cy="46.5615" r="1.29337" transform="rotate(-90 12.6747 46.5615)" fill="#3056D3" />
                                    <circle cx="12.6747" cy="12.6751" r="1.29337" transform="rotate(-90 12.6747 12.6751)" fill="#3056D3" />
                                    <circle cx="24.0575" cy="46.5615" r="1.29337" transform="rotate(-90 24.0575 46.5615)" fill="#3056D3" />
                                    <circle cx="24.0575" cy="12.6751" r="1.29337" transform="rotate(-90 24.0575 12.6751)" fill="#3056D3" />
                                    <circle cx="35.4379" cy="46.5615" r="1.29337" transform="rotate(-90 35.4379 46.5615)" fill="#3056D3" />
                                    <circle cx="35.4379" cy="12.6751" r="1.29337" transform="rotate(-90 35.4379 12.6751)" fill="#3056D3" />
                                    <circle cx="46.8197" cy="46.5615" r="1.29337" transform="rotate(-90 46.8197 46.5615)" fill="#3056D3" />
                                    <circle cx="46.8197" cy="12.6751" r="1.29337" transform="rotate(-90 46.8197 12.6751)" fill="#3056D3" />
                                    <circle cx="68.807" cy="46.5615" r="1.29337" transform="rotate(-90 68.807 46.5615)" fill="#3056D3" />
                                    <circle cx="68.807" cy="12.6751" r="1.29337" transform="rotate(-90 68.807 12.6751)" fill="#3056D3" />
                                    <circle cx="57.9433" cy="46.5615" r="1.29337" transform="rotate(-90 57.9433 46.5615)" fill="#3056D3" />
                                    <circle cx="57.9443" cy="12.6751" r="1.29337" transform="rotate(-90 57.9443 12.6751)" fill="#3056D3" />
                                    <circle cx="1.29337" cy="35.1798" r="1.29337" transform="rotate(-90 1.29337 35.1798)" fill="#3056D3" />
                                    <circle cx="1.29337" cy="1.2933" r="1.29337" transform="rotate(-90 1.29337 1.2933)" fill="#3056D3" />
                                    <circle cx="12.6747" cy="35.1798" r="1.29337" transform="rotate(-90 12.6747 35.1798)" fill="#3056D3" />
                                    <circle cx="12.6747" cy="1.2933" r="1.29337" transform="rotate(-90 12.6747 1.2933)" fill="#3056D3" />
                                    <circle cx="24.0575" cy="35.1798" r="1.29337" transform="rotate(-90 24.0575 35.1798)" fill="#3056D3" />
                                    <circle cx="24.0575" cy="1.29336" r="1.29337" transform="rotate(-90 24.0575 1.29336)" fill="#3056D3" />
                                    <circle cx="35.4379" cy="35.1798" r="1.29337" transform="rotate(-90 35.4379 35.1798)" fill="#3056D3" />
                                    <circle cx="35.4379" cy="1.29336" r="1.29337" transform="rotate(-90 35.4379 1.29336)" fill="#3056D3" />
                                    <circle cx="46.8197" cy="35.18" r="1.29337" transform="rotate(-90 46.8197 35.18)" fill="#3056D3" />
                                    <circle cx="46.8197" cy="1.29354" r="1.29337" transform="rotate(-90 46.8197 1.29354)" fill="#3056D3" />
                                    <circle cx="68.807" cy="35.18" r="1.29337" transform="rotate(-90 68.807 35.18)" fill="#3056D3" />
                                    <circle cx="68.807" cy="1.29354" r="1.29337" transform="rotate(-90 68.807 1.29354)" fill="#3056D3" />
                                    <circle cx="57.9443" cy="35.18" r="1.29337" transform="rotate(-90 57.9443 35.18)" fill="#3056D3" />
                                    <circle cx="57.9443" cy="1.29354" r="1.29337" transform="rotate(-90 57.9443 1.29354)" fill="#3056D3" />
                                </svg>
                            </span>
                            <span class="absolute right-0 bottom-0">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z" stroke="#13C296" />
                                </svg>
                            </span>
                        </div>
                        <div class="text-center">
                            <h4 class="font-medium text-lg text-dark mb-2">
                                <?= $p['nama'] ?>
                            </h4>
                            <p class="font-medium text-sm text-body-color mb-5">
                                <?= $p['alamat'] ?>
                            </p>
                            <p class="font-medium text-sm text-body-color mb-5">
                                <?= $p['no_telp'] ?>
                            </p>
                            <div class="flex items-center justify-center">
                                <div class="flex">
                                    <?php
                                    if (isset($user)) {
                                        if ($role != 'pelanggan') {
                                    ?>
                                            <a href="index.php?hal=edit_pemasok&id=<?= $p['id'] ?>" class="bg-primary
                                        rounded
                                        inline-block
                                        text-center
                                        py-1
                                        px-4
                                        text-xs
                                        leading-loose
                                        font-semibold
                                        text-white
                                        mb-5">Edit</a>
                                            <form action="pemasokController.php" method="post">
                                                <button type="submit" name="proses" value="hapus" class="bg-black
                                        rounded
                                        inline-block
                                        text-center
                                        py-1
                                        px-4
                                        text-xs
                                        leading-loose
                                        font-semibold
                                        text-white
                                        mb-5" onclick="return confirm('anda yakin data hapus?')">Hapus</button>
                                                <input type="hidden" name="idx" value="<?= $p['id'] ?>">
                                            </form>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="text-center mx-auto mb-[60px] max-w-[620px] mt-4">
            <?php
            if (isset($user)) {
                if ($role != 'pelanggan') {
            ?>
                    <span class="font-semibold text-lg text-white bg-primary mb-2 block py-4 px-6 rounded">
                        <a href="index.php?hal=form_pemasok" class="text-center mx-auto mt-4">Tambah</a>
                    </span>
            <?php }
            }
            ?>
        </div>
    </div>

</section>
<!-- ====== Team Section End -->